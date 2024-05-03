<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Plan;
use App\Models\UserPages;
use App\Models\UserPlan;
use App\Models\User;
use Illuminate\Support\Str;
use App\Mail\AccessCodeEmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
class PageController extends Controller
{
    //

    public function creat_a_page()
    {
        $plans = Plan::latest()->get(); // Execute the query to fetch plans
        return view('Frontend.creat_a_page', compact('plans')); // Pass the plans to the view
    }
    

    
    public function save_create_page(Request $request){
        // Validate the request data as needed
    
        // Check if the email already exists
        $existingUser = User::where('email', $request->email)->first();
    
        // If the email already exists, redirect back with a flash message
        if ($existingUser) {
            return redirect()->back()->with('error', 'Email already exists. Please choose a different email.');
        }
    
        // Create a new user instance
        $user = new User;
        $user->role = 1;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->is_active = 1;
        $user->no_of_memorial_pages = 1;
        $user->relationship = $request->relationship;
    
        // Generate a random access code
        $accessCode = Str::random();
    
        // Hash the access code and store it in the database
        $user->access_code = Hash::make($accessCode);
    
        // Save the user to the database
        if ($user->save()) {
            // Find the selected plan
            $selectedPlan = Plan::find($request->to_buy_plan_id);
    
            // Create a new user page instance
            $user_page = new UserPages;
            $user_page->first_name = $request->firstname;
            $user_page->last_name = $request->lastname;
            $user_page->date_of_death = $request->dateofdeath;
            $user_page->date_of_birth = $request->dateofbirth;
            $user_page->middle_name = $request->middlename;
            $user_page->memorial_web_address = $request->memorialaddress;
            $user_page->page_type = $request->page_type; // Use directly from the request
            $user_page->plan_id = $request->to_buy_plan_id;
            $user_page->privacy_policy = $request->visible_only_to_me ? 1 : 0; // Assuming this field is boolean
            $user_page->name_of_card = $request->name_on_card;
            $user_page->credit_card = $request->credit_card;
            $user_page->total_amount = $selectedPlan->price; // Assign the price of the selected plan
            $user_page->name = $user->name; // Use the user's name
            $user_page->email = $user->email; // Use the user's email
    
            // Save the user page to the database
            if ($user_page->save()) {
                // Create a new user plan instance
                $user_plan = new UserPlan;
                $user_plan->user_id = $user->id;
                $user_plan->page_id =  $user_page->id;
                $user_plan->plan_id = $selectedPlan->id;
                $user_plan->total_amount = $selectedPlan->price;
    
                // Save the user plan to the database
                if ($user_plan->save()) {
                    // Send the access code in plaintext via email
                    Mail::to($user->email)->send(new AccessCodeEmail($accessCode));
                    // Redirect to the login page
                    return redirect()->route('login');
                }
            }
        }
    
        // Redirect back with a generic error message if any of the saves fail
        return redirect()->back()->with('error', 'Something went wrong. Please try again.');
    }
    
        
    public function pageone(){
        return view('Frontend.pageone');
    }

    public function delete_page($id) {
        $page = UserPages::find($id);
    
        if ($page) {
            $page->delete();
    
            // Delete associated user plans
            $userPlans = UserPlan::where('plan_id', $id)->get();
            foreach ($userPlans as $userPlan) {
                $userPlan->delete();
            }
    
            return response()->json(['success' => true, 'message' => 'Page deleted successfully']);
        } else {
            return response()->json(['success' => false, 'message' => 'Page not found or could not be deleted'], 404);
        }
    }
    
    

        
}

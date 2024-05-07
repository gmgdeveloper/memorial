<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Plan;
use App\Models\UserPages;
use App\Models\UserPlan;
use App\Models\User;
use Illuminate\Support\Str;
use App\Mail\AccessCodeEmail;
use App\Models\BannerImage;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use App\Models\Media;

class PageController extends Controller
{
    //

    public function creat_a_page()
    {
        $plans = Plan::latest()->get(); // Execute the query to fetch plans
        return view('Frontend.creat_a_page', compact('plans')); // Pass the plans to the view
    }


    public function pageone()
    {
        $banner_image = Media::where('memorial_id', auth()->user()->id)->first();
        $title_page = BannerImage::where('user_id', auth()->user()->id)->first();
    
        if ($banner_image && $title_page) {
            $banner_image_path = $banner_image->file_path;
            $title_page_name = $title_page->name;
            $over_view = $title_page->over_view; // Assuming 'over_view' is a column in your BannerImage table
    
            return view('Frontend.pageone', compact('banner_image_path', 'title_page_name', 'over_view'));
        } else {
            // Handle case when either $banner_image or $title_page is null
            return view('Frontend.pageone');
        }
    }
    



    public function save_create_page(Request $request)
    {
        // Validate the request data as needed

        // dd($request->all());

        // Check if the email already exists
        $existingUser = User::where('email', $request->email)->first();

        // If the email already exists, redirect back with a flash message
        if ($existingUser) {
            return redirect()->back()->with('error', 'Email already exists. Please choose a different email.');
        }

        // Create a new user instance
        $user = new User;
        $user->email = $request->email;
        $user->name = $request->firstname;
        $user->password = Hash::make($request->password); // Hash the password
        $user->mobilephone = $request->mobilephone;
        $user->buildingname = $request->buildingname;
        $user->street = $request->street;
        $user->suburb = $request->suburb;
        $user->postcode = $request->postcode;
        $user->state  = $request->state;
        $user->country = $request->country;
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




    public function delete_page($id)
    {
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



    public function bange_image(Request $request)
    {


        if (!empty($request->memorail_title)) {
            $bannerImage = BannerImage::where('user_id', auth()->user()->id)->first();
        
            if (empty($bannerImage)) {
               
                $media = new  Media;
                $media->memorial_id = auth()->user()->id;
                $media->save();
                // If $bannerImage is empty, create a new BannerImage instance and save it
                $bannerImage = new BannerImage;
                $bannerImage->name = $request->memorail_title;
                $bannerImage->user_id = auth()->user()->id;
                $bannerImage->media_id = $media->id;
                
                $bannerImage->save();
                
            } else {
                // If $bannerImage is not empty, update its name
                $bannerImage->name = $request->memorail_title;
                $bannerImage->save();
            }
        }
        


        if (!empty($request->image)) {
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust max file size as needed
            ]);

            // Get the uploaded file
            $image = $request->file('image');

            // Generate a unique filename for the image
            $imageName = uniqid() . '.' . $image->getClientOriginalExtension();

            // Move the uploaded file to the public directory
            if ($image->move(public_path('/Media/BannerImge'), $imageName)) {
                // Construct the file path
                $imagePath = '/Media/BannerImge/' . $imageName;

                // Update the media record in the database for the current user
                Media::where('memorial_id', auth()->user()->id)->update(['file_path' => $imagePath]);

                // Return the updated image path
                return response()->json(['image_path' => asset($imagePath)]);
            } else {
                // Invalid file upload
                return response()->json(['error' => 'Failed to move uploaded image'], 500);
            }
        }

        // dd($request->all());

        if(!empty($request->over_view)){
            $over_view = BannerImage::where('user_id', auth()->user()->id)->first();

            if ($over_view) {
                $over_view->over_view = $request->over_view;
                $over_view->save();
            } else {
                // Handle case where no banner image is found for the user
                return redirect()->back();
               
            }
        }







        
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Validator;
use App\Models\Plan;
use App\Models\UserPages;
use App\Models\UserPlan;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    //

    public function getallusers(){
        $users = User::latest()->get();
        return view('admin.users')->with('users', $users);
        // Or using the direct array passing method:
        // return view('admin.users', ['users' => $users]);
    }
    

    public function delete_user($id)
    {

        
        // Find the user by ID
        $user = User::find($id);

        // Check if the user exists
        if (!$user) {
            return response()->json(['error' => 'User not found.'], 404);
        }

        try {
            // Delete the user
            $user->delete();

            // Return success response
            return response()->json(['message' => 'User deleted successfully.']);
        } catch (\Exception $e) {
            // Return error response
            return response()->json(['error' => 'Failed to delete user.'], 500);
        }
    }




    public function display_user($id)
    {
        $user = User::find($id);
    
        return view('admin.edit_user', compact('user'));
    }

  
    
    public function update_user(Request $request, $id)
    {
        // Find the user by ID
        $user = User::findOrFail($id);
    
        // Validate the incoming request data
        $request->validate([
            'role' => 'required|in:visitor,page_administrator,user',
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'no_of_memorial_pages' => 'nullable|string',
            'is_active' => 'required|in:0,1', // Validate the 'is_active' field
        ]);
    
        // Update the user's attributes
        $user->role = $request->input('role');
        $user->name = $request->input('name');
        $user->username = $request->input('username');
        $user->email = $request->input('email');
        $user->no_of_memorial_pages = $request->input('no_of_memorial_pages');
        $user->is_active = $request->input('is_active'); // Assign the 'is_active' field
    
        // Save the updated user data
        $user->save();
    
        // Redirect back to the user's edit page or any other desired location
        return redirect()->route('admin.getallusers', $user->id)->with('success', 'User updated successfully');
    }

    


public function page_created(){
    $userpages = UserPages::latest()->get();

    return view('admin.pages.index',compact('userpages'));

}
    


public function userpagehistory($id){
    $userhistory = UserPages::find($id);

}



public function page_history($id){
    // Retrieve user plans based on user ID
    $userPlans = UserPlan::where('user_id', $id)->get();

    // Collect all page IDs associated with user plans
    $pageIds = [];
    foreach ($userPlans as $userPlan) {
        $pageIds[] = $userPlan->page_id;
    }

    // Retrieve user pages based on all collected page IDs
    $plans = UserPages::whereIn('id', $pageIds)->get();


    

    // Return the view with the retrieved user pages
    return view('admin.pages.history', compact('plans'));
}












// public function frontend_login(Request $request)
// {
//     // Validate the incoming request data
//     $validatedData = $request->validate([
//         'email' => 'required|email',
//         'accesscode' => 'required|string'
//     ]);

//     // Check if a user with the provided email and access code exists
//     $user = DB::table('users')
//                 ->where('email', $validatedData['email'])
//                 ->first();

//     if ($user) {
//         // Verify the access code
//         if (Hash::check($validatedData['accesscode'], $user->access_code)) {
//             // Authentication successful
//             // You can perform any additional actions here, such as setting session data or logging in the user
//             return response()->json(['success' => true, 'message' => 'Login successful'], 200);
//         } else {
//             // Access code does not match
//             return response()->json(['success' => false, 'message' => 'Invalid access code'], 401);
//         }
//     } else {
//         // User not found
//         return response()->json(['success' => false, 'message' => 'User not found'], 404);
//     }
// }



public function frontend_login(Request $request)
{
    // Validate the incoming request data
    $validatedData = $request->validate([
        'email' => 'required|email',
        'accesscode' => 'required|string'
    ]);

    // Check if a user with the provided email and access code exists
    $user = DB::table('users')
                ->where('email', $validatedData['email'])
                ->first();

    if ($user) {
        // Verify the access code
        if (Hash::check($validatedData['accesscode'], $user->access_code)) {
            // Regenerate the session ID
            $request->session()->regenerate();

            // Log in the user with the updated session ID
            Auth::loginUsingId($user->id);

            // Now you can access the authenticated user
            $authenticatedUser = auth()->user();


            // Authentication successful
            // You can perform any additional actions here, such as setting session data or logging in the user
            return response()->json(['success' => true, 'message' => 'Login successful'], 200);
        } else {
            // Access code does not match
            return response()->json(['success' => false, 'message' => 'Invalid access code'], 401);
        }
    } else {
        // User not found
        return response()->json(['success' => false, 'message' => 'User not found'], 404);
    }
}









}

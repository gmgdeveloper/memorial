<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Validator;
use App\Models\Plan;
use App\Models\UserPages;
use App\Models\UserPlan;
use App\Models\RequestAccess;
use App\Models\Audio;
use App\Models\Relationship;
use App\Models\BannerImage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use App\Mail\GiveAccessMail;
use App\Models\Media;
use App\Models\Quote;
use App\Models\GaneralSetting;

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
//             // Regenerate the session ID
//             $request->session()->regenerate();

//             // Log in the user with the updated session ID
//             Auth::loginUsingId($user->id);

//             // Now you can access the authenticated user
//             $authenticatedUser = auth()->user();


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

// public function frontend_login(Request $request)
// {
//     // Validate the incoming request data
//     $validatedData = $request->validate([
//         'email' => 'required|email',
//         'accesscode' => 'nullable|string',
//         'password' => 'nullable|string',
//     ]);

//     // Check if a user with the provided email exists
//     $user = DB::table('users')
//                 ->where('email', $validatedData['email'])
//                 ->first();

//     if ($user) {
//         // Check if either access code or password is provided
//         if ($validatedData['accesscode']) {
//             // Verify the access code
//             if (Hash::check($validatedData['accesscode'], $user->access_code)) {
//                 // Access code authentication successful
//                 // Regenerate the session ID
//                 $request->session()->regenerate();
//                 // Log in the user with the updated session ID
//                 Auth::loginUsingId($user->id);
//                 return response()->json(['success' => true, 'message' => 'Login successful'], 200);
//             } else {
//                 // Access code does not match
//                 return response()->json(['success' => false, 'message' => 'Invalid access code'], 401);
//             }
//         }
        
//         elseif ($validatedData['password']) {
//             // Verify the password
//             if (Hash::check($validatedData['password'], $user->password)) {
//                 // Password authentication successful
//                 // Regenerate the session ID
//                 $request->session()->regenerate();
//                 // Log in the user with the updated session ID
//                 Auth::loginUsingId($user->id);
//                 return response()->json(['success' => true, 'message' => 'Login successful'], 200);
//             } else {
//                 // Password does not match
//                 return response()->json(['success' => false, 'message' => 'Invalid password'], 401);
//             }
//         }
        
//         else {
//             // Neither access code nor password is provided
//             return response()->json(['success' => false, 'message' => 'Access code or password is required'], 400);
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
        'emailhonuree' => 'required|email',
        // 'accesscode' => 'nullable|string',
        'password' => 'nullable|string',
    ]);

    // Check if a user with the provided email exists
    $user = DB::table('users')
                ->where('email', $validatedData['emailhonuree'])
                ->first();
    if ($user) {
        // Check if either access code or password is provided
        if ($validatedData['password']) {
            // Verify the password
            if (Hash::check($validatedData['password'], $user->password)) {
                // Password authentication successful
                // Regenerate the session ID
                $request->session()->regenerate();
                // Log in the user with the updated session ID
                Auth::loginUsingId($user->id);
                return redirect('/pageone');
            } else {
                // Password does not match
                return redirect()->back()->with('error', 'Invalid Password');
            }
        }else {
            // Neither access code nor password is provided
            return response()->json(['success' => false, 'message' => 'Password is required'], 400);
        }
    } else {
        // User not found
        return response()->json(['success' => false, 'message' => 'User not found'], 404);
    }
}




public function profile_honree(){

    $user = Auth()->user();
    // dd($user);

    return view('auth.profile',compact('user'));



}

public function update_profile(Request $request)
{
    // Validate the form data
    $request->validate([
        'name' => 'required|string|max:255',
        
        'mobilephone' => 'nullable|string|max:20',
        'state' => 'nullable|string|max:255',
        'country' => 'nullable|string|max:255',
    ]);



    // Get the authenticated user
    $user = Auth::user();

    // Update the user's profile fields
    $user->update([
        'name' => $request->name,
        'mobilephone' => $request->mobilephone,
        'state' => $request->state,
        'country' => $request->country,
    ]);

    // Redirect back with a success message
    return redirect()->back()->with('success', 'Profile updated successfully!');
}

public function login_with_access_code(Request $request)
{
    $request->validate([
        'access_code' => 'required|string', // Add validation rules as needed
    ]);

    $credentials = $request->only('access_code');

    if (Auth::attempt($credentials)) {
        // Authentication passed
        Log::info('Authentication passed');
        return redirect()->intended('/pageone'); // Redirect to intended URL or a default page
    }

    // Authentication failed
    Log::error('Authentication failed with access code: ' . $request->access_code);
    return redirect()->route('login')->with('error', 'Invalid access code');

    // $Userfindhu = RequestAccess::where('email', $request->email)->first();
    // if(!$Userfindhu){
    //     return redirect()->back()->with('error', 'Email not found');
    // }
    // $Userfindhupage = UserPages::where('legacy_page_url', $Userfindhu->legacyurl)->first();
    // if(!$Userfindhupage){
    //     return redirect()->back()->with('error', 'Legarcy Page Url not found');
    // }
    // $userfinduh = User::find($Userfindhupage->user_id);

    // if(empty($request->access_code)){
    //     return redirect()->back()->with('error', 'Please fill access code');
    // }
    // if($request->access_code == $userfinduh->access_code){
    //     $banner_image = Media::where('memorial_id', $userfinduh->id)->first();
    //     $title_page = BannerImage::where('user_id', $userfinduh->id)->first();
    //     $audio = Audio::where('memorial_id', $userfinduh->id)->first();
        
    //     $quotes = Quote::where('memorial_id', $userfinduh->id)->get(); // Fetch quotes associated with the authenticated user
    //     $relationships = Relationship::where('user_id', $userfinduh->id)->get();   
    //     $ganeral_setting = GaneralSetting::where('user_id', $userfinduh->id)->first();   
 
    //     // Assuming the existence of $banner_image, $title_page, and at least one quote is sufficient
    //     $banner_image_path = $banner_image ? $banner_image->file_path : null;
    //     $title_page_name = $title_page ? $title_page->name : null;
    //     $over_view = $title_page ? $title_page->over_view : null;

    //     // If the user has no quotes, fetch all quotes
    //     if ($quotes->isEmpty()) {
    //         $quotes = Quote::where('memorial_id', $userfinduh->id)->get();
    //     }

    //     $user_id = $userfinduh->id;
    //     $userpage = UserPlan::where('user_id', $user_id)->first(); // Retrieve the user
    //     $page_id = $userpage->page_id; // Access the page ID if the user has a page
    //     $page = UserPages::find($page_id);

    //     // dd($page);
    //     $date_of_death = $page->date_of_death ? $page->date_of_death :null;
    //     $date_of_birth = $page->date_of_birth ? $page->date_of_birth :null; 

    //     return view('Frontend.userpageone', compact('date_of_birth','date_of_death','banner_image_path', 'title_page_name', 'over_view', 'quotes','audio','relationships','ganeral_setting'));
    // }else{
    //     return redirect()->back()->with('error', 'Access code is not correct');
    // }

}

public function request_with_access_code(Request $request){
    $validatedData = $request->validate([
        'fullname' => 'required|string',
        'email' => 'required|email',
        'honouree_email' => 'required|email',
        'honouree' => 'required|string',
        'legacyurl' => 'required|url',
        'relationship' => 'required|string',
        'privacy' => 'required', // Assuming privacy and policy are checkboxes
        'policy' => 'required',
    ]);

    // Check if the honouree email exists
    $honoureeemailfind = User::where('email', $validatedData['honouree_email'])->first();
    if(!$honoureeemailfind){
        return redirect()->back()->with('error', 'Honouree Email not found');
    }

    // Check if the user's email already exists in the database
    $emailfind = RequestAccess::where('email', $validatedData['email'])->first();
    if($emailfind){
        return redirect()->back()->with('error', 'Email Already Exists');
    }

    // Check if the legacy url exists
    $legacyurlfind = UserPages::where('legacy_page_url', $validatedData['legacyurl'])->first();
    if(!$legacyurlfind){
        return redirect()->back()->with('error', 'Legacy Url not found');
    }

    // Save the request access details
    $requestaccess = new RequestAccess();
    $requestaccess->fullname = $validatedData['fullname'];
    $requestaccess->email = $validatedData['email'];
    $requestaccess->honouree_email = $validatedData['honouree_email'];
    $requestaccess->honouree = $validatedData['honouree'];
    $requestaccess->legacyurl = $validatedData['legacyurl'];
    $requestaccess->relationship = $validatedData['relationship'];
    $requestaccess->save();

    return redirect()->route('login')->with('success', 'Your request has been submitted successfully. You will receive an email confirmation shortly.');
}

public function hnotifications(){
    $notifications = RequestAccess::where('honouree_email', auth()->user()->email)->get();
    return view('Frontend.notifications',compact('notifications'));
}

public function giveaccess($id){
    $giveaccess = RequestAccess::find($id);
    $giveaccessemail = $giveaccess->email;

    Mail::to($giveaccessemail)->send(new GiveAccessMail());

    // Optionally, you can check if the email was sent successfully
    if (Mail::failures()) {
        return redirect()->back()->with('error', 'Failed to send email. Please try again.');
    } else {
        $giveaccess->update([
            'status' => 1
        ]);
        return redirect()->route('hnotifications')->with('success','You give access successfully');
    }
}








}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\Plan;
use App\Models\UserPages;
use App\Models\UserPlan;
use App\Models\User;
use Illuminate\Support\Str;
use App\Mail\AccessCodeEmail;
use App\Models\Audio;
use App\Models\Relationship;
use App\Models\BannerImage;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use App\Models\Media;
use App\Models\Quote;
use App\Models\GaneralSetting;
use App\Models\GeneralKnowledge;
use App\Models\Faqs;
use App\Models\GuestBook;
use App\Models\RequestAccess;
use App\Models\Story;
use App\Models\SoundClip;
use App\Models\Transition;
use App\Models\Obituary;
use App\Models\ObituaryBoxs;
use App\Models\Eulogy;
use App\Models\Tribute;
use App\Models\MessageFromHonouree;
use App\Models\MakeaDonation;
use App\Models\RelationandRelative;
use App\Models\History;
use App\Models\GalleryImage;
use App\Rules\MaxWordCount;


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
        $audio = Audio::where('memorial_id', auth()->user()->id)->first();
        
        $quotes = Quote::where('memorial_id', auth()->user()->id)->get(); // Fetch quotes associated with the authenticated user
        $relationships = Relationship::where('user_id', auth()->user()->id)->get();   
        $ganeral_setting = GaneralSetting::where('user_id', auth()->user()->id)->first();   

        $generalknowledges = GeneralKnowledge::where('user_id', auth()->user()->id)->get();
        $faqs = Faqs::where('user_id', auth()->user()->id)->get();
        $guestbooks = GuestBook::where('user_id', auth()->user()->id)->get();
        $requestaccess = RequestAccess::where('honouree_email', auth()->user()->email)->where('status','=',1)->get();
        $stories = Story::where('user_id', auth()->user()->id)->get();
        $soundclips = SoundClip::where('user_id', auth()->user()->id)->get();
        $transition = Transition::where('user_id', auth()->user()->id)->first();
        $obituary = Obituary::where('user_id', auth()->user()->id)->first();
        $obituaryboxes = ObituaryBoxs::where('user_id', auth()->user()->id)->first();
        $eulogy = Eulogy::where('user_id', auth()->user()->id)->first();
        $tributes = Tribute::where('user_id', auth()->user()->id)->get();
        $messageshonourees = MessageFromHonouree::where('user_id', auth()->user()->id)->get();
        $makeadonations = MakeaDonation::where('user_id', auth()->user()->id)->get();
        $relationandrelatives = RelationandRelative::where('user_id', auth()->user()->id)->get();
        $histories = History::where('user_id', auth()->user()->id)->get();
        $galleries = GalleryImage::where('user_id', auth()->user()->id)->get();
        
 
            // Assuming the existence of $banner_image, $title_page, and at least one quote is sufficient
            $banner_image_path = $banner_image ? $banner_image->file_path : null;
            $title_page_name = $title_page ? $title_page->name : null;
            $over_view = $title_page ? $title_page->over_view : null;
    
            // If the user has no quotes, fetch all quotes
            if ($quotes->isEmpty()) {
                $quotes = Quote::all();
            }

            $user_id = auth()->id();
            $userpage = UserPlan::where('user_id', $user_id)->first(); // Retrieve the user
            $page_id = $userpage->page_id; // Access the page ID if the user has a page
            $page = UserPages::find($page_id);

            // dd($page);
            $date_of_death = $page->date_of_death ? $page->date_of_death :null;
            $date_of_birth = $page->date_of_birth ? $page->date_of_birth :null; 

        
    
            return view('Frontend.pageone', compact('date_of_birth','date_of_death','banner_image_path', 'title_page_name', 'over_view', 'quotes','audio','relationships','ganeral_setting','generalknowledges','faqs','guestbooks','requestaccess','stories','soundclips','transition','obituary','obituaryboxes','eulogy','tributes','messageshonourees','makeadonations','relationandrelatives','histories','galleries'));
        
    }

 
    



    // public function save_create_page(Request $request)
    // {
    //     // Validate the request data as needed

    //     // dd($request->all());

    //     // Check if the email already exists
    //     $existingUser = User::where('email', $request->email)->first();

    //     // If the email already exists, redirect back with a flash message
    //     if ($existingUser) {
    //         return redirect()->back()->with('error', 'Email already exists. Please choose a different email.');
    //     }

    //     // Create a new user instance
    //     $user = new User;
    //     $user->email = $request->email;
    //     $user->name = $request->firstname;
    //     $user->password = Hash::make($request->password); // Hash the password
    //     $user->mobilephone = $request->mobilephone;
    //     $user->buildingname = $request->buildingname;
    //     $user->street = $request->street;
    //     $user->suburb = $request->suburb;
    //     $user->postcode = $request->postcode;
    //     $user->state  = $request->state;
    //     $user->country = $request->country;
    //     $user->role = 1;
    //     $user->name = $request->name;
    //     $user->email = $request->email;
    //     $user->is_active = 1;
    //     $user->no_of_memorial_pages = 1;
    //     $user->relationship = $request->relationship;


    //     // Generate a random access code
    //     $accessCode = Str::random();

    //     // Hash the access code and store it in the database
    //     // $user->access_code = Hash::make($accessCode);
    //     $user->access_code = $accessCode;

    //     // Save the user to the database
    //     if ($user->save()) {
    //         // Find the selected plan
    //         $selectedPlan = Plan::find($request->to_buy_plan_id);

    //         // Create a new user page instance
    //         $user_page = new UserPages;
    //         $user_page->first_name = $request->firstname;
    //         $user_page->last_name = $request->lastname;
    //         $user_page->date_of_death = $request->dateofdeath;
    //         $user_page->date_of_birth = $request->dateofbirth;
    //         $user_page->middle_name = $request->middlename;
    //         $user_page->memorial_web_address = $request->memorialaddress;
    //         $user_page->page_type = $request->page_type; // Use directly from the request
    //         $user_page->plan_id = $request->to_buy_plan_id;
    //         $user_page->privacy_policy = $request->visible_only_to_me ? 1 : 0; // Assuming this field is boolean
    //         $user_page->name_of_card = $request->name_on_card;
    //         $user_page->credit_card = $request->credit_card;
    //         $user_page->total_amount = $selectedPlan->price; // Assign the price of the selected plan
    //         $user_page->name = $user->name; // Use the user's name
    //         $user_page->email = $user->email; // Use the user's email
    //         $user_page->user_id = $user->user_id; // Use the user's email


    //         $randomString = Str::random(5);
    //         $baseUrl = config('app.url'); // Get your site's base URL from configuration
    //         $randomUrl = $baseUrl . '/' . $randomString;
    //         $legacy_page_url = $randomUrl;
    //         $user_page->legacy_page_url = $legacy_page_url;

    //         // Save the user page to the database
    //         if ($user_page->save()) {
    //             // Create a new user plan instance
    //             $user_plan = new UserPlan;
    //             $user_plan->user_id = $user->id;
    //             $user_plan->page_id =  $user_page->id;
    //             $user_plan->plan_id = $selectedPlan->id;
    //             $user_plan->total_amount = $selectedPlan->price;

    //             // Save the user plan to the database
    //             if ($user_plan->save()) {
    //                 // Send the access code in plaintext via email
    //                 Mail::to($user->email)->send(new AccessCodeEmail($accessCode));
    //                 // Redirect to the login page
    //                 return redirect()->route('login');
    //             }
    //         }
    //     }

    //     // Redirect back with a generic error message if any of the saves fail
    //     return redirect()->back()->with('error', 'Something went wrong. Please try again.');
    // }
    public function save_create_page(Request $request){
        // Count user pages
        $pagesfind = UserPages::where('email', $user->email)->count();

        if ($pagesfind == 0) {
            $user = new User;
            $user->email = $request->email;
            $user->name = $request->firstname;
            $user->password = Hash::make($request->password);
            $user->mobilephone = $request->mobilephone;
            $user->buildingname = $request->buildingname;
            $user->street = $request->street;
            $user->suburb = $request->suburb;
            $user->postcode = $request->postcode;
            $user->state  = $request->state;
            $user->country = $request->country;
            $user->role = 1;
            $user->is_active = 1;
            $user->no_of_memorial_pages = 1;
            $user->relationship = $request->relationship;

            $accessCode = Str::random();

            $user->access_code = $accessCode;

            $user->save();
        } else {
            $user = User::find(auth()->user()->id);
        }
       // dd($user);
        $selectedPlan = Plan::find($request->to_buy_plan_id);

        $user_page = new UserPages;
        $user_page->first_name = $request->firstname;
        $user_page->last_name = $request->lastname;
        $user_page->date_of_death = $request->dateofdeath;
        $user_page->date_of_birth = $request->dateofbirth;
        $user_page->middle_name = $request->middlename;
        $user_page->memorial_web_address = $request->memorialaddress;
        $user_page->page_type = $request->page_type;
        $user_page->plan_id = $request->to_buy_plan_id;
        $user_page->privacy_policy = $request->visible_only_to_me ? 1 : 0;
        $user_page->name_of_card = $request->name_on_card;
        $user_page->credit_card = $request->credit_card;
        $user_page->total_amount = $selectedPlan->price;
        $user_page->name = $user->name;
        $user_page->email = $user->email;
        $user_page->user_id = $user->id;

        if ($pagesfind > 0) {
            $user_page->page_number = $pagesfind + 1;
        }

        $randomString = Str::random(5);
        $baseUrl = config('app.url');
        $randomUrl = $baseUrl . '/' . $randomString;
        $legacy_page_url = $randomUrl;
        $user_page->legacy_page_url = $legacy_page_url;

        if ($user_page->save()) {
            $user_plan = new UserPlan;
            $user_plan->user_id = $user->id;
            $user_plan->page_id = $user_page->id;
            $user_plan->plan_id = $selectedPlan->id;
            $user_plan->total_amount = $selectedPlan->price;

            if ($user_plan->save()) {
                Mail::to($user->email)->send(new AccessCodeEmail($accessCode));
                return redirect()->route('login');
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

                History::create([
                    'user_id' => auth()->user()->id,
                    'name' => auth()->user()->name,
                    'reaction' => 'Banner added successfully',
                ]);
                
            } else {
                History::create([
                    'user_id' => auth()->user()->id,
                    'name' => auth()->user()->name,
                    'reaction' => 'Banner added successfully',
                ]);

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

                History::create([
                    'user_id' => auth()->user()->id,
                    'name' => auth()->user()->name,
                    'reaction' => 'Banner updated successfully',
                ]);

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
                History::create([
                    'user_id' => auth()->user()->id,
                    'name' => auth()->user()->name,
                    'reaction' => 'Banner Overview updated successfully',
                ]);
                $over_view->save();
            } else {
                // Handle case where no banner image is found for the user
                return redirect()->back();
               
            }
        }
   
    }


    public function save_quotes(Request $request, $id) {
        $quote = Quote::find($request->quoteid);

        // Check if the quote exists
        if (!$quote) {
            return response()->json(['message' => 'Quote not found'], 404);
        }
    
        // Update the quote
        if ($request->has('heading')) {
            $quote->heading = $request->heading;
        }
    
        if ($request->has('description')) {
            $quote->description = $request->description;
        }

        $quote->memorial_id	= auth()->user()->id;
    
        History::create([
            'user_id' => auth()->user()->id,
            'name' => auth()->user()->name,
            'reaction' => 'Quotes updated successfully',
        ]);

        // Save the changes
        $quote->save();
    
        return response()->json(['success' => true,'message' => 'Quote updated successfully'], 200);
    }
    
    public function add_quote(Request $request){
        // dd($request->all());

        History::create([
            'user_id' => auth()->user()->id,
            'name' => auth()->user()->name,
            'reaction' => 'Quotes added successfully',
        ]);

        $quote = Quote::create([
            'memorial_id' => auth()->user()->id,
            'heading' => $request->heading,
            'description' => $request->description,
        ]);
    
        return redirect()->route('pageone');
    }


    public function add_relation(Request $request){
        // dd($request->all());

        History::create([
            'user_id' => auth()->user()->id,
            'name' => auth()->user()->name,
            'reaction' => 'Relationship added successfully',
        ]);

        $relationship = Relationship::create([
            'user_id' => auth()->user()->id,
            'heading' => $request->heading,
            'sub_heading_first' => $request->sub_heading_first,
            'sub_heading_second' => $request->sub_heading_second,
            'sub_heading_third' => $request->sub_heading_third,
            'sub_heading_fourth' => $request->sub_heading_fourth,
            'sub_heading_fifth' => $request->sub_heading_fifth,
            'sub_heading_sixth' => $request->sub_heading_sixth,
        ]);
    
        return redirect()->route('pageone');
    }

    public function update_relationship(Request $request){
        $relationship = Relationship::where('id', $request->relationshipId)
                                    ->where('user_id', auth()->user()->id)
                                    ->first();
    
        if($relationship){
            History::create([
                'user_id' => auth()->user()->id,
                'name' => auth()->user()->name,
                'reaction' => 'Relationship updated successfully',
            ]);
            $relationship->{$request->elementId} = $request->content;
            $relationship->save();
    
            return response()->json(['message' => 'Relationship updated successfully'], 200);
        } else {
            return response()->json(['error' => 'Relationship not found or unauthorized'], 404);
        }
    }    

    public function videoupload(Request $request)
    {
        // Check if the user exists
        $user_id = auth()->id();
        $audio = Audio::where('memorial_id', $user_id)->first();
    
        if (!$audio) {
            // If the user does not exist in the audio table, create a new record
            $audio = new Audio();
            $audio->type="video";
            $audio->memorial_id = $user_id;
        }
    
        // Handle video upload
        if ($request->hasFile('video')) {
            $video = $request->file('video');
            $videoName = uniqid() . '.' . $video->getClientOriginalExtension();
    
            // Move the uploaded file to the public directory
            if ($video->move(public_path('/Media/videos'), $videoName)) {
                // Update audio record with the file path
                $audio->full_path = 'Media/videos/' . $videoName;
            } else {
                // Handle failure to move the uploaded file
                return response()->json(['success' => false, 'message' => 'Failed to move uploaded video'], 500);
            }
        }
    
        History::create([
            'user_id' => auth()->user()->id,
            'name' => auth()->user()->name,
            'reaction' => 'Video updated successfully',
        ]);

        // Save the audio record
        $audio->save();
    
        // Return a response based on success or failure
        return response()->json(['success' => true, 'message' => 'Video uploaded successfully']);
    }
    

    public function update_dates(Request $request)
    {

    
        $user_id = auth()->id();
        $userpage = UserPlan::where('user_id', $user_id)->first(); // Retrieve the user's plan
        if ($userpage) {
            $page_id = $userpage->page_id; // Access the page ID if the user has a page
            $page = UserPages::find($page_id); // Assuming there's a UserPages model
            if ($page) {
                // Update the dates if they are not empty
                if (!empty($request->dateOfBirth)) {
                    $page->date_of_birth = $request->dateOfBirth;
                }
                if (!empty($request->dateOfDeath)) {
                    $page->date_of_death = $request->dateOfDeath;
                }
                History::create([
                    'user_id' => auth()->user()->id,
                    'name' => auth()->user()->name,
                    'reaction' => 'Dates updated successfully',
                ]);

                $page->save();

                return response()->json(['success' => true, 'message' => 'Dates updated successfully']);
            } else {
                // Handle case where the page is not found
                return response()->json(['error' => 'Page not found']);
            }
        } else {
            // Handle case where the user's plan is not found
            return response()->json(['error' => 'User plan not found']);
        }
    }

    
    public function ganeral_setting(Request $request)
    {
        $user_id = auth()->id();

        $imageName = time().'.'.$request->background_image->extension();  
        $request->background_image->move(public_path('body_images'), $imageName);
        
        $ganeral_seeting = GaneralSetting::where('user_id', $user_id)->first();
        if ($ganeral_seeting) {
            $ganeral_seeting->body_image = $imageName;
            History::create([
                'user_id' => auth()->user()->id,
                'name' => auth()->user()->name,
                'reaction' => 'Body image updated successfully',
            ]);
            $ganeral_seeting->save();
        } else {
            $ganeral_seeting = new GaneralSetting();
            $ganeral_seeting->user_id = $user_id;
            $ganeral_seeting->body_image = $imageName;
            History::create([
                'user_id' => auth()->user()->id,
                'name' => auth()->user()->name,
                'reaction' => 'Body image updated successfully',
            ]);
            $ganeral_seeting->save();
        }
        return redirect()->route('pageone');
    }

    public function add_general_knowledge(Request $request){
        
        History::create([
        'user_id' => auth()->user()->id,
            'name' => auth()->user()->name,
            'reaction' => 'Ganeral Knowledge added successfully',
        ]);

        $ganeral = GeneralKnowledge::create([
            'title' => $request->title,
            'description' => $request->description,
            'brief' => $request->brief,
            'user_id' => auth()->user()->id,
        ]);

        return redirect()->route('pageone')->with('success','General knowledge added successfully');

    }

    public function add_question_answers(Request $request){
        
        History::create([
        'user_id' => auth()->user()->id,
            'name' => auth()->user()->name,
            'reaction' => 'Question answer added successfully',
        ]);

        $ganeral = Faqs::create([
            'question' => $request->question,
            'answer' => $request->answer,
            'user_id' => auth()->user()->id,
        ]);

        return redirect()->route('pageone')->with('success','Question Answer added successfully');

    }

    public function update_faq_content(Request $request) {
        $faqs = Faqs::find($request->faqId);
    
        // Check if the request contains 'question' or 'answer'
        if ($request->has('question')) {
            $faqs->question = $request->question;
        }
    
        if ($request->has('answer')) {
            $faqs->answer = $request->answer;
        }
    
        History::create([
        'user_id' => auth()->user()->id,
            'name' => auth()->user()->name,
            'reaction' => 'Question answer updated successfully',
        ]);

        $faqs->save();
    
        return response()->json(['success' => 'Question Answer updated successfully']);
    }  

    public function add_guestbook(Request $request){
        
        History::create([
        'user_id' => auth()->user()->id,
            'name' => auth()->user()->name,
            'reaction' => 'Guest book added successfully',
        ]);

        $guest = GuestBook::create([
            'name' => $request->name,
            'date' => $request->date,
            'relationship' => $request->relationship,
            'user_id' => auth()->user()->id,
        ]);

        return redirect()->route('pageone')->with('success','Guest Book added successfully');

    }      

    public function update_guestbook_content(Request $request) {
        $guestbook = Guestbook::find($request->guestbookId);
    
        if ($request->has('name')) {
            $guestbook->name = $request->name;
        }
    
        if ($request->has('date')) {
            $guestbook->date = $request->date;
        }
    
        if ($request->has('relationship')) {
            $guestbook->relationship = $request->relationship;
        }
    
        History::create([
        'user_id' => auth()->user()->id,
            'name' => auth()->user()->name,
            'reaction' => 'Guest book updated successfully',
        ]);

        $guestbook->save();
    
        return response()->json(['success' => 'Guestbook content updated successfully']);
    }   

    public function update_generalknowledge_content(Request $request) {
        $generalknowledge = GeneralKnowledge::find($request->generalknowledgeId);
    
        if ($request->has('title')) {
            $generalknowledge->title = $request->title;
        }
    
        if ($request->has('description')) {
            $generalknowledge->description = $request->description;
        }
    
        History::create([
        'user_id' => auth()->user()->id,
            'name' => auth()->user()->name,
            'reaction' => 'General Knowledge updated successfully',
        ]);

        $generalknowledge->save();
    
        return response()->json(['success' => 'Content updated successfully']);
    }
    
    public function add_story(Request $request){

        
        if ($request->hasFile('image_one')) {
            $image = $request->file('image_one');
            $imageoneName = time() . '_' . Str::random(10) . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('stories_images'), $imageoneName);
        }
    
        // Handle image_two upload
        if ($request->hasFile('image_two')) {
            $image = $request->file('image_two');
            $imagetwoName = time() . '_' . Str::random(10) . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('stories_images'), $imagetwoName);
        }

        History::create([
        'user_id' => auth()->user()->id,
            'name' => auth()->user()->name,
            'reaction' => 'Story added successfully',
        ]);

        Story::create([
            'title' => $request->title,
            'description' => $request->description,
            'user_id' => auth()->user()->id,
            'image_one' => $imageoneName,
            'image_two' => $imagetwoName,
            'create_by' => auth()->user()->name,
        ]);

        return redirect()->route('pageone')->with('success','Story added successfully');

    }

    public function update_story_content(Request $request) {
        $story = Story::find($request->storyId);
    
        if ($request->has('title')) {
            $story->title = $request->title;
        }
    
        if ($request->has('description')) {
            $story->description = $request->description;
        }
    
        History::create([
        'user_id' => auth()->user()->id,
            'name' => auth()->user()->name,
            'reaction' => 'Story updated successfully',
        ]);

        $story->save();
    
        return response()->json(['success' => 'Content updated successfully']);
    }
    
    public function update_story_image(Request $request) {
        $story = Story::find($request->storyId);
        $contentType = array_keys($request->file())[0]; // Get the dynamic key name (image_one/image_two)
    
        if ($request->hasFile($contentType)) {
            $file = $request->file($contentType);
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('stories_images'), $filename);
    
            $story->$contentType = $filename;

            History::create([
            'user_id' => auth()->user()->id,
                'name' => auth()->user()->name,
                'reaction' => 'Story Image updated successfully',
            ]);

            $story->save();
        }
    
        return response()->json(['success' => 'Image updated successfully']);
    }

    public function uploadsoundsclip(Request $request)
    {
        // Validate the request
        $request->validate([
            'title' => 'required|string|max:255',
            'audio' => 'required|file|mimes:mp3,wav,aac|max:20480', // 20MB max
        ]);

        // Handle the audio file upload
        if ($request->hasFile('audio')) {
            $audio = $request->file('audio');
            $audioName = time() . '_' . Str::random(10) . '.' . $audio->getClientOriginalExtension();
            $audio->move(public_path('soundclips_files'), $audioName);

            History::create([
            'user_id' => auth()->user()->id,
                'name' => auth()->user()->name,
                'reaction' => 'Soundclip added successfully',
            ]);

            SoundClip::create([
                'title' => $request->title,
                'audio' => $audioName,
                'user_id' => auth()->user()->id,
            ]);

            return redirect()->route('pageone')->with('success', 'Audio added successfully');
        }

        return redirect()->back()->with('error', 'Failed to upload audio');
    }

    public function update_soundclip_content(Request $request) {
        $soundclip = Soundclip::find($request->soundclipId);
    
        if ($request->has('title')) {
            $soundclip->title = $request->title;
        }
    
        History::create([
        'user_id' => auth()->user()->id,
            'name' => auth()->user()->name,
            'reaction' => 'Soundclip Content updated successfully',
        ]);

        $soundclip->save();
    
        return response()->json(['success' => 'Content updated successfully']);
    }
    
    public function update_soundclip_audio(Request $request) {
        $soundclip = Soundclip::find($request->soundclipId);
    
        if ($request->hasFile('audio')) {
            $file = $request->file('audio');
            $filename = time() . '_' . Str::random(10) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('soundclips_files'), $filename);
    
            $soundclip->audio = $filename;
            History::create([
            'user_id' => auth()->user()->id,
                'name' => auth()->user()->name,
                'reaction' => 'Soundclip Audio updated successfully',
            ]);
            $soundclip->save();
        }
    
        return response()->json(['success' => 'Audio updated successfully']);
    }
    
    public function update_transition_content(Request $request) {
        $id = $request->input('id');
        $content = $request->input('content');
    
        // Check if the transition record already exists
        $transition = Transition::where('user_id', auth()->user()->id)->first();
    
        // If the record doesn't exist, create a new one
        if (!$transition) {
            $transition = new Transition();
            $transition->user_id = auth()->user()->id;
            $transition->honoured_by = auth()->user()->name;
            if(empty($id) || $id == 'title'){
                $transition->title = 'Bree’s Celebration of Life';
                $transition->theme = 'Not sad - Light, Fun, Airy, like a carnivale';
                $transition->dress_code = 'Everyone to wear colour';
                $transition->music = 'Catch and Release (Matt Simons), Beat You There (Wil Dempsey), Time of my Life (Bill Medley & Jennifer Warnes).';
                $transition->extra_music = 'Time of my Life (Bill Medley & Jennifer Warnes)';
                $transition->body = 'Cremated. Ashes made into jewellery for her children Remaining ashes scattered in the ocean';
            }

            if(empty($id) || $id == 'theme'){
                $transition->title = 'Bree’s Celebration of Life';
                $transition->theme = 'Not sad - Light, Fun, Airy, like a carnivale';
                $transition->dress_code = 'Everyone to wear colour';
                $transition->music = 'Catch and Release (Matt Simons), Beat You There (Wil Dempsey), Time of my Life (Bill Medley & Jennifer Warnes).';
                $transition->extra_music = 'Time of my Life (Bill Medley & Jennifer Warnes)';
                $transition->body = 'Cremated. Ashes made into jewellery for her children Remaining ashes scattered in the ocean';
            }

            if(empty($id) || $id == 'dress_code'){
                $transition->title = 'Bree’s Celebration of Life';
                $transition->theme = 'Not sad - Light, Fun, Airy, like a carnivale';
                $transition->dress_code = 'Everyone to wear colour';
                $transition->music = 'Catch and Release (Matt Simons), Beat You There (Wil Dempsey), Time of my Life (Bill Medley & Jennifer Warnes).';
                $transition->extra_music = 'Time of my Life (Bill Medley & Jennifer Warnes)';
                $transition->body = 'Cremated. Ashes made into jewellery for her children Remaining ashes scattered in the ocean';
            }

            if(empty($id) || $id == 'music'){
                $transition->title = 'Bree’s Celebration of Life';
                $transition->theme = 'Not sad - Light, Fun, Airy, like a carnivale';
                $transition->dress_code = 'Everyone to wear colour';
                $transition->music = 'Catch and Release (Matt Simons), Beat You There (Wil Dempsey), Time of my Life (Bill Medley & Jennifer Warnes).';
                $transition->extra_music = 'Time of my Life (Bill Medley & Jennifer Warnes)';
                $transition->body = 'Cremated. Ashes made into jewellery for her children Remaining ashes scattered in the ocean';
            }

            if(empty($id) || $id == 'extra_music'){
                $transition->title = 'Bree’s Celebration of Life';
                $transition->theme = 'Not sad - Light, Fun, Airy, like a carnivale';
                $transition->dress_code = 'Everyone to wear colour';
                $transition->music = 'Catch and Release (Matt Simons), Beat You There (Wil Dempsey), Time of my Life (Bill Medley & Jennifer Warnes).';
                $transition->extra_music = 'Time of my Life (Bill Medley & Jennifer Warnes)';
                $transition->body = 'Cremated. Ashes made into jewellery for her children Remaining ashes scattered in the ocean';
            }

            if(empty($id) || $id == 'body'){
                $transition->title = 'Bree’s Celebration of Life';
                $transition->theme = 'Not sad - Light, Fun, Airy, like a carnivale';
                $transition->dress_code = 'Everyone to wear colour';
                $transition->music = 'Catch and Release (Matt Simons), Beat You There (Wil Dempsey), Time of my Life (Bill Medley & Jennifer Warnes).';
                $transition->extra_music = 'Time of my Life (Bill Medley & Jennifer Warnes)';
                $transition->body = 'Cremated. Ashes made into jewellery for her children Remaining ashes scattered in the ocean';
            }

            History::create([
            'user_id' => auth()->user()->id,
                'name' => auth()->user()->name,
                'reaction' => 'Transition added successfully',
            ]);
        }
    
        // Update the corresponding field based on the id
        switch ($id) {
            case 'title':
                $transition->title = $content;
                break;
            case 'theme':
                $transition->theme = $content;
                break;
            case 'dress_code':
                $transition->dress_code = $content;
                break;
            case 'music':
                $transition->music = $content;
                break;
            case 'extra_music':
                $transition->extra_music = $content;
                break;
            case 'body':
                $transition->body = $content;
                break;

            History::create([
            'user_id' => auth()->user()->id,
                'name' => auth()->user()->name,
                'reaction' => 'Transition updated successfully',
            ]);
        }
    
        // Save the transition record
        $transition->save();
    
        return response()->json(['success' => 'Content updated successfully']);
    }    


    public function update_obituary_content(Request $request) {
        $id = $request->input('id');
        $content = $request->input('content');
    
        // Check if the transition record already exists
        $obituary = Obituary::where('user_id', auth()->user()->id)->first();
    
        // If the record doesn't exist, create a new one
        if (!$obituary) {
            $obituary = new Obituary();
            $obituary->user_id = auth()->user()->id;
            if(empty($id) || $id == 'full_name'){
                $obituary->full_name = 'Breannon Kimberley Schuback (Formerly Daniel)';
                $obituary->date_of_birth = '31st December 1992';
                $obituary->birth_place = 'Gosford Hospital NSW Australia';
                $obituary->date_of_transition = 'Friday, 25th August 2023';
                $obituary->place_of_transition = 'At home — Carmody Court, Nudgee, QLD, Australia';
                $obituary->cause_of_transition = 'Unknown';
            }

            if(empty($id) || $id == 'date_of_birth'){
                $obituary->full_name = 'Breannon Kimberley Schuback (Formerly Daniel)';
                $obituary->date_of_birth = '31st December 1992';
                $obituary->birth_place = 'Gosford Hospital NSW Australia';
                $obituary->date_of_transition = 'Friday, 25th August 2023';
                $obituary->place_of_transition = 'At home — Carmody Court, Nudgee, QLD, Australia';
                $obituary->cause_of_transition = 'Unknown';
            }

            if(empty($id) || $id == 'birth_place'){
                $obituary->full_name = 'Breannon Kimberley Schuback (Formerly Daniel)';
                $obituary->date_of_birth = '31st December 1992';
                $obituary->birth_place = 'Gosford Hospital NSW Australia';
                $obituary->date_of_transition = 'Friday, 25th August 2023';
                $obituary->place_of_transition = 'At home — Carmody Court, Nudgee, QLD, Australia';
                $obituary->cause_of_transition = 'Unknown';
            }

            if(empty($id) || $id == 'date_of_transition'){
                $obituary->full_name = 'Breannon Kimberley Schuback (Formerly Daniel)';
                $obituary->date_of_birth = '31st December 1992';
                $obituary->birth_place = 'Gosford Hospital NSW Australia';
                $obituary->date_of_transition = 'Friday, 25th August 2023';
                $obituary->place_of_transition = 'At home — Carmody Court, Nudgee, QLD, Australia';
                $obituary->cause_of_transition = 'Unknown';
            }

            if(empty($id) || $id == 'place_of_transition'){
                $obituary->full_name = 'Breannon Kimberley Schuback (Formerly Daniel)';
                $obituary->date_of_birth = '31st December 1992';
                $obituary->birth_place = 'Gosford Hospital NSW Australia';
                $obituary->date_of_transition = 'Friday, 25th August 2023';
                $obituary->place_of_transition = 'At home — Carmody Court, Nudgee, QLD, Australia';
                $obituary->cause_of_transition = 'Unknown';
            }
            if(empty($id) || $id == 'cause_of_transition'){
                $obituary->full_name = 'Breannon Kimberley Schuback (Formerly Daniel)';
                $obituary->date_of_birth = '31st December 1992';
                $obituary->birth_place = 'Gosford Hospital NSW Australia';
                $obituary->date_of_transition = 'Friday, 25th August 2023';
                $obituary->place_of_transition = 'At home — Carmody Court, Nudgee, QLD, Australia';
                $obituary->cause_of_transition = 'Unknown';
            }

            History::create([
            'user_id' => auth()->user()->id,
                'name' => auth()->user()->name,
                'reaction' => 'Obituary added successfully',
            ]);
        }
    
        // Update the corresponding field based on the id
        switch ($id) {
            case 'full_name':
                $obituary->full_name = $content;
                break;
            case 'date_of_birth':
                $obituary->date_of_birth = $content;
                break;
            case 'birth_place':
                $obituary->birth_place = $content;
                break;
            case 'date_of_transition':
                $obituary->date_of_transition = $content;
                break;
            case 'place_of_transition':
                $obituary->place_of_transition = $content;
                break;
            case 'cause_of_transition':
                $obituary->cause_of_transition = $content;
                break;

            History::create([
            'user_id' => auth()->user()->id,
                'name' => auth()->user()->name,
                'reaction' => 'Obituary updated successfully',
            ]);
        }
    
        // Save the transition record
        $obituary->save();
    
        return response()->json(['success' => 'Obituary updated successfully']);
    }   

    public function obituray_boxesupdate_content(Request $request){

        $id = $request->input('id');
        $content = $request->input('content');
    
        // Check if the transition record already exists
        $obituary = ObituaryBoxs::where('user_id', auth()->user()->id)->first();
    
        // If the record doesn't exist, create a new one
        if (!$obituary) {
            $obituary = new ObituaryBoxs();
            $obituary->user_id = auth()->user()->id;

            if(empty($id) || $id == 'funeral_home'){
                $obituary->funeral_home = 'Academy Funerals Lawnton mail@academyfunerals.com.au Director: Robin Druery By invite Only';
                $obituary->views = 'By invite Only';
                $obituary->procession = 'Wednesday 13th September 2023, 10am Decker Park Eighteenth Ave Brighton, Qld 4121';
                $obituary->service = 'Wednesday 13th September 2023, 11am-12pm Events on Oxlade, 50 Oxlade Drive New Farm Qld, 4005';
                $obituary->wake = 'Wednesday 13th September 2023, 12pm-3pm Events on Oxlade, 50 Oxlade Drive New Farm Qld, 4005';
                $obituary->final_resting_place = 'Breannon’s ashes are currently in her mother’s possession. Some of Bree’s ashes will be scattered with her grandparents, Jan and Lex Horgan. Some ashes will be scattered overseas, where Breannon planned to travel. Breannon’s remaining ashes will be combined with her mother’s, and both will be buried with Breannon’s sister, Kaitlyn Schuback-Jeffers';
            }

            if(empty($id) || $id == 'views'){
                $obituary->funeral_home = 'Academy Funerals Lawnton mail@academyfunerals.com.au Director: Robin Druery By invite Only';
                $obituary->views = 'By invite Only';
                $obituary->procession = 'Wednesday 13th September 2023, 10am Decker Park Eighteenth Ave Brighton, Qld 4121';
                $obituary->service = 'Wednesday 13th September 2023, 11am-12pm Events on Oxlade, 50 Oxlade Drive New Farm Qld, 4005';
                $obituary->wake = 'Wednesday 13th September 2023, 12pm-3pm Events on Oxlade, 50 Oxlade Drive New Farm Qld, 4005';
                $obituary->final_resting_place = 'Breannon’s ashes are currently in her mother’s possession. Some of Bree’s ashes will be scattered with her grandparents, Jan and Lex Horgan. Some ashes will be scattered overseas, where Breannon planned to travel. Breannon’s remaining ashes will be combined with her mother’s, and both will be buried with Breannon’s sister, Kaitlyn Schuback-Jeffers';
            }

            if(empty($id) || $id == 'procession'){
                $obituary->funeral_home = 'Academy Funerals Lawnton mail@academyfunerals.com.au Director: Robin Druery By invite Only';
                $obituary->views = 'By invite Only';
                $obituary->procession = 'Wednesday 13th September 2023, 10am Decker Park Eighteenth Ave Brighton, Qld 4121';
                $obituary->service = 'Wednesday 13th September 2023, 11am-12pm Events on Oxlade, 50 Oxlade Drive New Farm Qld, 4005';
                $obituary->wake = 'Wednesday 13th September 2023, 12pm-3pm Events on Oxlade, 50 Oxlade Drive New Farm Qld, 4005';
                $obituary->final_resting_place = 'Breannon’s ashes are currently in her mother’s possession. Some of Bree’s ashes will be scattered with her grandparents, Jan and Lex Horgan. Some ashes will be scattered overseas, where Breannon planned to travel. Breannon’s remaining ashes will be combined with her mother’s, and both will be buried with Breannon’s sister, Kaitlyn Schuback-Jeffers';
            }

            if(empty($id) || $id == 'service'){
                $obituary->funeral_home = 'Academy Funerals Lawnton mail@academyfunerals.com.au Director: Robin Druery By invite Only';
                $obituary->views = 'By invite Only';
                $obituary->procession = 'Wednesday 13th September 2023, 10am Decker Park Eighteenth Ave Brighton, Qld 4121';
                $obituary->service = 'Wednesday 13th September 2023, 11am-12pm Events on Oxlade, 50 Oxlade Drive New Farm Qld, 4005';
                $obituary->wake = 'Wednesday 13th September 2023, 12pm-3pm Events on Oxlade, 50 Oxlade Drive New Farm Qld, 4005';
                $obituary->final_resting_place = 'Breannon’s ashes are currently in her mother’s possession. Some of Bree’s ashes will be scattered with her grandparents, Jan and Lex Horgan. Some ashes will be scattered overseas, where Breannon planned to travel. Breannon’s remaining ashes will be combined with her mother’s, and both will be buried with Breannon’s sister, Kaitlyn Schuback-Jeffers';
            }

            if(empty($id) || $id == 'wake'){
                $obituary->funeral_home = 'Academy Funerals Lawnton mail@academyfunerals.com.au Director: Robin Druery By invite Only';
                $obituary->views = 'By invite Only';
                $obituary->procession = 'Wednesday 13th September 2023, 10am Decker Park Eighteenth Ave Brighton, Qld 4121';
                $obituary->service = 'Wednesday 13th September 2023, 11am-12pm Events on Oxlade, 50 Oxlade Drive New Farm Qld, 4005';
                $obituary->wake = 'Wednesday 13th September 2023, 12pm-3pm Events on Oxlade, 50 Oxlade Drive New Farm Qld, 4005';
                $obituary->final_resting_place = 'Breannon’s ashes are currently in her mother’s possession. Some of Bree’s ashes will be scattered with her grandparents, Jan and Lex Horgan. Some ashes will be scattered overseas, where Breannon planned to travel. Breannon’s remaining ashes will be combined with her mother’s, and both will be buried with Breannon’s sister, Kaitlyn Schuback-Jeffers';
            }
            if(empty($id) || $id == 'final_resting_place'){
                $obituary->funeral_home = 'Academy Funerals Lawnton mail@academyfunerals.com.au Director: Robin Druery By invite Only';
                $obituary->views = 'By invite Only';
                $obituary->procession = 'Wednesday 13th September 2023, 10am Decker Park Eighteenth Ave Brighton, Qld 4121';
                $obituary->service = 'Wednesday 13th September 2023, 11am-12pm Events on Oxlade, 50 Oxlade Drive New Farm Qld, 4005';
                $obituary->wake = 'Wednesday 13th September 2023, 12pm-3pm Events on Oxlade, 50 Oxlade Drive New Farm Qld, 4005';
                $obituary->final_resting_place = 'Breannon’s ashes are currently in her mother’s possession. Some of Bree’s ashes will be scattered with her grandparents, Jan and Lex Horgan. Some ashes will be scattered overseas, where Breannon planned to travel. Breannon’s remaining ashes will be combined with her mother’s, and both will be buried with Breannon’s sister, Kaitlyn Schuback-Jeffers';
            }

            History::create([
            'user_id' => auth()->user()->id,
                'name' => auth()->user()->name,
                'reaction' => 'Obituary added successfully',
            ]);
        }
    
        // Update the corresponding field based on the id
        switch ($id) {
            case 'funeral_home':
                $obituary->funeral_home = $content;
                break;
            case 'views':
                $obituary->views = $content;
                break;
            case 'procession':
                $obituary->procession = $content;
                break;
            case 'service':
                $obituary->service = $content;
                break;
            case 'wake':
                $obituary->wake = $content;
                break;
            case 'final_resting_place':
                $obituary->final_resting_place = $content;
                break;

            History::create([
            'user_id' => auth()->user()->id,
                'name' => auth()->user()->name,
                'reaction' => 'Obituary updated successfully',
            ]);
        }
    
        // Save the transition record
        $obituary->save();
    
        return response()->json(['success' => 'Obituary updated successfully']);

    }

    public function add_euolgy(Request $request) {

        $id = $request->id;
        $obituary = Eulogy::where('user_id', auth()->user()->id)->first();

        if ($obituary) {
            // Update the content in the database
            if(empty($id) || $id == 'content'){
                $obituary->content = $request->content;
            }

            if(empty($id) || $id == 'description'){
                $obituary->description = $request->content;
            }

            History::create([
            'user_id' => auth()->user()->id,
                'name' => auth()->user()->name,
                'reaction' => 'Eulogy updated successfully',
            ]);

            $obituary->save();

            return response()->json(['message' => 'Content updated successfully'], 200);
        } else {
            // If obituary does not exist, create a new record
            $newObituary = new Eulogy();
            
            $newObituary->user_id = $request->user_id;

            switch ($id) {
                case 'content':
                    $transition->content = $content;
                    break;
                case 'description':
                    $transition->description = $content;
                    break;
            }

            History::create([
            'user_id' => auth()->user()->id,
                'name' => auth()->user()->name,
                'reaction' => 'Eulogy added successfully',
            ]);

            $newObituary->save();

            return response()->json(['message' => 'Eulogy record created'], 201);
        }

    }
    public function add_download_order_of_service_euolgy(Request $request)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'download_order_of_service' => 'required|file|mimes:pdf', // Max file size is 2048 KB (2 MB)
        ]);

        // If validation fails, redirect back with validation errors
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $eulogy = Eulogy::where('user_id', auth()->user()->id)->first();

        if (!$eulogy) {
            $eulogy = new Eulogy;
            History::create([
            'user_id' => auth()->user()->id,
                'name' => auth()->user()->name,
                'reaction' => 'Eulogy download file added successfully',
            ]);
        }

        if ($request->hasFile('download_order_of_service')) {
            $file = $request->file('download_order_of_service');
            $filename = time() . '_' . Str::random(10) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('download_order_of_services'), $filename);

            $eulogy->download_order_of_service = $filename;
            $eulogy->user_id = auth()->user()->id;

            if ($eulogy) {
                History::create([
                'user_id' => auth()->user()->id,
                    'name' => auth()->user()->name,
                    'reaction' => 'Eulogy download file updates successfully',
                ]);
            }

            $eulogy->save();

            return redirect()->route('pageone')->with('success', 'Eulogy updated successfully');
        }

        // Handle if no file was uploaded
        return redirect()->route('pageone')->with('error', 'No file was uploaded.');
    }

    public function add_download_order_of_service_videoeulogy_euolgy(Request $request)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'video' => 'required|file|mimetypes:video/mp4,video/quicktime,video/x-msvideo,video/x-ms-wmv,video/mpeg,video/webm,video/x-flv,video/3gpp', // Adjust the list of allowed video MIME types as needed
        ]);

        // If validation fails, redirect back with validation errors
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $eulogy = Eulogy::where('user_id', auth()->user()->id)->first();

        if (!$eulogy) {
            $eulogy = new Eulogy;
            History::create([
            'user_id' => auth()->user()->id,
                'name' => auth()->user()->name,
                'reaction' => 'Eulogy Video added successfully',
            ]);
        }

        if ($request->hasFile('video')) {
            $file = $request->file('video');
            $filename = time() . '_' . Str::random(10) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('videoeulogys'), $filename);

            $eulogy->video = $filename;
            $eulogy->user_id = auth()->user()->id;
            if ($eulogy) {
                History::create([
                'user_id' => auth()->user()->id,
                    'name' => auth()->user()->name,
                    'reaction' => 'Eulogy Video updated successfully',
                ]);
            }

            $eulogy->save();

            return redirect()->route('pageone')->with('success', 'Video updated successfully');
        }

        // Handle if no file was uploaded
        return redirect()->route('pageone')->with('error', 'No file was uploaded.');
    }

    public function add_tributes(Request $request){
        $tribute = new Tribute;

        $tribute->name = $request->name;
        $tribute->name_of_mother = $request->mother_name;
        $tribute->description = $request->description;
        $tribute->user_id = auth()->user()->id;

        $tribute->save();

        History::create([
        'user_id' => auth()->user()->id,
            'name' => auth()->user()->name,
            'reaction' => 'Tributes added successfully',
        ]);

        return redirect()->route('pageone')->with('success', 'Tribute added successfully');
    }

    public function update_tribute_content(Request $request)
    {
        // Validate the request data
        $request->validate([
            'id' => 'required|string',
            'content' => 'required|string',
        ]);
        
        $id = $request->id;

        // Find the obituary record by id or create a new one
        $tribute = Tribute::firstOrNew(['user_id' => auth()->user()->id, 'id' => $request->tributeid]);

        if(empty($id) || $id == 'name'){
            $tribute->name = $request->content;
        }

        if(empty($id) || $id == 'description'){
            $tribute->description = $request->content;
        }

        if(empty($id) || $id == 'name_of_mother'){
            $tribute->name_of_mother = $request->content;
        }

        History::create([
            'user_id' => auth()->user()->id,
            'name' => auth()->user()->name,
            'reaction' => 'Tributes updated successfully',
        ]);

        $tribute->save();

        return response()->json(['message' => 'Tribute updated successfully'], 200);
    }

    public function add_mesageshonureemodal(Request $request){
        $message = new MessageFromHonouree;

        $message->message = $request->message;
        $message->user_id = auth()->user()->id;

        $message->save();

        History::create([
            'user_id' => auth()->user()->id,
            'name' => auth()->user()->name,
            'reaction' => 'Message from the honouree added successfully',
        ]);

        return redirect()->route('pageone')->with('success', 'Message added successfully');
    }

    public function update_messagehonuree_content(Request $request){
        // Validate the request data
        $request->validate([
            'id' => 'required|string',
            'content' => 'required|string',
        ]);

        $id = $request->id;

        // Find the obituary record by id or create a new one
        $messageshonoureeeditableid = MessageFromHonouree::firstOrNew(['user_id' => auth()->user()->id, 'id' => $request->messageshonoureeeditableid]);

        if(empty($id) || $id == 'message'){
            $messageshonoureeeditableid->message = $request->content;
        }

        History::create([
            'user_id' => auth()->user()->id,
            'name' => auth()->user()->name,
            'reaction' => 'Message from the honouree updated successfully',
        ]);

        $messageshonoureeeditableid->save();

        return response()->json(['message' => 'Messages updated successfully'], 200);
    }

    public function add_donationmodal(Request $request){
        $makeadonation = new MakeaDonation;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '_' . Str::random(10) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('donationimages'), $filename);

            $makeadonation->image = $filename;
        }

        $makeadonation->url = $request->url;
        $makeadonation->user_id = auth()->user()->id;
        $makeadonation->description = $request->description;
        $makeadonation->save();

        History::create([
            'user_id' => auth()->user()->id,
            'name' => auth()->user()->name,
            'reaction' => 'Donation added successfully',
        ]);

        return redirect()->route('pageone')->with('success', 'Make a Donation added successfully');
    }

    public function update_donation_content(Request $request)
    {
        // Validate the request data
        $request->validate([
            'id' => 'required|string',
            'content' => 'required|string',
        ]);

        // Find the record by user_id or create a new one
        $makeadonation = MakeaDonation::firstOrNew(['user_id' => auth()->user()->id, 'id' => $request->donationid]);

        // Update the specific field based on the id
        if ($request->id == 'description') {
            $makeadonation->description = $request->content;
        } elseif ($request->id == 'url') {
            $makeadonation->url = $request->content;
        }

        History::create([
            'user_id' => auth()->user()->id,
            'name' => auth()->user()->name,
            'reaction' => 'Donation updated successfully',
        ]);

        $makeadonation->save();

        return response()->json(['message' => 'Make a Donation updated successfully'], 200);
    }

    public function update_donation_image(Request $request)
    {
        // Validate the request data
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif', // Adjust the validation rules as needed
        ]);

        // Find the record by user_id or create a new one
        $makeADonation = MakeADonation::firstOrNew(['user_id' => auth()->user()->id, 'id' => $request->donation_id]);

        // Handle the image upload
        if ($request->hasFile('image')) {
            // Delete the old image if exists
            $file = $request->file('image');
            $filename = time() . '_' . Str::random(10) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('donationimages'), $filename);

            $makeADonation->image = $filename;
            $makeADonation->user_id = auth()->user()->id;
            $makeADonation->save();

            History::create([
                'user_id' => auth()->user()->id,
                'name' => auth()->user()->name,
                'reaction' => 'Donation updated successfully',
            ]);

            return response()->json(['message' => 'Make a Donation updated successfully']);
        }

        return response()->json(['success' => false], 400);
    }

    public function add_relative_and_friends(Request $request){

        $relationandrelative = new RelationandRelative;
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif', // Adjust the validation rules as needed
            'name' => 'required|string',
            'relationship' => 'required|string',
        ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '_' . Str::random(10) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('relationandrelativeimages'), $filename);

            $relationandrelative->image = $filename;
        }

        $relationandrelative->user_id = auth()->user()->id;
        $relationandrelative->name = $request->name;
        $relationandrelative->relationship = $request->relationship;

        $relationandrelative->save();

        History::create([
            'user_id' => auth()->user()->id,
            'name' => auth()->user()->name,
            'reaction' => 'Relative and friends added successfully',
        ]);

        return redirect()->route('pageone')->with('success', 'Relatives and Friends added successfully');
    }

    public function relativeupdateImage(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'id' => 'required|integer|exists:relative_and_friends,id'
        ]);

        $relationandrelative = RelationAndRelative::find($request->id);

        if ($request->hasFile('image')) {
            
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $filename = time() . '_' . Str::random(10) . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('relationandrelativeimages'), $filename);
    
                $relationandrelative->image = $filename;
            }

            History::create([
                'user_id' => auth()->user()->id,
                'name' => auth()->user()->name,
                'reaction' => 'Relative and friends updated successfully',
            ]);

            $relationandrelative->save();

            return response()->json(['success' => true, 'imageUrl' => asset('storage/' . $filename)], 200);
        }

        return response()->json(['success' => false], 400);
    }

    public function relativeupdateText(Request $request)
    {
        $request->validate([
            'id' => 'required|integer|exists:relative_and_friends,id',
            'field' => 'required|string|in:name,relationship',
            'content' => 'required|string|max:255'
        ]);

        $relationandrelative = RelationAndRelative::find($request->id);
        $relationandrelative->{$request->field} = $request->content;
        $relationandrelative->save();

        History::create([
            'user_id' => auth()->user()->id,
            'name' => auth()->user()->name,
            'reaction' => 'Relative and friends added successfully',
        ]);

        return response()->json(['success' => true], 200);
    }

    public function add_galleryimages(Request $request){

        if(count($request->images) < 10 && count($request->texts) < 10){
            return redirect()->back()->with('error','Minimun 10 images and texts must be add.');
        }

        if (count($request->images) !== count($request->texts)) {
            return redirect()->back()->with('error','Number of images and texts must match.');
        }

        if(count($request->images) > 10 && count($request->texts) > 10){
            return redirect()->back()->with('error','Maximun 10 images and texts add.');
        }

        // Process images and texts together
        for ($i = 0; $i < count($request->images); $i++) {
            $image = $request->images[$i];
            $text = $request->texts[$i];

            $filename = time() . '_' . Str::random(10) . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('galleries_images'), $filename);
            // Handle image upload
            $path = $filename;

            // Create a new GalleryImage entry for each image-text pair
            GalleryImage::create([
                'images' => $path,
                'texts' => $text,
                'user_id' => auth()->user()->id,
            ]);
        }

        return redirect()->route('pageone')->with('success','Gallery Images added successfully');

    }

}

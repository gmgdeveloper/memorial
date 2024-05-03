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
class FrontendController extends Controller
{
    //

  
    public function home_page(){
        return view('Frontend.index');
    }





}

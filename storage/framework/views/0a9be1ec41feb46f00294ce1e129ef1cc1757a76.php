<!DOCTYPE html>
<html>

<head>
    <title>A life Worth Remembering</title>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
    <style>
     body {
    background-image: url(<?php echo e(asset('background.png')); ?>);
    background-position: center;
}

        .navbar-brand {
            color: #BE9438 !important;
            font-size: 25px;
        }

        .navlinks{
            margin-right: 30px;
            font-family: "Josefin Sans Light";
        }

        .searchinputnav {
            height: 30px;
            border-radius: 25px;
            font-size: 12px;
        }

        h3.mainheading {
            font-family: "Josefin Sans Bold";
            font-size: 18px;
            font-weight:500;
            text-align: center;
            color: #BE9438;
        }
        .mainheading {
            font-size: 18px;
            font-family: "Josefin Sans Bold";
            font-weight:500;
            text-align: center;
            color: #BE9438;
        }
        h3.secondheading {
            font-family: "Josefin Sans Bold";
            font-size: 22px;
            text-align: center;
            font-weight:500;
            color: #BE9438;
        }

        .secondheading {
            font-size: 22px;
            font-family: "Josefin Sans Bold";
            font-weight:500;
            text-align: center;
            color: #BE9438;
        }
        .loginheading {
            font-size: 35px;
            font-family: "Josefin Sans Bold";
            font-weight:500;
            text-align: center;
            color: #000;
        }
        .securityloginheading {
            font-size: 25px;
            font-family: "Josefin Sans Bold";
            font-weight:500;
            text-align: center;
            color: #000;
        }

        p.mainparagraph.mt-3 {
            font-size: 16px;
        }

        .swiper {
            width: 100%;
            height: 100%;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .swiper-slide img {
            display: block;
            width: 100%;
            height: 400px;
            object-fit: cover;
        }
        .featurelink{
            font-size: 22px;
            color: #BE9438;  
            margin-right: 15px;
            margin-left: 27px;
            font-weight:bold;
        }
        .lifeatures{
            font-size: 15px;
        }
        #client-testimonial-carousel {min-height: 200px;}
        .carousel-indicators .active{
            background-color:black;
        }
        .carousel-indicators > li{
            background-color:grey;
        }
        h4{
            font-family: "Josefin Sans Bold";
            font-weight:500;
        }
        h3{
            font-family: "Josefin Sans Bold";
            font-weight:500;
        }
        input.form-control.mr-sm-2.searchinputnav {
            border-top: 0px;
            border-left: 0px;
            border-right: 0px;
            border-radius: 0px;
            padding-left: 2px;
        }
        
        input.form-control.mr-sm-2.searchinputnav:focus {
           border-top:0px;
           border-right:0px;
           border-left:0px;
           box-shadow:inherit;
        }
        .btn:focus{
            box-shadow: 0 0 0 .2rem rgb(0 123 255 / 0%)!important;
        }

        .form-control:focus {
            box-shadow: 0 0 0 .2rem rgb(0 123 255 / 0%)!important;
        }

        /* CSS */
        .custom-select:focus {
            border-color: #BE9438; /* Change the border color when the select element is focused */
        }
        @media  screen and (max-width: 768px) {
          .mobileoff{
              display:none!important;
          }
          .mobileon{
              display:block!important;  
          }
          h3.mainheading{
              font-size:13px!important;
          }
          .mainparagraph {
              font-size:13px!important;
          }
          .firstimg{
              height:200px!important;
          }
          .featurelink{
            font-size: 15px!important;
          }
          .margininstutive{
            margin-left: 42px!important;
          }
          .blockquotep{
              font-size:14px!important;
          }
          .margintopadd{
              margin-top: .5rem !important;
          }
          .loginheading{
              text-align:center!important;
          }
          .heartinmg{
              text-align:center!important;
          }
          .widthseting{
              width:80%!important;
          }
          .widthsetingcheck{
              width:20%!important;
          }
          .widthsetingtext{
              font-size:14px!important;
          }
          .margintopchecking{
              margin-top:5px!important;
          }
          .navbar-brand{
               font-size:14px!important;
           }
           .createa_pagebuttonwidthsetres{
               width:100%!important;
           }
           a.navbar-brand.mobileon {
            width: 50%!important;
           }
           .bottommargindh{
               margin-bottom:0px!important;
           }
           .addbottommargindh{
                 margin-bottom:6px!important;
            }
            .requestaccess{
                color:#000!important;
            }
            button{
                 color:#000!important;
            }
        }
        
        @media  screen and (max-width: 1024px) {
            .mobileoff {
                display: none !important;
            }
            
            .mobileon {
                display: block !important;  
            }
            
            h3.mainheading {
                font-size: 13px !important;
            }
            
            .mainparagraph {
                font-size: 13px !important;
            }
            
            .firstimg {
                height: 200px !important;
            }
            
            .featurelink {
                font-size: 15px !important;
            }
            
            .margininstutive {
                margin-left: 42px !important;
            }
            
            .blockquotep {
                font-size: 14px !important;
            }
            
            .margintopadd {
                margin-top: .5rem !important;
            }
            
            .loginheading {
                text-align: center !important;
            }
            
            .heartinmg {
                text-align: center !important;
            }
            
            .widthseting {
                width: 80% !important;
            }
            
            .widthsetingcheck {
                width: 20% !important;
            }
            
            .widthsetingtext {
                font-size: 14px !important;
            }
            
            .margintopchecking {
                margin-top: 5px !important;
            }
            
            .number {
                width: 45px !important;
                height: 40px !important;
            }
            
            .heightsetpackagediv {
                height: auto !important;
            }
            
            .visiblecheckbox {
                width: 20% !important;
                margin-top: 20px !important;
            }
            
            .visiblecheckboxdiv {
                width: 80% !important;
            }
            
            .marginledftcvc {
                margin-left: 10px !important;
            }
            
            .floatfledft {
                float: left !important;
                width: 100%;
                -webkit-flex-direction: initial !important;
            }
            
            .form-date-item {
                margin-left: 6px !important;
            }
            
            .textlinkhref {
                width: 30% !important;
            }
            
            .textlinkhrefinput {
                width: 40% !important;
            }
            
            .steps {
                display: none !important;
            }
            
            .content .current {
                padding-top: 0px !important;
            }
            
            .heightsetcredit {
                height: auto !important;
            }
            .paddingkhaam{
                padding-left: 0px!important;
            }
            
            .actions ul li a:hover {
                background-color: #BE9438;
                color: #fff !important;
            }
            
            label#email-error {
                display: none !important;
            }
            
            .createammeorialwebsitetotitl {
                margin-left: 30px !important;
                font-size: 20px !important;
            }
            
            a[href="#next"] {
                background-color: #BE9438 !important;
                color: #fff !important;
            }
            
            .navbar-brand {
                font-size: 14px !important;
            }
            
            .createa_pagebuttonwidthsetres {
                width: 100% !important;
            }
            
            a.navbar-brand.mobileon {
                width: 50% !important;
            }
            
            .responsiveinvisible {
                height: auto !important;
            }
            
            .reposdivecardheight {
                height: auto !important;
            }
            .fieldset-contenthwight{
                height:auto!important;    
            }
            .nameofcardiwdth{
                width:15%!important;
            }
            .bottommargindh{
               margin-bottom:0px!important;
            }
            .addbottommargindh{
                 margin-bottom:6px!important;
            }
        }

    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="container" style="background-color:white;border:2px solid #BE9438">
                <div class="row">
                    <div class="col-lg-12 mb-4">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-sm-6 mobileoff">
                                    <nav class="navbar navbar-expand-lg navbar-light bg-white">
                                        <a class="navbar-brand" href="/" style="font-family: 'Josefin Sans Bold';">A Life Worth Remembering</a>
                                    </nav>
                                </div>
                                <div class="col-lg-6 col-sm-12 mt-lg-2 mb-lg-5">
                                    <nav class="navbar navbar-expand-lg navbar-light bg-white">
                                         <a class="navbar-brand mobileon" href="/" style="font-family: 'Josefin Sans Bold';display:none;">A Life Worth Remembering</a>
                                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                                            data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                                            aria-label="Toggle navigation">
                                            <span class="navbar-toggler-icon"></span>
                                        </button>
                                        <div class="collapse navbar-collapse" id="navbarNav">
                                            <ul class="navbar-nav">
                                                <li class="nav-item">
                                                    <a class="nav-link navlinks" href="<?php echo e(route('login')); ?>">LOG IN</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link navlinks" href="<?php echo e(route('create_page')); ?>">CREATE A PAGE</a>
                                                </li>
                                            </ul>
                                            <form class="form-inline">
                                                <input class="form-control mr-sm-2 searchinputnav" type="search"
                                                    placeholder="Search" aria-label="Search">
                                            </form>
                                        </div>
                                    </nav>
                                </div>
                                <div class="col-lg-6 col-sm-6 mobileoff" style="display:none;">
                                    <nav class="navbar navbar-expand-lg navbar-light bg-white">
                                        <a class="navbar-brand" href="/" style="font-family: 'Josefin Sans Bold';">A Life Worth Remembering</a>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="container p-lg-5">
                            <div class="row p-lg-5" style="border: 2px solid #BE9438;">
                                <div class="col-lg-12 col-sm-12">
                                    <form action="<?php echo e(route('frontend_login')); ?>" method="POST" id="loginForm">
                                        <div class="row" id="guestFields">
                                            <div class="col-lg-7 col-sm-6 mt-5">
                                                <h3 class="loginheading text-right mt-lg-5" style="color:#BE9438;">
                                                    LOG IN
                                                </h3>
                                            </div>
                                            <div class="col-lg-5 col-sm-6 text-right mb-4 heartinmg">
                                                <img src="<?php echo e(asset('assets/heart.png')); ?>" class="img-fluid heartinmg" style="width:180px;">
                                            </div>
                                            <div class="col-lg-2 mt-2">
                                                <h5 class="mt-2 bottommargindh" style="font-family: 'Josefin Sans Bold';font-size: 18px;">FULL NAME</h5>
                                            </div>
                                            <div class="col-lg-10 mt-2">
                                                <input type="text" class="form-control" name="fullname" style="border: 2px solid #BE9438;" placeholder="Full Name">
                                                <p class="text-muted" style="font-family: 'Josefin Sans Light';margin-bottom:2px;">(Entry into the site will automatically add your name to the guest book)</p>
                                            </div>
                                            <div class="col-lg-2">
                                                <h5 class="mt-2 bottommargindh" style="font-family: 'Josefin Sans Bold';font-size: 18px;">EMAIL</h5>
                                            </div>
                                            <div class="col-lg-10 mt-2 mb-2">
                                                <input type="email" class="form-control" name="email" style="border: 2px solid #BE9438;" placeholder="Email">
                                            </div>
                                            <div class="col-lg-2 mt-2">
                                                <h5 class="mt-2 bottommargindh" style="font-family: 'Josefin Sans Bold';font-size: 18px;">HONOUREE</h5>
                                            </div>
                                            <div class="col-lg-10 mt-2 mb-2">
                                                <input type="text" class="form-control" name="honouree" style="border: 2px solid #BE9438;"  placeholder="Honouree's Page Name">
                                            </div>
                                            <div class="col-lg-2 mt-2">
                                                <h5 class="mt-2 bottommargindh" style="font-family: 'Josefin Sans Bold';font-size: 18px;">LEGACY PAGE URL</h5>
                                            </div>
                                            <div class="col-lg-10 mt-2 mb-2">
                                                <input type="text" class="form-control" name="legacyurl" style="border: 2px solid #BE9438;"  placeholder="Legacy Page Url">
                                            </div>
                                            <div class="col-lg-2 mt-2">
                                                <h5 class="mt-2 bottommargindh" style="font-family: 'Josefin Sans Bold';font-size: 18px;">RELATIONSHIP</h5>
                                            </div>
                                            <div class="col-lg-10 mt-2">
                                                <select class="form-control" name="relationship" style="border: 2px solid #BE9438;font-family: 'Josefin Sans Light';">
                                                    <option value="" disabled selected>Choose a Relationship</option>
                                                    <option value="Parent">Parent</option>
                                                    <option value="Step-Parent">Step-Parent</option>
                                                    <option value="Foster Parent">Foster Parent</option>
                                                    <option value="Guardian">Guardian</option>
                                                    <option value="Grandparent">Grandparent</option>
                                                    <option value="Step-Grandparent">Step-Grandparent</option>
                                                    <option value="Godparent">Godparent</option>
                                                    <option value="Husband">Husband</option>
                                                    <option value="Wife">Wife</option>
                                                    <option value="Partner">Partner</option>
                                                    <option value="Ex-Partner">Ex-Partner</option>
                                                    <option value="Child">Child</option>
                                                    <option value="Stepchild">Stepchild</option>
                                                    <option value="Foster Child">Foster Child</option>
                                                    <option value="Godchild">Godchild</option>
                                                    <option value="Sibling">Sibling</option>
                                                    <option value="Nibling">Nibling</option>
                                                    <option value="Niece">Niece</option>
                                                    <option value="Nephew">Nephew</option>
                                                    <option value="Cousin">Cousin</option>
                                                    <option value="Best Friend">Best Friend</option>
                                                    <option value="Friend">Friend</option>
                                                    <option value="Family Friend">Family Friend</option>
                                                    <option value="Friend of a Friend">Friend of a Friend</option>
                                                    <option value="Colleague">Colleague</option>
                                                    <option value="Acquaintance">Acquaintance</option>
                                                    <option value="Caregiver">Caregiver</option>
                                                    <option value="Other">Other</option>
                                                </select>
                                                <p class="text-muted" style="font-family: 'Josefin Sans Light';margin-bottom:9px;">Select your relationship to the honouree from the drop down menu</p>
                                            </div>
                                            <div class="col-lg-2">
                                                <h5 class="mt-2 addbottommargindh" style="font-family: 'Josefin Sans Bold';font-size: 18px;">ACCESS CODE</h5>
                                            </div>
                                            <div class="col-lg-10">
                                                
                                                <input type="text" class="form-control" id="accessCodeInput" name="accesscode" style="border: 2px solid #BE9438;" placeholder="Access code">
                                                
                                            </div>
                                            <div class="col-lg-12 mt-2 text-center">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="loginType" id="inlineRadio1" value="option1" onclick="showFields()" checked>
                                                    <label class="form-check-label" for="inlineRadio1">Guest</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="loginType" id="inlineRadio2" value="option2" onclick="showFields()">
                                                    <label class="form-check-label" for="inlineRadio2">Honouree</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 mt-2">
                                            <div id="loginMessage"></div>

                                            </div>

                                            <div class="col-lg-12 mt-2">
                                                <h5 class="securityloginheading text-center" style="font-weight:bold;font-family: 'Josefin Sans Bold';">
                                                    Security check
                                                </h5>
                                            </div>
                                            <div class="col-lg-1 col-sm-1 widthsetingcheck" style="padding-right: 0px!Important;">
                                                <input type="checkbox" class="form-control float-right mr-2 mt-1 margintopchecking" name="privacy_policy" style="border-color:#BE9438;width: 25px;height: 35px;" required>
                                            </div>
                                            <div class="col-lg-11 col-sm-11 widthseting" style="padding-left: 0px!Important;">
                                                <p class="mt-1 text-muted widthsetingtext" style="font-family: 'Josefin Sans Light';">Entering this site is confirmation that I accept 'A life Worth Remembring' Terms, Conditions and Privacy Policy</p>
                                            </div>
                                            <div class="col-lg-1 col-sm-1 mt-2 widthsetingcheck" style="padding-right: 0px!Important;">
                                                <input type="checkbox" class="form-control float-right mr-2 margintopchecking" name="privacy_policy" style="border-color:#BE9438;width: 25px;height: 35px;">
                                            </div>
                                            <div class="col-lg-11 col-sm-11 mt-2 widthseting" style="padding-left: 0px!Important;">
                                                <p class="mt-1 text-muted widthsetingtext" style="font-family: 'Josefin Sans Light';">I accept accasional marketing emails from 'A Life Worth Remembring'</p>
                                            </div>
                                            <div class="col-lg-5 col-sm-5 offset-lg-1 mt-2">
                                                <button class="login-butn  btn btn-large mb-4 requestaccess" style="font-weight:bold;border-radius:20px;width:100%;background-color:#BE9438;border-color: #BE9438;font-family: 'Josefin Sans Bold';">LOG IN</button>
                                            </div>
                                            <div class="col-lg-5 col-sm-5 mt-2">
                                                <button class="btn btn-large mb-4 requestaccess" style="font-weight:bold;border-radius:20px;width:100%;background-color:#BE9438;border-color: #BE9438;font-family: 'Josefin Sans Bold';">REQUEST ACCESS</button>
                                            </div>
                                        </div>
                                        <div class="row" id="honoureeFields" style="display:none; ">
                                            <div class="col-lg-7 col-sm-6 mt-5">
                                                <h3 class="loginheading text-right mt-lg-5" style="color:#BE9438;">
                                                    LOG IN
                                                </h3>
                                            </div>
                                            <div class="col-lg-5 col-sm-6 text-right mb-4 heartinmg">
                                                <img src="<?php echo e(asset('assets/heart.png')); ?>" class="img-fluid heartinmg" style="width:180px;">
                                            </div>
                                            <div class="col-lg-2 mt-2">
                                                <h5 class="mt-2 bottommargindh" style="font-family: 'Josefin Sans Bold';font-size: 18px;">Email</h5>
                                            </div>
                                            <div class="col-lg-10 mt-2">
                                                <input type="email" class="form-control" name="emailhonuree" style="border: 2px solid #BE9438;" placeholder="Email">
                                            </div>
                                            <div class="col-lg-2 mt-2">
                                                <h5 class="mt-2 bottommargindh" style="font-family: 'Josefin Sans Bold';font-size: 18px;">Password</h5>
                                            </div>
                                            <div class="col-lg-10 mt-2">
                                                <input type="password" class="form-control" id="passwordInput" name="password" style="border: 2px solid #BE9438;" placeholder="Password">
                                            </div>
                                            <div class="col-lg-12 mt-2 text-center">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="loginType" id="inlineRadiohonuee1" value="option1" onclick="showFieldstwo()">
                                                    <label class="form-check-label" for="inlineRadio1">Guest</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="loginType" id="inlineRadiohonuee2" value="option2" onclick="showFieldstwo()" checked>
                                                    <label class="form-check-label" for="inlineRadio2">Honouree</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 mt-2">
                                                <h5 class="securityloginheading text-center" style="font-weight:bold;font-family: 'Josefin Sans Bold';">
                                                    Security check
                                                </h5>
                                            </div>
                                            <div class="col-lg-1 col-sm-1 widthsetingcheck" style="padding-right: 0px!Important;">
                                                <input type="checkbox" class="form-control float-right mr-2 mt-1 margintopchecking" name="privacy_policy" style="border-color:#BE9438;width: 25px;height: 35px;" required>
                                            </div>
                                            <div class="col-lg-11 col-sm-11 widthseting" style="padding-left: 0px!Important;">
                                                <p class="mt-1 text-muted widthsetingtext" style="font-family: 'Josefin Sans Light';">Entering this site is confirmation that I accept 'A life Worth Remembring' Terms, Conditions and Privacy Policy</p>
                                            </div>
                                            <div class="col-lg-1 col-sm-1 mt-2 widthsetingcheck" style="padding-right: 0px!Important;">
                                                <input type="checkbox" class="form-control float-right mr-2 margintopchecking" name="privacy_policy" style="border-color:#BE9438;width: 25px;height: 35px;">
                                            </div>
                                            <div class="col-lg-11 col-sm-11 mt-2 widthseting" style="padding-left: 0px!Important;">
                                                <p class="mt-1 text-muted widthsetingtext" style="font-family: 'Josefin Sans Light';">I accept accasional marketing emails from 'A Life Worth Remembring'</p>
                                            </div>
                                            <div class="col-lg-5 col-sm-5 offset-lg-1 mt-2">
                                                <button class="login-butn  btn btn-large mb-4 requestaccess" style="font-weight:bold;border-radius:20px;width:100%;background-color:#BE9438;border-color: #BE9438;font-family: 'Josefin Sans Bold';">LOG IN</button>
                                            </div>
                                            <div class="col-lg-5 col-sm-5 mt-2">
                                                <button class="btn btn-large mb-4 requestaccess" style="font-weight:bold;border-radius:20px;width:100%;background-color:#BE9438;border-color: #BE9438;font-family: 'Josefin Sans Bold';">REQUEST ACCESS</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-sm-12 text-center">
                                    <p class="text-muted text-center mt-4" style="font-family: 'Josefin Sans Light';">Copyright © 2024 - All Right Reserved.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    

    <script>
        function showFields() {
            var guestFields = document.getElementById('guestFields');
            var honoureeFields = document.getElementById('honoureeFields');
            var radioGuest = document.getElementById('inlineRadio1');
            var radioHonuee = document.getElementById('inlineRadio2');

            if (radioGuest.checked) {
                guestFields.style.display = 'flex';
                honoureeFields.style.display = 'none';
                radioGuest.checked = true;
            } else {
                guestFields.style.display = 'none';
                honoureeFields.style.display = 'flex';
                radioHonuee.checked = true;
            }
        }
        function showFieldstwo() {
            var guestFields = document.getElementById('guestFields');
            var honoureeFields = document.getElementById('honoureeFields');
            var radioGuest = document.getElementById('inlineRadiohonuee1');
            var radiohonuee = document.getElementById('inlineRadiohonuee2');

            if (radioGuest.checked) {
                guestFields.style.display = 'flex';
                honoureeFields.style.display = 'none';
                radioGuest.checked = true;
            } else {
                guestFields.style.display = 'none';
                honoureeFields.style.display = 'flex';
                radiohonuee.checked = true;
            }
        }
    </script>

<!-- Other scripts -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper(".mySwiper", {
        pagination: {
            el: ".swiper-pagination",
            type: "fraction",
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
</script>


 


<script>
    function showField(selectedValue) {
        var accessCodeInput = document.getElementById("accessCodeInput");
        var passwordInput = document.getElementById("passwordInput");

        if (selectedValue === "accesscode") {
            accessCodeInput.style.display = "block";
            passwordInput.style.display = "none";
        } else if (selectedValue === "password") {
            accessCodeInput.style.display = "none";
            passwordInput.style.display = "block";
        }
    }
</script>



</body>

</html><?php /**PATH G:\laragon\www\memorial_website\project\memorial\resources\views/Frontend/login.blade.php ENDPATH**/ ?>
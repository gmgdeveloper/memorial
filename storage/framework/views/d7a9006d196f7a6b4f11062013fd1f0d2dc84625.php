<!DOCTYPE html>
<html>

<head>
    <title>A life Worth Remembering</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
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
            border-radius: 6px;
            font-size: 12px;
        }

        h3.mainheading {
            font-family: "Josefin Sans Bold";
            font-size: 22px;
            font-weight:500;
            text-align: center;
            color: #BE9438;
        }
        /*.mainheading {*/
        /*    font-size: 22px;*/
        /*    font-family: "Josefin Sans Bold";*/
        /*    font-weight:500;*/
        /*    text-align: center;*/
        /*    color: #BE9438;*/
        /*}*/
        h3.secondheading {
            font-family: "Josefin Sans Bold";
            font-size: 22px;
            text-align: center;
            font-weight:500;
            color: #BE9438;
        }

        h6{
            font-family: "Josefin Sans Bold";
        }

        h1{
            font-family: "Josefin Sans Bold";
        }

        .secondheading {
            font-size: 22px;
            font-family: "Josefin Sans Bold";
            font-weight:500;
            text-align: center;
            color: #BE9438;
        }

        p.mainparagraph.mt-3 {
            font-size: 17px;
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
        .featurelink:hover{
           color: #BE9438;   
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
            font-family: 'Josefin Sans Bold';
            font-weight:500;
        }
        h1{
            font-family: 'Josefin Sans Bold';
            font-weight:500;
            color: #BE9438;
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
        .carousel-indicators{
            bottom:inherit!important;
        }
        .mainheaderlink{
            font-size:14px!important;
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
          a.nav-link.featurelink.nostalgic {
                margin-left: 0px!important;
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
           .textcentssrer{
               text-align:center!important;
           }
           .featurelink{
               margin-right: inherit!important;
               margin-left: 0px!important;
            }
            .mainheaderlink{
                font-size:14px!important;
            }
            .heightsitting{
                height:180px!important;
            }
            h1.mainheading{
                font-size:25px!important;
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
                height: 700px !important;
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
                height: 710px !important;
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
                height: 700px !important;
            }
            
            .reposdivecardheight {
                height: auto !important;
            }
            .heartimgresposive{
                width:100%!important;
            }
            .featurelink{
               margin-right: inherit!important;
               margin-left: 0px!important;
            }
            .mainheaderlink{
                font-size:14px!important;
            }
            .heightsitting{
                height:180px!important;
            }
            .textcentssrer{
                text-align:center!important;
            }
            h1.mainheading{
                font-size:25px!important;
            }
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-sm-6 mobileoff">
                                    <nav class="navbar navbar-expand-lg navbar-light bg-white">
                                        <a class="navbar-brand" href="/" style="font-family: 'Josefin Sans Bold';">A Life Worth Remembering</a>
                                    </nav>
                                </div>
                                <div class="col-lg-6 col-sm-12 mt-lg-2 mb-lg-5">
                                    <nav class="navbar navbar-expand-lg navbar-light bg-white">
                                         <a class="navbar-brand mobileon" href="/" style="font-family: 'Josefin Sans Bold';display:none;" >A Life Worth Remembering</a>
                                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                                            data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                                            aria-label="Toggle navigation">
                                            <span class="navbar-toggler-icon"></span>
                                        </button>
                                        <div class="collapse navbar-collapse" id="navbarNav">
                                            <ul class="navbar-nav">
                                                <li class="nav-item">
                                                    <a class="nav-link navlinks mainheaderlink" href="login.html">LOG IN</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link navlinks mainheaderlink" href="creat_a_page.html">CREATE A PAGE</a>
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
                                        <a class="navbar-brand" href="#" style="font-family: 'Josefin Sans Bold';">A Life Worth Remembering</a>
                                    </nav>
                                </div>
                                <div class="col-lg-12 col-sm-12">
                                    <br>
                                    <h1 class="mainheading text-center">
                                        Terms and Condition
                                    </h1>
                                    <p class="mt-3" style="font-family: 'Josefin Sans Light';">
                                        Last Updated: [4/24/2024]
                                    </p>
                                    <p style="font-family: 'Josefin Sans Light';">
                                        By accessing and using the services provided by "A Life Worth Remembering," you agree to the following terms and conditions:
                                    </p>
                                    <h3 class="mainheading text-left">
                                        Subscription Cancellation Notice
                                    </h3>
                                    <p style="font-family: 'Josefin Sans Light';">
                                        Subscribers can cancel their subscription at any time by accessing their account settings. Notice of cancellation must be provided before the next billing cycle to avoid charges for the upcoming period.
                                    </p>
                                    <h3 class="mainheading text-left">
                                        Content Visibility
                                    </h3>
                                    <p style="font-family: 'Josefin Sans Light';">
                                        Portions of each page, including Autobiographies, Biographies, and Memorials, may be made public or private at the discretion of the page administrators. 
                                    </p>
                                    <h3 class="mainheading text-left">
                                        Definitions
                                    </h3>
                                    <p style="font-family: 'Josefin Sans Light';">
                                        <b>Honouree:</b> Refers to the person the page is dedicated to, whose life, memories, and experiences are shared on the platform.
                                    </p>
                                    <p style="font-family: 'Josefin Sans Light';">
                                        <b>Autobiography:</b> A firsthand story created by the honouree, providing a personal account of their life.
                                    </p>
                                    <p style="font-family: 'Josefin Sans Light';">
                                        <b>Biography:</b> A page created for a child or adult who is unable to create the page themselves. It is crafted by the next of kin or someone with legal authority to act on behalf of the honouree.
                                    </p>
                                    <p style="font-family: 'Josefin Sans Light';">
                                        <b>Memorial:</b> A page dedicated to the memory of an individual, created by the next of kin or someone with legal authority to act on behalf of the honouree.
                                    </p>
                                    <p style="font-family: 'Josefin Sans Light';">
                                        <b>Page Administrator:</b> Refers to individuals with authorised access and control over the content on a particular page.
                                    </p>
                                    <h3 class="mainheading text-left">
                                        Respectful Content
                                    </h3>
                                    <p style="font-family: 'Josefin Sans Light';">
                                        All pages must adhere to a standard of respect and dignity towards the honouree. Content found in breach of this requirement will be promptly removed by the website management team.
                                    </p>
                                    <h3 class="mainheading text-left">
                                        Refund Policy
                                    </h3>
                                    <p style="font-family: 'Josefin Sans Light';">
                                        There are no refunds if a page is removed due to the violation of our respectful content clause or once your page has been made active or shared. 
                                    </p>
                                    <h3 class="mainheading text-left">
                                        User Responsibilities
                                    </h3>
                                    <p style="font-family: 'Josefin Sans Light';">
                                        Users are responsible for the accuracy and appropriateness of the content they contribute to the platform.
                                    </p>
                                    <p style="font-family: 'Josefin Sans Light';">
                                        Users must comply with applicable laws and regulations when using the services provided by "A Life Worth Remembering."
                                    </p>
                                    <h3 class="mainheading text-left">
                                        Privacy and Security
                                    </h3>
                                    <p style="font-family: 'Josefin Sans Light';">
                                        The privacy policy outlines how user data is collected, used, and protected. By using our platform, you agree to the terms outlined in the privacy policy.
                                    </p>
                                    <h3 class="mainheading text-left">
                                        Termination of Accounts
                                    </h3>
                                    <p style="font-family: 'Josefin Sans Light';">
                                        "A Life Worth Remembering" reserves the right to terminate or suspend user accounts that violate these terms and conditions or for any other reason deemed necessary by the website management team.
                                    </p>
                                    <h3 class="mainheading text-left">
                                        Updates to Terms and Conditions
                                    </h3>
                                    <p style="font-family: 'Josefin Sans Light';">
                                        These terms and conditions may be updated from time to time. Users will be notified of any changes, and continued use of the platform constitutes acceptance of the updated terms.
                                    </p>
                                    <!--<p style="font-family: 'Josefin Sans Light';">-->
                                    <!--    If you have any questions or concerns regarding these terms and conditions, please contact us at [contact@email.com].-->
                                    <!--</p>-->
                                    <p style="font-family: 'Josefin Sans Light';">
                                        Thank you for using "A Life Worth Remembering."
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-sm-12 mt-3" style="background-color: #ccaa54;">
                                <div class="row">
                                    <div class="col-lg-12 col-sm-12 text-center">
                                        <div class="row">
                                            <div class="col-lg-2 col-sm-6 textcentssrer col-6" style="text-align:left;">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                      <a class="nav-link active" href="about.html" style="color: #000;font-family: 'Josefin Sans Light';">ABOUT</a>
                                                    </li>
                                                    <li class="nav-item">
                                                      <a class="nav-link" href="terms.html" style="color: #000;font-family: 'Josefin Sans Light';">TERMS</a>
                                                    </li>
                                                    <li class="nav-item">
                                                      <a class="nav-link" href="charties.html" style="color: #000;font-family: 'Josefin Sans Light';">CHARITIES</a>
                                                    </li>
                                                  </ul>
                                            </div>
                                            <div class="col-lg-2 col-sm-6 textcentssrer col-6" style="text-align:left;">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                      <a class="nav-link active" href="vision.html" style="color: #000;font-family: 'Josefin Sans Light';">VISION</a>
                                                    </li>
                                                    <li class="nav-item">
                                                      <a class="nav-link" href="faqs.html" style="color: #000;font-family: 'Josefin Sans Light';">Q & A’S</a>
                                                    </li>
                                                    <li class="nav-item">
                                                      <a class="nav-link" href="tech.html" style="color: #000;font-family: 'Josefin Sans Light';">TECH SUPPORT</a>
                                                    </li>
                                                  </ul>
                                            </div>
                                            <div class="col-lg-2 col-sm-6 textcentssrer col-6" style="text-align:left;">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                      <a class="nav-link active" href="mission.html" style="color: #000;font-family: 'Josefin Sans Light';">MISSION</a>
                                                    </li>
                                                    <li class="nav-item">
                                                      <a class="nav-link" href="business.html" style="color: #000;font-family: 'Josefin Sans Light';">BUSINESS</a>
                                                    </li>
                                                    <li class="nav-item">
                                                      <a class="nav-link" href="contact.html" style="color: #000;font-family: 'Josefin Sans Light';">CONTACT US</a>
                                                    </li>
                                                  </ul>
                                            </div>
                                            <div class="col-lg-2 col-sm-6 textcentssrer col-6" style="text-align:left;">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                      <a class="nav-link active" href="privacy.html" style="color: #000;font-family: 'Josefin Sans Light';">PRIVACY</a>
                                                    </li>
                                                    <li class="nav-item">
                                                      <a class="nav-link" href="mediakit.html" style="color: #000;font-family: 'Josefin Sans Light';">MEDIA KIT</a>
                                                    </li>
                                                    <li class="nav-item">
                                                      <a class="nav-link" href="creat_a_page.html" style="color: #000;font-family: 'Josefin Sans Light';">CREATE A PAGE</a>
                                                    </li>
                                                  </ul>
                                            </div>
                                            <div class="col-lg-4 col-sm-6 col-12">
                                                <h6 class="text-center mt-3">SHARE THIS PAGE
                                                </h6>
                                                <!--<ul class="nav flex-column text-center">-->
                                                <!--    <li class="nav-item">-->
                                                <!--      <a class="nav-link active" href="#" style="color: #000;font-family: 'Josefin Sans Light';">Facebook</a>-->
                                                <!--    </li>-->
                                                <!--</ul>-->
                                                <div class="row">
                                                    <div class="col-2">
                                                        <img src="<?php echo e(asset('facebook.png')); ?>" style="width:100%;">
                                                    </div>
                                                    <div class="col-2">
                                                        <img src="<?php echo e(asset('instagram.png')); ?>" style="width:100%;">
                                                    </div>
                                                    <div class="col-2">
                                                        <img src="<?php echo e(asset('linkedin.png')); ?>" style="width:100%;">
                                                    </div>
                                                    <div class="col-2">
                                                        <img src="<?php echo e(asset('whatsapp.png')); ?>" style="width:100%;">
                                                    </div>
                                                    <div class="col-2">
                                                        <img src="<?php echo e(asset('snapchat.png')); ?>" style="width:100%;">
                                                    </div>
                                                    <div class="col-2">
                                                        <img src="<?php echo e(asset('youtube.png')); ?>" style="width:100%;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
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
</body>

</html><?php /**PATH D:\laragon\www\gmg solution\memorial\memorial\resources\views/Frontend/terms.blade.php ENDPATH**/ ?>
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
        @media screen and (max-width: 768px) {
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
        
        @media screen and (max-width: 1024px) {
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
                                        Privacy
                                    </h1>
                                    <h3 class="mainheading text-left mt-3">
                                        Privacy Policy for "A Life Worth Remembering" Website
                                    </h3>
                                    <p class="mt-3" style="font-family: 'Josefin Sans Light';">
                                        Last Updated: 24.02.24
                                    </p>
                                    <p style="font-family: 'Josefin Sans Light';">
                                        Welcome to "A Life Worth Remembering," a platform dedicated to preserving and sharing personal stories, memories, photos, videos, and soundbites for family, friends, and future generations. We prioritize the protection of your privacy and the security of your personal information. Please read this Privacy Policy carefully to understand how we collect, use, and safeguard your data.
                                    </p>
                                    <h3 class="mainheading text-left mt-3">
                                       Information We Collect:
                                    </h3>
                                    <p style="font-family: 'Josefin Sans Light';">
                                        a. Personal Information:
                                    </p>
                                    <p style="font-family: 'Josefin Sans Light';">
                                       b. Content:
                                    </p>
                                    <p style="font-family: 'Josefin Sans Light';">
                                        You have the option to journal stories, share personal information, and upload photos, videos, and soundbites to your own or your honouree's page.
                                    </p>
                                    <h3 class="mainheading text-left mt-3">
                                       Access Control:
                                    </h3>
                                    <p style="font-family: 'Josefin Sans Light';">
                                        a. Limited Access:
                                    </p>
                                    <p style="font-family: 'Josefin Sans Light';">
                                       Access to an honouree's page is restricted. Only guests with a unique link and password, provided by a page administrator, can access the content.
                                    </p>
                                    <p style="font-family: 'Josefin Sans Light';">
                                       b. Page Administrators:
                                    </p>
                                    <p style="font-family: 'Josefin Sans Light';">
                                       Page administrators have the authority to manage and control the access levels of the honouree's page.
                                    </p>
                                    <p style="font-family: 'Josefin Sans Light';">
                                       c. Public or Private Segments:
                                    </p>
                                    <p style="font-family: 'Josefin Sans Light';">
                                       Page administrators can choose to make specific segments of the honouree's page public or private, providing personalised and controlled viewing options.
                                    </p>
                                    <h3 class="mainheading text-left mt-3">
                                       Secure Payment Gateway:
                                    </h3>
                                    <p style="font-family: 'Josefin Sans Light';">
                                        a. Payment Information:
                                    </p>
                                    <p style="font-family: 'Josefin Sans Light';">
                                       When making payments for premium features or services, we use a secure payment gateway to process transactions. Your payment information, such as credit card details, is encrypted and securely handled by our payment processor.
                                    </p>
                                    <p style="font-family: 'Josefin Sans Light';">
                                        b. Data Protection:
                                    </p>
                                    <p style="font-family: 'Josefin Sans Light';">
                                       We prioritise the security of your payment information and adhere to industry standards to ensure the confidentiality and integrity of your financial data.
                                    </p>
                                    <h3 class="mainheading text-left mt-3">
                                       How We Use Your Information:
                                    </h3>
                                    <p style="font-family: 'Josefin Sans Light';">
                                        Your personal stories, photos, videos, and soundbites are used to create a comprehensive record of your life, or the lives of your loved ones, for future generations.
                                    </p>
                                    <p style="font-family: 'Josefin Sans Light';">
                                        b. Communication:
                                    </p>
                                    <p style="font-family: 'Josefin Sans Light';">
                                       We may use your provided contact information to send important updates, announcements, or information related to the platform.
                                    </p>
                                    <h3 class="mainheading text-left mt-3">
                                       Sharing Information:
                                    </h3>
                                    <p style="font-family: 'Josefin Sans Light';">
                                       a. Limited Sharing:
                                    </p>
                                    <p style="font-family: 'Josefin Sans Light';">
                                       Your information is shared only with the guests who receive the link and password from the page administrator.
                                    </p>
                                    <p style="font-family: 'Josefin Sans Light';">
                                       b. Public Segments:
                                    </p>
                                    <p style="font-family: 'Josefin Sans Light';">
                                       If a page administrator chooses to make certain segments public, they may be accessible to a wider audience.
                                    </p>
                                    <h3 class="mainheading text-left mt-3">
                                       Data Security:
                                    </h3>
                                    <p style="font-family: 'Josefin Sans Light';">
                                       a. Encryption:
                                    </p>
                                    <p style="font-family: 'Josefin Sans Light';">
                                       We use industry-standard encryption techniques to protect your personal information and ensure its confidentiality.
                                    </p>
                                    <p style="font-family: 'Josefin Sans Light';">
                                       b. Access Controls:
                                    </p>
                                    <p style="font-family: 'Josefin Sans Light';">
                                       Access to personal information is restricted to authorised personnel only.
                                    </p>
                                    <h3 class="mainheading text-left mt-3">
                                       Your Choices:
                                    </h3>
                                    <p style="font-family: 'Josefin Sans Light';">
                                       a. Updating Information:
                                    </p>
                                    <p style="font-family: 'Josefin Sans Light';">
                                       You can update your account information and content at any time.
                                    </p>
                                    <p style="font-family: 'Josefin Sans Light';">
                                       b. Communication Preferences:
                                    </p>
                                    <p style="font-family: 'Josefin Sans Light';">
                                       You have the option to manage your communication preferences and opt-out of certain notifications.
                                    </p>
                                    <h3 class="mainheading text-left mt-3">
                                       Children's Privacy:
                                    </h3>
                                    <p style="font-family: 'Josefin Sans Light';">
                                       Our services at "A Life Worth Remembering" are available to individuals of all ages, including children. However, special attention is given to the privacy and protection of children. Pages created for children under 16 will not be permitted to be made public unless a written application has been reviewed and approved by the management of ‘A Life Worth Remembering’.
                                    </p>
                                    <p style="font-family: 'Josefin Sans Light';">
                                       If a page is found to be in breach of protecting a child's privacy, we are committed to taking immediate action. This includes the deletion of the page without a refund. Our priority is to ensure a safe and secure environment for all users, especially children, and we strictly adhere to legal and ethical standards regarding children's privacy.
                                    </p>
                                    <h3 class="mainheading text-left mt-3">
                                       Changes to Privacy Policy:
                                    </h3>
                                    <p style="font-family: 'Josefin Sans Light';">
                                       We may update this Privacy Policy from time to time, and any changes will be effective upon posting the revised version on the website. Please check the policy periodically for updates.
                                    </p>
                                    <h3 class="mainheading text-left mt-3">
                                       Contact Us:
                                    </h3>
                                    <p style="font-family: 'Josefin Sans Light';">
                                       If you have any questions, concerns, or requests regarding your privacy or this Privacy Policy, please contact us via email.
                                    </p>
                                    <p style="font-family: 'Josefin Sans Light';">
                                       By using "A Life Worth Remembering," you agree to the terms outlined in this Privacy Policy.
                                    </p>
                                    <h3 class="mainheading text-left mt-3">
                                       Public Pages
                                    </h3>
                                    <p style="font-family: 'Josefin Sans Light';">
                                       Honouree pages are not listed on the website unless the administrator has set the page to ‘Public’. 
                                    </p>
                                    <p style="font-family: 'Josefin Sans Light';">
                                       Pages set to ‘Public’ permit ‘A Life to Remember’ to use it as a sample on the home page and in marketing materials if required.
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
                                                        <img src="{{assets('assets//facebook.png')}}" style="width:100%;">
                                                    </div>
                                                    <div class="col-2">
                                                        <img src="{{assets('assets//instagram.png')}}" style="width:100%;">
                                                    </div>
                                                    <div class="col-2">
                                                        <img src="{{assets('assets//linkedin.png')}}" style="width:100%;">
                                                    </div>
                                                    <div class="col-2">
                                                        <img src="{{assets('assets//whatsapp.png')}}" style="width:100%;">
                                                    </div>
                                                    <div class="col-2">
                                                        <img src="{{assets('assets//snapchat.png')}}" style="width:100%;">
                                                    </div>
                                                    <div class="col-2">
                                                        <img src="{{assets('assets//youtube.png')}}" style="width:100%;">
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

</html>
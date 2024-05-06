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
        .panel-default>.panel-heading {
            color: #333;
            background-color: #f5f5f5;
            border-color: #ddd;
            padding: 12px;
            border: 1px solid #ddd;
        }
        .panel-group .panel {
            margin-bottom: 0;
            border-radius: 4px;
            padding: 3px;
        }
        .panel-default {
            border-color: #ddd;
        }
        .panel-title {
            margin-top: 0;
            margin-bottom: 0;
            font-size: 16px;
            color: inherit;
        }
        .panel-body {
            padding: 15px;
        }
        .panel-default>.panel-heading+.panel-collapse>.panel-body {
            border-top-color: #ddd;
            border: 1px solid #ddd;
        }
        .ing{
            color:#000;
        }
        .panel-heading {
            padding: 10px 15px;
            border-bottom: 1px solid transparent;
            border-top-left-radius: 3px;
            border-top-right-radius: 3px;
        }
        .panel {
            margin-bottom: 20px;
            background-color: #fff;
            border: 1px solid transparent!important;
            border-radius: 4px;
            -webkit-box-shadow: 0 1px 1px rgba(0,0,0,.05);
            box-shadow: 0 1px 1px rgba(0,0,0,.05);
        }
        .panel.panel-default {
            width: 50%;
            float: left;
        }
        h4.panel-title {
            display: inline;
            font-size:14px;
        }
        i.fa.fa-angle-down.float-right {
            font-size: 22px;
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
            h4.panel-title {
                display: inline;
                font-size:14px;
            }
            i.fa.fa-angle-down.float-right {
                font-size: 22px;
            }
            h1.mainheading{
                font-size:25px!important;
            }
            .panel.panel-default{
                width:100%!important;
                float:inherit!important;
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
            h4.panel-title {
                display: inline;
                font-size:14px;
            }
            i.fa.fa-angle-down.float-right {
                font-size: 22px;
            }
            h1.mainheading{
                font-size:25px!important;
            }
            .panel.panel-default{
                width:100%!important;
                float:inherit!important;
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
                                        Q&A’s
                                    </h1>
                                    <div class="panel-group" id="faqAccordion">
                                        <div class="panel panel-default ">
                                            <div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question0">
                                                <h4 class="panel-title">
                                                    <a class="ing">Q:1 How do I upload photos and videos?</a>
                                                </h4>
                                                <i class="fa fa-angle-down float-right"></i>
                                            </div>
                                            <div id="question0" class="panel-collapse collapse" style="height: 0px;">
                                                <div class="panel-body">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default ">
                                            <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question1">
                                                 <h4 class="panel-title">
                                                    <a class="ing">Q:2 How do I sign the guestbook?</a>
                                                    <i class="fa fa-angle-down float-right"></i>
                                              </h4>
                                
                                            </div>
                                            <div id="question1" class="panel-collapse collapse" style="height: 0px;">
                                                <div class="panel-body">
                                                    <p>The guestbook will automatically be signed by the person logging into the page. If there are other members of the household that wish to add their name, this can be done simply by clicking the ‘Sign the Guestbook’ button under the guestbook section and adding in their details.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default ">
                                            <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question2">
                                                 <h4 class="panel-title">
                                                    <a class="ing">Q:3 How do I write a tribute for memorial pages?</a>
                                                    <i class="fa fa-angle-down float-right"></i>
                                              </h4>
                                
                                            </div>
                                            <div id="question2" class="panel-collapse collapse" style="height: 0px;">
                                                <div class="panel-body">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default ">
                                            <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question3">
                                                 <h4 class="panel-title">
                                                    <a class="ing">Q:4 How do I create a story?</a>
                                                    <i class="fa fa-angle-down float-right"></i>
                                              </h4>
                                
                                            </div>
                                            <div id="question3" class="panel-collapse collapse" style="height: 0px;">
                                                <div class="panel-body">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="panel panel-default ">
                                            <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question4">
                                                 <h4 class="panel-title">
                                                    <a class="ing">Q:5 How do I invite guests to view the page?</a>
                                                    <i class="fa fa-angle-down float-right"></i>
                                              </h4>
                                
                                            </div>
                                            <div id="question4" class="panel-collapse collapse" style="height: 0px;">
                                                <div class="panel-body">
                                                    <p>Choose a method for sharing the page either by, copying and pasting the URL into an SMS under the message, writing a bulk email through the administrators page, or by creating a post of Facebook or Instagram</p>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        
                                        <div class="panel panel-default ">
                                            <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question5">
                                                 <h4 class="panel-title">
                                                    <a class="ing">Q:6 Can guests contribute to the page at any time?</a>
                                                    <i class="fa fa-angle-down float-right"></i>
                                              </h4>
                                
                                            </div>
                                            <div id="question5" class="panel-collapse collapse" style="height: 0px;">
                                                <div class="panel-body">
                                                    <p>Unless your honourees page is locked, your guests can contribute to the page at any time of the day and night.</p>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="panel panel-default ">
                                            <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question6">
                                                 <h4 class="panel-title">
                                                    <a class="ing">Q:7 Are contributors and guests required to create an account?</a>
                                                    <i class="fa fa-angle-down float-right"></i>
                                              </h4>
                                
                                            </div>
                                            <div id="question6" class="panel-collapse collapse" style="height: 0px;">
                                                <div class="panel-body">
                                                    <p>No, contributors and guest are not required to create an account. They can view the page directly using the link provided by administrators.</p>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="panel panel-default ">
                                            <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question7">
                                                 <h4 class="panel-title">
                                                    <a class="ing">Q:8 Will I be notified when a contribution is added to the page?</a>
                                                    <i class="fa fa-angle-down float-right"></i>
                                              </h4>
                                
                                            </div>
                                            <div id="question7" class="panel-collapse collapse" style="height: 0px;">
                                                <div class="panel-body">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="panel panel-default ">
                                            <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question8">
                                                 <h4 class="panel-title">
                                                    <a class="ing">Q:9 How will administrators know when I’ve contributed to the page?</a>
                                                    <i class="fa fa-angle-down float-right"></i>
                                              </h4>
                                
                                            </div>
                                            <div id="question8" class="panel-collapse collapse" style="height: 0px;">
                                                <div class="panel-body">
                                                    <p>Administrators will receive a notification via email notifying them of new contributions.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default ">
                                            <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question9">
                                                 <h4 class="panel-title">
                                                    <a class="ing">Q:10 Are pages private?</a>
                                                    <i class="fa fa-angle-down float-right"></i>
                                              </h4>
                                
                                            </div>
                                            <div id="question9" class="panel-collapse collapse" style="height: 0px;">
                                                <div class="panel-body">
                                                    <p>Your page is not publicly listed on the website; however, guests can use the search bar on the home page to see if there is a legacy page for a particular person</p>
                                                    <p>You can set your page to public or private.</p>
                                                    <p>A page can be linked to the pages of family and friends using the site.</p>
                                                    <p>Private pages can only be seen by using the link and password provided by administrators.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default ">
                                            <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question10">
                                                 <h4 class="panel-title">
                                                    <a class="ing">Q:11 How do I invite people to view the page?</a>
                                                    <i class="fa fa-angle-down float-right"></i>
                                              </h4>
                                
                                            </div>
                                            <div id="question10" class="panel-collapse collapse" style="height: 0px;">
                                                <div class="panel-body">
                                                    <p>You can copy the URL and paste it in an SMS, email, Messenger, on Facebook and other social media platforms.</p>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="panel panel-default ">
                                            <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question11">
                                                 <h4 class="panel-title">
                                                    <a class="ing">Q:12 Can guests download content, images, and videos?</a>
                                                    <i class="fa fa-angle-down float-right"></i>
                                              </h4>
                                
                                            </div>
                                            <div id="question11" class="panel-collapse collapse" style="height: 0px;">
                                                <div class="panel-body">
                                                    <p>Guests can only download content images and photos if the administrators provide permission.</p>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="panel panel-default ">
                                            <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question12">
                                                 <h4 class="panel-title">
                                                    <a class="ing">Q:13 Can anyone create a page?</a>
                                                    <i class="fa fa-angle-down float-right"></i>
                                              </h4>
                                
                                            </div>
                                            <div id="question12" class="panel-collapse collapse" style="height: 0px;">
                                                <div class="panel-body">
                                                    <p>Anyone can create a page about themselves. </p>
                                                    <p>Only executors, administrators, or the next of kin can create a page for someone who has passed. Proof of authority may be required before the page can go live.</p>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="panel panel-default ">
                                            <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question13">
                                                 <h4 class="panel-title">
                                                    <a class="ing">Q:14 I have a question that hasn’t been answered, what do I do?</a>
                                                    <i class="fa fa-angle-down float-right"></i>
                                              </h4>
                                
                                            </div>
                                            <div id="question13" class="panel-collapse collapse" style="height: 0px;">
                                                <div class="panel-body">
                                                    <p>Email us at</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default ">
                                            <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question14">
                                                 <h4 class="panel-title">
                                                    <a class="ing">Q:15 How do I add page administrators?</a>
                                                    <i class="fa fa-angle-down float-right"></i>
                                              </h4>
                                
                                            </div>
                                            <div id="question14" class="panel-collapse collapse" style="height: 0px;">
                                                <div class="panel-body">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="panel panel-default ">
                                            <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question15">
                                                 <h4 class="panel-title">
                                                    <a class="ing">Q:16 How do I add information about the honouree to the page?</a>
                                                    <i class="fa fa-angle-down float-right"></i>
                                              </h4>
                                
                                            </div>
                                            <div id="question15" class="panel-collapse collapse" style="height: 0px;">
                                                <div class="panel-body">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="panel panel-default ">
                                            <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question16">
                                                 <h4 class="panel-title">
                                                    <a class="ing">Q:17 Can I edit and delete information and images on the page?</a>
                                                    <i class="fa fa-angle-down float-right"></i>
                                              </h4>
                                
                                            </div>
                                            <div id="question16" class="panel-collapse collapse" style="height: 0px;">
                                                <div class="panel-body">
                                                    <p>Administrators have full control over what is displayed on the honourees page. Content, videos, images and links can be easily edited or deleted.</p>
                                                    <p>Can my page be easily changed from an autobiography or biography page to a memorial page?</p>
                                                    <p>Yes, it can by simply adding the date of passing to the page and make the year of death visible.</p>
                                                    <p>You can choose to;</p>
                                                    <p>Add the tribute component to the page for guests to leave messages.</p>
                                                    <p>Add information about the cause and place of death.</p>
                                                    <p>Add information about the funeral service.</p>
                                                    <p>Add geocodes of the final resting place.</p>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="panel panel-default ">
                                            <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question17">
                                                 <h4 class="panel-title">
                                                    <a class="ing">Q:18 If I subscribe to a Premium Monthly plan, can I cancel my subscription anytime?</a>
                                                    <i class="fa fa-angle-down float-right"></i>
                                              </h4>
                                
                                            </div>
                                            <div id="question17" class="panel-collapse collapse" style="height: 0px;">
                                                <div class="panel-body">
                                                    <p>In the billing settings of your account, you can turn off auto-renew anytime. The memorial page will remain live and accessible through the end of the billing period (unless you request to have it removed) but will go into an inactive state at the end of the billing period.</p>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="panel panel-default ">
                                            <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question18">
                                                 <h4 class="panel-title">
                                                    <a class="ing">Q:19 With a Premium Monthly memorial page, will my plan auto-renew each billing period?</a>
                                                    <i class="fa fa-angle-down float-right"></i>
                                              </h4>
                                
                                            </div>
                                            <div id="question18" class="panel-collapse collapse" style="height: 0px;">
                                                <div class="panel-body">
                                                    <p>Yes, when creating a monthly or annual Premium memorial page, the memorial page plan will be set to auto-renew by default after you create the memorial page. This can be disabled in the Billing Settings, accessible from your account dashboard.</p>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="panel panel-default ">
                                            <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question19">
                                                 <h4 class="panel-title">
                                                    <a class="ing">Q:20 What happens if I let my plan expire?</a>
                                                    <i class="fa fa-angle-down float-right"></i>
                                              </h4>
                                
                                            </div>
                                            <div id="question19" class="panel-collapse collapse" style="height: 0px;">
                                                <div class="panel-body">
                                                    <p>After a plan has expired, the memorial page URL will still be accessible for one year, but the page will display a message that the memorial is inactive. The memorial page can be reactivated within the first year after the plan has expired. After one year of being inactive, your memorial page URL and data may be removed from our servers.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default ">
                                            <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question20">
                                                 <h4 class="panel-title">
                                                    <a class="ing">Q:21 How long will the Memorial website stay online?</a>
                                                    <i class="fa fa-angle-down float-right"></i>
                                              </h4>
                                
                                            </div>
                                            <div id="question20" class="panel-collapse collapse" style="height: 0px;">
                                                <div class="panel-body">
                                                    <p>The lifetime offer will last for 100 years and is easily renewed.‘A Life to Remember’ has put processes in place to ensure the continuation of the site once the founder transitions.</p>
                                                    <p>Your Legacy Page will stay online as long as your membership payments are maintained.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
                                                        <img src="{{asset('assets/facebook.png')}}" style="width:100%;">
                                                    </div>
                                                    <div class="col-2">
                                                        <img src="{{asset('assets/instagram.png')}}" style="width:100%;">
                                                    </div>
                                                    <div class="col-2">
                                                        <img src="{{asset('assets/linkedin.png')}}" style="width:100%;">
                                                    </div>
                                                    <div class="col-2">
                                                        <img src="{{asset('assets/whatsapp.png')}}" style="width:100%;">
                                                    </div>
                                                    <div class="col-2">
                                                        <img src="{{asset('assets/snapchat.png')}}" style="width:100%;">
                                                    </div>
                                                    <div class="col-2">
                                                        <img src="{{asset('assets/youtube.png')}}" style="width:100%;">
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
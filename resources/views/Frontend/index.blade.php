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
        body {
            background-image: url({{asset('assets/background.png')}});
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
        
        .selectionprices {
            font-size: 18px;
            font-family: "Josefin Sans Bold";
            font-weight:500;
            text-align: center;
            color: #000;
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
            color: #BE9438!important;  
            margin-right: 15px;
            margin-left: 27px;
            font-weight:bold;
        }
        .featurelink:hover{
           color: #BE9438!important;   
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
        .cursorchange:hover {
            cursor: pointer;
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
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="container" style="background-color:white;border: 2px solid #be9438;">
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
                                <div class="col-lg-6 col-sm-12 mt-lg-5 text-center">
                                    <br>
                                    <h3 class="mainheading mt-lg-5">
                                        BUILD YOUR DIGITAL MONUMENT:
                                        <br>
                                        CRAFT YOUR ONLINE LEGACY WITH PURPOSE
                                    </h3>
                                    <p class="mainparagraph mt-3" style="font-family: 'Josefin Sans Light';">Capture and share life’s journey on our platform
                                        dedicated to creating lasting legacies. Whether it’s your own story or that of a
                                        loved one, our easy-to-use tools help you craft a beautiful narrative that can
                                        be shared and cherished for generations to come</p>
                                </div>
                                <div class="col-lg-6 col-sm-12">
                                    <img src="{{asset('assets/heart.png')}}" class="img-fluid heartimgresposive">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-sm-12 mt-3">
                                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img class="d-block w-100 firstimg" src="{{asset('assets/buttonbackground.PNG')}}" alt="First slide"
                                                style="height: 200px;">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h5 style="color:black;">Bruce Lee</h5>
                                                <p style="font-family: 'Josefin Sans Light';color:black;">The key to immortality is first living a life worth remembering</p>
                                            </div>
                                        </div>
                                        <div class="carousel-item ">
                                            <img class="d-block w-100 firstimg" src="{{asset('assets/buttonbackground.PNG')}}" alt="First slide"
                                                style="height: 200px;">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h5 style="color:black;">Unknown</h5>
                                                <p style="font-family: 'Josefin Sans Light';color:black;">Inside each of us is a natural-born storyteller, waiting to be released</p>
                                            </div>
                                        </div>
                                        <div class="carousel-item ">
                                            <img class="d-block w-100 firstimg" src="{{asset('assets/buttonbackground.PNG')}}" alt="First slide"
                                                style="height: 200px;">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h5 style="color:black;">Brene Brown</h5>
                                                <p style="font-family: 'Josefin Sans Light';color:black;">One day, you will tell your story of how you overcame what you went through, and it will be someone else’s survival guide</p>
                                            </div>
                                        </div>
                                        <div class="carousel-item ">
                                            <img class="d-block w-100 firstimg" src="{{asset('assets/buttonbackground.PNG')}}" alt="First slide"
                                                style="height: 200px;">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h5 style="color:black;">Rebel Thriver</h5>
                                                <p style="font-family: 'Josefin Sans Light';color:black;">When writing the story of your life, don’t let anyone else hold the pen</p>
                                            </div>
                                        </div>
                                        <div class="carousel-item ">
                                            <img class="d-block w-100 firstimg" src="{{asset('assets/buttonbackground.PNG')}}" alt="First slide"
                                                style="height: 200px;">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h5 style="color:black;">Simply Topaz</h5>
                                                <p style="font-family: 'Josefin Sans Light';color:black;">Live the story you want to tell</p>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                        data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                        data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                            <!--<div class="col-lg-12 col-sm-12">-->
                            <!--    <div class="swiper mySwiper">-->
                            <!--        <div class="swiper-wrapper">-->
                            <!--            <div class="swiper-slide">-->
                            <!--                <img src="{{asset('assets/dummythree.jpg')}}">-->
                            <!--            </div>-->
                            <!--            <div class="swiper-slide">-->
                            <!--                <img src="{{asset('assets/dummytwo.jpg')}}">-->
                            <!--            </div>-->
                            <!--        </div>-->
                            <!--        <div class="swiper-button-next"></div>-->
                            <!--        <div class="swiper-button-prev"></div>-->
                                    <!-- <div class="swiper-pagination"></div> -->
                            <!--    </div>-->
                            <!--</div>-->
                            <div class="col-lg-12 col-sm-12 mb-lg-3">
                                <h3 class="secondheading mt-5 mb-lg-3">
                                    FEATURES
                                </h3>
                                <nav class="nav">
                                    <a class="nav-link featurelink" style="font-family: 'Josefin Sans Bold';">Meaningful</a>
                                    <a class="nav-link featurelink nostalgic" style="font-family: 'Josefin Sans Bold';">Nostalgic</a>
                                    <a class="nav-link featurelink" style="font-family: 'Josefin Sans Bold';">Interactive</a>
                                    <a class="nav-link featurelink" style="font-family: 'Josefin Sans Bold';">Comprehensive</a>
                                    <a class="nav-link featurelink" style="font-family: 'Josefin Sans Bold';">Timeless</a>
                                    <a class="nav-link featurelink margininstutive" style="font-family: 'Josefin Sans Bold';">Intuitive</a>
                                </nav>
                            </div>
                            <div class="col-lg-4 col-sm-12">
                                <ul>
                                    <li class="lifeatures mt-3" style="font-family: 'Josefin Sans Light';">Create a beautifully detailed “this is your life” style legacy page and share your life story with loved ones and future generations
                                    </li>
                                    <li class="lifeatures mt-3" style="font-family: 'Josefin Sans Light';">Automatically add page visitors to the Guest Book
                                    </li>
                                    <li class="lifeatures mt-3" style="font-family: 'Josefin Sans Light';">Utilise the flexible setting options to maintain your privacy
                                    </li>
                                </ul> 
                            </div>
                            <div class="col-lg-4 col-sm-12">
                                <ul>
                                    <li class="lifeatures mt-3" style="font-family: 'Josefin Sans Light';">Write a story of a loved-one that has passed
                                    </li>
                                    <li class="lifeatures mt-3" style="font-family: 'Josefin Sans Light';">Personalise your legacy page using the easy-to-use template with your choice of background, fonts, colours, photos, videos and more 
                                    </li>
                                    <li class="lifeatures  mt-3" style="font-family: 'Josefin Sans Light';">Create a personalised URL and QR code
                                    </li>
                                </ul> 
                            </div>
                            <div class="col-lg-4 col-sm-12">
                                <ul>
                                    <li class="lifeatures mt-3" style="font-family: 'Josefin Sans Light';">Build your family tree by linking pages
                                    </li>
                                    <li class="lifeatures mt-3" style="font-family: 'Josefin Sans Light';">Allow administrators access to add, edit and approve contributions
                                    </li>
                                    <li class="lifeatures mt-3" style="font-family: 'Josefin Sans Light';">Share event details and track RSVP’s 
                                    </li>
                                </ul> 
                            </div>
                            <div class="col-lg-4 col-sm-12 mt-3">
                                <div class="card" style="background-image:url('{{asset('assets/dummythree.jpg')}}'); background-repeat: no-repeat; background-position: center; border: 1px solid #BE9438;">
                                    <div class="card-body" style="border: none;height: 200px;">
                                        <h4 class="card-title text-center">Breannon Schuback
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-12  mt-3">
                                <div class="card" style="background-image:url('{{asset('assets/dummythree.jpg')}}'); background-repeat: no-repeat; background-position: center; border: 1px solid #BE9438;">
                                    <div class="card-body" style="border: none;height: 200px;">
                                        <h4 class="card-title text-center">Joyce Jeffers
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-12  mt-3">
                                <div class="card" style="background-image:url('{{asset('assets/dummythree.jpg')}}'); background-repeat: no-repeat; background-position: center; border: 1px solid #BE9438;">
                                    <div class="card-body" style="border: none;height: 200px;">
                                        <h4 class="card-title text-center">Lex Horgan
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-sm-12 text-center mt-3">
                                <button class="btn btn-large createa_pagebuttonwidthsetres" style="background-image: url('{{asset('assets/buttonbackground.PNG')}}');font-weight: bold;width: 400px;height: 50px;border-radius: 15px;">CREATE A PAGE</button>
                            </div>
                            <div class="col-lg-12 col-sm-12 mt-3" style="border-top: 2px solid #ccaa54; border-bottom: 2px solid #ccaa54;">
                                <div class="row">
                                    <div class="col-lg-12 col-sm-12 text-center">
                                        <h3 class="secondheading mt-5">
                                            REVIEWS
                                        </h3>
                                        <i class="fa fa-heart text-center" style="color:#ccaa54;"></i>
                                        <i class="fa fa-heart text-center" style="color:#ccaa54;"></i>
                                        <i class="fa fa-heart text-center" style="color:#ccaa54;"></i>
                                        <i class="fa fa-heart text-center" style="color:#ccaa54;"></i>
                                        <i class="fa fa-heart text-center" style="color:#ccaa54;"></i>
                                    </div>
                                    <div class="col-lg-10 offset-lg-1 text-light">
                                        <div id="client-testimonial-carousel" class="carousel slide" data-ride="carousel" style="height:200px;">
                                          <div class="carousel-inner" role="listbox">
                                            <div class="carousel-item active text-center p-4" style="padding-bottom:0px!important;">
                                              <blockquote class="blockquote text-center">
                                                <p class="mb-0 blockquotep" style="color:black;font-family: 'Josefin Sans Light';"><i class="fa fa-quote-left" style="color:black;"></i>I love this webpage Kaz. I think it's very well thought out. It’s easy to navigate. It's a place where people can continue to honour loved ones. Pay tribute. Forever loved & never forgotten. You are providing a place for people to do this.
                                                </p>
                                                <footer class="blockquote-footer"  style="color:#BE9438;font-family: 'Josefin Sans Light';">David Bissell</footer>
                                                <!-- Client review stars -->
                                                <!-- "fa fa-star" for a full star, "far fa-star" for an empty star, "far fa-star-half-alt" for a half star. -->
                                                <!--<p class="client-review-stars">-->
                                                <!--  <i class="fa fa-star" style="color:yellow;"></i>-->
                                                <!--  <i class="fa fa-star" style="color:yellow;"></i>-->
                                                <!--  <i class="fa fa-star" style="color:yellow;"></i>-->
                                                <!--  <i class="fa fa-star" style="color:yellow;"></i>-->
                                                <!--  <i class="fa fa-star" style="color:yellow;"></i>-->
                                                <!--</p>-->
                                              </blockquote>
                                            </div>
                                            <div class="carousel-item text-center p-4" style="padding-bottom:0px!important;">
                                                <blockquote class="blockquote text-center">
                                                  <p class="mb-0 blockquotep" style="color:black;"><i class="fa fa-quote-left" style="color:black;"></i>Second Everybody is a genius. But if you judge a fish by its ability to climb a tree, it will live its whole life believing that it is stupid.
                                                  </p>
                                                  <footer class="blockquote-footer"  style="color:#BE9438;font-family: 'Josefin Sans Light';">Second Albert Einstein</footer>
                                                  <!-- Client review stars -->
                                                  <!-- "fa fa-star" for a full star, "far fa-star" for an empty star, "far fa-star-half-alt" for a half star. -->
                                                  <!--<p class="client-review-stars">-->
                                                  <!--  <i class="fa fa-star" style="color:yellow;"></i>-->
                                                  <!--  <i class="fa fa-star" style="color:yellow;"></i>-->
                                                  <!--  <i class="fa fa-star" style="color:yellow;"></i>-->
                                                  <!--  <i class="fa fa-star" style="color:yellow;"></i>-->
                                                  <!--  <i class="fa fa-star" style="color:yellow;"></i>-->
                                                  <!--</p>-->
                                                </blockquote>
                                              </div>
                                              <div class="carousel-item text-center p-4" style="padding-bottom:0px!important;">
                                                <blockquote class="blockquote text-center">
                                                  <p class="mb-0 blockquotep" style="color:black;"><i class="fa fa-quote-left" style="color:black;"></i>Third Everybody is a genius. But if you judge a fish by its ability to climb a tree, it will live its whole life believing that it is stupid.
                                                  </p>
                                                  <footer class="blockquote-footer"  style="color:#BE9438;font-family: 'Josefin Sans Light';">Third Albert Einstein</footer>
                                                  <!-- Client review stars -->
                                                  <!-- "fa fa-star" for a full star, "far fa-star" for an empty star, "far fa-star-half-alt" for a half star. -->
                                                  <!--<p class="client-review-stars">-->
                                                  <!--  <i class="fa fa-star" style="color:yellow;"></i>-->
                                                  <!--  <i class="fa fa-star" style="color:yellow;"></i>-->
                                                  <!--  <i class="fa fa-star" style="color:yellow;"></i>-->
                                                  <!--  <i class="fa fa-star" style="color:yellow;"></i>-->
                                                  <!--  <i class="fa fa-star" style="color:yellow;"></i>-->
                                                  <!--</p>-->
                                                </blockquote>
                                              </div>
                                          </div>
                                          <ol class="carousel-indicators">
                                            <li data-target="#client-testimonial-carousel" data-slide-to="0" class="active"></li>
                                            <li data-target="#client-testimonial-carousel" data-slide-to="1"></li>
                                            <li data-target="#client-testimonial-carousel" data-slide-to="2"></li>
                                          </ol>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-sm-12 text-center mt-2">
                                <h3 class="secondheading mt-5">
                                    HOW IT WORKS
                                </h3>
                                <h5 class="secondheading mt-lg-3 mb-lg-3">
                                    Choose a suitable package & pricing option
                                    <span class="text-dark">– Lifetime or Subscription.</span>
                                </h5>
                                <div class="row">
                                    <div class="col-lg-4 col-sm-6 margintopadd">
                                        <div class="card heightsitting" style="height: 160px;border:1px solid rgb(190 148 56);box-shadow: 0 .5rem 1rem rgba(0,0,0,.15)!important;">
                                            <div class="card-header" style="border:0px;background-color: #fff;">
                                                <h6 class="secondheading">Select a page type
                                                </h6>
                                            </div>
                                            <div class="card-body">
                                                <p style="font-family: 'Josefin Sans Light';">Autobiography, Biography 
                                                    or Memorial
                                                    </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-6 margintopadd">
                                        <div class="card heightsitting" style="height: 160px;border:1px solid rgb(190 148 56);box-shadow: 0 .5rem 1rem rgba(0,0,0,.15)!important;">
                                            <div class="card-header" style="border:0px;background-color: #fff;">
                                                <h6 class="secondheading">Set your privacy options
                                                </h6>
                                            </div>
                                            <div class="card-body">
                                                <p style="font-family: 'Josefin Sans Light';">Set your page to public  or private
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-6 margintopadd">
                                        <div class="card heightsitting" style="height: 160px;border:1px solid rgb(190 148 56);box-shadow: 0 .5rem 1rem rgba(0,0,0,.15)!important;">
                                            <div class="card-header" style="border:0px;background-color: #fff;">
                                                <h6 class="secondheading">Authorise page administrators
                                                </h6>
                                            </div>
                                            <div class="card-body">
                                                <p style="font-family: 'Josefin Sans Light';">Invite people to help with adding, and approving contributions
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-6 mt-2">
                                        <div class="card heightsitting" style="height: 160px;border:1px solid rgb(190 148 56);box-shadow: 0 .5rem 1rem rgba(0,0,0,.15)!important;">
                                            <div class="card-header" style="border:0px;background-color: #fff;">
                                                <h6 class="secondheading">Create your design
                                                </h6>
                                            </div>
                                            <div class="card-body">
                                                <p style="font-family: 'Josefin Sans Light';">Choose your background, colours,  font, and URL
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-6 mt-2">
                                        <div class="card heightsitting" style="height: 160px;border:1px solid rgb(190 148 56);box-shadow: 0 .5rem 1rem rgba(0,0,0,.15)!important;">
                                            <div class="card-header" style="border:0px;background-color: #fff;">
                                                <h6 class="secondheading">Add your content
                                                </h6>
                                            </div>
                                            <div class="card-body">
                                                <p style="font-family: 'Josefin Sans Light';">Add unlimited photo’s, video’s, and text
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-6 mt-2">
                                        <div class="card heightsitting" style="height: 160px;border:1px solid rgb(190 148 56);box-shadow: 0 .5rem 1rem rgba(0,0,0,.15)!important;">
                                            <div class="card-header" style="border:0px;background-color: #fff;">
                                                <h6 class="secondheading">Share with family and friends
                                                </h6>
                                            </div>
                                            <div class="card-body">
                                                <p style="font-family: 'Josefin Sans Light';">Share your page and invite them to contribute
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-sm-12 mt-3" style="border-top: 2px solid #ccaa54;">
                                <div class="row">
                                    <div class="col-lg-12 col-sm-12 text-center">
                                        <h3 class="secondheading mt-5">
                                            PACKAGES & PRICING
                                        </h3>
                                    </div>
                                    <div class="col-lg-6 col-sm-6 mb-4">
                                        <div class="card text-center" style="border:0px;">
                                            <div class="card-header text-center" style="border:0px;background-color: #fff;">
                                                <h4 style="font-weight: bold;color:#000;" class="text-center cursorchange" data-toggle="modal" data-target="#monthlypackage">
                                                    Monthly Subscription $22.22
                                                </h4>
                                                <!--<button class="btn btn-sm text-center" style="background-color:#BE9438; text-align:center;">Detail</button>-->
                                                <!--<p class="text-center" style="font-family: 'Josefin Sans Light';">$5.55</p>-->
                                                <div class="modal fade" id="monthlypackage" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                  <div class="modal-dialog">
                                                    <div class="modal-content">
                                                      <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Monthly Subscription $22.22</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                          <span aria-hidden="true">&times;</span>
                                                        </button>
                                                      </div>
                                                      <div class="modal-body">
                                                        <p>“Please note:Pricing outside of Australia are in US Dollars.”</p>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6 mb-4">
                                        <div class="card" style="border:0px;">
                                            <div class="card-header" style="border:0px;background-color: #fff;">
                                                <h4 style="font-weight: bold;color:#000;" class="text-center cursorchange"  data-toggle="modal" data-target="#lifetimepackage">
                                                    Lifetime Membership $333.33
                                                </h4>
                                                <!--<p class="text-center" style="font-family: 'Josefin Sans Light';">$111</p>-->
                                                <div class="modal fade" id="lifetimepackage" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                  <div class="modal-dialog">
                                                    <div class="modal-content">
                                                      <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Lifetime Membership $333.33</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                          <span aria-hidden="true">&times;</span>
                                                        </button>
                                                      </div>
                                                      <div class="modal-body">
                                                        <p class="text-center">“Please note:Pricing outside of Australia are in US Dollars.”</p>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--<div class="col-lg-12 col-sm-12 text-center">-->
                                    <!--    <h5 class="selectionprices">-->
                                    <!--       Please note these prices are in US dollars-->
                                    <!--    </h5>-->
                                    <!--</div>-->
                                </div>
                            </div>

                            <div class="col-lg-12 col-sm-12 mt-3" style="border-top: 2px solid #ccaa54; border-bottom: 2px solid #ccaa54;">
                                <div class="row">
                                    <div class="col-lg-12 col-sm-12 text-center">
                                        <h3 class="secondheading mt-5">
                                            WHY CHOOSE A LIFE WORTH REMEMBERING?
                                        </h3>
                                    </div>
                                    <div class="col-lg-12 col-sm-12 mb-4">
                                        <p class="text-center" style="font-family: 'Josefin Sans Light';">At "A Life Worth Remembering," we understand the profound impact of preserving memories and stories for  future generations. Here's why you should choose us to craft your online legacy:
                                        </p>
                                        <h6 class="secondheading mt-lg-4" style="font-size:18px;font-weight: bold;">
                                            Personalised Touch: 
                                        </h6>
                                        <p class="text-center" style="font-family: 'Josefin Sans Light';">
                                            We believe each life story is unique. Our platform allows you to create a personalised online legacy that truly reflects the essence of your life, or the life of someone you love.
                                        </p>

                                        <h6 class="secondheading mt-lg-4" style="font-size:18px;font-weight: bold;">
                                            Easy to Use:  
                                        </h6>
                                        <p class="text-center" style="font-family: 'Josefin Sans Light';">
                                            Our platform is user-friendly, with a template that allows you to customise the design of the page easily to     reflect the personality of the honouree.
                                        </p>

                                        <h6 class="secondheading mt-lg-4" style="font-size:18px;font-weight: bold;">
                                            Unlimited Content:   
                                        </h6>
                                        <p class="text-center" style="font-family: 'Josefin Sans Light';">
                                            Preserve every aspect of your story without limits. Upload unlimited photos, videos, soundbites, and text to create a comprehensive and enduring tribute.
                                        </p>

                                        <h6 class="secondheading mt-lg-4" style="font-size:18px;font-weight: bold;">
                                            Customisable Sections:    
                                        </h6>
                                        <p class="text-center" style="font-family: 'Josefin Sans Light';">
                                            Tailor your page to reflect your unique story. Choose which sections you want to publish, from photos and videos to personal anecdotes and achievements, creating a truly personalised legacy page.
                                        </p>

                                        <h6 class="secondheading mt-lg-4" style="font-size:18px;font-weight: bold;">
                                            Lasting Tributes:    
                                        </h6>
                                        <p class="text-center" style="font-family: 'Josefin Sans Light';">
                                            Your loved one's legacy deserves to be remembered. We ensure that the memories shared on our platform endure, providing a lasting tribute for generations to come.
                                        </p>

                                        <h6 class="secondheading mt-lg-4" style="font-size:18px;font-weight: bold;">
                                            Secure and Private:    
                                        </h6>
                                        <p class="text-center" style="font-family: 'Josefin Sans Light';">
                                            We prioritize the security and privacy of your data. Rest assured that your memories are safe with us, accessible only to those you choose to share them with.
                                        </p>

                                        <h6 class="secondheading mt-lg-4" style="font-size:18px;font-weight: bold;">
                                            Supportive Community:     
                                        </h6>
                                        <p class="text-center" style="font-family: 'Josefin Sans Light';">
                                            Join a community of individuals who understand the importance of preserving legacies. Link your pages, and share your lives to gain inspiration, and connect with others who are also creating a life worth remembering.
                                        </p>

                                        <h6 class="secondheading mt-lg-4" style="font-size:18px;font-weight: bold;">
                                            All-Inclusive:      
                                        </h6>
                                        <p class="text-center" style="font-family: 'Josefin Sans Light';">
                                            Say goodbye to hidden fees. We believe in transparent pricing, offering access to all features without any additional costs. Create a comprehensive tribute without worrying about extra charges.
                                        </p>

                                        <h6 class="secondheading mt-lg-4" style="font-size:18px;font-weight: bold;">
                                            Multiple Administrators:       
                                        </h6>
                                        <p class="text-center" style="font-family: 'Josefin Sans Light';">
                                            Sharing the responsibility of curating memories is made easy with multiple administrators. Collaborate with    family and friends to add, edit, and approve contributions, ensuring that your loved one's legacy is accurately represented.
                                        </p>

                                        <h6 class="secondheading mt-lg-4" style="font-size:18px;font-weight: bold;">
                                            No Account Required for Guests:       
                                        </h6>
                                        <p class="text-center" style="font-family: 'Josefin Sans Light';">
                                            We understand that not everyone may want to create an account. Guests can view and contribute to the legacy page without the need for an account, making it easier for friends and family to participate in celebrating a life worth remembering.
                                        </p>

                                        <h6 class="secondheading mt-lg-4" style="font-size:18px;font-weight: bold;">
                                            Accessible Anytime, Anywhere:       
                                        </h6>
                                        <p class="text-center" style="font-family: 'Josefin Sans Light';">
                                            Your memories are accessible from anywhere with an internet connection. Whether you're at home or on the go, you can revisit and share your loved one's legacy with ease. 
                                        </p>
                                        
                                        <h6 class="secondheading mt-lg-4" style="font-size:18px;font-weight: bold;">
                                            Ad-Free and Respectful: 
                                        </h6>
                                        <p class="text-center" style="font-family: 'Josefin Sans Light';">
                                            Your privacy and peace of mind is our top priorities. Unlike free sites, we do not display ads on your page, sell user data, or spam users. Your memories remain private and secure, free from distractions and unwanted solicitations. 
                                        </p>
                                    </div>
                                    <div class="col-lg-12 col-sm-12 text-center">
                                        <button class="btn btn-large createa_pagebuttonwidthsetres"  style="background-image: url('{{asset('assets/buttonbackground.PNG')}}');font-weight: bold;width: 400px;height: 56px;border-radius: 15px;">CREATE A PAGE</button>
                                    </div>
                                    <div class="col-lg-12 col-sm-12 text-center">
                                        <h3 class="secondheading mt-5">
                                            PRESS
                                        </h3>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-sm-12 mt-3">
                                <div class="row">
                                    <div class="col-lg-12 col-sm-12 text-center">
                                        <!--<p style="font-family: 'Josefin Sans Light';">-->
                                        <!--    "A Life Worth Remembering" was first established to honour my daughter Breannon, who passed away unexpectedly in August 2023. Whilst in the design phase, I decided I also wanted to commemorate the life of my surviving daughter, Kaitlyn, and link their pages. From there, I decide to add other family and friends and link their pages to create a more comprehensive and holistic story of their lives. It has become such an important tool that I now want to open it to anyone who sees the benefit of leaving a legacy for loved ones.-->
                                        <!--</p>-->
                                        <p style="font-family: 'Josefin Sans Light';">
                                            "A Life Worth Remembering" was first established to honour my late daughter Breannon, who passed away unexpectedly in August 2023. This platform later expanded to celebrate the life of my surviving daughter, Kaitlyn, as well as other family members and friends, past and present. By linking their pages together, we can create a more comprehensive and holistic story of our lives. 
                                        </p>
                                    </div>
                                </div>
                            </div>

                            
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
                                                <!--    <li class="nav-item" style="background-image: url('{{asset('assets/buttonbackground.PNG')}}');">-->
                                                <!--      <a class="nav-link active" href="#" style="color: #000;font-family: 'Josefin Sans Light';"><i class="fa fa-facebook text-white"></i></a>-->
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
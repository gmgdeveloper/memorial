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
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" />
    <style>
        .navbar-brand {
            color: white !important;
            font-size: 25px;
        }

        .navlinks {
            margin-right: 30px;
            font-family: "Josefin Sans Light";
        }

        .searchinputnav {
            height: 30px;
            border-radius: 6px;
            font-size: 12px;
        }
        .footersearchinputnav{
            height: 30px;
            border-radius: 6px;
            font-size: 12px;
            width: 100%!important;
        }
        h3.mainheading {
            font-family: 'Josefin Sans Bold';
            font-size: 18px;
            font-weight: 500;
            text-align: center;
            color: #BE9438;
        }

        .mainheading {
            font-size: 18px;
            font-family: 'Josefin Sans Bold';
            font-weight: 500;
            text-align: center;
            color: #BE9438;
        }

        h3.secondheading {
            font-family: 'Josefin Sans Bold';
            font-size: 22px;
            text-align: center;
            font-weight: 500;
            color: #BE9438;
        }

        .secondheading {
            font-size: 22px;
            font-family: 'Josefin Sans Bold';
            font-weight: 500;
            text-align: center;
            color: #BE9438;
        }

        .pagemainheading {
            font-size: 25px;
            font-family: 'Josefin Sans Bold';
            font-weight: 500;
            text-align: center;
            color: #BE9438;
        }
        .anotherpagemainheading {
            font-size: 25px;
            font-family: 'Josefin Sans Bold';
            font-weight: 500;
            text-align: right;
            color: #BE9438;
        }

        .transitionheading {
            font-size: 25px;
            font-family: 'Josefin Sans Bold';
            font-weight: 500;
            text-align: center;
            color: #000;
        }

        .wishesheading{
            font-size: 18px;
            font-family: 'Josefin Sans Bold';
            font-weight: 500;
            text-align: center;
            color: #000;
        }
        .breesheading{
            font-size: 15px;
            font-family: 'Josefin Sans Bold';
            font-weight: 500;
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
            /* width: 100%; */
            /* height: 400px; */
            /* object-fit: cover; */
        }

        .featurelink {
            font-size: 22px;
            color: #BE9438;
            margin-right: 15px;
            margin-left: 27px;
            font-weight: bold;
        }

        .lifeatures {
            font-size: 15px;
        }

        #client-testimonial-carousel {
            min-height: 200px;
        }

        .carousel-indicators .active {
            background-color: black;
        }

        .carousel-indicators>li {
            background-color: grey;
        }

        h4 {
            font-family: 'Josefin Sans Bold';
            font-weight: 500;
        }
        h5 {
            font-family: 'Josefin Sans Bold';
            font-weight: 500;
        }

        h3 {
            font-family: 'Josefin Sans Bold';
            font-weight: 500;
        }

        .brennonheading {
            font-size: 40px;
            font-family: 'Josefin Sans Bold';
            font-weight: 500;
            text-align: center;
            color: #000;
        }
        h6{
            font-family: 'Josefin Sans Bold';
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
        .offinmobile{
           display:none!important;
        }
        .swiper-button-next, .swiper-button-prev {
            color: #be9438!important;
        }
        .searchinputnavhsbdha{
            float:right;
        }
        
        .slider-container {
            max-width: 100%; /* Adjust the maximum width as needed */
            overflow: hidden;
            margin: 0 auto;
            position: relative;
          }
          .slider-content {
            display: flex;
            transition: transform 0.5s ease;
          }
          .slider-item {
            flex: 0 0 100%; /* Display one item at a time */
            margin-right: 20px; /* Adjust the space between items as needed */
            max-width: 300px; /* Adjust the maximum width as needed */
          }
          .product-image {
            width: 100%;
            height: auto;
            border: 1px solid #ccc; /* Add border for better visibility */
          }
          .product-info {
            text-align: center;
            padding: 10px;
          }
          .prev, .next {
            position: absolute;
            top: 35%;
            transform: translateY(-50%);
            cursor: pointer;
            background-color: #f1f1f100;
            padding: 10px;
            border: 0px solid #ccc;
            border-radius: 50%;
            font-size: 40px;
            z-index: 1;
          }
          .prev {
            left: 0;
            color:#be9438;
          }
          .next {
            right: 0;
            color:#be9438;
          }
          .swiper-button-next.mt-lg-5 {
                top: 60px;
            }
            .swiper-button-prev.mt-lg-5{
                top: 60px;
            }
            .swiper-button-next.generalnext {
                margin-top: -76px;
            }
            .swiper-button-prev.generalprev{
                margin-top: -76px;
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
          .number {
                width: 45px !important;
                height: 40px!important;
           }
           .heightsetpackagediv{
               height:700%!important;
           }
           .visiblecheckbox{
               width:20%!important;
               margin-top:20px!important;
           }
           .visiblecheckboxdiv{
               width:80%!important;
           }
           .marginledftcvc{
               margin-left:4px!important;
           }
           .floatfledft{
               float:left!important;
               margin-right: 190px!important;
           }
           .imagemainheightset{
               height:150px!important;
           }
           .pagemainheading{
                font-size: 20px!important;
           }
           .brennonheading{
                font-size: 20px!important;
           }
           .borderremove{
               padding-bottom:130px!important;
           }
           .contactadministration{
               width:100%!important;
           }
           .addfullresposnive{
               font-size:11px!important;
           }
           .funeralmargin{
               margin-top: 1rem!important
           }
           .dummyvideooo{
               height:250px!important;
           }
           .heightsethournreebotonimage{
               height:200px!important;
           }
           .slider-item{
                margin-right:0px!important;
            }
            .textcentssrer{
               text-align:center!important;
           }
           a.navbar-brand.mobileon {
            width: 50%!important;
            font-size:12px;
           }
           button:focus{
               outline:inherit!important;
           }
           .searchinputnavhsbdha{
               float: inherit;
           }
           .heightmainstory{
               height:200px!important;
           }
           .prev, .next {
                position: absolute;
                top: 35%;
                transform: translateY(-50%);
                cursor: pointer;
                background-color: #f1f1f100;
                padding: 10px;
                border: 0px solid #ccc;
                border-radius: 50%;
                font-size: 40px;
                z-index: 1;
            }
            .qrimageheightset{
                height:310px!important;
            }
            .anotherpagemainheading{
                text-align:center!important;
                margin-right:0px!important;
                font-size: 20px !important;
            }
            .storiesanotherpagemainheading{
                text-align:center!important;
                margin-right:0px!important;
                margin-top:15px;
                font-size: 20px !important;
            }
            .addcontactswipermargintopres{
                margin-top:100px!important;
            }
            .transitionheading {
                font-size:20px!important;
            }
            .swiper-button-next.mt-lg-5 {
                top: 140px;
            }
            .swiper-button-prev.mt-lg-5{
                top: 140px;
            }
            .qrcodediv{
                padding-left:0px!important;
                padding-right:0px!important;
                margin-bottom:1rem!important;
            }
            .topaddmarginsub{
                margin-top:30px!important;
                margin-bottom:10px!important;
            }
            .paddingunsget{
                padding-left:0px!important;
                padding-right:0px!important
            }
            .addpagingmodilbe{
                padding:6px!important;
            }
            .topcontactadministrationbottom{
                margin-top:10px!important;
                margin-bottom:10px!important;
            }
            .pagenotify{
                text-align:left!important;
            }
            button.btn.notifybutton {
                height: 31px;
                border-radius: 0px;
                margin-top: 0px;
                padding-top:2px;
            }
            .form-control:focus {
                color: #495057;
                background-color: #fff;
                border-color: lightgrey;
                outline: 0;
                box-shadow: 0 0 0 .2rem rgb(0 123 255 / 0%);
            }
            .offinmobile{
                padding-right:0px!important;
            }
            .newclasspaddingoff{
                padding-right:0px!important;
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
            .searchinputnavhsbdha{
               float: inherit;
           }
           .heightmainstory{
               height:200px!important;
           }
           .contactadministration{
               width:100%!important;
           }
           .qrimageheightset{
                height:310px!important;
            }
            .anotherpagemainheading{
                text-align:center!important;
                margin-right:0px!important;
                font-size: 20px !important;
            }
            .storiesanotherpagemainheading{
                text-align:center!important;
                margin-right:0px!important;
                margin-top:15px;
            }
            .addcontactswipermargintopres{
                margin-top:100px!important;
            }
            .transitionheading {
                font-size:20px!important;
            }
             .swiper-button-next.mt-lg-5 {
                top: 140px;
            }
            .swiper-button-prev.mt-lg-5{
                top: 140px;
            }
            .qrcodediv{
                padding-left:0px!important;
                padding-right:0px!important;
                margin-bottom:1rem!important;
            }
            .topaddmarginsub{
                margin-top:30px!important;
                 margin-bottom:10px!important;
            }
            .paddingunsget{
                padding-left:0px!important;
                padding-right:0px!important
            }
            .addpagingmodilbe{
                padding:6px!important;
            }
            .topcontactadministrationbottom{
                margin-top:10px!important;
                margin-bottom:10px!important;
            }
            button.btn.notifybutton {
                height: 31px;
                border-radius: 0px;
                margin-top: 0px;
                padding-top:2px;
            }
            .form-control:focus {
                color: #495057;
                background-color: #fff;
                border-color: lightgrey;
                outline: 0;
                box-shadow: 0 0 0 .2rem rgb(0 123 255 / 0%);
            }
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="container">
                <div class="row" id="home">
                    <div class="col-lg-12 col-sm-12 paddingunsget">
                        <div class="row p-lg-4 addpagingmodilbe" style="padding-top:0px!important;padding-bottom:0px!important;">
                            <div class="col-lg-12 mobileoff">
                                <nav class="navbar navbar-expand-lg navbar-light " style="background-color: #BE9438;">
                                    <!-- <a class="navbar-brand" href="#">Navbar</a> -->
                                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                                        data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup"
                                        aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon"></span>
                                    </button>
                                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                                        <div class="navbar-nav">
                                            <a class="nav-item nav-link ml-lg-4" href="#home"
                                                style="color:white;font-weight: bold;font-family: 'Josefin Sans Light';">HOME</a>
                                            <a class="nav-item nav-link ml-lg-3" href="#about"
                                                style="color:white;font-weight: bold;font-family: 'Josefin Sans Light';">ABOUT</a>
                                            <a class="nav-item nav-link ml-lg-3" href="#gallery"
                                                style="color:white;font-weight: bold;font-family: 'Josefin Sans Light';">GALLERY</a>
                                            <a class="nav-item nav-link ml-lg-2" href="#guest"
                                                style="color:white;font-weight: bold;font-family: 'Josefin Sans Light';">GUEST</a>
                                            <a class="nav-item nav-link ml-lg-2" href="#stories"
                                                style="color:white;font-weight: bold;font-family: 'Josefin Sans Light';">STORIES</a>
                                            <a class="nav-item nav-link ml-lg-2" href="#transition"
                                                style="color:white;font-weight: bold;font-family: 'Josefin Sans Light';">TRANSITION</a>
                                            <a class="nav-item nav-link ml-lg-2" href="#home"
                                                style="color:white;font-weight: bold;font-family: 'Josefin Sans Light';">MEMORIAL</a>
                                            <a class="nav-item nav-link ml-lg-2" href="#tributes"
                                                style="color:white;font-weight: bold;font-family: 'Josefin Sans Light';">TRIBUTES</a>
                                            <a class="nav-item nav-link ml-lg-2" href="#contact"
                                                style="color:white;font-weight: bold;font-family: 'Josefin Sans Light';">CONTACT</a>
                                            <div class="dropdown show">
                                                <a class="nav-item nav-link ml-lg-2"
                                                    style="color:white;font-weight: bold;font-family: 'Josefin Sans Light';" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">PROFILE</a>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                        <a class="dropdown-item" href="#">Profile</a>
                                                        <a class="dropdown-item" href="#">Logout</a>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                </nav>
                            </div>
                                <div class="col-lg-6 col-sm-6 mobileoff" style="display:none;">
                                    <nav class="navbar navbar-expand-lg navbar-light bg-white">
                                        <a class="navbar-brand" href="<?php echo e(route('home')); ?>" style="font-family: 'Josefin Sans Bold';">A Life Worth Remembering</a>
                                    </nav>
                                </div>
                                <div class="col-lg-6 col-sm-12 mt-lg-2 mb-lg-5 mobileon offinmobile">
                                    <nav class="navbar navbar-expand-lg navbar-light bg-white" style="background-color: #be9438 !important;">
                                         <a class="navbar-brand mobileon" href="<?php echo e(route('home')); ?>" style="font-family: 'Josefin Sans Bold';display:none;" >A Life Worth Remembering</a>
                                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                                            data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                                            aria-label="Toggle navigation">
                                            <span class="navbar-toggler-icon"></span>
                                        </button>
                                        <div class="collapse navbar-collapse" id="navbarNav">
                                            <div class="navbar-nav">
                                                <a class="nav-item nav-link ml-lg-1" href="#home"
                                                    style="color:white;font-weight: bold;font-family: 'Josefin Sans Light';">HOME</a>
                                                <a class="nav-item nav-link ml-lg-4" href="#about"
                                                    style="color:white;font-weight: bold;font-family: 'Josefin Sans Light';">ABOUT</a>
                                                <a class="nav-item nav-link ml-lg-4" href="#gallery"
                                                    style="color:white;font-weight: bold;font-family: 'Josefin Sans Light';">GALLERY</a>
                                                <a class="nav-item nav-link ml-lg-4" href="#guest"
                                                    style="color:white;font-weight: bold;font-family: 'Josefin Sans Light';">GUEST</a>
                                                <a class="nav-item nav-link ml-lg-4" href="#stories"
                                                    style="color:white;font-weight: bold;font-family: 'Josefin Sans Light';">STORIES</a>
                                                <a class="nav-item nav-link ml-lg-4" href="#transition"
                                                    style="color:white;font-weight: bold;font-family: 'Josefin Sans Light';">TRANSITION</a>
                                                <a class="nav-item nav-link ml-lg-4" href="#home"
                                                    style="color:white;font-weight: bold;font-family: 'Josefin Sans Light';">MEMORIAL</a>
                                                <a class="nav-item nav-link ml-lg-4" href="#tributes"
                                                    style="color:white;font-weight: bold;font-family: 'Josefin Sans Light';">TRIBUTES</a>
                                                <a class="nav-item nav-link ml-lg-5" href="#contact"
                                                    style="color:white;font-weight: bold;font-family: 'Josefin Sans Light';">CONTACT</a>
                                                <div class="dropdown show">
                                                    <a class="nav-item nav-link ml-lg-5" 
                                                        style="color:white;font-weight: bold;font-family: 'Josefin Sans Light';" role="button" id="dropdownMenuLinksec" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">PROFILE</a>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLinksec">
                                                        <a class="dropdown-item" href="#">Profile</a>
                                                        <a class="dropdown-item" href="#">Logout</a>
                                                    </div>
                                                </div>
                                            
                                            </div>
                                        </div>
                                    </nav>
                                </div>
                                <div class="col-lg-6 col-sm-6 mobileoff" style="display:none;">
                                    <nav class="navbar navbar-expand-lg navbar-light bg-white">
                                        <a class="navbar-brand" href="#" style="font-family: 'Josefin Sans Bold';">A Life Worth Remembering</a>
                                    </nav>
                                </div>
                            <div class="col-lg-12 col-sm-12 newclasspaddingoff">
                                <img src="assets/pageonebanner.PNG"
                                    style="width:100%;height:400px;border: 2px solid #BE9438!important;" class="imagemainheightset">
                            </div>
                            <div class="col-lg-12 col-sm-12 newclasspaddingoff" id="about">
                                <h3 class="pagemainheading mt-3">CELEBRATING THE LIFE OF</h3>
                                <h3 class="mt-2 text-center brennonheading"><b>Breannon Kimberley Schuback</b></h3>
                            </div>
                            <div class="col-lg-12 col-sm-12 mt-3 newclasspaddingoff">
                                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img class="d-block w-100 imagemainheightset" src="assets/dummy3.png" alt="First slide"
                                                style="height: 200px;">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h5 style="color:#000;">First Quotes</h5>
                                                <p style="font-family: 'Josefin Sans Light';color:#000;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora
                                                    quos voluptatem aliquid, error reprehenderit vero officia ratione
                                                    quidem corrupti assumenda magni voluptatibus id! Molestias commodi
                                                    laborum asperiores vero sint quaerat.</p>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100 imagemainheightset" src="assets/dummy3.png" alt="Second slide"
                                                style="height: 200px;">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h5 style="color:#000;">Second Quotes</h5>
                                                <p style="font-family: 'Josefin Sans Light';color:#000;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora
                                                    quos voluptatem aliquid, error reprehenderit vero officia ratione
                                                    quidem corrupti assumenda magni voluptatibus id! Molestias commodi
                                                    laborum asperiores vero sint quaerat.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Swiper-style navigation buttons -->
                                    <a class="swiper-button-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                        <span class="swiper-button-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="swiper-button-next" href="#carouselExampleControls" role="button" data-slide="next">
                                        <span class="swiper-button-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-12 col-sm-12 mt-3 newclasspaddingoff">
                                <video width="100%" height="400" controls class="imagemainheightset">
                                    <source src="assets/dummyvideo.mp4" type="video/mp4">
                                </video>
                            </div>
                            <div class="col-lg-12 col-sm-12 mt-3 pb-5 newclasspaddingoff" style="border-bottom: 2px solid #BE9438!important;">
                                <h3 class="pagemainheading mt-lg-3 topaddmarginsub" style="color:#A423EB!important;" id="overview">AN OVERVIEW</h3>
                                <p class="mt-3" style="font-family: 'Josefin Sans Light';" id="editableParagraphoverview" onclick="makeEditable()" contenteditable="true">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam faucibus volutpat venenatis. Nunc pretium lectus ac augue tincidunt, et elementum nisi suscipit. Sed eu mollis libero. Sed faucibus risus ex, dignissim porttitor nisl malesuada non. Donec elit arcu, vehicula et justo at, accumsan finibus libero. Maecenas molestie gravida dui ac aliquet. Nunc ornare, nunc quis luctus cursus, justo eros elementum sapien, quis malesuada sapien dolor sit amet augue. Vivamus rhoncus lectus sit amet viverra gravida. Nunc id turpis in enim malesuada varius ut at arcu.</p>
                                <script>
                                    document.addEventListener("DOMContentLoaded", function() {
                                        var paragraph = document.getElementById('editableParagraphoverview');
                                        
                                        paragraph.addEventListener('blur', function() {
                                            var editedData = paragraph.textContent.trim(); // Get the edited content
                                            // Make an Ajax request to send the edited data to Laravel controller
                                            fetch('/save-edited-data', {
                                                method: 'POST',
                                                headers: {
                                                    'Content-Type': 'application/json',
                                                    'X-CSRF-TOKEN': '<?php echo e(csrf_token()); ?>' // Include CSRF token if applicable
                                                },
                                                body: JSON.stringify({ editedData: editedData })
                                            })
                                            .then(response => {
                                                if (response.ok) {
                                                    console.log('Data saved successfully!');
                                                } else {
                                                    console.error('Failed to save data');
                                                }
                                            })
                                            .catch(error => {
                                                console.error('Error:', error);
                                            });
                                        });
                                    });

                                    function makeEditable() {
                                        var paragraph = document.getElementById('editableParagraphoverview');
                                        paragraph.contentEditable = true;
                                        paragraph.focus();
                                    }
                                </script>
                            </div>
                            <div class="col-lg-12 col-sm-12 mt-3 mb-5 newclasspaddingoff">
                                <h3 class="pagemainheading mt-lg-3 topaddmarginsub" style="color:#A423EB!important;" id="relations">RELATIONSHIPS</h3>
                                <div class="swiper myrelationswiper mt-3 mobileoff">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide" style="height: 280px;">
                                            <div class="card" style="background-color: #fff;border:1px solid #BE9438!important;">
                                                <div class="card-header text-center"
                                                    style="background-color: #fff;border:0px;">
                                                    <h5 style="font-size:16px;">CHILD OF</h5>
                                                </div>
                                                <div class="card-body">
                                                    <!--<p style="font-size: 13px;text-align: justify;font-family: 'Josefin Sans Light';">Karen Schuback-->
                                                    <!--    <br>-->
                                                    <!--    Ross Daniel (Estranged)-->
                                                    <!--</p>-->
                                                    <p style="font-size: 13px;text-align: justify;font-family: 'Josefin Sans Light';">
                                                        <span style="color: #BFAFF8!important;">Geoff Schuback</span>
                                                        <br>
                                                        Diane Schuback
                                                        <br>
                                                        Poppy Schuback (Marriage)
                                                        <br>
                                                        Ron Daniel
                                                        <br>
                                                        Jan Horgan
                                                        <br>
                                                        <span style="color: #BFAFF8!important;">Lex Horgan (Marriage)</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide" style="height: 280px;">
                                            <div class="card" style="background-color: #fff;border:1px solid #BE9438!important;">
                                                <div class="card-header text-center"
                                                    style="background-color: #fff;border:0px;">
                                                    <h5 class="" style="font-size:16px;">GRANDCHILD OF
                                                    </h5>
                                                </div>
                                                <div class="card-body">
                                                    <p style="font-size: 13px;text-align: justify;font-family: 'Josefin Sans Light';">
                                                        <span style="color: #BFAFF8!important;">Geoff Schuback</span>
                                                        <br>
                                                        Diane Schuback
                                                        <br>
                                                        Poppy Schuback (Marriage)
                                                        <br>
                                                        Ron Daniel
                                                        <br>
                                                        Jan Horgan
                                                        <br>
                                                        <span style="color: #BFAFF8!important;">Lex Horgan (Marriage)</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide" style="height: 280px;">
                                            <div class="card" style="background-color: #fff;border:1px solid #BE9438!important;">
                                                <div class="card-header text-center"
                                                    style="background-color: #fff;border:0px;">
                                                    <h5 style="font-size:16px;">SIBLING OF</h5>
                                                </div>
                                                <div class="card-body">
                                                    <!--<p class="mb-5" style="font-size: 10px;text-align: justify;font-family: 'Josefin Sans Light';">Kaitlyn-->
                                                    <!--    Schuback-->
                                                    <!--</p>-->
                                                    <p style="font-size: 13px;text-align: justify;font-family: 'Josefin Sans Light';">
                                                        <span style="color: #BFAFF8!important;">Geoff Schuback</span>
                                                        <br>
                                                        Diane Schuback
                                                        <br>
                                                        Poppy Schuback (Marriage)
                                                        <br>
                                                        Ron Daniel
                                                        <br>
                                                        Jan Horgan
                                                        <br>
                                                        <span style="color: #BFAFF8!important;">Lex Horgan (Marriage)</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide" style="height: 280px;">
                                            <div class="card" style="background-color: #fff;border:1px solid #BE9438!important;">
                                                <div class="card-header text-center"
                                                    style="background-color: #fff;border:0px;">
                                                    <h5 class="" style="font-size:16px;">NIBLING OF
                                                    </h5>
                                                </div>
                                                <div class="card-body">
                                                    <!--<p style="font-size: 13px;text-align: justify;font-family: 'Josefin Sans Light';">-->
                                                    <!--    Steven Schuback-->
                                                    <!--    <br>-->
                                                    <!--    Kristina Schuback-->
                                                    <!--    <br>-->
                                                    <!--    Leesa Schuback-->
                                                    <!--    <br>-->
                                                    <!--    <span style="color: #BFAFF8!important;">Troy Schuback</span>-->
                                                    <!--    <br>-->
                                                    <!--    <span style="color: #BFAFF8!important;">Neil Daniel</span>-->
                                                    <!--    <br>-->
                                                    <!--    <span style="color: #BFAFF8!important;">Chris Shorrock</span>-->
                                                    <!--</p>-->
                                                    <p style="font-size: 13px;text-align: justify;font-family: 'Josefin Sans Light';">
                                                        <span style="color: #BFAFF8!important;">Geoff Schuback</span>
                                                        <br>
                                                        Diane Schuback
                                                        <br>
                                                        Poppy Schuback (Marriage)
                                                        <br>
                                                        Ron Daniel
                                                        <br>
                                                        Jan Horgan
                                                        <br>
                                                        <span style="color: #BFAFF8!important;">Lex Horgan (Marriage)</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide" style="height: 280px;">
                                            <div class="card" style="background-color: #fff;border:1px solid #BE9438!important;">
                                                <div class="card-header text-center"
                                                    style="background-color: #fff;border:0px;">
                                                    <h5 class="" style="font-size:16px;">Again NIBLING OF
                                                    </h5>
                                                </div>
                                                <div class="card-body">
                                                    <!--<p style="font-size: 13px;text-align: justify;font-family: 'Josefin Sans Light';">-->
                                                    <!--    Steven Schuback-->
                                                    <!--    <br>-->
                                                    <!--    Kristina Schuback-->
                                                    <!--    <br>-->
                                                    <!--    Leesa Schuback-->
                                                    <!--    <br>-->
                                                    <!--    <span style="color: #BFAFF8!important;">Troy Schuback</span>-->
                                                    <!--    <br>-->
                                                    <!--    <span style="color: #BFAFF8!important;">Neil Daniel</span>-->
                                                    <!--    <br>-->
                                                    <!--    <span style="color: #BFAFF8!important;">Chris Shorrock</span>-->
                                                    <!--</p>-->
                                                    <p style="font-size: 13px;text-align: justify;font-family: 'Josefin Sans Light';">
                                                        <span style="color: #BFAFF8!important;">Geoff Schuback</span>
                                                        <br>
                                                        Diane Schuback
                                                        <br>
                                                        Poppy Schuback (Marriage)
                                                        <br>
                                                        Ron Daniel
                                                        <br>
                                                        Jan Horgan
                                                        <br>
                                                        <span style="color: #BFAFF8!important;">Lex Horgan (Marriage)</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-button-next" style="top: var(--swiper-navigation-top-offset, 40%);"></div>
                                    <div class="swiper-button-prev" style="top: var(--swiper-navigation-top-offset, 40%);"></div>
                                </div>
                                
                                
                                <div class="swiper qandanswerswiper pb-5 mobileon" style="border:1px solid #BE9438!important;display:none;">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="card" style="background-color: #fff; border:0px;">
                                                <div class="card-header text-center" style="background-color: #fff; border:0px;">
                                                    <p style="font-family: 'Josefin Sans Light';">CHILD OF
                                                    </p>
                                                    <p style="font-size: 13px;text-align: justify;font-family: 'Josefin Sans Light';">
                                                        <span style="color: #BFAFF8!important;">Geoff Schuback</span>
                                                        <br>
                                                        Diane Schuback
                                                        <br>
                                                        Poppy Schuback (Marriage)
                                                        <br>
                                                        Ron Daniel
                                                        <br>
                                                        Jan Horgan
                                                        <br>
                                                        <span style="color: #BFAFF8!important;">Lex Horgan (Marriage)</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="card" style="background-color: #fff; border:0px;">
                                                <div class="card-header text-center" style="background-color: #fff; border:0px;">
                                                    <p style="font-family: 'Josefin Sans Light';">GRANDCHILD OF
                                                    </p>
                                                    <p style="font-size: 13px;text-align: justify;font-family: 'Josefin Sans Light';">
                                                        <span style="color: #BFAFF8!important;">Geoff Schuback</span>
                                                        <br>
                                                        Diane Schuback
                                                        <br>
                                                        Poppy Schuback (Marriage)
                                                        <br>
                                                        Ron Daniel
                                                        <br>
                                                        Jan Horgan
                                                        <br>
                                                        <span style="color: #BFAFF8!important;">Lex Horgan (Marriage)</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="card" style="background-color: #fff; border:0px;">
                                                <div class="card-header text-center" style="background-color: #fff; border:0px;">
                                                    <p style="font-family: 'Josefin Sans Light';">SIBLING OF
                                                    </p>
                                                    <p style="font-size: 13px;text-align: justify;font-family: 'Josefin Sans Light';">
                                                        <span style="color: #BFAFF8!important;">Geoff Schuback</span>
                                                        <br>
                                                        Diane Schuback
                                                        <br>
                                                        Poppy Schuback (Marriage)
                                                        <br>
                                                        Ron Daniel
                                                        <br>
                                                        Jan Horgan
                                                        <br>
                                                        <span style="color: #BFAFF8!important;">Lex Horgan (Marriage)</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="card" style="background-color: #fff; border:0px;">
                                                <div class="card-header text-center" style="background-color: #fff; border:0px;">
                                                    <p style="font-family: 'Josefin Sans Light';">NIBLING OF
                                                    </p>
                                                    <p style="font-size: 13px;text-align: justify;font-family: 'Josefin Sans Light';">
                                                        <span style="color: #BFAFF8!important;">Geoff Schuback</span>
                                                        <br>
                                                        Diane Schuback
                                                        <br>
                                                        Poppy Schuback (Marriage)
                                                        <br>
                                                        Ron Daniel
                                                        <br>
                                                        Jan Horgan
                                                        <br>
                                                        <span style="color: #BFAFF8!important;">Lex Horgan (Marriage)</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="card" style="background-color: #fff; border:0px;">
                                                <div class="card-header text-center" style="background-color: #fff; border:0px;">
                                                    <p style="font-family: 'Josefin Sans Light';">Again NIBLING OF
                                                    </p>
                                                    <p style="font-size: 13px;text-align: justify;font-family: 'Josefin Sans Light';">
                                                        <span style="color: #BFAFF8!important;">Geoff Schuback</span>
                                                        <br>
                                                        Diane Schuback
                                                        <br>
                                                        Poppy Schuback (Marriage)
                                                        <br>
                                                        Ron Daniel
                                                        <br>
                                                        Jan Horgan
                                                        <br>
                                                        <span style="color: #BFAFF8!important;">Lex Horgan (Marriage)</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                    <!-- <div class="swiper-pagination"></div> -->
                                </div>
                            </div>
                            <div class="col-lg-12 col-sm-12 borderremove newclasspaddingoff" style="border-bottom: 2px solid #BE9438!important;">
                                <div class="row">
                                    <div  class="col-lg-8 col-sm-12 text-right mb-lg-4 newclasspaddingoff">
                                        <h3 class="anotherpagemainheading ml-4 topaddmarginsub mobileoff" style="color:#A423EB!important;margin-right: 15px;" id="ganeral">GENERAL KNOWLEDGE
                                        </h3>
                                        <h3 class="ml-lg-4 topaddmarginsub mobileon" style="color:#A423EB!important;margin-right: 15px;display:none;font-size:20px!important;text-align: -webkit-center;padding-top: 30px;" id="ganeral">GENERAL KNOWLEDGE
                                        </h3>
                                    </div>
                                    <div  class="col-lg-4 col-sm-12 ">
                                        <form class="form-inline searchinputnavhsbdha">
                                            <input class="form-control mr-sm-2 searchinputnav mb-2" type="search"
                                                placeholder="Search" aria-label="Search">
                                        </form>
                                    </div>
                                </div>
                                <div class="swiper ganeralswiper pb-5 mobileoff">
                                    <div class="swiper-wrapper" style="height: 400px;">
                                        <div class="swiper-slide" style="height: 300px!important;">
                                            <div class="card" style="background-color: #fff;border:1px solid #BE9438;width: 100%;">
                                                <div class="card-header text-center"
                                                    style="background-color: #fff;border:0px;">
                                                    <h5 style="font-size:16px;">PERONALITY TRAITS
                                                    </h5>
                                                </div>
                                                <div class="card-body">
                                                    <p style="font-size: 13px;text-align: justify;font-family: 'Josefin Sans Light';">
                                                        Down to earth
                                                        <br>
                                                        Authentic
                                                        <br>
                                                        Fun
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide" style="height: 300px!important;">
                                            <div class="card" style="background-color: #fff;border:1px solid #BE9438;width: 100%;">
                                                <div class="card-header text-center"
                                                    style="background-color: #fff;border:0px;">
                                                    <h5 style="font-size:16px;">EDUCATION
                                                    </h5>
                                                </div>
                                                <div class="card-body">
                                                    <p style="font-size: 13px;text-align: justify;font-family: 'Josefin Sans Light';">
                                                        Text here about
                                                        <br>schooling and educa-<br>tion
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide" style="height: 300px!important;">
                                            <div class="card" style="background-color: #fff;border:1px solid #BE9438;width: 100%;">
                                                <div class="card-header text-center mb-5"
                                                    style="background-color: #fff;border:0px;">
                                                    <h5 class="mb-4" style="font-size:16px;">VALUES
                                                    </h5>
                                                </div>
                                                <div class="card-body">
                                                    <p style="font-size: 13px;text-align: justify;font-family: 'Josefin Sans Light';">

                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide" style="height: 300px!important;">
                                            <div class="card" style="background-color: #fff;border:1px solid #BE9438;width: 100%;">
                                                <div class="card-header text-center mb-5"
                                                    style="background-color: #fff;border:0px;">
                                                    <h5 class="mb-4" style="font-size:16px;">EMPLOYMENT
                                                    </h5>
                                                </div>
                                                <div class="card-body">
                                                    <p style="font-size: 13px;text-align: justify;font-family: 'Josefin Sans Light';">

                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide" style="height: 300px!important;">
                                            <div class="card" style="background-color: #fff;border:1px solid #BE9438;width: 100%;">
                                                <div class="card-header text-center"
                                                    style="background-color: #fff;border:0px;">
                                                    <h5 style="font-size:16px;">SPIRITUAL
                                                        BELIEFS
                                                    </h5>
                                                </div>
                                                <div class="card-body">
                                                    <p style="font-size: 13px;text-align: justify;font-family: 'Josefin Sans Light';">
                                                        Text here about the
                                                        <br>
                                                        honouree’s spiritual/
                                                        <br>
                                                        religious beliefs
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide" style="height: 300px!important;">
                                            <div class="card" style="background-color: #fff;border:1px solid #BE9438;width: 100%;">
                                                <div class="card-header text-center mb-5"
                                                    style="background-color: #fff;border:0px;">
                                                    <h5 class="mb-4" style="font-size:16px;">Goals
                                                    </h5>
                                                </div>
                                                <div class="card-body">
                                                    <p style="font-size: 13px;text-align: justify;font-family: 'Josefin Sans Light';">

                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide" style="height: 300px!important;">
                                            <div class="card" style="background-color: #fff;border:1px solid #BE9438;width: 100%;">
                                                <div class="card-header text-center mb-5"
                                                    style="background-color: #fff;border:0px;">
                                                    <h5 class="mb-4" style="font-size:16px;">HOBBIES /
                                                        INTERESTS
                                                    </h5>
                                                </div>
                                                <div class="card-body">
                                                    <p style="font-size: 13px;text-align: justify;">

                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide" style="height: 300px!important;">
                                            <div class="card" style="background-color: #fff;border:1px solid #BE9438;width: 100%;">
                                                <div class="card-header text-center mb-5"
                                                    style="background-color: #fff;border:0px;">
                                                    <h5 class="mb-4" style="font-size:16px;">
                                                        ACHIEVEMENTS
                                                    </h5>
                                                </div>
                                                <div class="card-body">
                                                    <p style="font-size: 13px;text-align: justify;">

                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide" style="height: 300px!important;">
                                            <div class="card" style="background-color: #fff;border:1px solid #BE9438;width: 100%;">
                                                <div class="card-header text-center mb-5"
                                                    style="background-color: #fff;border:0px;">
                                                    <h5 class="mb-4" style="font-size:16px;">Again /
                                                        INTERESTS
                                                    </h5>
                                                </div>
                                                <div class="card-body">
                                                    <p style="font-size: 13px;text-align: justify;">

                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide" style="height: 300px!important;">
                                            <div class="card" style="background-color: #fff;border:1px solid #BE9438;width: 100%;">
                                                <div class="card-header text-center mb-5"
                                                    style="background-color: #fff;border:0px;">
                                                    <h5 class="mb-4" style="font-size:16px;">
                                                       Again ACHIEVEMENTS
                                                    </h5>
                                                </div>
                                                <div class="card-body">
                                                    <p style="font-size: 13px;text-align: justify;">

                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                     <!--<div class="swiper-pagination"></div> -->
                                     <div class="swiper-button-next generalnext"></div>
                                    <div class="swiper-button-prev generalprev"></div>
                                </div>
                                <div class="swiper qandanswerswiper pb-5 mobileon" style="border:1px solid #BE9438!important;display:none;">
                                    <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="card" style="background-color: #fff; border:0px;">
                                            <div class="card-header text-center" style="background-color: #fff; border:0px;">
                                                <p style="font-family: 'Josefin Sans Light';">PERONALITY TRAITS
                                                </p>
                                                <p style="font-size: 13px;text-align: justify;font-family: 'Josefin Sans Light';">
                                                    Down to earth
                                                    <br>
                                                    Authentic
                                                    <br>
                                                    Fun
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card" style="background-color: #fff; border:0px;">
                                            <div class="card-header text-center" style="background-color: #fff; border:0px;">
                                                <p style="font-family: 'Josefin Sans Light';">EDUCATION
                                                </p>
                                                <p style="font-size: 13px;text-align: justify;font-family: 'Josefin Sans Light';">
                                                    Text here about
                                                    <br>schooling and educa-<br>tion
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card" style="background-color: #fff; border:0px;">
                                            <div class="card-header text-center" style="background-color: #fff; border:0px;">
                                                <p style="font-family: 'Josefin Sans Light';">VALUES
                                                </p>
                                                <p style="font-size: 13px;text-align: justify;font-family: 'Josefin Sans Light';">
                                                    
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card" style="background-color: #fff; border:0px;">
                                            <div class="card-header text-center" style="background-color: #fff; border:0px;">
                                                <p style="font-family: 'Josefin Sans Light';">EMPLOYMENT
                                                </p>
                                                <p style="font-size: 13px;text-align: justify;font-family: 'Josefin Sans Light';">
                                                    
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card" style="background-color: #fff; border:0px;">
                                            <div class="card-header text-center" style="background-color: #fff; border:0px;">
                                                <p style="font-family: 'Josefin Sans Light';">SPIRITUAL
                                                        BELIEFS
                                                </p>
                                                <p style="font-size: 13px;text-align: justify;font-family: 'Josefin Sans Light';">
                                                    Text here about the
                                                    <br>
                                                    honouree’s spiritual/
                                                    <br>
                                                    religious beliefs
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card" style="background-color: #fff; border:0px;">
                                            <div class="card-header text-center" style="background-color: #fff; border:0px;">
                                                <p style="font-family: 'Josefin Sans Light';">Goals
                                                </p>
                                                <p style="font-size: 13px;text-align: justify;font-family: 'Josefin Sans Light';">
                                                   
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card" style="background-color: #fff; border:0px;">
                                            <div class="card-header text-center" style="background-color: #fff; border:0px;">
                                                <p style="font-family: 'Josefin Sans Light';">HOBBIES /
                                                        INTERESTS
                                                </p>
                                                <p style="font-size: 13px;text-align: justify;font-family: 'Josefin Sans Light';">
                                                   
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card" style="background-color: #fff; border:0px;">
                                            <div class="card-header text-center" style="background-color: #fff; border:0px;">
                                                <p style="font-family: 'Josefin Sans Light';">ACHIEVEMENTS
                                                </p>
                                                <p style="font-size: 13px;text-align: justify;font-family: 'Josefin Sans Light';">
                                                   
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                    <!-- <div class="swiper-pagination"></div> -->
                                </div>
                            </div>
                            <div class="col-lg-12 col-sm-12 mt-lg-4 pb-lg-5 newclasspaddingoff">
                                <h3 class="pagemainheading mt-lg-5 mb-lg-5 storiesanotherpagemainheading topaddmarginsub" style="color:#A423EB!important;">Q AND A’s (###)
                                </h3>
                                <div class="swiper qandanswerswiperquestion pb-5" style="border:1px solid #BE9438!important;">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="card" style="background-color: #fff; border:0px;">
                                                <div class="card-header text-center" style="background-color: #fff; border:0px;">
                                                    <p style="font-family: 'Josefin Sans Light';">What was your childhood like?
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="card" style="background-color: #fff; border:0px;">
                                                <div class="card-header text-center" style="background-color: #fff; border:0px;">
                                                    <p style="font-family: 'Josefin Sans Light';">What is your earliest childhood memory?
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="card" style="background-color: #fff; border:0px;">
                                                <div class="card-header text-center" style="background-color: #fff; border:0px;">
                                                    <p style="font-family: 'Josefin Sans Light';">What is your favourite childhood memory?
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="card" style="background-color: #fff; border:0px;">
                                                <div class="card-header text-center" style="background-color: #fff; border:0px;">
                                                    <p style="font-family: 'Josefin Sans Light';">What was a significant childhood memory that helped shape who you are today?
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="card" style="background-color: #fff; border:0px;">
                                                <div class="card-header text-center" style="background-color: #fff; border:0px;">
                                                    <p style="font-family: 'Josefin Sans Light';">What were you like as a teenager?
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="card" style="background-color: #fff; border:0px;">
                                                <div class="card-header text-center" style="background-color: #fff; border:0px;">
                                                    <p style="font-family: 'Josefin Sans Light';">What’s your favourite teen memory?
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="swiper-slide">
                                            <div class="card" style="background-color: #fff; border:0px;">
                                                <div class="card-header text-center" style="background-color: #fff; border:0px;">
                                                    <p style="font-family: 'Josefin Sans Light';">Who was your first crush and how old were you?
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="card" style="background-color: #fff; border:0px;">
                                                <div class="card-header text-center" style="background-color: #fff; border:0px;">
                                                    <p style="font-family: 'Josefin Sans Light';">Who was your first love?
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="card" style="background-color: #fff; border:0px;">
                                                <div class="card-header text-center" style="background-color: #fff; border:0px;">
                                                    <p style="font-family: 'Josefin Sans Light';">Who was your most significant intimate relationship with?
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="card" style="background-color: #fff; border:0px;">
                                                <div class="card-header text-center" style="background-color: #fff; border:0px;">
                                                    <p style="font-family: 'Josefin Sans Light';">What challenges have you found most difficult?
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="card" style="background-color: #fff; border:0px;">
                                                <div class="card-header text-center" style="background-color: #fff; border:0px;">
                                                    <p style="font-family: 'Josefin Sans Light';">What are the most valuable lessons you’ve learned?
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        
                                        <div class="swiper-slide">
                                            <div class="card" style="background-color: #fff; border:0px;">
                                                <div class="card-header text-center" style="background-color: #fff; border:0px;">
                                                    <p style="font-family: 'Josefin Sans Light';">What achievements are you most proud of?
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="card" style="background-color: #fff; border:0px;">
                                                <div class="card-header text-center" style="background-color: #fff; border:0px;">
                                                    <p style="font-family: 'Josefin Sans Light';">If you could start life over, what knowledge would you want to take with you?
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="card" style="background-color: #fff; border:0px;">
                                                <div class="card-header text-center" style="background-color: #fff; border:0px;">
                                                    <p style="font-family: 'Josefin Sans Light';">What is one thing you would want your loved ones to remember you by after your gone?
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="card" style="background-color: #fff; border:0px;">
                                                <div class="card-header text-center" style="background-color: #fff; border:0px;">
                                                    <p style="font-family: 'Josefin Sans Light';">What advice would you leave for future generations?
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="card" style="background-color: #fff; border:0px;">
                                                <div class="card-header text-center" style="background-color: #fff; border:0px;">
                                                    <p style="font-family: 'Josefin Sans Light';">If you had 24 hours to live, how would you spend it?
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="card" style="background-color: #fff; border:0px;">
                                                <div class="card-header text-center" style="background-color: #fff; border:0px;">
                                                    <p style="font-family: 'Josefin Sans Light';">Is there anything you’ve done that you wish you had have done differently?
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="card" style="background-color: #fff; border:0px;">
                                                <div class="card-header text-center" style="background-color: #fff; border:0px;">
                                                    <p style="font-family: 'Josefin Sans Light';">If you could have a superpower, what would it be and why?
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="card" style="background-color: #fff; border:0px;">
                                                <div class="card-header text-center" style="background-color: #fff; border:0px;">
                                                    <p style="font-family: 'Josefin Sans Light';">What charities do you support and why?
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                    <!-- <div class="swiper-pagination"></div> -->
                                </div>
                            </div>
                            <div class="col-lg-12 col-sm-12 text-center mt-lg-5 addcontactswipermargintopres newclasspaddingoff">
                                <p style="font-family: 'Josefin Sans Light;" class="mt-lg-5">Want to know more? Message the page administrators with your question or response</p>
                                <button class="btn btn-large contactadministration" style="background-color: #BE9438;width: 30%;color:#fff;border-radius: 20px;font-family: 'Josefin Sans Bold';" data-toggle="modal" data-target="#exampleModal">CONTACT ADMINSTRATORS</button>
                                
                                <div class="modal" tabindex="-1" id="exampleModal">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title">Contact Adminstrators</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body">
                                        <form action="#" method="POST">
                                            <div class="row">
                                                <div class="col-lg-12 col-sm-12">
                                                    <div class="form-group text-left">
                                                        <label class="text-left">Full Name</label>
                                                        <input class="form-control" type="text" name="fullname" >
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-sm-12">
                                                    <div class="form-group text-left">
                                                        <label>Email</label>
                                                        <input class="form-control" type="email" name="email" >
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-sm-12">
                                                    <div class="form-group text-left">
                                                        <label>Relation of honouree</label>
                                                        <select class="form-control" name="relationofhonouree" style="font-family: 'Josefin Sans Light';">
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
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-sm-12">
                                                    <div class="form-group text-left">
                                                        <label>Comment</label>
                                                        <textarea class="form-control" type="text" name="comment"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-sm-12 text-right">
                                                    <button type="submit" class="btn" style="background-color: #BE9438;border-color:#e5d079;">Submit</button>
                                                </div>
                                            </div>
                                        </form>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                
                            </div>
                            <div  class="col-lg-12 col-sm-12 mt-lg-5 newclasspaddingoff" id="gallery">
                                <!--<h3 class="pagemainheading mt-3" style="color:#A423EB!important;">GALLERY (###)-->
                                <!--</h3>-->
                                <div class="row mt-lg-3">
                                    <div  class="col-lg-8 col-sm-12 text-right mb-lg-5">
                                        <h3 class="storiesanotherpagemainheading topaddmarginsub" style="color:#A423EB!important;margin-right: 70px;" id="ganeral">GALLERY (###)
                                        </h3>
                                    </div>
                                    <div  class="col-lg-4 col-sm-12">
                                        <form class="form-inline searchinputnavhsbdha">
                                            <input class="form-control mr-sm-2 searchinputnav mb-2" type="search"
                                                placeholder="Search" aria-label="Search">
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-sm-12 newclasspaddingoff">
                                <div class="swiper galleryswiper mobileoff">
                                    <div class="swiper-wrapper">
                                      <div class="swiper-slide">
                                        <div class="row">
                                            <div class="col-lg-6 col-sm-6" style="padding-right:0px!important;">
                                                <a data-fancybox="gallery" href="assets/dummythree.jpg"><img src="assets/dummythree.jpg" style="width: 100%;border: 1px solid #BE9438!important;"></a>
                                                <div class="row">
                                                    <div class="col-lg-6 col-sm-6" style="padding-right:0px!important;padding-left:0px!important;">
                                                       <a data-fancybox="gallery" href="assets/dummythree.jpg"> <img src="assets/dummythree.jpg" style="height:333px;width: 100%;border: 1px solid #BE9438!important;"></a>
                                                    </div>
                                                    <div class="col-lg-6 col-sm-6">
                                                        <div class="row">
                                                            <div class="col-lg-12 col-sm-12" style="padding-left:0px!important;">
                                                               <a data-fancybox="gallery" href="assets/dummythree.jpg"> <img src="assets/dummythree.jpg" style="width: 100%;border: 1px solid #BE9438!important;"></a>
                                                            </div>
                                                            <div class="col-lg-12 col-sm-12" style="padding-left:0px!important;">
                                                               <a data-fancybox="gallery" href="assets/dummythree.jpg"> <img src="assets/dummythree.jpg" style="width: 100%;border: 1px solid #BE9438!important;height:156px;"> </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 col-sm-12">
                                                      <a data-fancybox="gallery" href="assets/dummythree.jpg">  <img src="assets/dummythree.jpg" style="height:312px;width: 100%;border: 1px solid #BE9438!important;"> </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-sm-6" style="padding-left:0px!important;">
                                               <a data-fancybox="gallery" href="assets/dummythree.jpg"> <img src="assets/dummythree.jpg" style="height:250px;width: 100%;border: 1px solid #BE9438!important;"> </a>
                                                <div class="row">
                                                    <div class="col-lg-12 col-sm-12">
                                                       <a data-fancybox="gallery" href="assets/dummythree.jpg"> <img src="assets/dummythree.jpg" style="height:350px;width: 100%;border: 1px solid #BE9438!important;"></a>
                                                    </div>
                                                    <div class="col-lg-6 col-sm-6">
                                                        <div class="row">
                                                            <div class="col-lg-12 col-sm-12" style="padding-right:0px!important;padding-left:0px!important;">
                                                              <a data-fancybox="gallery" href="assets/dummythree.jpg">  <img src="assets/dummythree.jpg" style="margin-left: 15px;width: 95%;height:200px;border: 1px solid #BE9438!important;"></a>
                                                            </div>
                                                            <div class="col-lg-12 col-sm-12" style="padding-right:0px!important;padding-left:0px!important;">
                                                               <a data-fancybox="gallery" href="assets/dummythree.jpg"> <img src="assets/dummythree.jpg" style="margin-left: 15px;width: 95%;height:200px;border: 1px solid #BE9438!important;"></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-sm-6" style="padding-right:0px!important;padding-left:0px!important;">
                                                      <a data-fancybox="gallery" href="assets/dummythree.jpg">  <img src="assets/dummythree.jpg"style="height:400px;width: 100%;border: 1px solid #BE9438!important;"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                </div>
                                <div class="swiper qandanswerswiper mobileon" style="border:0px;display:none;">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide" style="border:0px;">
                                           <a data-fancybox="gallerysecond" href="assets/dummythree.jpg"> <img src="assets/dummythree.jpg" style="width: 100%;border: 1px solid #BE9438!important;height:auto;"></a>
                                        </div>
                                        <div class="swiper-slide" style="border:0px;">
                                           <a data-fancybox="gallerysecond" href="assets/dummytwo.png"> <img src="assets/dummytwo.png" style="width: 100%;border: 1px solid #BE9438!important;"></a>
                                        </div>
                                    </div>
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                    <!-- <div class="swiper-pagination"></div> -->
                                </div>
                            </div>
                            <div class="col-lg-12 col-sm-12 text-center mt-3 newclasspaddingoff">
                                <button class="btn btn-large contactadministration" style="background-color: #BE9438;width: 30%;color:#fff;border-radius: 20px;font-family: 'Josefin Sans Bold';"data-toggle="modal" data-target="#addphoto">ADD PHOTOS</button>
                                <div class="modal fade" id="addphoto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Add Photos</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body">
                                        <form>
                                            <div class="row">
                                                <div class="col-lg-12 col-sm-12">
                                                    <div class="form-group">
                                                        <label for="addphotos" class="float-left">Add Photo</label>
                                                        <input class="form-control" type="file" id="addphotos">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn" style="background-color: #BE9438;width: 30%;color:#fff;font-family: 'Josefin Sans Bold';">Save</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                            </div>
                            <div  class="col-lg-12 col-sm-12 mt-4 newclasspaddingoff" id="guest">
                                <!--<h3 class="pagemainheading mt-3" style="color:#A423EB!important;">GUEST BOOK (###)-->
                                <!--</h3>-->
                                 <div class="row mt-lg-4">
                                    <div  class="col-lg-8 col-sm-12 text-right mb-lg-5">
                                        <h3 class="anotherpagemainheading topaddmarginsub" style="color:#A423EB!important;margin-right: 35px;" id="ganeral">GUEST BOOK (###)
                                        </h3>
                                    </div>
                                    <div  class="col-lg-4 col-sm-12">
                                        <form class="form-inline searchinputnavhsbdha">
                                            <input class="form-control mr-sm-2 searchinputnav mb-2" type="search"
                                                placeholder="Search" aria-label="Search">
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!--<div  class="col-lg-12 col-sm-12 mt-3">-->
                            <!--    <form class="form-inline searchinputnavhsbdha">-->
                            <!--        <input class="form-control mr-sm-2 searchinputnav" type="search"-->
                            <!--            placeholder="Search" aria-label="Search">-->
                            <!--    </form>-->
                            <!--</div>-->
                            <div class="col-lg-12 col-sm-12 mt-2 newclasspaddingoff">
                                <div class="swiper guestbookswiper">
                                    <div class="swiper-wrapper" style="height:300px;">
                                        <div class="swiper-slide text-center" style="height: calc(25% - 15px)!important;border:1px solid #BE9438!important;">
                                           <p style="font-family: 'Josefin Sans Light';" class="addfullresposnive">
                                            Full Name
                                            <br>
                                            XX/XX/XXXX
                                            <br>
                                            Relationship
                                           </p>
                                        </div>
                                        <div class="swiper-slide text-center" style="height: calc(25% - 15px)!important;border:1px solid #BE9438!important;">
                                            <p style="font-family: 'Josefin Sans Light';"  class="addfullresposnive">
                                             Full Name
                                             <br>
                                             XX/XX/XXXX
                                             <br>
                                             Relationship
                                            </p>
                                         </div>
                                         <div class="swiper-slide text-center" style="height: calc(25% - 15px)!important;border:1px solid #BE9438!important;">
                                            <p style="font-family: 'Josefin Sans Light';" class="addfullresposnive">
                                             Full Name
                                             <br>
                                             XX/XX/XXXX
                                             <br>
                                             Relationship
                                            </p>
                                         </div>
                                         <div class="swiper-slide text-center" style="height: calc(25% - 15px)!important;border:1px solid #BE9438!important;">
                                            <p style="font-family: 'Josefin Sans Light';" class="addfullresposnive">
                                             Full Name
                                             <br>
                                             XX/XX/XXXX
                                             <br>
                                             Relationship
                                            </p>
                                         </div>
                                         <div class="swiper-slide text-center" style="height: calc(25% - 15px)!important;border:1px solid #BE9438!important;">
                                            <p style="font-family: 'Josefin Sans Light';" class="addfullresposnive">
                                             Full Name
                                             <br>
                                             XX/XX/XXXX
                                             <br>
                                             Relationship
                                            </p>
                                         </div>
                                         <div class="swiper-slide text-center" style="height: calc(25% - 15px)!important;border:1px solid #BE9438!important;">
                                            <p style="font-family: 'Josefin Sans Light';" class="addfullresposnive">
                                             Full Name
                                             <br>
                                             XX/XX/XXXX
                                             <br>
                                             Relationship
                                            </p>
                                         </div>
                                         <div class="swiper-slide text-center" style="height: calc(25% - 15px)!important;border:1px solid #BE9438!important;">
                                            <p style="font-family: 'Josefin Sans Light';" class="addfullresposnive">
                                             Full Name
                                             <br>
                                             XX/XX/XXXX
                                             <br>
                                             Relationship
                                            </p>
                                         </div>
                                         <div class="swiper-slide text-center" style="height: calc(25% - 15px)!important;border:1px solid #BE9438!important;">
                                            <p style="font-family: 'Josefin Sans Light';" class="addfullresposnive">
                                             Full Name
                                             <br>
                                             XX/XX/XXXX
                                             <br>
                                             Relationship
                                            </p>
                                         </div>
                                    </div>
                                    <!-- <div class="swiper-pagination"></div> -->
                                </div>
                            </div>
                            <div class="col-lg-12 col-sm-12 text-center mt-3 newclasspaddingoff">
                                <button class="btn btn-large contactadministration" style="background-color: #BE9438;width: 30%;color:#fff;border-radius: 20px;font-family: 'Josefin Sans Bold';">SIGN THE GUEST BOOK</button>
                            </div>
                            <div  class="col-lg-12 col-sm-12 mt-lg-4 newclasspaddingoff" id="stories">
                                <!--<h3 class="pagemainheading mt-3" style="color:#A423EB!important;">STORIES (###)-->
                                <!--</h3>-->
                                <div class="row mt-lg-4">
                                    <div  class="col-lg-8 col-sm-12 text-right mb-lg-5">
                                        <h3 class="storiesanotherpagemainheading topaddmarginsub" style="color:#A423EB!important;margin-right: 85px;" id="ganeral">STORIES (###)
                                        </h3>
                                    </div>
                                    <div  class="col-lg-4 col-sm-12">
                                        <form class="form-inline searchinputnavhsbdha">
                                            <input class="form-control mr-sm-2 searchinputnav mb-2" type="search"
                                                placeholder="Search" aria-label="Search">
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!--<div  class="col-lg-12 col-sm-12 mt-3">-->
                            <!--    <form class="form-inline searchinputnavhsbdha">-->
                            <!--        <input class="form-control mr-sm-2 searchinputnav" type="search"-->
                            <!--            placeholder="Search" aria-label="Search">-->
                            <!--    </form>-->
                            <!--</div>-->
                            <div class="col-lg-12 col-sm-12 p-3 mt-2 newclasspaddingoff" style="border: 2px solid #BE9438!important;">
                                <div class="swiper galleryswiper">
                                    <div class="swiper-wrapper">
                                      <div class="swiper-slide">
                                        <div class="row">
                                            <div class="col-lg-12 col-sm-12">
                                                <h4 class="text-center">TITLE</h4>
                                            </div>
                                            <div class="col-lg-6 col-sm-12">
                                                <div class="row">
                                                    <div class="col-lg-12 col-sm-12">
                                                        <img src="assets/dummythree.jpg" class="mt-2 heightmainstory" style="height:332px;width: 100%;border: 1px solid #BE9438!important;">
                                                    </div>
                                                    <div class="col-lg-12 col-sm-12">
                                                        <img src="assets/dummythree.jpg" class="mt-2 heightmainstory" style="height:332px;width: 100%;border: 1px solid #BE9438!important;">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-sm-6 text-left">
                                               <p class="mt-3" style="font-family: 'Josefin Sans Light';">Story goes here (Images are optional)</p> 
                                            </div>
                                            <div class="col-lg-10 col-sm-10 text-left">
                                                <p class="mt-3" style="font-family: 'Josefin Sans Light';">Submitted by: Waliam</p> 
                                            </div>
                                            <div class="col-lg-2 col-sm-2 text-right">
                                                <p class="mt-3" style="font-family: 'Josefin Sans Light';">Date: 4/25/2024</p> 
                                            </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                  </div>
                            </div>
                            <div class="col-lg-12 col-sm-12 text-center mt-3 newclasspaddingoff">
                                <button class="btn btn-large contactadministration" style="background-color: #BE9438;width: 30%;color:#fff;border-radius: 20px;font-family: 'Josefin Sans Bold';"data-toggle="modal" data-target="#addstory" >ADD A STORY
                                </button>
                                <div class="modal fade" id="addstory" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Add Story</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body">
                                        <form>
                                            <div class="row">
                                                <div class="col-lg-12 col-sm-12">
                                                    <div class="form-group">
                                                        <label for="title" class="float-left">Add Title</label>
                                                        <input class="form-control" type="text" id="title">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="addphotos" class="float-left">Add Story</label>
                                                        <input class="form-control" type="file" id="addphotos">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="brief" class="float-left">Add Description</label>
                                                        <textarea class="form-control" id="brief"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn" style="background-color: #BE9438;width: 30%;color:#fff;font-family: 'Josefin Sans Bold';">Save</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                            </div>
                            <div  class="col-lg-12 col-sm-12 mt-lg-4 newclasspaddingoff">
                                <h3 class="pagemainheading mt-3 topaddmarginsub" style="color:#A423EB!important;" id="sounds">SOUND BITES (###)
                                </h3>
                            </div>
                            <div  class="col-lg-12 col-sm-12 mt-lg-3 newclasspaddingoff">
                                <form class="form-inline searchinputnavhsbdha">
                                    <input class="form-control mr-sm-2 searchinputnav" type="search"
                                        placeholder="Search" aria-label="Search">
                                </form>
                            </div>
                            <div class="col-lg-12 col-sm-12 mt-4 mb-4 newclasspaddingoff">
                                <div class="swiper soundbitesswiper">
                                    <div class="swiper-wrapper">
                                      <div class="swiper-slide text-center mb-2 p-4" style="border: 1px solid #BE9438!important;">
                                        <p style="font-family: 'Josefin Sans Light';">Bree Laughing
                                        </p>
                                      </div>
                                      <div class="swiper-slide text-center mb-2 p-4" style="border: 1px solid #BE9438!important;">
                                        <p style="font-family: 'Josefin Sans Light';">TITLE
                                        </p>
                                      </div>
                                      <div class="swiper-slide text-center mb-2 p-4" style="border: 1px solid #BE9438!important;">
                                        <p style="font-family: 'Josefin Sans Light';">TITLE
                                        </p>
                                      </div>
                                      <div class="swiper-slide text-center mb-2 p-4" style="border: 1px solid #BE9438!important;">
                                        <p style="font-family: 'Josefin Sans Light';">TITLE
                                        </p>
                                      </div>
                                      <div class="swiper-slide text-center mb-2 p-4" style="border: 1px solid #BE9438!important;"> 
                                        <p style="font-family: 'Josefin Sans Light';">TITLE
                                        </p>
                                      </div>
                                      <div class="swiper-slide text-center mb-2 p-4" style="border: 1px solid #BE9438!important;">
                                        <p style="font-family: 'Josefin Sans Light';">TITLE
                                        </p>
                                      </div>
                                    </div>
                                    <!-- <div class="swiper-pagination"></div> -->
                                </div>
                            </div>
                            <div class="col-lg-12 col-sm-12 text-center mt-3 newclasspaddingoff">
                                <button class="btn btn-large contactadministration" style="background-color: #BE9438;width: 30%;color:#fff;border-radius: 20px;font-family: 'Josefin Sans Bold';"data-toggle="modal" data-target="#addaudio">ADD AUDIO
                                </button>
                                <div class="modal fade" id="addaudio" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Add Audio</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body">
                                        <form>
                                            <div class="row">
                                                <div class="col-lg-12 col-sm-12">
                                                    <div class="form-group">
                                                        <label for="title" class="float-left">Add Title</label>
                                                        <input class="form-control" type="text" id="title">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="addphotos" class="float-left">Add Audio</label>
                                                        <input class="form-control" type="file" id="addphotos">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn" style="background-color: #BE9438;width: 30%;color:#fff;font-family: 'Josefin Sans Bold';">Save</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                            </div>
                            <div  class="col-lg-12 col-sm-12 mt-4 p-4 newclasspaddingoff" style="border-top: 2px solid #BE9438!important;">        
                                <div class="row">
                                    <div class="col-lg-12 col-sm-12" id="transition">
                                        <h3 class="transitionheading mt-lg-3 topaddmarginsub" style="color:#A423EB!important;">THE TRANSITION
                                        </h3>
                                    </div>
                                    <div class="col-lg-12 col-sm-12 text-center">
                                        <h3 class="wishesheading mt-4 topaddmarginsub" style="color:#A423EB!important;">FUNERAL WISHES
                                        </h3>
                                    </div>
                                    <div class="col-lg-12 col-sm-12 text-center" style="padding-right: 0px!important;">
                                        <h3 class="breesheading"><b style="color:#A423EB!important;">Title:</b> Bree’s Celebration of Life
                                        </h3>
                                        <h3 class="breesheading"><b style="color:#A423EB!important;">Theme:</b> Not sad - Light, Fun, Airy, like a carnivale
                                        </h3>
                                        <h3 class="breesheading"><b style="color:#A423EB!important;">Dress Code:</b> Everyone to wear colour
                                        </h3>
                                        <h3 class="breesheading"><b style="color:#A423EB!important;">Music:</b> Catch and Release (Matt Simons), Beat You There (Wil Dempsey), Time of my Life (Bill Medley & Jennifer Warnes).
                                        </h3>
                                        <h3 class="breesheading">Time of my Life (Bill Medley & Jennifer Warnes)
                                        </h3>
                                        <h3 class="breesheading"><b style="color:#A423EB!important;">Body:</b> Cremated. Ashes made into jewellery for her children Remaining ashes scattered in the ocean
                                        </h3>
                                        <h3 class="breesheading"><b style="color:#A423EB!important;">To be honoured by:</b> Going camping
                                        </h3>
                                    </div>
                                </div>
                                <div class="row" style="border-top: 2px solid #BE9438!important;">
                                    <div class="col-lg-12 col-sm-12">
                                        <h3 class="wishesheading mt-3 topaddmarginsub topaddmarginsub" style="color:#A423EB!important;" id="obituary">OBITUARY
                                        </h3>
                                    </div>
                                    <div class="col-lg-12 col-sm-12 text-center" style="padding-right: 0px!important;">
                                        <h3 class="breesheading"><b style="color:#A423EB!important;">Full Name: </b> Breannon Kimberley Schuback (Formerly Daniel)
                                        </h3>
                                        <h3 class="breesheading"><b style="color:#A423EB!important;">Date of Birth:</b> 31st December 1992
                                        </h3>
                                        <h3 class="breesheading"><b style="color:#A423EB!important;">Birth Place: </b> Gosford Hospital NSW Australia
                                        </h3>
                                        <h3 class="breesheading"><b style="color:#A423EB!important;">Date of Transition: </b> Friday, 25th August 2023 
                                        </h3>
                                        <h3 class="breesheading"><b style="color:#A423EB!important;">Place of Transition: </b> At home — Carmody Court, Nudgee, QLD, Australia
                                        </h3>
                                        <h3 class="breesheading"><b style="color:#A423EB!important;">Cause of Transition: </b> Unknown
                                        </h3>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="col-lg-12 col-sm-12 mt-3 newclasspaddingoff">
                                <div class="row">
                                    <div class="col-lg-3 col-sm-6 ml-lg-5" style="border: 1px solid #BE9438!important;">
                                        <div class="card" style="border:0px;">
                                            <div class="card-header text-center" style="padding-bottom: 0px;background-color:#fff;border:0px;">
                                                <h4 class="pagemainheading topaddmarginsub" style="color:#A423EB!important;font-size: 18px;" id="funeral">FUNERAL HOME
                                                </h4>
                                            </div>
                                            <div class="card-body text-center" style="padding-top: 0px;">
                                                <p style="font-family: 'Josefin Sans Light';font-size:15px;">Academy Funerals Lawnton
                                                </p>
                                                <p style="font-family: 'Josefin Sans Light';font-size:15px;">mail@academyfunerals.com.au
                                                </p>
                                                <p style="font-family: 'Josefin Sans Light';font-size:15px;">Director: Robin Druery
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6 offset-lg-1 funeralmargin" style="border: 1px solid #BE9438!important;">
                                        <div class="card" style="border:0px;">
                                            <div class="card-header text-center" style="padding-bottom: 0px;background-color:#fff;border:0px;">
                                                <h4 class="pagemainheading topaddmarginsub" style="color:#A423EB!important;font-size: 18px;">VIEWS
                                                </h4>
                                            </div>
                                            <div class="card-body text-center" style="padding-top: 0px;">
                                                <p style="font-family: 'Josefin Sans Light';font-size:15px;">By invite Only
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6 offset-lg-1 funeralmargin" style="border: 1px solid #BE9438!important;">
                                        <div class="card" style="border:0px;">
                                            <div class="card-header text-center" style="padding-bottom: 0px;background-color:#fff;border:0px;">
                                                <h4 class="pagemainheading topaddmarginsub" style="color:#A423EB!important;font-size: 18px;">PROCESSION
                                                </h4>
                                            </div>
                                            <div class="card-body text-center" style="padding-top: 0px;">
                                                <p style="font-family: 'Josefin Sans Light';font-size:15px;">Wednesday 13th September 2023, 
                                                </p>
                                                <p style="font-family: 'Josefin Sans Light';font-size:15px;">10am
                                                </p>
                                                <p style="font-family: 'Josefin Sans Light';font-size:15px;">Decker Park
                                                </p>
                                                <p style="font-family: 'Josefin Sans Light';font-size:15px;">Eighteenth Ave
                                                </p>
                                                <p style="font-family: 'Josefin Sans Light';font-size:15px;">Brighton, Qld 4121
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6 mt-3 ml-lg-5" style="border: 1px solid #BE9438!important;">
                                        <div class="card" style="border:0px;">
                                            <div class="card-header text-center" style="padding-bottom: 0px;background-color:#fff;border:0px;">
                                                <h4 class="pagemainheading topaddmarginsub" style="color:#A423EB!important;font-size: 18px;">SERVICE
                                                </h4>
                                            </div>
                                            <div class="card-body text-center" style="padding-top: 0px;">
                                                <p style="font-family: 'Josefin Sans Light';font-size:15px;">Wednesday 13th September 2023,  
                                                </p>
                                                <p style="font-family: 'Josefin Sans Light';font-size:15px;">11am-12pm
                                                </p>
                                                <p style="font-family: 'Josefin Sans Light';font-size:15px;">Events on Oxlade, 
                                                </p>
                                                <p style="font-family: 'Josefin Sans Light';font-size:15px;">50 Oxlade Drive 
                                                </p>
                                                <p style="font-family: 'Josefin Sans Light';font-size:15px;">New Farm Qld, 4005  
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6 offset-lg-1 mt-3" style="border: 1px solid #BE9438!important;">
                                        <div class="card" style="border:0px;">
                                            <div class="card-header text-center" style="padding-bottom: 0px;background-color:#fff;border:0px;">
                                                <h4 class="pagemainheading topaddmarginsub" style="color:#A423EB!important;font-size: 18px;">WAKE
                                                </h4>
                                            </div>
                                            <div class="card-body text-center" style="padding-top: 0px;">
                                                <p style="font-family: 'Josefin Sans Light';font-size:15px;">Wednesday 13th September 2023,  
                                                </p>
                                                <p style="font-family: 'Josefin Sans Light';font-size:15px;">12pm-3pm
                                                </p>
                                                <p style="font-family: 'Josefin Sans Light';font-size:15px;">Events on Oxlade, 
                                                </p>
                                                <p style="font-family: 'Josefin Sans Light';font-size:15px;">50 Oxlade Drive 
                                                </p>
                                                <p style="font-family: 'Josefin Sans Light';font-size:15px;">New Farm Qld, 4005  
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6 offset-lg-1 mt-3" style="border: 1px solid #BE9438!important;">
                                        <div class="card" style="border:0px;">
                                            <div class="card-header text-center" style="padding-bottom: 0px;background-color:#fff;border:0px;">
                                                <h4 class="pagemainheading topaddmarginsub" style="color:#A423EB!important;font-size: 18px;">FINAL RESTING PLACE
                                                </h4>
                                            </div>
                                            <div class="card-body text-center" style="padding-top: 0px;">
                                                <p style="font-family: 'Josefin Sans Light';font-size:15px;">Breannon's ashes are currently in her mother’s possession. Some of Bree’s ashes will be scattered with her grandparents, Jan and Lex Horgan. Some ashes will be scattered overseas, where Breannon planned to travel. Breannon's remaining ashes will be combined with her mother’s, and both will be buried with Breannon's sister, Kaitlyn Schuback-Jeffers.  
                                                </p>
                                                <!--<p style="font-family: 'Josefin Sans Light';font-size:15px;">GEO CODE-->
                                                <!--</p>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div  class="col-lg-12 col-sm-12 mt-4 newclasspaddingoff">
                                <h3 class="pagemainheading mt-3" style="color:#A423EB!important;">EULOGY
                                </h3>
                            </div>
                            <div class="col-lg-12 col-sm-12 text-center newclasspaddingoff">
                                <button class="btn btn-large mt-3 contactadministration" style="background-color: #BE9438;width: 30%;color:#000;border-radius: 20px;font-family: 'Josefin Sans Bold';">DOWNLOAD ORDER OF SERVICE
                                </button>
                            </div>
                            <div class="col-lg-12 col-sm-12 mt-3 newclasspaddingoff">
                                <h3 class="pagemainheading mt-3" style="color:#A423EB!important;">A MESSAGE FROM THE FAMILY
                                </h3>
                                <p class="mt-3" style="font-family: 'Josefin Sans Light';">In loving memory of Breannon, Kaitlyn and I wish to express our heartfelt gratitude to all who have supported us during this difficult time.
                                </p>
                                <p class="mt-3" style="font-family: 'Josefin Sans Light';">A special thank you to Poppy and Brian for their generous assistance with funeral expenses and your consistent support during our times of need. Your love, kindness and support have been a great comfort to us.
                                </p>
                                <p class="mt-3" style="font-family: 'Josefin Sans Light';">Our thanks go out to John Frearson for organizing the Go Fund Me account, and to everyone who contributed to assist us with living expenses while we took time off work to grieve. Your efforts have been a tremendous help to us during this challenging time.
                                </p>
                                <p class="mt-3" style="font-family: 'Josefin Sans Light';">Thank you to Kyle Tokic for leading the procession in Breannon’s car and for being a constant source of emotional support.
                                </p>
                                <p class="mt-3" style="font-family: 'Josefin Sans Light';">
                                    We are also grateful to Cameron Rickard for organising the lawn games, which brought joy and light-heartedness to our gathering.
                                </p>
                                <p class="mt-3" style="font-family: 'Josefin Sans Light';">
                                    We would also like to thank Selyca for providing the beautiful angel flowers, popcorn machine, and fairy floss machine. Your generous gestures added a special touch to the service.
                                </p>
                                <p class="mt-3" style="font-family: 'Josefin Sans Light';">
                                    We are grateful to BHP for providing the stunning floral display, which brought beauty and solace to the service.
                                </p>
                                <p class="mt-3" style="font-family: 'Josefin Sans Light';">
                                    Thank you to everyone who took the time to attend the service, traveling near and far and taking time off from work, especially Breannon’s cousin Kiralee who travelled from the UK to support us.
                                </p>
                                <p class="mt-3" style="font-family: 'Josefin Sans Light';">
                                    As you can imagine, the event and lead-up were a blur. If we have missed anyone, please message us as we would love to mention you.
                                </p>
                                <p class="mt-3" style="font-family: 'Josefin Sans Light';">
                                    Your kindness and support have meant the world to us during this difficult time. We are forever grateful for your love and generosity.
                                </p>
                            </div>
                            <div class="col-lg-12 col-sm-12 mt-lg-4 newclasspaddingoff">
                                <video width="100%" height="500" controls style="border: 1px solid #BE9438!important;" class="dummyvideooo">
                                    <source src="assets/dummyvideo.mp4" type="video/mp4">
                                </video>
                            </div>
                            <div class="col-lg-12 col-sm-12 mt-lg-4 p-4 newclasspaddingoff">        
                                <div class="row">
                                    <div class="col-lg-12 col-sm-12" id="memorial">
                                        <h3 class="transitionheading mt-lg-3 topaddmarginsub" style="color:#A423EB!important;" id="notices">NOTICES
                                        </h3>
                                    </div>
                                    <div class="col-lg-12 col-sm-12 text-center">
                                        <h3 class="wishesheading mt-4">CELEBRATING BREANNONS 31st BIRTHDAY:  
                                        </h3>
                                    </div>
                                    <div class="col-lg-12 col-sm-12 text-center" style="padding-right: 0px!important;">
                                        <h3 class="breesheading">Karen and Kaitlyn would like to invite close family and friends to honour Breannon’s birthday at lunch on
                                        </h3>
                                        <h3 class="breesheading">Sunday 31st December, 12pm.
                                        </h3>
                                        <h3 class="breesheading">Italian Restaurant, Broadbeach
                                        </h3>
                                        <h3 class="breesheading">(Pay for your own meals and drinks)
                                        </h3>
                                        <h3 class="breesheading"><b>RSVP</b> by 20/12/23
                                        </h3>
                                    </div>
                                    <div class="col-lg-12 col-sm-12 text-center">
                                        <h3 class="wishesheading mt-4">CELEBRATING BREANNONS 1st HEAVENLY BIRTHDAY 
                                        </h3>
                                    </div>
                                    <div class="col-lg-12 col-sm-12 text-center" style="padding-right: 0px!important;">
                                        <h3 class="breesheading">Karen and Kaitlyn would like to invite close family and friends to honour Breannon’s anniversary online
                                        </h3>
                                        <h3 class="breesheading">Wednesday 25th August, 2024., 7pm. Online Zoom                                            .
                                        </h3>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="col-lg-12 col-sm-12 mt-4 newclasspaddingoff" style="border-top: 2px solid #BE9438!important;" id="tributes">
                                <h3 class="pagemainheading mt-3 topaddmarginsub" style="color:#A423EB!important;">TRIBUTES
                                </h3>
                            </div>
                            <div class="col-lg-12 col-sm-12 mt-4 newclasspaddingoff">
                                <div class="swiper tributeswiper mobileoff">
                                    <div class="swiper-wrapper">
                                      <div class="swiper-slide" style="border:1px solid #BE9438!important;">
                                        <div class="row">
                                            <div class="col-lg-6 col-sm-6 text-left">
                                                <h4>Mother</h4>
                                            </div>
                                            <div class="col-lg-6 col-sm-6">
                                                <h4>Karen Schuback</h4>
                                            </div>
                                            <div class="col-lg-12 col-sm-12 text-left">
                                                <p style="font-family: 'Josefin Sans Light';">Message here………
                                                </p>
                                            </div>
                                        </div>
                                      </div>
                                      <div class="swiper-slide" style="border:1px solid #BE9438!important;">
                                        <div class="row">
                                            <div class="col-lg-6 col-sm-6 text-left">
                                                <h4>Mother</h4>
                                            </div>
                                            <div class="col-lg-6 col-sm-6">
                                                <h4>Full Name Here</h4>
                                            </div>
                                            <div class="col-lg-12 col-sm-12 text-left">
                                                <p style="font-family: 'Josefin Sans Light';">Message here………
                                                </p>
                                            </div>
                                        </div>
                                      </div>
                                      <div class="swiper-slide" style="border:1px solid #BE9438!important;">
                                        <div class="row">
                                            <div class="col-lg-6 col-sm-6 text-left">
                                                <h4>Mother</h4>
                                            </div>
                                            <div class="col-lg-6 col-sm-6">
                                                <h4>Full Name Here</h4>
                                            </div>
                                            <div class="col-lg-12 col-sm-12 text-left">
                                                <p style="font-family: 'Josefin Sans Light';">Message here………
                                                </p>
                                            </div>
                                        </div>
                                      </div>
                                      <div class="swiper-slide" style="border:1px solid #BE9438!important;">
                                        <div class="row">
                                            <div class="col-lg-6 col-sm-6 text-left">
                                                <h4>Mother</h4>
                                            </div>
                                            <div class="col-lg-6 col-sm-6">
                                                <h4>Full Name Here</h4>
                                            </div>
                                            <div class="col-lg-12 col-sm-12 text-left">
                                                <p style="font-family: 'Josefin Sans Light';">Message here……….
                                                </p>
                                            </div>
                                        </div>
                                      </div>
                                      <div class="swiper-slide" style="border:1px solid #BE9438!important;">
                                        <div class="row">
                                            <div class="col-lg-6 col-sm-6 text-left">
                                                <h4>Mother</h4>
                                            </div>
                                            <div class="col-lg-6 col-sm-6">
                                                <h4>Full Name Here</h4>
                                            </div>
                                            <div class="col-lg-12 col-sm-12 text-left">
                                                <p style="font-family: 'Josefin Sans Light';">Message here……….
                                                </p>
                                            </div>
                                        </div>
                                      </div>
                                      <div class="swiper-slide" style="border:1px solid #BE9438!important;">
                                        <div class="row">
                                            <div class="col-lg-6 col-sm-6 text-left">
                                                <h4>Mother</h4>
                                            </div>
                                            <div class="col-lg-6 col-sm-6">
                                                <h4>Full Name Here</h4>
                                            </div>
                                            <div class="col-lg-12 col-sm-12 text-left">
                                                <p style="font-family: 'Josefin Sans Light';">Message here……….
                                                </p>
                                            </div>
                                        </div>
                                      </div>
                                    </div>
                                    <!--<div class="swiper-pagination mt-3"></div>-->
                                  </div>
                                  
                                 
                                 
                                <div class="swiper qandanswerswiper pb-5 mobileon" style="border:1px solid #BE9438!important;display:none;">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="row p-2">
                                                <div class="col-lg-6 col-sm-6">
                                                    <h4 class="text-left">Mother <span class="ml-4 text-right">Karen Schuback</span></h4>
                                                </div>
                                                <div class="col-lg-12 col-sm-12 text-left mt-5">
                                                    <p style="font-family: 'Josefin Sans Light';">Message here……….
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="row p-2">
                                                <div class="col-lg-6 col-sm-6">
                                                    <h4 class="text-left">Mother <span class="ml-4 text-right">Karen Schuback</span></h4>
                                                </div>
                                                <div class="col-lg-12 col-sm-12 text-left mt-5">
                                                    <p style="font-family: 'Josefin Sans Light';">Message here……….
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="row p-2">
                                                <div class="col-lg-6 col-sm-6">
                                                    <h4 class="text-left">Mother <span class="ml-4 text-right">Karen Schuback</span></h4>
                                                </div>
                                                <div class="col-lg-12 col-sm-12 text-left mt-5">
                                                    <p style="font-family: 'Josefin Sans Light';">Message here……….
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="row p-2">
                                                <div class="col-lg-6 col-sm-6">
                                                    <h4 class="text-left">Mother <span class="ml-4 text-right">Karen Schuback</span></h4>
                                                </div>
                                                <div class="col-lg-12 col-sm-12 text-left mt-5">
                                                    <p style="font-family: 'Josefin Sans Light';">Message here……….
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="row p-2">
                                                <div class="col-lg-6 col-sm-6">
                                                    <h4 class="text-left">Mother <span class="ml-4 text-right">Karen Schuback</span></h4>
                                                </div>
                                                <div class="col-lg-12 col-sm-12 text-left mt-5">
                                                    <p style="font-family: 'Josefin Sans Light';">Message here……….
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                    <!-- <div class="swiper-pagination"></div> -->
                                </div>
                            </div>
                            <div class="col-lg-12 col-sm-12 text-center mt-3 newclasspaddingoff">
                                <button class="btn btn-large contactadministration" style="background-color: #BE9438;width: 30%;color:#000;border-radius: 20px;">ADD A TRIBUTE
                                </button>
                            </div>
                            <div class="col-lg-12 col-sm-12 mt-lg-4 newclasspaddingoff">
                                <h3 class="pagemainheading mt-3 topaddmarginsub" style="color:#A423EB!important;">MESSAGES FROM THE HONOUREE
                                </h3>
                            </div>
                            <div class="col-lg-12 col-sm-12 mt-lg-4 newclasspaddingoff">
                                <div class="swiper hououreeswiper">
                                    <div class="swiper-wrapper" style="height: 300px;">
                                      <div class="swiper-slide pb-lg-5">
                                        <p class="text-left mr-lg-5" style="font-family: 'Josefin Sans Light';">
                                            <span class="mr-lg-5">
                                                <span class="mr-lg-5">
                                                    <span class="mr-lg-5">
                                                        <span class="mr-lg-5">
                                                            <span class="mr-lg-5">
                                                                <span style="font-family: 'Josefin Sans Light';">To: </span>
                                                            </span>
                                                        </span>
                                                    </span>
                                                </span>
                                            </span>
                                        </p>
                                        <p class="text-right ml-lg-5">
                                            <span class="ml-lg-5">
                                                <span class="ml-lg-5"> 
                                                    <span class="ml-lg-5">
                                                        <span class="ml-lg-5">
                                                            <span class="ml-lg-5">
                                                                <span class="ml-lg-5">
                                                                    <span class="ml-lg-5">
                                                                        <span style="font-family: 'Josefin Sans Light';">Date: //</span>
                                                                    </span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </span>
                                                </span>
                                            </span>
                                        </p>
                                      </div>
                                      <div class="swiper-slide pb-lg-5">
                                        <p class="text-left mr-lg-5">
                                            <span class="mr-lg-5">
                                                <span class="mr-lg-5">
                                                    <span class="mr-lg-5">
                                                        <span class="mr-lg-5">
                                                            <span class="mr-lg-5">
                                                                <span style="font-family: 'Josefin Sans Light';">To:</span>
                                                            </span>
                                                        </span>
                                                    </span>
                                                </span>
                                            </span>
                                        </p>
                                        <p class="text-right ml-lg-5">
                                            <span class="ml-lg-5">
                                                <span class="ml-lg-5"> 
                                                    <span class="ml-lg-5">
                                                        <span class="ml-lg-5">
                                                            <span class="ml-lg-5">
                                                                <span class="ml-lg-5">
                                                                    <span class="ml-lg-5">
                                                                        <span style="font-family: 'Josefin Sans Light';">Date: / /</span>
                                                                    </span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </span>
                                                </span>
                                            </span>
                                        </p>
                                      </div>
                                    </div>
                                    <div class="swiper-button-next mt-lg-5"></div>
                                    <div class="swiper-button-prev mt-lg-5"></div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-sm-12 mt-4 newclasspaddingoff" style="border-top: 2px solid #BE9438!important;border-bottom: 2px solid #BE9438!important;">
                                <h3 class="pagemainheading mt-3 topaddmarginsub" style="color:#A423EB!important;">MAKE A DONATION
                                </h3>
                                <p class="text-center" style="font-family: 'Josefin Sans Light';">"Transform grief into action by supporting a cause close to your heart. In memory of your loved one, consider donating to a charity dedicated to researching, advocating, or providing support for the cause of their passing. Your contribution not only honours their memory but also helps others facing similar challenges. Together, let's turn loss into hope and make a difference in their honour."   
                                </p>
                                <p class="text-center">https://donate.heartfoundation.org.au 
                                </p>
                                <div class="row">
                                    <div class="col-lg-12 col-sm-12 text-center">
                                        <img src="assets/heartfoundation.png" class="text-center" style="width:150px;">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-sm-12 mt-2 newclasspaddingoff">
                                <h3 class="pagemainheading mt-2 topaddmarginsub" style="color:#A423EB!important;">RELATIVES AND FRIENDS
                                </h3>
                            </div>
                            <style>
                              
                            
                              /* Responsive styles */
                              @media (min-width: 768px) {
                                .slider-item {
                                  flex: 0 0 calc(100% / 3); /* Display three items at a time on larger screens */
                                  margin-right:5px!important;
                                }
                                
                              }
                            </style>
                            <div class="col-lg-12 col-sm-12 mt-3 newclasspaddingoff">  
                                <div class="slider-container">
                                    <div class="slider-content">
                                      <div class="slider-item">
                                        <img class="product-image" src="assets/dummythree.jpg" alt="Product 1">
                                        <div class="product-info">
                                          <h5>LEX HORGAN</h5>
                                          <p style="font-family: 'Josefin Sans Light';">Grandfather
                                        </p>
                                        </div>
                                      </div>
                                      <div class="slider-item">
                                        <img class="product-image" src="assets/dummythree.jpg" alt="Product 2">
                                        <div class="product-info">
                                          <h5>GEOFFREY SCHUBACK
                                        </h5>
                                          <p style="font-family: 'Josefin Sans Light';">Grandfather
                                        </p>
                                        </div>
                                      </div>
                                      <div class="slider-item">
                                        <img class="product-image" src="assets/dummythree.jpg" alt="Product 3">
                                        <div class="product-info">
                                          <h5>TROY SCHUBACK
                                        </h5>
                                          <p style="font-family: 'Josefin Sans Light';">Uncle</p>
                                        </div>
                                      </div>
                                      <div class="slider-item">
                                        <img class="product-image" src="assets/dummythree.jpg" alt="Product 3">
                                        <div class="product-info">
                                          <h5>Second TROY SCHUBACK
                                        </h5>
                                          <p style="font-family: 'Josefin Sans Light';">Uncle</p>
                                        </div>
                                      </div>
                                    </div>
                                    <span class="prev" onclick="slide(-1)">&#10094;</span>
                                    <span class="next" onclick="slide(1)">&#10095;</span>
                                  </div>
                            </div>
                            <div class="col-lg-12 col-sm-12 text-center mt-3 newclasspaddingoff">
                                <button class="btn btn-large contactadministration" style="background-color: #BE9438;width: 30%;color:#000;border-radius: 20px;font-family: 'Josefin Sans Bold';">LINK A PAGE
                                </button>
                            </div>
                            <div class="col-lg-12 col-sm-12 mt-2 newclasspaddingoff">
                                <h3 class="pagemainheading mt-2 topaddmarginsub" style="color:#A423EB!important;">RECENT ACTIVITY
                                </h3>
                            </div>
                            <div class="col-lg-12 col-sm-12 mt-2 newclasspaddingoff">
                                <div class="table-responsive table-small">
                                    <table class="table table-bordered" style="border: 2px solid #BE9438!important;">
                                        <tbody>
                                            <tr>
                                                <td style="font-family: 'Josefin Sans Light';">XX/XX/XXXX</td>
                                                <td style="font-family: 'Josefin Sans Light';">Karen Schuback</td>
                                                <td style="font-family: 'Josefin Sans Light';">Added to guest book</td>
                                            </tr>
                                            <tr>
                                                <td style="font-family: 'Josefin Sans Light';">XX/XX/XXXX</td>
                                                <td style="font-family: 'Josefin Sans Light';">Karen Schuback</td>
                                                <td style="font-family: 'Josefin Sans Light';">Added to gallery</td>
                                            </tr>
                                            <tr>
                                                <td style="font-family: 'Josefin Sans Light';">XX/XX/XXXX</td>
                                                <td style="font-family: 'Josefin Sans Light';">Karen Schuback</td>
                                                <td style="font-family: 'Josefin Sans Light';">Added to tributes</td>
                                            </tr>
                                            <tr>
                                                <td style="font-family: 'Josefin Sans Light';">XX/XX/XXXX</td>
                                                <td style="font-family: 'Josefin Sans Light';">Karen Schuback</td>
                                                <td style="font-family: 'Josefin Sans Light';">Added to stories</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-lg-12 col-sm-12 text-center mt-3 newclasspaddingoff">
                                <button class="btn btn-large contactadministration" style="background-color: #BE9438;width: 30%;color:#000;border-radius: 20px;font-family: 'Josefin Sans Bold';">CREATE A PAGE
                                </button>
                            </div>
                            <div class="col-lg-12 col-sm-12 mt-2 newclasspaddingoff" id="contact">
                                <h3 class="pagemainheading mt-2 topaddmarginsub" style="color:#A423EB!important;">SHARE THIS PAGE
                                </h3>
                            </div>
                            <div class="col-lg-4 col-sm-4 mt-2 qrcodediv newclasspaddingoff">
                                <img src="assets/qr.png" class="qrimageheightset" style="width: 100%; height: 328px;border: 1px solid #BE9438!important;">
                            </div>
                            <div class="col-lg-8 col-sm-8 mt-2 ">
                                <div class="row">
                                    <div class="col-lg-12 col-sm-12 text-center p-5" style="border: 1px solid #BE9438!important;">
                                        <span style="font-weight: bold;font-family: 'Josefin Sans Light';font-size: 35px;"><i class="fa fa-facebook"></i></span>
                                        <span class="ml-3" style="font-weight: bold;font-family: 'Josefin Sans Light';font-size: 35px;"><i class="fa fa-instagram"></i></span>
                                        <span class="ml-3" style="font-weight: bold;font-family: 'Josefin Sans Light';font-size: 35px;"><i class="fa fa-linkedin"></i></span>
                                    </div>
                                    <div class="col-lg-12 col-sm-12 text-center p-5 mt-4" style="border: 1px solid #BE9438!important;">
                                        <div class="row mobileoff">
                                            <div class="col-lg-6 col-sm-12 offset-lg-3">
                                                <p class="pb-0 mb-0 pagenotify" style="font-family: 'Josefin Sans Light';text-align:center;">Notify me when page updates</p>
                                                <form class="form-inline text-center">
                                                    <input class="form-control mr-sm-2 footersearchinputnav" type="email"
                                                        placeholder="Enter your Email" aria-label="Email">
                                                </form>
                                            </div>
                                        </div>
                                        <div class="mobileon" style="display:none;">
                                            <div class="row">
                                                <div class="col-12">
                                                    <p class="pb-0 mb-0 pagenotify" style="font-family: 'Josefin Sans Light';text-align:center;">Notify me when page updates</p>
                                                </div>
                                                <div class="col-10" style="padding-right:0px!important;">
                                                    <input class="form-control mr-sm-2 footersearchinputnav" type="email"
                                                    placeholder="Enter your Email" aria-label="Email" style="border-radius:0px;border-right:0px;">
                                                </div>
                                                <div class="col-2" style="padding-left:0px!important;">
                                                    <button class="btn notifybutton"><i class="fa fa-arrow-right"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-sm-12 text-center mt-3 ">
                                <button class="btn btn-large contactadministration topcontactadministrationbottom" style="background-color: #BE9438;width: 30%;color:#000;border-radius: 20px;font-family: 'Josefin Sans Bold';">EMAIL ADMINISTRATORS
                                </button>
                            </div>
                            <div class="col-lg-12 col-sm-12 mt-3" style="border: 1px solid #BE9438!important;background-color: lightgrey;">
                                <div class="row">
                                    <div class="col-lg-12 col-sm-12 text-center">
                                        <div class="row">
                                            <div class="col-lg-3 col-sm-6 textcentssrer col-6" style="text-align:left;">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                      <a class="nav-link active" href="#home" style="color: #000;padding-bottom: 0px;font-family: 'Josefin Sans Light';">HOME</a>
                                                    </li>
                                                    <li class="nav-item">
                                                      <a class="nav-link" href="#gallery" style="color: #000;padding-bottom: 0px;font-family: 'Josefin Sans Light';">GALLERY</a>
                                                    </li>
                                                    <li class="nav-item">
                                                      <a class="nav-link" href="#funeral" style="color: #000;padding-bottom: 0px;font-family: 'Josefin Sans Light';">FUNERAL WISHES</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="#tributes" style="color: #000;padding-bottom: 0px;font-family: 'Josefin Sans Light';">TRIBUTES</a>
                                                    </li>
                                                  </ul>
                                            </div>
                                            <div class="col-lg-3 col-sm-6 textcentssrer col-6"  style="text-align:left;">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                      <a class="nav-link active" href="#overview" style="color: #000;padding-bottom: 0px;font-family: 'Josefin Sans Light';">OVERVIEW</a>
                                                    </li>
                                                    <li class="nav-item">
                                                      <a class="nav-link" href="#guest" style="color: #000;padding-bottom: 0px;font-family: 'Josefin Sans Light';">GUEST BOOK</a>
                                                    </li>
                                                    <li class="nav-item">
                                                      <a class="nav-link" href="#obituary" style="color: #000;padding-bottom: 0px;font-family: 'Josefin Sans Light';">OBITUARY</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="#contacts" style="color: #000;padding-bottom: 0px;font-family: 'Josefin Sans Light';">CONTACTS</a>
                                                    </li>
                                                  </ul>
                                            </div>
                                            <div class="col-lg-3 col-sm-6 textcentssrer col-6"  style="text-align:left;">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                      <a class="nav-link active" href="#relations" style="color: #000;padding-bottom: 0px;font-family: 'Josefin Sans Light';">RELATIONSHIPS</a>
                                                    </li>
                                                    <li class="nav-item">
                                                      <a class="nav-link" href="#stories" style="color: #000;padding-bottom: 0px;font-family: 'Josefin Sans Light';">STORIES</a>
                                                    </li>
                                                    <li class="nav-item">
                                                      <a class="nav-link" href="#notices" style="color: #000;padding-bottom: 0px;font-family: 'Josefin Sans Light';">NOTICES</a>
                                                    </li>
                                                  </ul>
                                            </div>
                                            <div class="col-lg-3 col-sm-6 textcentssrer col-6"  style="text-align:left;">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                      <a class="nav-link active" href="#ganeral" style="color: #000;padding-bottom: 0px;font-family: 'Josefin Sans Light';">GENERAL KNOWLEDGE</a>
                                                    </li>
                                                    <li class="nav-item">
                                                      <a class="nav-link" href="#sounds" style="color: #000;padding-bottom: 0px;font-family: 'Josefin Sans Light';">SOUNDBITES</a>
                                                    </li>
                                                    <li class="nav-item">
                                                      <a class="nav-link" href="#home" style="color: #000;padding-bottom: 0px;font-family: 'Josefin Sans Light';">MEMORIAL</a>
                                                    </li>
                                                  </ul>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
    <script>
        $(document).ready(function() {
            // Initialize FancyBox
            $('[data-fancybox="gallerysecond"]').fancybox();
        });
    </script>
    <script>
        $(document).ready(function() {
            // Initialize FancyBox
            $('[data-fancybox="gallery"]').fancybox();
        });
    </script>
    <script>
        $(document).ready(function() {
            // Initialize FancyBox
            $('[data-fancybox="briefdesgallery"]').fancybox();
        });
    </script>
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
        var swiper = new Swiper(".myrelationswiper", {
            watchSlidesProgress: true,
            slidesPerView: 4,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>
    <script>
        var swiper = new Swiper(".ganeralswiper", {
            slidesPerView: 4,
            grid: {
                rows: 2,
            },
            spaceBetween: 30,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
              },
        });
    </script>
    <script>
        var swiper = new Swiper(".qandanswerswiper", {
          cssMode: true,
          navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
          },
        //   pagination: {
        //     el: ".swiper-pagination",
        //   },
          mousewheel: true,
          keyboard: true,
        });
    </script>
    <script>
        var swiper = new Swiper(".qandanswerswiperquestion", {
          cssMode: true,
          navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
          },
        //   pagination: {
        //     el: ".swiper-pagination",
        //   },
          mousewheel: true,
          keyboard: true,
        });
    </script>
    <script>
        var swiper = new Swiper(".galleryswiper", {
          navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
          },
        });
    </script>
    <script>
        var swiper = new Swiper(".guestswiper", {
          navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
          },
        });
    </script>
    <script>
        var swiper = new Swiper(".guestbookswiper", {
          slidesPerView: 3,
          grid: {
            rows: 2,
          },
          spaceBetween: 30,
          pagination: {
            el: ".swiper-pagination",
            clickable: true,
          },
        });
      </script>
      <script>
        var swiper = new Swiper(".soundbitesswiper", {
          slidesPerView: 1,
          spaceBetween: 10,
          pagination: {
            el: ".swiper-pagination",
            clickable: true,
          },
          breakpoints: {
            640: {
              slidesPerView: 2,
              spaceBetween: 20,
            },
            768: {
              slidesPerView: 4,
              spaceBetween: 40,
            },
            1024: {
              slidesPerView: 5,
              spaceBetween: 50,
            },
          },
        });
      </script>
      <script>
        var swiper = new Swiper(".tributeswiper", {
          slidesPerView: 2,
          grid: {
            rows: 2,
          },
          spaceBetween: 30,
          pagination: {
            el: ".swiper-pagination",
            clickable: true,
          },
        });
      </script>
      <script>
        var swiper = new Swiper(".hououreeswiper", {
          navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
          },
        });
      </script>
      <script>
        var swiper = new Swiper(".briefswiper", {
          navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
          },
        });
      </script>
      <script>
        var swiper = new Swiper(".relativesswiper", {
          slidesPerView: 3,
          spaceBetween: 30,
          pagination: {
            el: ".swiper-pagination",
            clickable: true,
          },
        });
      </script>
      <script>
        var swiper = new Swiper('.swiper-container', {
            // Optional parameters
            direction: 'horizontal',
            loop: true,
    
            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>
        <script>
          // JavaScript for manual sliding with arrow buttons
          const sliderContent = document.querySelector('.slider-content');
          let currentPosition = 0;
          const slideWidth = document.querySelector('.slider-item').offsetWidth;
        
          function slide(direction) {
            if (direction === -1 && currentPosition < 0) {
              currentPosition += slideWidth;
            } else if (direction === 1 && currentPosition > -(slideWidth * (sliderContent.children.length - 1))) {
              currentPosition -= slideWidth;
            }
            sliderContent.style.transform = `translateX(${currentPosition}px)`;
          }
        </script>
      <script>
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
            
                    document.querySelector(this.getAttribute('href')).scrollIntoView({
                        behavior: 'smooth'
                    });
                });
            });
      </script>
</body>

</html><?php /**PATH D:\laragon\www\gmg solution\m1\memorial\resources\views/Frontend/pageone.blade.php ENDPATH**/ ?>
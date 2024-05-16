<!DOCTYPE html>
<html>

<head>
    <title>A life Worth Remembering</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" />
    <style>
        body {
            background-image: url(<?php echo e(asset('assets/background.png')); ?>    );
        background-position: center;
        }


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

        .footersearchinputnav {
            height: 30px;
            border-radius: 6px;
            font-size: 12px;
            width: 100% !important;
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

        .wishesheading {
            font-size: 18px;
            font-family: 'Josefin Sans Bold';
            font-weight: 500;
            text-align: center;
            color: #000;
        }

        .breesheading {
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

        h6 {
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
            border-top: 0px;
            border-right: 0px;
            border-left: 0px;
            box-shadow: inherit;
        }

        .carousel-indicators {
            bottom: inherit !important;
        }

        .offinmobile {
            display: none !important;
        }

        .swiper-button-next,
        .swiper-button-prev {
            color: #be9438 !important;
        }

        .searchinputnavhsbdha {
            float: right;
        }

        .slider-container {
            max-width: 100%;
            /* Adjust the maximum width as needed */
            overflow: hidden;
            margin: 0 auto;
            position: relative;
        }

        .slider-content {
            display: flex;
            transition: transform 0.5s ease;
        }

        .slider-item {
            flex: 0 0 100%;
            /* Display one item at a time */
            margin-right: 20px;
            /* Adjust the space between items as needed */
            max-width: 300px;
            /* Adjust the maximum width as needed */
        }

        .product-image {
            width: 100%;
            height: auto;
            border: 1px solid #ccc;
            /* Add border for better visibility */
        }

        .product-info {
            text-align: center;
            padding: 10px;
        }

        .prev,
        .next {
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
            color: #be9438;
        }

        .next {
            right: 0;
            color: #be9438;
        }

        .swiper-button-next.mt-lg-5 {
            top: 60px;
        }

        .swiper-button-prev.mt-lg-5 {
            top: 60px;
        }

        .swiper-button-next.generalnext {
            margin-top: -76px;
        }

        .swiper-button-prev.generalprev {
            margin-top: -76px;
        }

        @media  screen and (max-width: 768px) {
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
                height: 700% !important;
            }

            .visiblecheckbox {
                width: 20% !important;
                margin-top: 20px !important;
            }

            .visiblecheckboxdiv {
                width: 80% !important;
            }

            .marginledftcvc {
                margin-left: 4px !important;
            }

            .floatfledft {
                float: left !important;
                margin-right: 190px !important;
            }

            .imagemainheightset {
                height: 150px !important;
            }

            .pagemainheading {
                font-size: 20px !important;
            }

            .brennonheading {
                font-size: 20px !important;
            }

            .borderremove {
                padding-bottom: 130px !important;
            }

            .contactadministration {
                width: 100% !important;
            }

            .addfullresposnive {
                font-size: 11px !important;
            }

            .funeralmargin {
                margin-top: 1rem !important
            }

            .dummyvideooo {
                height: 250px !important;
            }

            .heightsethournreebotonimage {
                height: 200px !important;
            }

            .slider-item {
                margin-right: 0px !important;
            }

            .textcentssrer {
                text-align: center !important;
            }

            a.navbar-brand.mobileon {
                width: 50% !important;
                font-size: 12px;
            }

            button:focus {
                outline: inherit !important;
            }

            .searchinputnavhsbdha {
                float: inherit;
            }

            .heightmainstory {
                height: 200px !important;
            }

            .prev,
            .next {
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

            .qrimageheightset {
                height: 310px !important;
            }

            .anotherpagemainheading {
                text-align: center !important;
                margin-right: 0px !important;
                font-size: 20px !important;
            }

            .storiesanotherpagemainheading {
                text-align: center !important;
                margin-right: 0px !important;
                margin-top: 15px;
                font-size: 20px !important;
            }

            .addcontactswipermargintopres {
                margin-top: 100px !important;
            }

            .transitionheading {
                font-size: 20px !important;
            }

            .swiper-button-next.mt-lg-5 {
                top: 140px;
            }

            .swiper-button-prev.mt-lg-5 {
                top: 140px;
            }

            .qrcodediv {
                padding-left: 0px !important;
                padding-right: 0px !important;
                margin-bottom: 1rem !important;
            }

            .topaddmarginsub {
                margin-top: 30px !important;
                margin-bottom: 10px !important;
            }

            .paddingunsget {
                padding-left: 0px !important;
                padding-right: 0px !important
            }

            .addpagingmodilbe {
                padding: 6px !important;
            }

            .topcontactadministrationbottom {
                margin-top: 10px !important;
                margin-bottom: 10px !important;
            }

            .pagenotify {
                text-align: left !important;
            }

            button.btn.notifybutton {
                height: 31px;
                border-radius: 0px;
                margin-top: 0px;
                padding-top: 2px;
            }

            .form-control:focus {
                color: #495057;
                background-color: #fff;
                border-color: lightgrey;
                outline: 0;
                box-shadow: 0 0 0 .2rem rgb(0 123 255 / 0%);
            }

            .offinmobile {
                padding-right: 0px !important;
            }

            .newclasspaddingoff {
                padding-right: 0px !important;
            }

            .heightscoailset {
                width: 40px !important;
                padding: 10px !important;
                height: 40px !important;
            }

            .heightscoailseticon {
                font-size: 20px !important;
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

            .paddingkhaam {
                padding-left: 0px !important;
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

            .fieldset-contenthwight {
                height: auto !important;
            }

            .nameofcardiwdth {
                width: 15% !important;
            }

            .searchinputnavhsbdha {
                float: inherit;
            }

            .heightmainstory {
                height: 200px !important;
            }

            .contactadministration {
                width: 100% !important;
            }

            .qrimageheightset {
                height: 310px !important;
            }

            .anotherpagemainheading {
                text-align: center !important;
                margin-right: 0px !important;
                font-size: 20px !important;
            }

            .storiesanotherpagemainheading {
                text-align: center !important;
                margin-right: 0px !important;
                margin-top: 15px;
            }

            .addcontactswipermargintopres {
                margin-top: 100px !important;
            }

            .transitionheading {
                font-size: 20px !important;
            }

            .swiper-button-next.mt-lg-5 {
                top: 140px;
            }

            .swiper-button-prev.mt-lg-5 {
                top: 140px;
            }

            .qrcodediv {
                padding-left: 0px !important;
                padding-right: 0px !important;
                margin-bottom: 1rem !important;
            }

            .topaddmarginsub {
                margin-top: 30px !important;
                margin-bottom: 10px !important;
            }

            .paddingunsget {
                padding-left: 0px !important;
                padding-right: 0px !important
            }

            .addpagingmodilbe {
                padding: 6px !important;
            }

            .topcontactadministrationbottom {
                margin-top: 10px !important;
                margin-bottom: 10px !important;
            }

            button.btn.notifybutton {
                height: 31px;
                border-radius: 0px;
                margin-top: 0px;
                padding-top: 2px;
            }

            .form-control:focus {
                color: #495057;
                background-color: #fff;
                border-color: lightgrey;
                outline: 0;
                box-shadow: 0 0 0 .2rem rgb(0 123 255 / 0%);
            }

            .heightscoailset {
                width: 40px !important;
                padding: 10px !important;
                height: 40px !important;
            }

            .heightscoailseticon {
                font-size: 20px !important;
            }
        }


        span#editIcon {
            color: blanchedalmond;
            padding-right: 20px;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="container" style="background-color:white;border:2px solid #BE9438;">
                <div class="row" id="home">
                    <div class="col-lg-12 col-sm-12 paddingunsget">
                        <div class="row p-lg-4 addpagingmodilbe" style="padding-top:0px!important;padding-bottom:0px!important;">
                            <div class="col-lg-12 mobileoff">
                                <nav class="navbar navbar-expand-lg navbar-light " style="background-color: #BE9438;">
                                    <!-- <a class="navbar-brand" href="#">Navbar</a> -->
                                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon"></span>
                                    </button>
                                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                                        <div class="navbar-nav">
                                            <a class="nav-item nav-link ml-lg-4" href="#home" style="color:white;font-weight: bold;font-family: 'Josefin Sans Light';">HOME</a>
                                            <a class="nav-item nav-link ml-lg-3" href="#about" style="color:white;font-weight: bold;font-family: 'Josefin Sans Light';">ABOUT</a>
                                            <a class="nav-item nav-link ml-lg-3" href="#gallery" style="color:white;font-weight: bold;font-family: 'Josefin Sans Light';">GALLERY</a>
                                            <a class="nav-item nav-link ml-lg-2" href="#guest" style="color:white;font-weight: bold;font-family: 'Josefin Sans Light';">GUEST</a>
                                            <a class="nav-item nav-link ml-lg-2" href="#stories" style="color:white;font-weight: bold;font-family: 'Josefin Sans Light';">STORIES</a>
                                            <a class="nav-item nav-link ml-lg-2" href="#transition" style="color:white;font-weight: bold;font-family: 'Josefin Sans Light';">TRANSITION</a>
                                            <a class="nav-item nav-link ml-lg-2" href="#home" style="color:white;font-weight: bold;font-family: 'Josefin Sans Light';">MEMORIAL</a>
                                            <a class="nav-item nav-link ml-lg-2" href="#tributes" style="color:white;font-weight: bold;font-family: 'Josefin Sans Light';">TRIBUTES</a>
                                            <a class="nav-item nav-link ml-lg-2" href="#contact" style="color:white;font-weight: bold;font-family: 'Josefin Sans Light';">CONTACT</a>
                                            <div class="dropdown show">
                                                <a class="nav-item nav-link ml-lg-2" style="color:white;font-weight: bold;font-family: 'Josefin Sans Light';" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">PROFILE</a>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                    <a class="dropdown-item" href="<?php echo e(route('profile_honree')); ?>">Profile</a>
                                                    <a class="dropdown-item" href="<?php echo e(route('honree_logout')); ?>">Logout</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </nav>
                            </div>
                            <div class="col-lg-6 col-sm-6 mobileoff" style="display:none;">
                                <nav class="navbar navbar-expand-lg navbar-light bg-white">
                                    <a class="navbar-brand" href="/" style="font-family: 'Josefin Sans Bold';">A Life Worth Remembering</a>
                                </nav>
                            </div>
                            <div class="col-lg-6 col-sm-12 mt-lg-2 mb-lg-5 mobileon offinmobile">
                                <nav class="navbar navbar-expand-lg navbar-light bg-white" style="background-color: #be9438 !important;">
                                    <a class="navbar-brand mobileon" href="/" style="font-family: 'Josefin Sans Bold';display:none;">A Life Worth Remembering</a>
                                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon"></span>
                                    </button>
                                    <div class="collapse navbar-collapse" id="navbarNav">
                                        <div class="navbar-nav">
                                            <a class="nav-item nav-link ml-lg-1" href="#home" style="color:white;font-weight: bold;font-family: 'Josefin Sans Light';">HOME</a>
                                            <a class="nav-item nav-link ml-lg-4" href="#about" style="color:white;font-weight: bold;font-family: 'Josefin Sans Light';">ABOUT</a>
                                            <a class="nav-item nav-link ml-lg-4" href="#gallery" style="color:white;font-weight: bold;font-family: 'Josefin Sans Light';">GALLERY</a>
                                            <a class="nav-item nav-link ml-lg-4" href="#guest" style="color:white;font-weight: bold;font-family: 'Josefin Sans Light';">GUEST</a>
                                            <a class="nav-item nav-link ml-lg-4" href="#stories" style="color:white;font-weight: bold;font-family: 'Josefin Sans Light';">STORIES</a>
                                            <a class="nav-item nav-link ml-lg-4" href="#transition" style="color:white;font-weight: bold;font-family: 'Josefin Sans Light';">TRANSITION</a>
                                            <a class="nav-item nav-link ml-lg-4" href="#home" style="color:white;font-weight: bold;font-family: 'Josefin Sans Light';">MEMORIAL</a>
                                            <a class="nav-item nav-link ml-lg-4" href="#tributes" style="color:white;font-weight: bold;font-family: 'Josefin Sans Light';">TRIBUTES</a>
                                            <a class="nav-item nav-link ml-lg-5" href="#contact" style="color:white;font-weight: bold;font-family: 'Josefin Sans Light';">CONTACT</a>
                                            <div class="dropdown show">
                                                <a class="nav-item nav-link ml-lg-5" style="color:white;font-weight: bold;font-family: 'Josefin Sans Light';" role="button" id="dropdownMenuLinksec" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">PROFILE</a>
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
                                <div id="imageContainer">
                                    <img src="<?php echo e(asset('assets/pageonebanner.PNG')); ?>" style="width:100%;height:400px;border: 2px solid #BE9438!important;" class="imagemainheightset">
                                    <span id="editIcon" style="position: absolute; top: 10px; right: 10px; cursor: pointer;">
                                        <i class="fa fa-edit"></i>
                                    </span>
                                    <input type="file" id="imageInput" style="display: none;">
                                </div>
                            </div>

                            <script>
                                document.addEventListener("DOMContentLoaded", function() {
                                    var editIcon = document.getElementById('editIcon');
                                    var imageInput = document.getElementById('imageInput');

                                    editIcon.addEventListener('click', function() {
                                        imageInput.click();
                                    });

                                    imageInput.addEventListener('change', function() {
                                        var file = this.files[0];
                                        if (file) {
                                            var reader = new FileReader();
                                            reader.onload = function(e) {
                                                var imageContainer = document.getElementById('imageContainer');
                                                var img = document.createElement('img');
                                                img.src = e.target.result;
                                                img.style.width = '100%';
                                                img.style.height = '400px';
                                                img.style.border = '2px solid #BE9438';
                                                img.className = 'imagemainheightset';
                                                imageContainer.replaceChild(img, imageContainer.getElementsByTagName('img')[0]);
                                            }
                                            reader.readAsDataURL(file);
                                        }
                                    });
                                });
                            </script>

                        <div class="col-12">
                        <div class="row">
                        
                        <h1>Profile</h1>

                        <?php if(session('success')): ?>
                <div class="alert alert-success  text-center">
                    <?php echo e(session('success')); ?>

                </div>
                <?php endif; ?>
                  
                    <div class="col-md-12">
                        <form action="<?php echo e(route('update_profile')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <div class="form-group">
                                <label for="first_name">Name:</label>
                                <input type="text" id="name" name="name" class="form-control" value="<?php echo e($user->name); ?>">
                            </div>

                            <div class="form-group">
                                <label for="mobile_phone">Mobile Phone:</label>
                                <input type="text" id="mobilephone" name="mobilephone" class="form-control" value="<?php echo e($user->mobilephone); ?>">
                            </div>
                            <div class="form-group">
                                <label for="state">State:</label>
                                <input type="text" id="state" name="state" class="form-control" value="<?php echo e($user->state); ?>">
                            </div>
                            <div class="form-group">
                                <label for="country">Country:</label>
                                <input type="text" id="country" name="country" class="form-control" value="<?php echo e($user->country); ?>">
                            </div>
                            <button type="submit" class="btn btn-primary">Update Profile</button>
                        </form>
                    </div>

                </div>
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
                                            <div class="col-lg-3 col-sm-6 textcentssrer col-6" style="text-align:left;">
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
                                            <div class="col-lg-3 col-sm-6 textcentssrer col-6" style="text-align:left;">
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
                                            <div class="col-lg-3 col-sm-6 textcentssrer col-6" style="text-align:left;">
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
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
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
            anchor.addEventListener('click', function(e) {
                e.preventDefault();

                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>

</html><?php /**PATH G:\laragon\www\memorial_website\project\memorial\resources\views/auth/profile.blade.php ENDPATH**/ ?>
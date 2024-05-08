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
                                        Technical Support
                                    </h1>
                                    <form action="#" method="POST">
                                        <div class="row">
                                            <div class="col-lg-6 col-sm-6">
                                                <div class="form-group">
                                                    <label>Name</label>
                                                    <input class="form-control" type="text" name="name" >
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-sm-6">
                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input class="form-control" type="email" name="email" >
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-sm-6">
                                                <div class="form-group">
                                                    <label>Phone</label>
                                                    <input class="form-control" type="number" name="phone" >
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-sm-6">
                                                <div class="form-group">
                                                    <label>Subject</label>
                                                    <input class="form-control" type="text" name="subject" >
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-sm-12">
                                                <div class="form-group">
                                                    <label>Message</label>
                                                    <textarea class="form-control" type="text" name="message" style="height: 110px;"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-sm-12 text-right">
                                                <button type="submit" class="btn" style="background-color:#ccaa54;border-color:#ccaa54;">Submit</button>
                                            </div>
                                        </div>
                                    </form>
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
                                                        <img src="<?php echo e(asset('assets/facebook.png')); ?>" style="width:100%;">
                                                    </div>
                                                    <div class="col-2">
                                                        <img src="<?php echo e(asset('assets/instagram.png')); ?>" style="width:100%;">
                                                    </div>
                                                    <div class="col-2">
                                                        <img src="<?php echo e(asset('assets/linkedin.png')); ?>" style="width:100%;">
                                                    </div>
                                                    <div class="col-2">
                                                        <img src="<?php echo e(asset('assets/whatsapp.png')); ?>" style="width:100%;">
                                                    </div>
                                                    <div class="col-2">
                                                        <img src="<?php echo e(asset('assets/snapchat.png')); ?>" style="width:100%;">
                                                    </div>
                                                    <div class="col-2">
                                                        <img src="<?php echo e(asset('assets/youtube.png')); ?>" style="width:100%;">
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

</html><?php /**PATH D:\laragon\www\gmg solution\memorial\memorial\resources\views/Frontend/tech.blade.php ENDPATH**/ ?>
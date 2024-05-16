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
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('css/create_page.css')); ?>">
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

        h6{
            font-family: 'Josefin Sans Bold';
        }

        .secondheading {
            font-size: 22px;
            font-family: "Josefin Sans Bold";
            font-weight:500;
            text-align: center;
            color: #BE9438;
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
        h2{
            font-family: "Josefin Sans Bold";
            font-weight:500;
            text-align: left;
        }
        .newheading{
            font-family: "Josefin Sans Bold";
            font-weight:500;
            text-align: left;
            font-size:25px;
        }
        .form-label{
            font-family: 'Josefin Sans Light';
        }
        .number{
            width: 43px!important;
            height:42px!important;
            margin-right:5px!important;
        }
        .steps ul li {
            padding-right: 10px!important;
        }
        .steps ul li:after{
            background:#ebebeb00!important;
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
        label#email-error{
               display:none!important;
           }
        input, select, textarea{
          font-weight:inherit!important; 
          margin-right: 0px;
        }
        .cusorhover:hover{
            cursor:pointer;
        }
        .form-date-item .select-icon{
            top: -2px;
        }
        .actions ul li a:hover{
            background-color:#BE9438!important;
        }
        .textlinkhrefinput {
            width: 52%;
        }
        .actions ul li:first-child a:hover {
            background: #f8f8f8;
            color: #ebe9e9;
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
                width: 48px !important;
                height: 45px!important;
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
               margin-left:10px!important;
           }
           .floatfledft{
              float: left !important;
              width: 100%;
              -webkit-flex-direction: initial!important;
           }
           .form-date-item{
               margin-left:0px!important;
               width: 50%;
           }
           .textlinkhref{
               width:30%!important;
           }
           .textlinkhrefinput{
               width:40%!important;
           }
           /*.steps{*/
           /*    display:none!important;*/
           /*}*/
           .content .current{
               padding-top:0px!important;
           }
           .heightsetcredit{
               height:auto!important;
           }
           .actions ul li a:hover{
               background:color:#BE9438;
               color:#fff!important;
           }
            label#email-error{
               display:none!important;
           }
           .createammeorialwebsitetotitl{
                   margin-left: 30px!important;
                    font-size: 20px!important;
           }
           a[href="#next"] {
               background-color:#BE9438!important;
               color:#fff!important;
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
           .responsiveinvisible{
               height:auto!important;
           }
           .reposdivecardheight{
               height:auto!important;
           }
           .fieldset-contenthwight{
                height:auto!important;    
            }
            .heightsetpackagediv {
                height: auto !important;
            }
            .paddingkhaam{
                padding-left: 0px!important;
            }
            /*.nameofcardiwdth{*/
            /*    width:15%!important;*/
            /*}*/
            label.form-check-label{
                text-align:initial!important;
            }
            .lastformheightset{
                height:1100px!important;
            }
            .form-row .form-date, .form-row .form-select, .form-file, input, select, textarea, .form-textarea textarea, #signup-form-p-2 #credit_card, #signup-form-p-2 #cvc, #signup-form-p-2 .form-radio-flex, #signup-form-p-2 .form-flex, #signup-form-p-2 .form-group input, .form-row .form-group label{
                width:96%!important;
            }
            .form-date-item .select-icon{
                right: 6px!important;
                top:-12px!important;
            }
            label.form-label{
                margin-bottom:0px!important;
                margin-top:15px!important;
            }
            .expirdtate{
                text-align:left!important;
                margin-bottom:0px!important;
                margin-top:6px!important;
            }
            #defaultCheck1{
                margin-top:3px!important;
            }
            #defaultCheck2{
                margin-top:3px!important;
            }
            #defaultCheck3{
                margin-top:3px!important;
            }
            .subcriptionmarginotp{
                margin-top:15px;
            }
            .mainlogowalliam{
                width:30px!important;
            }
        }
        
        @media  screen and (max-width: 1199px) {
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
                width: 48px !important;
                height: 45px !important;
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
                margin-left: 0px !important;
                width: 50%;
            }
            
            .textlinkhref {
                width: 30% !important;
            }
            
            .textlinkhrefinput {
                width: 40% !important;
            }
            
            /*.steps {*/
            /*    display: none !important;*/
            /*}*/
            
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
            /*.nameofcardiwdth{*/
            /*    width:15%!important;*/
            /*}*/
            .nameofcardiwdth{
                text-align:left!important;
            }
            label.form-check-label{
                text-align:initial!important;
            }
            .steps{
                display:none!important;
            }
            .expirdtate{
                text-align:left!important;
                margin-bottom:0px!important;
                margin-top:6px!important;
            }
            .lastformheightset{
                height:1100px!important;
            }
            .form-row .form-date, .form-row .form-select, .form-file, input, select, textarea, .form-textarea textarea, #signup-form-p-2 #credit_card, #signup-form-p-2 #cvc, #signup-form-p-2 .form-radio-flex, #signup-form-p-2 .form-flex, #signup-form-p-2 .form-group input, .form-row .form-group label{
                width:96%!important;
            }
            .form-date-item .select-icon{
                right: 6px!important;
                top:-12px!important;
            }
            label.form-label{
                margin-bottom:0px!important;
                margin-top:15px!important;
            }
            #defaultCheck1{
                margin-top:3px!important;
            }
            #defaultCheck2{
                margin-top:3px!important;
            }
            #defaultCheck3{
                margin-top:3px!important;
            }
            .subcriptionmarginotp{
                margin-top:15px;
            }
            .mainlogowalliam{
                width:30px!important;
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
                                        <a class="navbar-brand" href="<?php echo e(route('home')); ?>"
                                            style="font-family: 'Josefin Sans Bold';">A Life Worth Remembering</a>
                                    </nav>
                                </div>
                                <div class="col-lg-6 col-sm-12 mt-lg-2 mb-lg-5">
                                    <nav class="navbar navbar-expand-lg navbar-light bg-white">
                                        <a class="navbar-brand mobileon" href="<?php echo e(route('home')); ?>"
                                            style="font-family: 'Josefin Sans Bold';display:none;">A Life Worth
                                            Remembering</a>
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
                                                    <a class="nav-link navlinks" href="<?php echo e(route('create_page')); ?>">CREATE
                                                        A PAGE</a>
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
                                        <a class="navbar-brand" href="<?php echo e(route('home')); ?>"
                                            style="font-family: 'Josefin Sans Bold';">A Life Worth Remembering</a>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-sm-12">
                                <!--<h2 class="ml-lg-4 mb-3 createammeorialwebsitetotitl">CREATE A MEMORIAL WEBSITE</h2>-->
                                <h2 class="ml-lg-4 mb-3 createammeorialwebsitetotitl" style="color:#BE9438;"><img class="mr-2 mainlogowalliam" src="<?php echo e(asset('assets/heart.png')); ?>" style="width:5%;"> William</h2>
                                <form method="POST" action="<?php echo e(route('save_page')); ?>" id="signup-form"
                                    class="signup-form">
                                    <?php echo csrf_field(); ?>

                                    <h3>
                                        <span class="title_text" style="font-family: 'Josefin Sans Bold';">About the
                                            honouree</span>
                                    </h3>
                                    <fieldset>
                                        <div class="fieldset-content fieldset-contenthwight" style="height:375px;">
                                            <div class="row">
                                                <div class="col-lg-6 col-sm-12">
                                                    <label for="firstname" class="form-label"
                                                        style="font-size:13px;text-align:left;">First name</label>
                                                    <input type="text" name="firstname" id="firstname"
                                                        placeholder="First Name" />
                                                </div>
                                                <div class="col-lg-6 col-sm-12">
                                                    <label for="middlename" class="form-label"
                                                        style="font-size:13px;text-align:left;">Middle name</label>
                                                    <input type="text" name="middlename" id="middlename"
                                                        placeholder="Middle Name" />
                                                    <!--<span class="text-muted">(optional)</span>-->
                                                </div>
                                                <div class="col-lg-6 col-sm-12">
                                                    <label for="lastname" class="form-label"
                                                        style="font-size:13px;text-align:left;">Last name</label>
                                                    <input type="text" name="lastname" id="lastname"
                                                        placeholder="Last Name" />
                                                </div>
                                                <div class="col-lg-6 col-sm-12">
                                                    <label for="dateofbirth" class="form-label"
                                                        style="font-size:13px;text-align:left;">Date of birth</label>
                                                    <input type="date" name="dateofbirth" id="dateofbirth" />
                                                </div>
                                                <div class="col-lg-6 col-sm-12">
                                                    <label for="dateofdeath" class="form-label"
                                                        style="font-size:13px;text-align:left;">Date of death (if
                                                        applicable)</label>
                                                    <input type="date" name="dateofdeath" id="dateofdeath" />
                                                </div>
                                                
                                                <div class="col-lg-6 col-sm-12">
                                                    <span class="text-center newheading mb-5"
                                                        style="font-size:14px;text-align:left;">Memorial web
                                                        address:</span>
                                                    <div class="input-group mb-3 mt-2 ">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text textlinkhref"
                                                                style="background-color: #e9ecef00;border: 1px solid #ced4da00; font-family: 'Josefin Sans Light';">https://</span>
                                                        </div>
                                                        <input type="text" name="memorialaddress"
                                                            placeholder="Type web address" class="textlinkhrefinput" readonly>
                                                        <div class="input-group-append textlinkhref">
                                                            <span class="input-group-text" style="font-size:13px;background-color: #e9ecef00;border: 1px solid #ced4da00; font-family: 'Josefin Sans Light';">.alifeworthremembering.com</span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-10">
                                                    <div class="col-lg-6 col-sm-12" style="padding-left:0px!important;">
                                                        <label for="dateofdeath" class="form-label"
                                                            style="font-size:13px;text-align:left;">Relationship</label>
                                                            <select class="form-control" name="relationship" style="font-family: 'Josefin Sans Light';">
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
                                                </div>
                                            </div>
                                        </div>
                                        <div class="fieldset-footer mt-2">
                                            <span>Step 1 of 6</span>
                                        </div>
                                    </fieldset>

                                    <h3>
                                        <span class="title_text" style="font-family: 'Josefin Sans Bold';">Page
                                            type</span>
                                    </h3>
                                    <fieldset>
                                        <div class="fieldset-content fieldset-contenthwight"
                                            style="height:auto;padding-bottom: 50px;">
                                            <div class="row">
                                                <div class="col-lg-12 col-sm-12">
                                                    <div class="row">
                                                        <div class="col-lg-2 col-sm-6 col-6" style="padding-right:0px;">
                                                            <label class="form-check-label text-right cusorhover"
                                                                for="defaultCheck1" style="margin-right:0px;"
                                                                data-toggle="modal" data-target=".bd-example-modal-sm">
                                                                Autobiography
                                                            </label>
                                                            <div class="modal fade bd-example-modal-sm" tabindex="-1"
                                                                role="dialog" aria-labelledby="mySmallModalLabel"
                                                                aria-hidden="true">
                                                                <div class="modal-dialog modal-sm">
                                                                    <div class="modal-content">

                                                                        <div class="modal-body">
                                                                            <button type="button" class="close"
                                                                                data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                            <p class="mt-3" style="font-size: 13px;">
                                                                                <b>Autobiography:</b> A firsthand story
                                                                                created by the honouree, providing a
                                                                                personal account of their life.
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-10 text-left col-sm-6 col-6"
                                                            style="padding-left:0px;">
                                                            <input class="form-check-input" name="auto_bio_graphy_type"
                                                                type="checkbox" value="" id="defaultCheck1"
                                                                style="width:60px;margin-top: 6px;height:18px;">
                                                        </div>
                                                        <div class="col-lg-2 text-center col-sm-6 col-6"
                                                            style="padding-right:0px;">
                                                            <label class="form-check-label text-center cusorhover"
                                                                for="defaultCheck2" style="margin-right:0px;"
                                                                data-toggle="modal" data-target=".biomodal">
                                                                Biography
                                                            </label>
                                                            <div class="modal fade bd-example-modal-sm biomodal"
                                                                tabindex="-1" role="dialog"
                                                                aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog modal-sm">
                                                                    <div class="modal-content">
                                                                        <div class="modal-body">
                                                                            <button type="button" class="close"
                                                                                data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                            <p class="mt-3" style="font-size: 13px;">
                                                                                <b>Biography:</b> A page created for
                                                                                someone unable to create the page
                                                                                themselves. It is crafted by the next of
                                                                                kin or someone with legal authority to
                                                                                act on behalf of the honouree.
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <input type="hidden" name="page_type" id="page_type">
                                                        <div class="col-lg-10 text-left col-sm-6 col-6"
                                                            style="padding-left:0px;">
                                                            <input class="form-check-input" name="bio_graphy_page_type"
                                                                type="checkbox" value="" id="defaultCheck2"
                                                                style="width:60px;margin-top: 6px;height:18px;">
                                                        </div>
                                                        <div class="col-lg-2 col-sm-6 col-6" style="padding-right:0px;">
                                                            <label class="form-check-label text-right cusorhover"
                                                                for="defaultCheck3" style="margin-right:0px;"
                                                                data-toggle="modal" data-target=".memorialmodal">
                                                                Memorial page
                                                            </label>
                                                            <div class="modal fade bd-example-modal-sm memorialmodal"
                                                                tabindex="-1" role="dialog"
                                                                aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog modal-sm">
                                                                    <div class="modal-content">
                                                                        <div class="modal-body">
                                                                            <button type="button" class="close"
                                                                                data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                            <p class="mt-3" style="font-size: 13px;">
                                                                                <b>Memorial:</b> A page dedicated to the
                                                                                memory of an individual, created by the
                                                                                next of kin or someone with legal
                                                                                authority to act.
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-10 text-left col-sm-6 col-6"
                                                            style="padding-left:0px;">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="memorial_page_typ" value="" id="defaultCheck3"
                                                                style="width:60px;margin-top: 6px;height:18px;">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="fieldset-footer mt-2">
                                            <span>Step 2 of 6</span>
                                        </div>
                                    </fieldset>



                                    <h3>
                                        <span class="title_text" style="font-family: 'Josefin Sans Bold';">Choose your
                                            plan</span>
                                    </h3>
                                    <fieldset>
                                

                                        <div class="fieldset-content heightsetpackagediv" style="height:1000px;">
                                            <span class="text-center mb-5"
                                                style="font-family: Josefin Sans Bold;font-weight: 500;font-size:20px;">Choose
                                                your payment plan</span>
                                            <div class="row">
                                                <div class="row">
                                                    <input type="hidden" name="to_buy_plan_id" id="to_buy_plan_id" required>
                                                    <?php $__currentLoopData = $plans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $plan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <div class="col-lg-6 col-sm-12">
                                                        <div class="card mt-3"
                                                            style="background-color: #fff; border-radius:18px;">
                                                            <div class="card-header text-center"
                                                                style="background-color: #fff; border:0px;border-radius:18px;">
                                                                <span class="text-center newheading mb-5">
                                                                    <?php echo e(strtoupper($plan->duration)); ?></span>
                                                                <p class="text-center mt-3"
                                                                    style="font-size:40px;font-weight: 700;color:#BE9438;font-family: 'Josefin Sans Light';">
                                                                    $<?php echo e($plan->price); ?></p>
                                                            </div>

                                                            <div class="card-body reposdivecardheight"
                                                                style="height: 300px;">
                                                                <!-- Use a <div> element styled to look like a button -->
                                                                <div class="select-plan-btn"
                                                                    data-plan-id="<?php echo e($plan->id); ?>"
                                                                    data-price="<?php echo e($plan->price); ?>"
                                                                    style="width:100%; background-color: #BE9438; color: #fff; font-family: 'Josefin Sans Light'; cursor: pointer; padding: 10px; text-align: center; border-radius: 5px;">
                                                                    Select
                                                                </div>

                                                                <p class="mt-3"
                                                                    style="font-size:16px;color:#000; font-weight: 500;margin-top:20px;font-family: 'Josefin Sans Light';">
                                                                    <b><?php echo e($plan->features); ?></b>
                                                                </p>
                                                                <p class="text-muted mt-2"
                                                                    style="font-family: 'Josefin Sans Light';">
                                                                    <?php echo e($plan->description); ?></p>
                                                                <!-- <p class="text-muted mt-3" style="font-family: 'Josefin Sans Light';">Renews monthly.</p> -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </div>




                                                <div class="col-lg-12 col-sm-12">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-sm-8">
                                                            <p class="mt-3"
                                                                style="font-size:18px;color:#000; font-weight: 500;margin-top:20px;font-family: 'Josefin Sans Light';">
                                                                30 Days Refurd Guarantee</p>
                                                            <p class="text-muted mt-2"
                                                                style="font-family: 'Josefin Sans Light';">we want you
                                                                to be completely satisfied with your Momorial.com
                                                                memorial if you wish to cancel your premium plan for any
                                                                reason with in the 30days, we will issue a full refund
                                                            </p>
                                                            <p class="mt-4 mobileoff"
                                                                style="font-size:18px;color:#000; font-weight: 500;margin-top:20px;font-family: 'Josefin Sans Light';">
                                                                Safe and Secure</p>
                                                            <p class="text-muted mt-2 mobileoff"
                                                                style="font-family: 'Josefin Sans Light';">Your personal
                                                                information and memories are safe ans secure with us:
                                                            </p>
                                                            <div class="row mobileoff">
                                                                <div class="col-lg-6 col-sm-6">
                                                                    <ul style="list-style-type: disc!important;">
                                                                        <li class="lifeatures mt-3 text-muted"
                                                                            style="color: grey;display: list-item!important;text-align: -webkit-match-parent!important;unicode-bidi: isolate!important;font-family: 'Josefin Sans Light';">
                                                                            we will never provide your personal
                                                                            information to third party
                                                                        </li>
                                                                        <li class="lifeatures mt-3 text-muted"
                                                                            style="color: grey;display: list-item!important;text-align: -webkit-match-parent!important;unicode-bidi: isolate!important;font-family: 'Josefin Sans Light';">
                                                                            All of data (photos,text,etc) you have
                                                                            stored with us is backed up daily.
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="col-lg-6 col-sm-6">
                                                                    <ul style="list-style-type: disc!important;">
                                                                        <li class="lifeatures mt-3 text-muted"
                                                                            style="color: grey;display: list-item!important;text-align: -webkit-match-parent!important;unicode-bidi: isolate!important;font-family: 'Josefin Sans Light';">
                                                                            Our servers are protected in a high security
                                                                            building with 24-hour surveillance.
                                                                        </li>
                                                                        <li class="lifeatures mt-3 text-muted"
                                                                            style="color: grey;display: list-item!important;text-align: -webkit-match-parent!important;unicode-bidi: isolate!important;font-family: 'Josefin Sans Light';">
                                                                            All credit card transactions are processed
                                                                            with 256 bit strong ssl encryption and
                                                                            billing informationis stored on a fully PCL
                                                                            complaint servers.
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-sm-4">
                                                            <img src="assets/card.png" style="width:100%;">
                                                        </div>
                                                        <div class="col-lg-12 col-sm-12 mobileon" style="display:none;">
                                                            <p class="mt-4"
                                                                style="font-size:18px;color:#000; font-weight: 500;margin-top:20px;font-family: 'Josefin Sans Light';">
                                                                Safe and Secure</p>
                                                            <p class="text-muted mt-2"
                                                                style="font-family: 'Josefin Sans Light';">Your personal
                                                                information and memories are safe ans secure with us:
                                                            </p>
                                                            <div class="row">
                                                                <div class="col-lg-6 col-sm-6">
                                                                    <ul style="list-style-type: disc!important;">
                                                                        <li class="lifeatures mt-3 text-muted"
                                                                            style="color: grey;display: list-item!important;text-align: -webkit-match-parent!important;unicode-bidi: isolate!important;font-family: 'Josefin Sans Light';">
                                                                            we will never provide your personal
                                                                            information to third party
                                                                        </li>
                                                                        <li class="lifeatures mt-3 text-muted"
                                                                            style="color: grey;display: list-item!important;text-align: -webkit-match-parent!important;unicode-bidi: isolate!important;font-family: 'Josefin Sans Light';">
                                                                            All of data (photos,text,etc) you have
                                                                            stored with us is backed up daily.
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="col-lg-6 col-sm-6">
                                                                    <ul style="list-style-type: disc!important;">
                                                                        <li class="lifeatures mt-3 text-muted"
                                                                            style="color: grey;display: list-item!important;text-align: -webkit-match-parent!important;unicode-bidi: isolate!important;font-family: 'Josefin Sans Light';">
                                                                            Our servers are protected in a high security
                                                                            building with 24-hour surveillance.
                                                                        </li>
                                                                        <li class="lifeatures mt-3 text-muted"
                                                                            style="color: grey;display: list-item!important;text-align: -webkit-match-parent!important;unicode-bidi: isolate!important;font-family: 'Josefin Sans Light';">
                                                                            All credit card transactions are processed
                                                                            with 256 bit strong ssl encryption and
                                                                            billing informationis stored on a fully PCL
                                                                            complaint servers.
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="fieldset-footer">
                                            <span>Step 3 of 6</span>
                                        </div>

                                    </fieldset>


                                    <h3>
                                        <span class="title_text" style="font-family: 'Josefin Sans Bold';">Privacy
                                            options</span>
                                    </h3>
                                    <fieldset>
                                        <div class="fieldset-content responsiveinvisible" style="height:550px;">
                                            <p class="mt-3"
                                                style="font-size:18px;color:#000; font-weight: 500;margin-top:20px;font-family: 'Josefin Sans Bold';">
                                                Privacy options:</p>
                                            <p class="mt-2" style="font-family: 'Josefin Sans Light';">Would you like to
                                                share your memorial with others or keep it private?</p>
                                            <p class="text-muted mt-2" style="font-family: 'Josefin Sans Light';">(This
                                                can be changed later.)</p>
                                            <div class="row">
                                                <div class="col-lg-12 col-sm-12">
                                                    <div class="card" style="border:0px;">
                                                        <div class="card-header" style="border:0px;">
                                                            <p class="mt-3"
                                                                style="font-size:18px;color:#BE9438; font-weight: 500;margin-top:20px;font-family: 'Josefin Sans Bold';">
                                                                All visitors can view and contribute.</p>
                                                            <p class="mt-2"
                                                                style="font-size:14px;color:grey; font-weight: 500;margin-top:20px;font-family: 'Josefin Sans Light';">
                                                                Recommend for most memorials. This option allows easy
                                                                access to the website and facilitates collaboration</p>
                                                            <p class="mt-2"
                                                                style="font-size:14px;color:grey; font-weight: 500;margin-top:20px;font-family: 'Josefin Sans Light';">
                                                                Approval by page administrators is required for all
                                                                contributions before being published to the page</p>
                                                        </div>
                                                        <div class="card-body" style="border:0px;">
                                                            <div class="row">
                                                                <div class="col-lg-1 col-sm-1 visiblecheckbox"
                                                                    style="margin-top: 7px!important;">
                                                                    <input type="checkbox" name="visible_only_to_me"
                                                                        class="form-control" style="height:16px;">
                                                                </div>
                                                                <div class="col-lg-11 col-sm-11 visiblecheckboxdiv">
                                                                    <p
                                                                        style="font-size:18px;color:#000; font-weight: 500;font-family: 'Josefin Sans Bold';">
                                                                        Visible only to me.</p>
                                                                    <p
                                                                        style="font-size:14px;color:grey; font-weight: 500;margin-top:10px;font-family: 'Josefin Sans Light';">
                                                                        choose this option if you do not want the
                                                                        memorial to be visible to others at this time.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-1 col-sm-1 visiblecheckbox" style="margin-top: 7px!important;">
                                                                    <input type="checkbox" name="visible_only_to_me" class="form-control" style="height:16px;">
                                                                </div>
                                                                <div class="col-lg-11 col-sm-11 visiblecheckboxdiv">
                                                                    <p style="font-size:18px;color:#000; font-weight: 500;font-family: 'Josefin Sans Bold';">Visible to guests with an access code</p>
                                                                    <p style="font-size:14px;color:grey; font-weight: 500;margin-top:10px;font-family: 'Josefin Sans Light';">choose this option if you do not want the memorial to be visible to others at this time.</p>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-1 col-sm-1 visiblecheckbox" style="margin-top: 7px!important;">
                                                                    <input type="checkbox" name="visible_only_to_me" class="form-control" style="height:16px;">
                                                                </div>
                                                                <div class="col-lg-11 col-sm-11 visiblecheckboxdiv">
                                                                    <p style="font-size:18px;color:#000; font-weight: 500;font-family: 'Josefin Sans Bold';">Visible to public</p>
                                                                    <p style="font-size:14px;color:grey; font-weight: 500;margin-top:10px;font-family: 'Josefin Sans Light';">choose this option if you do not want the memorial to be visible to others at this time.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="fieldset-footer">
                                            <span>Step 4 of 6</span>
                                        </div>
                                    </fieldset>
                                    <h3>
                                        <span class="title_text" style="font-family: 'Josefin Sans Bold';">Payment
                                            information</span>
                                    </h3>
                                    <fieldset>
                                        <div class="fieldset-content heightsetcredit" style="height:400px;">
                                            <div class="row">
                                                <div class="col-lg-6 col-sm-12">
                                                    <label for="name_on_card" class="form-label nameofcardiwdth"
                                                        style="text-align:left;font-size:13px;">Name on card</label>
                                                    <input type="text" name="name_on_card" id="name_on_card"
                                                        placeholder="Name on card" />
                                                </div>
                                                <div class="col-lg-6 col-sm-12">
                                                    <label for="credit_card" class="form-label"
                                                        style="text-align:left;font-size:13px;">Credit Card</label>
                                                    <input type="text" name="credit_card" id="credit_card"
                                                        placeholder="Credit card" />
                                                </div>
                                                <div class="col-lg-6 col-sm-12">
                                                    <label for="cvc" class="form-label"
                                                        style="text-align:left;font-size:13px;">CVC</label>
                                                    <input type="text" name="cvc" id="cvc" placeholder="Cvc" />
                                                </div>
                                                <div class="col-lg-6 col-sm-12">
                                                    <label for="expiry_date" class="expirdtate"
                                                        style="text-align:left;font-size:13px;">Expiration Date</label>
                                                    <div class="form-flex floatfledft">
                                                        <div class="form-date-item">
                                                            <select id="expiry_date" name="expiry_date"></select>
                                                            <span class="select-icon"><i
                                                                    class="zmdi zmdi-chevron-down"></i></span>
                                                        </div>
                                                        <div class="form-date-item">
                                                            <select id="expiry_year" name="expiry_year"></select>
                                                            <span class="select-icon"><i
                                                                    class="zmdi zmdi-chevron-down"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-sm-12">
                                                    <div class="mobileoff">
                                                        <label for="total" class="form-label"
                                                            style="text-align:left;font-size:13px;">Total</label>
                                                        <!--<input type="text" name="total" id="total" value="$" />-->
                                                        <div class="input-group mb-3" style="width: 66%!important;">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="basic-addon1"
                                                                    style="border: 1px solid #ced4da61;">$</span>
                                                            </div>
                                                            <input type="text" name="total" id="total"
                                                                class="form-control" placeholder="Total"
                                                                aria-label="Total" aria-describedby="basic-addon1"
                                                                style="padding: 15px 20px;border:1px solid #ced4da61;"
                                                                readonly>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-sm-12 mobileon" style="display:none;">
                                                    <label for="total" class="form-label "
                                                        style="margin-right:30px;text-align:left;font-size:13px;">Total</label>
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend" style="width: 12%;">
                                                            <span class="input-group-text" id="basic-addon1"
                                                                style="border: 1px solid #ced4da61;">$</span>
                                                        </div>
                                                        <input type="text" name="total" id="total" class="form-control"
                                                            placeholder="Total" aria-label="Total"
                                                            aria-describedby="basic-addon1"
                                                            style="padding: 15px 20px;border:1px solid #ced4da61;width: 88% !important;"
                                                            disabled>
                                                    </div>
                                                </div>
                                            </div>

                                            <p class="subcriptionmarginotp"><b>Subscription Payment Authorisation:</b>
                                                By providing your payment information, you authorise "A Life Worth
                                                Remembering" to initiate recurring charges to your designated payment
                                                method for the subscription fee.</p>
                                        </div>

                                        <div class="fieldset-footer">
                                            <span>Step 5 of 6</span>
                                        </div>
                                    </fieldset>
                                    <h3>
                                        <span class="title_text" style="font-family: 'Josefin Sans Bold';">Create
                                            account</span>
                                    </h3>
                                    <fieldset>
                                        <div class="fieldset-content lastformheightset" style="height:630px;">
                                            <div class="row">
                                                <div class="col-lg-6 col-sm-12">
                                                    <label for="firstname" class="form-label" style="text-align:left;font-size:13px;">First Name</label>
                                                    <input type="text" name="firstname" id="firstname"  placeholder="First Name" />
                                                </div>
                                                <div class="col-lg-6 col-sm-12">
                                                    <label for="lastname" class="form-label" style="text-align:left;font-size:13px;">Last Name</label>
                                                    <input type="text" name="lastname" id="lastname"  placeholder="Last Name" />
                                                </div>
                                                <div class="col-lg-6 col-sm-12">
                                                    <label class="form-label" style="text-align:left;font-size:13px;">Email</label>
                                                    <input type="email" name="emaill" placeholder="Email" />
                                                </div>
                                                <div class="col-lg-6 col-sm-12">
                                                    <label for="mobilephone" class="form-label" style="text-align:left;font-size:13px;">Mobile Phone</label>
                                                    <input type="number" name="mobilephone" id="lastname"  placeholder="Mobile Phone" />
                                                </div>
                                                <div class="col-lg-6 col-sm-12">
                                                    <label for="buildingname" class="form-label" style="text-align:left;font-size:13px;">Building Name</label>
                                                    <input type="text" name="buildingname" id="buildingname"  placeholder="Building Name" />
                                                </div>
                                                <div class="col-lg-6 col-sm-12">
                                                    <label for="number" class="form-label" style="text-align:left;font-size:13px;">Number</label>
                                                    <input type="number" name="buildingname" id="number"  placeholder="Number" />
                                                </div>
                                                <div class="col-lg-6 col-sm-12">
                                                    <label for="street" class="form-label" style="text-align:left;font-size:13px;">Street</label>
                                                    <input type="number" name="street" id="street"  placeholder="Street" />
                                                </div>
                                                <div class="col-lg-6 col-sm-12">
                                                    <label for="suburb" class="form-label" style="text-align:left;font-size:13px;">Suburb</label>
                                                    <input type="text" name="suburb" id="suburb"  placeholder="Suburb" />
                                                </div>
                                                <div class="col-lg-6 col-sm-12">
                                                    <label for="postcode" class="form-label" style="text-align:left;font-size:13px;">Postcode</label>
                                                    <input type="number" name="postcode" id="postcode"  placeholder="Postcode" />
                                                </div>
                                                <div class="col-lg-6 col-sm-12">
                                                    <label for="country" class="form-label" style="text-align:left;font-size:13px;">Country</label>
                                                    <!--<input type="text" name="country" id="country"  placeholder="Country" />-->
                                                    <select name="country" id="country" onchange="populateStates()">
                                                        <option value="" selected disabled>Select an Country</option>
                                                        <option value="United States">United States</option>
                                                        <option value="Afghanistan">Afghanistan</option>
                                                       
                                                        <option value="American Samoa">American Samoa</option>
                                                      
                                                        <option value="Australia">Australia</option>
                                                  
                                                        <option value="Bangladesh">Bangladesh</option>
                                                    
                                                        <option value="Brazil">Brazil</option>
                                                       
                                                        <option value="Canada">Canada</option>
                                                   
                                                        <option value="China">China</option>
                                                     
                                                        <option value="Egypt">Egypt</option>
                                                     
                                                        <option value="Finland">Finland</option>
                                                        <option value="France">France</option>
                                                       
                                                        <option value="Germany">Germany</option>
                                                
                                                        <option value="Hong Kong">Hong Kong</option>
                                                    
                                                        <option value="India">India</option>
                                                        <option value="Indonesia">Indonesia</option>
                                                       
                                                        <option value="Iraq">Iraq</option>
                                                 
                                                        <option value="Israel">Israel</option>
                                                        <option value="Italy">Italy</option>
                                                        <option value="Japan">Japan</option>
                                                        <option value="Jordan">Jordan</option>
                                                       
                                                        <option value="Kuwait">Kuwait</option>
                                                       
                                                        <option value="Malaysia">Malaysia</option>
                                                   
                                                        <option value="Mexico">Mexico</option>
                                                   
                                                        <option value="Nepal">Nepal</option>
                                                        <option value="Netherlands">Netherlands</option>
                                                     
                                                        <option value="Norway">Norway</option>
                                                    
                                                        <option value="Pakistan">Pakistan</option>
                                                      
                                                        <option value="Philippines">Philippines</option>
                                                       
                                                        <option value="Russia">Russian</option>
                                                        <option value="Saudi Arabia">Saudi Arabia</option>
                                                      
                                                        <option value="Swaziland">Swaziland</option>
                                                      
                                                        <option value="Turkey">Turkey</option>                                                      
                                                        <option value="United Kingdom">United Kingdom</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-6 col-sm-12">
                                                    <label for="state" class="form-label" style="text-align:left;font-size:13px;">State</label>
                                                    <select name="state" id="state">
                                                        <option value="" selected disabled>Select an State</option>
                                                    </select>
                                                </div>
                                                <script>
                                                    var countryStates = {
                                                        "United States": ["Alabama", "Alaska", "Arizona", "Arkansas", "California", "Colorado", "Connecticut", "Delaware", "Florida", "Georgia", "Hawaii", "Idaho", "Illinois", "Indiana", "Iowa", "Kansas", "Kentucky", "Louisiana", "Maine", "Maryland", "Massachusetts", "Michigan", "Minnesota", "Mississippi", "Missouri", "Montana", "Nebraska", "Nevada", "New Hampshire", "New Jersey", "New Mexico", "New York", "North Carolina", "North Dakota", "Ohio", "Oklahoma", "Oregon", "Pennsylvania", "Rhode Island", "South Carolina", "South Dakota", "Tennessee", "Texas", "Utah", "Vermont", "Virginia", "Washington", "West Virginia", "Wisconsin", "Wyoming"],
                                                        "Afghanistan": ["Badakhshan", "Badghis", "Baghlan", "Balkh", "Bamyan", "Daykundi", "Farah", "Faryab", "Ghazni", "Ghor", "Helmand", "Herat", "Jowzjan", "Kabul", "Kandahar", "Kapisa", "Khost", "Kunar", "Kunduz", "Laghman", "Logar", "Nangarhar", "Nimroz", "Nuristan", "Paktia", "Paktika", "Panjshir", "Parwan", "Samangan", "Sar-e Pol", "Takhar", "Urozgan", "Zabul"],
                                                        "American Samoa": ["Ma'oputasi","Leasina","Tualauta","Sua","Vaifanua","Ituau","Palauli","Fa'asaleleaga","Gaga'ifomauga","Vaisigano","Satupa'itea"],
                                                        "Australia":["New South Wales", "Victoria", "Queensland", "Western Australia", "South Australia", "Tasmania"],
                                                        "Bangladesh":["Barisal","Chittagong","Dhaka","Khulna","Mymensingh","Rajshahi","Rangpur","Sylhet"],
                                                        "Brazil": [
                                                            "Acre",
                                                            "Alagoas",
                                                            "Amapá",
                                                            "Amazonas",
                                                            "Bahia",
                                                            "Ceará",
                                                            "Espírito Santo",
                                                            "Goiás",
                                                            "Maranhão",
                                                            "Mato Grosso",
                                                            "Mato Grosso do Sul",
                                                            "Minas Gerais",
                                                            "Pará",
                                                            "Paraíba",
                                                            "Paraná",
                                                            "Pernambuco",
                                                            "Piauí",
                                                            "Rio de Janeiro",
                                                            "Rio Grande do Norte",
                                                            "Rio Grande do Sul",
                                                            "Rondônia",
                                                            "Roraima",
                                                            "Santa Catarina",
                                                            "São Paulo",
                                                            "Sergipe",
                                                            "Tocantins"
                                                        ],
                                                        "Canada": [
                                                            "Alberta",
                                                            "British Columbia",
                                                            "Manitoba",
                                                            "New Brunswick",
                                                            "Newfoundland and Labrador",
                                                            "Northwest Territories",
                                                            "Nova Scotia",
                                                            "Nunavut",
                                                            "Ontario",
                                                            "Prince Edward Island",
                                                            "Quebec",
                                                            "Saskatchewan",
                                                            "Yukon"
                                                        ],
                                                        "China": [
                                                            "Anhui",
                                                            "Fujian",
                                                            "Gansu",
                                                            "Guangdong",
                                                            "Guizhou",
                                                            "Hainan",
                                                            "Hebei",
                                                            "Heilongjiang",
                                                            "Henan",
                                                            "Hubei",
                                                            "Hunan",
                                                            "Jiangsu",
                                                            "Jiangxi",
                                                            "Jilin",
                                                            "Liaoning",
                                                            "Qinghai",
                                                            "Shaanxi",
                                                            "Shandong",
                                                            "Shanxi",
                                                            "Sichuan",
                                                            "Yunnan",
                                                            "Zhejiang",
                                                            "Guangxi",
                                                            "Inner Mongolia",
                                                            "Ningxia",
                                                            "Tibet",
                                                            "Xinjiang",
                                                            "Beijing",
                                                            "Chongqing",
                                                            "Shanghai",
                                                            "Tianjin",
                                                            "Hong Kong",
                                                            "Macau"
                                                        ],
                                                        "Egypt": [
                                                            "Alexandria",
                                                            "Aswan",
                                                            "Asyut",
                                                            "Beheira",
                                                            "Beni Suef",
                                                            "Cairo",
                                                            "Dakahlia",
                                                            "Damietta",
                                                            "Faiyum",
                                                            "Gharbia",
                                                            "Giza",
                                                            "Ismailia",
                                                            "Kafr El Sheikh",
                                                            "Luxor",
                                                            "Matrouh",
                                                            "Minya",
                                                            "Monufia",
                                                            "New Valley",
                                                            "North Sinai",
                                                            "Port Said",
                                                            "Qalyubia",
                                                            "Qena",
                                                            "Red Sea",
                                                            "Sharqia",
                                                            "Sohag",
                                                            "South Sinai",
                                                            "Suez"
                                                        ],
                                                        "Finland": [
                                                            "Åland",
                                                            "Southern Finland",
                                                            "Western Finland",
                                                            "Eastern Finland",
                                                            "Oulu",
                                                            "Lapland"
                                                          ],
                                                          "France": [
                                                            "Auvergne-Rhône-Alpes",
                                                            "Bourgogne-Franche-Comté",
                                                            "Brittany",
                                                            "Centre-Val de Loire",
                                                            "Corsica",
                                                            "Grand Est",
                                                            "Hauts-de-France",
                                                            "Île-de-France",
                                                            "Normandy",
                                                            "Nouvelle-Aquitaine",
                                                            "Occitanie",
                                                            "Pays de la Loire",
                                                            "Provence-Alpes-Côte d'Azur"
                                                          ],
                                                          "Germany": [
                                                            "Baden-Württemberg",
                                                            "Bavaria",
                                                            "Berlin",
                                                            "Brandenburg",
                                                            "Bremen",
                                                            "Hamburg",
                                                            "Hesse",
                                                            "Lower Saxony",
                                                            "Mecklenburg-Vorpommern",
                                                            "North Rhine-Westphalia",
                                                            "Rhineland-Palatinate",
                                                            "Saarland",
                                                            "Saxony",
                                                            "Saxony-Anhalt",
                                                            "Schleswig-Holstein",
                                                            "Thuringia"
                                                          ],
                                                          "Hong Kong": [
                                                            "Hong Kong Island",
                                                            "Kowloon",
                                                            "New Territories",
                                                            "Lantau Island"
                                                          ],
                                                          "India": [
                                                            "Andaman and Nicobar Islands",
                                                            "Andhra Pradesh",
                                                            "Arunachal Pradesh",
                                                            "Assam",
                                                            "Bihar",
                                                            "Chandigarh",
                                                            "Chhattisgarh",
                                                            "Dadra and Nagar Haveli",
                                                            "Daman and Diu",
                                                            "National Capital Territory of Delhi",
                                                            "Goa",
                                                            "Gujarat",
                                                            "Haryana",
                                                            "Himachal Pradesh",
                                                            "Jammu and Kashmir",
                                                            "Jharkhand",
                                                            "Karnataka",
                                                            "Kerala",
                                                            "Ladakh",
                                                            "Lakshadweep",
                                                            "Madhya Pradesh",
                                                            "Maharashtra",
                                                            "Manipur",
                                                            "Meghalaya",
                                                            "Mizoram",
                                                            "Nagaland",
                                                            "Odisha",
                                                            "Puducherry",
                                                            "Punjab",
                                                            "Rajasthan",
                                                            "Sikkim",
                                                            "Tamil Nadu",
                                                            "Telangana",
                                                            "Tripura",
                                                            "Uttar Pradesh",
                                                            "Uttarakhand",
                                                            "West Bengal"
                                                          ],
                                                          "Indonesia": [
                                                            "Aceh",
                                                            "Bali",
                                                            "Bangka Belitung Islands",
                                                            "Banten",
                                                            "Bengkulu",
                                                            "Central Java",
                                                            "Central Kalimantan",
                                                            "Central Sulawesi",
                                                            "East Java",
                                                            "East Kalimantan",
                                                            "East Nusa Tenggara",
                                                            "Gorontalo",
                                                            "Jakarta",
                                                            "Jambi",
                                                            "Lampung",
                                                            "Maluku",
                                                            "North Kalimantan",
                                                            "North Maluku",
                                                            "North Sulawesi",
                                                            "North Sumatra",
                                                            "Papua",
                                                            "Riau",
                                                            "Riau Islands",
                                                            "Southeast Sulawesi",
                                                            "South Kalimantan",
                                                            "South Sulawesi",
                                                            "South Sumatra",
                                                            "West Java",
                                                            "West Kalimantan",
                                                            "West Nusa Tenggara",
                                                            "West Papua",
                                                            "West Sulawesi",
                                                            "West Sumatra",
                                                            "Yogyakarta"
                                                          ],
                                                          "Iraq": [
                                                            "Al Anbar",
                                                            "Babil",
                                                            "Baghdad",
                                                            "Basra",
                                                            "Dhi Qar",
                                                            "Diyala",
                                                            "Dohuk",
                                                            "Erbil",
                                                            "Karbala",
                                                            "Kirkuk",
                                                            "Maysan",
                                                            "Muthanna",
                                                            "Najaf",
                                                            "Nineveh",
                                                            "Saladin",
                                                            "Sulaymaniyah",
                                                            "Wasit"
                                                          ],
                                                          "Israel": [
                                                            "Central District",
                                                            "Haifa District",
                                                            "Jerusalem District",
                                                            "Northern District",
                                                            "Southern District",
                                                            "Tel Aviv District"
                                                          ],
                                                          "Italy": [
                                                            "Abruzzo",
                                                            "Aosta Valley",
                                                            "Apulia",
                                                            "Basilicata",
                                                            "Calabria",
                                                            "Campania",
                                                            "Emilia-Romagna",
                                                            "Friuli-Venezia Giulia",
                                                            "Lazio",
                                                            "Liguria",
                                                            "Lombardy",
                                                            "Marche",
                                                            "Molise",
                                                            "Piedmont",
                                                            "Sardinia",
                                                            "Sicily",
                                                            "Trentino-Alto Adige",
                                                            "Tuscany",
                                                            "Umbria",
                                                            "Veneto"
                                                          ],
                                                          "Japan": [
                                                            "Aichi",
                                                            "Akita",
                                                            "Aomori",
                                                            "Chiba",
                                                            "Ehime",
                                                            "Fukui",
                                                            "Fukuoka",
                                                            "Fukushima",
                                                            "Gifu",
                                                            "Gunma",
                                                            "Hiroshima",
                                                            "Hokkaido",
                                                            "Hyogo",
                                                            "Ibaraki",
                                                            "Ishikawa",
                                                            "Iwate",
                                                            "Kagawa",
                                                            "Kagoshima",
                                                            "Kanagawa",
                                                            "Kochi",
                                                            "Kumamoto",
                                                            "Kyoto",
                                                            "Mie",
                                                            "Miyagi",
                                                            "Miyazaki",
                                                            "Nagano",
                                                            "Nagasaki",
                                                            "Nara",
                                                            "Niigata",
                                                            "Oita",
                                                            "Okayama",
                                                            "Okinawa",
                                                            "Osaka",
                                                            "Saga",
                                                            "Saitama",
                                                            "Shiga",
                                                            "Shimane",
                                                            "Shizuoka",
                                                            "Tochigi",
                                                            "Tokushima",
                                                            "Tokyo",
                                                            "Tottori",
                                                            "Toyama",
                                                            "Wakayama",
                                                            "Yamagata",
                                                            "Yamaguchi",
                                                            "Yamanashi"
                                                          ],
                                                          "Jordan": [
                                                            "Ajloun",
                                                            "Amman",
                                                            "Aqaba",
                                                            "Balqa",
                                                            "Irbid",
                                                            "Jerash",
                                                            "Karak",
                                                            "Ma'an",
                                                            "Madaba",
                                                            "Mafraq",
                                                            "Tafilah",
                                                            "Zarqa"
                                                          ],
                                                          "Kuwait": [
                                                            "Al Ahmadi",
                                                            "Al Farwaniyah",
                                                            "Al Jahra",
                                                            "Capital Governorate",
                                                            "Hawalli",
                                                            "Mubarak Al-Kabeer"
                                                          ],
                                                          "Malaysia": [
                                                            "Johor",
                                                            "Kedah",
                                                            "Kelantan",
                                                            "Kuala Lumpur",
                                                            "Labuan",
                                                            "Melaka",
                                                            "Negeri Sembilan",
                                                            "Pahang",
                                                            "Penang",
                                                            "Perak",
                                                            "Perlis",
                                                            "Putrajaya",
                                                            "Sabah",
                                                            "Sarawak",
                                                            "Selangor",
                                                            "Terengganu"
                                                          ],
                                                          "Mexico": [
                                                            "Aguascalientes",
                                                            "Baja California",
                                                            "Baja California Sur",
                                                            "Campeche",
                                                            "Chiapas",
                                                            "Chihuahua",
                                                            "Coahuila",
                                                            "Colima",
                                                            "Durango",
                                                            "Guanajuato",
                                                            "Guerrero",
                                                            "Hidalgo",
                                                            "Jalisco",
                                                            "México",
                                                            "Michoacán",
                                                            "Morelos",
                                                            "Nayarit",
                                                            "Nuevo León",
                                                            "Oaxaca",
                                                            "Puebla",
                                                            "Querétaro",
                                                            "Quintana Roo",
                                                            "San Luis Potosí",
                                                            "Sinaloa",
                                                            "Sonora",
                                                            "Tabasco",
                                                            "Tamaulipas",
                                                            "Tlaxcala",
                                                            "Veracruz",
                                                            "Yucatán",
                                                            "Zacatecas"
                                                          ],
                                                          "Nepal": [
                                                            "Bagmati Province",
                                                            "Gandaki Province",
                                                            "Karnali Province",
                                                            "Kosi Province",
                                                            "Lumbini Province",
                                                            "Province No. 1",
                                                            "Province No. 2",
                                                            "Sudurpashchim Province"
                                                          ],
                                                          "Netherlands": [
                                                            "Drenthe",
                                                            "Flevoland",
                                                            "Friesland",
                                                            "Gelderland",
                                                            "Groningen",
                                                            "Limburg",
                                                            "North Brabant",
                                                            "North Holland",
                                                            "Overijssel",
                                                            "South Holland",
                                                            "Utrecht",
                                                            "Zeeland"
                                                          ],
                                                          "Norway": [
                                                            "Akershus",
                                                            "Aust-Agder",
                                                            "Buskerud",
                                                            "Finnmark",
                                                            "Hedmark",
                                                            "Hordaland",
                                                            "Møre og Romsdal",
                                                            "Nordland",
                                                            "Oppland",
                                                            "Oslo",
                                                            "Østfold",
                                                            "Rogaland",
                                                            "Sogn og Fjordane",
                                                            "Sør-Trøndelag",
                                                            "Telemark",
                                                            "Troms",
                                                            "Trøndelag",
                                                            "Vest-Agder",
                                                            "Vestfold"
                                                          ],
                                                          "Pakistan": [
                                                            "Azad Kashmir",
                                                            "Balochistan",
                                                            "Gilgit-Baltistan",
                                                            "Islamabad Capital Territory",
                                                            "Khyber Pakhtunkhwa",
                                                            "Punjab",
                                                            "Sindh"
                                                          ],
                                                          "Philippines": [
                                                            "Abra",
                                                            "Agusan del Norte",
                                                            "Agusan del Sur",
                                                            "Aklan",
                                                            "Albay",
                                                            "Antique",
                                                            "Apayao",
                                                            "Aurora",
                                                            "Basilan",
                                                            "Bataan",
                                                            "Batanes",
                                                            "Batangas",
                                                            "Benguet",
                                                            "Biliran",
                                                            "Bohol",
                                                            "Bukidnon",
                                                            "Bulacan",
                                                            "Cagayan",
                                                            "Camarines Norte",
                                                            "Camarines Sur",
                                                            "Camiguin",
                                                            "Capiz",
                                                            "Catanduanes",
                                                            "Cavite",
                                                            "Cebu",
                                                            "Compostela Valley",
                                                            "Cotabato",
                                                            "Davao del Norte",
                                                            "Davao del Sur",
                                                            "Davao Occidental",
                                                            "Davao Oriental",
                                                            "Dinagat Islands",
                                                            "Eastern Samar",
                                                            "Guimaras",
                                                            "Ifugao",
                                                            "Ilocos Norte",
                                                            "Ilocos Sur",
                                                            "Iloilo",
                                                            "Isabela",
                                                            "Kalinga",
                                                            "La Union",
                                                            "Laguna",
                                                            "Lanao del Norte",
                                                            "Lanao del Sur",
                                                            "Leyte",
                                                            "Maguindanao",
                                                            "Marinduque",
                                                            "Masbate",
                                                            "Metro Manila",
                                                            "Misamis Occidental",
                                                            "Misamis Oriental",
                                                            "Mountain Province",
                                                            "Negros Occidental",
                                                            "Negros Oriental",
                                                            "Northern Samar",
                                                            "Nueva Ecija",
                                                            "Nueva Vizcaya",
                                                            "Occidental Mindoro",
                                                            "Oriental Mindoro",
                                                            "Palawan",
                                                            "Pampanga",
                                                            "Pangasinan",
                                                            "Quezon",
                                                            "Quirino",
                                                            "Rizal",
                                                            "Romblon",
                                                            "Samar",
                                                            "Sarangani",
                                                            "Siquijor",
                                                            "Sorsogon",
                                                            "South Cotabato",
                                                            "Southern Leyte",
                                                            "Sultan Kudarat",
                                                            "Sulu",
                                                            "Surigao del Norte",
                                                            "Surigao del Sur",
                                                            "Tarlac",
                                                            "Tawi-Tawi",
                                                            "Zambales",
                                                            "Zamboanga del Norte",
                                                            "Zamboanga del Sur",
                                                            "Zamboanga Sibugay"
                                                          ],
                                                          "Russia": [
                                                            "Altai Krai",
                                                            "Altai Republic",
                                                            "Amur Oblast",
                                                            "Arkhangelsk Oblast",
                                                            "Astrakhan Oblast",
                                                            "Belgorod Oblast",
                                                            "Bryansk Oblast",
                                                            "Chelyabinsk Oblast",
                                                            "Chukotka Autonomous Okrug",
                                                            "Chuvash Republic",
                                                            "Irkutsk Oblast",
                                                            "Ivanovo Oblast",
                                                            "Jewish Autonomous Oblast",
                                                            "Kabardino-Balkar Republic",
                                                            "Kaliningrad Oblast",
                                                            "Kalmykia Republic",
                                                            "Kaluga Oblast",
                                                            "Kamchatka Krai",
                                                            "Karachay-Cherkess Republic",
                                                            "Karelia Republic",
                                                            "Kemerovo Oblast",
                                                            "Khabarovsk Krai",
                                                            "Khakassia Republic",
                                                            "Khanty-Mansi Autonomous Okrug",
                                                            "Kirov Oblast",
                                                            "Komi Republic",
                                                            "Kostroma Oblast",
                                                            "Krasnodar Krai",
                                                            "Krasnoyarsk Krai",
                                                            "Kurgan Oblast",
                                                            "Kursk Oblast",
                                                            "Leningrad Oblast",
                                                            "Lipetsk Oblast",
                                                            "Magadan Oblast",
                                                            "Mari El Republic",
                                                            "Mordovia Republic",
                                                            "Moscow",
                                                            "Moscow Oblast",
                                                            "Murmansk Oblast",
                                                            "Nenets Autonomous Okrug",
                                                            "Nizhny Novgorod Oblast",
                                                            "North Ossetia-Alania Republic",
                                                            "Novgorod Oblast",
                                                            "Novosibirsk Oblast",
                                                            "Omsk Oblast",
                                                            "Orenburg Oblast",
                                                            "Oryol Oblast",
                                                            "Penza Oblast",
                                                            "Perm Krai",
                                                            "Primorsky Krai",
                                                            "Pskov Oblast",
                                                            "Rostov Oblast",
                                                            "Ryazan Oblast",
                                                            "Sakha (Yakutia) Republic",
                                                            "Sakhalin Oblast",
                                                            "Samara Oblast",
                                                            "Saratov Oblast",
                                                            "Smolensk Oblast",
                                                            "Stavropol Krai",
                                                            "Sverdlovsk Oblast",
                                                            "Tambov Oblast",
                                                            "Tatarstan Republic",
                                                            "Tomsk Oblast",
                                                            "Tula Oblast",
                                                            "Tuva Republic",
                                                            "Tver Oblast",
                                                            "Tyumen Oblast",
                                                            "Tyva Republic",
                                                            "Udmurt Republic",
                                                            "Ulyanovsk Oblast",
                                                            "Vladimir Oblast",
                                                            "Volgograd Oblast",
                                                            "Vologda Oblast",
                                                            "Voronezh Oblast",
                                                            "Yamalo-Nenets Autonomous Okrug",
                                                            "Yaroslavl Oblast",
                                                            "Zabaykalsky Krai"
                                                          ],
                                                          "Saudi Arabia": [
                                                            "Al Bahah",
                                                            "Al Jawf",
                                                            "Al Madinah",
                                                            "Asir",
                                                            "Eastern Province",
                                                            "Ha'il",
                                                            "Jizan",
                                                            "Makkah",
                                                            "Najran",
                                                            "Northern Borders",
                                                            "Riyadh",
                                                            "Tabuk"
                                                          ],
                                                          "Swaziland": [
                                                            "Hhohho",
                                                            "Lubombo",
                                                            "Manzini",
                                                            "Shiselweni"
                                                          ],
                                                          "Turkey": [
                                                            "Adana",
                                                            "Adıyaman",
                                                            "Afyonkarahisar",
                                                            "Ağrı",
                                                            "Aksaray",
                                                            "Amasya",
                                                            "Ankara",
                                                            "Antalya",
                                                            "Ardahan",
                                                            "Artvin",
                                                            "Aydın",
                                                            "Balıkesir",
                                                            "Bartın",
                                                            "Batman",
                                                            "Bayburt",
                                                            "Bilecik",
                                                            "Bingöl",
                                                            "Bitlis",
                                                            "Bolu",
                                                            "Burdur",
                                                            "Bursa",
                                                            "Çanakkale",
                                                            "Çankırı",
                                                            "Çorum",
                                                            "Denizli",
                                                            "Diyarbakır",
                                                            "Düzce",
                                                            "Edirne",
                                                            "Elazığ",
                                                            "Erzincan",
                                                            "Erzurum",
                                                            "Eskişehir",
                                                            "Gaziantep",
                                                            "Giresun",
                                                            "Gümüşhane",
                                                            "Hakkari",
                                                            "Hatay",
                                                            "Iğdır",
                                                            "Isparta",
                                                            "Istanbul",
                                                            "İzmir",
                                                            "Kahramanmaraş",
                                                            "Karabük",
                                                            "Karaman",
                                                            "Kars",
                                                            "Kastamonu",
                                                            "Kayseri",
                                                            "Kırıkkale",
                                                            "Kırklareli",
                                                            "Kırşehir",
                                                            "Kilis",
                                                            "Kocaeli",
                                                            "Konya",
                                                            "Kütahya",
                                                            "Malatya",
                                                            "Manisa",
                                                            "Mardin",
                                                            "Mersin",
                                                            "Muğla",
                                                            "Muş",
                                                            "Nevşehir",
                                                            "Niğde",
                                                            "Ordu",
                                                            "Osmaniye",
                                                            "Rize",
                                                            "Sakarya",
                                                            "Samsun",
                                                            "Siirt",
                                                            "Sinop",
                                                            "Sivas",
                                                            "Şırnak",
                                                            "Tekirdağ",
                                                            "Tokat",
                                                            "Trabzon",
                                                            "Tunceli",
                                                            "Uşak",
                                                            "Van",
                                                            "Yalova",
                                                            "Yozgat",
                                                            "Zonguldak"
                                                          ],
                                                          "United Kingdom": [
                                                            "England",
                                                            "Northern Ireland",
                                                            "Scotland",
                                                            "Wales"
                                                          ]

                                                        
                                                    };
                                                    
                                                    function populateStates() {
                                                        var countrySelect = document.getElementById("country");
                                                        var stateSelect = document.getElementById("state");
                                                    
                                                        // Clear existing options
                                                        stateSelect.innerHTML = "";
                                                    
                                                        // Get selected country
                                                        var selectedCountry = countrySelect.options[countrySelect.selectedIndex].value;
                                                    
                                                        // Populate states based on selected country
                                                        if (selectedCountry in countryStates) {
                                                            var states = countryStates[selectedCountry];
                                                            for (var i = 0; i < states.length; i++) {
                                                                var option = document.createElement("option");
                                                                option.text = states[i];
                                                                option.value = states[i];
                                                                stateSelect.add(option);
                                                            }
                                                        } else {
                                                            // If the selected country doesn't have states, show a default message
                                                            var option = document.createElement("option");
                                                            option.text = "No states available";
                                                            stateSelect.add(option);
                                                        }
                                                    }
                                                </script>
                                                <div class="col-lg-6 col-sm-12">
                                                    <label for="password" class="form-label" style="text-align:left;font-size:13px;">Password</label>
                                                    <input type="password" name="password" id="password"  placeholder="Password" />
                                                </div>
                                                <div class="col-lg-6 col-sm-12">
                                                    <label for="reenterpassword" class="form-label" style="text-align:left;font-size:13px;">Re-enter password</label>
                                                    <input type="password" name="password" id="reenterpassword"  placeholder="Re-enter password" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="fieldset-footer">
                                            <span>Step 6 of 6</span>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
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
    $(document).ready(function() {
        // Delegate click event handling to a parent element (e.g., document)
        $(document).on('click', 'a[href="#finish"]', function(e) {
            e.preventDefault(); // Prevent default link behavior
            window.location.href = '/login'; // Redirect to the login page
            // $('#signup-form').submit(); // Submit the form
        });
    });
    </script>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        var radioButtons = document.querySelectorAll('input[type="checkbox"]');
        radioButtons.forEach(function(radio) {
            radio.addEventListener('click', function() {
                // If this radio button is checked, uncheck the others
                if (this.checked) {
                    radioButtons.forEach(function(otherRadio) {
                        if (otherRadio !== radio) {
                            otherRadio.checked = false;
                        }
                    });
                }
            });
        });
    });
    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
    $(document).ready(function() {
        // Handler for checkbox click event
        $("#defaultCheck1, #defaultCheck2, #defaultCheck3").on('click', function() {
            // Check if the checkbox is checked
            if ($(this).is(':checked')) {
                // Get the value of the name attribute of the checkbox
                var checkboxName = $(this).attr('name');
                // Set the value of the element with id 'page_type' to the checkbox name
                document.getElementById('page_type').value = checkboxName;
            } else {
                // Checkbox is unchecked
                // Perform actions for when checkbox is unchecked if needed
            }
        });
    });
    </script>







    <!-- JS -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="assets/vendor/jquery-validation/dist/additional-methods.min.js"></script>
    <script src="assets/vendor/jquery-steps/jquery.steps.min.js"></script>
    <script src="assets/vendor/minimalist-picker/dobpicker.js"></script>
    <script src="assets/vendor/jquery.pwstrength/jquery.pwstrength.js"></script>
    <script src="assets/js/main.js"></script>



    <style>
    /* Custom CSS for disabled select button */
    .select-plan-btn.disabled {
        background-color: #ccc;
        /* Grey background */
        color: #666;
        /* Dark grey text */
        cursor: not-allowed;
        /* Cursor style */
        opacity: 0.7;
        /* Reduced opacity */
    }
    </style>

<script>
    // Wrap your code in a DOMContentLoaded event listener
    document.addEventListener("DOMContentLoaded", function() {
        // Get all buttons with class select-plan-btn
        const selectButtons = document.querySelectorAll('.select-plan-btn');

        // Attach click event listener to each button
        selectButtons.forEach(button => {
            button.addEventListener('click', function() {
                // Retrieve the plan ID and price from the data attributes
                const planId = button.getAttribute('data-plan-id');
                const price = button.getAttribute('data-price');
                
                // Now you can do whatever you want with the planId and price
                console.log('Selected Plan ID:', planId);
                console.log('Price:', price);

                // Set the value of the hidden input fields
                document.getElementById('to_buy_plan_id').value = planId;
                document.getElementById('total').value = price;

                // Debug log to check if the values are being set correctly
                console.log('Hidden Input Value (Plan ID):', document.getElementById('to_buy_plan_id').value);
                console.log('Hidden Input Value (Price):', document.getElementById('total').value);
                console.log(price);

                // Disable the button after clicking
                button.classList.add('disabled');
                button.setAttribute('disabled', true);
            });
        });
    });
</script>



<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Get the input fields for first name, middle name, and memorial address
        const firstNameInput = document.getElementById('firstname');
        const middleNameInput = document.getElementById('middlename');
        const memorialAddressInput = document.querySelector('.textlinkhrefinput');

        // Add event listeners to first name and middle name inputs
        [firstNameInput, middleNameInput].forEach(input => {
            input.addEventListener('input', generateWebAddress);
        });

        // Function to generate web address based on first name and middle name
        function generateWebAddress() {
            const firstName = firstNameInput.value.trim().toLowerCase();
            const middleName = middleNameInput.value.trim().toLowerCase();
            const webAddress = `https://${firstName}${middleName ? '-' + middleName : ''}.memorial.com`;
           
            // Update the value of the memorial address input field
            memorialAddressInput.value = webAddress;
        }
    });
</script>




</body>

</html><?php /**PATH G:\laragon\www\memorial_website\project\memorial\resources\views/Frontend/creat_a_page.blade.php ENDPATH**/ ?>
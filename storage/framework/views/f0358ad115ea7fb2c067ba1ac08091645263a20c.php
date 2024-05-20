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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
    
    <style>
        span#editIcon {
            color: #BE9438;
            padding-right: 20px;
        }
        span#editIconn {
            color: #BE9438;
            padding-right: 20px;
        }
        body {
            <?php if(empty($ganeral_setting)): ?>
                background-image: url('<?php echo e(asset('assets/background.png')); ?>');
            <?php else: ?>
                background-image: url('<?php echo e(asset("body_images/$ganeral_setting->body_image")); ?>');
            <?php endif; ?>
            /* background-position: center; */
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
            .swiper-button-next.relationshipsliderbuttonnext{
                right:-2px;
            }
            .swiper-button-prev.relationshipsliderbuttonprev{
                left:-2px;
            }
            select.form-control.mr-sm-2.searchinputnav.mb-2 {
                border-left: 0px;
                border-top: 0px;
                border-right: 0px;
                border-radius: 0px;
            }
            select.form-control.mr-sm-2.searchinputnav.mb-2:focus {
                color: #495057;
                background-color: #fff;
                border-color: #80bdff00;
                outline: 0;
                box-shadow: 0 0 0 .2rem rgb(0 123 255 / 0%);
            }
            h4.tributemother {
                margin-top: -60px;
                font-size: 22px;
            }
            .table td, .table th{
                padding: 10px;
            }
            .swiper-button-prev.relativeprev {
                top: 105px;
            }
            .swiper-button-next.relativenext{
                top: 105px;
            }
            .dropdown-item.active, .dropdown-item:active{
                background-color: #be9438!important;
            }
            .btn:focus{
                box-shadow: 0 0 0 .2rem rgb(0 123 255 / 0%)!important;
            }
            .form-control:focus {
                box-shadow: 0 0 0 .2rem rgb(0 123 255 / 0%)!important;
            }
        /* @media  screen and (max-width: 768px) {
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
            .heightscoailset {
                width: 40px !important;
                padding: 10px !important;
                height: 40px !important;
            }
            .heightscoailseticon{
                font-size:20px!important;
            }
            h4.tributemother {
                margin-top: 0px!important;
            }
            .table td, .table th{
                padding: 10px;
            }
        } */
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
                width: 100%;
                margin-left: 8px;
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
                height: 30px;
                border-radius: 0px;
                margin-top: 0px;
                padding-top:2px;
                margin-left:-6px;
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
            .heightscoailseticon{
                font-size:20px!important;
            }
            h4.tributemother {
                margin-top: 0px!important;
            }
            .table td, .table th{
                padding: 10px;
            }
            .relationshipdiccv{
                border-bottom:0px!important;
            }
            .qandquestion {
                margin-top: 90px;
            }
            .generalknowlagedivbottom{
                border-bottom:0px!important;
            }
            .funeralmargin {
                margin-top: 20px;
            }
            .dummyvideooo{
               height:200px!important;
            }
            .slider-item{
                margin-right:0px!important;
                max-width: 100%!important;
            }
            .qrimageheightset{
                width:98%!important;
            }
            .lastnotifybox{
                border:0px!important;
            }
            .storiestitleborder{
                border:0px!important;
            }
            .relationshipdiccv{
                border-top:0px!important;
            }
            .widthsetoverview{
                width:98%;
            }
            p.addfullresposnive {
                font-size: 13px;
            }
            .col-lg-12.col-sm-12.mt-3.newclasspaddingoff.funeralmargin {
               width: 96%;
               margin-left: 8px;
            }
            .footerlast {
                width: 96%; 
                margin-left: 8px;
            }
            .doanationdiv{
                width:98%
            }
            .mainecontaienfluid{
                margin-left: 12px!important;
            }
            .transitionlbordernone{
                border:0px!important;
            }
            .quotestextp{
                font-size:13px;
            }
            .carouscaption{
                top: 5px;
            }
            button{
                 color:#000!important;
            }
            #videoPlayer{
                height:200px!important;
            }
            h3{
                font-family: 'Josefin Sans Bold'!important;
            }
            h2{
                font-family: 'Josefin Sans Bold'!important;
            }
            h4{
                font-family: 'Josefin Sans Bold'!important;
            }
            h1{
                font-family: 'Josefin Sans Bold'!important;
            }
            h5{
                font-family: 'Josefin Sans Bold'!important;
            }
            span{
                font-family: 'Josefin Sans Light'!important;
            }
            p{
                font-family: 'Josefin Sans Light'!important;
            }
            .imagemainheightset{
                height:250px!important;
            }
            .noticestextsetiin{
                padding-right:5px!important;
            }
            .mesagetextcenter{
                text-align:center!important;
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
                height: 30px;
                border-radius: 0px;
                margin-top: 0px;
                padding-top:2px;
                margin-left:-6px;
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
            .heightscoailseticon{
                font-size:20px!important;
            }
            h4.tributemother {
                margin-top: 0px!important;
            }
            .table td, .table th{
                padding: 10px;
            }
            .mesagetextcenter{
                text-align:center!important;
            }
        }
    </style>
</head>

<body>
    <span id="editIconn" style="position: absolute; top: 10px; right: 10px; cursor: pointer;">
        <i class="fa fa-edit" data-toggle="modal" data-target="#bodymodal"></i>
    </span>
    <div class="modal fade" id="bodymodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add Body</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <form action="<?php echo e(route('ganeral_setting')); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="modal-body">
                    <?php echo csrf_field(); ?>
                    <div class="row">
                        <div class="col-lg-12 col-sm-12">
                            <div class="form-group">
                                <label for="title" class="float-left">Add Background Image</label>
                                <input class="form-control" type="file" id="background_image" name="background_image" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    
                    <button type="submit" class="btn" style="background-color: #BE9438;width: 30%;color:#fff;font-family: 'Josefin Sans Bold';">Save</button>
                </div>
            </form>
        </div>
        </div>
    </div>
    <div class="container-fluid mainecontaienfluid">
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
                                            <a class="nav-item nav-link ml-lg-4" href="/" style="color:white;font-weight: bold;font-family: 'Josefin Sans Light';">HOME</a>
                                            <a class="nav-item nav-link ml-lg-3" href="#about" style="color:white;font-weight: bold;font-family: 'Josefin Sans Light';">ABOUT</a>
                                            <a class="nav-item nav-link ml-lg-3" href="#gallery" style="color:white;font-weight: bold;font-family: 'Josefin Sans Light';">GALLERY</a>
                                            <a class="nav-item nav-link ml-lg-2" href="#guest" style="color:white;font-weight: bold;font-family: 'Josefin Sans Light';">GUEST</a>
                                            <a class="nav-item nav-link ml-lg-2" href="#stories" style="color:white;font-weight: bold;font-family: 'Josefin Sans Light';">STORIES</a>
                                            <a class="nav-item nav-link ml-lg-2" href="#transition" style="color:white;font-weight: bold;font-family: 'Josefin Sans Light';">TRANSITION</a>
                                            <a class="nav-item nav-link ml-lg-2" href="#home" style="color:white;font-weight: bold;font-family: 'Josefin Sans Light';">MEMORIAL</a>
                                            <a class="nav-item nav-link ml-lg-2" href="#tributes" style="color:white;font-weight: bold;font-family: 'Josefin Sans Light';">TRIBUTES</a>
                                            <a class="nav-item nav-link ml-lg-2" href="#contact" style="color:white;font-weight: bold;font-family: 'Josefin Sans Light';">CONTACT</a>
                                            <div class="dropdown show">
                                                <a class="nav-item nav-link ml-lg-2" style="color:white;font-weight: bold;font-family: 'Josefin Sans Light';" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user" style="font-size:25px;color:white;"></i></a>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                    <a class="dropdown-item" href="<?php echo e(route('profile_honree')); ?>">Profile</a>
                                                    <a class="dropdown-item" href="<?php echo e(route('hnotifications')); ?>">Notifications 
                                                        <?php
                                                            $counts = \App\Models\RequestAccess::where('seen','=',0)->count();
                                                        if($counts > 1){
                                                        ?>
                                                        <span class="badge" style="color:white;background-color:#BE9438;">
                                                            <?php echo e($counts); ?>

                                                        </span>
                                                        <?php
                                                        }
                                                        ?>
                                                    </a>
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
                                            <a class="nav-item nav-link ml-lg-1" href="/" style="color:white;font-weight: bold;font-family: 'Josefin Sans Light';">HOME</a>
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
                                    <a class="navbar-brand" href="#" style="font-family: 'Josefin Sans Bold';">A Life Worth Remembering</a>
                                </nav>
                            </div>
                            <div class="col-lg-12 col-sm-12 newclasspaddingoff">
                                <div id="imageContainer">
                                    <?php if(!empty( $banner_image_path)): ?>
                                    <img src="<?php echo e(asset($banner_image_path)); ?>" style="width:100%; height:400px; border: 2px solid #BE9438 !important;" class="imagemainheightset">
                                    <?php else: ?>
                                    <img src="<?php echo e(asset('assets/pageonebanner.png')); ?>" style="width:100%; height:400px; border: 2px solid #BE9438 !important;" class="imagemainheightset">

                                    <?php endif; ?>


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

                                                // Send the image data to the server using AJAX
                                                var formData = new FormData();
                                                formData.append('image', file);

                                                var xhr = new XMLHttpRequest();
                                                xhr.open('POST', '<?php echo e(route("banner_image")); ?>', true);
                                                xhr.setRequestHeader('X-CSRF-TOKEN', '<?php echo e(csrf_token()); ?>');
                                                xhr.onload = function() {
                                                    if (xhr.status === 200) {
                                                        console.log('Image uploaded successfully!');
                                                    } else {
                                                        console.error('Error uploading image:', xhr.responseText);
                                                    }
                                                };
                                                xhr.send(formData);
                                            };
                                            reader.readAsDataURL(file);
                                        }
                                    });
                                });
                            </script>



                            <div class="col-lg-12 col-sm-12 newclasspaddingoff" id="about">
                                <h3 class="pagemainheading mt-3" style="color:#A423EB;">CELEBRATING THE LIFE OF</h3>
                                <h3 class="mt-2 text-center brennonheading" id="breannon" onclick="breannon()">
                                    <?php if(!empty($title_page_name)): ?>
                                    <?php echo e($title_page_name); ?>

                                    <?php else: ?>
                                    <b>Breannon Kimberley Schuback</b>
                                    <?php endif; ?>
                                </h3>

                                <script>
                                    document.addEventListener("DOMContentLoaded", function() {
                                        var paragraph = document.getElementById('breannon');

                                        paragraph.addEventListener('blur', function() {
                                            var editedData = paragraph.textContent.trim(); // Get the edited content
                                            // Make an Ajax request to send the edited data to Laravel controller
                                            fetch('/bannerimage', {
                                                    method: 'POST',

                                                    headers: {
                                                        'Content-Type': 'application/json',
                                                        'X-CSRF-TOKEN': '<?php echo e(csrf_token()); ?>' // Include CSRF token if applicable
                                                    },
                                                    body: JSON.stringify({
                                                        memorail_title: editedData
                                                    })
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

                                    function breannon() {
                                        var paragraph = document.getElementById('breannon');
                                        paragraph.contentEditable = true;
                                        paragraph.focus();
                                    }
                                </script>
                                <h4 class="text-center">
                                    <span id="editableDateOfBirth" contenteditable style="color:#A423EB;"><?php echo e($date_of_birth); ?></span>
                                    <span class="mr-lg-1">/</span><span id="editableDateOfDeath" contenteditable style="color:#A423EB;"><?php echo e($date_of_death); ?></span>
                                </h4>
                                <script>
                                    document.addEventListener("DOMContentLoaded", function() {
                                        // Function to handle updating the dates
                                        function updateDates(dateOfBirth, dateOfDeath) {
                                            // Make an AJAX request to update the database
                                            fetch('/update-dates', {
                                                method: 'POST',
                                                headers: {
                                                    'Content-Type': 'application/json',
                                                    'X-CSRF-TOKEN': '<?php echo e(csrf_token()); ?>' // Include CSRF token if applicable
                                                },
                                                body: JSON.stringify({
                                                    dateOfBirth: dateOfBirth,
                                                    dateOfDeath: dateOfDeath
                                                })
                                            })
                                            .then(response => {
                                                if (response.ok) {
                                                    console.log('Dates updated successfully!');
                                                } else {
                                                    console.error('Failed to update dates');
                                                }
                                            })
                                            .catch(error => {
                                                console.error('Error:', error);
                                            });
                                        }
                                
                                        // Add event listener to the Date of Birth span
                                        var editableDateOfBirth = document.getElementById('editableDateOfBirth');
                                        editableDateOfBirth.addEventListener('blur', function() {
                                            var newDateOfBirth = editableDateOfBirth.textContent.trim();
                                            var dateOfDeath = document.getElementById('editableDateOfDeath').textContent.trim();
                                            updateDates(newDateOfBirth, dateOfDeath);
                                        });
                                
                                        // Add event listener to the Date of Death span
                                        var editableDateOfDeath = document.getElementById('editableDateOfDeath');
                                        editableDateOfDeath.addEventListener('blur', function() {
                                            var dateOfBirth = document.getElementById('editableDateOfBirth').textContent.trim();
                                            var newDateOfDeath = editableDateOfDeath.textContent.trim();
                                            updateDates(dateOfBirth, newDateOfDeath);
                                        });
                                    });
                                </script>
                           
                            </div>
                            <div class="col-lg-12 col-sm-12 mt-3 newclasspaddingoff">
                                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <?php $__currentLoopData = $quotes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $quote): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="carousel-item <?php if($loop->first): ?> active <?php endif; ?>">
                                            <img class="d-block w-100 imagemainheightset" src="<?php echo e(asset('assets/buttonbackground2.PNG')); ?>" alt="Slide <?php echo e($loop->iteration); ?>" style="height: 200px;">
                                            <div class="carousel-caption d-md-block carouscaption">
                                                <h5 style="color:#000;" id="editableHeading<?php echo e($quote->id); ?>" data-quote-id="<?php echo e($quote->id); ?>"><?php echo e($quote->heading); ?></h5>
                                                <p class="quotestextp" style="font-family: 'Josefin Sans Light';color:#000;" id="editablePara<?php echo e($quote->id); ?>" data-quote-id="<?php echo e($quote->id); ?>"><?php echo e($quote->description); ?></p>
                                            </div>
                                        </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                                    <span style="position: absolute; top: 10px; right: 10px; cursor: pointer;">
                                        <i class="fa fa-upload" style="color: #fff;" data-toggle="modal" data-target="#quotesmodal"></i>
                                    </span>
                                </div>
                                <!-- Modal -->
                                <div class="modal fade" id="quotesmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Add Quote</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>
                                        <form action="<?php echo e(route('add_quote')); ?>" method="POST">
                                            <div class="modal-body">
                                            
                                                    <?php echo csrf_field(); ?>
                                                    <div class="row">
                                                        <div class="col-lg-12 col-sm-12">
                                                            <div class="form-group">
                                                                <label for="title" class="float-left">Add Title</label>
                                                                <input class="form-control" type="text" id="title" name="heading" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="brief" class="float-left">Add Description</label>
                                                                <textarea class="form-control" id="description" name="description" required></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                
                                            </div>
                                            <div class="modal-footer">
                                                
                                                <button type="submit" class="btn" style="background-color: #BE9438;width: 30%;color:#fff;font-family: 'Josefin Sans Bold';">Save</button>
                                            </div>
                                        </form>
                                    </div>
                                    </div>
                                </div>
                                <script>
                                    document.addEventListener("DOMContentLoaded", function() {
                                        // Function to make element editable
                                        function makeEditable(elementId, quoteId, contentType) {
                                            var element = document.getElementById(elementId);
                                            element.contentEditable = true;
                                            element.focus();

                                            // Add event listener for blur event
                                            element.addEventListener('blur', function() {
                                                // Get the edited content
                                                var editedContent = element.textContent.trim();

                                                // Determine the content type
                                                var data = {};
                                                if (contentType === 'heading') {
                                                    data.heading = editedContent;
                                                    data.quoteid = quoteId;
                                                } else if (contentType === 'description') {
                                                    data.description = editedContent;
                                                    data.quoteid = quoteId;
                                                }


                                                // Make an Ajax request to send the edited content to the server
                                                fetch('/savequotes/' + quoteId, {
                                                        method: 'POST', // Use PUT method for updating
                                                        headers: {
                                                            'Content-Type': 'application/json',
                                                            'X-CSRF-TOKEN': '<?php echo e(csrf_token()); ?>' // Include CSRF token if applicable
                                                        },
                                                        body: JSON.stringify(data)
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
                                        }

                                        // Automatically make elements editable upon certain event
                                        document.getElementById("carouselExampleControls").addEventListener("mouseover", function(event) {
                                            var target = event.target;
                                            var quoteId = target.getAttribute('data-quote-id');
                                            if (quoteId && (target.id === "editableHeading" + quoteId || target.id === "editablePara" + quoteId)) {
                                                var contentType = target.id.startsWith('editableHeading') ? 'heading' : 'description';
                                                makeEditable(target.id, quoteId, contentType);
                                            }
                                        });
                                    });
                                </script>

                            </div>

                            <div class="col-lg-12 col-sm-12 mt-3 newclasspaddingoff">
                                <div style="position: relative;">
                                    <!-- Video player -->
                                    <?php if($audio->type=="video"): ?>  
                                    <video id="videoPlayer" width="100%" height="400" controls class="imagemainheightset">
                                        <source src="<?php echo e(asset($audio->full_path)); ?>" type="video/mp4">
                                    </video>
                                    <?php else: ?>
                                    <video id="videoPlayer" width="100%" height="400" controls class="imagemainheightset">
                                        <source src="<?php echo e(asset('assets/dummyvideo.mp4')); ?>" type="video/mp4">
                                    </video>
                                    <?php endif; ?>
                                

                                    <!-- Icon for uploading video -->
                                    <span id="uploadIcon" style="position: absolute; top: 10px; right: 10px; cursor: pointer;">
                                        <i class="fa fa-upload" style="color: #BE9438;"></i>
                                    </span>

                                    <!-- Video upload area -->
                                    <div id="videoUploadArea" style="display: none;">
                                        <input type="file" id="videoUploadInput" accept="video/*">
                                    </div>
                                </div>

                                <script>
                                    document.addEventListener("DOMContentLoaded", function() {
                                        var uploadIcon = document.getElementById('uploadIcon');
                                        var videoInput = document.getElementById('videoUploadInput');

                                        // Function to handle showing/hiding video upload area
                                        uploadIcon.addEventListener('click', function() {
                                            videoInput.click();
                                        });

                                        // Function to handle video upload
                                        videoInput.addEventListener('change', function() {
                                            var file = this.files[0];
                                            if (file) {
                                                var reader = new FileReader();
                                                reader.onload = function(e) {
                                                    var videoPlayer = document.getElementById('videoPlayer');
                                                    videoPlayer.src = URL.createObjectURL(file);
                                                    videoPlayer.load();

                                                    // Optionally, you can send the video data to the server using AJAX
                                                    var formData = new FormData();
                                                    formData.append('video', file);

                                                    var xhr = new XMLHttpRequest();
                                                    xhr.open('POST', '<?php echo e(route("videoupload")); ?>', true);
                                                    xhr.setRequestHeader('X-CSRF-TOKEN', '<?php echo e(csrf_token()); ?>');
                                                    xhr.onload = function() {
                                                        if (xhr.status === 200) {
                                                            console.log('Video uploaded successfully!');
                                                        } else {
                                                            console.error('Error uploading video:', xhr.responseText);
                                                        }
                                                    };
                                                    xhr.send(formData);
                                                };
                                                reader.readAsDataURL(file);
                                            }
                                        });
                                    });
                                </script>
                            </div>

             


                            <div class="col-lg-12 col-sm-12 mt-3 pb-5 newclasspaddingoff widthsetoverview" style="border-bottom: 2px solid #BE9438!important;">
                                <h3 class="pagemainheading mt-lg-3 topaddmarginsub" style="color:#A423EB!important;" id="overview">AN OVERVIEW</h3>

                                <?php if(!empty($over_view)): ?>


                                <p class="mt-3 mesagetextcenter" style="font-family: 'Josefin Sans Light';" id="editableParagraphoverview" onclick="makeEditable()" contenteditable="true">
                                    <?php echo e($over_view); ?>

                                </p>
                                <?php else: ?>
                                <p class="mt-3 mesagetextcenter" style="font-family: 'Josefin Sans Light';" id="editableParagraphoverview" onclick="makeEditable()" contenteditable="true">

                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam faucibus volutpat venenatis. Nunc pretium lectus ac augue tincidunt, et elementum nisi suscipit. Sed eu mollis libero. Sed faucibus risus ex, dignissim porttitor nisl malesuada non. Donec elit arcu, vehicula et justo at, accumsan finibus libero. Maecenas molestie gravida dui ac aliquet. Nunc ornare, nunc quis luctus cursus, justo eros elementum sapien, quis malesuada sapien dolor sit amet augue. Vivamus rhoncus lectus sit amet viverra gravida. Nunc id turpis in enim malesuada varius ut at arcu.</p>

                                <?php endif; ?>
                                <script>
                                    document.addEventListener("DOMContentLoaded", function() {
                                        var paragraph = document.getElementById('editableParagraphoverview');

                                        paragraph.addEventListener('blur', function() {
                                            var editedData = paragraph.textContent.trim(); // Get the edited content
                                            // Make an Ajax request to send the edited data to Laravel controller
                                            fetch('/bannerimage', {
                                                    method: 'POST',
                                                    headers: {
                                                        'Content-Type': 'application/json',
                                                        'X-CSRF-TOKEN': '<?php echo e(csrf_token()); ?>' // Include CSRF token if applicable
                                                    },
                                                    body: JSON.stringify({
                                                        over_view: editedData
                                                    })
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
                            <div class="col-lg-12 col-sm-12 mt-3 mb-5 newclasspaddingoff relationshipdiccv" style="border-bottom: 2px solid #BE9438;">
                                <h3 class="pagemainheading mt-lg-3 topaddmarginsub" style="color:#A423EB!important;" id="relations">RELATIONSHIPS</h3>
                                <div class="swiper myrelationswiper mt-3 mobileoff">
                                    <div class="swiper-wrapper">
                                        <?php $__currentLoopData = $relationships; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $relationship): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="swiper-slide" style="height: 280px;">
                                                <div class="card" style="width: 75%;background-color: #fff;border:1px solid #BE9438!important;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                                                    <div class="card-header text-center" style="background-color: #fff;border:0px;">
                                                        <h5 style="font-size:16px;" id="heading" class="editable" data-relationship-id="<?php echo e($relationship->id); ?>"><?php echo e($relationship->heading); ?></h5>
                                                    </div>
                                                    <div class="card-body">
                                                        <p style="font-size: 13px;text-align: justify;font-family: 'Josefin Sans Light';">
                                                            <span class="editable" data-relationship-id="<?php echo e($relationship->id); ?>" id="sub_heading_first" style="color: #BFAFF8!important;"><a href="#" style="color: #BFAFF8!important;"><?php echo e($relationship->sub_heading_first); ?></a></span>
                                                            <br>
                                                            <span class="editable" data-relationship-id="<?php echo e($relationship->id); ?>" id="sub_heading_second"><?php echo e($relationship->sub_heading_second); ?></span>
                                                            <br>
                                                            <span class="editable" data-relationship-id="<?php echo e($relationship->id); ?>" id="sub_heading_third"><?php echo e($relationship->sub_heading_third); ?></span>
                                                            <br>
                                                            <span class="editable" data-relationship-id="<?php echo e($relationship->id); ?>" id="sub_heading_fourth"><?php echo e($relationship->sub_heading_fourth); ?></span>
                                                            <br>
                                                            <span class="editable" data-relationship-id="<?php echo e($relationship->id); ?>" id="sub_heading_fifth"><?php echo e($relationship->sub_heading_fifth); ?></span>
                                                            <br>
                                                            <span class="editable" data-relationship-id="<?php echo e($relationship->id); ?>" style="color: #BFAFF8!important;"><a href="#" style="color: #BFAFF8!important;"><?php echo e($relationship->sub_heading_sixth); ?></a></span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                    <div class="swiper-button-next relationshipsliderbuttonnext" style="top: var(--swiper-navigation-top-offset, 40%);"></div>
                                    <div class="swiper-button-prev relationshipsliderbuttonprev" style="top: var(--swiper-navigation-top-offset, 40%);"></div>
                                </div>
                                <script>
                                    document.addEventListener("DOMContentLoaded", function() {
                                        var editableElements = document.querySelectorAll('.editable');
                                        
                                        // Function to make element editable
                                        function makeEditable(element) {
                                            element.contentEditable = true;
                                            element.focus();
                                        }
                                
                                        // Add event listeners to make elements editable upon clicking
                                        editableElements.forEach(function(element) {
                                            element.addEventListener('click', function() {
                                                makeEditable(element);
                                            });
                                
                                            element.addEventListener('blur', function() {
                                                var editedContent = element.textContent.trim();
                                                var elementId = element.id;
                                                var relationshipId = element.getAttribute('data-relationship-id');
                                
                                                // Prepare data object with key-value pairs
                                                var data = {
                                                    content: editedContent,
                                                    elementId: elementId,
                                                    relationshipId: relationshipId
                                                };
                                
                                                // Make an AJAX request to send the edited content to the server
                                                fetch('/update-relationship', {
                                                    method: 'POST',
                                                    headers: {
                                                        'Content-Type': 'application/json',
                                                        'X-CSRF-TOKEN': '<?php echo e(csrf_token()); ?>' // Include CSRF token if applicable
                                                    },
                                                    body: JSON.stringify(data)
                                                })
                                                .then(response => {
                                                    if (response.ok) {
                                                        console.log('Content updated successfully!');
                                                    } else {
                                                        console.error('Failed to update content');
                                                    }
                                                })
                                                .catch(error => {
                                                    console.error('Error:', error);
                                                });
                                            });
                                        });
                                    });
                                </script>
                                
                                
                                <div class="swiper qandanswerswiper pb-5 mobileon" style="border:1px solid #BE9438!important;display:none;">
                                    <div class="swiper-wrapper">
                                        <?php $__currentLoopData = $relationships; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $relationship): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="swiper-slide">
                                                <div class="card" style="width: 75%;background-color: #fff; border:0px;">
                                                    <div class="card-header text-center" style="background-color: #fff; border:0px;">
                                                        <p style="font-family: 'Josefin Sans Light';" id="heading" class="editable" data-relationship-id="<?php echo e($relationship->id); ?>"><?php echo e($relationship->heading); ?>

                                                        </p>
                                                        <p style="font-size: 13px;text-align: justify;font-family: 'Josefin Sans Light';">
                                                            <span class="editable" data-relationship-id="<?php echo e($relationship->id); ?>" id="sub_heading_first" style="color: #BFAFF8!important;"><a href="#" style="color: #BFAFF8!important;"><?php echo e($relationship->sub_heading_first); ?></a></span>
                                                            <br>
                                                            <span class="editable" data-relationship-id="<?php echo e($relationship->id); ?>" id="sub_heading_second"><?php echo e($relationship->sub_heading_second); ?></span>
                                                            <br>
                                                            <span class="editable" data-relationship-id="<?php echo e($relationship->id); ?>" id="sub_heading_third"><?php echo e($relationship->sub_heading_third); ?></span>
                                                            <br>
                                                            <span class="editable" data-relationship-id="<?php echo e($relationship->id); ?>" id="sub_heading_fourth"><?php echo e($relationship->sub_heading_fourth); ?></span>
                                                            <br>
                                                            <span class="editable" data-relationship-id="<?php echo e($relationship->id); ?>" id="sub_heading_fifth"><?php echo e($relationship->sub_heading_fifth); ?></span>
                                                            <br>
                                                            <span class="editable" data-relationship-id="<?php echo e($relationship->id); ?>" style="color: #BFAFF8!important;"><a href="#" style="color: #BFAFF8!important;"><?php echo e($relationship->sub_heading_sixth); ?></a></span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                    <!-- <div class="swiper-pagination"></div> -->
                                </div>

                                <span style="position: absolute; top: 10px; right: 10px; cursor: pointer;">
                                    <i class="fa fa-upload" style="color: #BE9438;" data-toggle="modal" data-target="#relationmodal"></i>
                                </span>
                                <div class="modal fade" id="relationmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Add Relationship</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>
                                        <form action="<?php echo e(route('add_relation')); ?>" method="POST">
                                            <div class="modal-body">
                                            
                                                    <?php echo csrf_field(); ?>
                                                    <div class="row">
                                                        <div class="col-lg-12 col-sm-12">
                                                            <div class="form-group">
                                                                <label for="title" class="float-left">Add Heading</label>
                                                                <input class="form-control" type="text" id="title" name="heading" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="sub_heading_first" class="float-left">Add Text</label>
                                                                <input class="form-control" type="text" id="sub_heading_first" name="sub_heading_first" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="sub_heading_second" class="float-left">Add Text</label>
                                                                <input class="form-control" type="text" id="sub_heading_second" name="sub_heading_second" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="sub_heading_third" class="float-left">Add Text</label>
                                                                <input class="form-control" type="text" id="sub_heading_third" name="sub_heading_third" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="sub_heading_fourth" class="float-left">Add Text</label>
                                                                <input class="form-control" type="text" id="sub_heading_fourth" name="sub_heading_fourth" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="sub_heading_fifth" class="float-left">Add Text</label>
                                                                <input class="form-control" type="text" id="sub_heading_fifth" name="sub_heading_fifth" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="sub_heading_sixth" class="float-left">Add Text</label>
                                                                <input class="form-control" type="text" id="sub_heading_sixth" name="sub_heading_sixth" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                
                                            </div>
                                            <div class="modal-footer">
                                                
                                                <button type="submit" class="btn" style="background-color: #BE9438;width: 30%;color:#fff;font-family: 'Josefin Sans Bold';">Save</button>
                                            </div>
                                        </form>
                                    </div>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <div class="col-lg-12 col-sm-12 borderremove newclasspaddingoff generalknowlagedivbottom" style="border-bottom: 2px solid #BE9438;">
                                <div class="row">
                                    <div  class="col-lg-8 col-sm-12 text-right mb-lg-4 newclasspaddingoff">
                                        <h3 class="anotherpagemainheading ml-4 topaddmarginsub mobileoff" style="color:#A423EB!important;margin-right: 15px;" >GENERAL KNOWLEDGE
                                        </h3>
                                        <h3 class="ml-lg-4 topaddmarginsub mobileon" style="color:#A423EB!important;margin-right: 15px;display:none;font-size:20px!important;text-align: -webkit-center;padding-top: 30px;" id="ganerall">GENERAL KNOWLEDGE
                                        </h3>
                                    </div>
                                    <div  class="col-lg-4 col-sm-12 ">
                                    </div>
                                </div>
                                <span style="position: absolute; top: 10px; right: 10px; cursor: pointer;">
                                    <i class="fa fa-upload" style="color: #BE9438;" data-toggle="modal" data-target="#generalknowledgemodal"></i>
                                </span>
                                <div class="modal fade" id="generalknowledgemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Add General Knowledge</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>
                                        <form action="<?php echo e(route('add_general_knowledge')); ?>" method="POST">
                                            <div class="modal-body">
                                                    <?php echo csrf_field(); ?>
                                                    <div class="row">
                                                        <div class="col-lg-12 col-sm-12">
                                                            <div class="form-group">
                                                                <label for="title" class="float-left">Add Title</label>
                                                                <input class="form-control" type="text" id="title" name="title" required>
                                                            </div>
                                                            
                                                            <div class="form-group">
                                                                <label for="description" class="float-left">Add Description</label>
                                                                <textarea class="form-control" type="text" id="description" name="description" required>

                                                                </textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                
                                            </div>
                                            <div class="modal-footer">
                                                
                                                <button type="submit" class="btn" style="background-color: #BE9438;width: 30%;color:#fff;font-family: 'Josefin Sans Bold';">Save</button>
                                            </div>
                                        </form>
                                    </div>
                                    </div>
                                </div>
                                <?php
                                    use Illuminate\Support\Str;
                                ?>
                                <div class="swiper ganeralswiper pb-5 mobileoff">
                                    <div class="swiper-wrapper" style="height: 400px;">
                                        <?php $__currentLoopData = $generalknowledges; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $generalknowledge): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="swiper-slide" style="height: 300px!important;">
                                                <div class="card" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);background-color: #fff;border:1px solid #BE9438;width: 100%;height: 175px;" data-toggle="modal" data-target="#<?php echo e($generalknowledge->title); ?>modal">
                                                    <div class="card-header text-center" style="background-color: #fff;border:0px;">
                                                        <h5 style="font-size:16px;"><?php echo e($generalknowledge->title); ?></h5>
                                                    </div>
                                                    <div class="card-body">
                                                        <p style="font-size: 13px;text-align: justify;font-family: 'Josefin Sans Light';">
                                                            <?php echo e(Str::limit($generalknowledge->description, 50, '...')); ?>

                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                     <!--<div class="swiper-pagination"></div> -->
                                     <div class="swiper-button-next generalnext"></div>
                                    <div class="swiper-button-prev generalprev"></div>
                                </div>
                                <div class="swiper qandanswerswiper pb-5 mobileon" style="border:1px solid #BE9438!important;display:none;">
                                    <div class="swiper-wrapper">
                                        <?php $__currentLoopData = $generalknowledges; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $generalknowledge): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="swiper-slide">
                                            <div class="card" style="background-color: #fff; border:0px;" data-toggle="modal" data-target="#<?php echo e($generalknowledge->title); ?>modal">
                                                <div class="card-header text-center" style="background-color: #fff; border:0px;">
                                                    <p style="font-family: 'Josefin Sans Light';"><?php echo e($generalknowledge->title); ?>

                                                    </p>
                                                    <p style="font-size: 13px;text-align: justify;font-family: 'Josefin Sans Light';">
                                                        <?php echo e(Str::limit($generalknowledge->description, 50, '...')); ?>

                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                    <!-- <div class="swiper-pagination"></div> -->
                                </div>
                                <?php $__currentLoopData = $generalknowledges; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $generalknowledg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="modal fade" id="<?php echo e($generalknowledg->title); ?>modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title ganeraleditable" id="exampleModalLabel" data-generalknowledge-id="<?php echo e($generalknowledg->id); ?>" data-content-type="title"><?php echo e($generalknowledg->title); ?></h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p class="ganeraleditable" data-generalknowledge-id="<?php echo e($generalknowledg->id); ?>" data-content-type="description"><?php echo e($generalknowledg->description); ?></p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <script>
                                    document.addEventListener("DOMContentLoaded", function() {
                                        var editableElements = document.querySelectorAll('.ganeraleditable');
                                    
                                        // Function to make element editable
                                        function makeEditable(element) {
                                            element.contentEditable = true;
                                            element.focus();
                                        }
                                    
                                        // Add event listeners to make elements editable upon clicking
                                        editableElements.forEach(function(element) {
                                            element.addEventListener('click', function() {
                                                makeEditable(element);
                                            });
                                    
                                            element.addEventListener('blur', function() {
                                                var editedContent = element.textContent.trim();
                                                var generalknowledgeId = element.getAttribute('data-generalknowledge-id');
                                                var contentType = element.getAttribute('data-content-type');
                                    
                                                // Prepare data object with dynamic key-value pair
                                                var data = {
                                                    generalknowledgeId: generalknowledgeId
                                                };
                                                data[contentType] = editedContent;  // Set key based on content type (title/description)
                                    
                                                // Make an AJAX request to send the edited content to the server
                                                fetch('/update-generalknowledge-content', {
                                                    method: 'POST',
                                                    headers: {
                                                        'Content-Type': 'application/json',
                                                        'X-CSRF-TOKEN': '<?php echo e(csrf_token()); ?>' // Include CSRF token if applicable
                                                    },
                                                    body: JSON.stringify(data)
                                                })
                                                .then(response => {
                                                    if (response.ok) {
                                                        console.log(contentType.charAt(0).toUpperCase() + contentType.slice(1) + ' updated successfully!');
                                                        window.location.reload();
                                                    } else {
                                                        console.error('Failed to update ' + contentType);
                                                    }
                                                })
                                                .catch(error => {
                                                    console.error('Error:', error);
                                                });
                                    
                                                element.contentEditable = false; // Make the element non-editable after blur
                                            });
                                        });
                                    });
                                </script>      
                            </div>
                            <div class="col-lg-12 col-sm-12 mt-lg-4 pb-lg-5 newclasspaddingoff qandquestion">
                                <h3 class="pagemainheading mt-lg-5 mb-lg-5 storiesanotherpagemainheading topaddmarginsub" style="color:#A423EB!important;">Q AND A’s
                                </h3>
                                <span style="position: absolute; top: 10px; right: 10px; cursor: pointer;" data-target="#questionanswersknowledgemodal">
                                    <i class="fa fa-upload" style="color: #BE9438;" data-toggle="modal" data-target="#questionanswersknowledgemodal"></i>
                                </span>
                                <div class="modal fade" id="questionanswersknowledgemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Add Question Answers</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            </div>
                                            <form action="<?php echo e(route('add_question_answers')); ?>" method="POST">
                                                <div class="modal-body">
                                                        <?php echo csrf_field(); ?>
                                                        <div class="row">
                                                            <div class="col-lg-12 col-sm-12">
                                                                <div class="form-group">
                                                                    <label for="question" class="float-left">Add Question</label>
                                                                    <input class="form-control" type="text" id="question" name="question" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="description" class="float-left">Add Answers</label>
                                                                    <textarea class="form-control" type="text" id="answers" name="answer" required>
    
                                                                    </textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    
                                                </div>
                                                <div class="modal-footer">
                                                    
                                                    <button type="submit" class="btn" style="background-color: #BE9438;width: 30%;color:#fff;font-family: 'Josefin Sans Bold';">Save</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper qandanswerswiperquestion pb-5" style="border:1px solid #BE9438!important;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                                    <div class="swiper-wrapper">
                                        <?php $__currentLoopData = $faqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $faq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="swiper-slide">
                                            <div class="card editable-card" style="background-color: #fff; border:0px;" data-faq-id="<?php echo e($faq->id); ?>">
                                                <div class="card-header text-center" style="background-color: #fff; border:0px;">
                                                    <p style="font-family: 'Josefin Sans Bold'; font-weight:bold;" class="qeditable" id="question_<?php echo e($faq->id); ?>" data-faq-id="<?php echo e($faq->id); ?>" data-content-type="question"><?php echo e($faq->question); ?></p>
                                                    <p style="font-family: 'Josefin Sans Light';" class="qeditable p-2" id="answer_<?php echo e($faq->id); ?>" data-faq-id="<?php echo e($faq->id); ?>" data-content-type="answer"><?php echo e($faq->answer); ?></p>
                                                </div>
                                            </div>
                                        </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                    <!-- <div class="swiper-pagination"></div> -->
                                </div>
                                <script>
                                    document.addEventListener("DOMContentLoaded", function() {
                                        var editableElements = document.querySelectorAll('.qeditable');

                                        // Function to make element editable
                                        function makeEditable(element) {
                                            element.contentEditable = true;
                                            element.focus();
                                        }

                                        // Add event listeners to make elements editable upon clicking
                                        editableElements.forEach(function(element) {
                                            element.addEventListener('click', function() {
                                                makeEditable(element);
                                            });

                                            element.addEventListener('blur', function() {
                                                var editedContent = element.textContent.trim();
                                                var faqId = element.getAttribute('data-faq-id');
                                                var contentType = element.getAttribute('data-content-type');

                                                // Prepare data object with dynamic key-value pair
                                                var data = {
                                                    faqId: faqId
                                                };
                                                data[contentType] = editedContent;  // Set key based on content type (question/answer)

                                                // Make an AJAX request to send the edited content to the server
                                                fetch('/update-faq-content', {
                                                    method: 'POST',
                                                    headers: {
                                                        'Content-Type': 'application/json',
                                                        'X-CSRF-TOKEN': '<?php echo e(csrf_token()); ?>' // Include CSRF token if applicable
                                                    },
                                                    body: JSON.stringify(data)
                                                })
                                                .then(response => {
                                                    if (response.ok) {
                                                        response.json().then(data => {
                                                            console.log(data.success);
                                                            // Reload the page after a successful update
                                                            window.location.reload();
                                                        });
                                                    } else {
                                                        console.error('Failed to update ' + contentType);
                                                    }
                                                })
                                                .catch(error => {
                                                    console.error('Error:', error);
                                                });
                                            });
                                        });
                                    });
                                </script>
                            </div>
                            <div class="col-lg-12 col-sm-12 text-center mt-lg-5 addcontactswipermargintopres newclasspaddingoff">
                                <p style="font-family: 'Josefin Sans Light;" class="mt-lg-5">Want to know more? Message the page administrators with your question or response</p>
                                <button class="btn btn-large contactadministration" style="background-image: url('<?php echo e(asset('assets/buttonbackground.PNG')); ?>');width: 30%;color:#000;border-radius: 20px;font-family: 'Josefin Sans Bold';" data-toggle="modal" data-target="#exampleModal">CONTACT ADMINSTRATORS</button>
                                
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
                                                <a data-fancybox="gallery" href="<?php echo e(asset('assets/dummythree.jpg')); ?>" data-caption="Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius voluptas culpa possimus reprehenderit tempore expedita sunt, nulla provident dolores! Numquam laudantium blanditiis voluptates porro asperiores temporibus earum nihil velit rerum."><img src="<?php echo e(asset('assets/dummythree.jpg')); ?>" style="width: 100%;border: 1px solid #fff!important;"></a>
                                                <div class="row">
                                                    <div class="col-lg-6 col-sm-6" style="padding-right:0px!important;padding-left:0px!important;">
                                                       <a data-fancybox="gallery" href="<?php echo e(asset('assets/dummythree.jpg')); ?>" data-caption="Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius voluptas culpa possimus reprehenderit tempore expedita sunt, nulla provident dolores! Numquam laudantium blanditiis voluptates porro asperiores temporibus earum nihil velit rerum."> <img src="<?php echo e(asset('assets/dummythree.jpg')); ?>" style="height:334px;width: 100%;border: 1px solid #fff!important;"></a>
                                                    </div>
                                                    <div class="col-lg-6 col-sm-6">
                                                        <div class="row">
                                                            <div class="col-lg-12 col-sm-12" style="padding-left:0px!important;">
                                                               <a data-fancybox="gallery" href="<?php echo e(asset('assets/dummythree.jpg')); ?>" data-caption="Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius voluptas culpa possimus reprehenderit tempore expedita sunt, nulla provident dolores! Numquam laudantium blanditiis voluptates porro asperiores temporibus earum nihil velit rerum."> <img src="<?php echo e(asset('assets/dummythree.jpg')); ?>" style="width: 100%;border: 1px solid #fff!important;"></a>
                                                            </div>
                                                            <div class="col-lg-12 col-sm-12" style="padding-left:0px!important;">
                                                               <a data-fancybox="gallery" href="<?php echo e(asset('assets/dummythree.jpg')); ?>" data-caption="Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius voluptas culpa possimus reprehenderit tempore expedita sunt, nulla provident dolores! Numquam laudantium blanditiis voluptates porro asperiores temporibus earum nihil velit rerum."> <img src="<?php echo e(asset('assets/dummythree.jpg')); ?>" style="width: 100%;border: 1px solid #fff!important;height:157px;"> </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 col-sm-12">
                                                      <a data-fancybox="gallery" href="<?php echo e(asset('assets/dummythree.jpg')); ?>" data-caption="Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius voluptas culpa possimus reprehenderit tempore expedita sunt, nulla provident dolores! Numquam laudantium blanditiis voluptates porro asperiores temporibus earum nihil velit rerum.">  <img src="<?php echo e(asset('assets/dummythree.jpg')); ?>" style="height:312px;width: 100%;border: 1px solid #fff!important;"> </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-sm-6" style="padding-left:0px!important;">
                                               <a data-fancybox="gallery" href="<?php echo e(asset('assets/dummythree.jpg')); ?>" data-caption="Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius voluptas culpa possimus reprehenderit tempore expedita sunt, nulla provident dolores! Numquam laudantium blanditiis voluptates porro asperiores temporibus earum nihil velit rerum."> <img src="<?php echo e(asset('assets/dummythree.jpg')); ?>" style="height:250px;width: 100%;border: 1px solid #fff!important;"> </a>
                                                <div class="row">
                                                    <div class="col-lg-12 col-sm-12">
                                                       <a data-fancybox="gallery" href="<?php echo e(asset('assets/dummythree.jpg')); ?>" data-caption="Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius voluptas culpa possimus reprehenderit tempore expedita sunt, nulla provident dolores! Numquam laudantium blanditiis voluptates porro asperiores temporibus earum nihil velit rerum."> <img src="<?php echo e(asset('assets/dummythree.jpg')); ?>" style="height:350px;width: 100%;border: 1px solid #fff!important;"></a>
                                                    </div>
                                                    <div class="col-lg-6 col-sm-6">
                                                        <div class="row">
                                                            <div class="col-lg-12 col-sm-12" style="padding-right:0px!important;padding-left:0px!important;">
                                                              <a data-fancybox="gallery" href="<?php echo e(asset('assets/dummythree.jpg')); ?>" data-caption="Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius voluptas culpa possimus reprehenderit tempore expedita sunt, nulla provident dolores! Numquam laudantium blanditiis voluptates porro asperiores temporibus earum nihil velit rerum.">  <img src="<?php echo e(asset('assets/dummythree.jpg')); ?>" style="margin-left: 15px;width: 95%;height:200px;border: 1px solid #fff!important;"></a>
                                                            </div>
                                                            <div class="col-lg-12 col-sm-12" style="padding-right:0px!important;padding-left:0px!important;">
                                                               <a data-fancybox="gallery" href="<?php echo e(asset('assets/dummythree.jpg')); ?>" data-caption="Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius voluptas culpa possimus reprehenderit tempore expedita sunt, nulla provident dolores! Numquam laudantium blanditiis voluptates porro asperiores temporibus earum nihil velit rerum."> <img src="<?php echo e(asset('assets/dummythree.jpg')); ?>" style="margin-left: 15px;width: 95%;height:200px;border: 1px solid #fff!important;"></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-sm-6" style="padding-right:0px!important;padding-left:0px!important;">
                                                      <a data-fancybox="gallery" href="<?php echo e(asset('assets/dummythree.jpg')); ?>" data-caption="Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius voluptas culpa possimus reprehenderit tempore expedita sunt, nulla provident dolores! Numquam laudantium blanditiis voluptates porro asperiores temporibus earum nihil velit rerum.">  <img src="<?php echo e(asset('assets/dummythree.jpg')); ?>"style="height:400px;width: 100%;border: 2px solid #fff!important;"></a>
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
                                           <a data-fancybox="gallerysecond" href="<?php echo e(asset('assets/dummythree.jpg')); ?>"> <img src="<?php echo e(asset('assets/dummythree.jpg')); ?>" style="width: 100%;border: 1px solid #fff!important;height:auto;"></a>
                                        </div>
                                        <div class="swiper-slide" style="border:0px;">
                                           <a data-fancybox="gallerysecond" href="<?php echo e(asset('assets/dummythree.jpg')); ?>"> <img src="<?php echo e(asset('assets/dummythree.jpg')); ?>" style="width: 100%;border: 1px solid #fff!important;height:auto;"></a>
                                        </div>
                                        <div class="swiper-slide" style="border:0px;">
                                           <a data-fancybox="gallerysecond" href="<?php echo e(asset('assets/dummythree.jpg')); ?>"> <img src="<?php echo e(asset('assets/dummythree.jpg')); ?>" style="width: 100%;border: 1px solid #fff!important;height:auto;"></a>
                                        </div>
                                        <div class="swiper-slide" style="border:0px;">
                                           <a data-fancybox="gallerysecond" href="<?php echo e(asset('assets/dummythree.jpg')); ?>"> <img src="<?php echo e(asset('assets/dummythree.jpg')); ?>" style="width: 100%;border: 1px solid #fff!important;height:auto;"></a>
                                        </div>
                                        <div class="swiper-slide" style="border:0px;">
                                           <a data-fancybox="gallerysecond" href="<?php echo e(asset('assets/dummythree.jpg')); ?>"> <img src="<?php echo e(asset('assets/dummythree.jpg')); ?>" style="width: 100%;border: 1px solid #fff!important;height:auto;"></a>
                                        </div>
                                        <div class="swiper-slide" style="border:0px;">
                                           <a data-fancybox="gallerysecond" href="<?php echo e(asset('assets/dummythree.jpg')); ?>"> <img src="<?php echo e(asset('assets/dummythree.jpg')); ?>" style="width: 100%;border: 1px solid #fff!important;height:auto;"></a>
                                        </div>
                                        <div class="swiper-slide" style="border:0px;">
                                           <a data-fancybox="gallerysecond" href="<?php echo e(asset('assets/dummythree.jpg')); ?>"> <img src="<?php echo e(asset('assets/dummythree.jpg')); ?>" style="width: 100%;border: 1px solid #fff!important;height:auto;"></a>
                                        </div>
                                        <div class="swiper-slide" style="border:0px;">
                                           <a data-fancybox="gallerysecond" href="<?php echo e(asset('assets/dummythree.jpg')); ?>"> <img src="<?php echo e(asset('assets/dummythree.jpg')); ?>" style="width: 100%;border: 1px solid #fff!important;height:auto;"></a>
                                        </div>
                                        <div class="swiper-slide" style="border:0px;">
                                           <a data-fancybox="gallerysecond" href="<?php echo e(asset('assets/dummythree.jpg')); ?>"> <img src="<?php echo e(asset('assets/dummythree.jpg')); ?>" style="width: 100%;border: 1px solid #fff!important;height:auto;"></a>
                                        </div>
                                        <div class="swiper-slide" style="border:0px;">
                                           <a data-fancybox="gallerysecond" href="<?php echo e(asset('assets/dummythree.jpg')); ?>"> <img src="<?php echo e(asset('assets/dummythree.jpg')); ?>" style="width: 100%;border: 1px solid #fff!important;height:auto;"></a>
                                        </div>
                                    </div>
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                    <!-- <div class="swiper-pagination"></div> -->
                                </div>
                            </div>
                            <div class="col-lg-12 col-sm-12 text-center mt-3 newclasspaddingoff">
                                <button class="btn btn-large contactadministration" style="background-image: url('<?php echo e(asset('assets/buttonbackground.PNG')); ?>');width: 30%;color:#000;border-radius: 20px;font-family: 'Josefin Sans Bold';"data-toggle="modal" data-target="#addphoto">ADD PHOTOS</button>
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
                                            
                                            <select class="form-control mr-sm-2 searchinputnav mb-2" name="relationship">
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
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-sm-12 newclasspaddingoff">
                                <div class="swiper guestbookswiper">
                                    <div class="swiper-wrapper" style="height:300px;">
                                        <?php $__currentLoopData = $requestaccess; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $requestacces): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="swiper-slide text-center" style="height: calc(25% - 15px)!important;border:1px solid #BE9438!important;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                                            <p style="font-family: 'Josefin Sans Light';" class="addfullresposnive">
                                                <span style="font-family: 'Josefin Sans Light';" data-guestbook-id="<?php echo e($requestacces->id); ?>" data-content-type="name"><?php echo e($requestacces->fullname); ?></span>
                                                <br>
                                                <span style="font-family: 'Josefin Sans Light';" data-guestbook-id="<?php echo e($requestacces->id); ?>" data-content-type="date"><?php echo e(\Carbon\Carbon::parse($requestacces->date)->format('Y-m-d')); ?></span>
                                                <br>
                                                <span style="font-family: 'Josefin Sans Light';" data-guestbook-id="<?php echo e($requestacces->id); ?>" data-content-type="relationship"><?php echo e($requestacces->relationship); ?></span>
                                            </p>
                                        </div>                                        
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                    
                                    <!-- <div class="swiper-pagination"></div> -->
                                </div>
                            </div>
                            <div class="col-lg-12 col-sm-12 text-center mt-3 newclasspaddingoff">
                                <a href="<?php echo e(route('login')); ?>" class="btn btn-large contactadministration" style="background-image: url('<?php echo e(asset('assets/buttonbackground.PNG')); ?>');width: 30%;color:#000;border-radius: 20px;font-family: 'Josefin Sans Bold';">SIGN THE GUEST BOOK</a>
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
                            <div class="col-lg-12 col-sm-12 p-3 mt-2 newclasspaddingoff storiestitleborder" style="border: 2px solid #BE9438;">
                                <div class="swiper galleryswiper">
                                    <div class="swiper-wrapper">
                                        <?php $__currentLoopData = $stories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $storyy): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="swiper-slide">
                                            <div class="row">
                                                <div class="col-lg-12 col-sm-12">
                                                    <h4 class="text-center editable" data-story-id="<?php echo e($storyy->id); ?>" data-content-type="title"><?php echo e($storyy->title); ?></h4>
                                                </div>
                                                <?php if(!empty($storyy->image_one) || !empty($storyy->image_two)): ?>
                                                <div class="col-lg-6 col-sm-12">
                                                    <div class="row">
                                                        <div class="col-lg-12 col-sm-12">
                                                            <img src="<?php echo e(asset('stories_images/'.$storyy->image_one)); ?>" class="mt-2 heightmainstory editable-image" data-story-id="<?php echo e($storyy->id); ?>" data-content-type="image_one" style="height:332px;width: 100%;border: 1px solid #BE9438!important;">
                                                            <input type="file" class="image-upload" data-story-id="<?php echo e($storyy->id); ?>" data-content-type="image_one" style="display:none;">
                                                        </div>
                                                        <div class="col-lg-12 col-sm-12">
                                                            <img src="<?php echo e(asset('stories_images/'.$storyy->image_two)); ?>" class="mt-2 heightmainstory editable-image" data-story-id="<?php echo e($storyy->id); ?>" data-content-type="image_two" style="height:332px;width: 100%;border: 1px solid #BE9438!important;">
                                                            <input type="file" class="image-upload" data-story-id="<?php echo e($storyy->id); ?>" data-content-type="image_two" style="display:none;">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-sm-6 text-left">
                                                    <p class="mt-3 editable" data-story-id="<?php echo e($storyy->id); ?>" data-content-type="description" style="font-family: 'Josefin Sans Light';"><?php echo e($storyy->description); ?></p> 
                                                </div>
                                                <?php else: ?>
                                                <div class="col-lg-12 col-sm-12 text-left">
                                                    <p class="mt-3 editable" data-story-id="<?php echo e($storyy->id); ?>" data-content-type="description" style="font-family: 'Josefin Sans Light';"><?php echo e($storyy->description); ?></p> 
                                                </div>
                                                <?php endif; ?>
                                                <div class="col-lg-10 col-sm-10 text-left">
                                                    <p class="mt-3" style="font-family: 'Josefin Sans Light';">Submitted by: <?php echo e($storyy->create_by); ?></p> 
                                                </div>
                                                <div class="col-lg-2 col-sm-2 text-right">
                                                    <p class="mt-3" style="font-family: 'Josefin Sans Light';">Date: <?php echo e(\Carbon\Carbon::parse($storyy->create_at)->format('m-d-Y')); ?></p> 
                                                </div>
                                            </div>
                                        </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                                        
                                    </div>
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                </div>
                                <script>
                                    document.addEventListener("DOMContentLoaded", function() {
                                        var editableElements = document.querySelectorAll('.editable');
                                        var editableImages = document.querySelectorAll('.editable-image');
                                        var imageUploads = document.querySelectorAll('.image-upload');
                                    
                                        // Function to make element editable
                                        function makeEditable(element) {
                                            element.contentEditable = true;
                                            element.focus();
                                        }
                                    
                                        // Add event listeners to make elements editable upon clicking
                                        editableElements.forEach(function(element) {
                                            element.addEventListener('click', function() {
                                                makeEditable(element);
                                            });
                                    
                                            element.addEventListener('blur', function() {
                                                var editedContent = element.textContent.trim();
                                                var storyId = element.getAttribute('data-story-id');
                                                var contentType = element.getAttribute('data-content-type');
                                    
                                                // Prepare data object with dynamic key-value pair
                                                var data = {
                                                    storyId: storyId
                                                };
                                                data[contentType] = editedContent;  // Set key based on content type (title/description)
                                    
                                                // Make an AJAX request to send the edited content to the server
                                                fetch('/update-story-content', {
                                                    method: 'POST',
                                                    headers: {
                                                        'Content-Type': 'application/json',
                                                        'X-CSRF-TOKEN': '<?php echo e(csrf_token()); ?>' // Include CSRF token if applicable
                                                    },
                                                    body: JSON.stringify(data)
                                                })
                                                .then(response => {
                                                    if (response.ok) {
                                                        console.log(contentType.charAt(0).toUpperCase() + contentType.slice(1) + ' updated successfully!');
                                                        window.location.reload();
                                                    } else {
                                                        console.error('Failed to update ' + contentType);
                                                    }
                                                })
                                                .catch(error => {
                                                    console.error('Error:', error);
                                                });
                                    
                                                element.contentEditable = false; // Make the element non-editable after blur
                                            });
                                        });
                                    
                                        // Add event listeners to handle image clicks
                                        editableImages.forEach(function(image) {
                                            image.addEventListener('click', function() {
                                                var storyId = image.getAttribute('data-story-id');
                                                var contentType = image.getAttribute('data-content-type');
                                                var fileInput = document.querySelector('.image-upload[data-story-id="' + storyId + '"][data-content-type="' + contentType + '"]');
                                                fileInput.click();
                                            });
                                        });
                                    
                                        // Add event listeners to handle image file selection
                                        imageUploads.forEach(function(input) {
                                            input.addEventListener('change', function() {
                                                var file = input.files[0];
                                                var storyId = input.getAttribute('data-story-id');
                                                var contentType = input.getAttribute('data-content-type');
                                                var formData = new FormData();
                                                formData.append('storyId', storyId);
                                                formData.append(contentType, file);
                                    
                                                // Make an AJAX request to upload the new image to the server
                                                fetch('/update-story-image', {
                                                    method: 'POST',
                                                    headers: {
                                                        'X-CSRF-TOKEN': '<?php echo e(csrf_token()); ?>' // Include CSRF token if applicable
                                                    },
                                                    body: formData
                                                })
                                                .then(response => {
                                                    if (response.ok) {
                                                        console.log(contentType.charAt(0).toUpperCase() + contentType.slice(1) + ' updated successfully!');
                                                        window.location.reload();
                                                    } else {
                                                        console.error('Failed to update ' + contentType);
                                                    }
                                                })
                                                .catch(error => {
                                                    console.error('Error:', error);
                                                });
                                            });
                                        });
                                    });
                                </script>                                    
                            </div>
                            <div class="col-lg-12 col-sm-12 text-center mt-3 newclasspaddingoff">
                                <button class="btn btn-large contactadministration" style="background-image: url('<?php echo e(asset('assets/buttonbackground.PNG')); ?>');width: 30%;color:#000;border-radius: 20px;font-family: 'Josefin Sans Bold';"data-toggle="modal" data-target="#addstory" >ADD A STORY
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
                                        <form action="<?php echo e(route('addstory')); ?>" method="post" enctype="multipart/form-data">
                                            <?php echo csrf_field(); ?>
                                            <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-lg-12 col-sm-12">
                                                            <div class="form-group">
                                                                <label for="title" class="float-left">Add Title</label>
                                                                <input class="form-control" type="text" id="title" name="title" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="addphotos" class="float-left">Add Image First</label>
                                                                <input class="form-control" type="file" id="addphotos" name="image_one">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="addphotos" class="float-left">Add Image Second</label>
                                                                <input class="form-control" type="file" id="addphotos"  name="image_two">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="brief" class="float-left">Add Description</label>
                                                                <textarea class="form-control" id="brief" name="description" required></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn" style="background-color: #BE9438;width: 30%;color:#fff;font-family: 'Josefin Sans Bold';">Save</button>
                                            </div>
                                        </form>
                                    </div>
                                  </div>
                                </div>
                            </div>
                            <div  class="col-lg-12 col-sm-12 mt-lg-4 newclasspaddingoff">
                                
                                <div class="row mt-lg-4">
                                    <div  class="col-lg-9 col-sm-12 text-right mb-lg-5">
                                        <h3 class="storiesanotherpagemainheading topaddmarginsub" style="color:#A423EB!important;margin-right: 125px;" id="sounds">SOUND CLIPS (###)
                                        </h3>
                                    </div>
                                    <div  class="col-lg-3 col-sm-12">
                                        <form class="form-inline searchinputnavhsbdha">
                                            <input class="form-control mr-sm-2 searchinputnav mb-2" type="search"
                                                placeholder="Search" aria-label="Search">
                                        </form>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-12 col-sm-12 mt-4 mb-4 newclasspaddingoff">
                                <div class="swiper soundbitesswiper">
                                    <div class="swiper-wrapper">
                                        <?php $__currentLoopData = $soundclips; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $soundclip): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="swiper-slide text-center mb-2 p-4" style="border: 1px solid #BE9438!important;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" data-toggle="modal" data-target="#checkaudio<?php echo e($key); ?>">
                                                <p style="font-family: 'Josefin Sans Light';"><?php echo e($soundclip->title); ?>

                                                </p>
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                    <!-- <div class="swiper-pagination"></div> -->
                                </div>
                                <?php $__currentLoopData = $soundclips; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $soundclipp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="modal fade" id="checkaudio<?php echo e($key); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel<?php echo e($key); ?>" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title soundeditable" data-soundclip-id="<?php echo e($soundclipp->id); ?>" id="exampleModalLabel<?php echo e($key); ?>">
                                                        <?php echo e($soundclipp->title); ?>

                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-lg-12 col-sm-12">
                                                            <audio controls>
                                                                <source src="<?php echo e(asset('soundclips_files/' . $soundclipp->audio)); ?>" type="audio/<?php echo e(pathinfo($soundclipp->audio, PATHINFO_EXTENSION)); ?>">
                                                                Your browser does not support the audio element.
                                                            </audio>
                                                            <span style="cursor: pointer;">
                                                                <i class="fa fa-edit" style="color: #BE9438;" onclick="document.getElementById('audioUpload<?php echo e($key); ?>').click();"></i>
                                                            </span>
                                                            <input type="file" id="audioUpload<?php echo e($key); ?>" class="audio-upload" data-soundclip-id="<?php echo e($soundclipp->id); ?>" style="display:none;" accept="audio/*">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <script>
                                    document.addEventListener("DOMContentLoaded", function() {
                                        var editableElements = document.querySelectorAll('.soundeditable');
                                        var audioUploads = document.querySelectorAll('.audio-upload');
                                    
                                        // Function to make element editable
                                        function makeEditable(element) {
                                            element.contentEditable = true;
                                            element.focus();
                                        }
                                    
                                        // Add event listeners to make elements editable upon clicking
                                        editableElements.forEach(function(element) {
                                            element.addEventListener('click', function() {
                                                makeEditable(element);
                                            });
                                    
                                            element.addEventListener('blur', function() {
                                                var editedContent = element.textContent.trim();
                                                var soundclipId = element.getAttribute('data-soundclip-id');
                                    
                                                // Prepare data object with dynamic key-value pair
                                                var data = {
                                                    soundclipId: soundclipId,
                                                    title: editedContent
                                                };
                                    
                                                // Make an AJAX request to send the edited content to the server
                                                fetch('/update-soundclip-content', {
                                                    method: 'POST',
                                                    headers: {
                                                        'Content-Type': 'application/json',
                                                        'X-CSRF-TOKEN': '<?php echo e(csrf_token()); ?>' // Include CSRF token if applicable
                                                    },
                                                    body: JSON.stringify(data)
                                                })
                                                .then(response => {
                                                    if (response.ok) {
                                                        console.log('Title updated successfully!');
                                                        window.location.reload();
                                                    } else {
                                                        console.error('Failed to update title');
                                                    }
                                                })
                                                .catch(error => {
                                                    console.error('Error:', error);
                                                });
                                    
                                                element.contentEditable = false; // Make the element non-editable after blur
                                            });
                                        });
                                    
                                        // Add event listeners to handle audio file selection
                                        audioUploads.forEach(function(input) {
                                            input.addEventListener('change', function() {
                                                var file = input.files[0];
                                                var soundclipId = input.getAttribute('data-soundclip-id');
                                                var formData = new FormData();
                                                formData.append('soundclipId', soundclipId);
                                                formData.append('audio', file);
                                    
                                                // Make an AJAX request to upload the new audio file to the server
                                                fetch('/update-soundclip-audio', {
                                                    method: 'POST',
                                                    headers: {
                                                        'X-CSRF-TOKEN': '<?php echo e(csrf_token()); ?>' // Include CSRF token if applicable
                                                    },
                                                    body: formData
                                                })
                                                .then(response => {
                                                    if (response.ok) {
                                                        console.log('Audio updated successfully!');
                                                        window.location.reload();
                                                    } else {
                                                        console.error('Failed to update audio');
                                                    }
                                                })
                                                .catch(error => {
                                                    console.error('Error:', error);
                                                });
                                            });
                                        });
                                    });
                                </script>
                            </div>
                            <div class="col-lg-12 col-sm-12 text-center mt-3 newclasspaddingoff">
                                <button class="btn btn-large contactadministration" style="background-image: url('<?php echo e(asset('assets/buttonbackground.PNG')); ?>');width: 30%;color:#000;border-radius: 20px;font-family: 'Josefin Sans Bold';"data-toggle="modal" data-target="#addaudio">ADD AUDIO
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
                                        <form action="<?php echo e(route('uploadsoundsclip')); ?>" method="POST" enctype="multipart/form-data">
                                            <?php echo csrf_field(); ?>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-lg-12 col-sm-12">
                                                        <div class="form-group">
                                                            <label for="title" class="float-left">Add Title</label>
                                                            <input class="form-control" type="text" id="title" name="title" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="addaudio" class="float-left">Add Audio</label>
                                                            <input class="form-control" type="file" id="addaudio" name="audio" accept="audio/*" required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn" style="background-color: #BE9438;width: 30%;color:#fff;font-family: 'Josefin Sans Bold';">Save</button>
                                            </div>
                                        </form>
                                    </div>
                                  </div>
                                </div>
                            </div>
                            <div  class="col-lg-12 col-sm-12 mt-4 p-4 newclasspaddingoff transitionlbordernone" style="border-top: 2px solid #BE9438;">        
                                <div class="row">
                                    <div class="col-lg-12 col-sm-12" id="transition">
                                        <h3 class="transitionheading mt-lg-3 topaddmarginsub" style="color:#A423EB!important;">THE TRANSITION
                                        </h3>
                                    </div>
                                    <div class="col-lg-12 col-sm-12 text-center">
                                        <h3 class="wishesheading mt-4" style="color:#A423EB!important;" id="funeral">FUNERAL WISHES
                                        </h3>
                                    </div>
                                    <?php if($transition): ?>
                                        <div class="col-lg-12 col-sm-12 text-center" style="padding-right: 5px!important;padding-left: 5px!important;">
                                            <h3 class="breesheading"><b style="color:#A423EB!important;">Title:</b> <span class="transitioneditable" data-id="title"><?php echo e($transition->title); ?></span></h3>
                                            <h3 class="breesheading"><b style="color:#A423EB!important;">Theme:</b> <span class="transitioneditable" data-id="theme"><?php echo e($transition->theme); ?></span></h3>
                                            <h3 class="breesheading"><b style="color:#A423EB!important;">Dress Code:</b> <span class="transitioneditable" data-id="dress_code"><?php echo e($transition->dress_code); ?></span></h3>
                                            <h3 class="breesheading"><b style="color:#A423EB!important;">Music:</b> <span class="transitioneditable" data-id="music"><?php echo e($transition->music); ?></span></h3>
                                            <h3 class="breesheading"><span class="transitioneditable" data-id="extra_music"><?php echo e($transition->extra_music); ?></span></h3>
                                            <h3 class="breesheading"><b style="color:#A423EB!important;">Body:</b> <span class="transitioneditable" data-id="body"><?php echo e($transition->body); ?></span></h3>
                                            <h3 class="breesheading"><b style="color:#A423EB!important;">To be honoured by:</b> <span><?php echo e($transition->honoured_by); ?></span></h3>
                                        </div>
                                    <?php else: ?>
                                        <div class="col-lg-12 col-sm-12 text-center" style="padding-right: 5px!important;padding-left: 5px!important;">
                                            <h3 class="breesheading"><b style="color:#A423EB!important;">Title:</b> <span class="transitioneditable" data-id="title">Bree’s Celebration of Life</span></h3>
                                            <h3 class="breesheading"><b style="color:#A423EB!important;">Theme:</b> <span class="transitioneditable" data-id="theme">Not sad - Light, Fun, Airy, like a carnivale</span></h3>
                                            <h3 class="breesheading"><b style="color:#A423EB!important;">Dress Code:</b> <span class="transitioneditable" data-id="dress_code">Everyone to wear colour</span></h3>
                                            <h3 class="breesheading"><b style="color:#A423EB!important;">Music:</b> <span class="transitioneditable" data-id="music">Catch and Release (Matt Simons), Beat You There (Wil Dempsey), Time of my Life (Bill Medley & Jennifer Warnes).</span></h3>
                                            <h3 class="breesheading"><span class="transitioneditable" data-id="extra_music">Time of my Life (Bill Medley & Jennifer Warnes)</span></h3>
                                            <h3 class="breesheading"><b style="color:#A423EB!important;">Body:</b> <span class="transitioneditable" data-id="body">Cremated. Ashes made into jewellery for her children Remaining ashes scattered in the ocean</span></h3>
                                            <h3 class="breesheading"><b style="color:#A423EB!important;">To be honoured by:</b> <span class="transitioneditable" data-id="honoured_by">Going camping</span></h3>
                                        </div>
                                    <?php endif; ?>     
                                    <script>
                                        document.addEventListener("DOMContentLoaded", function() {
                                            var editableElements = document.querySelectorAll('.transitioneditable');
                                        
                                            // Function to make element editable
                                            function makeEditable(element) {
                                                element.contentEditable = true;
                                                element.focus();
                                            }
                                        
                                            // Add event listeners to make elements editable upon clicking
                                            editableElements.forEach(function(element) {
                                                element.addEventListener('click', function() {
                                                    makeEditable(element);
                                                });
                                        
                                                element.addEventListener('blur', function() {
                                                    var editedContent = element.textContent.trim();
                                                    var dataId = element.getAttribute('data-id');
                                        
                                                    // Prepare data object with dynamic key-value pair
                                                    var data = {
                                                        id: dataId,
                                                        content: editedContent
                                                    };
                                        
                                                    // Make an AJAX request to send the edited content to the server
                                                    fetch('/update-transition-content', {
                                                        method: 'POST',
                                                        headers: {
                                                            'Content-Type': 'application/json',
                                                            'X-CSRF-TOKEN': '<?php echo e(csrf_token()); ?>' // Include CSRF token if applicable
                                                        },
                                                        body: JSON.stringify(data)
                                                    })
                                                    .then(response => {
                                                        if (response.ok) {
                                                            console.log('Content updated successfully!');
                                                            window.location.reload();
                                                        } else {
                                                            console.error('Failed to update content');
                                                        }
                                                    })
                                                    .catch(error => {
                                                        console.error('Error:', error);
                                                    });
                                        
                                                    element.contentEditable = false; // Make the element non-editable after blur
                                                });
                                            });
                                        });
                                    </script>                                                                      
                                </div>
                                <div class="row" style="border-top: 2px solid #BE9438!important;">
                                    <div class="col-lg-12 col-sm-12">
                                        <h3 class="wishesheading mt-3 topaddmarginsub topaddmarginsub" style="color:#A423EB!important;" id="obituary">OBITUARY
                                        </h3>
                                    </div>
                                    <?php if(empty($obituary)): ?>
                                    <div class="col-lg-12 col-sm-12 text-center" style="padding-right: 0px!important;">
                                        <h3 class="breesheading"><b style="color:#A423EB!important;">Full Name: </b> <span class="abituaryeditable" data-id="full_name">Breannon Kimberley Schuback (Formerly Daniel)</span></h3>
                                        <h3 class="breesheading"><b style="color:#A423EB!important;">Date of Birth:</b> <span class="abituaryeditable" data-id="date_of_birth">31st December 1992</span></h3>
                                        <h3 class="breesheading"><b style="color:#A423EB!important;">Birth Place: </b> <span class="abituaryeditable" data-id="birth_place">Gosford Hospital NSW Australia</span></h3>
                                        <h3 class="breesheading"><b style="color:#A423EB!important;">Date of Transition: </b> <span class="abituaryeditable" data-id="date_of_transition">Friday, 25th August 2023</span></h3>
                                        <h3 class="breesheading"><b style="color:#A423EB!important;">Place of Transition: </b> <span class="abituaryeditable" data-id="place_of_transition">At home — Carmody Court, Nudgee, QLD, Australia</span></h3>
                                        <h3 class="breesheading"><b style="color:#A423EB!important;">Cause of Transition: </b> <span class="abituaryeditable" data-id="cause_of_transition">Unknown</span></h3>
                                    </div>
                                    <?php else: ?>
                                    <div class="col-lg-12 col-sm-12 text-center" style="padding-right: 0px!important;">
                                        <h3 class="breesheading"><b style="color:#A423EB!important;">Full Name: </b> <span class="abituaryeditable" data-id="full_name"><?php echo e($obituary->full_name); ?></span></h3>
                                        <h3 class="breesheading"><b style="color:#A423EB!important;">Date of Birth:</b> <span class="abituaryeditable" data-id="date_of_birth"><?php echo e($obituary->date_of_birth); ?></span></h3>
                                        <h3 class="breesheading"><b style="color:#A423EB!important;">Birth Place: </b> <span class="abituaryeditable" data-id="birth_place"><?php echo e($obituary->birth_place); ?></span></h3>
                                        <h3 class="breesheading"><b style="color:#A423EB!important;">Date of Transition: </b> <span class="abituaryeditable" data-id="date_of_transition"><?php echo e($obituary->date_of_transition); ?></span></h3>
                                        <h3 class="breesheading"><b style="color:#A423EB!important;">Place of Transition: </b> <span class="abituaryeditable" data-id="place_of_transition"><?php echo e($obituary->place_of_transition); ?></span></h3>
                                        <h3 class="breesheading"><b style="color:#A423EB!important;">Cause of Transition: </b> <span class="abituaryeditable" data-id="cause_of_transition"><?php echo e($obituary->cause_of_transition); ?></span></h3>
                                    </div>
                                    <?php endif; ?>  
                                    <script>
                                        document.addEventListener("DOMContentLoaded", function() {
                                            var editableElements = document.querySelectorAll('.abituaryeditable');

                                            // Function to make element editable
                                            function makeEditable(element) {
                                                element.contentEditable = true;
                                                element.focus();
                                            }

                                            // Function to handle AJAX update
                                            function handleUpdate(element) {
                                                var editedContent = element.textContent.trim();
                                                var dataId = element.getAttribute('data-id');

                                                // Prepare data object with dynamic key-value pair
                                                var data = {
                                                    id: dataId,
                                                    content: editedContent
                                                };

                                                // Make an AJAX request to send the edited content to the server
                                                fetch('/update-obituary-content', {
                                                    method: 'POST',
                                                    headers: {
                                                        'Content-Type': 'application/json',
                                                        'X-CSRF-TOKEN': '<?php echo e(csrf_token()); ?>' // Include CSRF token if applicable
                                                    },
                                                    body: JSON.stringify(data)
                                                })
                                                .then(response => {
                                                    if (response.ok) {
                                                        console.log('Content updated successfully!');
                                                        window.location.reload();
                                                    } else {
                                                        console.error('Failed to update content');
                                                    }
                                                })
                                                .catch(error => {
                                                    console.error('Error:', error);
                                                });

                                                element.contentEditable = false; // Make the element non-editable after blur
                                            }

                                            // Add event listeners to make elements editable upon clicking
                                            editableElements.forEach(function(element) {
                                                element.addEventListener('click', function() {
                                                    makeEditable(element);
                                                });

                                                element.addEventListener('blur', function() {
                                                    handleUpdate(element);
                                                });
                                            });
                                        });
                                    </script>                                                                      
                                </div>
                                
                            </div>
                            <div class="col-lg-12 col-sm-12 mt-3 newclasspaddingoff funeralmargin">
                                <?php if(empty($obituaryboxes)): ?>
                                <div class="row">
                                    <div class="col-lg-3 col-sm-6 ml-lg-5" style="border: 1px solid #BE9438!important;height: 350px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                                        <div class="card" style="border:0px;">
                                            <div class="card-header text-center" style="padding-bottom: 0px;background-color:#fff;border:0px;">
                                                <h4 class="pagemainheading topaddmarginsub" style="color:#A423EB!important;font-size: 18px;">FUNERAL HOME
                                                </h4>
                                            </div>
                                            <div class="card-body text-center" style="padding-top: 0px;">
                                                <p style="font-family: 'Josefin Sans Light';font-size:15px;margin-bottom: 0px;" class="obituary-editable-text" data-id="funeral_home">Academy Funerals Lawnton
                                                </p>
                                                <p style="font-family: 'Josefin Sans Light';font-size:15px;margin-bottom: 0px;" class="obituary-editable-text" data-id="funeral_home">mail@academyfunerals.com.au
                                                </p>
                                                <p style="font-family: 'Josefin Sans Light';font-size:15px;margin-bottom: 0px;" class="obituary-editable-text" data-id="funeral_home">Director: Robin Druery
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6 offset-lg-1 funeralmargin" style="border: 1px solid #BE9438!important;height: 350px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                                        <div class="card" style="border:0px;">
                                            <div class="card-header text-center" style="padding-bottom: 0px;background-color:#fff;border:0px;">
                                                <h4 class="pagemainheading topaddmarginsub" style="color:#A423EB!important;font-size: 18px;">VIEWS
                                                </h4>
                                            </div>
                                            <div class="card-body text-center" style="padding-top: 0px;">
                                                <p style="font-family: 'Josefin Sans Light';font-size:15px;margin-bottom: 0px;" class="obituary-editable-text" data-id="views">By invite Only
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6 offset-lg-1 funeralmargin" style="border: 1px solid #BE9438!important;height: 350px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                                        <div class="card" style="border:0px;">
                                            <div class="card-header text-center" style="padding-bottom: 0px;background-color:#fff;border:0px;">
                                                <h4 class="pagemainheading topaddmarginsub" style="color:#A423EB!important;font-size: 18px;">PROCESSION
                                                </h4>
                                            </div>
                                            <div class="card-body text-center" style="padding-top: 0px;">
                                                <p style="font-family: 'Josefin Sans Light';font-size:15px;margin-bottom: 0px;"  class="obituary-editable-text" data-id="procession">Wednesday 13th September 2023, 
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6 mt-3 ml-lg-5" style="border: 1px solid #BE9438!important;height: 350px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                                        <div class="card" style="border:0px;">
                                            <div class="card-header text-center" style="padding-bottom: 0px;background-color:#fff;border:0px;">
                                                <h4 class="pagemainheading topaddmarginsub" style="color:#A423EB!important;font-size: 18px;"><a style="color:#A423EB!important;font-size: 18px;" href="https://www.google.com/maps?q=40.7128,-74.0060" target="_blank">SERVICE</a>
                                                </h4>
                                            </div>
                                            <div class="card-body text-center" style="padding-top: 0px;">
                                                <p style="font-family: 'Josefin Sans Light';font-size:15px;margin-bottom: 0px;" class="obituary-editable-text" data-id="service">Wednesday 13th September 2023,  
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6 offset-lg-1 mt-3" style="border: 1px solid #BE9438!important;height: 350px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                                        <div class="card" style="border:0px;">
                                            <div class="card-header text-center" style="padding-bottom: 0px;background-color:#fff;border:0px;">
                                                <h4 class="pagemainheading topaddmarginsub" style="color:#A423EB!important;font-size: 18px;">WAKE
                                                </h4>
                                            </div>
                                            <div class="card-body text-center" style="padding-top: 0px;">
                                                <p style="font-family: 'Josefin Sans Light';font-size:15px;margin-bottom: 0px;" class="obituary-editable-text" data-id="wake">Wednesday 13th September 2023,  
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6 offset-lg-1 mt-3" style="border: 1px solid #BE9438!important;height: 350px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                                        <div class="card" style="border:0px;">
                                            <div class="card-header text-center" style="padding-bottom: 0px;background-color:#fff;border:0px;">
                                                <h4 class="pagemainheading topaddmarginsub" style="color:#A423EB!important;font-size: 18px;"><a style="color:#A423EB!important;font-size: 18px;" href="https://www.google.com/maps?q=40.7128,-74.0060" target="_blank">FINAL RESTING PLACE</a>
                                                </h4>
                                            </div>
                                            <div class="card-body text-center" style="padding-top: 0px;">
                                                <p style="font-family: 'Josefin Sans Light';font-size:15px;margin-bottom: 0px;" class="obituary-editable-text" data-id="final_resting_place">Breannon's ashes are currently in her mother’s possession. Some of Bree’s ashes will be scattered with her grandparents, Jan and Lex Horgan. Some ashes will be scattered overseas, where Breannon planned to travel. Breannon's remaining ashes will be combined with her mother’s, and both will be buried with Breannon's sister, Kaitlyn Schuback-Jeffers.  
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php else: ?>
                                <div class="row">
                                    <!-- Funeral Home -->
                                    <div class="col-lg-3 col-sm-6 ml-lg-5" style="border: 1px solid #BE9438!important;height: 350px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                                        <div class="card" style="border:0px;">
                                            <div class="card-header text-center" style="padding-bottom: 0px;background-color:#fff;border:0px;">
                                                <h4 class="pagemainheading topaddmarginsub" style="color:#A423EB!important;font-size: 18px;">FUNERAL HOME</h4>
                                            </div>
                                            <div class="card-body text-center" style="padding-top: 0px;">
                                                <p class="obituary-editable-text" data-id="funeral_home" style="font-family: 'Josefin Sans Light';font-size:15px;margin-bottom: 0px;"><?php echo e($obituaryboxes->funeral_home); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Views -->
                                    <div class="col-lg-3 col-sm-6 offset-lg-1 funeralmargin" style="border: 1px solid #BE9438!important;height: 350px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                                        <div class="card" style="border:0px;">
                                            <div class="card-header text-center" style="padding-bottom: 0px;background-color:#fff;border:0px;">
                                                <h4 class="pagemainheading topaddmarginsub" style="color:#A423EB!important;font-size: 18px;">VIEWS</h4>
                                            </div>
                                            <div class="card-body text-center" style="padding-top: 0px;">
                                                <p class="obituary-editable-text" data-id="views" style="font-family: 'Josefin Sans Light';font-size:15px;margin-bottom: 0px;"><?php echo e($obituaryboxes->views); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Procession -->
                                    <div class="col-lg-3 col-sm-6 offset-lg-1 funeralmargin" style="border: 1px solid #BE9438!important;height: 350px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                                        <div class="card" style="border:0px;">
                                            <div class="card-header text-center" style="padding-bottom: 0px;background-color:#fff;border:0px;">
                                                <h4 class="pagemainheading topaddmarginsub" style="color:#A423EB!important;font-size: 18px;">PROCESSION</h4>
                                            </div>
                                            <div class="card-body text-center" style="padding-top: 0px;">
                                                <p class="obituary-editable-text" data-id="procession" style="font-family: 'Josefin Sans Light';font-size:15px;margin-bottom: 0px;"><?php echo e($obituaryboxes->procession); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Service -->
                                    <div class="col-lg-3 col-sm-6 mt-3 ml-lg-5" style="border: 1px solid #BE9438!important;height: 350px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                                        <div class="card" style="border:0px;">
                                            <div class="card-header text-center" style="padding-bottom: 0px;background-color:#fff;border:0px;">
                                                <h4 class="pagemainheading topaddmarginsub" style="color:#A423EB!important;font-size: 18px;"><a style="color:#A423EB!important;font-size: 18px;" href="https://www.google.com/maps?q=40.7128,-74.0060" target="_blank">SERVICE</a></h4>
                                            </div>
                                            <div class="card-body text-center" style="padding-top: 0px;">
                                                <p class="obituary-editable-text" data-id="service" style="font-family: 'Josefin Sans Light';font-size:15px;margin-bottom: 0px;"><?php echo e($obituaryboxes->service); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Wake -->
                                    <div class="col-lg-3 col-sm-6 offset-lg-1 mt-3" style="border: 1px solid #BE9438!important;height: 350px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                                        <div class="card" style="border:0px;">
                                            <div class="card-header text-center" style="padding-bottom: 0px;background-color:#fff;border:0px;">
                                                <h4 class="pagemainheading topaddmarginsub" style="color:#A423EB!important;font-size: 18px;">WAKE</h4>
                                            </div>
                                            <div class="card-body text-center" style="padding-top: 0px;">
                                                <p class="obituary-editable-text" data-id="wake" style="font-family: 'Josefin Sans Light';font-size:15px;margin-bottom: 0px;"><?php echo e($obituaryboxes->wake); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Final Resting Place -->
                                    <div class="col-lg-3 col-sm-6 offset-lg-1 mt-3" style="border: 1px solid #BE9438!important;height: 350px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                                        <div class="card" style="border:0px;">
                                            <div class="card-header text-center" style="padding-bottom: 0px;background-color:#fff;border:0px;">
                                                <h4 class="pagemainheading topaddmarginsub" style="color:#A423EB!important;font-size: 18px;"><a style="color:#A423EB!important;font-size: 18px;" href="https://www.google.com/maps?q=40.7128,-74.0060" target="_blank">FINAL RESTING PLACE</a></h4>
                                            </div>
                                            <div class="card-body text-center" style="padding-top: 0px;">
                                                <p class="obituary-editable-text" data-id="final_resting_place" style="font-family: 'Josefin Sans Light';font-size:15px;margin-bottom: 0px;"><?php echo e($obituaryboxes->final_resting_place); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>                                
                                <?php endif; ?>
                                <script>
                                    document.addEventListener("DOMContentLoaded", function() {
                                        var editableElements = document.querySelectorAll('.obituary-editable-text');
                                    
                                        // Function to make element editable
                                        function makeEditable(element) {
                                            element.contentEditable = true;
                                            element.focus();
                                        }
                                    
                                        // Function to handle AJAX update
                                        function handleUpdate(element) {
                                            var editedContent = element.textContent.trim();
                                            var dataId = element.getAttribute('data-id');
                                    
                                            // Prepare data object with dynamic key-value pair
                                            var data = {
                                                id: dataId,
                                                content: editedContent
                                            };
                                    
                                            // Make an AJAX request to send the edited content to the server
                                            fetch('/obituray-boxesupdate-content', {  // Adjust the URL as needed
                                                method: 'POST',
                                                headers: {
                                                    'Content-Type': 'application/json',
                                                    'X-CSRF-TOKEN': '<?php echo e(csrf_token()); ?>' // Include CSRF token if applicable
                                                },
                                                body: JSON.stringify(data)
                                            })
                                            .then(response => {
                                                if (response.ok) {
                                                    console.log('Content updated successfully!');
                                                    window.location.reload();
                                                } else {
                                                    console.error('Failed to update content');
                                                }
                                            })
                                            .catch(error => {
                                                console.error('Error:', error);
                                            });
                                    
                                            element.contentEditable = false; // Make the element non-editable after blur
                                        }
                                    
                                        // Add event listeners to make elements editable upon clicking
                                        editableElements.forEach(function(element) {
                                            element.addEventListener('click', function() {
                                                makeEditable(element);
                                            });
                                    
                                            element.addEventListener('blur', function() {
                                                handleUpdate(element);
                                            });
                                        });
                                    });
                                </script>  
                                                                   
                            </div>
                            <div  class="col-lg-12 col-sm-12 mt-4 newclasspaddingoff">
                                <h3 class="pagemainheading mt-3" style="color:#A423EB!important;">EULOGY
                                </h3>
                                <?php if(empty($eulogy->content)): ?>
                                <p class="mt-2 text-center eulogyeditable-p" data-id="content">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Non modi iste rerum, dolore adipisci delectus cum nobis quasi asperiores nesciunt repudiandae doloremque soluta perferendis dolorem consequatur, magni tempora eos amet.</p>
                                <?php else: ?>
                                <p class="mt-2 text-center eulogyeditable-p" data-id="content"><?php echo e($eulogy->content); ?></p>
                                <?php endif; ?>
                            </div>
                            <div class="col-lg-12 col-sm-12 text-center newclasspaddingoff">
                                <?php if(empty($eulogy->download_order_of_service)): ?>
                                    <a href="<?php echo e(asset('Breannon-ORDER-OF-SERVICE.pdf')); ?>" download><button class="btn btn-large mt-3 contactadministration" style="background-image: url('<?php echo e(asset('assets/buttonbackground.PNG')); ?>');width: 30%;color:#000;border-radius: 20px;font-family: 'Josefin Sans Bold';">DOWNLOAD ORDER OF SERVICE
                                    </button></a>
                                <?php else: ?>
                                    <a href="<?php echo e(asset('download_order_of_services/'.$eulogy->download_order_of_service)); ?>" download><button class="btn btn-large mt-3 contactadministration" style="background-image: url('<?php echo e(asset('assets/buttonbackground.PNG')); ?>');width: 30%;color:#000;border-radius: 20px;font-family: 'Josefin Sans Bold';">DOWNLOAD ORDER OF SERVICE
                                    </button></a>
                                <?php endif; ?>
                                <span style="cursor: pointer;" data-target="#eulogyupdatemodal">
                                    <i class="fa fa-edit" style="color: #BE9438;" data-toggle="modal" data-target="#eulogyupdatemodal"></i>
                                </span>
                            </div>
                            <div class="modal fade" id="eulogyupdatemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Update Order of Service Eulogy</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>
                                        <form action="<?php echo e(route('add_download_order_of_service_euolgy')); ?>" method="POST" enctype="multipart/form-data">
                                            <div class="modal-body">
                                                <?php echo csrf_field(); ?>
                                                <div class="row">
                                                    <div class="col-lg-12 col-sm-12">
                                                        <div class="form-group">
                                                            <label for="download_order_of_service" class="float-left">Add Order Service Pdf</label>
                                                            <input class="form-control" type="file" id="download_order_of_service" name="download_order_of_service" required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer"> 
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn" style="background-color: #BE9438;width: 30%;color:#fff;font-family: 'Josefin Sans Bold';">Save</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-12 col-sm-12 mt-3 newclasspaddingoff">
                                <h3 class="pagemainheading mt-3" style="color:#A423EB!important;">A MESSAGE FROM THE FAMILY</h3>
                                <?php if(empty($eulogy->description)): ?>
                                <p class="mt-3 mesagetextcenter eulogyeditable-p" data-id="description" style="font-family: 'Josefin Sans Light';">In loving memory of Breannon, Kaitlyn and I wish to express our heartfelt gratitude to all who have supported us during this difficult time.</p>
                                <?php else: ?>
                                <p class="mt-3 mesagetextcenter eulogyeditable-p" data-id="description" style="font-family: 'Josefin Sans Light';"><?php echo e($eulogy->description); ?></p>
                                <?php endif; ?>
                            </div>
                            <script>
                                document.addEventListener("DOMContentLoaded", function() {
                                    var editableElements = document.querySelectorAll('.eulogyeditable-p');
                            
                                    // Function to make element editable
                                    function makeEditable(element) {
                                        element.contentEditable = true;
                                        element.focus();
                                    }
                            
                                    // Function to handle AJAX update
                                    function handleUpdate(element) {
                                        var editedContent = element.textContent.trim();
                                        var dataId = element.getAttribute('data-id');
                            
                                        // Prepare data object with dynamic key-value pair
                                        var data = {
                                            id: dataId,
                                            content: editedContent
                                        };
                            
                                        // Make an AJAX request to send the edited content to the server
                                        fetch('/eulogyupdate-content', {  // Adjust the URL as needed
                                            method: 'POST',
                                            headers: {
                                                'Content-Type': 'application/json',
                                                'X-CSRF-TOKEN': '<?php echo e(csrf_token()); ?>' // Include CSRF token if applicable
                                            },
                                            body: JSON.stringify(data)
                                        })
                                        .then(response => {
                                            if (response.ok) {
                                                console.log('Content updated successfully!');
                                                // Optionally, you can reload the page after successful update
                                                window.location.reload();
                                            } else {
                                                console.error('Failed to update content');
                                            }
                                        })
                                        .catch(error => {
                                            console.error('Error:', error);
                                        });
                            
                                        element.contentEditable = false; // Make the element non-editable after blur
                                    }
                            
                                    // Add event listeners to make elements editable upon clicking
                                    editableElements.forEach(function(element) {
                                        element.addEventListener('click', function() {
                                            makeEditable(element);
                                        });
                            
                                        element.addEventListener('blur', function() {
                                            handleUpdate(element);
                                        });
                                    });
                                });
                            </script>           
                            <div class="col-lg-12 col-sm-12 mt-lg-4 newclasspaddingoff mb-2">
                                <span style="position: absolute; top: 10px; right: 10px; cursor: pointer;"  data-target="#eulogyvideoupdatemodal">
                                    <i class="fa fa-edit" style="color: #BE9438;" data-toggle="modal" data-target="#eulogyvideoupdatemodal"></i>
                                </span>
                            </div>                  
                            <div class="col-lg-12 col-sm-12 mt-lg-4 newclasspaddingoff">
                                <?php if(empty($eulogy->video)): ?>
                                <video width="100%" height="500" controls style="border: 1px solid #BE9438!important;" class="dummyvideooo">
                                    <source src="<?php echo e(asset('assets/dummyvideo.mp4')); ?>" type="video/mp4">
                                </video>
                                <?php else: ?>
                                <video width="100%" height="500" controls style="border: 1px solid #BE9438!important;" class="dummyvideooo">
                                    <source src="<?php echo e(asset('videoeulogys/'.$eulogy->video)); ?>" type="video/mp4">
                                </video>
                                <?php endif; ?>
                            </div>
                            <div class="modal fade" id="eulogyvideoupdatemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Update Video</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>
                                        <form action="<?php echo e(route('add_download_order_of_service_videoeulogy_euolgy')); ?>" method="POST" enctype="multipart/form-data">
                                            <div class="modal-body">
                                                <?php echo csrf_field(); ?>
                                                <div class="row">
                                                    <div class="col-lg-12 col-sm-12">
                                                        <div class="form-group">
                                                            <label for="video" class="float-left">Add Video</label>
                                                            <input class="form-control" type="file" id="video" name="video" required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer"> 
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn" style="background-color: #BE9438;width: 30%;color:#fff;font-family: 'Josefin Sans Bold';">Save</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-sm-12 mt-lg-4 p-4 newclasspaddingoff">        
                                <div class="row">
                                    <div class="col-lg-12 col-sm-12" id="memorial">
                                        <h3 class="transitionheading topaddmarginsub" style="color:#A423EB!important;" id="notices">NOTICES
                                        </h3>
                                    </div>
                                    <div class="col-lg-12 col-sm-12 text-center">
                                        <h3 class="wishesheading mt-4">CELEBRATING BREANNONS 31st BIRTHDAY:  
                                        </h3>
                                    </div>
                                    <div class="col-lg-12 col-sm-12 text-center noticestextsetiin" style="padding-right: 5px!important;">
                                        <h3 class="breesheading">Karen and Kaitlyn would like to invite close family and friends to honour Breannon’s birthday at lunch on
                                        </h3>
                                        <h3 class="breesheading">Sunday 31st December, 12pm.
                                        </h3>
                                        <h3 class="breesheading">Italian Restaurant, Broadbeach
                                        </h3>
                                        <h3 class="breesheading">(Pay for your own meals and drinks)
                                        </h3>
                                        <h3 class="breesheading"><b><a href="#" data-toggle="modal" data-target="#myrsvp" style="color:#000;">RSVP</a></b> by 20/12/23
                                        </h3>
                                        <div class="modal fade" id="myrsvp" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="myModalLabel">Choose Option</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Select an option:</p>
                                                        <a href="https://meet.google.com/" class="btn" target="_blank" style="background-image: url('<?php echo e(asset('assets/buttonbackground.PNG')); ?>');width: 40%;color:#000;border-radius: 20px;">Go to Google Meet</a>
                                                        <a href="https://www.google.com/maps" class="btn" target="_blank" style="background-image: url('<?php echo e(asset('assets/buttonbackground.PNG')); ?>');width: 40%;color:#000;border-radius: 20px;">Go to Google Maps</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-sm-12 text-center">
                                        <h3 class="wishesheading mt-4">CELEBRATING BREANNONS 1st HEAVENLY BIRTHDAY 
                                        </h3>
                                    </div>
                                    <div class="col-lg-12 col-sm-12 text-center" style="padding-right: 5px!important; padding-left:5px!important;">
                                        <h3 class="breesheading">Karen and Kaitlyn would like to invite close family and friends to honour Breannon’s anniversary online
                                        </h3>
                                        <h3 class="breesheading">Wednesday 25th August, 2024., 7pm. Online Zoom                                            .
                                        </h3>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="col-lg-12 col-sm-12 mt-4 newclasspaddingoff doanationdiv transitionlbordernone" style="border-top: 2px solid #BE9438;" id="tributes">
                                <h3 class="pagemainheading mt-3 topaddmarginsub" style="color:#A423EB!important;">TRIBUTES
                                </h3>
                            </div>
                            <div class="col-lg-12 col-sm-12 mt-4 newclasspaddingoff">
                                <div class="swiper tributeswiper mobileoff">
                                    <?php if(empty($tributes)): ?>
                                    <div class="swiper-wrapper">
                                      <div class="swiper-slide" style="border:1px solid #BE9438!important;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                                        <div class="row">
                                            <div class="col-lg-6 col-sm-6 text-left">
                                                <h4 class="tributemother">Mother</h4>
                                            </div>
                                            <div class="col-lg-6 col-sm-6">
                                                <h4 class="tributemother">Karen Schuback</h4>
                                            </div>
                                            <div class="col-lg-12 col-sm-12 text-center mt-lg-3">
                                                <p style="font-family: 'Josefin Sans Light';">Message here………
                                                </p>
                                            </div>
                                        </div>
                                      </div>
                                      <div class="swiper-slide" style="border:1px solid #BE9438!important;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                                        <div class="row">
                                            <div class="col-lg-6 col-sm-6 text-left">
                                                <h4 class="tributemother">Mother</h4>
                                            </div>
                                            <div class="col-lg-6 col-sm-6">
                                                <h4 class="tributemother">Full Name Here</h4>
                                            </div>
                                            <div class="col-lg-12 col-sm-12 text-center mt-lg-3">
                                                <p style="font-family: 'Josefin Sans Light';">Message here………
                                                </p>
                                            </div>
                                        </div>
                                      </div>
                                      <div class="swiper-slide" style="border:1px solid #BE9438!important;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                                        <div class="row">
                                            <div class="col-lg-6 col-sm-6 text-left">
                                                <h4 class="tributemother">Mother</h4>
                                            </div>
                                            <div class="col-lg-6 col-sm-6">
                                                <h4 class="tributemother">Full Name Here</h4>
                                            </div>
                                            <div class="col-lg-12 col-sm-12 text-center mt-lg-3">
                                                <p style="font-family: 'Josefin Sans Light';">Message here………
                                                </p>
                                            </div>
                                        </div>
                                      </div>
                                      <div class="swiper-slide" style="border:1px solid #BE9438!important;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                                        <div class="row">
                                            <div class="col-lg-6 col-sm-6 text-left">
                                                <h4 class="tributemother">Mother</h4>
                                            </div>
                                            <div class="col-lg-6 col-sm-6">
                                                <h4 class="tributemother">Full Name Here</h4>
                                            </div>
                                            <div class="col-lg-12 col-sm-12 text-center mt-lg-3">
                                                <p style="font-family: 'Josefin Sans Light';">Message here……….
                                                </p>
                                            </div>
                                        </div>
                                      </div>
                                      <div class="swiper-slide" style="border:1px solid #BE9438!important;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                                        <div class="row">
                                            <div class="col-lg-6 col-sm-6 text-left">
                                                <h4 class="tributemother">Mother</h4>
                                            </div>
                                            <div class="col-lg-6 col-sm-6">
                                                <h4 class="tributemother">Full Name Here</h4>
                                            </div>
                                            <div class="col-lg-12 col-sm-12 text-center mt-lg-3">
                                                <p style="font-family: 'Josefin Sans Light';">Message here……….
                                                </p>
                                            </div>
                                        </div>
                                      </div>
                                      <div class="swiper-slide" style="border:1px solid #BE9438!important;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                                        <div class="row">
                                            <div class="col-lg-6 col-sm-6 text-left">
                                                <h4 class="tributemother">Mother</h4>
                                            </div>
                                            <div class="col-lg-6 col-sm-6">
                                                <h4 class="tributemother">Full Name Here</h4>
                                            </div>
                                            <div class="col-lg-12 col-sm-12 text-center mt-lg-3">
                                                <p style="font-family: 'Josefin Sans Light';">Message here……….
                                                </p>
                                            </div>
                                        </div>
                                      </div>
                                    </div>
                                    <?php else: ?>
                                    <div class="swiper-wrapper">
                                        <?php $__currentLoopData = $tributes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tribute): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="swiper-slide" style="border:1px solid #BE9438!important;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                                          <div class="row">
                                              <div class="col-lg-6 col-sm-6 text-left">
                                                  <h4 class="tributemother"><?php echo e($tribute->name_of_mother); ?></h4>
                                              </div>
                                              <div class="col-lg-6 col-sm-6">
                                                  <h4 class="tributemother"><?php echo e($tribute->name); ?></h4>
                                              </div>
                                              <div class="col-lg-12 col-sm-12 text-center mt-lg-3">
                                                  <p style="font-family: 'Josefin Sans Light';"><?php echo e($tribute->description); ?>

                                                  </p>
                                              </div>
                                          </div>
                                        </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                      </div>
                                    <?php endif; ?>
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
                                <button class="btn btn-large contactadministration" style="background-image: url('<?php echo e(asset('assets/buttonbackground.PNG')); ?>');width: 30%;color:#000;border-radius: 20px;" data-toggle="modal" data-target="#tributesupdatemodal">ADD A TRIBUTE
                                </button>
                            </div>
                            <div class="modal fade" id="tributesupdatemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Add Tributes</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>
                                        <form action="<?php echo e(route('addtributes')); ?>" method="POST" enctype="multipart/form-data">
                                            <div class="modal-body">
                                                <?php echo csrf_field(); ?>
                                                <div class="row">
                                                    <div class="col-lg-12 col-sm-12">
                                                        <div class="form-group">
                                                            <label for="mother_name" class="float-left">Add Mother Name</label>
                                                            <input class="form-control" type="text" id="mother_name" name="mother_name" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 col-sm-12">
                                                        <div class="form-group">
                                                            <label for="name" class="float-left">Add Name</label>
                                                            <input class="form-control" type="text" id="name" name="name" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 col-sm-12">
                                                        <div class="form-group">
                                                            <label for="description" class="float-left">Add Message</label>
                                                            <textarea class="form-control" id="description" name="description" required></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer"> 
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn" style="background-color: #BE9438;width: 30%;color:#fff;font-family: 'Josefin Sans Bold';">Save</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-sm-12 mt-lg-4 newclasspaddingoff">
                                <h3 class="pagemainheading mt-3 topaddmarginsub" style="color:#A423EB!important;">MESSAGES FROM THE HONOUREE
                                </h3>
                            </div>
                            <div class="col-lg-12 col-sm-12 newclasspaddingoff">
                                <div class="swiper hououreeswiper">
                                    <div class="swiper-wrapper" style="height: 300px;">
                                      <div class="swiper-slide" style="border:2px solid #BE9438;">
                                        <p class="text-center mr-lg-5 p-lg-3" style="font-family: 'Josefin Sans Light';">
                                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quidem sunt possimus inventore culpa rem necessitatibus in rerum. Officia autem eaque voluptatibus neque exercitationem nam magni corporis consequuntur facilis repellendus? Odit!
                                        </p>
                                      </div>
                                      <div class="swiper-slide" style="border:2px solid #BE9438;">
                                        <p class="text-center mr-lg-5 p-lg-3">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio labore eligendi non quod expedita, natus aliquid iste temporibus iusto aliquam architecto facere mollitia quia numquam eveniet ipsa. Cupiditate, in eligendi.
                                        </p>
                                      </div>
                                    </div>
                                    <div class="swiper-button-next mt-lg-5"></div>
                                    <div class="swiper-button-prev mt-lg-5"></div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-sm-12 mt-4 newclasspaddingoff doanationdiv transitionlbordernone" style="border-top: 2px solid #BE9438;border-bottom: 2px solid #BE9438;">
                                <h3 class="pagemainheading mt-3 topaddmarginsub" style="color:#A423EB!important;">MAKE A DONATION
                                </h3>
                                <p class="text-center" style="font-family: 'Josefin Sans Light';">"Transform grief into action by supporting a cause close to your heart. In memory of your loved one, consider donating to a charity dedicated to researching, advocating, or providing support for the cause of their passing. Your contribution not only honours their memory but also helps others facing similar challenges. Together, let's turn loss into hope and make a difference in their honour."   
                                </p>
                                <p class="text-center">https://donate.heartfoundation.org.au 
                                </p>
                                <div class="row mb-lg-3">
                                    <div class="col-lg-12 col-sm-12 text-center">
                                        <img src="<?php echo e(asset('assets/heartfoundation.png')); ?>" class="text-center" style="width:150px;">
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
                                        <img class="product-image" src="<?php echo e(asset('assets/dummythree.jpg')); ?>" alt="Product 1">
                                        <div class="product-info">
                                          <h6>LEX HORGAN</h6>
                                          <p style="font-family: 'Josefin Sans Light';">Grandfather
                                        </p>
                                        </div>
                                      </div>
                                      <div class="slider-item">
                                        <img class="product-image" src="<?php echo e(asset('assets/dummythree.jpg')); ?>" alt="Product 2">
                                        <div class="product-info">
                                          <h6>GEOFFREY SCHUBACK
                                        </h6>
                                          <p style="font-family: 'Josefin Sans Light';">Grandfather
                                        </p>
                                        </div>
                                      </div>
                                      <div class="slider-item">
                                        <img class="product-image" src="<?php echo e(asset('assets/dummythree.jpg')); ?>" alt="Product 3">
                                        <div class="product-info">
                                          <h6>TROY SCHUBACK
                                        </h6>
                                          <p style="font-family: 'Josefin Sans Light';">Uncle</p>
                                        </div>
                                      </div>
                                      <div class="slider-item">
                                        <img class="product-image" src="<?php echo e(asset('assets/dummythree.jpg')); ?>" alt="Product 3">
                                        <div class="product-info">
                                          <h6>Second TROY SCHUBACK
                                        </h6>
                                          <p style="font-family: 'Josefin Sans Light';">Uncle</p>
                                        </div>
                                      </div>
                                    </div>
                                    
                                    <div class="swiper-button-prev relativeprev" onclick="slide(-1)"></div>
                                    <div class="swiper-button-next relativenext" onclick="slide(1)"></div>
                                </div>
                                <script>
                                    var swiper = new Swiper('.slider-container', {
                                        navigation: {
                                            nextEl: '.swiper-button-next',
                                            prevEl: '.swiper-button-prev',
                                        },
                                    });
                                </script>
                            </div>
                            <div class="col-lg-12 col-sm-12 text-center mt-3 newclasspaddingoff">
                                <button class="btn btn-large contactadministration" style="background-image: url('<?php echo e(asset('assets/buttonbackground.PNG')); ?>');width: 30%;color:#000;border-radius: 20px;font-family: 'Josefin Sans Bold';">LINK A PAGE
                                </button>
                            </div>
                            <div class="col-lg-12 col-sm-12 mt-2 newclasspaddingoff">
                                <h3 class="pagemainheading mt-2 topaddmarginsub" style="color:#A423EB!important;">RECENT ACTIVITY
                                </h3>
                            </div>
                            <div class="col-lg-12 col-sm-12 mt-2 newclasspaddingoff">
                                <div class="table-responsive table-small">
                                    <table class="table" style="border: 2px solid #BE9438!important;">
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
                                <button class="btn btn-large contactadministration" style="background-image: url('<?php echo e(asset('assets/buttonbackground.PNG')); ?>');width: 30%;color:#000;border-radius: 20px;font-family: 'Josefin Sans Bold';">CREATE A PAGE
                                </button>
                            </div>
                            <div class="col-lg-12 col-sm-12 mt-3 newclasspaddingoff" id="contact">
                                <h3 class="pagemainheading mt-3 topaddmarginsub" style="color:#A423EB!important;">SHARE THIS PAGE
                                </h3>
                            </div>
                            <div class="col-lg-4 col-sm-4 mt-2 qrcodediv newclasspaddingoff">
                                <img src="<?php echo e(asset('assets/qr.png')); ?>" class="qrimageheightset" style="width: 100%; height: 218px;border: 1px solid #BE9438!important;">
                            </div>
                            <div class="col-lg-8 col-sm-8 mt-2 ">
                                <div class="row">
                                    <div class="col-lg-12 col-sm-12 text-center p-5 lastnotifybox" style="border: 1px solid #BE9438;">
                                        <div class="row">
                                            <div class="col-2">
                                                <div class="heightscoailset" style="background-image: url('<?php echo e(asset('assets/iconbackground.PNG')); ?>');height: 50px;padding: 15px;width: 50px;border-radius: 31px">
                                                    <i class="fa fa-facebook text-white heightscoailseticon" style="font-size:25px;"></i>
                                                </div>
                                            </div>
                                            <div class="col-2">
                                                <div class="heightscoailset" style="background-image: url('<?php echo e(asset('assets/iconbackground.PNG')); ?>');height: 50px;padding: 15px;width: 50px;border-radius: 31px">
                                                    <i class="fa fa-instagram text-white heightscoailseticon" style="font-size:25px;"></i>
                                                </div>
                                            </div>
                                            <div class="col-2">
                                                <div class="heightscoailset" style="background-image: url('<?php echo e(asset('assets/iconbackground.PNG')); ?>');height: 50px;padding: 15px;width: 50px;border-radius: 31px">
                                                    <i class="fa fa-linkedin text-white heightscoailseticon" style="font-size:25px;"></i>
                                                </div>
                                            </div>
                                            <div class="col-2">
                                                <div class="heightscoailset" style="background-image: url('<?php echo e(asset('assets/iconbackground.PNG')); ?>');height: 50px;padding: 15px;width: 50px;border-radius: 31px">
                                                    <i class="fa fa-whatsapp text-white heightscoailseticon" style="font-size:25px;"></i>
                                                </div>
                                            </div>
                                            <div class="col-2">
                                                <div class="heightscoailset" style="background-image: url('<?php echo e(asset('assets/iconbackground.PNG')); ?>');height: 50px;padding: 15px;width: 50px;border-radius: 31px">
                                                    <i class="fa fa-snapchat text-white heightscoailseticon" style="font-size:25px;"></i>
                                                </div>
                                            </div>
                                            <div class="col-2">
                                                <div class="heightscoailset" style="background-image: url('<?php echo e(asset('assets/iconbackground.PNG')); ?>');height: 50px;padding: 15px;width: 50px;border-radius: 31px">
                                                    <i class="fa fa-youtube-play text-white heightscoailseticon" style="font-size:25px;"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mobileoff">
                                            <div class="col-lg-6 col-sm-12 offset-lg-3">
                                                <p class="pb-0 mb-0 pagenotify mt-3" style="font-family: 'Josefin Sans Light';text-align:center;">Notify me when page updates</p>
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
                                                    <button class="btn notifybutton"><i class="fa fa-arrow-right" style="color:#000;"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-sm-12 text-center mt-4 mb-lg-3">
                                <button class="btn btn-large contactadministration topcontactadministrationbottom" style="background-image: url('<?php echo e(asset('assets/buttonbackground.PNG')); ?>');width: 30%;color:#000;border-radius: 20px;font-family: 'Josefin Sans Bold';">EMAIL ADMINISTRATORS
                                </button>
                            </div>
                            <div class="col-lg-12 col-sm-12 mt-3 footerlast" style="border: 1px solid #BE9438!important;background-color: lightgrey;">
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
                                                      <a class="nav-link active" href="#ganerall" style="color: #000;padding-bottom: 0px;font-family: 'Josefin Sans Light';">GENERAL KNOWLEDGE</a>
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <?php if(session('success')): ?>
        <script>
            toastr.success('<?php echo e(session('success')); ?>', 'Success');
        </script>
    <?php endif; ?>
    
    <?php if(session('error')): ?>
        <script>
            toastr.error('<?php echo e(session('error')); ?>', 'Error');
        </script>
    <?php endif; ?>

    <?php if($errors->any()): ?>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <script>
                toastr.error('<?php echo e($error); ?>', 'Error');
            </script>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
</body>

</html><?php /**PATH G:\laragon\www\memorial_website\project\memorial\resources\views/Frontend/pageone.blade.php ENDPATH**/ ?>
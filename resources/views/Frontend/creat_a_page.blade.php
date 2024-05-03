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
    <link rel="stylesheet" href="{{asset('css/create_page.css')}}">

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
                                        <a class="navbar-brand" href="{{route('home')}}"
                                            style="font-family: 'Josefin Sans Bold';">A Life Worth Remembering</a>
                                    </nav>
                                </div>
                                <div class="col-lg-6 col-sm-12 mt-lg-2 mb-lg-5">
                                    <nav class="navbar navbar-expand-lg navbar-light bg-white">
                                        <a class="navbar-brand mobileon" href="{{route('home')}}"
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
                                                    <a class="nav-link navlinks" href="{{route('login')}}">LOG IN</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link navlinks" href="{{route('create_page')}}">CREATE
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
                                        <a class="navbar-brand" href="{{route('home')}}"
                                            style="font-family: 'Josefin Sans Bold';">A Life Worth Remembering</a>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-sm-12">
                                <!--<h2 class="ml-lg-4 mb-3 createammeorialwebsitetotitl">CREATE A MEMORIAL WEBSITE</h2>-->
                                <h2 class="ml-lg-4 mb-3 createammeorialwebsitetotitl" style="color:#BE9438;">Celebrating
                                    the life of William</h2>
                                <form method="POST" action="{{route('save_page')}}" id="signup-form"
                                    class="signup-form">
                                    @csrf

                                    <h3>
                                        <span class="title_text" style="font-family: 'Josefin Sans Bold';">About the
                                            honouree</span>
                                    </h3>
                                    <fieldset>
                                        <div class="fieldset-content fieldset-contenthwight" style="height:300px;">
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
                                                            <span class="input-group-text"
                                                                style="font-size:13px;background-color: #e9ecef00;border: 1px solid #ced4da00; font-family: 'Josefin Sans Light';">.memorial.com</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
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
                                                    <input type="hidden" name="to_buy_plan_id" id="to_buy_plan_id">
                                                    @foreach ($plans as $plan)
                                                    <div class="col-lg-6 col-sm-12">
                                                        <div class="card mt-3"
                                                            style="background-color: #fff; border-radius:18px;">
                                                            <div class="card-header text-center"
                                                                style="background-color: #fff; border:0px;border-radius:18px;">
                                                                <span class="text-center newheading mb-5">
                                                                    {{ strtoupper($plan->duration) }}</span>
                                                                <p class="text-center mt-3"
                                                                    style="font-size:40px;font-weight: 700;color:#BE9438;font-family: 'Josefin Sans Light';">
                                                                    ${{$plan->price}}</p>
                                                            </div>

                                                            <div class="card-body reposdivecardheight"
                                                                style="height: 300px;">
                                                                <!-- Use a <div> element styled to look like a button -->
                                                                <div class="select-plan-btn"
    data-plan-id="{{$plan->id}}"
    data-price="{{$plan->price}}"
    style="width:100%; background-color: #BE9438; color: #fff; font-family: 'Josefin Sans Light'; cursor: pointer; padding: 10px; text-align: center; border-radius: 5px;">
    Select
</div>

                                                                <p class="mt-3"
                                                                    style="font-size:16px;color:#000; font-weight: 500;margin-top:20px;font-family: 'Josefin Sans Light';">
                                                                    <b>{{$plan->features}}</b>
                                                                </p>
                                                                <p class="text-muted mt-2"
                                                                    style="font-family: 'Josefin Sans Light';">
                                                                    {{$plan->description}}</p>
                                                                <!-- <p class="text-muted mt-3" style="font-family: 'Josefin Sans Light';">Renews monthly.</p> -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endforeach
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
                                        <div class="fieldset-content responsiveinvisible" style="height:401px;">
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
                                        <div class="fieldset-content lastformheightset" style="height:200px;">
                                            <div class="row">
                                                <div class="col-lg-6 col-sm-12">
                                                    <label for="name" class="form-label"
                                                        style="text-align:left;font-size:13px;">Name</label>
                                                    <input type="text" name="name" id="name" placeholder="Name" />
                                                </div>
                                                <div class="col-lg-6 col-sm-12">
                                                    <label class="form-label"
                                                        style="text-align:left;font-size:13px;">Email</label>
                                                    <input type="email" name="email" placeholder="Email" />
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
            $('#signup-form').submit(); // Submit the form
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

</html>
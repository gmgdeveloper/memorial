<!DOCTYPE html>
<html>

<head>
    <title>A life Worth Remembering</title>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
    <link href="<?php echo e(asset('css/frontendlogin.css')); ?>" rel="stylesheet">

</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 mb-4">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-sm-6 mobileoff">
                                    <nav class="navbar navbar-expand-lg navbar-light bg-white">
                                        <a class="navbar-brand" href="<?php echo e(route('home')); ?>" style="font-family: 'Josefin Sans Bold';">A Life Worth Remembering</a>
                                    </nav>
                                </div>
                                <div class="col-lg-6 col-sm-12 mt-lg-2 mb-lg-5">
                                    <nav class="navbar navbar-expand-lg navbar-light bg-white">
                                         <a class="navbar-brand mobileon" href="<?php echo e(route('home')); ?>" style="font-family: 'Josefin Sans Bold';display:none;">A Life Worth Remembering</a>
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
                                                    <a class="nav-link navlinks" href="<?php echo e(route('create_page')); ?>">CREATE A PAGE</a>
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
                                        <a class="navbar-brand" href="<?php echo e(route('home')); ?>" style="font-family: 'Josefin Sans Bold';">A Life Worth Remembering</a>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="container p-lg-5">
                            <div class="row p-lg-5" style="border: 2px solid #BE9438;">
                                <div class="col-lg-12 col-sm-12">
                                    <div class="row">
                                        
                                        <div class="col-lg-7 col-sm-6 mt-5">
                                            <h3 class="loginheading text-right mt-lg-5" style="color:#BE9438;">
                                                LOG IN
                                            </h3>
                                        </div>
                                        <div class="col-lg-5 col-sm-6 text-right mb-4 heartinmg">
                                            <img src="assets/heart.png" class="img-fluid heartinmg" style="width:180px;">
                                        </div>
                                        <div class="col-lg-2 mt-2">
                                            <h5 class="mt-2 bottommargindh" style="font-family: 'Josefin Sans Bold';font-size: 18px;">FULL NAME</h5>
                                        </div>
                                        <div class="col-lg-10 mt-2">
                                            <input type="text" class="form-control" name="fullname" style="border: 2px solid #BE9438;" placeholder="Full Name">
                                            <p class="text-muted" style="font-family: 'Josefin Sans Light';margin-bottom:2px;">(Entry into the site will automatically add your name to the guest book)</p>
                                        </div>
                                        <div class="col-lg-2">
                                            <h5 class="mt-2 bottommargindh" style="font-family: 'Josefin Sans Bold';font-size: 18px;">EMAIL</h5>
                                        </div>
                                        <div class="col-lg-10 mt-2 mb-2">
                                            <input type="email" class="form-control" name="email" style="border: 2px solid #BE9438;" placeholder="Email">
                                        </div>
                                        <div class="col-lg-2 mt-2">
                                            <h5 class="mt-2 bottommargindh" style="font-family: 'Josefin Sans Bold';font-size: 18px;">HONOUREE</h5>
                                        </div>
                                        <div class="col-lg-10 mt-2 mb-2">
                                            <input type="text" class="form-control" name="honouree" style="border: 2px solid #BE9438;"  placeholder="Honouree">
                                        </div>
                                        <div class="col-lg-2 mt-2">
                                            <h5 class="mt-2 bottommargindh" style="font-family: 'Josefin Sans Bold';font-size: 18px;">RELATIONSHIP</h5>
                                        </div>
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
                                        <div class="col-lg-2">
                                            <h5 class="mt-2 addbottommargindh" style="font-family: 'Josefin Sans Bold';font-size: 18px;">ACCESS CODE</h5>
                                        </div>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" name="accesscode" style="border: 2px solid #BE9438;"  placeholder="Access code">
                                            <p class="text-muted" style="font-family: 'Josefin Sans Light';">(Provide by page the administrators) Not required for public pages</p>
                                        </div>
                                        <div class="col-lg-12 mt-2">
                                            <h5 class="securityloginheading text-center" style="font-weight:bold;font-family: 'Josefin Sans Bold';">
                                                Security check
                                            </h5>
                                        </div>
                                        <div class="col-lg-1 col-sm-1 widthsetingcheck" style="padding-right: 0px!Important;">
                                            <input type="checkbox" class="form-control float-right mr-2 mt-1 margintopchecking" name="privacy_policy" style="border-color:#BE9438;width: 25px;height: 35px;" required>
                                        </div>
                                        <div class="col-lg-11 col-sm-11 widthseting" style="padding-left: 0px!Important;">
                                            <p class="mt-1 text-muted widthsetingtext" style="font-family: 'Josefin Sans Light';">Entering this site is confirmation that I accept 'A life Worth Remembring' Terms, Conditions and Privacy Policy</p>
                                        </div>
                                        <div class="col-lg-1 col-sm-1 mt-2 widthsetingcheck" style="padding-right: 0px!Important;">
                                            <input type="checkbox" class="form-control float-right mr-2 margintopchecking" name="privacy_policy" style="border-color:#BE9438;width: 25px;height: 35px;">
                                        </div>
                                        <div class="col-lg-11 col-sm-11 mt-2 widthseting" style="padding-left: 0px!Important;">
                                            <p class="mt-1 text-muted widthsetingtext" style="font-family: 'Josefin Sans Light';">I accept accasional marketing emails from 'A Life Worth Remembring'</p>
                                        </div>
                                        <div class="col-lg-5 col-sm-5 offset-lg-1 mt-2">
                                            <button class="btn btn-large  login-butn mb-4" style="font-weight:bold;border-radius:20px;width:100%;background-color:#BE9438;border-color: #BE9438;font-family: 'Josefin Sans Bold';">LOG IN</button>
                                        </div>


                                        <div class="col-lg-5 col-sm-5 mt-2">
                                            <button class="btn btn-large mb-4" style="font-weight:bold;border-radius:20px;width:100%;background-color:#BE9438;border-color: #BE9438;font-family: 'Josefin Sans Bold';">REQUEST ACCESS</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-sm-12 text-center">
                                    <p class="text-muted text-center mt-4" style="font-family: 'Josefin Sans Light';">This page was created by GMG Solutions 2024</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

   
   
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
    $(document).ready(function(){
        $(".login-butn").click(function(){
            // Get CSRF token value from meta tag
            var csrfToken = $('meta[name="csrf-token"]').attr('content');

            // Get form data
            var fullname = $("input[name='fullname']").val();
            var email = $("input[name='email']").val();
            var honouree = $("input[name='honouree']").val();
            var relationship = $("select[name='relationship']").val();
            var accesscode = $("input[name='accesscode']").val();
            
            // Prepare data for sending
            var formData = {
                fullname: fullname,
                email: email,
                honouree: honouree,
                relationship: relationship,
                accesscode: accesscode
            };
            
            // Send data to the server with CSRF token included
            $.ajax({
                type: "POST",
                url: "<?php echo e(route('frontend_login')); ?>", // Replace "frontend_login" with the actual server endpoint
                data: formData,
                headers: {
                    'X-CSRF-TOKEN': csrfToken
                },
                success: function(response){
                    if(response.success){
                    // Redirect to the desired page
                    window.location.href = '<?php echo e(route("pageone")); ?>';
                } else {
                    // Handle unsuccessful login
                    console.error('Login unsuccessful');
                }

                },
                error: function(xhr, status, error){
                    // Handle errors
                    console.error(xhr.responseText);
                }
            });
        });
    });
</script>



<!-- Other scripts -->
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

</html><?php /**PATH D:\laragon\www\gmg solution\m1\memorial\resources\views/Frontend/login.blade.php ENDPATH**/ ?>
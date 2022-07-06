<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="SemiColonWeb" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <!-- Stylesheets
    ============================================= -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Poppins:300,400,500,600,700|PT+Serif:400,400i&display=swap" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/font-icons.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}" type="text/css" />

    <!-- DatePicker CSS -->
    <link rel="stylesheet" href="{{ asset('css/components/datepicker.css') }}" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Document Title
    ============================================= -->
    <title>Customer Feedback Form  - Forms | CMS</title>

    <style>
        .form-group > label.error {
            display: block !important;
            text-transform: none;
        }

        .form-group input.valid ~ label.error,
        .form-group input[type="text"] ~ label.error,
        .form-group input[type="email"] ~ label.error,
        .form-group input[type="number"] ~ label.error,
        .form-group select ~ label.error { display: none !important;
        }
        #message .show{
            display: block !important;
        }

        #message .hide{
            display: none !important;
        }
    </style>

</head>

<body class="stretched">

<!-- Document Wrapper
============================================= -->
<div id="wrapper" class="clearfix">

    <!-- Header
    ============================================= -->
    <header id="header" class="full-header">
        <div id="header-wrap">
            <div class="container">
                <div class="header-row">

                    <!-- Logo
                    ============================================= -->
                    <div id="logo">
                        <a href="#" class="standard-logo" data-dark-logo="{{ asset('logo.jpeg') }}"><img src="{{ asset('logo.jpeg') }}" alt="CMS Logo"></a>
                    </div><!-- #logo end -->

                    <div id="primary-menu-trigger">
                        <svg class="svg-trigger" viewBox="0 0 100 100"><path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path><path d="m 30,50 h 40"></path><path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path></svg>
                    </div>

                    <!-- Primary Navigation
                    ============================================= -->
                    <nav class="primary-menu">

                        <ul class="menu-container">

                        </ul>

                    </nav><!-- #primary-menu end -->

                </div>
            </div>
        </div>
        <div class="header-wrap-clone"></div>
    </header><!-- #header end -->

    <!-- Page Title
    ============================================= -->
    <section id="page-title" class="page-title-center">

        <div class="container clearfix">
            <h1>Customer Feedback Form </h1>
        </div>

    </section><!-- #page-title end -->

    <!-- Content
    ============================================= -->
    <section id="content">
        <div class="content-wrap">
            <div class="container clearfix">

                <div class="form-widget" data-alert-type="false">

                    <div class="form-result"></div>

                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-md-8 col-sm-8 ">

                            <div class="alert alert-success alert-dismissible" role="alert" id="successMessage" style="display: none" >
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <p>Thank you for choosing CMS HOUSEKEEPING SERVICE. It is our great pleasure to provide you the best quality of service always.
                                    Your assistance in completing this form is greatly appreciated. Your honest feedback will help us to serve you better and enable us to work on improving our service standards. Thank you.
                                </p>
                            </div>

                            <form class="row" id="formSubmit" action="{{ route('feedback.store') }}" method="POST">
                            @csrf
                                <div class="form-process">
                                    <div class="css3-spinner">
                                        <div class="css3-spinner-scaler"></div>
                                    </div>
                                </div>
                                <div class="col-6 form-group">
                                    <label>Contact Person Name:</label>
                                    <input type="text" name="name" id="name" class="form-control required" value="" placeholder="Enter your Full Name">
                                </div>
                                <div class="col-6 form-group">
                                    <label>Organization Name:</label>
                                    <input type="text" name="organization" id="organization" class="form-control required" value="" placeholder="Enter your Organization Name">
                                </div>
                                <div class="col-6 form-group">
                                    <label>Email:</label>
                                    <input type="email" name="email" id="email" class="form-control required" value="" placeholder="Enter your Email">
                                </div>
                                <div class="col-6 form-group">
                                    <label>Mobile No:</label>
                                    <input type="number" name="mobile" id="mobile" class="form-control required" value="" placeholder="Enter your Mobile Number">
                                </div>
                                <div class="col-6 form-group">
                                    <label>Date:</label>
                                    <input type="text" class="form-control datepicker required" name="date" id="date" value="" placeholder="MM/DD/YYYY" data-date-start-date="-2m" data-date-end-date="0d">
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Supervisor’s management and assistance:</label>
                                        <div class="btn-group d-flex" role="group">
                                            <input type="radio" class="btn-check required" name="supervisor" id="supervisor-1" value="Excellent">
                                            <label class="btn btn-outline-success" for="supervisor-1"><i class="icon-grin-beam1"></i>Excellent</label>

                                            <input type="radio" class="btn-check required" name="supervisor" id="supervisor-2" value="Good">
                                            <label class="btn btn-outline-info" for="supervisor-2"><i class="icon-smile1"></i>Good</label>

                                            <input type="radio" class="btn-check required" name="supervisor" id="supervisor-3" value="Fair">
                                            <label class="btn btn-outline-warning" for="supervisor-3"><i class="icon-meh1"></i>Fair</label>

                                            <input type="radio" class="btn-check required" name="supervisor" id="supervisor-4" value="Poor">
                                            <label class="btn btn-outline-danger" for="supervisor-4"><i class="icon-frown1"></i>Poor</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Staff’s professionalism and aptitude:</label>
                                        <div class="btn-group d-flex">
                                            <input type="radio" class="btn-check required" name="staff" id="staff-1" value="Excellent">
                                            <label class="btn btn-outline-success" for="staff-1"><i class="icon-grin-beam1"></i>Excellent</label>

                                            <input type="radio" class="btn-check required" name="staff" id="staff-2" value="Good">
                                            <label class="btn btn-outline-info" for="staff-2"><i class="icon-smile1"></i>Good</label>

                                            <input type="radio" class="btn-check required" name="staff" id="staff-3" value="Fair">
                                            <label class="btn btn-outline-warning" for="staff-3"><i class="icon-meh1"></i>Fair</label>

                                            <input type="radio" class="btn-check required" name="staff" id="staff-4" value="Poor">
                                            <label class="btn btn-outline-danger" for="staff-4"><i class="icon-frown1"></i>Poor</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Neatness & Clearance Area:</label>
                                        <div class="btn-group d-flex">
                                            <input type="radio" class="btn-check required" name="neatness" id="neatness-1" value="Excellent">
                                            <label class="btn btn-outline-success" for="neatness-1"><i class="icon-grin-beam1"></i>Excellent</label>

                                            <input type="radio" class="btn-check required" name="neatness" id="neatness-2" value="Good">
                                            <label class="btn btn-outline-info" for="neatness-2"><i class="icon-smile1"></i>Good</label>

                                            <input type="radio" class="btn-check required" name="neatness" id="neatness-3" value="Fair">
                                            <label class="btn btn-outline-warning" for="neatness-3"><i class="icon-meh1"></i>Fair</label>

                                            <input type="radio" class="btn-check required" name="neatness" id="neatness-4" value="Poor">
                                            <label class="btn btn-outline-danger" for="neatness-4"><i class="icon-frown1"></i>Poor</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>How will you rate our overall quality of our Cleaning Service?</label>
                                        <div class="btn-group d-flex">
                                            <input type="radio" class="btn-check required" name="rate" id="rate-1" value="Excellent">
                                            <label class="btn btn-outline-success" for="rate-1"><i class="icon-grin-beam1"></i>Excellent</label>

                                            <input type="radio" class="btn-check required" name="rate" id="rate-2" value="Good">
                                            <label class="btn btn-outline-info" for="rate-2"><i class="icon-smile1"></i>Good</label>

                                            <input type="radio" class="btn-check required" name="rate" id="rate-3" value="Fair">
                                            <label class="btn btn-outline-warning" for="rate-3"><i class="icon-meh1"></i>Fair</label>

                                            <input type="radio" class="btn-check required" name="rate" id="rate-4" value="Poor">
                                            <label class="btn btn-outline-danger" for="rate-4"><i class="icon-frown1"></i>Poor</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 form-group">
                                    <label>More Feedback:</label>
                                    <textarea name="feedback" id="feedback" class="form-control required" cols="30" rows="8"></textarea>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-success">Submit Feedback</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- #content end -->

    <!-- Footer
    ============================================= -->
    <footer id="footer" class="dark">
        <!-- Copyrights
        ============================================= -->
        <div id="copyrights">
            <div class="container">

                <div class="row col-mb-30">

                    <div class="col-md-6 text-center text-md-start">
                        Copyrights &copy; {{ date('Y') }} All Rights Reserved by CMS NEPAL PVT.LTD.<br>
                    </div>

                    <div class="col-md-6 text-center text-md-end">
                        <i class="icon-envelope2"></i> housekeeping@cmsnpl.com.np <span class="middot">&middot;</span> <i class="icon-headphones"></i> +977-9802074181
                    </div>

                </div>

            </div>
        </div><!-- #copyrights end -->
    </footer><!-- #footer end -->

</div><!-- #wrapper end -->

<!-- Go To Top
============================================= -->
<div id="gotoTop" class="icon-angle-up"></div>

<!-- JavaScripts
============================================= -->
<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('js/plugins.min.js') }}"></script>

<!-- DatePicker JS -->
<script src="{{ asset('js/components/datepicker.js') }}"></script>

<!-- Footer Scripts
============================================= -->
<script src="{{ asset('js/functions.js') }}"></script>

<script>
    jQuery(document).ready( function(){
        $('.datepicker').datepicker({
            autoclose: true
        });
        $('form#formSubmit').submit(function () {
            var formData = $(this).serialize();
            var xhr = $.ajax({
                type: "POST",
                url: "{{ route("feedback.store") }}",
                data: formData,
                success:function(response){
                    console.log(response);
                        $('#successMessage').show();
                        // $("#feedback-form")[0].reset();
                },
                // success: function (msg) {
                //     if (msg == 'OK') {
                //         console.log(msg)
                //         $("#successMessage").show();
                //         // $("#name").val('');
                //         // $("#email").val('');
                //         // $("#mobile").val('');
                //         // $("#date").val('');
                //         // $("#organization").val('');
                //         // $("#supervisor").val('');
                //         // $("#staff").val('');
                //         // $("#rate").val('');
                //         // $("#neatness").val('');
                //         // $("#feedback").val('');
                //     } else {
                //         $("#successMessage").hide();
                //     }
                //
                // }
            });
            return false;
        });
    })
</script>

</body>
</html>

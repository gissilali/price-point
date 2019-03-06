<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Wilio Survey, Quotation, Review and Register form Wizard by Ansonika.">
    <meta name="author" content="Ansonika">
    <title>{{ config('app.name') }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,500,600" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="{{ asset('survey/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('survey/css/menu.css') }}" rel="stylesheet">
    <link href="{{ asset('survey/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('survey/css/vendors.css') }}" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="{{ asset('survey/css/custom.css') }}" rel="stylesheet">

    <!-- MODERNIZR MENU -->
    <script src="{{asset('survey/js/modernizr.js') }}"></script>
</head>

<body>
<div id="app">
    <div id="loader_form">
        <div data-loader="circle-side-2"></div>
    </div>

    <nav>
        <ul class="cd-primary-nav">
            <li><a href="index.html" class="animated_link">Home</a></li>
            <li><a href="quotation-wizard-version.html" class="animated_link">Quote Version</a></li>
            <li><a href="review-wizard-version.html" class="animated_link">Review Version</a></li>
            <li><a href="registration-wizard-version.html" class="animated_link">Registration Version</a></li>
            <li><a href="about.html" class="animated_link">About Us</a></li>
            <li><a href="contacts.html" class="animated_link">Contact Us</a></li>
        </ul>
    </nav>

    <div class="container-fluid full-height">
        <div class="row row-height">
            <div class="col-lg-4 content-left">
                <div class="content-left-wrapper">
                    <a href="index.html" id="logo"><img src="img/logo.png" alt="" width="49" height="35"></a>
                    <div id="social">
                        <ul>
                            <li><a href="index.html#0"><i class="icon-facebook"></i></a></li>
                            <li><a href="index.html#0"><i class="icon-twitter"></i></a></li>
                            <li><a href="index.html#0"><i class="icon-google"></i></a></li>
                            <li><a href="index.html#0"><i class="icon-linkedin"></i></a></li>
                        </ul>
                    </div>
                    <!-- /social -->
                    <div>
                        <figure><img src="{{ asset('survey/img/info_graphic_1.svg') }}" alt="" class="img-fluid"></figure>
                        <h2>Satisfaction Survey</h2>
                        <p>Tation argumentum et usu, dicit viderer evertitur te has. Eu dictas concludaturque usu, facete detracto patrioque an per, lucilius pertinacia eu vel. Adhuc invidunt duo ex. Eu tantas dolorum ullamcorper qui.</p>
                        <a href="https://themeforest.net/item/wilio-survey-and-multipurpose-form-wizard/22864819?ref=ansonika" class="btn_1 rounded" target="_parent">Purchase this template</a>
                        <a href="index.html#start" class="btn_1 rounded mobile_btn">Start Now!</a>
                    </div>
                    <div class="copy">© 2018 Wilio</div>
                </div>
                <!-- /content-left-wrapper -->
            </div>
            <!-- /content-left -->

            <div class="col-lg-8 content-right" id="start">
                @yield("content")
            </div>
            <!-- /content-right-->
        </div>
        <!-- /row-->
    </div>

    <div class="cd-overlay-nav">
        <span></span>
    </div>
    <!-- /cd-overlay-nav -->

    <div class="cd-overlay-content">
        <span></span>
    </div>
</div>
<!-- /menu button -->
<!-- COMMON SCRIPTS -->
<script src="{{ asset('survey/js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('survey/js/common_scripts.min.js') }}"></script>
<script src="{{ asset('survey/js/velocity.min.js') }}"></script>
<script src="{{ asset('survey/js/functions.js') }}"></script>

<!-- Wizard script -->
<script src="{{ asset('survey/js/survey_func.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
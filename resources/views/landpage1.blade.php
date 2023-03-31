@extends('layouts.master2')
@section('css')
    <!--- Internal Fontawesome css-->
    <link href="{{ URL::asset('assets/plugins/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <!---Ionicons css-->
    <link href="{{ URL::asset('assets/plugins/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
    <!---Internal Typicons css-->
    <link href="{{ URL::asset('assets/plugins/typicons.font/typicons.css') }}" rel="stylesheet">
    <!---Internal Feather css-->
    <link href="{{ URL::asset('assets/plugins/feather/feather.css') }}" rel="stylesheet">
    <!---Internal Falg-icons css-->
    <link href="{{ URL::asset('assets/plugins/flag-icon-css/css/flag-icon.min.css') }}" rel="stylesheet">
@endsection
@section('content')
    <div class="landing-top-header overflow-hidden">
        <div class="jumps-prevent" style="padding-top: 55.5px;"></div>
        <div class="demo-screen-headline main-demo main-demo-1 spacing-top overflow-hidden reveal active" id="home">
            <div class="container px-sm-0">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 animation-zidex pos-relative">
                        <h4 class="fw-semibold mt-7">Manage Your Business</h4>
                        <h1 class="text-start fw-bold">We Help to Build Your Dream Project with Valex !</h1>
                        <h6 class="pb-3"> Valex - Now you can use this admin template to design stunning
                            dashboards that will wow your target viewers or users to no end. To create a good and
                            well-structured dashboard, you need to start from scratch with HTML, SCSS, CSS, and JS
                            and with lots of coding, but by using this Valex-Admin template.</h6> <a href="index.html"
                            target="_blank" class="btn ripple btn-min w-lg mb-3 me-2 btn-primary"><i
                                class="fe fe-play me-2"></i>
                            Get Started </a> <a href="https://themeforest.net/user/spruko/portfolio"
                            class="btn ripple btn-min w-lg btn-outline-primary mb-3 me-2" target="_blank"><i
                                class="fe fe-eye me-2"></i>Discover More </a>
                    </div>
                    <div class="col-xl-6 col-lg-6 my-auto"> <img src="../assets/img/pngs/14.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--app-content open-->

    <!-- ROW-2 OPEN -->
    <div class="sptb section bg-white-2" id="Features">
        <div class="container">
            <div class="row">
                <h4 class="text-center fw-semibold landing-card-header">Features</h4> <span class="landing-title"></span>
                <h2 class="fw-semibold text-center">Valex Main Features</h2>
                <p class="text-default mb-5 text-center">The Valex admin template comes with ready-to-use
                    features that are completely easy-to-use for any user, even for a beginner.</p>
                <div class="row mt-7">
                    <div class="col-lg-6 col-md-12">
                        <div class="card features main-features main-features-4 wow fadeInUp reveal revealleft active p-4"
                            data-wow-delay="0.1s">
                            <div class="bg-img mb-2 text-left"> <svg width="50" height="50"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128">
                                    <circle cx="64" cy="64" r="64" fill="#42A3DB">
                                    </circle>
                                    <path fill="#347CBE"
                                        d="M85.5 26.6 66.1 61 33.3 98.6 62.6 128H64c33.7 0 61.3-26 63.8-59.1L85.5 26.6z">
                                    </path>
                                    <path fill="#CD2F30"
                                        d="M73.1 57.7h-16c3.6 18.7 11.1 36.6 22.1 52.5.3-5 1-9.8 1.8-14.5 4.6 1.3 9.2 2.3 13.7 3-9.7-12.2-17-26.1-21.6-41z">
                                    </path>
                                    <path fill="#F04D45"
                                        d="M54.9 57.7c-4.6 15-11.9 28.9-21.6 40.9 4.5-.7 9.1-1.7 13.7-3 .9 4.7 1.5 9.5 1.8 14.5 11-15.9 18.4-33.8 22.1-52.5h-16z">
                                    </path>
                                    <path fill="#FFF"
                                        d="M93.5 52c1.8-1.8 1.8-4.7 0-6.5-1.3-1.3-1.7-3.3-1-5 1-2.4-.1-5-2.5-6-1.7-.7-2.8-2.4-2.8-4.3 0-2.5-2.1-4.6-4.6-4.6-1.9 0-3.5-1.1-4.3-2.8-1-2.4-3.7-3.5-6-2.5-1.7.7-3.7.3-5-1-1.8-1.8-4.7-1.8-6.5 0-1.3 1.3-3.3 1.7-5 1-2.4-1-5 .1-6 2.5-.7 1.7-2.4 2.8-4.3 2.8-2.5 0-4.6 2.1-4.6 4.6 0 1.9-1.1 3.5-2.8 4.3-2.4 1-3.5 3.7-2.5 6 .7 1.7.3 3.7-1 5-1.8 1.8-1.8 4.7 0 6.5 1.3 1.3 1.7 3.3 1 5-1 2.4.1 5 2.5 6 1.7.7 2.8 2.4 2.8 4.3 0 2.5 2.1 4.6 4.6 4.6 1.9 0 3.5 1.1 4.3 2.8 1 2.4 3.7 3.5 6 2.5 1.7-.7 3.7-.3 5 1 1.8 1.8 4.7 1.8 6.5 0 1.3-1.3 3.3-1.7 5-1 2.4 1 5-.1 6-2.5.7-1.7 2.4-2.8 4.3-2.8 2.5 0 4.6-2.1 4.6-4.6 0-1.9 1.1-3.5 2.8-4.3 2.4-1 3.5-3.7 2.5-6-.7-1.7-.3-3.7 1-5z">
                                    </path>
                                    <path fill="#FFCD0A"
                                        d="M64 70.8c-12.2 0-22.1-9.9-22.1-22.1 0-12.2 9.9-22.1 22.1-22.1 12.2 0 22.1 9.9 22.1 22.1 0 12.2-9.9 22.1-22.1 22.1z">
                                    </path>
                                    <path fill="#FFF"
                                        d="M59.9 61c-.6 0-1.1-.2-1.5-.7l-8.3-9.2c-.7-.8-.7-2.1.1-2.8.8-.7 2.1-.7 2.8.1l6.7 7.5 15.1-18.8c.7-.9 2-1 2.8-.3.9.7 1 2 .3 2.8L61.4 60.2c-.3.5-.9.8-1.5.8z">
                                    </path>
                                </svg> </div>
                            <div class="text-left">
                                <h4 class="fw-bold">Quality &amp; Clean Code</h4>
                                <p class="mb-0">The Valex admin code is maintained very cleanly and
                                    well-structured with proper comments. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="card features main-features main-features-2 wow fadeInUp reveal revealleft active p-4"
                            data-wow-delay="0.1s">
                            <div class="bg-img mb-2 text-left"> <svg width="50" height="50"
                                    xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 128 128"
                                    viewBox="0 0 128 128">
                                    <circle cx="64" cy="64" r="63.5" fill="#54C0EB">
                                    </circle>
                                    <path fill="#84DBFF"
                                        d="M19.2,109c11.5,11.4,27.3,18.5,44.8,18.5c17.5,0,33.3-7.1,44.8-18.5H19.2z">
                                    </path>
                                    <rect width="19.6" height="10.4" x="54.2" y="92.7" fill="#FFF"></rect>
                                    <rect width="19.6" height="2.3" x="54.2" y="92.7" fill="#E6E9EE"></rect>
                                    <path fill="#E6E9EE"
                                        d="M82.2,109H45.8l0,0c0-3.3,2.7-6,6-6h24.4C79.5,103.1,82.2,105.7,82.2,109L82.2,109z">
                                    </path>
                                    <path fill="#324A5E"
                                        d="M103,92.7H25c-2.4,0-4.4-2-4.4-4.4V34.7c0-2.4,2-4.4,4.4-4.4h78c2.4,0,4.4,2,4.4,4.4v53.7   C107.4,90.7,105.4,92.7,103,92.7z">
                                    </path>
                                    <path fill="#FFF"
                                        d="M20.6,84v4.4c0,2.4,1.9,4.3,4.3,4.3H103c2.4,0,4.3-1.9,4.3-4.3V84H20.6z">
                                    </path>
                                    <rect width="80.3" height="46.9" x="23.9" y="33.4" fill="#FFF">
                                    </rect>
                                    <circle cx="100.3" cy="88.3" r="2" fill="#FF7058">
                                    </circle>
                                    <circle cx="94.7" cy="88.3" r="2" fill="#4CDBC4">
                                    </circle>
                                    <circle cx="89.1" cy="88.3" r="2" fill="#54C0EB">
                                    </circle>
                                    <rect width="9.7" height="27.7" x="32.3" y="46.7" fill="#ACB3BA">
                                    </rect>
                                    <rect width="9.7" height="15.8" x="45.7" y="58.7" fill="#4CDBC4">
                                    </rect>
                                    <rect width="9.7" height="23.1" x="59.1" y="51.3" fill="#FFD05B">
                                    </rect>
                                    <rect width="9.7" height="35.7" x="72.6" y="38.7" fill="#84DBFF">
                                    </rect>
                                    <rect width="9.7" height="8.1" x="86" y="66.3" fill="#FF7058">
                                    </rect>
                                </svg> </div>
                            <div class="text-left">
                                <h4 class="fw-bold">Multiple Demos</h4>
                                <p class="mb-0"> We included multiple demos, preview video, and screen
                                    shots to give a quick overview of our Valex admin template. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="card features main-features main-features-3 wow fadeInUp reveal revealleft p-4"
                            data-wow-delay="0.1s">
                            <div class="bg-img mb-2 text-left"> <svg width="50" height="50"
                                    xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 128 128"
                                    viewBox="0 0 128 128">
                                    <circle cx="64" cy="64" r="63.5" fill="#54C0EB">
                                    </circle>
                                    <path fill="#FFF"
                                        d="M42.2,96H23.6c-1.6,0-2.8-1.3-2.8-2.8V34.8c0-1.6,1.3-2.8,2.8-2.8h18.6c1.6,0,2.8,1.3,2.8,2.8v58.3   C45.1,94.7,43.8,96,42.2,96z">
                                    </path>
                                    <rect width="18.7" height="36.8" x="23.6" y="35.8" fill="#4CDBC4">
                                    </rect>
                                    <circle cx="32.9" cy="83.9" r="7.2" fill="#E6E9EE">
                                    </circle>
                                    <circle cx="32.9" cy="83.9" r="5" fill="#324A5E">
                                    </circle>
                                    <path fill="#FFF"
                                        d="M68.8,96H50.2c-1.6,0-2.8-1.3-2.8-2.8V34.8c0-1.6,1.3-2.8,2.8-2.8h18.6c1.6,0,2.8,1.3,2.8,2.8v58.3   C71.6,94.7,70.4,96,68.8,96z">
                                    </path>
                                    <rect width="18.7" height="36.8" x="50.1" y="35.8" fill="#FF7058">
                                    </rect>
                                    <circle cx="59.5" cy="83.9" r="7.2" fill="#E6E9EE">
                                    </circle>
                                    <circle cx="59.5" cy="83.9" r="5" fill="#324A5E">
                                    </circle>
                                    <path fill="#FFF"
                                        d="M109,92.7l-18,4.6c-1.5,0.4-3.1-0.5-3.5-2.1L73.2,38.7c-0.4-1.5,0.5-3.1,2.1-3.5l18-4.6   c1.5-0.4,3.1,0.5,3.5,2.1l14.3,56.5C111.5,90.8,110.6,92.4,109,92.7z">
                                    </path>
                                    <rect width="18.7" height="36.8" x="80.4" y="36.1" fill="#FFD05B"
                                        transform="rotate(-14.193 89.778 54.551)"></rect>
                                    <circle cx="97" cy="83.2" r="7.2" fill="#E6E9EE">
                                    </circle>
                                    <circle cx="97" cy="83.2" r="5" fill="#324A5E">
                                    </circle>
                                </svg> </div>
                            <div class="text-left">
                                <h4 class="fw-bold">Widgets</h4>
                                <p class="mb-0"> 30+ widgets are included in this template. Please check
                                    out the best option that suits you and implement it in your projects.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="card features main-features main-features-4 wow fadeInUp reveal revealleft p-4"
                            data-wow-delay="0.1s">
                            <div class="bg-img mb-2 text-left"> <svg width="50" height="50"
                                    xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 128 128"
                                    viewBox="0 0 128 128">
                                    <circle cx="64" cy="64" r="63.5" fill="#FFD05B">
                                    </circle>
                                    <path fill="#FFF"
                                        d="M30,103.8l0-79.7c0-1.8,1.5-3.3,3.3-3.3h50.1l0,11.4c0,1.8,1.5,3.3,3.3,3.3H98l0,68.3   c0,1.8-1.5,3.3-3.3,3.3H33.3C31.5,107.1,30,105.6,30,103.8z">
                                    </path>
                                    <path fill="#E6E9EE"
                                        d="M83.3,20.9h11.4c1.8,0,3.3,1.5,3.3,3.3l0,11.4H86.6c-1.8,0-3.3-1.5-3.3-3.3L83.3,20.9z">
                                    </path>
                                    <path fill="#CED5E0" d="M83.3,20.9h11.4c1.8,0,3.3,1.5,3.3,3.3l0,11.4L83.3,20.9z">
                                    </path>
                                    <rect width="54.6" height="2.4" x="36.7" y="50.7" fill="#E6E9EE">
                                    </rect>
                                    <rect width="54.6" height="2.4" x="36.7" y="58.2" fill="#E6E9EE">
                                    </rect>
                                    <rect width="54.6" height="2.4" x="36.7" y="65.8" fill="#E6E9EE">
                                    </rect>
                                    <rect width="54.6" height="2.4" x="36.7" y="73.4" fill="#E6E9EE">
                                    </rect>
                                    <rect width="23.5" height="2.4" x="67.8" y="80.9" fill="#84DBFF">
                                    </rect>
                                    <rect width="23.5" height="2.4" x="67.8" y="88.5" fill="#84DBFF">
                                    </rect>
                                    <rect width="54.6" height="2.4" x="36.7" y="43.1" fill="#E6E9EE">
                                    </rect>
                                    <rect width="29.6" height="2.4" x="36.7" y="35.6" fill="#84DBFF">
                                    </rect>
                                    <path fill="#FF7058"
                                        d="M41.1,83.3c-4.4,4.4-4.4,11.5,0,15.9s11.5,4.4,15.9,0c4.4-4.4,4.4-11.5,0-15.9   C52.6,78.9,45.5,78.9,41.1,83.3z M41.9,84.1c3.4-3.4,8.7-3.8,12.6-1.3l-1.6,1.6c-3-1.7-6.9-1.3-9.5,1.2c-2.6,2.6-3,6.5-1.2,9.5   l-1.6,1.6C38.1,92.8,38.5,87.5,41.9,84.1z M43.1,94.3c-1.3-2.5-0.9-5.7,1.2-7.7c2.1-2.1,5.2-2.5,7.7-1.2L43.1,94.3z M54.9,88.2   c1.3,2.5,0.9,5.7-1.2,7.7c-2.1,2.1-5.2,2.5-7.7,1.2L54.9,88.2z M56.1,98.3c-3.4,3.4-8.7,3.8-12.6,1.3l1.6-1.6   c3,1.7,6.9,1.3,9.5-1.2c2.6-2.6,3-6.5,1.2-9.5l1.6-1.6C60,89.6,59.5,94.9,56.1,98.3z">
                                    </path>
                                </svg> </div>
                            <div class="text-left">
                                <h4 class="fw-bold">Validation Forms</h4>
                                <p class="mb-0"> Different types of “Form Validation” are implemented in
                                    this Valex admin template and used strict validation rules. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="card features main-features main-features-5 wow fadeInUp reveal revealleft p-4"
                            data-wow-delay="0.1s">
                            <div class="bg-img mb-2 text-left"> <svg width="50" height="50"
                                    xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 128 128"
                                    viewBox="0 0 128 128">
                                    <circle cx="64" cy="64" r="63.5" fill="#90DFAA">
                                    </circle>
                                    <path fill="#FFF"
                                        d="M95.8,19.4H32.2c-1.9,0-3.4,1.5-3.4,3.4v82.5c0,1.9,1.5,3.4,3.4,3.4h63.7c1.9,0,3.4-1.5,3.4-3.4V22.7   C99.2,20.9,97.7,19.4,95.8,19.4z">
                                    </path>
                                    <polygon fill="#324A5E"
                                        points="88.5 90.2 43 90.2 43 34.2 39.5 34.2 39.5 93.8 88.5 93.8">
                                    </polygon>
                                    <rect width="4.9" height="44.8" x="48" y="41.3" fill="#FF7058">
                                    </rect>
                                    <rect width="4.9" height="38.3" x="58.1" y="47.8" fill="#84DBFF">
                                    </rect>
                                    <rect width="4.9" height="31.2" x="68.3" y="54.9" fill="#FFD05B">
                                    </rect>
                                    <rect width="4.9" height="22.7" x="78.4" y="63.3" fill="#CED5E0">
                                    </rect>
                                </svg> </div>
                            <div class="text-left">
                                <h4 class="fw-bold">9 Types of Charts</h4>
                                <p class="mb-0"> We included nine (9) types of the best possible chart
                                    options for your project. You can customize with your requirement. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="card features main-features main-features-6 mb-4 wow fadeInUp reveal revealleft p-4"
                            data-wow-delay="0.1s">
                            <div class="bg-img mb-2 text-left"> <svg width="50" height="50"
                                    xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 128 128"
                                    viewBox="0 0 128 128">
                                    <circle cx="64" cy="64" r="63.5" fill="#54C0EB">
                                    </circle>
                                    <path fill="#FFF"
                                        d="M28.8,22.7v82.5c0,1.9,1.5,3.4,3.4,3.4H84V96.8c0-1.9,1.5-3.4,3.4-3.4h11.8V22.7c0-1.9-1.5-3.4-3.4-3.4   H32.2C30.3,19.4,28.8,20.9,28.8,22.7z">
                                    </path>
                                    <path fill="#E6E9EE"
                                        d="M84,108.6h11.8c1.9,0,3.4-1.5,3.4-3.4V93.5H87.4c-1.9,0-3.4,1.5-3.4,3.4V108.6z">
                                    </path>
                                    <path fill="#CED5E0" d="M84,108.6h11.8c1.9,0,3.4-1.5,3.4-3.4V93.5L84,108.6z"></path>
                                    <rect width="6.3" height="11.8" x="47.6" y="39.6" fill="#CED5E0">
                                    </rect>
                                    <rect width="6.3" height="21.1" x="56.4" y="30.3" fill="#FFD05B">
                                    </rect>
                                    <rect width="6.3" height="17.1" x="65.3" y="34.2" fill="#84DBFF">
                                    </rect>
                                    <rect width="6.3" height="24.5" x="74.2" y="26.8" fill="#FF7058">
                                    </rect>
                                    <rect width="37.4" height="1.8" x="45.3" y="51.4" fill="#324A5E">
                                    </rect>
                                    <rect width="52.7" height="2.6" x="37.7" y="73.5" fill="#E6E9EE">
                                    </rect>
                                    <rect width="52.7" height="2.6" x="37.7" y="67.2" fill="#E6E9EE">
                                    </rect>
                                    <rect width="52.7" height="2.6" x="37.7" y="60.9" fill="#E6E9EE">
                                    </rect>
                                    <rect width="52.7" height="2.6" x="37.7" y="79.7" fill="#E6E9EE">
                                    </rect>
                                    <rect width="38" height="2.6" x="37.7" y="86" fill="#E6E9EE">
                                    </rect>
                                </svg> </div>
                            <div class="text-left">
                                <h4 class="fw-bold">Documentation</h4>
                                <p class="mb-0"> The documentation provides clear-cut material for the
                                    Valex admin template. The documentation is explained in such a way that
                                    every user can understand. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- ROW-2 CLOSED -->




    <!-- ROW-10 OPEN -->
    <div class="section bg-white-2 pb-4" id="Contact">
        <div class="container">
            <div class="">
                <div class="card reveal p-5 pb-2 mb-0">
                    <h4 class="text-center fw-semibold landing-card-header ">Contact</h4> <span
                        class="landing-title"></span>
                    <h2 class="text-center fw-semibold mb-0 px-2">Get in Touch with <span class="text-primary">US.</span>
                    </h2>
                    <div class="card-body text-dark pb-0">
                        <div class="statistics-info">
                            <div class="row justify-content-center">
                                <div class="col-lg-12">
                                    <div class="mt-3">
                                        <div class="text-dark">
                                            <div class="services-statistics reveal my-5">
                                                <div class="row text-center">
                                                    <div class="col-xl-3 col-md-6 col-lg-6">
                                                        <div class="card">
                                                            <div class="card-body p-0">
                                                                <div class="counter-status d-flex">
                                                                    <div
                                                                        class="counter-icon border border-primary bg-primary-transparent m-0">
                                                                        <i class="fe fe-map-pin text-primary fs-23"></i>
                                                                    </div>
                                                                    <div class="ms-3 text-start">
                                                                        <h5 class="mb-1 fw-semibold">Main
                                                                            Branch</h5>
                                                                        <p>San Francisco, CA </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-3 col-md-6 col-lg-6">
                                                        <div class="card">
                                                            <div class="card-body p-0">
                                                                <div class="counter-status d-flex">
                                                                    <div
                                                                        class="counter-icon border border-danger bg-danger-transparent">
                                                                        <i class="fe fe-mail text-danger fs-23"></i>
                                                                    </div>
                                                                    <div class="ms-3 text-start">
                                                                        <h5 class="mb-1 fw-semibold">
                                                                            Email</h5>
                                                                        <p>georgeme@abc.com</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-3 col-md-6 col-lg-6">
                                                        <div class="card">
                                                            <div class="card-body p-0">
                                                                <div class="counter-status d-flex">
                                                                    <div
                                                                        class="counter-icon border border-success bg-success-transparent">
                                                                        <i class="fe fe-headphones text-success fs-23"></i>
                                                                    </div>
                                                                    <div class="ms-3 text-start">
                                                                        <h5 class="mb-1 fw-semibold">
                                                                            Contact</h5>
                                                                        <p>+125 254 3562 </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-3 col-md-6 col-lg-6">
                                                        <div class="card">
                                                            <div class="card-body p-0">
                                                                <div class="counter-status d-flex">
                                                                    <div
                                                                        class="counter-icon border border-warning bg-warning-transparent">
                                                                        <i class="fe fe-airplay text-warning fs-23"></i>
                                                                    </div>
                                                                    <div class="ms-3 text-start">
                                                                        <h5 class="mb-1 fw-semibold">
                                                                            Working Hours</h5>
                                                                        <p class="mb-0">Mon - Fri: 9am -
                                                                            6pm</p>
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
                                <div class="col-xl-12">
                                    <div class="">
                                        <form class="reveal">
                                            <div class="row">
                                                <div class="col-xl-6">
                                                    <div class="form-group "> <label for="cusName"
                                                            class="form-label">Name <span
                                                                class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" id="cusName"
                                                            placeholder="Enter your name" spellcheck="false"
                                                            data-ms-editor="true">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <div class="form-group"> <label for="cusEmail"
                                                            class="form-label">Email <span
                                                                class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" id="cusEmail"
                                                            placeholder="Enter your email" spellcheck="false"
                                                            data-ms-editor="true">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group"> <label for="cusSubject"
                                                    class="form-label">Subject</label> <input type="text"
                                                    class="form-control" id="cusSubject" placeholder="Enter your subject"
                                                    spellcheck="false" data-ms-editor="true"> </div>
                                            <div class="form-group"> <label for="cusMessage" class="form-label">Message
                                                    <span class="text-danger">*</span></label>
                                                <textarea rows="5" class="form-control" id="cusMessage" placeholder="Type your message here..."
                                                    spellcheck="false" data-ms-editor="true"></textarea>
                                            </div>
                                            <div class="form-group"> <button class="btn btn-primary">Send Message</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- ROW-10 CLOSED -->
@endsection
@section('js')
@endsection

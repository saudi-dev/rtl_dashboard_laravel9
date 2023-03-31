@extends('layouts.master')
@section('css')
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <style>
        .rounded-circle-profile {
            border-radius: 10% !important;
            /* border: ridge #ecf0fa 1px; */
            border: 2px solid #c9d2e8;
            box-shadow: 0px 5px 5px 0px rgba(44, 44, 44, 0.2);
            padding: 6px;
            background: #fff;
            margin: 0 auto;
        }

        .select2-container--default .select2-selection--single .select2-selection__rendered {
            line-height: calc(1.5em + 0.75rem + 2px) -0.1rem;
            align-items: center;
            margin: 3px;
            width: 150px;
        }

        .select2-container--default .select2-selection--single .select2-selection__arrow {
            /* width: 30px; */
            height: 38px;
            line-height: calc(1.5em + 0.75rem + 2px);
            left: 130;
        }

        .select2-container .select2-selection--single .select2-selection__rendered {
            float: left;
            direction: rtl !important;
        }
    </style>
    <!-- Internal Select2 css -->
    <link href="{{ URL::asset('assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet">
@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">Pages</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/
                    Profile</span>
            </div>
        </div>
        <div class="d-flex my-xl-auto right-content">
            <div class="pr-1 mb-3 mb-xl-0">
                <button type="button" class="btn btn-info btn-icon ml-2"><i class="mdi mdi-filter-variant"></i></button>
            </div>
            <div class="pr-1 mb-3 mb-xl-0">
                <button type="button" class="btn btn-danger btn-icon ml-2"><i class="mdi mdi-star"></i></button>
            </div>
            <div class="pr-1 mb-3 mb-xl-0">
                <button type="button" class="btn btn-warning  btn-icon ml-2"><i class="mdi mdi-refresh"></i></button>
            </div>
            <div class="mb-3 mb-xl-0">
                <div class="btn-group dropdown">
                    <button type="button" class="btn btn-primary">14 Aug 2019</button>
                    <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split"
                        id="dropdownMenuDate" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-left" aria-labelledby="dropdownMenuDate"
                        data-x-placement="bottom-end">
                        <a class="dropdown-item" href="#">2015</a>
                        <a class="dropdown-item" href="#">2016</a>
                        <a class="dropdown-item" href="#">2017</a>
                        <a class="dropdown-item" href="#">2018</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->
    <div class="row row-sm">
        <div class="col-lg-4">
            <div class="card mg-b-20">
                <div class="card-body">
                    <div class="pl-0">
                        <div class="main-profile-overview">
                            <div class="row" style="justify-content: center;">
                                <div class="main-img-user profile-user">
                                    @php($profile_image = auth()->user()->profile_image)
                                    <img alt=""
                                        src="@if ($profile_image == null) {{ asset('storage/profile_images/avatar.png') }}  @else {{ asset("storage/$profile_image") }} @endif"
                                        id="image_preview_container4"><a class="fas fa-camera profile-edit"
                                        href="JavaScript:void(0);"></a>
                                </div>
                            </div>
                            <div class="row" style="justify-content: center;">
                                <div>
                                    <h5 class="main-profile-name">{{ Auth::user()->name }}</h5>
                                    <p class="main-profile-name-text">{{ Auth::user()->email }}</p>
                                </div>
                            </div>
                            <h6>Bio</h6>
                            <div class="main-profile-bio text-center">
                                {{ Auth::user()->bio }}
                            </div><!-- main-profile-bio -->
                            <div class="row">
                                <div class="col-md-4 col mb20 text-center">
                                    <h5>947</h5>
                                    <h6 class="text-small text-muted mb-0">Followers</h6>
                                </div>
                                <div class="col-md-4 col mb20 text-center">
                                    <h5>583</h5>
                                    <h6 class="text-small text-muted mb-0">Tweets</h6>
                                </div>
                                <div class="col-md-4 col mb20 text-center">
                                    <h5>48</h5>
                                    <h6 class="text-small text-muted mb-0">Posts</h6>
                                </div>
                            </div>
                            <hr class="mg-y-30">
                            <label class="main-content-label tx-13 mg-b-20">Social</label>
                            <div class="main-profile-social-list">
                                <div class="media">
                                    <div class="media-icon bg-primary-transparent text-primary">
                                        <i class="icon ion-logo-github"></i>
                                    </div>
                                    <div class="media-body">
                                        <span>Github</span> <a href="">github.com/spruko</a>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-icon bg-success-transparent text-success">
                                        <i class="icon ion-logo-twitter"></i>
                                    </div>
                                    <div class="media-body">
                                        <span>Twitter</span> <a href="">twitter.com/spruko.me</a>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-icon bg-info-transparent text-info">
                                        <i class="icon ion-logo-linkedin"></i>
                                    </div>
                                    <div class="media-body">
                                        <span>Linkedin</span> <a href="">linkedin.com/in/spruko</a>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-icon bg-danger-transparent text-danger">
                                        <i class="icon ion-md-link"></i>
                                    </div>
                                    <div class="media-body">
                                        <span>My Portfolio</span> <a href="">spruko.com/</a>
                                    </div>
                                </div>
                            </div>
                            <hr class="mg-y-30">
                            <h6>Skills</h6>
                            <div class="skill-bar mb-4 clearfix mt-3">
                                <span>HTML5 / CSS3</span>
                                <div class="progress mt-2">
                                    <div class="progress-bar bg-primary-gradient" role="progressbar" aria-valuenow="85"
                                        aria-valuemin="0" aria-valuemax="100" style="width: 85%"></div>
                                </div>
                            </div>
                            <!--skill bar-->
                            <div class="skill-bar mb-4 clearfix">
                                <span>Javascript</span>
                                <div class="progress mt-2">
                                    <div class="progress-bar bg-danger-gradient" role="progressbar" aria-valuenow="85"
                                        aria-valuemin="0" aria-valuemax="100" style="width: 89%"></div>
                                </div>
                            </div>
                            <!--skill bar-->
                            <div class="skill-bar mb-4 clearfix">
                                <span>Bootstrap</span>
                                <div class="progress mt-2">
                                    <div class="progress-bar bg-success-gradient" role="progressbar" aria-valuenow="85"
                                        aria-valuemin="0" aria-valuemax="100" style="width: 80%"></div>
                                </div>
                            </div>
                            <!--skill bar-->
                            <div class="skill-bar clearfix">
                                <span>Coffee</span>
                                <div class="progress mt-2">
                                    <div class="progress-bar bg-info-gradient" role="progressbar" aria-valuenow="85"
                                        aria-valuemin="0" aria-valuemax="100" style="width: 95%"></div>
                                </div>
                            </div>
                            <!--skill bar-->
                        </div><!-- main-profile-overview -->
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="row row-sm">
                <div class="col-sm-12 col-xl-4 col-lg-12 col-md-12">
                    <div class="card ">
                        <div class="card-body">
                            <div class="counter-status d-flex md-mb-0">
                                <div class="counter-icon bg-primary-transparent">
                                    <i class="icon-layers text-primary"></i>
                                </div>
                                <div class="mr-auto">
                                    <h5 class="tx-13">Orders</h5>
                                    <h2 class="mb-0 tx-22 mb-1 mt-1">1,587</h2>
                                    <p class="text-muted mb-0 tx-11"><i
                                            class="si si-arrow-up-circle text-success mr-1"></i>increase</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-xl-4 col-lg-12 col-md-12">
                    <div class="card ">
                        <div class="card-body">
                            <div class="counter-status d-flex md-mb-0">
                                <div class="counter-icon bg-danger-transparent">
                                    <i class="icon-paypal text-danger"></i>
                                </div>
                                <div class="mr-auto">
                                    <h5 class="tx-13">Revenue</h5>
                                    <h2 class="mb-0 tx-22 mb-1 mt-1">46,782</h2>
                                    <p class="text-muted mb-0 tx-11"><i
                                            class="si si-arrow-up-circle text-success mr-1"></i>increase</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-xl-4 col-lg-12 col-md-12">
                    <div class="card ">
                        <div class="card-body">
                            <div class="counter-status d-flex md-mb-0">
                                <div class="counter-icon bg-success-transparent">
                                    <i class="icon-rocket text-success"></i>
                                </div>
                                <div class="mr-auto">
                                    <h5 class="tx-13">Product sold</h5>
                                    <h2 class="mb-0 tx-22 mb-1 mt-1">1,890</h2>
                                    <p class="text-muted mb-0 tx-11"><i
                                            class="si si-arrow-up-circle text-success mr-1"></i>increase</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="tabs-menu ">
                        <!-- Tabs -->
                        <ul class="nav nav-tabs profile navtab-custom panel-tabs">
                            <li class="active">
                                <a href="#home" data-toggle="tab" aria-expanded="true"> <span class="visible-xs"><i
                                            class="las la-user-circle tx-16 mr-1"></i></span> <span
                                        class="hidden-xs">ABOUT ME</span> </a>
                            </li>
                            <li class="">
                                <a href="#profile" data-toggle="tab" aria-expanded="false"> <span class="visible-xs"><i
                                            class="las la-images tx-15 mr-1"></i></span> <span
                                        class="hidden-xs">GALLERY</span> </a>
                            </li>
                            <li class="">
                                <a href="#settings" data-toggle="tab" aria-expanded="false"> <span class="visible-xs"><i
                                            class="las la-cog tx-16 mr-1"></i></span> <span
                                        class="hidden-xs">SETTINGS</span> </a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content border-left border-bottom border-right border-top-0 p-4">
                        <div class="tab-pane active" id="home">
                            <h4 class="tx-15 text-uppercase mb-3">BIOdata</h4>
                            <p class="m-b-5">Hi I'm Petey Cruiser,has been the industry's standard dummy text ever since
                                the 1500s, when an unknown printer took a galley of type. Donec pede justo, fringilla vel,
                                aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae,
                                justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus
                                elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu,
                                consequat vitae, eleifend ac, enim.</p>
                            <div class="m-t-30">
                                <h4 class="tx-15 text-uppercase mt-3">Experience</h4>
                                <div class=" p-t-10">
                                    <h5 class="text-primary m-b-5 tx-14">Lead designer / Developer</h5>
                                    <p class="">websitename.com</p>
                                    <p><b>2010-2015</b></p>
                                    <p class="text-muted tx-13 m-b-0">Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever
                                        since the 1500s, when an unknown printer took a galley of type and scrambled it to
                                        make a type specimen book.</p>
                                </div>
                                <hr>
                                <div class="">
                                    <h5 class="text-primary m-b-5 tx-14">Senior Graphic Designer</h5>
                                    <p class="">coderthemes.com</p>
                                    <p><b>2007-2009</b></p>
                                    <p class="text-muted tx-13 mb-0">Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever
                                        since the 1500s, when an unknown printer took a galley of type and scrambled it to
                                        make a type specimen book.</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="profile">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="border p-1 card thumb">
                                        <a href="#" class="image-popup" title="Screenshot-2"> <img
                                                src="{{ URL::asset('assets/img/photos/7.jpg') }}" class="thumb-img"
                                                alt="work-thumbnail"> </a>
                                        <h4 class="text-center tx-14 mt-3 mb-0">Gallary Image</h4>
                                        <div class="ga-border"></div>
                                        <p class="text-muted text-center"><small>Photography</small></p>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class=" border p-1 card thumb">
                                        <a href="#" class="image-popup" title="Screenshot-2"> <img
                                                src="{{ URL::asset('assets/img/photos/8.jpg') }}" class="thumb-img"
                                                alt="work-thumbnail"> </a>
                                        <h4 class="text-center tx-14 mt-3 mb-0">Gallary Image</h4>
                                        <div class="ga-border"></div>
                                        <p class="text-muted text-center"><small>Photography</small></p>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class=" border p-1 card thumb">
                                        <a href="#" class="image-popup" title="Screenshot-2"> <img
                                                src="{{ URL::asset('assets/img/photos/9.jpg') }}" class="thumb-img"
                                                alt="work-thumbnail"> </a>
                                        <h4 class="text-center tx-14 mt-3 mb-0">Gallary Image</h4>
                                        <div class="ga-border"></div>
                                        <p class="text-muted text-center"><small>Photography</small></p>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class=" border p-1 card thumb  mb-xl-0">
                                        <a href="#" class="image-popup" title="Screenshot-2"> <img
                                                src="{{ URL::asset('assets/img/photos/10.jpg') }}" class="thumb-img"
                                                alt="work-thumbnail"> </a>
                                        <h4 class="text-center tx-14 mt-3 mb-0">Gallary Image</h4>
                                        <div class="ga-border"></div>
                                        <p class="text-muted text-center"><small>Photography</small></p>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class=" border p-1 card thumb  mb-xl-0">
                                        <a href="#" class="image-popup" title="Screenshot-2"> <img
                                                src="{{ URL::asset('assets/img/photos/6.jpg') }}" class="thumb-img"
                                                alt="work-thumbnail"> </a>
                                        <h4 class="text-center tx-14 mt-3 mb-0">Gallary Image</h4>
                                        <div class="ga-border"></div>
                                        <p class="text-muted text-center"><small>Photography</small></p>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class=" border p-1 card thumb  mb-xl-0">
                                        <a href="#" class="image-popup" title="Screenshot-2"> <img
                                                src="{{ URL::asset('assets/img/photos/5.jpg') }}" class="thumb-img"
                                                alt="work-thumbnail"> </a>
                                        <h4 class="text-center tx-14 mt-3 mb-0">Gallary Image</h4>
                                        <div class="ga-border"></div>
                                        <p class="text-muted text-center"><small>Photography</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="settings">

                            <form autocomplete="off" method="POST" role="form" enctype="multipart/form-data"
                                id="profile_setup_frm" action="{{ route('update.profile') }}">
                                @csrf

                                <div class="row" style="justify-content: center;">
                                    <div class="col-md-4 border-button">
                                        <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                                            @php($profile_image = auth()->user()->profile_image)
                                            <img class="rounded-circle-profile mt-5" height="250"
                                                src="@if ($profile_image == null) {{ asset('storage/profile_images/avatar.png') }}  @else {{ asset("storage/$profile_image") }} @endif"
                                                id="image_preview_container">
                                            <span class="font-weight-bold">
                                                <input type="file" name="profile_image"
                                                    accept="image/png, image/gif, image/jpeg, image/jpg, image/bmp"
                                                    id="profile_image" class="form-control">
                                            </span>
                                        </div>

                                    </div>
                                </div>
                                <hr class="mg-y-30">
                                <div class="row" id="res"></div>
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" id="name" name="name" class="form-control"
                                        value="{{ auth()->user()->name }}">
                                </div>
                                <div class="form-group">
                                    <label for="nid">N id</label>
                                    <input type="text" value="{{ auth()->user()->nid }}" name="nid"
                                        id="nidMask" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="gender">Gender</label>

                                    <?php $months = ['ذكر', 'أنثى']; ?>

                                    <?php $gender = Auth::user()->gender; ?>

                                    <select class="form-control select2-no-search" name="gender" id="gender">
                                        @foreach ($months as $month)
                                            <option value="{{ $month }}"
                                                {{ $month == $gender ? 'selected' : '' }}>
                                                {{ $month }}</option>
                                        @endforeach
                                    </select>
                                </div>



                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    {{-- <input type="number" placeholder="+966 512345678" id="phone" name="phone"
                                        value="{{ auth()->user()->phone }}" class="form-control"> --}}
                                    <input class="form-control" id="phoneMask" name="phone"
                                        placeholder="(000) 000-0000" type="text" value="{{ auth()->user()->phone }}">
                                </div>
                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <input type="text" placeholder="أبها - المملكة العربية السعودية" id="address"
                                        class="form-control" name="address" value="{{ auth()->user()->address }}">
                                </div>

                                <div class="form-group">
                                    <label for="bio">Bio</label>
                                    <input type="text" id="bio" name="bio" class="form-control"
                                        value="{{ auth()->user()->bio }}">
                                </div>
                                <button id="btn" class="btn btn-primary waves-effect waves-light w-md"
                                    type="submit">Save
                                    Profile</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- row closed -->
    </div>
    <!-- Container closed -->
    </div>
    <!-- main-content closed -->
@endsection
@section('js')
    <script src="{{ URL::asset('assets/js/profileupdate.js') }}"></script>

    <!--Internal  Datepicker js -->
    <script src="{{ URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js') }}"></script>
    <!--Internal  jquery.maskedinput js -->
    <script src="{{ URL::asset('assets/plugins/jquery.maskedinput/jquery.maskedinput.js') }}"></script>
    <!--Internal  spectrum-colorpicker js -->
    <script src="{{ URL::asset('assets/plugins/spectrum-colorpicker/spectrum.js') }}"></script>
    <!-- Internal Select2.min js -->
    <script src="{{ URL::asset('assets/plugins/select2/js/select2.min.js') }}"></script>
    <!--Internal Ion.rangeSlider.min js -->
    <script src="{{ URL::asset('assets/plugins/ion-rangeslider/js/ion.rangeSlider.min.js') }}"></script>
    <!--Internal  jquery-simple-datetimepicker js -->
    <script src="{{ URL::asset('assets/plugins/amazeui-datetimepicker/js/amazeui.datetimepicker.min.js') }}"></script>
    <!-- Ionicons js -->
    <script src="{{ URL::asset('assets/plugins/jquery-simple-datetimepicker/jquery.simple-dtpicker.js') }}"></script>
    <!--Internal  pickerjs js -->
    <script src="{{ URL::asset('assets/plugins/pickerjs/picker.min.js') }}"></script>
    <!-- Internal form-elements js -->
    <script src="{{ URL::asset('assets/js/form-elements.js') }}"></script>
@endsection

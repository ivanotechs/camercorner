<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>@yield('pageTitle', config('app.name'))</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('be_assets') }}/images/favicon.png
">

    <link href="{{ asset('be_assets') }}/css/bootstrap.min.css" rel="stylesheet" type="text/css"
        id="bootstrap-stylesheet" />
    <link href="{{ asset('be_assets') }}/libs/select2/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('be_assets') }}/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('be_assets') }}/css/app.min.css" rel="stylesheet" type="text/css" id="app-stylesheet" />
    <link href="{{ asset('be_assets/css/toastr.css') }}" rel="stylesheet" type="text/css" id="app-stylesheet" />
    <link href="{{ asset('be_assets') }}/css/style.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('be_assets/css/toastr.css') }}" rel="stylesheet" type="text/css" id="app-stylesheet" />
    @yield('style')
    @livewireStyles
    <style>
        .error {
            color: #ff0000;
            font-size: 12px;
        }

        .btn {
            padding: 0.25rem 0.5rem;
            font-size: .875rem;
            line-height: 1.5;
            border-radius: 0.2rem;
        }

        [x-cloak] {
            display: none !important;
        }

        .overlay,
        .cover {
            width: 100%;
            height: 100%;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 100;
            background: black;
            opacity: 0.75;
        }

        .user-box .user-info {
            z-index: 10;
        }

        .modal {
            display: flex;
            align-items: center;
            justify-content: center;
            position: fixed;
            overflow-y: scroll;
            z-index: 1000;
            width: 100%;
            height: 100%;
        }

        .modal-header {
            border-bottom: none;
        }

        .modal-footer {
            border-top: none;
        }

        .modal-inner {
            background-color: white;
            border-top: 20px #002667 solid;
            border-radius: 0.5em;
            max-width: 1000px;
            width: 1000px;
            padding: 2em;
            margin: auto;
        }

        .btn.focus,
        .btn:focus {
            box-shadow: none;
        }
    </style>

</head>

<body>

    <!-- Begin page -->
    <div id="wrapper w-1000">


        <!-- Topbar Start -->
        <div class="navbar-custom">
            <ul class="list-unstyled topnav-menu float-right mb-0">


                <li class="dropdown notification-list">
                    <a class="nav-link dropdown-toggle nav-user mr-0" data-toggle="dropdown" href="#"
                        role="button" aria-haspopup="false" aria-expanded="false">
                        <img src="{{ asset('be_assets') }}/images/users/avatar-1.jpg" alt="user-image"
                            class="rounded-circle">
                        <span class="pro-user-name ml-1">
                            Admin
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right profile-dropdown ">

                        <a href="{{ route('admin.logout') }}" class="dropdown-item notify-item">
                            Logout
                        </a>

                    </div>
                </li>

            </ul>

            <!-- LOGO -->
            <div class="logo-box">
                <a href="{{ route('admin.home') }}" class="logo text-center logo-dark">
                    <span class="logo-lg">

                        <span><x-logo.white /></span>
                        <!-- <span class="logo-lg-text-dark">Simple</span> -->
                    </span>
                    <span class="logo-sm">
                        <!-- <span class="logo-lg-text-dark">S</span> -->
                        <x-logo.small />

                    </span>
                </a>

                <a href="{{ route('admin.home') }}" class="logo text-center logo-light">
                    <span class="logo-lg">

                        <span><x-logo.white /></span>

                        <!-- <span class="logo-lg-text-light">Simple</span> -->
                    </span>
                    <span class="logo-sm">
                        <!-- <span class="logo-lg-text-light">S</span> -->
                        <x-logo.small />

                    </span>
                </a>
            </div>

            <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                <li>
                    <button class="button-menu-mobile">
                        <i class="mdi mdi-menu"></i>
                    </button>
                </li>
            </ul>
        </div>
        <!-- end Topbar --> <!-- ========== Left Sidebar Start ========== -->
        <div class="left-side-menu">


            <div class="user-box">
                <div class="float-left">
                    <img src="{{ asset('be_assets') }}/images/users/avatar-1.jpg" alt=""
                        class="avatar-md rounded-circle">
                </div>
                <div class="user-info ">
                    <a href="#" class="text-white">Admin</a>
                    <p class=" text-white m-0">Administrator</p>
                </div>
            </div>

            <div id="sidebar-menu">

                <ul class="metismenu" id="side-menu">
                    <li>
                        <a href="{{ route('admin.home') }}">
                            <i class="fa fa-home"></i>
                            <span> Dashboard</span>
                        </a>
                    </li>
                    <li><a href="{{ route('admin.service') }}"><i class="fa fa-suitcase"></i><span>Services</span> </a>
                    </li>
                    <li>
                        <a href="javascript: void(0);">
                            <i class="fa fa-list"></i>
                            <span>Categories</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="nav-second-level " style="">

                            <li><a href="{{ route('admin.categories', ['type' => 'blog']) }}"><i
                                        class=""></i>Blog Categories</a></li>
                            <li><a href="{{ route('admin.categories', ['type' => 'faq']) }}"><i class=""></i>FAQs
                                    Categories</a></li>
                            <li><a href="{{ route('admin.categories', ['type' => 'product']) }}"><i
                                        class=""></i>Product Categories</a></li>

                        </ul>
                    </li>

                    <li><a href="{{ route('admin.products') }}"><i
                                class="fa fa-shopping-basket"></i><span>Products</span></a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            <i class="fa fa-registered"></i>
                            <span>Blog</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="nav-second-level">
                            <li><a href="{{ route('admin.blogs', ['type' => 'text']) }}">Blog</a></li>
                            <li><a href="{{ route('admin.blogs', ['type' => 'video']) }}">Video Blog</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ route('admin.faqs') }}"><i class="fa fa-question-circle"></i><span>FAQs</span></a>
                    </li>
                    <li><a href="{{ route('admin.team') }}"><i class="fa fa-users"></i><span>Team</span> </a></li>
                    <li><a href="{{ route('admin.testimonial') }}"><i
                                class="fa fa-comments"></i><span>Testimonials</span> </a></li>
                </ul>


            </div>
            <!-- End Sidebar -->

            <div class="clearfix"></div>


        </div>
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content bg-white">

                <!-- Start container-fluid -->
                <div class="container-fluid ">
                    @yield('content')
                    {{ $slot ?? '' }}
                </div>
                <!-- end container-fluid -->


                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                2024 &copy; @yield('pageTitle', config('app.name'))
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>
            <!-- end content -->

        </div>
        <!-- END content-page -->

    </div>


    <!-- END wrapper -->

    <!-- Vendor js -->
    <script>
        function copyToClipboard(id) {
            var copyText = document.getElementById(id);
            copyText.select();
            copyText.setSelectionRange(0, 99999);
            navigator.clipboard.writeText(copyText.value);
            alert("Copied ID : " + copyText.value);
        }
    </script>
    <script src="{{ asset('be_assets') }}/js/vendor.min.js"></script>
    <script src="{{ asset('be_assets/libs/select2/select2.min.js') }}"></script>
    <script src="{{ asset('be_assets/js/toastr.min.js') }}"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdn.tiny.cloud/1/1u178f7ms9g43b3j9xhz29kavccql06kciuwk1tahfak3z5s/tinymce/6/tinymce.min.js"
        referrerpolicy="origin"></script>

    <script src="{{ asset('be_assets') }}/js/app.min.js"></script>

    @livewireScripts

    <script>
        $(function() { //ready

            toastr.options = {
                "closeButton": true,
                "debug": false,
                "newestOnTop": false,
                "progressBar": false,
                "positionClass": "toast-top-right",
                "preventDuplicates": false,
                "hideDuration": "1000",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            };

            Livewire.on('success', message => {
                toastr.success(message);
            })

            @if (session()->has('success'))
                toastr.success('{{ session()->get('success') }}');
            @endif

            @if (session()->has('error'))
                toastr.error('{{ session()->get('error') }}');
            @endif

            Livewire.on('error', message => {
                toastr.error(message);

            })

        });
    </script>

    <script src="{{ asset('be_assets/js/main.js') }}"></script>

    @yield('script')

</body>

</html>

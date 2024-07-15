<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>@yield('title', config('app.name'))</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="{{asset('images')}}/ccl.png">

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
        .input-group{
            padding:15px;
            padding-left: 20px;
            border-radius: 12px;
            background-color: rgba(248, 248, 249, 1);
            border: 1px solid rgb(202, 202, 203);
        }

        .bg-orange{
            background-color: #FDAA3A;
        }
        .bg-green{
            background-color: #4CC071;
        }
        .bg-skyblue{
            background-color: #37CFFF;
        }
        .text-purple{
           color: #DE447B;
        }
        .bg-purple-2{
            background-color: rgba(194, 85, 161, 1);
        }
        .bg-purple{
            background-color: #DE447B;
        }
        .rounded-f{
            border-radius: 20px;
        }
        .bg-secondary-light {
            background-color: rgba(255, 233, 233, 1);
        }
        .title-greet{
            margin-right: 150px !important;
        }
        .top-menu{
            width: 75%
        }
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

        .overlay, .cover {
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

        .text-secondary-900{
            color: #5C0B43;
        }
        .text-secondary-2{
            color: #FF5E14;
        }
        .bg-secondary-900{
            background-color: #5C0B43;
        }
        .bg-secondary-2{
            background-color: #FF5E14;
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

        .btn.focus, .btn:focus {
            box-shadow: none;
        }
        </style>

    </head>

    <body>

        <!-- Begin page -->
        <div id="wrapper" class="w-100">


            <!-- Topbar Start -->
            <div class="navbar-custom ">
                <ul class="list-unstyled topnav-menu float-right mb-0">


                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle nav-user mr-0" data-toggle="dropdown" href="#"
                            role="button" aria-haspopup="false" aria-expanded="false">
                            <img src="{{ asset('be_assets') }}/images/users/avatar-1.jpg" alt="user-image"
                                class="rounded-circle">
                            <span class="pro-user-name ml-1 text-white">
                                {{auth()->user()->name}}
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">

                            <a href="{{ route('user.logout') }}" class="dropdown-item notify-item">
                                Logout
                            </a>
                            <a href="{{ route('user.change') }}" class="dropdown-item notify-item">
                                Change Password
                            </a>
                            <a href="{{ route('user.update') }}" class="dropdown-item notify-item">
                                Update Profile
                            </a>

                        </div>
                    </li>

                </ul>

                <!-- LOGO -->
                <div class="logo-box">
                    <a href="{{ route('user.dashboard') }}" class="logo text-center logo-dark">
                        <span class="logo-lg">

                            <span><x-logo.white /></span>
                            <!-- <span class="logo-lg-text-dark">Simple</span> -->
                        </span>
                        <span class="logo-sm">
                            <!-- <span class="logo-lg-text-dark">S</span> -->
                            <x-logo.small />

                        </span>
                    </a>

                    <a href="{{ route('user.dashboard') }}" class="logo text-center logo-light">
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
                            <i class="mdi mdi-menu text-white"></i>
                        </button>
                    </li>
                </ul>
            </div>
            <!-- end Topbar --> <!-- ========== Left Sidebar Start ========== -->
            <div class="left-side-menu pt-4">

                <div id="sidebar-menu">

                    <ul class="metismenu" id="side-menu">
                        <li>
                            <a href="{{ route('user.dashboard') }}">
                                <i class="fa fa-home"></i>
                                <span> Dashboard</span>
                            </a>
                        </li>
                        <li><a href="{{route('user.products')}}"><i class="fa fa-suitcase"></i><span>Products</span> </a>
                        </li>
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
                <div class="content">

                    <!-- Start container-fluid -->
                    <div class="container-fluid">
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
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Styles -->
    <title>@yield('title') | CamerCorner</title>
    <link rel="shortcut icon" href="{{asset('images')}}/ccl.png">
    @yield('more-meta')
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link href="{{ asset('be_assets') }}/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    @livewireStyles

    @yield('style')
</head>
<body>
    <header class="">
        <div class="bg-white ">
            <nav class=" ">
                <x-container class=" flex flex-wrap items-center justify-between py-4">
                    <a href="{{ route('web.home') }}" class="flex items-start">
                        <x-logo.dark />
                    </a>
                    <div class="flex gap-4 lg:hidden">
                        <div class="rounded-full bg-light p-2 mt-1">
                            <img src="{{asset('images/icons8_search 1.png')}}" alt="">
                        </div>
                        <button data-collapse-toggle="navbar-dropdown" type="button"
                            class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-secondary-500 rounded-lg  "
                            aria-controls="navbar-dropdown" aria-expanded="false">
                            <svg class="w-6 h-6 text-secondary-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 17 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M1 1h15M1 7h15M1 13h15"></path>
                            </svg>
                        </button>
                    </div>

                    {{-- Desktop Menu --}}
                    <div class="hidden w-full lg:block md:w-auto  absolute text-gray-700 lg:relative">
                        <ul
                            class="flex md:p-0  flex-col  font-medium p-4 mt-4 border rounded-lg lg:flex-row   md:mt-0 md:border-0">
                            <li class=" border-b-4 border-transparent">
                                <a href="{{route('web.home')}}"
                                    class=" flex h-full items-center  py-5  px-4  hover:text-secondary-500 {{ Route::is('web.home') ? 'text-secondary-500' : '' }}">Home
                                </a>
                            </li>
                            <li class=" border-b-4 border-transparent  ">
                                <x-dropdown width="w-72 shadow-lg" position="absolute">
                                    <x-slot name="trigger">
                                        <div
                                            class="flex py-5 px-4 cursor-pointer hover:text-secondary-500  justify-between items-center">
                                            <span
                                                class="mr-2 hover:text-secondary-500 {{ Route::is('about.*') || Route::is('about') ? 'text-secondary-500' : '' }}">
                                                How Can I Help</span> <p class="text-xl -mt-1">+</p>
                                        </div>
                                    </x-slot>
                                    <x-slot name="content" class="bg-white">
                                        <ul class="py-2 px-4 text-sm bg-white " aria-labelledby="dropdownLargeButton">
                                            <li class=" py-4  ">
                                                <div class="grid grid-row">
                                                    <a href="{{route('web.service-detail', ['id' => 6])}}"
                                                    class="hover:text-secondary-500 {{ Route::is('about') ? 'text-secondary-500' : '' }}">Online Consultation</a>
                                                </div>

                                            </li>
                                            <li class=" py-4 ">
                                                <div class="grid grid-row">
                                                    <a
                                                href="{{route('web.how_can_we_help')}}"
                                                    class="hover:text-secondary-500
                                                    {{-- {{ Route::is('web.how-it-works') ? 'text-secondary-500' : '' }} --}}
                                                    ">Home Consultation</span></a>
                                                </div>

                                            </li>
                                            <li class="py-4">
                                                <div class="grid grid-row">
                                                    <a href="{{route('web.service-detail', ['id' => 8])}}"
                                                    class="hover:text-secondary-500 {{ Route::is('about.blog') ? 'text-secondary-500' : '' }}">Medication Dispensing & Delivery</a>
                                                </div>

                                            </li>
                                            <li class="py-4">
                                                <div class="grid grid-row">
                                                    <a href="{{route('web.service-detail', ['id' => 9])}}"
                                                    class="hover:text-secondary-500 {{ Route::is('about.blog') ? 'text-secondary-500' : '' }}">Medication Monitoring & Adherence</a>
                                                </div>

                                            </li>
                                            <li class="py-4">
                                                <div class="grid grid-row">
                                                    <a href="{{route('web.service-detail', ['id' => 10])}}"
                                                class="hover:text-secondary-500 {{ Route::is('about.blog') ? 'text-secondary-500' : '' }}">Health Education Workshop</a>
                                                </div>

                                            </li>
                                            <li class="py-4">
                                                <div class="grid grid-row">
                                                    <a href="{{route('web.service-detail', ['id' => 11])}}"
                                                class="hover:text-secondary-500 {{ Route::is('about.blog') ? 'text-secondary-500' : '' }}">Rewards Program Referreals</a>
                                                </div>

                                            </li>
                                            <li class="py-4">
                                                <div class="grid grid-row">
                                                    <a href="{{route('web.service-detail', ['id' => 12])}}"
                                                class="hover:text-secondary-500 {{ Route::is('about.blog') ? 'text-secondary-500' : '' }}">Drug information request </a>
                                                </div>

                                            </li>
                                        </ul>
                                    </x-slot>
                                </x-dropdown>
                            </li>
                            <li class=" border-b-4 border-transparent   ">
                                <a href="{{ route('web.how_it_works') }}"
                                    class="flex h-full items-center  py-5 hover:text-secondary-500  px-4 {{ Route::is('faqs') ? 'text-secondary-500' : '' }}">
                                    How It Works</a>
                            </li>
                            <li class=" border-b-4 border-transparent ">
                                <a href="{{route('shop.index')}}"
                                    class="flex h-full items-center  py-5  hover:text-secondary-500 px-4 {{ Route::is('shop.*') ? 'text-secondary-500' : '' }} ">
                                    Shop</a>
                            </li>
                            <li class=" border-b-4 border-transparent  ">
                                <x-dropdown width="w-72 shadow-lg" position="absolute">
                                    <x-slot name="trigger">
                                        <div
                                            class="flex py-5 px-4 cursor-pointer hover:text-secondary-500  justify-between items-center">
                                            <span
                                                class="mr-2 hover:text-secondary-500 {{ Route::is('about.*') || Route::is('about') ? 'text-secondary-500' : '' }}">
                                                About Us</span> <p class="text-xl -mt-1">+</p>
                                        </div>
                                    </x-slot>
                                    <x-slot name="content" class="bg-white">
                                        <ul class="py-2 px-4 text-sm bg-white " aria-labelledby="dropdownLargeButton">
                                            <li class=" py-4  ">
                                                <div class="grid grid-row">
                                                    <a href="{{ route('web.about_us') }}"
                                                    class="hover:text-secondary-500 {{ Route::is('about') ? 'text-secondary-500' : '' }}">About BorderlessRX</a>
                                                </div>

                                            </li>
                                            <li class=" py-4  ">
                                                <div class="grid grid-row">
                                                    <a href="{{route('web.faq')}}"
                                                    class="hover:text-secondary-500 {{ Route::is('about.team') ? 'text-secondary-500' : '' }}">Frequently Asked Questions</a>
                                                </div>

                                            </li>
                                            <li class="py-4">
                                                <div class="grid grid-row">
                                                    <a href="{{ route('web.compliance') }}"
                                                    class="hover:text-secondary-500 {{ Route::is('about.blog') ? 'text-secondary-500' : '' }}">Compliance</a>
                                                </div>

                                            </li>
                                            <li class="py-4">
                                                <div class="grid grid-row">
                                                    <a href="{{route('web.private_policy')}}"
                                                    class="hover:text-secondary-500 {{ Route::is('about.blog') ? 'text-secondary-500' : '' }}">Privacy Policy</a>
                                                </div>

                                            </li>
                                            <li class="py-4">
                                                <div class="grid grid-row">
                                                    <a href="{{ route('web.blog') }}"
                                                class="hover:text-secondary-500 {{ Route::is('about.blog') ? 'text-secondary-500' : '' }}">Blog</a>
                                                </div>

                                            </li>
                                        </ul>
                                    </x-slot>
                                </x-dropdown>
                            </li>
                            <li class=" border-b-4 border-transparent   ">
                                <a href="{{route('web.faq')}}"
                                    class="flex h-full items-center  py-5 hover:text-secondary-500  px-4 {{ Route::is('web.faq') ? 'text-secondary-500' : '' }}">
                                    FAQ</a>
                            </li>
                            <li class=" border-b-4 border-transparent ">
                                <a href="{{route('web.contact_us')}}"
                                    class="flex h-full items-center  py-5  hover:text-secondary-500 px-4 {{ Route::is('contact') ? 'text-secondary-500' : '' }} ">
                                    Contact Us</a>
                            </li>

                            <li class=" border-b-4 border-transparent ">
                                <div class="rounded-full bg-light p-4 mt-1">
                                    <img src="{{asset('images/icons8_search 1.png')}}" alt="">
                                </div>
                            </li>
                            <li class=" border-b-4 border-transparent ">
                                <x-button.primary href="{{ route('web.how_can_we_help') }}" class="ml-4 justify-between items-center">
                                    Book Appointment <i class="fa fa-chevron-right"></i>
                                </x-button.primary>
                            </li>



                        </ul>
                    </div>

                    {{-- Mobile Menu --}}
                    <div class="hidden w-72 z-10 text-white absolute top-0 bottom-0 bg-footer shadow-xl -ml-4 "
                        id="navbar-dropdown" style="">
                        <div class="p-4">
                            <a href="{{ route('web.home') }}" class="flex items-center mb-5">
                                <x-logo.white />
                            </a>
                        </div>

                        <ul class="flex flex-col font-medium md:p-0">
                            <li class="">
                                <a href=""
                                    class="px-5 py-4 block text-white">Home</a>
                            </li>
                            <li class="px-5 py-4 block text-white">
                                <x-dropdown width="w-68" position="relative">
                                    <x-slot name="trigger">
                                        <div class="flex  items-center">
                                            <span class="mr-2"> How Can I Help</span>
                                            <p class="text-lg">+</p>
                                        </div>
                                    </x-slot>
                                    <x-slot name="content">
                                        <ul class="text-sm text-white" aria-labelledby="dropdownLargeButton">
                                            <li class=" pb-2 "><a href="{{route('web.service-detail', ['id' => 6])}}"
                                                                  class="hover:text-secondary-500 {{ Route::is('how_can_we_help') ? 'text-secondary-500' : '' }}">
                                                                  Online
                                                    Consultation</a>
                                            </li>
                                            <li class=" py-2  "><a href="{{route('web.how_can_we_help')}}"
                                                                   class="hover:text-secondary-500 {{ Route::is('how_can_we_help') ? 'text-secondary-500' : '' }}">
                                                                   Home
                                                    Consultation</a>
                                            </li>
                                            <li class="py-2"><a href="{{route('web.service-detail', ['id' => 8])}}"
                                                                class="hover:text-secondary-500 {{ Route::is('how_can_we_help') ? 'text-secondary-500' : '' }}">
                                                                Medication
                                                    Dispensing & Delivery</a>
                                            </li>
                                            <li class="py-2"><a href="{{route('web.service-detail', ['id' => 9])}}"
                                                                class="hover:text-secondary-500 {{ Route::is('how_can_we_help') ? 'text-secondary-500' : '' }}">
                                                                Medication
                                                    Monitoring & Adherence</a>
                                            </li>
                                            <li class="py-2"><a href="{{route('web.service-detail', ['id' => 10])}}"
                                                                class="hover:text-secondary-500 {{ Route::is('how_can_we_help') ? 'text-secondary-500' : '' }}">Health
                                                    Education Workshop</a>
                                            </li>
                                            <li class="py-2"><a href="{{route('web.service-detail', ['id' => 11])}}"
                                                                class="hover:text-secondary-500 {{ Route::is('how_can_we_help') ? 'text-secondary-500' : '' }}">Rewards
                                                    Program Referreals</a>
                                            </li>
                                            <li class="pt-2">
                                                <a href="{{route('web.service-detail', ['id' => 12])}}"
                                                                class="hover:text-secondary-500 {{ Route::is('how_can_we_help') ? 'text-secondary-500' : '' }}">Drug
                                                    information request </a>
                                            </li>
                                        </ul>
                                    </x-slot>
                                </x-dropdown>
                            </li>
                            <li>
                                <a href=""
                                   class="px-5 py-4 block text-white ">How It Works</a>
                            </li>
                            <li>
                                <a href="{{route('shop.index')}}" class="px-5 py-4 block text-white ">
                                    Shop</a>
                            </li>
                            <li class="px-5 py-4 block text-white">
                                <x-dropdown width="w-68" position="relative">
                                    <x-slot name="trigger">
                                        <div class="flex  items-center">
                                            <span class="mr-2"> About Us</span> <p class="text-lg">+</p>
                                        </div>
                                    </x-slot>
                                    <x-slot name="content">
                                        <ul class="text-sm text-white" aria-labelledby="dropdownLargeButton">
                                            <li class=" pb-2  "><a href="{{ route('web.about_us') }}"
                                                class="hover:text-secondary-500 {{ Route::is('about') ? 'text-secondary-500' : '' }}">About BorderlessRX</a>
                                        </li>
                                        <li class=" py-2  "><a href="{{route('web.faq')}}"
                                                class="hover:text-secondary-500 {{ Route::is('about.team') ? 'text-secondary-500' : '' }}">Frequently Asked Questions</a>
                                        </li>
                                        <li class="py-2"><a href="{{route('web.compliance')}}"
                                                class="hover:text-secondary-500 {{ Route::is('about.blog') ? 'text-secondary-500' : '' }}">Compliance</a>
                                        </li>
                                        <li class="py-2"><a href="{{route('web.private_policy')}}"
                                                class="hover:text-secondary-500 {{ Route::is('about.blog') ? 'text-secondary-500' : '' }}">Privacy Policy</a>
                                        </li>
                                        <li class="pt-2"><a href="{{route('web.blog')}}"
                                            class="hover:text-secondary-500 {{ Route::is('about.blog') ? 'text-secondary-500' : '' }}">Blog</a>
                                        </li>
                                        </ul>
                                    </x-slot>
                                </x-dropdown>
                            </li>
                            <li>
                                <a href="{{route('web.faq')}}"
                                    class="px-5 py-4 block text-white ">FAQs</a>
                            </li>

                            <li>
                                <a href="{{route('web.contact_us')}}"
                                    class="px-5 py-4 block text-white ">Conntact Us</a>
                            </li>
                            <li class=" border-b-4 border-transparent mt-4 ">
                                <button class="bg-secondary-500  ml-4 text-white text-base font-normal justify-between items-center p-4">
                                    Book Appointment <i class="fa fa-chevron-right"></i>
                                </button>
                            </li>

                        </ul>
                    </div>

                    <div class="hidden">
                        <div class="hidden">
                            {{--                    <x-button class="hidden lg:block"> --}}
                            {{--                        <img src="{{asset('images/search.svg')}}"/> --}}
                            {{--                    </x-button> --}}
                        </div>

                </x-container>
            </nav>
        </div>

    </header>


{{$slot}}

<footer class="mt-auto  text-[#C7C7C7]  z-10 " style="background-image: url('{{'images/footer-bg.png'}}')">
    <div class="  w-full  pb-10 lg:pb-0  h-full bg-footer opacity-95 ">
        <!-- ====== Footer Section Start -->

        <x-container class=" lg:py-8  opacity-100">

            <div class="flex flex-wrap  ">
                <div class="w-full px-4 pt-16 sm:w-2/3 lg:w-3/12">
                    <div class="w-full ">
                        <a href="javascript:void(0)" class="inline-block max-w-[160px]">
                            <x-logo.white></x-logo.white>
                        </a>
                        <p class="text-base mt-4 font-normal   mb-7">
                            At CamerCorner, we understand the importance of timely and reliable good ordering and delivery. That's why we've created a seamless platform where you can easily access your favorite stores from the comfort of your home

                        </p>
                    </div>
                </div>
                <div class="w-full px-4 sm:w-1/2 lg:w-3/12">
                    <div class="w-full pb-8  pt-16">
                        <h4 class="text-xl font-bold text-secondary-500  mb-9">
                            Useful Links
                        </h4>
                        <ul class="space-y-3">
                            <li>
                                <a href="{{route('shop.index')}}"
                                    class="inline-block text-base leading-loose  hover:text-secondary-500 ">
                                    Shop
                                </a>
                            </li>
                            <li>
                                <a href="{{route('web.faq')}}"
                                    class="inline-block text-base leading-loose  hover:text-secondary-500 ">
                                    Frequently Asked Questions
                                </a>
                            </li>
                            <li>
                                <a href="{{route('web.private_policy')}}"
                                    class="inline-block text-base leading-loose  hover:text-secondary-500 ">
                                    Privacy Policy
                                </a>
                            </li>
                            <li>
                                <a href="{{route('web.terms-condition')}}"
                                    class="inline-block text-base leading-loose  hover:text-secondary-500 ">
                                    Terms and Condtions
                                </a>
                            </li>
                            <li>
                                <a href="{{route('web.refund_policy')}}"
                                    class="inline-block text-base leading-loose  hover:text-secondary-500 ">
                                    Refund Policy
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="w-full px-4 sm:w-1/2 lg:w-3/12">
                    <div class="w-full pb-8  pt-16">
                        <h4 class="text-xl font-bold text-secondary-500  mb-9">
                            Our Services
                        </h4>
                        <ul class="space-y-3">
                            <li>
                                <a href="{{route('web.how_can_we_help')}}"
                                    class="inline-block text-base leading-loose  hover:text-secondary-500 ">
                                    Home Delivary
                                </a>
                            </li>
                            <li>
                                <a href="{{route('web.service-detail', ['id' => 8])}}"
                                    class="inline-block text-base leading-loose  hover:text-secondary-500 ">
                                    Become an Agent
                                </a>
                            </li>
                            <li>
                                <a href="{{route('web.service-detail', ['id' => 6])}}"
                                    class="inline-block text-base leading-loose  hover:text-secondary-500 ">
                                    become a seller
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="w-full px-4 sm:w-1/2 lg:w-3/12">
                    <div class="w-full pb-8 pt-16">
                        <h4 class="text-xl font-bold text-secondary-500  mb-9">
                            Find & Connect With Us
                        </h4>
                        <ul class="space-y-3">
                            <li>
                                <a href=""
                                    class="inline-block text-base leading-loose  hover:text-secondary-500 ">
                                    Buea, Molyko Dirthy South,
                                    Ivanotechs Enterprices
                                </a>
                            </li>
                            <li>
                                <a href="{{route('web.contact_us')}}"
                                    class="inline-block text-base leading-loose  hover:text-secondary-500 ">
                                    +237 670011942
                                </a>
                            </li>
                            <li class="">
                                <div class="flex gap-4 mt-16">
                                    <div class="rounded-full  text-black p-2 px-2 hover:text-white hover:bg-secondary-500">
                                        {{-- <i class="fa fa-facebook"></i> --}}
                                        <img src="{{asset('images/icon-facebook.svg')}}" alt="">
                                    </div>
                                    <div class="rounded-full text-black p-2 px-2 hover:text-white hover:bg-secondary-500">
                                        {{-- <i class="fa fa-youtube-play"></i> --}}
                                        <img src="{{asset('images/icon-youtube.svg')}}" alt="">
                                    </div>
                                    <div class="rounded-full text-black p-2 px-2 hover:text-white hover:bg-secondary-500">
                                        {{-- <i class="fa fa-linkedin"></i> --}}
                                        <img src="{{asset('images/icon-linkedin.svg')}}" alt="">
                                    </div>
                                    <div class="rounded-full text-black p-2 px-2 hover:text-white hover:bg-secondary-500">
                                        {{-- <i class="fa fa-twitter"></i> --}}
                                        <img src="{{asset('images/icon-twitter.svg')}}" alt="">
                                    </div>
                                </div>

                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </x-container>
    </div>
    <!-- ====== Footer Section End -->
    <div class=" py-4 text-[#C7C7C7] bg-footer border-t-[0.5px] border-t-light">
        <x-container class="mx-auto flex items-center justify-center w-full max-w-screen-xl">
            <span class="text-sm  ">All rights reserves © 2024. CamerCorner
            </span>
        </x-container>

    </div>

</footer>

@livewireScripts
<!-- Scripts -->
<script src="{{asset('be_assets')}}/js/vendor.min.js"></script>
<script src="{{asset('be_assets/js/toastr.min.js') }}"></script>
<script src="{{ asset('js/app.js') }}" defer></script>
<script src="https://unpkg.com/@material-tailwind/html@latest/scripts/collapse.js"></script>
<script>
    $(function () { //ready

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

        @if(session()->has('success'))
        toastr.success('{{session()->get("success")}}');
        @endif

        @if(session()->has('error'))
        toastr.error('{{session()->get("error")}}');
        @endif

        Livewire.on('error', message => {
            toastr.error(message);

        })

    });
</script>

</body>
</html>

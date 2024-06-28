<div>
    @section('title', 'Home')
    <div class="mt-8" style="background: linear-gradient(180deg, #FFFFFF 0%, #F4FFF3 100%); ">
        <x-container>
            <div class="grid grid-cols-5 gap-4">
                <div class="col-span-5 lg:col-span-2 ">
                    <div class="flex items-center h-full">
                        <span class="">
                            <p class="text-6xl font-semibold mb-4">Welcome to</p>
                            <p class="text-6xl text-secondary-500 font-semibold mb-4">BorderlessRx</p>
                            <p class="text-base mb-16">Your trusted platform for connecting with experienced pharmacists for personalized consultations on minor ailments and medication management.</p>
                            <div class="p-4 border-l bg-white border-l-secondary-500">
                                <span>
                                    <p class="text-base font-bold text-secondary-500 mb-4">How can we help you today?</p>
                                    <div class="flex gap-2 items-center">
                                        <select name="" id="" class="p-4 px-8">
                                            <option value="">Select Service</option>
                                        </select>
                                        <x-button.primary class="bg-secondary-500 ml-4 text-white text-base font-normal justify-between items-center p-4">
                                            Get Started <i class="fa fa-chevron-right"></i>
                                        </x-button.primary>
                                    </div>
                                </span>
                            </div>
                        </span>
                    </div>

                </div>
                <div class="lg:col-span-3 hidden lg:flex py-4">
                    <img src="{{ asset('images/img-home-hero.png') }}" alt="" class="w-full">
                </div>
            </div>
        </x-container>
    </div>
    <section>
        <x-container class="mt-16">
            <div class="flex justify-center text-center text-dark-400 mb-4">
                <span>
                    <p class="font-semibold text-4xl mb-4">Our Services</p>
                    <p class="text-base md:w-[529px]"> At Borderless, we understand the importance of timely and reliable healthcare advice. That's why we've created a seamless platform where you can easily access professional guidance from licensed pharmacists from the comfort of your home.</p>
                </span>
            </div>

            <div class="grid grid-cols-4 gap-3">
                @if($services->isNotEmpty())
                @foreach ($services as $service)
    
                    <div class="col-span-4 md:col-span-2 lg:col-span-1">
                        <a href="{{route('web.service-detail', ['id' => $service->id])}}">
                        <div class="p-8 group py-12 shadow-xl shadow-green-shadow hover:bg-secondary-500 hover:text-white">
                            <span>
                                <div class="rounded-full p-4 bg-secondary-300 w-16 mb-8">
                                    @if($service->icon)
                                    <img src="{{asset($service->icon)}}" alt="">
                                    @else
                                    <img src="{{asset('images/icons8_cash_in_hand.png')}}" alt="">
                                    @endif
                                </div>
                                <p class="text-xl font-bold mb-4">{{$service->title}}</p>
                                <p class="text-base text-dark-400 mb-4 group-hover:text-white">
                                    {!! substr(strval($service->description),0,100) !!}
                                </p>
                                <a href="" class="text-base text-secondary-500 group-hover:text-white"> Book Appointment <i class="fa fa-arrow-right"></i></a>
                            </span>
                        </div>
                    </a>
                    </div>
                   
                @endforeach

                @else

                    <div class="col-span-4">
                        <div class="grid grid-row text-center">
                            <p class="h3">No Services found.</p>
                        </div>
                    </div>



                @endif

            </div>
        </x-container>
    </section>

    <section class="my-12">
        <div class="bg-secondary-500">
            <x-container class="py-12">
                <div class="grid grid-cols-2">
                    <div class="md:col-span-1">
                        <img src="{{asset('images/img-home-about-us.png')}}" alt="">
                    </div>
                    <div class="md:col-span-1">
                        <div class="ml-16 text-white h-full flex items-center">
                            <span>
                                <p class="text-base font-bold mb-4">ABOUT US</p>
                                <p class="text-4xl font-semibold mb-4">Connecting With Experienced Pharmacists</p>
                                <p class="font-normal text-base mb-2">Welcome to BorderlessRx, your trusted platform for connecting with experienced pharmacists for personalized consultations on minor ailments and medication management.
                                </p>
                                <button class="bg-secondary-100 p-3 text-secondary-500 font-medium text-base">Learn More</button>
                            </span>
                        </div>
                    </div>
                </div>
            </x-container>
        </div>
    </section>

    <section class="my-12">
        <x-container>
            <div class="flex justify-center text-center text-dark-400 mb-4">
                <span>
                    <p class="font-semibold text-4xl mb-2">Subscribe to our</p>
                    <p class="font-semibold text-4xl mb-4 text-secondary-500">BordelessRX Health Pack</p>
                    <p class="text-base md:w-[570px] mb-4"> Lorem ipsum dolor sit amet consectetur. Ut erat dui urna pellentesque condimentum eu dui scelerisque. Pulvinar tortor et massa faucibus viverra lacus in et nec. Platea nisi quam et sem mauris. Feugiat quam in bibendum urna suspendisse ullamcorper commodo mi.</p>
                    <button class="bg-secondary-500 ml-4 text-secondary-100 text-base font-normal justify-between items-center p-4">
                        Subscribe Now
                    </button>
                </span>
            </div>

            <div class="grid grid-cols-5 mt-4">
                <div class="hidden lg:flex lg:col-span-3">
                    <img src="{{asset('images/Group 20.png')}}" alt="" class="w-full">
                </div>
                <div class="col-span-5 lg:col-span-2">
                    <div class="text-dark-400">
                        <span>
                            <p class="text-secondary-700 text-base font-bold mb-2">SUBSCRIPTION BENEFITS</p>
                            <p class="text-4xl font-semibold text-dark-400 ">Why choose our</p>
                            <div class="flex mb-8">
                                <p class="text-4xl font-semibold text-secondary-500 ">Subscription Pack</p>
                                <p class="text-4xl font-semibold text-dark-400 ">?</p>
                            </div>
                            <div class="flex mb-4 items-center gap-4">
                                <img src="{{asset('images/Frame 20.png')}}" alt="">
                                <p class="text-base ">Free home consults plus free delivery</p>
                            </div>
                            <div class="flex mb-4 items-center gap-4">
                                <img src="{{asset('images/Frame 20.png')}}" alt="">
                                <p class="text-base ">Free home travel consultation clinics</p>
                            </div>
                            <div class="flex mb-4 items-center gap-4">
                                <img src="{{asset('images/Frame 20.png')}}" alt="">
                                <p class="text-base ">Free pick-up and disposal of expired drugs and medical equipment...</p>
                            </div>
                            <div class="flex mb-4 items-center gap-4">
                                <img src="{{asset('images/Frame 20.png')}}" alt="">
                                <p class="text-base ">Medication reviews for complex medication regimes</p>
                            </div>
                            <div class="flex mb-4 items-center gap-4">
                                <img src="{{asset('images/Frame 20.png')}}" alt="">
                                <p class="text-base ">Free Medication delivery ( for recurring medications.. such as therapy for acne and contraceptives)</p>
                            </div>
                            <div class="flex mb-4 items-center gap-4">
                                <img src="{{asset('images/Frame 20.png')}}" alt="">
                                <p class="text-base ">Get 50% off virtual travel consultations </p>
                            </div>
                            <div class="flex mb-4 items-center gap-4">
                                <img src="{{asset('images/Frame 20.png')}}" alt="">
                                <p class="text-base ">Get 50% off injection fee serviced for non public vaccines                                </p>
                            </div>
                            <div class="flex mb-4 items-center gap-4">
                                <img src="{{asset('images/Frame 20.png')}}" alt="">
                                <p class="text-base ">Free home administration of injectionable medication                                </p>
                            </div>
                            <div class="flex mb-8 items-center gap-4">
                                <img src="{{asset('images/Frame 20.png')}}" alt="">
                                <p class="text-base ">Book appointments with our counsellor                               </p>
                            </div>
                            <div class="p-4 px-6 bg-secondary-100 shadow-lg shadow-green-shadow mb-8">
                                <div class="flex gap-2">
                                    <div class="p-2 bg-white">
                                        <img src="{{asset('images/icon-donate.svg')}}" alt="">
                                    </div>
                                    <p class="text-base font-bold text-secondary-700">$2 supports the less privileged & global warming campaign
                                    </p>
                                </div>
                            </div>
                            <div class="flex justify-between items-center ">
                                <div>
                                    <span>
                                        <p class="text-[13px] font-bold text-dark-400">Price</p>
                                        <p class="text-xl font-bold text-dark-400">$100 CAD/ for 1 year</p>
                                    </span>
                                </div>
                                <button class="bg-secondary-500 ml-4 text-secondary-100 text-base font-normal justify-between items-center p-4">
                                    Subscribe Now
                                </button>
                            </div>
                        </span>
                    </div>
                </div>
            </div>

        </x-container>
    </section>

    <section class=" bg-home-last-section">
        <x-container class="py-16">
            <div class="flex justify-between items-end mb-8">
                <p class="font-semibold text-dark-400 text-4xl mb-2">Latest Posts</p>
                <button class="bg-secondary-500 ml-4 text-secondary-100 text-base font-normal justify-between items-center p-4">
                    View All <i class="fa fa-chevron-right"></i>
                </button>
            </div>
            <div class="grid grid-cols-2 gap-4">
                <div class="col-span-2 lg:col-span-1">
                    <div>
                        <span>
                            <img src="{{asset('images/blogs.jpeg')}}" class="rounded-ee-[2rem]" alt="">
                            <p class="mt-3 text-secondary-500 text-bold text-2xl">BC pharmacists can now prescribe for minor ailments and contraception</p>
                        </span>
                    </div>
                </div>
                <div class="col-span-2 lg:col-span-1">
                    <span>
                        @for ($i = 0; $i < 3; $i++)
                            <div class="flex gap-4 mb-4 items-center">
                                <img src="{{asset('images/blogs.jpeg')}}" class="rounded-ee-2xl w-[204px]" alt="">
                                <p class="mt-3 text-dark-400 text-bold text-xl">BC pharmacists can now prescribe for minor ailments and contraception</p>
                            </div>
                        @endfor
                    </span>


                </div>
            </div>
        </x-container>
    </section>

</div>

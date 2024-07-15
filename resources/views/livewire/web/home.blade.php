<div>
    @section('title', 'Home')
    <div class="mt-8 pb-16" style="background: linear-gradient(180deg, #FFFFFF 0%, #FFF3EE 100%); ">
        <x-container>
            <div class="grid grid-cols-5 gap-4">
                <div class="col-span-5 lg:col-span-2 ">
                    <div class="flex items-center h-full">
                        <span class="">
                            <p class="text-6xl font-semibold mb-4">Welcome to</p>
                            <p class="text-6xl text-secondary-500 font-semibold mb-4">CamerCorner</p>
                            <p class="text-base mb-16">Your trusted hypermarket where you can buy or sell any good or service at your own customised price, be the govenor of your belongings</p>
                            <div class="p-4 border-l bg-white border-l-secondary-500">
                                <span>
                                    <p class="text-base font-bold text-secondary-500 mb-4">How can we help you today?</p>
                                    <div class="flex gap-2 items-center">
                                        <x-button.transparent>
                                            Buy Something <i class="fa fa-cart-plus ml-4"  aria-hidden="true"></i>
                                        </x-button.transparent>
                                        <x-button.primary href="{{route('shop.index')}}" class="bg-secondary-500 ml-4 text-white text-base font-normal justify-center items-center p-4">
                                            Sell Something<i class="fa fa-chevron-right"></i>
                                        </x-button.primary>
                                    </div>
                                </span>
                            </div>
                        </span>
                    </div>

                </div>
                <div class="lg:col-span-3 hidden lg:flex py-4">
                    <img src="{{ asset('images/cc/hero-cc.jpg') }}"  alt="" class="w-full rounded-2xl">
                </div>
            </div>
        </x-container>
    </div>
    <section>
        <x-container class="mt-16">
            <div class="flex justify-center text-center text-dark-400 mb-4">
                <span>
                    <p class="font-semibold text-4xl mb-4">Our Services</p>
                    <p class="text-base md:w-[529px]"> At CamerCorner, we understand the importance of timely and reliable good ordering and delivery. That's why we've created a seamless platform where you can easily access your favorite stores from the comfort of your home.</p>
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
                                <a href="" class="text-base text-secondary-500 group-hover:text-white"> Go to Shop <i class="fa fa-arrow-right"></i></a>
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
                        <img src="{{asset('images/cc/online-shop.jpg')}}" class="rounded-2xl" alt="">
                    </div>
                    <div class="md:col-span-1">
                        <div class="ml-16 text-white h-full flex items-center">
                            <span>
                                <p class="text-base font-bold mb-4">ABOUT US</p>
                                <p class="text-4xl font-semibold mb-4">Connecting With Verified stores and Services</p>
                                <p class="font-normal text-base mb-2">Welcome to CamerCorner, Your trusted hypermarket where you can buy or sell any good or service at your own customised price, be the govenor of your belongings
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
                    <p class="font-semibold text-4xl mb-2">Subscibe to our</p>
                    <p class="font-semibold text-4xl mb-4 text-secondary-500">CamerCorner Seller Pack</p>
                    <p class="text-base md:w-[570px] mb-4"> This account gives you the possibility to sell on our application. You can sell either your own goods or you can sell in dropshipping other peoples goods for profit only</p>
                    <button class="bg-secondary-500 ml-4 text-secondary-100 text-base font-normal justify-between items-center p-4">
                        Sell Now
                    </button>
                </span>
            </div>

            <div class="grid grid-cols-5 mt-4">
                <div class="hidden lg:flex lg:col-span-3">
                    <img src="{{asset('images/cc/service-section.jpg')}}" alt="" class="shadow-lg rounded-2xl">
                </div>
                <div class="col-span-5 lg:col-span-2">
                    <div class="text-dark-400">
                        <span>
                            <p class="text-secondary-700 text-base font-bold mb-2">SUBSCRIPTION BENEFITS</p>
                            <p class="text-4xl font-semibold text-dark-400 ">Why choose our</p>
                            <div class="flex mb-8">
                                <p class="text-4xl font-semibold text-secondary-500 ">CamerCorner Seller Pack</p>
                                <p class="text-4xl font-semibold text-dark-400 ">?</p>
                            </div>
                            <div class="flex mb-4 items-center gap-4">
                                <div class="rounded-full bg-secondary-500 p-2 flex justify-center alight-center ">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <p class="text-base ">Upload goods and services for selling</p>
                            </div>
                            <div class="flex mb-4 items-center gap-4">
                                <div class="rounded-full bg-secondary-500 p-2 flex justify-center alight-center ">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <p class="text-base ">Sell goods in dropshipping and the owner delivers</p>
                            </div>
                            <div class="flex mb-4 items-center gap-4">
                                <div class="rounded-full bg-secondary-500 p-2 flex justify-center alight-center ">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <p class="text-base ">Get your goods delivered</p>
                            </div>
                            <div class="flex mb-4 items-center gap-4">
                                <div class="rounded-full bg-secondary-500 p-2 flex justify-center alight-center ">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <p class="text-base ">E-Wallet to manage your store entries</p>
                            </div>
                            <div class="flex mb-4 items-center gap-4">
                                <div class="rounded-full bg-secondary-500 p-2 flex justify-center alight-center ">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <p class="text-base ">Access to customer Review</p>
                            </div>

                            <div class="p-4 px-6 bg-light shadow-lg shadow-green-shadow mb-8">
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
                                        <p class="text-xl font-bold text-dark-400">XAF1000 / for 1 month</p>
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
                            <img src="{{asset('images/cc/hero-cc.jpg')}}" class="rounded-ee-[2rem]" alt="">
                            <p class="mt-3 text-secondary-500 text-bold text-2xl">How to fill your wish list and set a goal</p>
                        </span>
                    </div>
                </div>
                <div class="col-span-2 lg:col-span-1">
                    <span>
                        @for ($i = 0; $i < 3; $i++)
                            <div class="flex gap-4 mb-4 items-center">
                                <img src="{{asset('images/cc/hero-cc.jpg')}}" class="rounded-ee-2xl w-[204px]" alt="">
                                <p class="mt-3 text-dark-400 text-bold text-xl">How to fill your wish list and set a goal</p>
                            </div>
                        @endfor
                    </span>


                </div>
            </div>
        </x-container>
    </section>

</div>

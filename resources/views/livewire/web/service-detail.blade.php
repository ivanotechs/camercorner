<div>
    {{-- Success is as dangerous as failure. --}}
    <x-container>
        <div class="spacer-1"></div>

        @if($checking)
        <div class="grid grid-row">
            <div class="grid grid-cols-12">
                <div class="col-span-12 md:col-span-5 px-12 justify-center items-center">
                    <img src="{{ $checking->image }}" alt="imgr1" srcset="" >
                </div>
                <div class="col-span-12 md:col-span-6 my-auto">
                    <p class="h3">{{$checking->title}}</p>
                </div>
            </div>
        </div>
        <div class="spacer-05"></div>
        <div class="grid grid-row my-5">
            <p>
                {{$checking->description}}
            </p>
        </div>

        @else
        <div class="">
            <div class="grid grid-row text-center">
                <p class="h3">No Services found.</p>
            </div>
        </div>
        @endif

        <div class="grid grid-row my-6">
            <p class="h4">Check oour services</p>
        </div>

        <div class="grid grid-row">
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
                                    {{$service->description}}
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
        </div>

        <div class="spacer-1"></div>
    </x-container>
</div>

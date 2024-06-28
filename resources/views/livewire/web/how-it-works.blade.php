<div>
   @section('title','How it works')
   <div class="bg-primary-lighter">
    @include('components.header', [
        'title' => 'How it Works',
        'inactive_path' => 'Home',
        'inactive_path' => 'How it works',
        'active_path' => 'Home Consultation'
        ])
    <x-container>

        <div class="grid grd-cols-5 gap-4">
            <div class="col-span-5 bg-light">
                <div class="grid grid-row">
                    <p class="text-center h3 my-9">Home Consultation</p>
                </div>

                <div class="grid grid-row my-5">
                    <div class="grid grid-cols-10 ">
                        <div class="md:col-1"></div>
                        <div class="col-span-10 md:col-span-4 my-auto py-5">
                            <div class="grid grid-cols-12">

                                <div class="col-span-2 sm:col-span-2 ms-10 md:ms-0">
                                    <img src="{{ asset('images/icon-how-it-works-home-consultation-1.png')}}" alt="icon" srcset="">
                                </div>

                                <div class=" col-span-9 sm:col-span-7 my-auto">
                                    <div class="grid grid-row px-4 sm:px-0">
                                       <p class="h6">
                                        Complete the patient in take form
                                       </p>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-span-10 md:col-span-4 ">
                            <img src="{{ asset('images/img-how-it-works-home-consultation-1 (1).png') }}" alt="imgr1" srcset="">
                        </div>
                        <div class="md:col-1"></div>
                    </div>
                </div>

                <div class="grid grid-row my-8">
                    <div class="grid grid-cols-10 ">
                        <div class="md:col-1"></div>
                        <div class="hidden md:block col-span-4 py-5">
                            <img src="{{ asset('images/img-how-it-works-home-consultation-2 (3).png') }}" alt="imgr1" srcset="" class="w-full">
                        </div>
                        <div class="col-span-10 md:col-span-4 my-auto p-5">
                            <div class="grid grid-cols-12 ">

                                <div class="col-span-2 sm:col-span-2 ms-10 md:ms-0">
                                    <img src="{{ asset('images/icon-how-it-works-home-consultation-2.png')}}" alt="icon" srcset="">
                                </div>

                                <div class=" col-span-9 sm:col-span-7 my-auto ">
                                    <div class="grid grid-row px-4 sm:px-0">
                                       <p class="h6">
                                        Sign confidenciality agreement and consent form
                                       </p>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-span-10 block md:hidden py-5">
                            <img src="{{ asset('images/img-how-it-works-home-consultation-2 (3).png') }}" alt="imgr1" srcset=""  class="w-full">
                        </div>
                        <div class="md:col-1"></div>
                    </div>
                </div>

                <div class="grid grid-row my-5">
                    <div class="grid grid-cols-10 ">
                        <div class="md:col-1"></div>
                        <div class="col-span-10 md:col-span-4 my-auto py-5">
                            <div class="grid grid-cols-12">

                                <div class="col-span-2 sm:col-span-2 ms-10 md:ms-0">
                                    <img src="{{ asset('images/icon-how-it-works-home-consultation-3.png')}}" alt="icon" srcset="">
                                </div>

                                <div class=" col-span-9 sm:col-span-7 my-auto">
                                    <div class="grid grid-row px-4 sm:px-0">
                                       <p class="h6">
                                        Check off the symptoms u are presenting with
                                       </p>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-span-10 md:col-span-4 py-5">
                            <img src="{{ asset('images/img-how-it-works-home-consultation-3 (3).png') }}" alt="imgr1" srcset=""  class="w-full">
                        </div>
                        <div class="md:col-1"></div>
                    </div>
                </div>

                <div class="grid grid-row my-5">
                    <div class="grid grid-cols-10 ">
                        <div class="md:col-1"></div>
                        <div class="hidden md:block md:col-span-4 py-5">
                            <img src="{{ asset('images/img-how-it-works-home-consultation-4 (3).png') }}" alt="imgr1" srcset=""  class="w-full">
                        </div>
                        <div class="col-span-10 md:col-span-4 my-auto p-5">

                            <div class="grid grid-cols-12">
                                <div class="col-span-2 sm:col-span-2  ms-10 md:ms-0">
                                    <img src="{{ asset('images/icon-how-it-works-home-consultation-4.png')}}" alt="icon" srcset="">
                                </div>

                                <div class=" col-span-9 sm:col-span-7 my-auto">
                                    <div class="grid grid-row ps-4">
                                       <p class="h6">
                                        Indicate what time u will like to receive the service
                                       </p>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <div class="block md:hidden ms-10 md:ms-0 col-span-10 py-5">
                            <img src="{{ asset('images/img-how-it-works-home-consultation-4 (3).png') }}" alt="imgr1" srcset=""  class="w-full">
                        </div>
                        <div class="md:col-1"></div>
                    </div>
                </div>

                <div class="grid grid-row  my-5">
                    <div class="grid grid-cols-10 ">
                        <div class="md:col-1"></div>
                        <div class="col-span-10 md:col-span-4 my-auto py-5">
                            <div class="grid grid-cols-12">

                                <div class="col-span-2 sm:col-span-2 my-auto ms-10 md:ms-0">
                                    <img src="{{ asset('images/icon-how-it-works-home-consultation-5.png')}}" alt="icon" srcset="">
                                </div>



                                <div class="col-span-9 sm:col-span-7">
                                    <div class="grid grid-row">
                                        <p class="h6 ps-4 pe-4 sm:pe-0 ">
                                            Submit your request and wait for us to connect you with our pharmacist at a time and place most convient for you
                                        </p>
                                    </div>

                                    <div class="grid grid-row">
                                        <div class=" ms-0 pt-5">
                                            <x-button.primary>
                                                Book Appointment <i class="fa fa-chevron-right ml-4"></i>
                                            </x-button.primary>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                        <div class="col-span-10 md:col-span-4 py-5">
                            <img src="{{ asset('images/img-how-it-works-home-consultation-5 (3).png') }}" alt="imgr1" srcset=""  class="w-full">
                        </div>
                        <div class="md:col-1"></div>
                    </div>
                </div>

                <div class="grid grid-row mt-4 ">
                    <div class="grid grid-cols-10 gap-4">
                        <div class="md:col-1"></div>
                        <div class="col-span-10 md:col-span-8 bg-primary-lighter">
                            <p class="py-6 px-10 p">
                                Instant appointment are limited to the geographical area of Abbotsford at the moment.. any other
                                jurisdiction will depend on distance between the place for service and our local pharmacy at abbotsford
                            </p>


                        </div>

                        <div class="md:col-1"></div>
                    </div>
                </div>

                <div class="grid grid-row">
                    <div class="spacer-1"></div>
                </div>

            </div>
        </div>
    </x-container>
   </div>
</div>

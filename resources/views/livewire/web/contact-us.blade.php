<div>
    {{-- Do your work, then step back. --}}
    @section('title','Contact us')
    @include('components.header', [
        'title' => 'Contact Us',
        'inactive_path' => 'Home',
        'active_path' => 'Contact Us'
        ])

        {{-- <div > --}}
            <x-container>
               <div style="min-height: 100vh">


                <div class="spacer-1"></div>
                <div class="grid grid-cols-12">
                    <div class="col-span-12 md:col-span-6">
                        <div class="grid grid-cols-12">
                            {{-- <div class="col-1"></div> --}}

                            <div class="col-span-11">
                               <form action="" method="post">
                                <div class="grid grid-row mb-4">
                                    <p class="p-strong">Please feel free to reach out to us with any questions, comments, or concerns. </p>
                                </div>
                                <div class="grid grid-row mt-4">
                                    <p class="p-strong"><span class="label-required">*</span>Name</p>
                                </div>
                                <div class="grid grid-row mb-4">
                                    <input type="text" name="name" id="name" class="input">
                                </div>
                                <div class="grid grid-row mt-4">
                                    <p class="p-strong"><span class="label-required">*</span>Email</p>
                                </div>
                                <div class="grid grid-row mb-4">
                                    <input type="text" id="email" name="email" class="input">
                                </div>
                                <div class="grid grid-row mt-4">
                                    <p class="p-strong">Subject</p>
                                </div>
                                <div class="grid grid-row mb-4">
                                    <input type="text" name="subject" id="subject" class="input">
                                </div>
                                <div class="grid grid-row mt-4">
                                    <p class="p-strong">Message</p>
                                </div>
                                <div class="grid grid-row mb-4">
                                    <textarea id="message" name="message" required rows="4" class="input-message"></textarea>
                                </div>
                                <div class="grid grid-row mt-6">
                                    <x-button.primary class="ms-0 text-center">
                                        Send Message
                                    </x-button.primary>
                                </div>
                               </form>
                            </div>

                            {{-- <div class="col-1"></div> --}}
                        </div>
                    </div>


                    <div class="col-span-6 hidden md:block">

                        <div class="grid grid-row bg-primary-contact-1">
                            <div class="">

                            <div class="spacer-05"></div>
                            <div class="grid grid-cols-5 ">
                                {{-- <div class="spacer-1"></div> --}}
                                <div class="col-span-2 sm:col-span-1 ms-10 md:ms-0">
                                    <img src="{{ asset('images/icon-phone.svg')}}" alt="icon" srcset="" class="mx-auto ">
                                </div>

                                <div class=" col-span-3 my-auto ">
                                    <div class="grid grid-row">
                                        <p class="p-strong text-white mb-2">
                                         Phone
                                        </p>
                                     </div>
                                     <div class="grid grid-row">
                                         <p class="p-strong text-white mt-1">
                                            +(123) 456-7890
                                         </p>
                                      </div>

                                </div>
                            </div>
                            <div class="spacer-05"></div>

                           </div>

                        </div>

                        <div class="grid grid-row bg-primary-contact-2">
                            <div class="">

                            <div class="spacer-05"></div>
                            <div class="grid grid-cols-5 ">
                                {{-- <div class="spacer-1"></div> --}}
                                <div class="col-span-2 sm:col-span-1 ms-10 md:ms-0">
                                    <img src="{{ asset('images/icon-email.svg')}}" alt="icon" srcset="" class="mx-auto ">
                                </div>

                                <div class=" col-span-3 my-auto ">
                                    <div class="grid grid-row">
                                        <p class="p-strong text-white mb-2">
                                         Email
                                        </p>
                                     </div>
                                     <div class="grid grid-row">
                                         <p class="p-strong text-white mt-1">
                                            info@borderlessrx.com
                                         </p>
                                      </div>

                                </div>
                            </div>
                            <div class="spacer-05"></div>

                           </div>

                        </div>

                        <div class="grid grid-row bg-primary-contact-3">
                            <div class="">

                            <div class="spacer-05"></div>
                            <div class="grid grid-cols-5 ">
                                {{-- <div class="spacer-1"></div> --}}
                                <div class="col-span-2 sm:col-span-1 ms-10 md:ms-0">
                                    <img src="{{ asset('images/icon-location.svg')}}" alt="icon" srcset="" class="mx-auto ">
                                </div>

                                <div class=" col-span-3 my-auto ">
                                    <div class="grid grid-row">
                                        <p class="p-strong text-white mb-2">
                                         Address
                                        </p>
                                     </div>
                                     <div class="grid grid-row">
                                         <p class="p-strong text-white mt-1">
                                            British Columbia, Canada
                                         </p>
                                      </div>

                                </div>
                            </div>
                            <div class="spacer-05"></div>

                           </div>

                        </div>

                        <div class="grid grid-row bg-primary">
                            <div class="">

                            <div class="spacer-05"></div>
                            <div class="grid grid-cols-5 ">
                                {{-- <div class="spacer-1"></div> --}}
                                <div class="col-span-2 sm:col-span-1 ms-10 md:ms-0">
                                    <img src="{{ asset('images/icon-clock.svg')}}" alt="icon" srcset="" class="mx-auto ">
                                </div>

                                <div class=" col-span-3 my-auto ">
                                    <div class="grid grid-row">
                                       <p class="p-strong text-white mb-2">
                                        Open Hours
                                       </p>
                                    </div>
                                    <div class="grid grid-row">
                                        <p class="p-strong text-white mt-1">
                                            Monday -Friday from 9am to 5pm
                                        </p>
                                     </div>

                                </div>
                            </div>
                            <div class="spacer-05"></div>

                           </div>

                        </div>
                    </div>

                    <div class="col-span-12 mt-5 block md:hidden">

                            <div class="grid grid-row">
                                <div class="grid grid-cols-12">
                                    <div class="col-span-6 bg-primary-contact-1">
                                        <div class="grid grid-row">
                                            <img src="{{ asset('images/icon-phone.svg')}}" alt="icon" srcset="" class="mx-auto my-2">
                                        </div>


                                             <div class="grid grid-row ">
                                                 <p class=" text-xs text-center text-white my-2">
                                                    +(123) 456-7890
                                                 </p>
                                              </div>
                                    </div>
                                    <div class="col-span-6 bg-primary-contact-2">
                                        <div class="grid grid-row">
                                            <img src="{{ asset('images/icon-email.svg')}}" alt="icon" srcset="" class="mx-auto my-2">
                                        </div>


                                             <div class="grid grid-row">
                                                 <p class="text-xs text-center text-white my-2">
                                                    info@borderlessrx.com
                                                 </p>
                                              </div>

                                    </div>
                                </div>
                            </div>


                            <div class="grid grid-row">
                                <div class="grid grid-cols-12">
                                    <div class="col-span-6 bg-primary-contact-3">
                                        <div class="grid grid-row">
                                            <img src="{{ asset('images/icon-location.svg')}}" alt="icon" srcset="" class="mx-auto my-2">
                                        </div>



                                             <div class="grid grid-row">
                                                 <p class="text-xs text-center text-white my-2">
                                                    British Columbia, Canada
                                                 </p>
                                              </div>


                                    </div>
                                    <div class="col-span-6 bg-primary">
                                        <div class="grid grid-row">
                                            <img src="{{ asset('images/icon-clock.svg')}}" alt="icon" srcset="" class="mx-auto my-2">
                                        </div>



                                            <div class="grid grid-row">
                                                <p class="text-xs text-center text-white my-2">
                                                    Monday -Friday from 9am to 5pm
                                                </p>
                                             </div>


                                    </div>
                                </div>
                            </div>

                    </div>

                </div>
               </div>
               <div class="spacer-1"></div>
            </x-container>
        {{-- </div> --}}
</div>

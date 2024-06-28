<div>
    @section('title', 'Product Details')
    @include('components.header', [
        'title' => 'Shop',
        'inactive_path' => 'Home | Shop',
        'active_path' => 'Medical Equipment'
        ])

    <x-container class="py-8">
        <div class="grid grid-cols-2 gap-6">
            <div class="col-span-2 md:col-span-1 ">
                
                @for ($i = 0; $i < 4; $i++)
                    <div class="p-16 shadow-lg flex items-center justify-center mb-4">
                        <img src="{{asset('images/Rectangle 9.png')}}"  alt="">
                    </div>
                @endfor
            </div>
            <div class="col-span-2 md:col-span-1 ">
                <div class="text-dark-400">
                    <div class="flex justify-between ">
                        <p class="font-bold text-dark-400 text-2xl ">Accu-Chek Active Blood Glucose Glucometer Kit With Vial Of 10 Strips, 10 Lancets And A Lancing Device Free For Accurate Blood Sugar Testing</p>
                        <div class=" gap-4 items-start hidden ml-4 lg:flex">
                            <x-button.secondary class="px-4 py-4">
                                <i class="fa fa-chevron-left text-secondary-700"></i>
                            </x-button.secondary>
                            <x-button.secondary class="px-4 py-4">
                                <i class="fa fa-chevron-right text-secondary-700"></i>
                            </x-button.secondary>
                        </div>
                    </div>
                    <div class="flex items-center mt-4">
                        <p class="text-base font-normal ">5.0</p>
                        <i class="fa fa-star ml-2"></i>
                        <p class="text-base font-normal ml-4">(3 reviews)</p>
                    </div>
                    <p class="mt-4 text-3xl text-secondary-900 font-bold">$400</p>
                    <hr class="mt-8">
                    <div class="mt-4">
                        <div class="flex justify-between flex-col md:flex-row">
                            <div class="flex gap-3 items-center">
                                <p class="font-medium text-2xl">-</p>
                                <input type="text" class="border-dark-300 w-[56px] py-4 px-4 flex justify-center focus:border-secondary-500 focus:ring-0" value="1">
                                <p class="font-medium text-2xl">+</p>
                            </div>
                            <div class="flex  gap-4 mt-4 md:mt-0">
                                <x-button.secondary href="{{route('shop.cart')}}">
                                    Add to Cart <i class="fa fa-cart-plus ml-4"  aria-hidden="true"></i>
                                </x-button.secondary>
                                <x-button.primary>Buy Now</x-button.primary>
                            </div>
                        </div>
                    </div>

                    <div class="mt-4">
                        <div class="relative mb-3">
                            <h6 class="mb-0">
                              <button
                                class="relative flex items-center w-full p-4 font-semibold text-left transition-all ease-in border-b border-solid cursor-pointer border-slate-100 text-dark-400 open:text-secondary-900 rounded-t-1 group "
                                data-collapse-target="collapse-1"
                              >
                                <span>Description</span>
                                <i class="absolute right-0 pt-1 text-xs fa fa-plus group-open:opacity-0"></i>
                                <i class="absolute right-0 pt-1 text-xs opacity-0 fa fa-minus group-open:opacity-100"></i>
                              </button>
                            </h6>
                            <div
                              data-collapse="collapse-1"
                              class=" overflow-hidden transition-all duration-300 ease-in-out"
                            >
                              <div class="p-4 text-base leading-normal text-dark-400 font-normal">
                                We're not always in the position that we want to be at. We're constantly
                                growing. We're constantly making mistakes. We're constantly trying to
                                express ourselves and actualize our dreams.
                                <div class="mt-8">
                                    <div class="flex text-dark-400 mb-4">
                                        <p class="text-base font-bold">Categories :</p>
                                        <p class="text-base font-normal ml-8 text-secondary-500">Medical Equipment</p>
                                    </div>
                                    <div class="flex text-dark-400 mb-4">
                                        <p class="text-base font-bold">Tags :</p>
                                        <p class="text-base font-normal ml-8 ">Medical , glucometer</p>
                                    </div>
                                    <div class="flex text-dark-400 mb-4 items-center">
                                        <p class="text-base font-bold">Share this product :</p>
                                        <div class="flex gap-4 ml-8">  <i class="fa fa-facebook"></i>
                                            <i class="fa fa-youtube-play"></i>
                                            <i class="fa fa-linkedin"></i>
                                           <i class="fa fa-twitter"></i></div>
                                    </div>
                                  </div>
                              </div>
                              
                            </div>
                          </div>
                          <div class="relative mb-3 ">
                            <h6 class="mb-0">
                              <button
                                class="relative flex items-center w-full p-4 font-semibold text-left transition-all ease-in border-b border-solid cursor-pointer border-slate-100 text-dark-400 open:text-secondary-900 rounded-t-1 group text-dark-500"
                                data-collapse-target="collapse-2"
                              >
                                <span>Shipping and Returns</span>
                                <i class="absolute right-0 pt-1 text-xs fa fa-plus group-open:opacity-0"></i>
                                <i class="absolute right-0 pt-1 text-xs opacity-0 fa fa-minus group-open:opacity-100"></i>
                              </button>
                            </h6>
                            <div
                              data-collapse="collapse-2"
                              class="h-0 overflow-hidden transition-all duration-300 ease-in-out"
                            >
                              <div class="p-4 text-base leading-normal text-dark-400 font-normal">
                                We're not always in the position that we want to be at. We're constantly
                                growing. We're constantly making mistakes. We're constantly trying to
                                express ourselves and actualize our dreams.
                              </div>
                            </div>
                          </div>
                          <div class="relative mb-3">
                            <h6 class="mb-0">
                              <button
                                class="relative flex items-center w-full p-4 font-semibold text-left transition-all ease-in border-b border-solid cursor-pointer border-slate-100 text-dark-400 open:text-secondary-900 rounded-t-1 group text-dark-500"
                                data-collapse-target="collapse-3"
                              >
                                <span>Reviews</span>
                                <i class="absolute right-0 pt-1 text-xs fa fa-plus group-open:opacity-0"></i>
                                <i class="absolute right-0 pt-1 text-xs opacity-0 fa fa-minus group-open:opacity-100"></i>
                              </button>
                            </h6>
                            <div
                              data-collapse="collapse-3"
                              class="h-0 overflow-hidden transition-all duration-300 ease-in-out"
                            >
                              <div class="p-4 text-base leading-normal text-dark-400 font-normal">
                                <livewire:web.reviews />
                              </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </x-container>


 
<!-- from cdn -->

</div>

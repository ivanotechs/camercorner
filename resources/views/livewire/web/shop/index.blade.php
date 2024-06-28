<div>
    @section('title', 'Shop')
    @include('components.header', [
        'title' => 'Shop',
        'inactive_path' => 'Home',
        'active_path' => 'Shop'
        ])
    @include('components.shop-header')

    <x-container class="py-8">
        <div class="flex justify-between">
            <x-button.transparent wire:click='toggleFilters'>
                <div class="{{$showFilters? '' : 'hidden'}}"><i class="fa fa-chevron-left mr-4 "></i> </div>
                 {{$showFilters? 'Hide Filters' : 'See Filters'}} 
                 <div class="{{$showFilters? 'hidden' : ''}}"><i class="fa fa-chevron-right ml-4 "></i></div>
            </x-button.transparent>
            <div class="flex gap-4">
                <select name="" id="" class="p-4 px-8">
                    <option value="">sort by : Recently Added</option>
                </select>
                <div class=" gap-4 items-center hidden lg:flex">
                    <x-button.secondary class="px-6 h-full">
                        <i class="fa fa-chevron-left text-secondary-700"></i>
                    </x-button.secondary>
                    <p class="text-base font-normal">Page</p>
                    <p class="text-base font-normal border p-4 px-6">1</p>
                    <p class="text-base font-normal">of 15</p>
                    <x-button.secondary class="px-6 h-full">
                        <i class="fa fa-chevron-right text-secondary-700"></i>
                    </x-button.secondary>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-3 gap-4 mt-8">
            <div class="{{!$showFilters? 'hidden' : 'col-span-3 lg:col-span-1'}}">
                @include('components.filters')
            </div>
            <div class=" col-span-2 {{!$showFilters? 'lg:col-span-3 ' : ' lg:col-span-2'}}}}">
                <div class="grid grid-cols-3 md:grid-cols-4 gap-4 {{$showFilters? 'lg:grid-cols-2' : 'lg:grid-cols-3'}}">
                    @if($products->isNotEmpty())
                    @foreach ($products as $product)
                        <div class="col-span-3 md:col-span-2 lg:col-span-1">
                            <a href="{{route('shop.detail', 1)}}">
                                <div class="h-full w-full rounded-2xl shadow-lg shadow-green-shadow group hover:ease-out hover:duration-75 hover:-translate-x-1 hover:-translate-y-1">
                                    <div class="p-8 py-12 bg-white flex h-1/2 justify-center items-center">
                                        @if($product->image)
                                        <img src="{{$product->image}}" alt="" class="w-full">
                                        @else
                                        <img src="{{asset('images/Rectangle 9.png')}}" alt="">
                                        @endif
                                    </div>
                                    <div class="p-4 py-6 bg-secondary-100 h-1/2 ">
                                        <div>
                                            <div class="">
                                                <p class="font-normal text-[13px] text-secondary-2 group-hover:text-secondary-900">{{$product->name}}</p>
                                                <p class="text-base font-bold text-secondary-900 mb-6 group-hover:text-secondary-2">{{$product->description}}</p>
                                            </div>

                                            <div class="flex  w-full">
                                                <x-button.transparent>
                                                    Add to Cart <i class="fa fa-cart-plus ml-4"  aria-hidden="true"></i>
                                                </x-button.transparent>
                                                <x-button.primary>Buy Now</x-button.primary>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>

                        </div>
                    @endforeach

                    @else

                    <div class="">
                        <div class="grid grid-row text-center">
                            <p class="h3">No Product found.</p>
                        </div>
                    </div>
                    @endif

                </div>
            </div>
        </div>
    </x-container>
</div>

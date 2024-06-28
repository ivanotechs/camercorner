<div>

    @section('title', 'My Cart')
    @include('components.header', [
        'title' => 'Shopping Cart',
        'inactive_path' => 'Home',
        'active_path' => 'Shopping Cart'
        ])
    <x-container class="py-8">
        <div class="grid grid-cols-6 gap-16 text-dark-500">
            <div class="col-span-6 lg:col-span-4">
                <div class="pb-6 w-full border-b ">
                    <p class="font-bold text-xl ">2 Items</p>
                </div>
                    <div>
                        <div class="mt-4">
                            <div class="table-responsive w-full flex justify-center">
                                <table class=" table-auto w-full ">
                                    <thead class="rounded-lg ">
                                        <tr class="rounded-t-lg">
                                            <th class=" p-4 flex justify-start">Details</th>
                                            <th class="  ">Quantity</th>
                                            <th class="  ">Price</th>
                                            <th class="">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody class="">
                                        @for( $i = 0; $i < 4 ; $i++)
                                            <tr class="py-8 border-b">
                                                <td>
                                                    <div class="py-4  flex flex-col lg:flex-row items-start gap-4 mb-4 px-4 md:px-0">
                                                        <div class="p-4 shadow-lg flex justify-center items-center">
                                                            <img src="{{asset('images/Rectangle 9.png')}}"  alt="">
                                                        </div>

                                                        <div class="w-full">
                                                            <div class=" text-base leading-normal text-dark-500 font-normal hidden md:flex">
                                                                Accu-Chek Active Blood Glucose Glucometer Kit With Vial Of 10 Strips, 10 Lancets And A Lancing Device Free For Accurate Blood Sugar Testing
                                                            </div>
                                                            <div class="mt-6 text-base leading-normal text-dark-400 font-normal hover:text-danger">
                                                                x remove
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="flex gap-3 items-center text-dark-400 md:px-8">
                                                        <p class="font-normal text-2xl">-</p>
                                                        <input type="text" class="border-dark-300 w-[56px] py-4 px-4 flex justify-center focus:border-secondary-500 focus:ring-0" value="1">
                                                        <p class="font-normal text-2xl">+</p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="flex gap-3 items-center text-dark-400 px-4 md:px-8">
                                                        <p class="font-normal text-base">$400</p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="flex gap-3 items-center text-dark-400 md:pl-8">
                                                        <p class="font-normal text-base">$400</p>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endfor
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="col-span-6 lg:col-span-2 ">
                <div>
                    <div class="pb-6 w-full border-b px-6 ">
                        <p class="font-bold text-xl ">Order Summary</p>
                    </div>
                    <div class="mt-16 text-dark-400">
                        <div class="flex pb-6 justify-between px-6 border-b">
                            <p class="text-base font-bold">Sub total</p>
                            <p class="font-normal text-base">$400</p>
                        </div>
                        <div class="flex py-6 justify-between px-6 border-b">
                            <p class="text-base font-bold">Shipping </p>
                            <p class="font-normal text-base">$5</p>
                        </div>
                        <div class="mt-8 px-6 py-6 border-b-2 border-t-2 border-black text-dark-500 flex justify-between">
                            <p class="text-base font-bold">Total </p>
                            <p class="font-bold text-base">$405</p>
                        </div>

                    </div>

                </div>
                <div class="mt-12 w-full">
                    <x-button.primary href="{{ route('shop.checkout') }}" class="w-full">Proceed to Checkout</x-button.primary>
                </div>
            </div>
        </div>
    </x-container>

</div>

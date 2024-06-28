<div>
    <x-container class="py-8">
        <div class="grid grid-cols-6 gap-16 text-dark-500">
            <div class="col-span-6 lg:col-span-4 ">
                <div class="pb-6 w-full border-b ">
                    <h6 class="font-bold text-xl text-dark-500 ">Payment Information</h6>
                </div>
                <div class="flex flex-row gap-4 py-8">
                    <div class="flex items-center space-x-3">
                        <input checked id="default-radio-1" type="radio" value="" name="default-radio"
                            class="w-4 h-4 text-secondary-500 bg-gray-100 border-gray-300 focus:ring-secondary-500">
                        <label for="default-radio-1"
                            class="text-base text-dark-400">Credit Card</label>
                        <img src="{{ asset('images/credit_card.svg') }}" alt="">
                    </div>
                    <div class="flex items-center space-x-3">
                        <input  id="default-radio-2" type="radio" value="" name="default-radio"
                            class="w-4 h-4 text-secondary-500 bg-gray-100 border-gray-300 focus:ring-secondary-500">
                        <label for="default-radio-2"
                            class="text-base text-dark-400">Paypal</label>
                    </div>
                </div>
                <div>
                    <label for="" class="mb-3 mt-5 pl-3 block text-base text-dark-500 font-bold relative">
                        <span class="absolute top-0 left-0 text-red-500">*</span>
                        Card Name
                    </label>
                    <x-input type="text"
                        class="w-full  border border-light bg-white py-3 px-6 text-base font-medium outline-none"
                        required />
                </div>
                <div>
                    <label for="" class="mb-3 mt-5 pl-3 block text-base text-dark-500 font-bold relative">
                        <span class="absolute top-0 left-0 text-red-500">*</span>
                        Card Number
                    </label>
                    <x-input type="text"
                        class="w-full  border border-light bg-white py-3 px-6 text-base font-medium outline-none"
                        required />
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="" class="mb-3 mt-5 pl-3 block text-base text-dark-500 font-bold relative">
                            <span class="absolute top-0 left-0 text-red-500">*</span>
                            Expiration Date
                        </label>
                        <x-input type="text"
                            class="w-full  border border-light bg-white py-3 px-6 text-base font-medium outline-none"
                            required />
                    </div>
                    <div>
                        <label for="" class="mb-3 mt-5 pl-3 block text-base text-dark-500 font-bold relative">
                            <span class="absolute top-0 left-0 text-red-500">*</span>
                            CVV
                        </label>
                        <x-input type="text"
                            class="w-full  border border-light bg-white py-3 px-6 text-base font-medium outline-none"
                            required />
                    </div>
                </div>
            </div>
            <div class="col-span-6 lg:col-span-2 bg-light">
                <livewire:web.shop.checkout.order-summary />
            </div>
        </div>
    </x-container>
</div>

<div>
    <x-container class="py-8">
        <div class="grid grid-cols-6 gap-16 text-dark-500">
            <div class="col-span-6 lg:col-span-4 ">
                <div class="pb-6 pt-8 w-full border-b ">
                    <h6 class="font-bold text-xl text-dark-500 ">Personal Information</h6>
                </div>
                <div>
                    <label for="" class="mb-3 mt-5 pl-3 block text-base text-dark-500 font-bold relative">
                        <span class="absolute top-0 left-0 text-red-500">*</span>
                        Full Name
                    </label>
                    <x-input type="text"
                        class="w-full  border border-light bg-white py-3 px-6 text-base font-medium outline-none"
                        required />
                </div>
                <div>
                    <label for="" class="mb-3 mt-5 pl-3 block text-base text-dark-500 font-bold relative">
                        <span class="absolute top-0 left-0 text-red-500">*</span>
                        Email
                    </label>
                    <x-input type="text"
                        class="w-full  border border-light bg-white py-3 px-6 text-base font-medium outline-none"
                        required />
                </div>
                <div>
                    <label for="" class="mb-3 mt-5 pl-3 block text-base text-dark-500 font-bold relative">
                        <span class="absolute top-0 left-0 text-red-500">*</span>
                        Phone
                    </label>
                    <x-input type="text"
                        class="w-full  border border-light bg-white py-3 px-6 text-base font-medium outline-none"
                        required />
                </div>
                <div class="pb-6 pt-8 w-full border-b ">
                    <h6 class="font-bold text-xl text-dark-500 ">Shipping Address</h6>
                </div>
                <div>
                    <label for="" class="mb-3 mt-5 pl-3 block text-base text-dark-500 font-bold relative">
                        <span class="absolute top-0 left-0 text-red-500">*</span>
                        Address
                    </label>
                    <x-input type="text"
                        class="w-full  border border-light bg-white py-3 px-6 text-base font-medium outline-none"
                        required />
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="" class="mb-3 mt-5 pl-3 block text-base text-dark-500 font-bold relative">
                            <span class="absolute top-0 left-0 text-red-500">*</span>
                            City
                        </label>
                        <x-input type="text"
                            class="w-full  border border-light bg-white py-3 px-6 text-base font-medium outline-none"
                            required />
                    </div>
                    <div>
                        <label for="" class="mb-3 mt-5 pl-3 block text-base text-dark-500 font-bold relative">
                            <span class="absolute top-0 left-0 text-red-500">*</span>
                            Region
                        </label>
                        <x-input type="text"
                            class="w-full  border border-light bg-white py-3 px-6 text-base font-medium outline-none"
                            required />
                    </div>
                </div>
                <div>
                    <label for="" class="mb-3 mt-5 pl-3 block text-base text-dark-500 font-bold relative">
                        <span class="absolute top-0 left-0 text-red-500">*</span>
                        Postal Code
                    </label>
                    <x-input type="text"
                        class="w-full  border border-light bg-white py-3 px-6 text-base font-medium outline-none"
                        required />
                </div>
            </div>
            <div class="col-span-6 lg:col-span-2 ">
                <livewire:web.shop.checkout.order-summary />
            </div>
        </div>
    </x-container>
</div>

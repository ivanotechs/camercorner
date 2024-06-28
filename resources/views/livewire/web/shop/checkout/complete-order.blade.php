<div>
    <x-container class="py-8">
        <div class="grid grid-cols-6 gap-16 text-dark-500">
            <div class="col-span-6 lg:col-span-4 ">
                <div class="pb-6  w-full border-b ">
                    <h6 class="font-bold text-xl text-dark-500 ">Review Your Order</h6>
                </div>
                <div class="border-l border-secondary-500 bg-gray-100 my-4 py-4 px-5">
                    <h2 class="font-bold text-xl text-dark-500 mb-3">Identification</h2>
                    <div class="flex flex-col space-y-4">
                        <div class="space-y-3">
                            <h2 class="font-bold text-dark-400 text-base">Full Name</h2>
                            <p class="text-base text-dark-400">Margaret Lizette</p>
                        </div>
                        <div class="space-y-3">
                            <h2 class="font-bold text-base text-dark-400 ">Email</h2>
                            <p class="text-base text-dark-400">margarette@gmail.com</p>
                        </div>
                        <div class="space-y-3">
                            <h2 class="font-bold text-base text-dark-400 ">Phone number</h2>
                            <p class="text-base text-dark-400">9687745215</p>
                        </div>
                    </div>
                </div>
                <div class="border-l border-secondary-500 bg-gray-100 my-4 py-4 px-5">
                    <h2 class="font-bold text-xl text-dark-500 mb-3">Shipping Address</h2>
                    <div class="flex flex-col space-y-4">
                        <div class="space-y-3">
                            <h2 class="font-bold text-dark-400 text-base">Address</h2>
                            <p class="text-base text-dark-400">008-8181 Cambie Road, BC V6X3X9,</p>
                        </div>
                        <div class="space-y-3">
                            <h2 class="font-bold text-base text-dark-400 ">City</h2>
                            <p class="text-base text-dark-400">Richmond</p>
                        </div>
                        <div class="space-y-3">
                            <h2 class="font-bold text-base text-dark-400 ">Region</h2>
                            <p class="text-base text-dark-400">British Columbia</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-span-6 lg:col-span-2 bg-light">
                <livewire:web.shop.checkout.order-summary />
            </div>
        </div>
    </x-container>
</div>

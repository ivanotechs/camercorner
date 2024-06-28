<div x-data="{ show: @entangle('show') }">
    <div x-show="show" class="fixed inset-0 flex items-center justify-center z-50 bg-gray-900 bg-opacity-50">
        <div class="container bg-white w-3/4 px-2 md:px-8 py-16  shadow-lg flex flex-col gap-y-8 items-center justify-center">
            <div class="">
                <img src="{{ asset('images/icon-success.svg')}}" class="w-32 h-32 md:w-full md:h-full">
            </div>
            <div class="items-center justify-center text-center md:px-24 flex flex-col space-y-6">
                <h2 class="text-2xl md:text-4xl text-dark-400 font-semibold">Order Confirmed</h2>
                <p class="my-4 text-base text-dark-400 text-center">Thank you for your order! We've received your purchase for our health and wellness products. Your commitment to self-care is inspiring. We are excited to get your order processed and shipped out to you.
                    We hope our range of products helps you on your path to wellness and fitness.
                    Stay healthy and keep pushing towards your goals. </p>
                    <x-button.primary @click="$wire.confirm()">Continue Shopping</x-button.primary>
                    <x-button.secondary @click="$wire.confirm()">back to Homepage</x-button.secondary>
            </div>
        </div>
    </div>
</div>

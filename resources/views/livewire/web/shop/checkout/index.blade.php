<div>
    @section('title', 'Checkout')
    @include('components.header', [
        'title' => 'Checkout',
        'inactive_path' => 'Home',
        'active_path' => 'Checkout'
        ])

    <div>
        <ul class="flex items-center">
            @foreach ([
                1 => 'Customer & Shipping Information',
                2 => 'Payment Information',
                3 => 'Complete Order',
                ] as $index => $stepLabel)
                <li class="flex-1">
                    <a href="#"
                        class="relative flex items-center justify-center text-lg font-semibold px-1 py-4
                {{ $step == $index ? 'border-t-8 border-secondary-700 bg-light text-secondary-500' : 'text-dark-400 hover:text-secondary-500' }}
                {{ $step > $index ? 'border-t-8 border-secondary-300 bg-light' : '' }}">
                        <span class="hidden md:inline">{{ $stepLabel }}</span>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>


    @if ($step == 1)
        <livewire:web.shop.checkout.customer-info />
    @elseif ($step == 2)
        <livewire:web.shop.checkout.payment-info />
    @elseif ($step == 3)
        <livewire:web.shop.checkout.complete-order />
    @endif


    <div class="border-t shadow-md">
        <x-container class="py-12 flex items-center justify-between">
            @if ($step == 1)
                    <a href="{{ route('shop.index') }}" class="py-4 px-3 text-secondary-500">Continue Shopping</a>
                    <x-button.primary wire:click="nextStep">Proceed To Checkout</x-button.primary>
            @else
                @if ($step > 1)
                <div class="flex flex-row gap-4">
                    <x-button.secondary wire:click="prevStep">Previous</x-button.secondary>
                    <a href="{{ route('shop.index') }}" class="py-4 px-3 text-secondary-500">Continue Shopping</a>
                </div>
                @endif

                @if ($step < 3)
                    <x-button.primary wire:click="nextStep">Proceed to checkout</x-button.primary>
                @else
                    <x-button.primary wire:click="openConfirmationModal">Place order Now</x-button.primary>
                @endif
            @endif
        </x-container>
    </div>
    <livewire:web.shop.checkout.confirmation-modal />
</div>

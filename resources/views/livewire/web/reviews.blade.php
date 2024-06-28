<div>
    <x-button.transparent class="w-[194px] justify-center mb-4" wire:click='showReview'>Add Review</x-button.transparent>

    <div class="p-4 bg-home-last-section mb-4 {{$showReviewForm? '' : 'hidden'}}">
        <p class="font-bold text-xl text-secondary-900 mb-4">Be the first to review </p>
        <p class="text-base font-normal text-secondary-900 mb-4">Your email address will not be published. Required fields are marked *</p>
        <div>
            <span>
                <label for="" class="font-bold text-dark-500" ><em class="text-danger me-1">*</em> Name</label>
                <x-input class="block w-full mt-2 mb-4"></x-input>
            </span>
            <span class="mt-4">
                <label for="" class="font-bold text-dark-500 " ><em class="text-danger me-1">*</em> Email</label>
                <x-input class="block w-full mt-2 mb-4"></x-input>
            </span>
            <div class="flex items-center gap-4 mb-4"><p  class="font-bold text-dark-500 " > Your Rating</p>
                <div class="flex items-center gap-2 mt-2">
                    @for ($i = 0; $i < 5; $i++)
                        @if ($i<$rating)
                            <img src="{{asset('images/icon _Star_gold.png')}}" wire:click="set_rating({{$i+1}})" alt="">
                            @else
                            <img src="{{asset('images/icon _Star.png')}}" wire:click="set_rating({{$i+1}})" alt="">
                        @endif
                    @endfor
                </div>
            </div>
            <span class="">
                <label for="" class="font-bold text-dark-500 " ><em class="text-danger me-1">*</em> Your Review</label>
                <textarea class="block w-full mt-2 mb-4 bg-transparent border-dark-300 focus:border-secondary-500 focus:ring-0" class="" id="" cols="30" rows="10"></textarea>
            </span>
            
                <x-button.primary class="">Submit</x-button.primary>
            
        </div>
    </div>

    @for ($j = 0; $j < 3; $j++)
        <div class="p-4 bg-home-last-section flex items-start gap-4 mb-4">
            <img src="{{asset('be_assets/images/users/avatar-1.jpg')}}" class="rounded-full" alt="">
            <div class="w-full">
                <div class="flex justify-between w-full">
                    <span>
                        <p class="text-base font-bold text-secondary-900">Sean Blick</p>
                        
                        <div class="flex gap-2 mt-2">
                            @for ($i = 0; $i < 5; $i++)
                                @if ($i<3)
                                    <img src="{{asset('images/icon _Star_gold.png')}}" alt="">
                                    @else
                                    <img src="{{asset('images/icon _Star.png')}}" alt="">
                                @endif
                            @endfor
                        </div>
                    </span>
                    <x-button.secondary>
                        Reply
                    </x-button.secondary>
                </div>
                <div class="mt-4 text-base leading-normal text-dark-400 font-normal">
                    We're not always in the position that we want to be at. We're constantly
                    growing. We're constantly making mistakes. We're constantly trying to
                    express ourselves and actualize our dreams.
                  </div>
            </div>
        </div>
    @endfor
</div>

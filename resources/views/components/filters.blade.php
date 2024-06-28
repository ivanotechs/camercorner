<div class="mt-8">
    <span>
        <div class="flex gap-4 w-full justify-between">
            <input type="text" class="p-4 w-full" placeholder="Search Products">
            <x-button.secondary  class="px-6 ">
                <i class="fa fa-search text-secondary-700"></i>
            </x-button.secondary>
        </div>

        <div class="mt-8 py-8 border-t border-b border-secondary-500">
            <div class="flex justify-between text-4xl text-dark-400 font-bold">
                <p>Categories</p>
                <p>+</p>
            </div>

            <div class="mt-4">

                @for ($i = 0; $i < 8; $i++)
                    <div class="flex gap-4 items-center text-dark-400 mb-2">
                        <x-button.checkbox style="color: #70AF2E"/>
                        <p class="text-base font-normal">Baby & Kids</p>
                    </div> 
                @endfor
            </div>
        </div>
        
    </span>
</div>
<div class="bg-secondary-500 w-full">
    <x-container class="py-8 flex justify-center md:justify-between items-center text-white">
        <p class="text-4xl font-semibold">{{$title}}</p>
        <div class="hidden md:flex">
            <p class="text-base font-bold text-white-50">{{$inactive_path}} |</p>
            <p class="text-base font-bold ml-1">{{$active_path}}</p>
        </div>
    </x-container>
</div>
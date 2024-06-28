<a     {{ $attributes->merge([
    'class' => 'bg-secondary-500 hover:bg-secondary-300  text-white text-base font-normal flex justify-center gap-8 items-center p-4',
    ]) }} 

>{{$slot}}</a>

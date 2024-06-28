<a     {{ $attributes->merge([
    'class' => 'bg-transparent border border-secondary-500 hover:bg-secondary-300 hover:border-0 hover:text-white  flex items-center p-3 text-secondary-500 font-medium text-base',
    ]) }} 

>{{$slot}}</a>
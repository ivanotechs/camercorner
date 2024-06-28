<a     {{ $attributes->merge([
        'class' => 'bg-secondary-100 flex items-center hover:bg-secondary-300 hover:border-0 hover:text-white p-3 text-secondary-500 font-medium text-base',
        ]) }} 

>{{$slot}}</a>

@extends('layouts.auth')
@section('title', 'Login')
@section('content')
    <div class="">
        <x-container class="">
            <div class="my-24 flex justify-center items-center">
                <div class="p-4 lg:p-16  bg-white flex justify-center lg:w-1/2 ">
                    <div class="w-full">
                        <p class="text-2xl font-extrabold text-secondary-2 text-center">Login</p>
                        <form action="{{route('user.login')}}" method="post" class="p-2 w-full">
                            @csrf
                            <div class=" mt-4">
                                <p class="">Email</p>
                            </div>
                            <x-input type='email' name='email'></x-input>
                            @error('email')
                                <p class="text-danger">{{$message}}</p>
                            @enderror
                            <div class=" mt-6">
                                <p class="">Password</p>
                            </div>
                            @error('password')
                                <p class="text-danger">{{$message}}</p>
                            @enderror
                            <div class=" mb-4">
                                <x-input type='password' name='password'></x-input>
                            </div>
                            <div class=" flex justify-end w-full gap-1">
                                <a href="#" class="text-secondary-2 text-sm">Forgot Password</a>
                            </div>
                            <div class=" mt-6">
                                <button class="bg-secondary-2 flex text-xl font-bold text-white justify-center items-center w-full p-4">Login</button>
                            </div>
                            <div class="mt-4 flex gap-1">
                                <p>Do not have an account?</p>
                                <a href="{{route('user.register')}}" class="text-secondary-2">Register</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </x-container>
    </div>


@endsection

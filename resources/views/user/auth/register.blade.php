@extends('layouts.auth')
@section('title', 'Login')
@section('content')
    <x-container class="">
        <div class="my-24 flex justify-center items-center">
            <div class="p-4 lg:p-16 shadow-2xl bg-white  flex justify-center lg:w-1/2 ">
                <div class="w-full">
                    <p class="text-2xl font-extrabold text-secondary-2 text-center">Register</p>
                    <form action="{{route('user.register')}}" method="post" class="p-2 w-full">
                        @csrf
                        <div class=" mt-4">
                            <p class=""><span class="label-required">*</span>Name</p>
                        </div>
                        <x-input type='text' name='name'></x-input>
                        @error('name')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                        <div class=" mt-4">
                            <p class=""><span class="label-required">*</span>Email</p>
                        </div>
                        <x-input type='email' name='email'></x-input>
                        @error('email')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                        <div class=" mt-6">
                            <p class=""><span class="label-required">*</span>Password</p>
                        </div>
                        <div class=" mb-4">
                            <x-input type='password' name='password'></x-input>
                        </div>
                        @error('password')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                        <div class=" mt-6">
                            <p class=""><span class="label-required">*</span>Confirm Password</p>
                        </div>
                        @error('password')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                        <div class=" mb-4">
                            <x-input type='password' name='password_confirmation'></x-input>
                        </div>
                        <div class=" mt-6">
                            <button class="bg-secondary-2 flex text-xl font-bold text-white justify-center items-center w-full p-4">Register</button>
                        </div>
                        <div class="mt-4 flex gap-1">
                            <p>Already have an account?</p>
                            <a href="{{route('user.login')}}" class="text-secondary-2">Login</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </x-container>

@endsection
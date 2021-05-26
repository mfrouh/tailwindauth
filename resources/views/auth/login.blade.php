@extends('layouts.app')
@section('title')
    {{ __('authpages.sign_in') }}
@endsection
@section('content')
    <div class="container">
        <div class="sm:mx-auto sm:w-full sm:max-w-md">
            <a href="{{ route('home') }}">
                <x-logo class="w-auto h-9 mx-auto text-indigo-600" />
            </a>
            <h2 class="mt-6 text-3xl font-extrabold text-center text-gray-900 leading-9">
                {{ __('authpages.sign_in_to_your_account') }}
            </h2>
            @if (Route::has('register'))
                <p class="mt-2 text-sm text-center text-gray-600 leading-5 max-w">
                    {{__('authpages.or')}}
                    <a href="{{ route('register') }}"
                        class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150">
                        {{ __('authpages.create_a_new_account') }}
                    </a>
                </p>
            @endif
        </div>
        <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
            <div class="px-4 py-8 bg-white shadow sm:rounded-lg sm:px-10">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 leading-5">
                            @lang('authpages.email')
                        </label>

                        <div class="mt-1 rounded-md shadow-sm">
                            <input name="email" type="email" value="{{ old('email') }}" required autofocus class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5
                                                 @error('email') error @enderror" />
                        </div>

                        @error('email')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mt-6">
                        <label for="password" class="block text-sm font-medium text-gray-700 leading-5">
                            @lang('authpages.password')
                        </label>

                        <div class="mt-1 rounded-md shadow-sm">
                            <input name="password" id="password" type="password" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5
                                            @error('password') error @enderror" />
                        </div>

                        @error('password')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center">
                            <input name="remember" id="remember" type="checkbox"
                                class="form-checkbox w-4 h-4 text-indigo-600 transition duration-150 ease-in-out" />
                            <label for="remember" class="block ml-2 text-sm text-gray-900 leading-5">
                                {{__('authpages.remember')}}
                            </label>
                        </div>

                        <div class="text-sm leading-5">
                            <a href="{{ route('password.request') }}"
                                class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150">
                                {{__('authpages.forgot_your_password')}}
                            </a>
                        </div>
                    </div>

                    <div class="mt-6">
                        <span class="block w-full rounded-md shadow-sm">
                            <button type="submit"
                                class="flex justify-center w-full px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:ring-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                                {{__('authpages.sign_in')}}
                            </button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

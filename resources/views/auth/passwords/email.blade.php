@extends('layouts.app')
@section('title')
    {{ __('authpages.email') }}
@endsection
@section('content')
    <div class="container">
        <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
            @if (session('status'))
                <div class="bg-green-400 p-2 m-2 rounded-md shadow-md text-center" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <div class="px-4 py-8 bg-white shadow sm:rounded-lg sm:px-10">
                <form method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 leading-5">
                            {{ __('authpages.email') }}
                        </label>

                        <div class="mt-1 rounded-md shadow-sm">
                            <input name="email" id="email" value="{{ old('email') }}" type="email" required autofocus
                                class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5
                                @error('email') error  @enderror" />
                        </div>

                        @error('email')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mt-6">
                        <span class="block w-full rounded-md shadow-sm">
                            <button type="submit"
                                class="flex justify-center w-full px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:ring-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                                {{__('authpages.send_password_reset_link')}}
                            </button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

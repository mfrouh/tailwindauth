@extends('layouts.app')
@section('title')
    {{ __('authpages.verify') }}
@endsection
@section('content')
    <div class="container">
        <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
            <div class="px-4 py-8 bg-white shadow sm:rounded-lg sm:px-10">
                @if (session('resent'))
                    <div class="flex items-center px-4 py-3 mb-6 text-sm text-white bg-green-500 rounded shadow"
                        role="alert">
                        <svg class="w-4 h-4 mr-3 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                clip-rule="evenodd"></path>
                        </svg>

                        <p>{{ __('authpages.a_fresh_verification_link_has_been_sent_to_your_email_address') }}.</p>
                    </div>
                @endif

                <div class="text-sm text-gray-700">
                    <p>{{ __('authpages.before_proceeding_please_check_your_email_for_a_verification_link') }}</p>

                    <p class="mt-3">
                        {{ __('authpages.if_you_did_not_receive_the_email') }}
                    <form method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit"
                            class="text-indigo-700 cursor-pointer hover:text-indigo-600 focus:outline-none focus:underline transition ease-in-out duration-150">
                            {{ __('authpages.click_here_to_request_another') }}</button>.
                    </form>
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection

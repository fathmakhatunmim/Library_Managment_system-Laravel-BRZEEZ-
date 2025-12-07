{{-- <x-app-layout> --}}

@extends('library.default')

@section('title', "DESHBOARD")

@section("title2","Profile")

@section('content')
    
    {{-- <x-slot name="header"> --}}
        <!-- Navigation থেকে দূরে রাখার জন্য mt-20 ব্যবহার -->
        {{-- <div class="mt-20 flex items-center justify-between bg-[#383033] p-4 rounded-lg shadow-md">
            <!-- Header Title -->
            <h2 class="px-5 py-2 bg-yellow-500 text-white font-bold rounded-lg shadow hover:bg-yellow-600 transition-all duration-300 dark:bg-gray-800">
                {{ __('Profile') }}
            </h2> --}}

            <!-- Register Button -->
            {{-- <div>
                <a href="{{ route('register') }}"
                   class="px-5 py-2 bg-yellow-500 text-white font-bold rounded-lg shadow hover:bg-yellow-600 transition-all duration-300 dark:bg-gray-800">
                    {{ __('Register') }}
                </a>
            </div> --}}
        {{-- </div>
    </x-slot> --}}

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-[#383033] dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
    @endsection
{{-- </x-app-layout> --}}

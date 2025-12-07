{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}

   {{-- <x-app-layout>
 <x-slot name="header">
        <div class="bg-[#EFFAFC] py-4 px-6 rounded-md shadow">
           
        </div>
    </x-slot>
</x-app-layout> --}}




@extends('library.default')

@section('title', "review book")

@section("title2","Review Book")

@section('content')

 <div class="min-h-screen bg-gray-50 p-6">

    <!-- Cards Section -->
   <div class="flex justify-center mt-16 mb-20">
    <div class="w-full max-w-lg bg-[#DFECDE] shadow-lg p-8 rounded-3xl transform transition-transform hover:scale-105">
        <form action="{{ route('review.store') }}" method="POST" class="space-y-5">
            @csrf

            <!-- User Name -->
            <div>
                <label for="uname" class="block mb-2 text-sm font-medium text-gray-700">User Name</label>
                <input type="text" id="uname" name="uname" placeholder="Enter your name" required
                    class="w-full px-4 py-2 text-sm rounded-xl border border-gray-300 focus:ring-2 focus:ring-yellow-400 focus:border-yellow-400 bg-white text-gray-900 placeholder-gray-400 shadow-sm">
            </div>

            <!-- Book Name -->
            <div>
                <label for="name" class="block mb-2 text-sm font-medium text-gray-700">Book Name</label>
                <input type="text" id="name" name="name" placeholder="Enter book name" required
                    class="w-full px-4 py-2 text-sm rounded-xl border border-gray-300 focus:ring-2 focus:ring-yellow-400 focus:border-yellow-400 bg-white text-gray-900 placeholder-gray-400 shadow-sm">
            </div>

            <!-- Author -->
            <div>
                <label for="author" class="block mb-2 text-sm font-medium text-gray-700">Author</label>
                <input type="text" id="author" name="author" placeholder="Enter author name" required
                    class="w-full px-4 py-2 text-sm rounded-xl border border-gray-300 focus:ring-2 focus:ring-yellow-400 focus:border-yellow-400 bg-white text-gray-900 placeholder-gray-400 shadow-sm">
            </div>

            <!-- ISBN -->
            <div>
                <label for="isbn" class="block mb-2 text-sm font-medium text-gray-700">ISBN</label>
                <input type="text" id="isbn" name="isbn" placeholder="Enter ISBN" required
                    class="w-full px-4 py-2 text-sm rounded-xl border border-gray-300 focus:ring-2 focus:ring-yellow-400 focus:border-yellow-400 bg-white text-gray-900 placeholder-gray-400 shadow-sm">
            </div>

            <!-- Categories -->
            <div>
                <label for="categories" class="block mb-2 text-sm font-medium text-gray-700">Categories</label>
                <input type="text" id="categories" name="categories" placeholder="Enter categories" required
                    class="w-full px-4 py-2 text-sm rounded-xl border border-gray-300 focus:ring-2 focus:ring-yellow-400 focus:border-yellow-400 bg-white text-gray-900 placeholder-gray-400 shadow-sm">
            </div>

            <!-- Review -->
            <div>
                <label for="review" class="block mb-2 text-sm font-medium text-gray-700">Review</label>
                <textarea id="review" name="review" rows="5" placeholder="Write your thoughts here..." required
                    class="w-full px-4 py-3 text-sm rounded-xl border border-gray-300 focus:ring-2 focus:ring-yellow-400 focus:border-yellow-400 bg-white text-gray-900 placeholder-gray-400 shadow-sm resize-none"></textarea>
            </div>

            <!-- Submit Button -->
            <div class="text-center">
                <button type="submit"
                    class="px-6 py-2 bg-yellow-500 text-white font-semibold rounded-xl shadow hover:bg-yellow-600 transition-all duration-300">
                    Submit
                </button>
            </div>
        </form>
    </div>
</div>




    <!-- Available Books Table Section -->
    <h1 class="text-4xl font-bold text-gray-700 mb-6 text-center">Review</h1>

    {{-- card --}}
 <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 mb-12 ">

    @foreach($reviews as $review)
    <div class="overflow-x-auto">
        <div class="bg-[#FDF2E1] shadow-lg p-6 rounded-3xl 
     transform transition-transform hover:scale-105 
     flex flex-col items-center text-center min-h-72 md:min-h-80 lg:min-h-96">
     

            <img src="{{ asset('images/4.png') }}" alt="Available Books" class="w-16 h-16  mb-4">

            <p class="text-gray-700 font-medium text-start">Review Books</p>

            <h1 class="text-2xl font-bold mb-2">{{ $review->name }}</h1>


            <p class="text-gray-500 text-sm"><strong>Author:</strong>{{$review->author}} </p>

            <p class="text-gray-500 text-sm"><strong>ISBN:</strong>{{$review->isbn}} </p>

            <p class="text-gray-500 text-sm"><strong>Category:</strong> {{ $review->categories }}</p>

            <p class="text-gray-500 text-sm"><strong>Review:</strong> {{ $review->review }}:</p>
            <br>

             <p class="text-gray-500 text-sm"><strong>{{$review->uname}}</strong> review this book</p>



        </div>

    </div>
    @endforeach

</div>



@endsection
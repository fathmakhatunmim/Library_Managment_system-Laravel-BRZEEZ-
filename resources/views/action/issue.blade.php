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

@section('title', "issue book")

@section("title2","Issue Book")

@section('content')

 {{-- <div class="min-h-screen bg-gray-50 p-6">

    <!-- Cards Section -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-1 gap-6 mb-20  ">

        <!-- Card 1 -->
        <div class="bg-[#DFECDE] shadow-lg p-6 rounded-3xl transform transition-transform hover:scale-105 flex flex-col mb-10">
    <form class="max-w-sm space-y-4" action="{{route('review.store')}}" method="POST">
        @csrf
      <div>
        <label for="visitors" class="block mb-2.5 text-sm font-medium text-heading ">User Name</label>
        <input type="text" id="visitors" class="bg-neutral-secondary-medium border border-default-medium text-heading   text-sm rounded-base focus:ring-brand focus:border-brand block w-300 px-2.5 py-2 shadow-xs placeholder:text-body " name="uname" placeholder="" required />
    </div>
    
        <div>
        <label for="visitors" class="block mb-2.5 text-sm font-medium text-heading ">Book Name</label>
        <input type="text" id="visitors" class="bg-neutral-secondary-medium border border-default-medium text-heading   text-sm rounded-base focus:ring-brand focus:border-brand block w-300 px-2.5 py-2 shadow-xs placeholder:text-body " name="name" placeholder="" required />
    </div>



    <div>
        <label for="visitors" class="block mb-2.5 text-sm font-medium text-heading">Author</label>
        <input type="text" id="visitors" class="bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-300 px-3 py-2.5 shadow-xs placeholder:text-body" name="author"   placeholder="" required />
    </div>
    <div>
        <label for="visitors" class="block mb-2.5 text-sm font-medium text-heading">ISBN </label>
        <input type="text" id="visitors" class="bg-neutral-secondary-medium border border-default-medium text-heading text-base rounded-base focus:ring-brand focus:border-brand block w-300 px-3.5 py-3 shadow-xs placeholder:text-body" name="isbn" placeholder="" required />
    </div>
      <div>
        <label for="visitors" class="block mb-2.5 text-sm font-medium text-heading">Categories</label>
        <input type="text" id="visitors" class="bg-neutral-secondary-medium border border-default-medium text-heading text-base rounded-base focus:ring-brand focus:border-brand block w-300 px-3.5 py-3 shadow-xs placeholder:text-body" name="categories" placeholder="" required />
    </div>
    <div>
        <label for="message" class="block mb-2.5 text-sm font-medium text-heading">Review</label>
        <textarea id="message" rows="4" class="bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-300 p-3.5 shadow-xs placeholder:text-body" name="review" required placeholder="Write your thoughts here..."></textarea>

        </div>
 <button type="submit" class="btn">Submit</button>
        <!-- Card 2 -->
       

        <!-- Card 3 -->
     

        <!-- Card 4 -->
     
    </div>



    <!-- Available Books Table Section -->
    <h1 class="text-4xl font-bold text-gray-700 mb-6 text-center">Review</h1>

    {{-- card --}}
 {{-- ><div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 mb-12 ">

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

</div> --}} 



@endsection
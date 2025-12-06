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

  <div class="min-h-screen bg-gray-50 p-6">

    <!-- Cards Section -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-1 gap-6 mb-20  ">

        <!-- Card 1 -->
        <div class="bg-[#DFECDE] shadow-lg p-6 rounded-3xl transform transition-transform hover:scale-105 flex flex-col mb-10">
    <form class="max-w-sm space-y-4" action="{{route('issue.store')}}" method="POST" enctype="multipart/form-data">
        @csrf

    <div>
    <label class="block mb-2.5 text-sm font-medium text-heading" for="file_input">Upload file</label>
    <input class="w-300 cursor-pointer bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base  focus:ring-brand focus:border-brand block h-10  shadow-xs placeholder:text-body" aria-describedby="file_input_help" id="file_input" type="file" name="image">
     <p class="mt-1 text-sm text-gray-800 dark:text-gray-500" id="file_input_help">SVG, PNG, JPG or GIF (MAX. 800x400px).</p>
    </div>
    



      <div>
        <label for="visitors" class="block mb-2.5 text-sm font-medium text-heading ">User Name</label>
        <input type="text" id="visitors" class="bg-neutral-secondary-medium border border-default-medium text-heading   text-sm rounded-base focus:ring-brand focus:border-brand block w-300 px-2.5 py-2 shadow-xs placeholder:text-body " name="uname" placeholder="" required />
    </div>
    
        <div>
        <label for="visitors" class="block mb-2.5 text-sm font-medium text-heading ">Book Name</label>
        <input type="text" id="visitors" class="bg-neutral-secondary-medium border border-default-medium text-heading   text-sm rounded-base focus:ring-brand focus:border-brand block w-300 px-2.5 py-2 shadow-xs placeholder:text-body " name="T_I_A" placeholder="" required />
    </div>



    <div>
        <label for="visitors" class="block mb-2.5 text-sm font-medium text-heading">	issue_date	</label>
        <input type="date" id="visitors" class="bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-300 px-3 py-2.5 shadow-xs placeholder:text-body" name="issue_date"   placeholder="" required />
    </div>

     <div>
        <label for="visitors" class="block mb-2.5 text-sm font-medium text-heading">		Due_date</label>
        <input type="date" id="visitors" class="bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-300 px-3 py-2.5 shadow-xs placeholder:text-body" name="Due_date"   placeholder="" required />
    </div>
    <div>
        <label for="message" class="block mb-2.5 text-sm font-medium text-heading">Note(Optional)</label>
        <textarea id="message" rows="4" class="bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-300 p-3.5 shadow-xs placeholder:text-body" name="note" placeholder="Write your thoughts here..."></textarea>

        </div>
 <button type="submit" class="btn">Submit</button>
        <!-- Card 2 -->
       

        <!-- Card 3 -->
     

        <!-- Card 4 -->
     
    </div>



    <!-- Available Books Table Section -->
    <h1 class="text-4xl font-bold text-gray-700 mb-6 text-center">Issue preview</h1>


<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-2 gap-8 mb-12">

    @foreach($reviews as $issue)
<div class="bg-white shadow-lg rounded-3xl p-6 transform hover:scale-105 transition duration-300 border border-gray-200">
    <div class="flex flex-col md:flex-row items-center md:items-start gap-6">

        {{-- Image --}}
        <div class="flex-shrink-0">
            @if($issue->image)
                <img src="{{ asset('uploads/issue_images/' . $issue->image) }}"
                     class="w-28 h-28 rounded-xl object-cover border shadow">
            @else
                <img src="{{ asset('images/4.png') }}"
                     class="w-28 h-28 rounded-xl object-cover border shadow">
            @endif
        </div>

        {{-- Details --}}
        <div class="flex-1 text-center md:text-left">
            {{-- User Name --}}
            <h2 class="text-xl font-bold text-gray-800 mb-1">{{ $issue->uname }}</h2>

            {{-- Book Name --}}
            <p class="text-lg font-semibold text-gray-700 mb-3">📘 {{ $issue->T_I_A }}</p>

            {{-- Dates & Note --}}
            <div class="text-gray-600 text-sm space-y-1">
                <p><strong>Issue Date:</strong> {{ $issue->issue_date }}</p>
                <p><strong>Due Date:</strong> {{ $issue->Due_date }}</p>
                @if($issue->note)
                <p><strong>Note:</strong> <span class="text-gray-700">{{ $issue->note }}</span></p>
                @endif
            </div>

            {{-- Status Badge --}}
            <div class="mt-4">
                <span class="px-4 py-1 text-xs bg-green-100 text-green-700 rounded-full">Issued</span>
            </div>
        </div>

    </div>
</div>

    @endforeach

</div>



@endsection
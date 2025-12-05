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

@section('title', "DESHBOARD")

@section("title2","Deshboard")

@section('content')

 <div class="min-h-screen bg-gray-50 p-6">

    <!-- Cards Section -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 mb-12">

        <!-- Card 1 -->
        <div class="bg-[#DFECDE] shadow-lg p-6 rounded-3xl transform transition-transform hover:scale-105 flex flex-col items-center text-center">
            <img src="{{ asset('images/1.png') }}" alt="New Books" class="w-16 h-16 rounded-full mb-4">
            <p class="text-gray-700 font-medium">New Books Added</p>
            <h1 class="text-3xl font-bold mb-2">310</h1>
            <p class="text-gray-500 text-sm">310 New Books Added in Library</p>
        </div>

        <!-- Card 2 -->
        <div class="bg-[#E1E1FC] shadow-lg p-6 rounded-3xl transform transition-transform hover:scale-105 flex flex-col items-center text-center">
            <img src="{{ asset('images/2.png') }}" alt="Lost Books" class="w-16 h-16 rounded-full mb-4">
            <p class="text-gray-700 font-medium">Lost Books</p>
            <h1 class="text-3xl font-bold mb-2">41</h1>
            <p class="text-gray-500 text-sm">41 Books Are Not In Library</p>
        </div>

        <!-- Card 3 -->
        <div class="bg-[#F1E7FA] shadow-lg p-6 rounded-3xl transform transition-transform hover:scale-105 flex flex-col items-center text-center">
            <img src="{{ asset('images/3.png') }}" alt="Borrowed Books" class="w-16 h-16 rounded-full mb-4">
            <p class="text-gray-700 font-medium">Borrowed Books</p>
            <h1 class="text-3xl font-bold mb-2">580</h1>
            <p class="text-gray-500 text-sm">580 Books Borrowed</p>
        </div>

        <!-- Card 4 -->
        <div class="bg-[#FDF2E1] shadow-lg p-6 rounded-3xl transform transition-transform hover:scale-105 flex flex-col items-center text-center">
            <img src="{{ asset('images/6.png') }}" alt="Available Books" class="w-16 h-16 rounded-full mb-4">
            <p class="text-gray-700 font-medium">Available Books</p>
            <h1 class="text-3xl font-bold mb-2">8580</h1>
            <p class="text-gray-500 text-sm">8580 Books Are Available To Borrow</p>
        </div>

    </div>

    <!-- Available Books Table Section -->
    <h1 class="text-4xl font-bold text-gray-700 mb-6 text-center">Available Books</h1>

    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-200 rounded-xl shadow-md overflow-hidden">
            <thead class="bg-[#98DDED] text-gray-800">
                <tr>
                    <th class="py-3 px-6 text-left font-semibold">Title</th>
                    <th class="py-3 px-6 text-left font-semibold">Author</th>
                    <th class="py-3 px-6 text-left font-semibold">Category</th>
                    <th class="py-3 px-6 text-left font-semibold">Available</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @forelse($books as $book)
                    <tr class="hover:bg-gray-100">
                        <td class="py-3 px-6">{{ $book->title }}</td>
                        <td class="py-3 px-6">{{ $book->author }}</td>
                        <td class="py-3 px-6">{{ $book->category }}</td>
                        <td class="py-3 px-6">{{ $book->available ? 'Yes' : 'No' }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center py-4 text-gray-500">No books available</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

</div>



@endsection
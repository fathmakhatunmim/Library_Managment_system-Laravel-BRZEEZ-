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
    <div class="flex justify-center mt-16 mb-20">
    <div class="w-full max-w-lg bg-[#DFECDE] shadow-lg p-8 rounded-3xl transform transition-transform hover:scale-105">
        <form action="{{ route('issue.store') }}" method="POST" enctype="multipart/form-data" class="space-y-5">
            @csrf

            <!-- Upload File -->
            <div>
                <label for="file_input" class="block mb-2 text-sm font-medium text-gray-700">Upload file</label>
                <input type="file" name="image" id="file_input"
                    class="w-full h-10 cursor-pointer bg-white border border-gray-300 text-gray-900 text-sm rounded-xl shadow-sm focus:ring-2 focus:ring-yellow-400 focus:border-yellow-400">
                <p class="mt-1 text-sm text-gray-600">SVG, PNG, JPG or GIF (MAX. 800x400px).</p>
            </div>

            <!-- User Name -->
            <div>
                <label for="uname" class="block mb-2 text-sm font-medium text-gray-700">User Name</label>
                <input type="text" id="uname" name="uname" placeholder="Enter your name" required
                    class="w-full px-4 py-2 text-sm rounded-xl border border-gray-300 focus:ring-2 focus:ring-yellow-400 focus:border-yellow-400 bg-white text-gray-900 shadow-sm">
            </div>

            <!-- Book Name -->
            <div>
                <label for="T_I_A" class="block mb-2 text-sm font-medium text-gray-700">Book Name</label>
                <input type="text" id="T_I_A" name="T_I_A" placeholder="Enter book name" required
                    class="w-full px-4 py-2 text-sm rounded-xl border border-gray-300 focus:ring-2 focus:ring-yellow-400 focus:border-yellow-400 bg-white text-gray-900 shadow-sm">
            </div>

            <!-- Issue Date -->
            <div>
                <label for="issue_date" class="block mb-2 text-sm font-medium text-gray-700">Issue Date</label>
                <input type="date" id="issue_date" name="issue_date" required
                    class="w-full px-4 py-2 text-sm rounded-xl border border-gray-300 focus:ring-2 focus:ring-yellow-400 focus:border-yellow-400 bg-white text-gray-900 shadow-sm">
            </div>

            <!-- Due Date -->
            <div>
                <label for="Due_date" class="block mb-2 text-sm font-medium text-gray-700">Due Date</label>
                <input type="date" id="Due_date" name="Due_date" required
                    class="w-full px-4 py-2 text-sm rounded-xl border border-gray-300 focus:ring-2 focus:ring-yellow-400 focus:border-yellow-400 bg-white text-gray-900 shadow-sm">
            </div>

            <!-- Note -->
            <div>
                <label for="note" class="block mb-2 text-sm font-medium text-gray-700">Note (Optional)</label>
                <textarea id="note" name="note" rows="4" placeholder="Write your thoughts here..."
                    class="w-full px-4 py-3 text-sm rounded-xl border border-gray-300 focus:ring-2 focus:ring-yellow-400 focus:border-yellow-400 bg-white text-gray-900 shadow-sm resize-none"></textarea>
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
    <h1 class="text-4xl font-bold text-gray-700 mb-6 text-center">Issue preview</h1>


<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-2 gap-8 mb-12">

    @foreach($reviews as $issue)
<div class="bg-[#F1E7FA] shadow-lg rounded-3xl p-6 transform hover:scale-105 transition duration-300 border border-gray-200">
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
            {{-- ১. \Carbon\Carbon::parse($issue->Due_date)

ডাটাবেজে যেই Due_date আছে, সেটাকে Carbon তারিখে রূপান্তর করছে।

উদাহরণ: "2025-12-10" ➝ Carbon object

✔️ ২. \Carbon\Carbon::today()

আজকের তারিখ নিচ্ছে।

উদাহরণ: "2025-12-07"

✔️ ৩. .lt()

lt = less than মানে ছোট কিনা (এর আগে) --}}
            <div class="mt-4">
                  @if(\Carbon\Carbon::parse($issue->Due_date)->lt(\Carbon\Carbon::today()))
                            <span class="px-4 py-1 text-xs bg-red-100 text-red-700 rounded-full">Overdue</span>
                        @else
                            <span class="px-4 py-1 text-xs bg-green-100 text-green-700 rounded-full">Issued</span>
                        @endif
            </div>
        </div>

    </div>
</div>

    @endforeach

</div>



@endsection
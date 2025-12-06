<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield("title", "Library Management")</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-gray-100 min-h-screen">

{{-- Navbar --}}
<div class="navbar bg-[#383033] shadow-sm px-6 py-4 flex justify-between items-center">
    <div class="flex items-center space-x-4">
        <img src="{{ asset('images/logo.png') }}" alt="Book Icon" class="w-12 h-auto rounded-lg">
        <span class="text-xl font-bold text-white">Library Management System</span>
    </div>

    <div class="flex items-center space-x-4">
        {{-- Search Form --}}
        <form action="{{ route('avaBook.index') }}" method="GET" class="flex space-x-2 w-full max-w-md">
            <input type="search" name="search" placeholder="Search by title, author, category"
                   class="w-full bg-white px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400"
                   value="{{ request('search') }}">
            <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600">
                Search
            </button>
        </form>

        {{-- Logout --}}
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button 
                class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 font-semibold">
                Logout
            </button>
        </form>
    </div>
</div>

{{-- Main Content --}}
<div class="flex min-h-screen">

    {{-- Sidebar --}}
    <div class="w-80 bg-[#1E1B1C] p-6 flex flex-col space-y-4">
        <a href="{{ route('avaBook.index') }}" class="sidebar-link">
            <img src="{{ asset('images/1.png') }}" class="w-7 h-7 mr-2"> Dashboard
        </a>
        <a href="{{ route('revBook.index') }}" class="sidebar-link">
            <img src="{{ asset('images/4.png') }}" class="w-7 h-7 mr-2"> Review Book
        </a>
        <a href="{{ route('issue.index') }}" class="sidebar-link">
            <img src="{{ asset('images/5.png') }}" class="w-7 h-7 mr-2"> Issue Return/ Overdue Books
        </a>
        {{-- <a href="{{ route('over.index') }}" class="sidebar-link">
            <img src="{{ asset('images/7.png') }}" class="w-7 h-7 mr-2"> Overdue Books
        </a> --}}
        <a href="{{ route('report.index') }}" class="sidebar-link">
            <img src="{{ asset('images/2.png') }}" class="w-7 h-7 mr-2"> Report & Analysis
        </a>
    </div>

    {{-- Content Area --}}
    <div class="flex-1 p-10 w-full">
        <div class="max-w-7xl mx-auto flex flex-col space-y-8">
            {{-- Page Title --}}
            <div>
                <h1 class="text-4xl font-bold text-gray-800 mb-2">@yield('title2', 'Dashboard')</h1>
                <p>Welcome Back</p>
            </div>

            {{-- Page Content --}}
            <div class="w-full">
                @yield('content')
            </div>
        </div>
    </div>
</div>

{{-- Sidebar link styles --}}
<style>
    .sidebar-link {
        display: flex;
        align-items: center;
        padding: 0.75rem 1rem;
        background-color: #1E1B1C;
        color: white;
        font-weight: bold;
        border-radius: 0.75rem;
        transition: all 0.3s;
        text-decoration: none;
    }
    .sidebar-link:hover {
        background-color: #BF82FB;
    }
</style>

</body>
</html>

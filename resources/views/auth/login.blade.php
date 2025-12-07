<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>
   <div class="navbar bg-[#383033] shadow-sm px-6 py-4 flex justify-between items-center">
    <!-- Logo + Title -->
    <div class="flex items-center space-x-4">
        <img src="{{ asset('images/logo.png') }}" alt="Book Icon" class="w-12 h-auto rounded-lg">
        <span class="text-xl font-bold text-white">Library Management System</span>
    </div>

    <!-- Register Button -->
    <div class="ml-auto">
    <a href="{{ route('register') }}"
       class="px-6 py-2 bg-[#f3f5f2] hover:bg-yellow-600 rounded-lg font-bold transition-all text-dark">
        Register
    </a>
</div>

    <!-- Dropdown Placeholder (Optional Future Menu) -->
    <div>
        <!-- Future dropdown menu can be placed here -->
    </div>
</div>





<div class="min-h-screen bg-gray-200 flex items-center justify-center px-4">
    <div class="bg-white rounded-2xl shadow-xl overflow-hidden max-w-5xl w-full grid grid-cols-1 md:grid-cols-2">

        <!-- Left Image -->
       <div class="h-full p-7 rounded-2xl overflow-hidden">
    <img src="{{ asset('images/tree.jpg') }}" 
         class="w-full h-full object-cover rounded-xl">
</div>
        <!-- Right Form -->
        <div class="p-8 flex flex-col justify-center">
            
            <!-- Logo + Title -->
            {{-- <div class="mb-6">
                <h2 class="text-2xl font-bold text-gray-800 flex items-center gap-2">
                     Library System
                </h2>
            </div> --}}

            <h3 class="text-2xl font-semibold text-gray-800 mb-2">Login to your Account</h3>
            <p class="text-sm text-gray-500 mb-6">Welcome back! Select method to log in:</p>

            <!-- Social Login -->
            <div class="flex gap-4 mb-5">
                <button class="flex-1 py-2 border rounded-lg flex items-center justify-center gap-2 hover:bg-gray-100">
                    <img src="https://cdn-icons-png.flaticon.com/512/733/733547.png" class="w-5">
                    Facebook
                </button>
                <button class="flex-1 py-2 border rounded-lg flex items-center justify-center gap-2 hover:bg-gray-100">
                    <img src="https://cdn-icons-png.flaticon.com/512/300/300221.png" class="w-5">
                    Google
                </button>
            </div>

            <div class="relative my-4">
                <span class="absolute inset-x-0 top-1/2 transform -translate-y-1/2 text-gray-400 text-sm text-center bg-white px-2">
                    or continue with email
                </span>
                <div class="border-b"></div>
            </div>

            <!-- Login Form -->
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <label class="text-sm font-medium text-gray-700">Email or Username</label>
                <input type="text" name="email"
                       class="w-full px-4 py-2 mt-1 mb-4 border rounded-lg focus:ring focus:ring-blue-200">

                <label class="text-sm font-medium text-gray-700">Password</label>
                <div class="relative">
                    <input type="password" name="password"
                           class="w-full px-4 py-2 mt-1 border rounded-lg focus:ring focus:ring-blue-200">
                </div>

                <div class="flex justify-between items-center my-3">
                    <label class="flex items-center gap-2 text-sm text-gray-600">
                        <input type="checkbox"> Remember Me
                    </label>
                    <a href="#" class="text-sm text-blue-500 hover:underline">Forgot Password?</a>
                </div>

                <button class="w-full py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg font-semibold transition">
                    Login
                </button>

            </form>

            <p class="text-center text-sm mt-6 text-gray-600">
                New on our platform? 
                <a href="{{ route('register') }}" class="text-blue-600 font-semibold hover:underline">
                    Create an account
                </a>
            </p>

        </div>
    </div>
</div>


</body>
</html>
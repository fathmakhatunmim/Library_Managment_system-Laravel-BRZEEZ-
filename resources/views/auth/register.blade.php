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
<div class="min-h-screen bg-[#EFFAFC] flex items-center justify-center px-4">

    <div class="bg-white rounded-3xl shadow-xl overflow-hidden grid grid-cols-1 md:grid-cols-2 max-w-5xl w-full">

        <!-- Left Image -->
        <div class="h-full p-7 rounded-2xl overflow-hidden">
    <img src="{{ asset('images/tree.jpg') }}" 
         class="w-full h-full object-cover rounded-xl">
</div>

        <!-- Right Form -->
        <div class="p-10 flex flex-col justify-center">

            <h2 class="text-3xl font-bold text-gray-900 mb-3">Create an Account</h2>
            <p class="text-sm text-gray-500 mb-6">Join our Library System to explore more.</p>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Full Name -->
                <label class="text-sm font-medium text-gray-700 mb-1">Full Name</label>
                <x-text-input id="name"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 mb-4"
                    type="text" name="name" :value="old('name')" required autofocus />
                <x-input-error :messages="$errors->get('name')" class="mb-2" />

                <!-- Email -->
                <label class="text-sm font-medium text-gray-700 mb-1">Email</label>
                <x-text-input id="email"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 mb-4"
                    type="email" name="email" :value="old('email')" required />
                <x-input-error :messages="$errors->get('email')" class="mb-2" />

                <!-- Password -->
                <label class="text-sm font-medium text-gray-700 mb-1">Password</label>
                <x-text-input id="password"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 mb-4"
                    type="password" name="password" required />
                <x-input-error :messages="$errors->get('password')" class="mb-2" />

                <!-- Confirm Password -->
                <label class="text-sm font-medium text-gray-700 mb-1">Confirm Password</label>
                <x-text-input id="password_confirmation"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 mb-6"
                    type="password" name="password_confirmation" required />
                <x-input-error :messages="$errors->get('password_confirmation')" class="mb-2" />

                <!-- Buttons -->
                <button
                    class="w-full py-2 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-lg transition mb-4">
                    Register
                </button>

                <p class="text-sm text-gray-600 text-center">
                    Already have an account?
                    <a href="{{ route('login') }}" class="text-blue-600 font-medium hover:underline">
                        Login here
                    </a>
                </p>

            </form>

        </div>

    </div>
</div>





</body>
</html>
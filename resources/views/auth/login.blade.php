@extends('Dashboard.layouts.app')
@section('login')

<div class="h-screen w-screen flex items-center justify-center px-4 bg-gray-200">
    <div class="bg-white rounded-3xl mx-24 shadow-lg flex flex-col md:flex-row  w-full overflow-hidden h-full md:h-auto">

        <!-- Left Side Image -->
        <div class="w-full md:w-2/3 relative h-60 md:h-auto">
            <img src="{{ asset('assets/images/bannerImages/hero-banner.webp') }}"
                 alt="House"
                 class="w-full h-full object-cover">

            <div class="absolute top-4 left-4 bg-white px-4 py-2 rounded-full text-sm font-semibold shadow">
                🏠 Adon Reality
            </div>

            <div class="absolute bottom-6 left-6 text-white">
                <h2 class="text-xl font-bold">Manage Properties Efficiently</h2>
                <p class="text-sm mt-1 max-w-sm">Track rent, maintenance & communication in one place. Say goodbye to manual work.</p>
            </div>
        </div>

        <!-- Right Side Form -->
        <div class="w-full md:w-1/3 p-10 flex flex-col justify-center">
            <div class="flex justify-end">
                <button class="bg-black text-white px-5 py-2 rounded-full text-sm">Login</button>
            </div>

            <h2 class="text-2xl font-bold mt-6 mb-2 text-gray-800">Welcome Back to Adon Reality!</h2>
            <p class="text-gray-500 mb-6 text-sm">Sign in to your account</p>

            <!-- Display Session Status -->
            @if (session('status'))
                <div class="mb-4 text-green-600 text-sm font-medium">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email -->
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus
                           class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-full focus:ring-blue-500 focus:border-blue-500" />
                    @error('email')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Password -->
                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input id="password" type="password" name="password" required
                           class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-full focus:ring-blue-500 focus:border-blue-500" />
                    @error('password')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Remember Me -->
                <div class="flex items-center justify-between mb-4 text-sm">
                    <label class="inline-flex items-center">
                        <input type="checkbox" name="remember" class="form-checkbox text-blue-600 rounded">
                        <span class="ml-2 text-gray-600">Remember Me</span>
                    </label>
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="text-blue-500 hover:underline">
                            Forgot Password?
                        </a>
                    @endif
                </div>

                <!-- Login Button -->
                <button type="submit" class="w-full bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 rounded-full">
                    Login
                </button>
            </form>

            <!-- Register Link -->
            <p class="text-center text-sm mt-6 text-gray-600">
                Don’t have an account?
                <a href="{{ route('register') }}" class="text-blue-500 hover:underline">Register</a>
            </p>
        </div>
    </div>
</div>

@endsection

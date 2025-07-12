<!-- <form method="POST" action="{{ route('register') }}">
    @csrf

    <div class="mb-4">
        <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
        <input id="name" type="text" name="name" value="{{ old('name') }}"
            required autofocus autocomplete="name"
            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
        @error('name')
            <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
        @enderror
    </div>
    <div class="mb-4">
        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
        <input id="email" type="email" name="email" value="{{ old('email') }}"
            required autocomplete="username"
            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
        @error('email')
            <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
        @enderror
    </div>
    <div class="mb-4">
        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
        <input id="password" type="password" name="password" required autocomplete="new-password"
            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
        @error('password')
            <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
        @enderror
    </div>
    <div class="mb-4">
        <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm Password</label>
        <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password"
            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
        @error('password_confirmation')
            <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
        @enderror
    </div>

    <div class="flex items-center justify-between">
        <a href="{{ route('login') }}" class="text-sm text-indigo-600 hover:underline">
            Already registered?
        </a>
        <button type="submit"
            class="bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">
            Register
        </button>
    </div>
</form> -->

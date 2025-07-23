@extends('layouts.guest')

@section('content')
<div class="text-center mb-6">
    <x-application-logo class="w-14 h-14 text-hireme" />
</div>

<div class="bg-hireme-light rounded-lg shadow-xl p-8">
    <h2 class="text-2xl font-bold text-hireme text-center">Login to HireMe</h2>
    <p class="text-center text-hireme-dark mt-2 mb-6">
        Welcome back! Please enter your credentials to continue.
    </p>

    @if (session('status'))
    <div class="mb-4 text-sm text-green-600">
        {{ session('status') }}
    </div>
    @endif

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email -->
        <div class="mb-4">
            <label for="email" class="block font-medium text-hireme">Email</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus
                class="w-full px-4 py-3 border border-hireme-muted rounded focus:outline-none focus:ring-2 focus:ring-hireme focus:border-hireme transition duration-200" />
            @error('email')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Password -->
        <div class="mb-4">
            <label for="password" class="block font-medium text-hireme">Password</label>
            <input id="password" type="password" name="password" required
                class="w-full px-4 py-3 border border-hireme-muted rounded focus:outline-none focus:ring-2 focus:ring-hireme focus:border-hireme transition duration-200" />
            @error('password')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Remember Me -->
        <div class="flex items-center mb-4">
            <input id="remember_me" type="checkbox" name="remember"
                class="mr-2 border-gray-300 rounded text-hireme focus:ring-hireme">
            <label for="remember_me" class="text-sm text-hireme-dark">Remember me</label>
        </div>

        <!-- Forgot Password -->
        <div class="flex justify-between items-center mb-6">
            @if (Route::has('password.request'))
            <a class="text-sm text-hireme hover:underline" href="{{ route('password.request') }}">
                Forgot your password?
            </a>
            @endif
        </div>

        <!-- Submit -->
        <div>
            <button type="submit"
                class="w-full bg-hireme hover:bg-hireme-dark text-white font-semibold py-3 px-4 rounded transition duration-200">
                Log In
            </button>
        </div>
    </form>
</div>

<!-- Optional Footer -->
<div class="mt-8 text-sm text-center text-hireme-dark">
    © {{ date('Y') }} HireMe. All rights reserved.
</div>
@endsection
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Us — HireMe</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-white text-hireme-dark min-h-screen flex flex-col">
    <!-- Navbar -->
    <nav class="bg-white border-b border-hireme-muted shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-between h-16 items-center">
            <div class="text-hireme font-bold text-xl">
                <a href="{{ url('/') }}">HireMe</a>
            </div>
            <div class="space-x-6 font-medium hidden md:flex">
                <a href="{{ route('about') }}" class="hover:text-hireme-dark">About</a>
                <a href="{{ url('contact') }}" class="hover:text-hireme-dark">Contact</a>
                <a href="{{ route('login') }}" class="hover:text-hireme-dark">Login</a>
                <a href="{{ route('register') }}" class="hover:text-hireme-dark">Register</a>
            </div>
        </div>
    </nav>

    <!-- Contact Section -->
    <main class="flex-grow py-16 px-4 sm:px-6 lg:px-8">
        <div class="max-w-2xl mx-auto bg-hireme-light p-8 rounded shadow-md">
            <h1 class="text-3xl font-bold text-hireme mb-4 text-center">Let's Talk</h1>
            <p class="text-center text-gray-700 mb-6">
                We'd love to hear from you. We're here to answer your questions and listen to your suggestions.
            </p>

            @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
                {{ session('success') }}
            </div>
            @endif

            <form method="POST" action="{{ route('contact.submit') }}" class="space-y-4">
                @csrf
                <div>
                    <label class="block text-sm font-medium">First Name</label>
                    <input type="text" name="first_name" class="mt-1 block w-full rounded border-gray-300 shadow-sm" required>
                </div>
                <div>
                    <label class="block text-sm font-medium">Last Name</label>
                    <input type="text" name="last_name" class="mt-1 block w-full rounded border-gray-300 shadow-sm" required>
                </div>
                <div>
                    <label class="block text-sm font-medium">Email</label>
                    <input type="email" name="email" class="mt-1 block w-full rounded border-gray-300 shadow-sm" required>
                </div>
                <div>
                    <label class="block text-sm font-medium">Message</label>
                    <textarea name="message" rows="5" class="mt-1 block w-full rounded border-gray-300 shadow-sm" required></textarea>
                </div>

                <div class="text-sm text-gray-600">
                    By submitting this form, you agree to our processing of your data in accordance with our Privacy Policy.
                </div>

                <div class="text-center">
                    <button type="submit" class="bg-hireme text-white px-6 py-2 rounded hover:bg-hireme-dark transition">
                        Send Message
                    </button>
                </div>
            </form>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-hireme text-white text-center text-sm py-4 mt-12">
        &copy; 2025 HireMe — All rights reserved.
    </footer>
</body>

</html>
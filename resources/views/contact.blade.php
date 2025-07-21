<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
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

    <!-- Main Content -->
    <main class="flex-grow py-16 px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mx-auto text-center mb-12">
            <h1 class="text-4xl font-bold text-hireme mb-4">Let's Talk</h1>
            <p class="text-lg text-gray-700">
                We'd love to hear from you. We're here to answer your questions and listen to your suggestions.
            </p>
        </div>

        <form class="bg-hireme-light p-6 rounded shadow-md max-w-3xl mx-auto space-y-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-medium text-hireme-dark mb-1">First Name</label>
                    <input type="text" class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring focus:border-hireme">
                </div>
                <div>
                    <label class="block text-sm font-medium text-hireme-dark mb-1">Last Name</label>
                    <input type="text" class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring focus:border-hireme">
                </div>

                <div>
                    <label class="block text-sm font-medium text-hireme-dark mb-1">Email</label>
                    <input type="email" class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring focus:border-hireme">
                </div>
                <div>
                    <label class="block text-sm font-medium text-hireme-dark mb-1">Message</label>
                    <textarea rows="5" class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring focus:border-hireme"></textarea>
                </div>
                <p class="text-xs text-gray-600">
                    By submitting this form, you agree to our processing of your data in accordance with our Privacy Policy.
                </p>
            </div>
            <div class="text-center">
                <button type="submit" class="bg-hireme text-white px-6 py-2 rounded hover:bg-hireme-dark transition">Send Message</button>
            </div>
        </form>
    </main>

    <!-- Footer -->
    <footer class="bg-hireme text-white text-center text-sm py-4 mt-12">
        &copy; 2025 HireMe — All rights reserved.
    </footer>
</body>

</html>
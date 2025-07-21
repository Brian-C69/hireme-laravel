<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>HireMe — Your Career Begins Here</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-hireme-light text-hireme-dark min-h-screen flex flex-col">

    <!-- Navbar -->
    <nav class="bg-white border-b border-hireme-muted shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-between h-16 items-center">
            <div class="text-hireme font-bold text-xl">
                <a href="welcome">HireMe</a>
            </div>
            <div class="space-x-6 font-medium hidden md:flex">
                <a href="about" class="hover:text-hireme-dark">About</a>
                <a href="#contact" class="hover:text-hireme-dark">Contact</a>
                <a href="{{ route('login') }}" class="hover:text-hireme-dark">Login</a>
                <a href="{{ route('register') }}" class="hover:text-hireme-dark">Register</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="flex-grow flex items-center justify-center bg-white py-20 px-6">
        <div class="text-center max-w-xl">
            <h1 class="text-5xl font-bold text-hireme">Welcome to HireMe</h1>
            <p class="mt-4 text-lg text-hireme-dark">The smart way to connect job seekers with great employers.</p>

            <div class="mt-6 flex justify-center gap-4">
                <a href="{{ route('login') }}" class="px-6 py-3 bg-hireme text-white rounded hover:bg-hireme-dark transition">
                    Get Started
                </a>
                <a href="about" class="px-6 py-3 border border-hireme text-hireme rounded hover:bg-hireme-light transition">
                    Learn More
                </a>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-16 px-6 bg-hireme-light text-center">
        <h2 class="text-3xl font-bold text-hireme mb-4">Why HireMe?</h2>
        <p class="text-hireme-dark max-w-2xl mx-auto">
            HireMe makes job hunting and recruitment easy, fast, and efficient. Whether you're a fresh grad or a seasoned employer, we simplify your journey with modern tools built for today’s world.
        </p>
    </section>

    <!-- Footer -->
    <footer class="bg-hireme text-white py-6 text-center text-sm">
        &copy; 2025 HireMe — All rights reserved.
    </footer>

</body>

</html>
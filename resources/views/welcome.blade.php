<!DOCTYPE html>
<html lang="en">

<head>
    <title>HireMe — Your Career Begins Here</title>
    @include('layouts.head')
</head>

<body class="bg-hireme-light text-hireme-dark min-h-screen flex flex-col">

    @include('layouts.navbar')

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

    @include('layouts.footer')

</body>

</html>
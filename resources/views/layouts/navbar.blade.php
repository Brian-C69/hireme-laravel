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
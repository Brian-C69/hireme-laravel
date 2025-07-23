<nav x-data="{ open: false }" class="bg-white border-b border-hireme-muted shadow-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16 items-center">
            <!-- Logo -->
            <div class="text-hireme font-bold text-xl">
                <a href="{{ route('welcome') }}">HireMe</a>
            </div>

            <!-- Desktop Menu -->
            <div class="hidden md:flex space-x-6 font-medium">
                <a href="{{ route('about') }}" class="hover:text-hireme-dark">About</a>
                <a href="{{ route('contact') }}" class="hover:text-hireme-dark">Contact</a>
                <a href="{{ route('login') }}" class="hover:text-hireme-dark">Login</a>
                <a href="{{ route('register') }}" class="hover:text-hireme-dark">Register</a>
            </div>

            <!-- Hamburger Button (Mobile) -->
            <div class="md:hidden">
                <button @click="open = !open" class="text-hireme-dark focus:outline-none">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': !open }" class="inline-flex"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'inline-flex': open, 'hidden': !open }" class="hidden"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div x-show="open" x-transition class="md:hidden px-4 pt-2 pb-4 space-y-2 font-medium">
        <a href="{{ route('about') }}" class="block text-hireme hover:text-hireme-dark">About</a>
        <a href="{{ route('contact') }}" class="block text-hireme hover:text-hireme-dark">Contact</a>
        <a href="{{ route('login') }}" class="block text-hireme hover:text-hireme-dark">Login</a>
        <a href="{{ route('register') }}" class="block text-hireme hover:text-hireme-dark">Register</a>
    </div>
</nav>
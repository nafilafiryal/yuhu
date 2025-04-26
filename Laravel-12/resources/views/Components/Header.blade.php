<header class="fixed top-0 left-0 w-full bg-white shadow-md z-50 transition-all duration-300">
    <div class="container mx-auto px-4 md:px-6 flex items-center justify-between h-16">
        <div class="flex items-center">
            <div class="text-purple-500 text-2xl mr-2">
                <i class="fas fa-file-alt"></i>
            </div>
            <h1 class="text-2xl font-bold text-purple-700 tracking-wide">
                Fil<span class="text-purple-500">Ex</span>
            </h1>
        </div>

        <div class="md:hidden">
            <button id="mobile-menu-button" class="text-purple-500 text-xl focus:outline-none">
                <i class="fas fa-bars"></i>
            </button>
        </div>

        <nav class="hidden md:flex items-center space-x-8">
            <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">
                Home
            </a>
            <a href="{{ route('features') }}" class="nav-link {{ request()->routeIs('features') ? 'active' : '' }}">
                Features
            </a>
            <a href="{{ route('about') }}" class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}">
                About Us
            </a>
        </nav>

        <div class="hidden md:flex items-center space-x-4">
            @auth
                <a href="{{ route('dashboard') }}" class="btn-login">
                    Dashboard
                </a>
                <form method="POST" action="{{ route('logout') }}" class="inline">
                    @csrf
                    <button type="submit" class="btn-register">
                        Logout
                    </button>
                </form>
            @else
                <a href="{{ route('login') }}" class="btn-login">
                    Login
                </a>
                <a href="{{ route('register') }}" class="btn-register">
                    Register
                </a>
            @endauth
        </div>
    </div>

    <div id="mobile-menu" class="md:hidden hidden bg-white shadow-md">
        <div class="container mx-auto px-4 py-3 space-y-3">
            <a href="{{ route('home') }}" class="mobile-nav-link {{ request()->routeIs('home') ? 'text-purple-500' : 'text-gray-800' }}">
                Home
            </a>
            <a href="{{ route('features') }}" class="mobile-nav-link {{ request()->routeIs('features') ? 'text-purple-500' : 'text-gray-800' }}">
                Features
            </a>
            <a href="{{ route('about') }}" class="mobile-nav-link {{ request()->routeIs('about') ? 'text-purple-500' : 'text-gray-800' }}">
                About Us
            </a>
            <div class="pt-3 space-y-2">
                @auth
                    <a href="{{ route('dashboard') }}" class="mobile-btn-login">
                        Dashboard
                    </a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="mobile-btn-register">
                            Logout
                        </button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="mobile-btn-login">
                        Login
                    </a>
                    <a href="{{ route('register') }}" class="mobile-btn-register">
                        Register
                    </a>
                @endauth
            </div>
        </div>
    </div>
</header>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        
        mobileMenuButton.addEventListener('click', function() {
            mobileMenu.classList.toggle('hidden');

            const icon = mobileMenuButton.querySelector('i');
            if (icon.classList.contains('fa-bars')) {
                icon.classList.remove('fa-bars');
                icon.classList.add('fa-times');
            } else {
                icon.classList.remove('fa-times');
                icon.classList.add('fa-bars');
            }
        });
    });
</script>
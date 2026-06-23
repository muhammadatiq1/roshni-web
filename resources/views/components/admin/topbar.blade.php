<header class="flex items-center justify-between px-6 py-4 bg-white border-b border-gray-100">
    <!-- Mobile Menu Button -->
    <div class="flex items-center lg:hidden gap-4">
        <button @click="sidebarOpen = true" class="text-gray-500 focus:outline-none focus:text-gray-700">
            <i data-lucide="menu" class="w-6 h-6"></i>
        </button>
    </div>

    <!-- Page Title -->
    <div class="flex items-center">
        <h2 class="text-xl font-semibold text-gray-800">{{ $title ?? 'Dashboard' }}</h2>
    </div>

    <!-- Right Side Actions -->
    <div class="flex items-center gap-4">
        <!-- Notification Bell -->
        <!-- <button class="relative p-2 text-gray-400 hover:text-gray-600 transition-colors rounded-full hover:bg-gray-100">
            <i data-lucide="bell" class="w-5 h-5"></i>
            <span class="absolute top-1 right-1 w-2 h-2 bg-red-500 rounded-full"></span>
        </button> -->

        <!-- User Profile Dropdown -->
        <div class="relative" x-data="{ open: false }">
            <button @click="open = !open" class="flex items-center gap-2 focus:outline-none">
                <div class="w-8 h-8 rounded-full bg-primary text-white flex items-center justify-center font-bold text-sm">
                    {{ substr(optional(Auth::user())->name ?? 'A', 0, 1) }}
                </div>
                <span class="text-sm font-medium text-gray-700 hidden sm:block">{{ optional(Auth::user())->name ?? 'Admin' }}</span>
                <i data-lucide="chevron-down" class="w-4 h-4 text-gray-500"></i>
            </button>

            <!-- Dropdown Menu -->
            <div x-show="open" 
                 @click.away="open = false"
                 x-transition:enter="transition ease-out duration-100"
                 x-transition:enter-start="transform opacity-0 scale-95"
                 x-transition:enter-end="transform opacity-100 scale-100"
                 x-transition:leave="transition ease-in duration-75"
                 x-transition:leave-start="transform opacity-100 scale-100"
                 x-transition:leave-end="transform opacity-0 scale-95"
                 class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 border border-gray-100 z-50 hidden"
                 :class="{'hidden': !open}">
                <a href="{{ route('profile.edit') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Profile Settings</a>
                <!-- <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="block w-full text-left px-4 py-2 text-sm text-red-600 hover:bg-gray-100">Log Out</button> 
                </form> -->
            </div>
        </div>
    </div>
</header>

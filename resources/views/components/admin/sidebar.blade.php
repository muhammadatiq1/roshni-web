<aside class="flex flex-col h-full py-6 transition-all duration-300">
    <!-- Header -->
    <div class="flex items-center h-10 mb-8" :class="sidebarCollapsed ? 'justify-center px-0' : 'justify-between px-4'">
        <!-- Logo (Visible when open) -->
        <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-2 overflow-hidden" x-show="!sidebarCollapsed">
            <span class="text-2xl font-bold text-gray-900 font-display whitespace-nowrap">Roshni<span class="text-green-600">Admin</span></span>
        </a>
        
        <!-- Desktop Toggle Button -->
        <button @click="sidebarCollapsed = !sidebarCollapsed" class="hidden lg:flex p-1.5 text-gray-500 hover:text-gray-900 rounded-lg hover:bg-green-100 transition-colors focus:outline-none" :title="sidebarCollapsed ? 'Expand sidebar' : 'Collapse sidebar'">
            <span x-show="!sidebarCollapsed"><i data-lucide="panel-left-close" class="w-5 h-5"></i></span>
            <span x-show="sidebarCollapsed" style="display: none;"><i data-lucide="panel-left" class="w-6 h-6"></i></span>
        </button>
        
        <!-- Mobile Close Button -->
        <button @click="sidebarOpen = false" class="lg:hidden p-1.5 text-gray-500 hover:text-red-500 rounded-lg hover:bg-red-50 transition-colors focus:outline-none" x-show="!sidebarCollapsed">
            <i data-lucide="x" class="w-5 h-5"></i>
        </button>
    </div>

    <!-- Navigation Links -->
    <div class="flex flex-col justify-between flex-1" :class="sidebarCollapsed ? 'px-3' : 'px-4'">
        <nav class="space-y-2">
            
            <div class="relative group">
                <a class="flex items-center py-2.5 rounded-lg transition-colors gap-3 {{ request()->routeIs('admin.dashboard') ? 'bg-green-600 text-white shadow-md' : 'text-gray-700 hover:bg-green-100 hover:text-green-800' }}" :class="sidebarCollapsed ? 'justify-center px-0' : 'px-4'" href="{{ route('admin.dashboard') }}">
                    <i data-lucide="layout-dashboard" class="w-5 h-5 flex-shrink-0"></i>
                    <span class="font-medium whitespace-nowrap" x-show="!sidebarCollapsed">Dashboard</span>
                </a>
                <div x-show="sidebarCollapsed" class="absolute left-full top-1/2 -translate-y-1/2 ml-3 px-3 py-1.5 bg-gray-900 text-white text-sm font-medium rounded-md shadow-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 whitespace-nowrap z-50">
                    Dashboard
                    <div class="absolute right-full top-1/2 -translate-y-1/2 border-4 border-transparent border-r-gray-900"></div>
                </div>
            </div>

            <div class="relative group">
                <a class="flex items-center py-2.5 rounded-lg transition-colors gap-3 {{ request()->routeIs('admin.content.*') ? 'bg-green-600 text-white shadow-md' : 'text-gray-700 hover:bg-green-100 hover:text-green-800' }}" :class="sidebarCollapsed ? 'justify-center px-0' : 'px-4'" href="{{ route('admin.content.index') }}">
                    <i data-lucide="layout-template" class="w-5 h-5 flex-shrink-0"></i>
                    <span class="font-medium whitespace-nowrap" x-show="!sidebarCollapsed">Site Content</span>
                </a>
                <div x-show="sidebarCollapsed" class="absolute left-full top-1/2 -translate-y-1/2 ml-3 px-3 py-1.5 bg-gray-900 text-white text-sm font-medium rounded-md shadow-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 whitespace-nowrap z-50">
                    Site Content
                    <div class="absolute right-full top-1/2 -translate-y-1/2 border-4 border-transparent border-r-gray-900"></div>
                </div>
            </div>

            <div class="relative group">
                <a class="flex items-center py-2.5 rounded-lg transition-colors gap-3 {{ request()->routeIs('admin.inquiries.*') ? 'bg-green-600 text-white shadow-md' : 'text-gray-700 hover:bg-green-100 hover:text-green-800' }}" :class="sidebarCollapsed ? 'justify-center px-0' : 'px-4'" href="{{ route('admin.inquiries.index') }}">
                    <i data-lucide="message-square" class="w-5 h-5 flex-shrink-0"></i>
                    <span class="font-medium whitespace-nowrap" x-show="!sidebarCollapsed">Inquiries</span>
                </a>
                <div x-show="sidebarCollapsed" class="absolute left-full top-1/2 -translate-y-1/2 ml-3 px-3 py-1.5 bg-gray-900 text-white text-sm font-medium rounded-md shadow-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 whitespace-nowrap z-50">
                    Inquiries
                    <div class="absolute right-full top-1/2 -translate-y-1/2 border-4 border-transparent border-r-gray-900"></div>
                </div>
            </div>

        </nav>

        <!-- Bottom Actions -->
        <div class="mt-8 border-t border-green-200 pt-4 space-y-2">
            <div class="relative group">
                <a class="flex items-center py-2.5 rounded-lg transition-colors gap-3 text-gray-700 hover:bg-green-100 hover:text-green-800" :class="sidebarCollapsed ? 'justify-center px-0' : 'px-4'" href="{{ url('/') }}" target="_blank">
                    <i data-lucide="external-link" class="w-5 h-5 flex-shrink-0"></i>
                    <span class="font-medium whitespace-nowrap" x-show="!sidebarCollapsed">View Site</span>
                </a>
                <div x-show="sidebarCollapsed" class="absolute left-full top-1/2 -translate-y-1/2 ml-3 px-3 py-1.5 bg-gray-900 text-white text-sm font-medium rounded-md shadow-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 whitespace-nowrap z-50">
                    View Site
                    <div class="absolute right-full top-1/2 -translate-y-1/2 border-4 border-transparent border-r-gray-900"></div>
                </div>
            </div>
            
            <!-- Logout Button -->
            <form method="POST" action="{{ route('logout') }}" class="relative group">
                @csrf
                <button type="submit" class="w-full flex items-center py-2.5 rounded-lg transition-colors gap-3 text-red-600 hover:bg-red-50 hover:text-red-700" :class="sidebarCollapsed ? 'justify-center px-0' : 'px-4'">
                    <i data-lucide="log-out" class="w-5 h-5 flex-shrink-0"></i>
                    <span class="font-medium whitespace-nowrap" x-show="!sidebarCollapsed">Log Out</span>
                </button>
                <div x-show="sidebarCollapsed" class="absolute left-full top-1/2 -translate-y-1/2 ml-3 px-3 py-1.5 bg-gray-900 text-white text-sm font-medium rounded-md shadow-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 whitespace-nowrap z-50">
                    Log Out
                    <div class="absolute right-full top-1/2 -translate-y-1/2 border-4 border-transparent border-r-gray-900"></div>
                </div>
            </form>
        </div>
    </div>
</aside>

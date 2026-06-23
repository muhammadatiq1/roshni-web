<x-admin-layout>
    <x-slot name="title">
        Dashboard Overview
    </x-slot>

    <!-- Stats Grid -->
    <div class="grid grid-cols-1 gap-5 mt-2 sm:grid-cols-2 lg:grid-cols-3">
        
        <!-- Stat Card 1 -->
        <div class="overflow-hidden bg-white rounded-xl shadow-sm border border-gray-100 p-6">
            <div class="flex items-center">
                <div class="p-3 bg-green-50 rounded-lg">
                    <i data-lucide="layout-template" class="w-6 h-6 text-primary"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm font-medium text-gray-500 truncate">Total CMS Pages</p>
                    <p class="text-2xl font-semibold text-gray-900">{{ $totalPages }}</p>
                </div>
            </div>
            <div class="mt-4">
                <a href="{{ route('admin.content.index') }}" class="text-sm font-medium text-primary hover:text-primary-hover transition-colors flex items-center gap-1">
                    Manage content <i data-lucide="arrow-right" class="w-4 h-4"></i>
                </a>
            </div>
        </div>

        <!-- Stat Card 2 -->
        <div class="overflow-hidden bg-white rounded-xl shadow-sm border border-gray-100 p-6">
            <div class="flex items-center">
                <div class="p-3 bg-blue-50 rounded-lg">
                    <i data-lucide="message-square" class="w-6 h-6 text-blue-600"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm font-medium text-gray-500 truncate">Total Inquiries</p>
                    <p class="text-2xl font-semibold text-gray-900">{{ $totalInquiries }}</p>
                </div>
            </div>
            <div class="mt-4">
                <a href="{{ route('admin.inquiries.index') }}" class="text-sm font-medium text-blue-600 hover:text-blue-800 transition-colors flex items-center gap-1">
                    View all inquiries <i data-lucide="arrow-right" class="w-4 h-4"></i>
                </a>
            </div>
        </div>

        <!-- Stat Card 3 -->
        <div class="overflow-hidden bg-white rounded-xl shadow-sm border border-gray-100 p-6">
            <div class="flex items-center">
                <div class="p-3 bg-orange-50 rounded-lg">
                    <i data-lucide="bell" class="w-6 h-6 text-orange-500"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm font-medium text-gray-500 truncate">Unread Inquiries</p>
                    <p class="text-2xl font-semibold text-gray-900">{{ $unreadInquiries }}</p>
                </div>
            </div>
            <div class="mt-4">
                <a href="{{ route('admin.inquiries.index') }}" class="text-sm font-medium text-orange-500 hover:text-orange-700 transition-colors flex items-center gap-1">
                    Check new <i data-lucide="arrow-right" class="w-4 h-4"></i>
                </a>
            </div>
        </div>
    </div>

    <!-- Recent Activity Section -->
    <div class="mt-8">
        <div class="flex items-center justify-between">
            <h3 class="text-lg font-medium leading-6 text-gray-900">Recent Inquiries</h3>
            <a href="{{ route('admin.inquiries.index') }}" class="text-sm font-medium text-primary hover:text-primary-hover">View all</a>
        </div>
        <div class="flex flex-col mt-4">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                    <div class="overflow-hidden border-b border-gray-200 shadow-sm sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">Name</th>
                                    <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">Subject</th>
                                    <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">Status</th>
                                    <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">Date</th>
                                    <th scope="col" class="relative px-6 py-3"><span class="sr-only">View</span></th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @forelse($recentInquiries as $inquiry)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm font-medium text-gray-900">{{ $inquiry->name }}</div>
                                        <div class="text-sm text-gray-500">{{ $inquiry->email }}</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ ucfirst($inquiry->subject) }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        @if($inquiry->is_read)
                                            <span class="inline-flex px-2 text-xs font-semibold leading-5 text-gray-800 bg-gray-100 rounded-full">Read</span>
                                        @else
                                            <span class="inline-flex px-2 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full">New</span>
                                        @endif
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $inquiry->created_at->diffForHumans() }}</td>
                                    <td class="px-6 py-4 text-sm font-medium text-right whitespace-nowrap">
                                        <a href="{{ route('admin.inquiries.show', $inquiry) }}" class="text-primary hover:text-primary-hover">View</a>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="5" class="px-6 py-4 text-sm text-center text-gray-500">No inquiries found.</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>

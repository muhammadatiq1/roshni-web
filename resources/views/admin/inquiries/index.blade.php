<x-admin-layout>
    <x-slot name="title">
        Inquiries Management
    </x-slot>

    <div class="sm:flex sm:items-center sm:justify-between mb-6">
        <div>
            <p class="text-sm text-gray-500">Manage all contact form submissions here. You have {{ $inquiries->where('is_read', false)->count() }} new unread inquiries on this page.</p>
        </div>
    </div>

    @if(session('success'))
        <div class="mb-4 p-4 text-green-800 bg-green-50 rounded-lg border border-green-200">
            <div class="flex items-center">
                <i data-lucide="check-circle" class="w-5 h-5 mr-2"></i>
                {{ session('success') }}
            </div>
        </div>
    @endif

    <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                <div class="overflow-hidden border-b border-gray-200 shadow-sm sm:rounded-lg bg-white">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">Sender</th>
                                <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">Subject</th>
                                <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">Status</th>
                                <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">Date Received</th>
                                <th scope="col" class="relative px-6 py-3"><span class="sr-only">Actions</span></th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @forelse($inquiries as $inquiry)
                            <tr class="hover:bg-gray-50 transition-colors {{ !$inquiry->is_read ? 'bg-green-50/30' : '' }}">
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 w-10 h-10 rounded-full bg-gray-100 flex items-center justify-center text-gray-500">
                                            {{ strtoupper(substr($inquiry->name, 0, 1)) }}
                                        </div>
                                        <div class="ml-4">
                                            <div class="text-sm font-medium {{ !$inquiry->is_read ? 'text-gray-900 font-semibold' : 'text-gray-700' }}">
                                                {{ $inquiry->name }}
                                            </div>
                                            <div class="text-sm text-gray-500">{{ $inquiry->email }}</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">
                                    {{ ucfirst($inquiry->subject) }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    @if($inquiry->is_read)
                                        <span class="inline-flex px-2 text-xs font-semibold leading-5 text-gray-800 bg-gray-100 rounded-full border border-gray-200">Read</span>
                                    @else
                                        <span class="inline-flex px-2 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full border border-green-200">New</span>
                                    @endif
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    {{ $inquiry->created_at->format('M j, Y g:i A') }}
                                </td>
                                <td class="px-6 py-4 text-sm font-medium text-right whitespace-nowrap">
                                    <div class="flex items-center justify-end gap-3">
                                        <a href="{{ route('admin.inquiries.show', $inquiry) }}" class="text-primary hover:text-primary-hover flex items-center gap-1">
                                            <i data-lucide="eye" class="w-4 h-4"></i> View
                                        </a>
                                        <form action="{{ route('admin.inquiries.destroy', $inquiry) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this inquiry?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-500 hover:text-red-700 flex items-center gap-1">
                                                <i data-lucide="trash-2" class="w-4 h-4"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="5" class="px-6 py-10 text-center text-gray-500">
                                    <div class="flex flex-col items-center">
                                        <i data-lucide="inbox" class="w-12 h-12 text-gray-300 mb-3"></i>
                                        <p class="text-base font-medium">No inquiries found</p>
                                        <p class="text-sm">When users submit the contact form, they will appear here.</p>
                                    </div>
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                
                @if($inquiries->hasPages())
                <div class="mt-4">
                    {{ $inquiries->links() }}
                </div>
                @endif
                
            </div>
        </div>
    </div>
</x-admin-layout>

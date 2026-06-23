<x-admin-layout>
    <x-slot name="title">
        Inquiry Details
    </x-slot>

    <div class="mb-6 flex items-center justify-between">
        <a href="{{ route('admin.inquiries.index') }}" class="text-sm font-medium text-gray-600 hover:text-gray-900 flex items-center gap-2 bg-white px-4 py-2 rounded-lg border shadow-sm transition-colors">
            <i data-lucide="arrow-left" class="w-4 h-4"></i> Back to Inquiries
        </a>
        
        <form action="{{ route('admin.inquiries.destroy', $inquiry) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this inquiry?');">
            @csrf
            @method('DELETE')
            <button type="submit" class="text-sm font-medium text-red-600 hover:text-red-800 flex items-center gap-2 bg-red-50 px-4 py-2 rounded-lg border border-red-100 transition-colors">
                <i data-lucide="trash-2" class="w-4 h-4"></i> Delete Inquiry
            </button>
        </form>
    </div>

    <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
        <!-- Header -->
        <div class="p-6 border-b border-gray-200 bg-gray-50 flex items-start justify-between">
            <div class="flex items-center gap-4">
                <div class="w-14 h-14 rounded-full bg-primary/10 text-primary flex items-center justify-center text-xl font-bold font-display">
                    {{ strtoupper(substr($inquiry->name, 0, 1)) }}
                </div>
                <div>
                    <h2 class="text-xl font-semibold text-gray-900">{{ $inquiry->name }}</h2>
                    <div class="flex items-center gap-4 mt-1 text-sm text-gray-600">
                        <a href="mailto:{{ $inquiry->email }}" class="hover:text-primary transition-colors flex items-center gap-1">
                            <i data-lucide="mail" class="w-4 h-4"></i> {{ $inquiry->email }}
                        </a>
                        <span class="flex items-center gap-1">
                            <i data-lucide="calendar" class="w-4 h-4"></i> {{ $inquiry->created_at->format('F j, Y, g:i a') }}
                        </span>
                    </div>
                </div>
            </div>
            
            <div class="text-right">
                <span class="inline-flex px-3 py-1 text-xs font-semibold text-blue-800 bg-blue-100 rounded-full border border-blue-200 shadow-sm">
                    {{ ucfirst($inquiry->subject) }}
                </span>
            </div>
        </div>

        <!-- Body -->
        <div class="p-8">
            <h3 class="text-sm font-bold text-gray-400 uppercase tracking-wider mb-4">Message Content</h3>
            <div class="prose max-w-none text-gray-800 text-lg leading-relaxed bg-gray-50 p-6 rounded-xl border border-gray-100 whitespace-pre-wrap">
{{ $inquiry->message }}
            </div>
        </div>
        
        <!-- Footer actions -->
        <div class="p-6 bg-gray-50 border-t border-gray-200 flex gap-4">
            <a href="mailto:{{ $inquiry->email }}?subject=Reply: {{ $inquiry->subject }}&body=Hi {{ $inquiry->name }},%0D%0A%0D%0A" class="px-6 py-2.5 bg-primary text-white rounded-lg font-medium hover:bg-primary-hover transition-colors shadow-sm flex items-center gap-2">
                <i data-lucide="reply" class="w-4 h-4"></i> Reply via Email
            </a>
        </div>
    </div>
</x-admin-layout>

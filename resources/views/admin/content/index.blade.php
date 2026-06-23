<x-admin-layout>
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-gray-900 font-display">Site Content Management</h1>
        <p class="text-sm text-gray-500 mt-2">Manage all the text, images, and videos across your website. Select a section below to start editing.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($pages as $pageName)
            <a href="{{ route('admin.content.edit', $pageName) }}" class="block p-8 bg-white rounded-2xl shadow-sm border border-gray-100 hover:border-green-500 hover:shadow-lg transition-all group relative overflow-hidden">
                <div class="absolute top-0 right-0 p-4 opacity-5 group-hover:opacity-10 transition-opacity">
                    <i data-lucide="layout-template" class="w-32 h-32"></i>
                </div>
                
                <div class="relative z-10">
                    <div class="w-14 h-14 bg-green-50 text-green-600 rounded-xl flex items-center justify-center mb-6 group-hover:bg-green-600 group-hover:text-white transition-colors duration-300">
                        <i data-lucide="file-text" class="w-7 h-7"></i>
                    </div>
                    
                    <h2 class="text-2xl font-bold text-gray-900 mb-2">{{ $pageName }} Page</h2>
                    <p class="text-gray-500 mb-6">Edit all sections, texts, images, and videos on the {{ $pageName }} page.</p>
                    
                    <div class="flex items-center text-green-600 font-semibold group-hover:translate-x-2 transition-transform duration-300">
                        <span>Edit Page</span>
                        <i data-lucide="arrow-right" class="w-5 h-5 ml-2"></i>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
</x-admin-layout>

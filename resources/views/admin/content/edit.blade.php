<x-admin-layout>
    <!-- Header -->
    <div class="mb-8 flex items-center justify-between">
        <div>
            <h1 class="text-3xl font-bold text-gray-900 font-display">Edit {{ $page }} Page</h1>
            <p class="text-sm text-gray-500 mt-2">Manage all the text, images, and videos for the {{ $page }} page in one place.</p>
        </div>
        <a href="{{ route('admin.content.index') }}" class="text-sm font-semibold text-green-600 bg-green-50 px-4 py-2 rounded-lg hover:bg-green-100 flex items-center gap-2 transition-colors">
            <i data-lucide="arrow-left" class="w-4 h-4"></i> Back to Pages
        </a>
    </div>

    @if (session('status'))
        <div class="mb-8 p-4 bg-green-50 border border-green-200 rounded-xl flex items-center gap-3 text-green-700 shadow-sm">
            <i data-lucide="check-circle" class="w-5 h-5"></i>
            <span class="font-medium">{{ session('status') }}</span>
        </div>
    @endif

    <!-- WordPress-Style Page Editor Form -->
    <form action="{{ route('admin.content.update', $page) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="space-y-10 mb-24">
            @foreach($groupedContents as $sectionName => $contents)
                <!-- Section Block -->
                <div class="bg-white rounded-2xl shadow-sm border border-gray-200 overflow-hidden transition-shadow hover:shadow-md">
                    <!-- Section Header -->
                    <div class="bg-gray-50/50 px-8 py-5 border-b border-gray-200 flex items-center justify-between gap-3">
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 rounded-lg bg-green-100 text-green-600 flex items-center justify-center">
                                <i data-lucide="layers" class="w-4 h-4"></i>
                            </div>
                            <h2 class="text-xl font-bold text-gray-900">{{ $sectionName }} Section</h2>
                        </div>
                        <p class="text-xs text-gray-500 max-w-sm text-right"><i data-lucide="info" class="w-3 h-3 inline"></i> <b>Note:</b> If this section supports both Image & Video, uploading one will automatically remove the other to keep the design clean.</p>
                    </div>

                    <!-- Section Content -->
                    <div class="p-8 space-y-6">
                        @foreach($contents as $content)
                            <div class="pb-6 border-b border-gray-100 last:border-0 last:pb-0">
                                
                                @if($content->type === 'image' || $content->type === 'video')
                                    <!-- Table-Row Style Media Preview -->
                                    <div class="flex flex-row items-center justify-between p-4 bg-white border border-gray-200 rounded-xl shadow-sm hover:border-gray-300 transition-colors gap-6">
                                        
                                        <!-- Thumbnail & Title -->
                                        <div class="flex items-center gap-5 w-5/12">
                                            <div class="w-32 h-20 bg-gray-100 rounded-lg overflow-hidden flex-shrink-0 border border-gray-200 relative shadow-inner">
                                                @if($content->content)
                                                    @if($content->type === 'video')
                                                        <video src="{{ asset($content->content) }}" class="w-full h-full object-cover" muted></video>
                                                        <div class="absolute top-1 right-1 bg-black/60 text-white text-[9px] font-bold px-1.5 py-0.5 rounded">VID</div>
                                                    @else
                                                        <img src="{{ asset($content->content) }}" class="w-full h-full object-cover" alt="Thumbnail">
                                                    @endif
                                                @else
                                                    <div class="w-full h-full flex items-center justify-center text-gray-400">
                                                        <i data-lucide="{{ $content->type === 'video' ? 'video' : 'image' }}" class="w-6 h-6 opacity-50"></i>
                                                    </div>
                                                @endif
                                            </div>
                                            <div>
                                                <h4 class="text-sm font-bold text-gray-900 tracking-wide">{{ str_replace('_', ' ', $content->key) }}</h4>
                                                <p class="text-[11px] text-gray-500 font-medium uppercase tracking-wider mt-1">{{ $content->type }} Asset</p>
                                            </div>
                                        </div>
                                        
                                        <!-- Source / Upload Input -->
                                        <div class="w-4/12 px-2">
                                            <input type="file" name="{{ $content->key }}" accept="{{ $content->type === 'video' ? 'video/mp4,video/webm' : 'image/*' }}" class="block w-full text-xs text-gray-500
                                                file:mr-3 file:py-2 file:px-4
                                                file:rounded-md file:border-0
                                                file:text-xs file:font-semibold
                                                file:bg-gray-50 file:text-gray-700
                                                hover:file:bg-gray-100 cursor-pointer transition-colors shadow-sm ring-1 ring-inset ring-gray-200
                                            "/>
                                        </div>

                                        <!-- Actions -->
                                        <div class="w-3/12 flex items-center justify-end">
                                            @if($content->content)
                                                <label class="flex items-center gap-2 px-3 py-2 text-red-600 bg-red-50 hover:bg-red-100 rounded-md cursor-pointer text-xs font-bold transition-colors shadow-sm">
                                                    <input type="checkbox" name="delete_{{ $content->key }}" value="1" class="w-4 h-4 rounded border-red-300 text-red-600 focus:ring-red-500">
                                                    <i data-lucide="trash-2" class="w-4 h-4"></i> Delete
                                                </label>
                                            @endif
                                        </div>
                                    </div>

                                @else
                                    <label class="block text-sm font-bold text-gray-700 mb-3 uppercase tracking-wide">
                                        {{ str_replace('_', ' ', $content->key) }}
                                    </label>
                                    <textarea name="{{ $content->key }}" rows="4" class="block w-full rounded-xl border-gray-300 shadow-sm focus:border-green-500 focus:ring-green-500 sm:text-sm p-5 transition-colors">{{ $content->content }}</textarea>
                                @endif
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Sticky Floating Save Bar -->
        <div class="fixed bottom-0 left-0 lg:left-64 right-0 bg-white border-t border-gray-200 p-4 px-8 flex justify-between items-center shadow-[0_-4px_6px_-1px_rgba(0,0,0,0.05)] z-50">
            <p class="text-sm text-gray-500 font-medium">Make sure to save your changes before leaving this page.</p>
            <button type="submit" class="inline-flex items-center gap-2 px-8 py-3 bg-green-600 border border-transparent rounded-xl font-bold text-white shadow-md hover:bg-green-700 hover:shadow-lg hover:-translate-y-0.5 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 transition-all">
                <i data-lucide="save" class="w-5 h-5"></i> Save Entire Page
            </button>
        </div>
    </form>
</x-admin-layout>

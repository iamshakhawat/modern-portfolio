@extends('layout.admin.admin')
@section('title', 'Add Experience')

@section('content')
    <div class="min-h-screen sm:px-2 lg:px-2 bg-gray-50 dark:bg-gray-900 transition-colors duration-200">
        <div class="max-w-2xl mx-auto">
            <div
                class="bg-white dark:bg-gray-800 shadow-xl rounded-2xl overflow-hidden border border-gray-100 dark:border-gray-700 mt-8">

                <div class="px-8 py-6 border-b border-gray-100 dark:border-gray-700 flex justify-between items-center">
                    <h2 class="text-2xl font-extrabold text-gray-900 dark:text-white">Add New Experience</h2>
                    <a href="{{ route('admin.experiences') }}"
                        class="bg-gray-200 hover:bg-gray-300 dark:bg-gray-700 dark:hover:bg-gray-600 text-gray-700 dark:text-gray-200 px-3 py-1 rounded-xl font-bold shadow transition-all duration-200 text-xs">
                        <i class="fa fa-arrow-left"></i> Back
                    </a>
                </div>

                <div class="px-8 py-6">
                    <form action="{{ route('admin.experiences.store') }}" method="POST">
                        @csrf

                        {{-- Position --}}
                        <div class="mb-5">
                            <label for="Title" class="block text-sm font-bold mb-2 text-gray-700 dark:text-gray-300">
                                Position Title <span class="text-red-500">*</span>
                            </label>
                            <input type="text" name="title" id="position" value="{{ old('title') }}"
                                class="w-full px-4 py-2 rounded-lg border border-gray-300 dark:border-gray-700
                                   bg-gray-50 dark:bg-gray-900 text-gray-900 dark:text-gray-100
                                   focus:outline-none focus:ring-2 focus:ring-indigo-500"
                                placeholder="Enter position title" required>
                            @error('title')
                                <span class="text-xs text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- Company --}}
                        <div class="mb-5">
                            <label for="company" class="block text-sm font-bold mb-2 text-gray-700 dark:text-gray-300">
                                Company <span class="text-red-500">*</span>
                            </label>
                            <input type="text" name="company" id="company" value="{{ old('company') }}"
                                class="w-full px-4 py-2 rounded-lg border border-gray-300 dark:border-gray-700
                                   bg-gray-50 dark:bg-gray-900 text-gray-900 dark:text-gray-100
                                   focus:outline-none focus:ring-2 focus:ring-indigo-500"
                                placeholder="Enter company name" required>
                            @error('company')
                                <span class="text-xs text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- Icon --}}
                        <div class="mb-5">
                            <label for="icon" class="block text-sm font-bold mb-2 text-gray-700 dark:text-gray-300">
                                Icon (Font Awesome class)
                            </label>
                            <div class="relative">
                                <span
                                    class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-500 dark:text-gray-400">
                                    <i id="iconPreview" class=""></i>
                                </span>
                                <input type="text" name="icon" id="iconInput" value="{{ old('icon') }}"
                                    placeholder="e.g. fas fa-briefcase"
                                    class="w-full pl-10 px-4 py-2 rounded-lg border border-gray-300 dark:border-gray-700
                   bg-gray-50 dark:bg-gray-900 text-gray-900 dark:text-gray-100
                   focus:outline-none focus:ring-2 focus:ring-indigo-500">
                            </div>
                            @error('icon')
                                <span class="text-xs text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- Duration --}}
                        <div class="mb-5">
                            <label for="duration" class="block text-sm font-bold mb-2 text-gray-700 dark:text-gray-300">
                                Duration <span class="text-red-500">*</span>
                            </label>
                            <input type="text" name="duration" id="duration" value="{{ old('duration') }}"
                                class="w-full px-4 py-2 rounded-lg border border-gray-300 dark:border-gray-700
                                   bg-gray-50 dark:bg-gray-900 text-gray-900 dark:text-gray-100
                                   focus:outline-none focus:ring-2 focus:ring-indigo-500"
                                placeholder="e.g. 2020 - 2023" required>
                            @error('duration')
                                <span class="text-xs text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        {{-- Description --}}
                        <div class="mb-6">
                            <label for="description" class="block text-sm font-bold mb-2 text-gray-700 dark:text-gray-300">
                                Description
                            </label>
                            <textarea name="description" id="description" rows="3"
                                class="w-full px-4 py-2 rounded-lg border border-gray-300 dark:border-gray-700
                                   bg-gray-50 dark:bg-gray-900 text-gray-900 dark:text-gray-100
                                   focus:outline-none focus:ring-2 focus:ring-indigo-500"
                                placeholder="Describe your responsibilities or achievements">{{ old('description') }}</textarea>
                            @error('description')
                                <span class="text-xs text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                        <button type="submit"
                            class="w-full bg-indigo-600 hover:bg-indigo-700 dark:bg-indigo-500 dark:hover:bg-indigo-600
                               text-white px-4 py-2 rounded-xl font-bold shadow transition-all duration-200">
                            Add Experience
                        </button>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
@push('js')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const iconInput = document.getElementById('iconInput');
        const iconPreview = document.getElementById('iconPreview');

        function updateIconPreview() {
            const iconClass = iconInput.value.trim();

            if (iconClass.length > 0) {
                iconPreview.className = iconClass;
            } else {
                iconPreview.className = '';
            }
        }

        // Live preview while typing
        iconInput.addEventListener('input', updateIconPreview);

        // Load preview on page reload (old value)
        updateIconPreview();
    });
</script>
@endpush
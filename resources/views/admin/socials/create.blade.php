@extends('layout.admin.admin')
@section('title', 'Add Social Link')

@section('content')
    <div class="min-h-screen sm:px-2 lg:px-2 bg-gray-50 dark:bg-gray-900 transition-colors duration-200">
        <div class="max-w-2xl mx-auto">
            <div
                class="bg-white dark:bg-gray-800 shadow-xl rounded-2xl overflow-hidden border border-gray-100 dark:border-gray-700 mt-8">

                {{-- Header --}}
                <div class="px-8 py-6 border-b border-gray-100 dark:border-gray-700 flex justify-between items-center">
                    <h2 class="text-2xl font-extrabold text-gray-900 dark:text-white">Add New Social Link</h2>
                    <a href="{{ route('admin.socials') }}"
                        class="bg-gray-200 hover:bg-gray-300 dark:bg-gray-700 dark:hover:bg-gray-600
                          text-gray-700 dark:text-gray-200 px-3 py-1 rounded-xl font-bold shadow text-xs">
                        <i class="fa fa-arrow-left"></i> Back
                    </a>
                </div>

                {{-- Form --}}
                <div class="px-8 py-6">
                    <form action="{{ route('admin.socials.store') }}" method="POST">
                        @csrf

                        {{-- Name --}}
                        <div class="mb-5">
                            <label class="block text-sm font-bold mb-2 text-gray-700 dark:text-gray-300">
                                Social Name <span class="text-red-500">*</span>
                            </label>
                            <input type="text" name="name" value="{{ old('name') }}"
                                class="w-full px-4 py-2 rounded-lg border border-gray-300 dark:border-gray-700
                                      bg-gray-50 dark:bg-gray-900 text-gray-900 dark:text-gray-100
                                      focus:ring-2 focus:ring-indigo-500"
                                required>
                            @error('name')
                                <span class="text-xs text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- URL --}}
                        <div class="mb-5">
                            <label class="block text-sm font-bold mb-2 text-gray-700 dark:text-gray-300">
                                URL <span class="text-red-500">*</span>
                            </label>
                            <input type="url" name="url" value="{{ old('url') }}"
                                class="w-full px-4 py-2 rounded-lg border border-gray-300 dark:border-gray-700
                                      bg-gray-50 dark:bg-gray-900 text-gray-900 dark:text-gray-100
                                      focus:ring-2 focus:ring-indigo-500"
                                required>
                            @error('url')
                                <span class="text-xs text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- Icon --}}
                        <div class="mb-5">
                            <label class="block text-sm font-bold mb-2 text-gray-700 dark:text-gray-300">
                                Icon (Font Awesome class)
                            </label>
                            <div class="relative">
                                <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-500">
                                    <i id="iconPreview"></i>
                                </span>
                                <input type="text" name="icon" id="iconInput" value="{{ old('icon') }}"
                                    placeholder="e.g. fab fa-facebook"
                                    class="w-full pl-10 px-4 py-2 rounded-lg border border-gray-300 dark:border-gray-700
                                          bg-gray-50 dark:bg-gray-900 text-gray-900 dark:text-gray-100
                                          focus:ring-2 focus:ring-indigo-500">
                            </div>
                            @error('icon')
                                <span class="text-xs text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- Color --}}
                        <div class="mb-5">
                            <label class="block text-sm font-bold mb-2 text-gray-700 dark:text-gray-300">
                                Color (HEX or name)
                            </label>
                            <div class="flex justify-between items-center">
                                <div class="mb-2">
                                    <span
                                        class="inline-block w-8 h-8 rounded-full border border-gray-200 dark:border-gray-600"
                                        id="colorPreview" style="background: {{ old('color', '#000000') }}"></span>
                                </div>
                                <input id="colorinput" type="color" name="color" value="{{ old('color', '#000000') }}"
                                    class="w-50 px-4 py-2 rounded-lg border border-gray-300 dark:border-gray-700
                                      bg-gray-50 dark:bg-gray-900 text-gray-900 dark:text-gray-100
                                      focus:ring-2 focus:ring-indigo-500">
                            </div>
                            @error('color')
                                <span class="text-xs text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- Status --}}
                        <div class="mb-5">
                            <label class="inline-flex items-center">
                                <input type="checkbox" name="status" value="1"
                                    {{ old('status', true) ? 'checked' : '' }}
                                    class="rounded border-gray-300 text-indigo-600 shadow-sm">
                                <span class="ml-2 text-sm text-gray-700 dark:text-gray-300">
                                    Active
                                </span>
                            </label>
                        </div>

                        <button type="submit"
                            class="w-full bg-indigo-600 hover:bg-indigo-700 dark:bg-indigo-500
                               text-white px-4 py-2 rounded-xl font-bold shadow">
                            Add Social Link
                        </button>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection

@push('js')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const iconInput = document.getElementById('iconInput');
            const iconPreview = document.getElementById('iconPreview');

            function updateIconPreview() {
                iconPreview.className = iconInput.value.trim();
            }

            iconInput.addEventListener('input', updateIconPreview);
            updateIconPreview();

            const colorInput = document.getElementById('colorinput');
            const spanPreview = document.getElementById('colorPreview');
            colorInput.addEventListener('input', function() {
                iconPreview.style.color = colorInput.value;
                spanPreview.style.background = colorInput.value;
            });
        });
    </script>
@endpush
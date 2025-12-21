@extends('layout.admin.admin')
@section('title', 'Edit Skill')

@push('css')
    <style>
        .switch {
            position: relative;
            display: inline-block;
            width: 44px;
            height: 22px;
        }
        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }
        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #cbd5e1;
            transition: .3s;
            border-radius: 34px;
        }
        .slider:before {
            position: absolute;
            content: "";
            height: 16px;
            width: 16px;
            left: 3px;
            bottom: 3px;
            background-color: white;
            transition: .3s;
            border-radius: 50%;
        }
        input:checked+.slider {
            background-color: #4f46e5;
        }
        input:checked+.slider:before {
            transform: translateX(22px);
        }
        .dark .slider {
            background-color: #334155;
        }
        .hidden-section {
            display: none !important;
        }
    </style>
@endpush

@section('content')
    <div class="min-h-screen px-2 sm:px-2 lg:px-2 bg-gray-50 dark:bg-gray-900 transition-colors duration-200">
        <div class="max-w-full mx-auto">
            <div class="bg-white dark:bg-gray-800 shadow-xl rounded-2xl overflow-hidden border border-gray-100 dark:border-gray-700">
                <!-- Header -->
                <div class="px-8 py-6 border-b border-gray-100 dark:border-gray-700 flex justify-between items-center">
                    <div>
                        <h2 class="text-2xl font-extrabold text-gray-900 dark:text-white">Edit Skill</h2>
                        <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Update a technical skill for your portfolio.</p>
                    </div>
                    <div class="bg-indigo-100 dark:bg-indigo-900/30 p-3 rounded-full">
                        <i class="fas fa-layer-group text-indigo-600 dark:text-indigo-400 text-xl"></i>
                    </div>
                </div>

                <div class="p-8">
                    <form action="{{ route('admin.skills.update', $skill->id) }}" method="POST" enctype="multipart/form-data" id="skillForm">
                        @csrf
                        @method('PUT')

                        <div class="space-y-8">
                            <!-- Name & Category Grid -->
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label for="name" class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2">Skill Name</label>
                                    <input type="text" name="name" id="name" required value="{{ old('name', $skill->name) }}"
                                        class="w-full px-4 py-2.5 bg-white dark:bg-gray-700 border @error('name') border-red-500 @else border-gray-300 dark:border-gray-600 @enderror rounded-xl text-gray-900 dark:text-white focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition"
                                        placeholder="e.g. Laravel">
                                    @error('name')
                                        <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div>
                                    <label for="category" class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2">Category</label>
                                    <select name="category" id="category" required
                                        class="w-full px-4 py-2.5 bg-white dark:bg-gray-700 border @error('category') border-red-500 @else border-gray-300 dark:border-gray-600 @enderror rounded-xl text-gray-900 dark:text-white focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition">
                                        <option value="frontend" {{ old('category', $skill->category) == 'frontend' ? 'selected' : '' }}>Frontend Development</option>
                                        <option value="backend" {{ old('category', $skill->category) == 'backend' ? 'selected' : '' }}>Backend Development</option>
                                        <option value="programming" {{ old('category', $skill->category) == 'programming' ? 'selected' : '' }}>Programming Languages</option>
                                        <option value="tools" {{ old('category', $skill->category) == 'tools' ? 'selected' : '' }}>DevOps & Tools</option>
                                    </select>
                                    @error('category')
                                        <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <!-- Asset Type Toggle -->
                            <div class="bg-gray-50 dark:bg-gray-700/50 p-5 rounded-2xl border border-gray-200 dark:border-gray-600">
                                <!-- Icon Input Group (Visible by default) -->
                                <div id="iconSection" class="grid grid-cols-1 md:grid-cols-2 gap-6 transition-all duration-300">
                                    <div>
                                        <label class="block text-sm font-medium text-gray-600 dark:text-gray-400 mb-2">FontAwesome Class</label>
                                        <div class="relative group">
                                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                                <i id="iconPreview"
                                                    class="{{ old('icon', $skill->icon ?? 'fa-solid fa-circle-question') }} text-indigo-500 text-lg"
                                                    style="color: {{ old('color', $skill->color ?? '#4F46E5') }}"></i>
                                            </div>
                                            <input type="text" name="icon" id="iconInput" value="{{ old('icon', $skill->icon) }}"
                                                class="w-full pl-12 pr-4 py-2.5 bg-white dark:bg-gray-800 border @error('icon') border-red-500 @else border-gray-300 dark:border-gray-600 @enderror rounded-xl text-gray-900 dark:text-white focus:ring-2 focus:ring-indigo-500 transition"
                                                placeholder="fa-brands fa-laravel">
                                        </div>
                                        @error('icon')
                                            <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                                        @enderror
                                        <p class="text-[10px] text-gray-500 mt-2 italic px-1">Example: fa-brands fa-php, fa-solid fa-database</p>
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-600 dark:text-gray-400 mb-2">Brand Color</label>
                                        <div class="flex items-center space-x-3">
                                            <input type="color" name="color" id="colorInput"
                                                value="{{ old('color', $skill->color ?? '#4F46E5') }}"
                                                class="h-11 w-20 p-1 bg-white dark:bg-gray-800 border @error('color') border-red-500 @else border-gray-300 dark:border-gray-600 @enderror rounded-xl cursor-pointer">
                                            <span id="colorHex"
                                                class="text-sm font-mono text-gray-500">{{ strtoupper(old('color', $skill->color ?? '#4F46E5')) }}</span>
                                        </div>
                                        @error('color')
                                            <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <!-- Visibility Status -->
                            <div class="flex items-center justify-between py-4 px-2">
                                <div>
                                    <h4 class="text-sm font-bold text-gray-900 dark:text-white">Visibility</h4>
                                    <p class="text-xs text-gray-500 dark:text-gray-400">Determine if this skill is visible on your public profile.</p>
                                </div>
                                <div class="flex items-center space-x-4">
                                    <span id="statusText"
                                        class="text-xs font-black uppercase tracking-tighter {{ old('status', $skill->status) ? 'text-green-600 dark:text-green-400' : 'text-red-500 dark:text-red-400' }}">
                                        {{ old('status', $skill->status) ? 'Active' : 'Inactive' }}
                                    </span>
                                    <label class="switch">
                                        <input type="checkbox" id="statusToggle" name="status"
                                            {{ old('status', $skill->status) ? 'checked' : '' }}>
                                        <span class="slider"></span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <!-- Actions -->
                        <div class="mt-10 flex flex-col sm:flex-row gap-3">
                            <button type="submit"
                                class="flex-1 bg-indigo-600 hover:bg-indigo-700 dark:bg-indigo-500 dark:hover:bg-indigo-600 text-white px-8 py-3 rounded-xl font-bold shadow-lg shadow-indigo-200 dark:shadow-none transition-all duration-200 transform active:scale-95">
                                Update Skill
                            </button>
                            <a href="{{ route('admin.skills') }}"
                                class="px-8 py-3 rounded-xl font-bold text-gray-600 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 transition text-center">
                                Cancel
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @push('js')
        <script>
            document.addEventListener('DOMContentLoaded', () => {
                const statusToggle = document.getElementById('statusToggle');
                const iconInput = document.getElementById('iconInput');
                const colorInput = document.getElementById('colorInput');

                const iconPreview = document.getElementById('iconPreview');
                const statusText = document.getElementById('statusText');
                const colorHex = document.getElementById('colorHex');

                // Real-time Icon Preview
                iconInput.addEventListener('input', (e) => {
                    const val = e.target.value.trim();
                    iconPreview.className = val ? val : 'fa-solid fa-circle-question';
                    if (!val.includes('text-')) {
                        iconPreview.classList.add('text-indigo-500');
                    }
                });

                // Color Preview
                colorInput.addEventListener('input', (e) => {
                    colorHex.textContent = e.target.value.toUpperCase();
                    iconPreview.style.color = e.target.value;
                });

                // Status Text Toggle
                statusToggle.addEventListener('change', (e) => {
                    if (e.target.checked) {
                        statusText.textContent = 'Active';
                        statusText.classList.replace('text-red-500', 'text-green-600');
                        statusText.classList.replace('dark:text-red-400', 'dark:text-green-400');
                    } else {
                        statusText.textContent = 'Inactive';
                        statusText.classList.replace('text-green-600', 'text-red-500');
                        statusText.classList.replace('dark:text-green-400', 'dark:text-red-400');
                    }
                });
            });
        </script>
    @endpush
@endsection

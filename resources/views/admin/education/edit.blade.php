@extends('layout.admin.admin')
@section('title', 'Edit Education')

@section('content')
    <div class="min-h-screen sm:px-2 lg:px-2 bg-gray-50 dark:bg-gray-900 transition-colors duration-200">
        <div class="max-w-2xl mx-auto">
            <div
                class="bg-white dark:bg-gray-800 shadow-xl rounded-2xl overflow-hidden border border-gray-100 dark:border-gray-700 mt-8">

                <div class="px-8 py-6 border-b border-gray-100 dark:border-gray-700 flex justify-between items-center">
                    <h2 class="text-2xl font-extrabold text-gray-900 dark:text-white">Edit Education</h2>
                    <a href="{{ route('admin.educations') }}"
                        class="bg-gray-200 hover:bg-gray-300 dark:bg-gray-700 dark:hover:bg-gray-600 text-gray-700 dark:text-gray-200 px-3 py-1 rounded-xl font-bold shadow transition-all duration-200 text-xs">
                        <i class="fa fa-arrow-left"></i> Back
                    </a>
                </div>

                <div class="px-8 py-6">
                    <form action="{{ route('admin.educations.update', $education->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        {{-- Degree --}}
                        <div class="mb-5">
                            <label for="degree" class="block text-sm font-bold mb-2 text-gray-700 dark:text-gray-300">
                                Degree <span class="text-red-500">*</span>
                            </label>
                            <input type="text" name="degree" id="degree" value="{{ old('degree', $education->degree) }}"
                                class="w-full px-4 py-2 rounded-lg border border-gray-300 dark:border-gray-700
                                   bg-gray-50 dark:bg-gray-900 text-gray-900 dark:text-gray-100
                                   focus:outline-none focus:ring-2 focus:ring-indigo-500"
                                placeholder="Enter degree name" required>
                            @error('degree')
                                <span class="text-xs text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- Institution --}}
                        <div class="mb-5">
                            <label for="institution" class="block text-sm font-bold mb-2 text-gray-700 dark:text-gray-300">
                                Institution <span class="text-red-500">*</span>
                            </label>
                            <input type="text" name="institution" id="institution" value="{{ old('institution', $education->institution) }}"
                                class="w-full px-4 py-2 rounded-lg border border-gray-300 dark:border-gray-700
                                   bg-gray-50 dark:bg-gray-900 text-gray-900 dark:text-gray-100
                                   focus:outline-none focus:ring-2 focus:ring-indigo-500"
                                placeholder="Enter institution name" required>
                            @error('institution')
                                <span class="text-xs text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- Icon --}}
                        <div class="mb-5">
                            <label for="icon" class="block text-sm font-bold mb-2 text-gray-700 dark:text-gray-300">
                                Icon (Font Awesome class)
                            </label>

                            <div class="relative">
                                {{-- Icon Preview --}}
                                <span
                                    class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-500 dark:text-gray-400">
                                    <i id="iconPreview" class="{{ old('icon', $education->icon) }}"></i>
                                </span>

                                {{-- Input --}}
                                <input type="text" name="icon" id="iconInput" value="{{ old('icon', $education->icon) }}"
                                    placeholder="e.g. fab fa-google"
                                    class="w-full pl-10 px-4 py-2 rounded-lg border border-gray-300 dark:border-gray-700
                   bg-gray-50 dark:bg-gray-900 text-gray-900 dark:text-gray-100
                   focus:outline-none focus:ring-2 focus:ring-indigo-500">
                            </div>

                            @error('icon')
                                <span class="text-xs text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- Years --}}
                        <div class="mb-5">
                            <label for="years" class="block text-sm font-bold mb-2 text-gray-700 dark:text-gray-300">
                                Years <span class="text-red-500">*</span>
                            </label>
                            <input type="text" name="years" id="years" value="{{ old('years', $education->years) }}"
                                class="w-full px-4 py-2 rounded-lg border border-gray-300 dark:border-gray-700
                                   bg-gray-50 dark:bg-gray-900 text-gray-900 dark:text-gray-100
                                   focus:outline-none focus:ring-2 focus:ring-indigo-500"
                                placeholder="e.g. 2019 - 2023" required>
                            @error('years')
                                <span class="text-xs text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- Status --}}
                        <div class="mb-6">
                            <label for="status" class="block text-sm font-bold mb-2 text-gray-700 dark:text-gray-300">
                                Status
                            </label>
                            <select name="status" id="status"
                                class="w-full px-4 py-2 rounded-lg border border-gray-300 dark:border-gray-700
                                   bg-gray-50 dark:bg-gray-900 text-gray-900 dark:text-gray-100
                                   focus:outline-none focus:ring-2 focus:ring-indigo-500">
                                <option value="Passed" {{ old('status', $education->status) == 'Passed' ? 'selected' : '' }}>
                                    Passed
                                </option>
                                <option value="Running" {{ old('status', $education->status) == 'Running' ? 'selected' : '' }}>
                                    Running
                                </option>
                            </select>
                            @error('status')
                                <span class="text-xs text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                        <button type="submit"
                            class="w-full bg-indigo-600 hover:bg-indigo-700 dark:bg-indigo-500 dark:hover:bg-indigo-600
                               text-white px-4 py-2 rounded-xl font-bold shadow transition-all duration-200">
                            Update Education
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
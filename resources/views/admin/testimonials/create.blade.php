@extends('layout.admin.admin')
@section('title', 'Add Testimonial')
@section('content')

<div class="min-h-screen sm:px-2 lg:px-2 bg-gray-50 dark:bg-gray-900 transition-colors duration-200">
    <div class="max-w-2xl mx-auto">
        <div class="bg-white dark:bg-gray-800 shadow-xl rounded-2xl overflow-hidden border border-gray-100 dark:border-gray-700">
            <div class="px-8 py-6 border-b border-gray-100 dark:border-gray-700 flex justify-between items-center">
                <h2 class="text-2xl font-extrabold text-gray-900 dark:text-white">Add Testimonial</h2>
                <a href="{{ route('admin.testimonials') }}"
                    class="bg-indigo-600 hover:bg-indigo-700 dark:bg-indigo-500 dark:hover:bg-indigo-600 text-white px-2 text-xs py-2 rounded-xl font-bold shadow transition-all duration-200">
                    <i class="fa fa-arrow-left"></i> Back
                </a>
            </div>
            <form action="{{ route('admin.testimonials.store') }}" method="POST" enctype="multipart/form-data" class="px-8 py-6">
                @csrf
                <div class="mb-5">
                    <label for="name" class="block text-sm font-bold text-gray-700 dark:text-gray-300 mb-2">Name</label>
                    <input type="text" name="name" id="name" value="{{ old('name') }}"
                        class="w-full px-4 py-2 border border-gray-300 dark:border-gray-700 rounded-lg bg-gray-50 dark:bg-gray-900 text-gray-900 dark:text-gray-100 focus:outline-none focus:ring-2 focus:ring-indigo-500"
                        required>
                    @error('name')
                        <span class="text-red-500 text-xs">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="position" class="block text-sm font-bold text-gray-700 dark:text-gray-300 mb-2">Position</label>
                    <input type="text" name="position" id="position" value="{{ old('position') }}"
                        class="w-full px-4 py-2 border border-gray-300 dark:border-gray-700 rounded-lg bg-gray-50 dark:bg-gray-900 text-gray-900 dark:text-gray-100 focus:outline-none focus:ring-2 focus:ring-indigo-500"
                        required>
                    @error('position')
                        <span class="text-red-500 text-xs">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="message" class="block text-sm font-bold text-gray-700 dark:text-gray-300 mb-2">Message</label>
                    <textarea name="message" id="message" rows="4"
                        class="w-full px-4 py-2 border border-gray-300 dark:border-gray-700 rounded-lg bg-gray-50 dark:bg-gray-900 text-gray-900 dark:text-gray-100 focus:outline-none focus:ring-2 focus:ring-indigo-500"
                        required>{{ old('message') }}</textarea>
                    @error('message')
                        <span class="text-red-500 text-xs">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="photo" class="block text-sm font-bold text-gray-700 dark:text-gray-300 mb-2">Photo</label>
                    <input type="file" name="photo" id="photo"
                        class="w-full px-4 py-2 border border-gray-300 dark:border-gray-700 rounded-lg bg-gray-50 dark:bg-gray-900 text-gray-900 dark:text-gray-100 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    @error('photo')
                        <span class="text-red-500 text-xs">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="status" class="block text-sm font-bold text-gray-700 dark:text-gray-300 mb-2">Status</label>
                    <select name="status" id="status"
                        class="w-full px-4 py-2 border border-gray-300 dark:border-gray-700 rounded-lg bg-gray-50 dark:bg-gray-900 text-gray-900 dark:text-gray-100 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                        <option value="1" {{ old('status', 1) == 1 ? 'selected' : '' }}>Active</option>
                        <option value="0" {{ old('status') == 0 ? 'selected' : '' }}>Inactive</option>
                    </select>
                    @error('status')
                        <span class="text-red-500 text-xs">{{ $message }}</span>
                    @enderror
                </div>
                <div class="flex justify-end">
                    <button type="submit"
                        class="bg-indigo-600 hover:bg-indigo-700 dark:bg-indigo-500 dark:hover:bg-indigo-600 text-white px-6 py-2 rounded-xl font-bold shadow transition-all duration-200">
                        <i class="fa fa-save mr-1"></i> Save
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
@extends('layout.admin.admin')
@section('title', 'Create Category')
@section('content')

<div class="min-h-screen sm:px-2 lg:px-2 bg-gray-50 dark:bg-gray-900 transition-colors duration-200">
    <div class="max-w-xl mx-auto py-10">
        <div class="bg-white dark:bg-gray-800 shadow-xl rounded-2xl overflow-hidden border border-gray-100 dark:border-gray-700">
            <div class="px-8 py-6 border-b border-gray-100 dark:border-gray-700 flex justify-between items-center">
                <h2 class="text-2xl font-extrabold text-gray-900 dark:text-white">Create Category</h2>
                <a href="{{ route('admin.category') }}"
                   class="bg-indigo-600 hover:bg-indigo-700 dark:bg-indigo-500 dark:hover:bg-indigo-600 text-white px-3 py-2 rounded-xl font-bold shadow transition-all duration-200 text-xs">
                    <i class="fa fa-arrow-left"></i> Back
                </a>
            </div>
            <form action="{{ route('admin.category.store') }}" method="POST" class="px-8 py-6">
                @csrf
                <div class="mb-5">
                    <label for="name" class="block text-sm font-bold mb-2 text-gray-700 dark:text-gray-300">Category Name <span class="text-red-500">*</span></label>
                    <input type="text" name="name" id="name" value="{{ old('name') }}"
                        class="w-full px-4 py-2 rounded-lg border border-gray-300 dark:border-gray-700 bg-gray-50 dark:bg-gray-900 text-gray-900 dark:text-gray-100 focus:outline-none focus:ring-2 focus:ring-indigo-500"
                        placeholder="Enter unique category name" required>
                    @error('name')
                        <span class="text-xs text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="status" class="block text-sm font-bold mb-2 text-gray-700 dark:text-gray-300">Status</label>
                    <select name="status" id="status"
                        class="w-full px-4 py-2 rounded-lg border border-gray-300 dark:border-gray-700 bg-gray-50 dark:bg-gray-900 text-gray-900 dark:text-gray-100 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                        <option value="1" {{ old('status', 1) == 1 ? 'selected' : '' }}>Active</option>
                        <option value="0" {{ old('status') == '0' ? 'selected' : '' }}>Inactive</option>
                    </select>
                    @error('status')
                        <span class="text-xs text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div class="flex justify-end">
                    <button type="submit"
                        class="bg-indigo-600 hover:bg-indigo-700 dark:bg-indigo-500 dark:hover:bg-indigo-600 text-white px-6 py-2 rounded-xl font-bold shadow transition-all duration-200">
                        <i class="fa fa-save mr-1"></i> Save Category
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
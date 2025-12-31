@extends('layout.admin.admin')
@section('title', 'Edit Brand')

@section('content')
    <div class="min-h-screen sm:px-2 lg:px-2 bg-gray-50 dark:bg-gray-900 transition-colors duration-200">
        <div class="max-w-2xl mx-auto">
            <div
                class="bg-white dark:bg-gray-800 shadow-xl rounded-2xl overflow-hidden border border-gray-100 dark:border-gray-700 mt-8">

                {{-- Header --}}
                <div class="px-8 py-6 border-b border-gray-100 dark:border-gray-700 flex justify-between items-center">
                    <h2 class="text-2xl font-extrabold text-gray-900 dark:text-white">Edit Brand</h2>
                    <a href="{{ route('admin.brands') }}"
                        class="bg-gray-200 hover:bg-gray-300 dark:bg-gray-700 dark:hover:bg-gray-600
                          text-gray-700 dark:text-gray-200 px-3 py-1 rounded-xl font-bold shadow text-xs">
                        <i class="fa fa-arrow-left"></i> Back
                    </a>
                </div>

                {{-- Form --}}
                <div class="px-8 py-6">
                    <form action="{{ route('admin.brands.update', $brand->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        {{-- Name --}}
                        <div class="mb-5">
                            <label class="block text-sm font-bold mb-2 text-gray-700 dark:text-gray-300">
                                Brand Name <span class="text-red-500">*</span>
                            </label>
                            <input type="text" name="name" value="{{ old('name', $brand->name) }}"
                                class="w-full px-4 py-2 rounded-lg border border-gray-300 dark:border-gray-700
                                      bg-gray-50 dark:bg-gray-900 text-gray-900 dark:text-gray-100
                                      focus:ring-2 focus:ring-indigo-500"
                                required>
                            @error('name')
                                <span class="text-xs text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- Logo --}}
                        <div class="mb-5">
                            <label class="block text-sm font-bold mb-2 text-gray-700 dark:text-gray-300">
                                Brand Logo
                            </label>
                            @if($brand->logo)
                                <div class="mb-2">
                                    <img src="{{ asset('storage/'.$brand->logo) }}" alt="Brand Logo" class="h-16">
                                </div>
                            @endif
                            <input type="file" name="logo" accept="image/*"
                                class="w-full px-4 py-2 rounded-lg border border-gray-300 dark:border-gray-700
                                      bg-gray-50 dark:bg-gray-900 text-gray-900 dark:text-gray-100
                                      focus:ring-2 focus:ring-indigo-500">
                            @error('logo')
                                <span class="text-xs text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- Status --}}
                        <div class="mb-6">
                            <label class="inline-flex items-center">
                                <input type="checkbox" name="status" value="1"
                                    {{ old('status', $brand->status) ? 'checked' : '' }}
                                    class="rounded border-gray-300 text-indigo-600 shadow-sm">
                                <span class="ml-2 text-sm text-gray-700 dark:text-gray-300">
                                    Active
                                </span>
                            </label>
                        </div>

                        <button type="submit"
                            class="w-full bg-indigo-600 hover:bg-indigo-700 dark:bg-indigo-500
                               text-white px-4 py-2 rounded-xl font-bold shadow">
                            Update Brand
                        </button>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
@extends('layout.admin.admin')
@section('title', 'Edit Certification')

@section('content')
    <div class="min-h-screen sm:px-2 lg:px-2 bg-gray-50 dark:bg-gray-900 transition-colors duration-200">
        <div class="max-w-2xl mx-auto">
            <div
                class="bg-white dark:bg-gray-800 shadow-xl rounded-2xl overflow-hidden border border-gray-100 dark:border-gray-700 mt-8">

                {{-- Header --}}
                <div class="px-8 py-6 border-b border-gray-100 dark:border-gray-700 flex justify-between items-center">
                    <h2 class="text-2xl font-extrabold text-gray-900 dark:text-white">Edit Certification</h2>
                    <a href="{{ route('admin.certifications') }}"
                        class="bg-gray-200 hover:bg-gray-300 dark:bg-gray-700 dark:hover:bg-gray-600
                          text-gray-700 dark:text-gray-200 px-3 py-1 rounded-xl font-bold shadow text-xs">
                        <i class="fa fa-arrow-left"></i> Back
                    </a>
                </div>

                {{-- Form --}}
                <div class="px-8 py-6">
                    <form action="{{ route('admin.certifications.update', $certification->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        {{-- Name --}}
                        <div class="mb-5">
                            <label class="block text-sm font-bold mb-2 text-gray-700 dark:text-gray-300">
                                Certification Name <span class="text-red-500">*</span>
                            </label>
                            <input type="text" name="name" value="{{ old('name', $certification->name) }}"
                                class="w-full px-4 py-2 rounded-lg border border-gray-300 dark:border-gray-700
                                      bg-gray-50 dark:bg-gray-900 text-gray-900 dark:text-gray-100
                                      focus:ring-2 focus:ring-indigo-500"
                                required>
                            @error('name')
                                <span class="text-xs text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- Institution --}}
                        <div class="mb-5">
                            <label class="block text-sm font-bold mb-2 text-gray-700 dark:text-gray-300">
                                Institution <span class="text-red-500">*</span>
                            </label>
                            <input type="text" name="institution"
                                value="{{ old('institution', $certification->institution) }}"
                                class="w-full px-4 py-2 rounded-lg border border-gray-300 dark:border-gray-700
                                      bg-gray-50 dark:bg-gray-900 text-gray-900 dark:text-gray-100
                                      focus:ring-2 focus:ring-indigo-500"
                                required>
                            @error('institution')
                                <span class="text-xs text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- Date Obtained --}}
                        <div class="mb-5">
                            <label class="block text-sm font-bold mb-2 text-gray-700 dark:text-gray-300">
                                Date Obtained <span class="text-red-500">*</span>
                            </label>
                            <input type="date" name="date_obtained"
                                value="{{ old('date_obtained', $certification->date_obtained) }}"
                                class="w-full px-4 py-2 rounded-lg border border-gray-300 dark:border-gray-700
                                      bg-gray-50 dark:bg-gray-900 text-gray-900 dark:text-gray-100
                                      focus:ring-2 focus:ring-indigo-500"
                                required>
                            @error('date_obtained')
                                <span class="text-xs text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- Score --}}
                        <div class="mb-5">
                            <label class="block text-sm font-bold mb-2 text-gray-700 dark:text-gray-300">
                                Score
                            </label>
                            <input type="text" name="score" value="{{ old('score', $certification->score) }}"
                                class="w-full px-4 py-2 rounded-lg border border-gray-300 dark:border-gray-700
                                      bg-gray-50 dark:bg-gray-900 text-gray-900 dark:text-gray-100
                                      focus:ring-2 focus:ring-indigo-500">
                            @error('score')
                                <span class="text-xs text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- Certificate File --}}
                        <div class="mb-5">
                            <label class="block text-sm font-bold mb-2 text-gray-700 dark:text-gray-300">
                                Certificate File
                            </label>
                            <input type="file" name="certificate_path" accept=".pdf,image/*"
                                class="w-full px-4 py-2 rounded-lg border border-gray-300 dark:border-gray-700
                                      bg-gray-50 dark:bg-gray-900 text-gray-900 dark:text-gray-100
                                      focus:ring-2 focus:ring-indigo-500">
                            @if ($certification->certificate_path)
                                <div class="mt-2">
                                    <a href="{{ asset('storage/' . $certification->certificate_path) }}" target="_blank"
                                        class="text-indigo-600 underline text-xs">
                                        View current file
                                    </a>
                                    <img src="{{ asset('storage/' . $certification->certificate_path) }}" alt="Certificate Image" class="mt-2 h-20">
                                </div>
                            @endif
                            @error('certificate_path')
                                <span class="text-xs text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="flex justify-between items-center">
                            {{-- Status --}}
                            <div class="mb-6">
                                <label class="inline-flex items-center">
                                    <input type="checkbox" name="status" value="1"
                                        {{ old('status', $certification->status) ? 'checked' : '' }}
                                        class="rounded border-gray-300 text-indigo-600 shadow-sm">
                                    <span class="ml-2 text-sm text-gray-700 dark:text-gray-300">
                                        Active
                                    </span>
                                </label>
                            </div>

                            {{-- Featured --}}
                            <div class="mb-6">
                                <label class="inline-flex items-center">
                                    <input type="checkbox" name="featured" value="1"
                                        {{ old('featured', $certification->featured) ? 'checked' : '' }}
                                        class="rounded border-gray-300 text-indigo-600 shadow-sm">
                                    <span class="ml-2 text-sm text-gray-700 dark:text-gray-300">
                                        Featured
                                    </span>
                                </label>
                            </div>
                        </div>
                        <button type="submit"
                            class="w-full bg-indigo-600 hover:bg-indigo-700 dark:bg-indigo-500
                               text-white px-4 py-2 rounded-xl font-bold shadow">
                            Update Certification
                        </button>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection

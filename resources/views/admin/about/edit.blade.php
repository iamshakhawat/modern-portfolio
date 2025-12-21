@extends('layout.admin.admin')
@section('title', 'Edit About - Admin Dashboard')
@section('content')

    <div class="max-w mx-auto mt-10">
        <div class="bg-white shadow-gray-700 dark:bg-gray-800 shadow-sm rounded-lg p-8 flex flex-col items-center">
            <h1 class="text-3xl font-extrabold mb-6 text-blue-700 dark:text-blue-300">Edit About Me</h1>
            <form action="{{ route('admin.about.update') }}" method="POST" enctype="multipart/form-data" class="w-full max-w">
                @csrf
                @method('POST')

                <div class="mb-4 flex flex-col items-center">
                    <!-- Image Preview Container -->
                    <div class="relative">
                        @if (!empty($about->image))
                            <img id="image-preview" src="{{ asset('storage/' . $about->image) }}" alt="About Image"
                                class="w-48 h-48 object-cover rounded-xl shadow-md mb-2 border-2 border-blue-100 dark:border-gray-700">
                        @else
                            <img id="image-preview"
                                src="https://ui-avatars.com/api/?name=About&background=0D8ABC&color=fff&size=128"
                                alt="Dummy Image"
                                class="w-48 h-48 object-cover rounded-xl shadow-md mb-2 border-2 border-blue-100 dark:border-gray-700">
                        @endif
                    </div>

                    <label class="block mt-2">
                        <span class="sr-only">Choose profile photo</span>
                        <input type="file" name="image" id="image-input" accept="image/*"
                            class="block w-full text-sm text-gray-500 
                    file:mr-4 file:py-2 file:px-4 
                    file:rounded-full file:border-0 
                    file:text-sm file:font-semibold 
                    file:bg-blue-50 file:text-blue-700 
                    hover:file:bg-blue-100 transition-all cursor-pointer" />
                    </label>

                    @error('image')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="title" class="block text-gray-700 dark:text-gray-200 font-bold mb-2">Title</label>
                    <input type="text" name="title" id="title" value="{{ old('title', $about->title) }}"
                        class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:text-white"
                        required>
                    @error('title')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="description"
                        class="block text-gray-700 dark:text-gray-200 font-bold mb-2">Description</label>
                    <textarea name="description" id="description" rows="10"
                        class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:text-white"
                        required>{{ old('description', $about->description) }}</textarea>
                    @error('description')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex justify-end mb-4">
                    <a href="{{ route('admin.about') }}"
                        class="mr-4 bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold py-2 px-4 rounded-lg transition-colors duration-200">
                        Cancel
                    </a>
                    <button type="submit"
                        class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-lg transition-colors duration-200">
                        Update
                    </button>
                </div>
            </form>
        </div>


    </div>

    @push('js')
        <script>
            document.getElementById('image-input').addEventListener('change', function(event) {
                const preview = document.getElementById('image-preview');
                const file = event.target.files[0];

                if (file) {
                    const reader = new FileReader();

                    reader.onload = function(e) {
                        preview.src = e.target.result;
                    }

                    reader.readAsDataURL(file);
                }
            });
        </script>
    @endpush

@endsection

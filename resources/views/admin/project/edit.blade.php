@extends('layout.admin.admin')
@section('title', 'Edit Project')
@section('content')

    <div class=" sm:px-2 lg:px-2 bg-gray-50 dark:bg-gray-900 transition-colors duration-200">
        <div class="max-w-xl mx-auto py-10">
            <div
                class="bg-white dark:bg-gray-800 shadow-xl rounded-2xl overflow-hidden border border-gray-100 dark:border-gray-700">
                <div class="px-8 py-6 border-b border-gray-100 dark:border-gray-700 flex justify-between items-center">
                    <h2 class="text-2xl font-extrabold text-gray-900 dark:text-white">Edit Project</h2>
                    <a href="{{ route('admin.projects') }}"
                        class="bg-indigo-600 hover:bg-indigo-700 dark:bg-indigo-500 dark:hover:bg-indigo-600 text-white px-3 py-2 rounded-xl font-bold shadow transition-all duration-200 text-xs">
                        <i class="fa fa-arrow-left"></i> Back
                    </a>
                </div>
                <form action="{{ route('admin.projects.update', $project->id) }}" method="POST" class="px-8 py-6"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-5">
                        <label for="title" class="block text-sm font-bold mb-2 text-gray-700 dark:text-gray-300">Title
                            <span class="text-red-500">*</span></label>
                        <input type="text" name="title" id="title" value="{{ old('title', $project->title) }}"
                            class="w-full px-4 py-2 rounded-lg border border-gray-300 dark:border-gray-700 bg-gray-50 dark:bg-gray-900 text-gray-900 dark:text-gray-100 focus:outline-none focus:ring-2 focus:ring-indigo-500"
                            placeholder="Enter project title" required>
                        @error('title')
                            <span class="text-xs text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    
                    <div class="mb-5">
                        <label for="short_description"
                            class="block text-sm font-bold mb-2 text-gray-700 dark:text-gray-300">Short Description <span
                                class="text-red-500">*</span></label>
                        <textarea name="short_description" id="short_description" rows="4"
                            class="w-full px-4 py-2 rounded-lg border border-gray-300 dark:border-gray-700 bg-gray-50 dark:bg-gray-900 text-gray-900 dark:text-gray-100 focus:outline-none focus:ring-2 focus:ring-indigo-500"
                            placeholder="Enter project short description" >{{ old('short_description', $project->short_description) }}</textarea>
                        @error('short_description')
                            <span class="text-xs text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-5">
                        <label for="description"
                            class="block text-sm font-bold mb-2 text-gray-700 dark:text-gray-300">Description <span
                                class="text-red-500">*</span></label>
                        <textarea name="description" id="description" rows="4"
                            class="w-full px-4 py-2 rounded-lg border border-gray-300 dark:border-gray-700 bg-gray-50 dark:bg-gray-900 text-gray-900 dark:text-gray-100 focus:outline-none focus:ring-2 focus:ring-indigo-500"
                            placeholder="Enter project description" required>{{ old('description', $project->description) }}</textarea>
                        @error('description')
                            <span class="text-xs text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-5">
                        <label for="date" class="block text-sm font-bold mb-2 text-gray-700 dark:text-gray-300">Date
                            <span class="text-red-500">*</span></label>
                        <input type="date" name="date" id="date"
                            value="{{ old('date', $project->date ? \Illuminate\Support\Carbon::parse($project->date)->format('Y-m-d') : '') }}"
                            class="w-full px-4 py-2 rounded-lg border border-gray-300 dark:border-gray-700 bg-gray-50 dark:bg-gray-900 text-gray-900 dark:text-gray-100 focus:outline-none focus:ring-2 focus:ring-indigo-500"
                            required>
                        @error('date')
                            <span class="text-xs text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-5">
                        <label for="client" class="block text-sm font-bold mb-2 text-gray-700 dark:text-gray-300">Client
                            <span class="text-red-500">*</span></label>
                        <input type="text" name="client" id="client" value="{{ old('client', $project->client) }}"
                            class="w-full px-4 py-2 rounded-lg border border-gray-300 dark:border-gray-700 bg-gray-50 dark:bg-gray-900 text-gray-900 dark:text-gray-100 focus:outline-none focus:ring-2 focus:ring-indigo-500"
                            placeholder="Enter client name" required>
                        @error('client')
                            <span class="text-xs text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-5">
                        <label for="duration" class="block text-sm font-bold mb-2 text-gray-700 dark:text-gray-300">Duration
                            <span class="text-red-500">*</span></label>
                        <input type="text" name="duration" id="duration"
                            value="{{ old('duration', $project->duration) }}"
                            class="w-full px-4 py-2 rounded-lg border border-gray-300 dark:border-gray-700 bg-gray-50 dark:bg-gray-900 text-gray-900 dark:text-gray-100 focus:outline-none focus:ring-2 focus:ring-indigo-500"
                            placeholder="Enter duration" required>
                        @error('duration')
                            <span class="text-xs text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-5">
                        <label for="rating" class="block text-sm font-bold mb-2 text-gray-700 dark:text-gray-300">Rating
                            <span class="text-red-500">*</span></label>
                        <input type="number" name="rating" id="rating" value="{{ old('rating', $project->rating) }}"
                            step="0.1" min="0" max="5"
                            class="w-full px-4 py-2 rounded-lg border border-gray-300 dark:border-gray-700 bg-gray-50 dark:bg-gray-900 text-gray-900 dark:text-gray-100 focus:outline-none focus:ring-2 focus:ring-indigo-500"
                            placeholder="Enter rating" required>
                        @error('rating')
                            <span class="text-xs text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-5">
                        <label for="url" class="block text-sm font-bold mb-2 text-gray-700 dark:text-gray-300">Project
                            URL</label>
                        <input type="url" name="url" id="url" value="{{ old('url', $project->url) }}"
                            class="w-full px-4 py-2 rounded-lg border border-gray-300 dark:border-gray-700 bg-gray-50 dark:bg-gray-900 text-gray-900 dark:text-gray-100 focus:outline-none focus:ring-2 focus:ring-indigo-500"
                            placeholder="Enter project url">
                        @error('url')
                            <span class="text-xs text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-5">
                        <label for="github_url" class="block text-sm font-bold mb-2 text-gray-700 dark:text-gray-300">GitHub
                            URL</label>
                        <input type="url" name="github_url" id="github_url"
                            value="{{ old('github_url', $project->github_url) }}"
                            class="w-full px-4 py-2 rounded-lg border border-gray-300 dark:border-gray-700 bg-gray-50 dark:bg-gray-900 text-gray-900 dark:text-gray-100 focus:outline-none focus:ring-2 focus:ring-indigo-500"
                            placeholder="Enter GitHub URL">
                        @error('github_url')
                            <span class="text-xs text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-5">
                        <label for="user_id" class="block text-sm font-bold mb-2 text-gray-700 dark:text-gray-300">User
                            <span class="text-red-500">*</span></label>
                        <select name="user_id" id="user_id"
                            class="w-full px-4 py-2 rounded-lg border border-gray-300 dark:border-gray-700 bg-gray-50 dark:bg-gray-900 text-gray-900 dark:text-gray-100 focus:outline-none focus:ring-2 focus:ring-indigo-500"
                            required>
                            <option value="">Select User</option>
                            @foreach ($users as $user)
                                <option value="{{ $user->id }}"
                                    {{ old('user_id', $project->user_id) == $user->id ? 'selected' : '' }}>
                                    {{ $user->name }}</option>
                            @endforeach
                        </select>
                        @error('user_id')
                            <span class="text-xs text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-5">
                        <label for="status"
                            class="block text-sm font-bold mb-2 text-gray-700 dark:text-gray-300">Status</label>
                        <select name="status" id="status"
                            class="w-full px-4 py-2 rounded-lg border border-gray-300 dark:border-gray-700 bg-gray-50 dark:bg-gray-900 text-gray-900 dark:text-gray-100 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                            <option value="1" {{ old('status', $project->status) == 1 ? 'selected' : '' }}>Active
                            </option>
                            <option value="0" {{ old('status', $project->status) == 0 ? 'selected' : '' }}>Inactive
                            </option>
                        </select>
                        @error('status')
                            <span class="text-xs text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    {{-- Show all category for select multiple  categories --}}
                    <div class="mb-5">
                        <label class="block text-sm font-bold mb-2 text-gray-700 dark:text-gray-300">Categories</label>
                        <div class="flex flex-wrap gap-3">
                            @foreach ($allcategories as $singleCategory)
                                <label class="flex items-center space-x-2">
                                    <input type="checkbox" name="categories[]" value="{{ $singleCategory->id }}"
                                        {{ collect(old('categories', $project->categories->pluck('id')->toArray()))->contains($singleCategory->id) ? 'checked' : '' }}
                                        class="form-checkbox h-4 w-4 text-indigo-600 transition duration-150 ease-in-out">
                                    <span class="text-gray-900 dark:text-gray-100">{{ $singleCategory->name }}</span>
                                </label>
                            @endforeach
                        </div>
                        @error('categories')
                            <span class="text-xs text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    {{-- Show all skills in select2 --}}
                    <div class="mb-5">
                        <label class="block text-sm font-bold mb-2 text-gray-700 dark:text-gray-300">Skills</label>
                        <select name="skills[]" id="select2" multiple
                            class="w-full px-4 py-2 rounded-lg border border-gray-300 dark:border-gray-700 bg-gray-50 dark:bg-gray-900 text-gray-900 dark:text-gray-100 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                            @foreach ($skills as $skill)
                                <option value="{{ $skill->id }}"
                                    {{ in_array($skill->id, old('skills', $project->skills->pluck('id')->toArray() ?? [])) ? 'selected' : '' }}>
                                    {{ $skill->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('skills')
                            <span class="text-xs text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    {{-- Thumbnail  --}}
                    <div class="mb-5">
                        <label for="thumbnail"
                            class="block text-sm font-bold mb-2 text-gray-700 dark:text-gray-300">Thumbnail</label>
                        @if ($project->thumbnail)
                            <div class="mb-2">
                                <img src="{{ asset('storage/' . $project->thumbnail) }}" alt="Current Thumbnail"
                                    class="h-20 rounded">
                            </div>
                        @endif
                        <input type="file" name="thumbnail" id="thumbnail"
                            class="w-full px-4 py-2 rounded-lg border border-gray-300 dark:border-gray-700 bg-gray-50 dark:bg-gray-900 text-gray-900 dark:text-gray-100 focus:outline-none focus:ring-2 focus:ring-indigo-500"
                            accept="image/*">
                        @error('thumbnail')
                            <span class="text-xs text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    {{-- Project images  --}}
                    <div class="mb-5">
                        <label for="images"
                            class="block text-sm font-bold mb-2 text-gray-700 dark:text-gray-300">Project Images</label>
                        @if ($project->images && count($project->images))
                            <div class="flex flex-wrap gap-2 mb-2">
                                @foreach ($project->images as $img)
                                    <div class="relative group cursor-pointer h-16 w-16">
                                        <button type="button"
                                            onclick="deleteData('{{ route('admin.projects.image.delete', $img->id) }}')"
                                            class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition-opacity duration-200 rounded"
                                            style="z-index:2;">
                                            <i class="fa fa-trash text-white text-lg"></i>
                                        </button>
                                        <img src="{{ asset('storage/' . $img->image_path) }}" alt="Project Image"
                                            class="h-16 w-16 object-cover rounded transition-opacity duration-200 group-hover:opacity-70"
                                            style="z-index:1;">
                                    </div>
                                @endforeach
                            </div>
                        @endif
                        <input type="file" name="images[]" id="images" multiple
                            class="w-full px-4 py-2 rounded-lg border border-gray-300 dark:border-gray-700 bg-gray-50 dark:bg-gray-900 text-gray-900 dark:text-gray-100 focus:outline-none focus:ring-2 focus:ring-indigo-500"
                            accept="image/*">
                        @error('images')
                            <span class="text-xs text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    {{-- is_featured checkbox --}}
                    <div class="mb-5">
                        <label class="inline-flex items-center">
                            <input type="checkbox" name="is_featured" value="1"
                                {{ old('is_featured', $project->is_featured) ? 'checked' : '' }}
                                class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                            <span class="ml-2 text-sm font-medium text-gray-700 dark:text-gray-300">Featured</span>
                        </label>
                    </div>

                    <div class="flex justify-end">
                        <button type="submit"
                            class="bg-indigo-600 hover:bg-indigo-700 dark:bg-indigo-500 dark:hover:bg-indigo-600 text-white px-6 py-2 rounded-xl font-bold shadow transition-all duration-200">
                            <i class="fa fa-save mr-1"></i> Update Project
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>

@endsection
@push('css')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/easymde/dist/easymde.min.css">
    <script src="https://unpkg.com/easymde/dist/easymde.min.js"></script>
@endpush

@push('js')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#select2').select2({
                placeholder: "Select skills",
                allowClear: true,
                width: '100%'
            });
        });

        function deleteData(url) {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = url;
                }
            });
        }
    </script>
@endpush

@push('js')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#select2').select2({
                placeholder: "Select skills",
                allowClear: true,
                width: '100%'
            });
        });
        
    const easyMDE = new EasyMDE({
        element: document.getElementById('description'),
        minHeight: "400px",
        autofocus: false,
        spellChecker: false,
        placeholder: "Write your description in Markdown...",
        status: ["lines", "words", "cursor"],
        toolbar: [
            "bold", "italic", "strikethrough", "|",
            "heading", "|",
            "quote", "unordered-list", "ordered-list", "|",
            "link", "table", "|",
            "code", "horizontal-rule", "|",
            "preview", "side-by-side", "fullscreen"
        ]
    });
</script>
@endpush



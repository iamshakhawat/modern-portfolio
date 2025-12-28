@extends('layout.web.web')

@section('title', 'Projects')

@section('content')
    <section id="projects" class="py-16 bg-gray-100 dark:bg-gray-800 transition-colors duration-500">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Title -->
            <h2 class="text-4xl font-extrabold text-center text-gray-900 dark:text-white mb-6">
                <span class="border-b-4 border-indigo-500 pb-1">All Projects</span>
            </h2>

            <!-- Filters -->
            <form onchange="this.submit()" method="GET" action="{{ route('project.all') }}" class="mb-12">
                <div class="flex flex-wrap justify-center gap-4">

                    <!-- Sort -->
                    <select name="sort"
                        class="px-4 py-2 rounded-xl 
                   bg-white dark:bg-gray-800 
                   text-gray-800 dark:text-gray-100
                   border border-gray-300 dark:border-gray-600
                   shadow-sm
                   focus:outline-none focus:ring-2 focus:ring-indigo-500" id="p_sort">
                        <option value="">Sort By</option>
                        <option value="latest" {{ request('sort') == 'latest' ? 'selected' : '' }}>
                            Latest
                        </option>
                        <option value="oldest" {{ request('sort') == 'oldest' ? 'selected' : '' }}>
                            Oldest
                        </option>
                    </select>

                    <!-- Category Filter -->
                    <select name="category" id="p_category"
                        class="px-4 py-2 rounded-xl 
                   bg-white dark:bg-gray-800 
                   text-gray-800 dark:text-gray-100
                   border border-gray-300 dark:border-gray-600
                   shadow-sm
                   focus:outline-none focus:ring-2 focus:ring-indigo-500">
                        <option value="">All Categories</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}"
                                {{ request('category') == $category->id ? 'selected' : '' }}>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>

                    <!-- Skill Filter -->
                    <select name="skill" id="p_skill"
                        class="px-4 py-2 rounded-xl 
                   bg-white dark:bg-gray-800 
                   text-gray-800 dark:text-gray-100
                   border border-gray-300 dark:border-gray-600
                   shadow-sm
                   focus:outline-none focus:ring-2 focus:ring-indigo-500">
                        <option value="">All Skills</option>
                        @foreach ($skills as $skill)
                            <option value="{{ $skill->id }}" {{ request('skill') == $skill->id ? 'selected' : '' }}>
                                {{ $skill->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </form>


            <!-- Projects Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="project-container">

                @forelse ($projects as $project)
                    @include('partials.project-card', ['project' => $project])
                @empty
                    <p class="col-span-3 text-center text-gray-600 dark:text-gray-400">
                        No projects found.
                    </p>
                @endforelse

            </div>

            <!-- Load More Button -->
            @if ($projects->count() >= 6)
                <div class="mt-12 text-center">
                    <button id="loadMoreBtn" data-skip="6"
                       class="px-8 py-3 text-white cursor-pointer font-medium rounded-xl shadow-lg btn-primary focus:outline-none transition-all duration-300">
                        Load More
                    </button>
                </div>
            @endif

        </div>
    </section>
@endsection
@push('js')
    <script>
        $(document).on('click', '#loadMoreBtn', function() {
            $(this).prop('disabled', true).html('<i class="fas fa-spinner fa-spin"></i>');
            let button = $(this);
            let skip = button.data('skip');
            let p_sort = $('#p_sort').val();
            let p_category = $('#p_category').val();
            let p_skill = $('#p_skill').val();

            $.ajax({
                url: "{{ route('loadmore') }}",
                type: "GET",
                data: {
                    skip: skip,
                    sort: p_sort,
                    category: p_category,
                    skill: p_skill
                },
                success: function(response) {

                    if (response.trim() === "") {
                        button.hide(); // আর project নাই
                        return;
                    }

                    $('#project-container').append(response);
                    button.data('skip', skip + 6);
                    button.prop('disabled', false).html('Load More');
                }
            });
        });
    </script>
@endpush

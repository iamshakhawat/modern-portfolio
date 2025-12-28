<a href="{{ route('project.show', $project->slug) }}"
    class="group block bg-white dark:bg-gray-700/50 rounded-2xl shadow-xl overflow-hidden transform hover:scale-[1.02] transition-all duration-500">

    <!-- Thumbnail -->
    <div class="w-full h-48 overflow-hidden">
        <img src="{{ asset('storage/' . $project->thumbnail) }}" alt="{{ $project->title }}"
            class="w-full h-full object-cover group-hover:opacity-75 transition-opacity duration-300"
            style="border-bottom-left-radius: 2rem; border-bottom-right-radius: 2rem;">
    </div>

    <!-- Content -->
    <div class="p-6 text-left">

        <h3
            class="text-xl font-bold text-gray-900 dark:text-white mb-2 group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition-colors">
            {{ $project->title }}
        </h3>

        <!-- Categories -->
        <div class="mb-3">
            @foreach ($project->categories as $category)
                <span
                    class="inline-block mb-1 bg-indigo-600/50 text-indigo-200 text-xs font-semibold px-3 py-1 rounded-full mr-2">
                    {{ $category->name }}
                </span>
            @endforeach
        </div>



        <!-- Description -->
        <p class="text-gray-600 dark:text-gray-400 text-sm mb-4 line-clamp-3">
            {{ $project->description }}
        </p>

        <!-- Skills -->
        <div class="flex space-x-3 text-xl">
            @foreach ($project->skills->take(11) as $skill)
                <i class="{{ $skill->icon }}" style="color: {{ $skill->color }}" title="{{ $skill->name }}"></i>
            @endforeach
        </div>

    </div>
</a>
<!-- End of Project Card -->
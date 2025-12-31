@extends('layout.admin.admin')
@section('title', 'Admin Dashboard')
@section('content')

    <div class="min-h-screen sm:px-2 lg:px-2 bg-gray-50 dark:bg-gray-900 transition-colors duration-200">
        <div class="max-w-7xl mx-auto">
            <div
                class="bg-white dark:bg-gray-800 shadow-xl rounded-2xl overflow-hidden border border-gray-100 dark:border-gray-700">
                <div class="px-8 py-6 border-b border-gray-100 dark:border-gray-700 flex justify-between items-center">
                    <h2 class="text-2xl font-extrabold text-gray-900 dark:text-white">Achievements List</h2>
                    <a href="{{ route('admin.achievements.create') }}"
                        class="bg-indigo-600 hover:bg-indigo-700 dark:bg-indigo-500 dark:hover:bg-indigo-600 text-white px-2 text-xs py-2 rounded-xl font-bold shadow transition-all duration-200">
                        <i class="fa fa-plus"></i> Add Achievement
                    </a>
                </div>
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                        <thead class="bg-gray-50 dark:bg-gray-700">
                            <tr>
                                <th class="px-4 py-3 text-left text-xs font-bold text-gray-700 dark:text-gray-300 uppercase">SI</th>
                                <th class="px-4 py-3 text-left text-xs font-bold text-gray-700 dark:text-gray-300 uppercase">Title</th>
                                <th class="px-4 py-3 text-left text-xs font-bold text-gray-700 dark:text-gray-300 uppercase">Value</th>
                                <th class="px-4 py-3 text-left text-xs font-bold text-gray-700 dark:text-gray-300 uppercase">Icon</th>
                                <th class="px-4 py-3 text-left text-xs font-bold text-gray-700 dark:text-gray-300 uppercase">Status</th>
                                <th class="px-4 py-3 text-left text-xs font-bold text-gray-700 dark:text-gray-300 uppercase">Action</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-100 dark:divide-gray-700">
                            @forelse($achievements as $index => $achievement)
                                <tr>
                                    <td class="px-4 py-3 text-sm text-gray-900 dark:text-gray-100">
                                        {{ $loop->index + 1 }}</td>
                                    <td class="px-4 py-3 text-sm text-gray-700 dark:text-gray-300 capitalize">
                                        {{ $achievement->title }}</td>
                                    <td class="px-4 py-3 text-sm text-gray-900 dark:text-gray-100">
                                        {{ $achievement->value }}</td>
                                    
                                    <td class="px-4 py-3">
                                        @if ($achievement->icon)
                                            <span class="inline-flex items-center text-xs font-bold " >
                                                <i class="{{ $achievement->icon }} text-xl" style="color: {{ $achievement->color }}"></i>
                                            </span>
                                        @else
                                            <span class="text-gray-400 text-sm">N/A</span>
                                        @endif
                                    </td>
                                    <td class="px-4 py-3">
                                        @if ($achievement->status)
                                            <span class="px-3 py-1 rounded-full text-xs font-bold bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-400">Active</span>
                                        @else
                                            <span class="px-3 py-1 rounded-full text-xs font-bold bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-400">Inactive</span>
                                        @endif
                                    </td>
                                    <td class="px-4 py-3 flex space-x-2">
                                        <a href="{{ route('admin.achievements.edit', $achievement->id) }}"
                                            class="inline-flex items-center px-3 py-1.5 rounded-lg bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-400 text-xs font-bold hover:bg-yellow-200 dark:hover:bg-yellow-800 transition">
                                            <i class="fa fa-edit mr-1"></i> Edit
                                        </a>
                                        <button type="button"
                                            onclick="deleteData('{{ route('admin.achievements.delete', $achievement->id) }}')"
                                            class="inline-flex items-center px-3 py-1.5 rounded-lg bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-400 text-xs font-bold hover:bg-red-200 dark:hover:bg-red-800 transition">
                                            <i class="fa fa-trash mr-1"></i> Delete
                                        </button>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="px-4 py-8 text-center text-gray-400 dark:text-gray-500">No achievements found.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <div class="px-8 py-4 bg-gray-50 dark:bg-gray-900 border-t border-gray-100 dark:border-gray-700">
                    {{ $achievements->links('pagination::tailwind') }}
                </div>
            </div>
        </div>
    </div>

@endsection
@push('js')
    <script>
        function deleteData(url) {
            Swal.fire({
                icon: 'info',
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = url;
                }
            })
        }
    </script>
@endpush
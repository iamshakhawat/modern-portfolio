@extends('layout.admin.admin')
@section('title', 'Admin Dashboard')
@section('content')

    <div class="min-h-screen sm:px-2 lg:px-2 bg-gray-50 dark:bg-gray-900 transition-colors duration-200">
        <div class="max-w-7xl mx-auto">
            <div
                class="bg-white dark:bg-gray-800 shadow-xl rounded-2xl overflow-hidden border border-gray-100 dark:border-gray-700">
                <div class="px-8 py-6 border-b border-gray-100 dark:border-gray-700 flex justify-between items-center">
                    <h2 class="text-2xl font-extrabold text-gray-900 dark:text-white">My CV</h2>
                    @if (!$cv)
                        <a href="{{ route('admin.cv.add') }}"
                            class="bg-indigo-600 hover:bg-indigo-700 dark:bg-indigo-500 dark:hover:bg-indigo-600 text-white px-2 text-xs py-2 rounded-xl font-bold shadow transition-all duration-200">
                            <i class="fa fa-plus"></i> Add CV
                        </a>
                    @else
                        <button onclick="deleteData('{{ route('admin.cv.delete', $cv->id) }}')"
                            class="bg-red-600 hover:bg-red-700 dark:bg-red-500 dark:hover:bg-red-600 text-white px-3 text-xs py-2 rounded-xl font-bold shadow transition-all duration-200">
                            <i class="fa fa-trash"></i> Delete CV
                        </button>
                    @endif
                </div>
                <div class="overflow-x-auto">
                    {{-- If cv exist then show cv otherwise not showing --}}
                    @if ($cv)
                        <div class="p-6">
                            {{-- Show CV name and button --}}
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Current CV:</h3>
                            <div class="flex items-center space-x-4">
                                <p class="text-gray-700 dark:text-gray-300">{{ isset($cv->file_path) ? str_replace('cv/','',$cv->file_path) : 'No file path available' }}</p>
                                <a href="{{ route('admin.cv.stream', $cv->id) }}" target="_blank"
                                    class="bg-blue-600 hover:bg-blue-700 dark:bg-blue-500 dark:hover:bg-blue-600 text-white px-3 text-xs py-2 rounded-xl font-bold shadow transition-all duration-200">
                                    <i class="fa fa-eye"></i> View CV
                                </a>

                            </div>
                        @else
                            <div class="p-6">
                                <p class="text-gray-500 dark:text-gray-400">No CV uploaded yet.</p>
                            </div>
                    @endif
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

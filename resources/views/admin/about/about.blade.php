@extends('layout.admin.admin')
@section('title', 'About - Admin Dashboard')
@section('content')
<div class="max-w mx-auto mt-1">
    <div class="bg-white shadow-gray-700 dark:bg-gray-800 shadow-sm rounded-lg p-8 flex flex-col items-center">
        <h1 class="text-3xl font-extrabold mb-6 text-blue-700 dark:text-blue-300">About Me</h1>
        <div class="mb-4">
            @if(!empty($about->image))
                <img src="{{ asset('storage/' . $about->image) }}" alt="About Image" class="w-48 h-48 object-cover rounded-xl shadow-md mb-2 border-2 border-blue-100 dark:border-gray-700">
            @else
                <img src="https://ui-avatars.com/api/?name=About&background=0D8ABC&color=fff&size=128" alt="Dummy Image" class="w-48 h-48 object-cover rounded-xl shadow-md mb-2 border-2 border-blue-100 dark:border-gray-700">
            @endif
        </div>
        <h2 class="text-2xl font-bold mb-2 text-gray-900 dark:text-gray-100">{{ $about->title ?? 'No Title' }}</h2>
        <p class="text-gray-700 dark:text-gray-300 mb-6 text-justify">{!! nl2br(e($about->description)) ?? 'No Description available.' !!}</p>
        <a href="{{ route('admin.about.edit') }}"
           class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-lg transition-colors duration-200">
            Edit
        </a>
    </div>
</div>
@endsection

@extends('layout.admin.admin')
@section('title', 'Change Password - Admin Dashboard')
@section('content')
<div class="max-w-md mx-auto mt-10">
    <div class="bg-white shadow-gray-700 dark:bg-gray-800 shadow-sm rounded-lg p-8">
        <h2 class="text-2xl font-bold mb-6 text-gray-900 dark:text-gray-100">Change Password</h2>
        <form method="POST" action="{{ route('admin.change.password.update') }}">
            @csrf
            <div class="mb-4">
                <label for="password" class="block text-gray-700 dark:text-gray-300 mb-2">New Password</label>
                <input type="password" name="password" id="password"
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:text-gray-100 dark:border-gray-600 @error('password') border-red-500 @enderror">
                @error('password')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="password_confirmation" class="block text-gray-700 dark:text-gray-300 mb-2">Confirm New Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation"
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:text-gray-100 dark:border-gray-600">
            </div>
            <button type="submit"
                class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-lg transition-colors duration-200">
                Change Password
            </button>
        </form>
    </div>
</div>
@endsection
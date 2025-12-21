<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'media',
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                }
            }
        }
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>

    <!-- SweetAlert2 CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body
    class="bg-gray-100 dark:bg-gray-900 min-h-screen flex items-center justify-center p-4 transition-colors duration-200">

    <div class="w-full max-w-md">
        <div class="bg-white dark:bg-gray-800 p-6 sm:p-8 rounded-xl shadow-xl transition-all">

            <!-- Header -->
            <h1 class="text-3xl font-extrabold text-gray-900 dark:text-white mb-2 text-center">
                Welcome Back
            </h1>
            <p class="text-gray-500 dark:text-gray-400 mb-8 text-center">
                Please log in to your account.
            </p>

            <!-- Laravel Form -->
            <form method="POST" action="{{ route('login.post') }}">
                @csrf

                <!-- Email/email Input -->
                <div class="mb-5">
                    <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                        Email or email
                    </label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" required
                        autofocus
                        class="w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-indigo-500 outline-none transition duration-150 
                        dark:bg-gray-700 dark:text-white 
                        @error('email') border-red-500 dark:border-red-500 @else border-gray-300 dark:border-gray-600 @enderror">
                    @error('email')
                        <p class="mt-1 text-xs text-red-500 font-medium">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Password Input -->
                <div class="mb-6">
                    <label for="password" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                        Password
                    </label>
                    <div class="relative">
                        <input type="password" id="password" name="password" required
                            class="w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-indigo-500 outline-none transition duration-150 
                            dark:bg-gray-700 dark:text-white
                            @error('password') border-red-500 dark:border-red-500 @else border-gray-300 dark:border-gray-600 @enderror">
                        <button type="button"
                            class="absolute inset-y-0 right-0 pr-3 flex items-center text-gray-400 hover:text-indigo-500"
                            onclick="const p = document.getElementById('password'); p.type = p.type === 'password' ? 'text' : 'password';">
                            <i class="fas fa-eye"></i>
                        </button>
                    </div>
                    @error('password')
                        <p class="mt-1 text-xs text-red-500 font-medium">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Remember Me & Forgot Password -->
                <div class="flex items-center justify-between mb-6">
                    <div class="flex items-center">
                        <input id="remember_me" name="remember" type="checkbox"
                            class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded dark:bg-gray-700 dark:border-gray-600">
                        <label for="remember_me" class="ml-2 block text-sm text-gray-700 dark:text-gray-300">Remember
                            me</label>
                    </div>
                    <div class="text-sm">
                        <a href="#"
                            class="font-medium text-indigo-600 hover:text-indigo-500 dark:text-indigo-400">Forgot
                            password?</a>
                    </div>
                </div>

                <!-- Submit Button -->
                <button type="submit"
                    class="w-full py-3 bg-indigo-600 text-white font-semibold rounded-lg shadow-md hover:bg-indigo-700 focus:outline-none focus:ring-4 focus:ring-indigo-500 focus:ring-opacity-50 transition duration-200">
                    Log In
                </button>
            </form>

            <!-- Divider -->
            <div class="relative my-6">
                <div class="absolute inset-0 flex items-center">
                    <div class="w-full border-t border-gray-300 dark:border-gray-600"></div>
                </div>
                <div class="relative flex justify-center text-sm">
                    <span class="px-2 bg-white dark:bg-gray-800 text-gray-500 dark:text-gray-400">Or continue
                        with</span>
                </div>
            </div>

            <!-- Google Login Button -->
            <a href="{{ route('login.google') }}"
                class="w-full flex items-center justify-center py-3 px-4 bg-white dark:bg-gray-700 border border-gray-300 dark:border-gray-600 text-gray-700 dark:text-white font-medium rounded-lg shadow-sm hover:bg-gray-50 dark:hover:bg-gray-600 transition duration-200">
                <svg class="w-5 h-5 mr-2" viewBox="0 0 48 48">
                    <path fill="#FFC107"
                        d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12c0-6.627,5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24s8.955,20,20,20s20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z">
                    </path>
                    <path fill="#FF3D00"
                        d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z">
                    </path>
                    <path fill="#4CAF50"
                        d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z">
                    </path>
                    <path fill="#1976D2"
                        d="M43.611,20.083H42V20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z">
                    </path>
                </svg>
                Sign in with Google
            </a>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            @if(@session('noaccerror'))
                Swal.fire({
                    icon: 'error',
                    title: 'Login Failed',
                    text: '{{ session('error') }}',
                    confirmButtonColor: '#ef4444'
                });
            @endif
        });
    </script>
</body>

</html>

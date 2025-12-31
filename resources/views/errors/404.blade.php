@extends('layout.web.web')

@section('title', '404 - Page Not Found')

@section('content')
<div class="min-h-screen flex items-center justify-center px-4 py-16 bg-gradient-to-br from-gray-50 to-gray-100 dark:from-gray-900 dark:to-gray-800 transition-colors duration-300">
    <div class="text-center max-w-2xl mx-auto">
        <!-- Animated 404 with Floating Effect -->
        <div class="mb-8 relative">
            <!-- Floating Background Circles -->
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-64 h-64">
                <div class="absolute w-full h-full bg-blue-500/10 dark:bg-blue-400/10 rounded-full animate-ping"></div>
                <div class="absolute w-full h-full bg-purple-500/10 dark:bg-purple-400/10 rounded-full animate-pulse"></div>
            </div>
            
            <!-- Main 404 Number with Gradient -->
            <div class="relative">
                <h1 class="text-9xl md:text-[12rem] font-black bg-gradient-to-r from-blue-600 via-purple-600 to-pink-600 dark:from-blue-400 dark:via-purple-400 dark:to-pink-400 bg-clip-text text-transparent animate-gradient-x mb-4">
                    404
                </h1>
                
                <!-- Animated Icon -->
                <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 animate-bounce-slow">
                    <svg class="w-24 h-24 text-gray-400 dark:text-gray-500 opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
            </div>
        </div>

        <!-- Error Message with Fade In Animation -->
        <div class="animate-fade-in-up space-y-4 mb-10">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 dark:text-gray-100">
                Oops! Page Not Found
            </h2>
            
            <p class="text-lg text-gray-600 dark:text-gray-400 max-w-md mx-auto">
                The page you're looking for seems to have wandered off into the digital void. Let's get you back on track!
            </p>
        </div>

        <!-- Action Buttons with Hover Effects -->
        <div class="flex flex-col sm:flex-row gap-4 justify-center items-center mb-12 animate-fade-in-up animation-delay-200">
            <a href="{{ route('home') }}" 
               class="group relative inline-flex items-center px-8 py-4 bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 dark:from-blue-500 dark:to-purple-500 dark:hover:from-blue-600 dark:hover:to-purple-600 text-white font-semibold rounded-xl transition-all duration-300 shadow-lg hover:shadow-xl hover:scale-105 overflow-hidden">
                <span class="absolute inset-0 w-full h-full bg-gradient-to-r from-purple-600 to-pink-600 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></span>
                <svg class="w-5 h-5 mr-2 relative z-10 group-hover:animate-bounce-small" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                </svg>
                <span class="relative z-10">Go to Homepage</span>
            </a>
            
            <a href="{{ url('/#contact') }}" 
               class="group inline-flex items-center px-8 py-4 bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-700 text-gray-800 dark:text-gray-200 font-semibold rounded-xl transition-all duration-300 shadow-lg hover:shadow-xl hover:scale-105 border-2 border-gray-200 dark:border-gray-700">
                <svg class="w-5 h-5 mr-2 group-hover:rotate-12 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </svg>
                Contact Us
            </a>
        </div>

        <!-- Decorative Elements -->
        <div class="relative animate-fade-in animation-delay-400">
            <div class="flex justify-center gap-3 mb-6">
                <div class="w-3 h-3 bg-blue-500 dark:bg-blue-400 rounded-full animate-bounce-delay-0"></div>
                <div class="w-3 h-3 bg-purple-500 dark:bg-purple-400 rounded-full animate-bounce-delay-1"></div>
                <div class="w-3 h-3 bg-pink-500 dark:bg-pink-400 rounded-full animate-bounce-delay-2"></div>
            </div>
            
            <p class="text-sm text-gray-500 dark:text-gray-400">
                Error Code: 404 | Page Not Found
            </p>
        </div>
    </div>
</div>

<style>
    @keyframes gradient-x {
        0%, 100% {
            background-position: 0% 50%;
        }
        50% {
            background-position: 100% 50%;
        }
    }
    
    @keyframes fade-in-up {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    @keyframes bounce-slow {
        0%, 100% {
            transform: translateY(0) scale(1);
        }
        50% {
            transform: translateY(-20px) scale(1.05);
        }
    }
    
    @keyframes bounce-small {
        0%, 100% {
            transform: translateX(0);
        }
        50% {
            transform: translateX(-5px);
        }
    }
    
    .animate-gradient-x {
        background-size: 200% 200%;
        animation: gradient-x 3s ease infinite;
    }
    
    .animate-fade-in-up {
        animation: fade-in-up 0.8s ease-out forwards;
    }
    
    .animate-fade-in {
        animation: fade-in-up 1s ease-out forwards;
    }
    
    .animation-delay-200 {
        animation-delay: 0.2s;
        opacity: 0;
    }
    
    .animation-delay-400 {
        animation-delay: 0.4s;
        opacity: 0;
    }
    
    .animate-bounce-slow {
        animation: bounce-slow 3s ease-in-out infinite;
    }
    
    .group:hover .group-hover\:animate-bounce-small {
        animation: bounce-small 0.5s ease-in-out;
    }
    
    .animate-bounce-delay-0 {
        animation: bounce 1s infinite;
    }
    
    .animate-bounce-delay-1 {
        animation: bounce 1s infinite 0.2s;
    }
    
    .animate-bounce-delay-2 {
        animation: bounce 1s infinite 0.4s;
    }
    
    @keyframes bounce {
        0%, 100% {
            transform: translateY(0);
        }
        50% {
            transform: translateY(-10px);
        }
    }
</style>
@endsection
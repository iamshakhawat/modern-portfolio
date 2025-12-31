    

<?php $__env->startSection('title', '500 - Server Error'); ?>

<?php $__env->startSection('content'); ?>
<div class="min-h-screen flex items-center justify-center px-4 py-16 bg-gradient-to-br from-gray-50 to-gray-100 dark:from-gray-900 dark:to-gray-800 transition-colors duration-300">
    <div class="text-center max-w-2xl mx-auto">
        <!-- Animated 500 with Server Down Animation -->
        <div class="mb-8 relative">
            <!-- Glitching Background Circles -->
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-64 h-64">
                <div class="absolute w-full h-full bg-red-500/10 dark:bg-red-400/10 rounded-full animate-glitch-pulse"></div>
                <div class="absolute w-full h-full bg-orange-500/10 dark:bg-orange-400/10 rounded-full animate-glitch-pulse-delay"></div>
            </div>
            
            <!-- Main 500 Number with Gradient -->
            <div class="relative">
                <h1 class="text-9xl md:text-[12rem] font-black bg-gradient-to-r from-red-600 via-orange-600 to-yellow-600 dark:from-red-400 dark:via-orange-400 dark:to-yellow-400 bg-clip-text text-transparent animate-gradient-x mb-4 animate-glitch-text">
                    500
                </h1>
                
                <!-- Broken Server Icon with Disconnection Animation -->
                <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
                    <!-- Server Icon -->
                    <div class="relative animate-server-shake">
                        <svg class="w-24 h-24 text-gray-400 dark:text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01" />
                        </svg>
                        
                        <!-- Warning Symbol Overlay -->
                        <div class="absolute -top-2 -right-2 animate-pulse-fast">
                            <svg class="w-8 h-8 text-red-500 dark:text-red-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        
                        <!-- Disconnected Signal Lines -->
                        <div class="absolute -top-8 left-1/2 -translate-x-1/2">
                            <div class="flex gap-1">
                                <div class="w-1 h-4 bg-red-500 dark:bg-red-400 animate-signal-fade-1"></div>
                                <div class="w-1 h-6 bg-red-500 dark:bg-red-400 animate-signal-fade-2"></div>
                                <div class="w-1 h-8 bg-red-500 dark:bg-red-400 animate-signal-fade-3"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Error Message with Fade In Animation -->
        <div class="animate-fade-in-up space-y-4 mb-10">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 dark:text-gray-100">
                Server Error
            </h2>
            
            <p class="text-lg text-gray-600 dark:text-gray-400 max-w-md mx-auto">
                Something went wrong on our end. Our servers are currently experiencing difficulties. Please try again in a few moments.
            </p>
        </div>

        <!-- Action Buttons with Hover Effects -->
        <div class="flex flex-col sm:flex-row gap-4 justify-center items-center mb-12 animate-fade-in-up animation-delay-200">
            <a href="<?php echo e(route('home')); ?>" 
               class="group relative inline-flex items-center px-8 py-4 bg-gradient-to-r from-red-600 to-orange-600 hover:from-red-700 hover:to-orange-700 dark:from-red-500 dark:to-orange-500 dark:hover:from-red-600 dark:hover:to-orange-600 text-white font-semibold rounded-xl transition-all duration-300 shadow-lg hover:shadow-xl hover:scale-105 overflow-hidden">
                <span class="absolute inset-0 w-full h-full bg-gradient-to-r from-orange-600 to-yellow-600 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></span>
                <svg class="w-5 h-5 mr-2 relative z-10 group-hover:animate-bounce-small" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                </svg>
                <span class="relative z-10">Go to Homepage</span>
            </a>
            
            <button onclick="location.reload()" 
               class="group inline-flex items-center px-8 py-4 bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-700 text-gray-800 dark:text-gray-200 font-semibold rounded-xl transition-all duration-300 shadow-lg hover:shadow-xl hover:scale-105 border-2 border-gray-200 dark:border-gray-700">
                <svg class="w-5 h-5 mr-2 group-hover:rotate-180 transition-transform duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                </svg>
                Try Again
            </button>
        </div>

        <!-- Decorative Elements - System Status Indicators -->
        <div class="relative animate-fade-in animation-delay-400">
            <div class="flex justify-center gap-6 mb-6">
                <!-- Server Status Indicators -->
                <div class="flex items-center gap-2">
                    <div class="w-3 h-3 bg-red-500 dark:bg-red-400 rounded-full animate-blink-red"></div>
                    <span class="text-xs text-gray-500 dark:text-gray-400">Server</span>
                </div>
                <div class="flex items-center gap-2">
                    <div class="w-3 h-3 bg-yellow-500 dark:bg-yellow-400 rounded-full animate-pulse"></div>
                    <span class="text-xs text-gray-500 dark:text-gray-400">Database</span>
                </div>
                <div class="flex items-center gap-2">
                    <div class="w-3 h-3 bg-red-500 dark:bg-red-400 rounded-full animate-blink-red animation-delay-100"></div>
                    <span class="text-xs text-gray-500 dark:text-gray-400">API</span>
                </div>
            </div>
            
            <p class="text-sm text-gray-500 dark:text-gray-400">
                Error Code: 500 | Internal Server Error
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
    
    @keyframes server-shake {
        0%, 100% {
            transform: translateX(0) translateY(0);
        }
        10%, 30%, 50%, 70%, 90% {
            transform: translateX(-2px) translateY(-2px);
        }
        20%, 40%, 60%, 80% {
            transform: translateX(2px) translateY(2px);
        }
    }
    
    @keyframes glitch-pulse {
        0%, 100% {
            opacity: 0.3;
            transform: scale(1);
        }
        50% {
            opacity: 0.1;
            transform: scale(1.1);
        }
    }
    
    @keyframes glitch-text {
        0%, 90%, 100% {
            transform: translateX(0);
        }
        92% {
            transform: translateX(-3px);
        }
        94% {
            transform: translateX(3px);
        }
        96% {
            transform: translateX(-3px);
        }
        98% {
            transform: translateX(3px);
        }
    }
    
    @keyframes signal-fade {
        0%, 100% {
            opacity: 1;
        }
        50% {
            opacity: 0.2;
        }
    }
    
    @keyframes blink-red {
        0%, 49% {
            opacity: 1;
        }
        50%, 100% {
            opacity: 0.3;
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
    
    .animation-delay-100 {
        animation-delay: 0.1s;
    }
    
    .animation-delay-200 {
        animation-delay: 0.2s;
        opacity: 0;
    }
    
    .animation-delay-400 {
        animation-delay: 0.4s;
        opacity: 0;
    }
    
    .animate-server-shake {
        animation: server-shake 4s ease-in-out infinite;
    }
    
    .animate-glitch-pulse {
        animation: glitch-pulse 2s ease-in-out infinite;
    }
    
    .animate-glitch-pulse-delay {
        animation: glitch-pulse 2s ease-in-out infinite 0.5s;
    }
    
    .animate-glitch-text {
        animation: glitch-text 5s ease-in-out infinite;
    }
    
    .animate-signal-fade-1 {
        animation: signal-fade 1.5s ease-in-out infinite;
    }
    
    .animate-signal-fade-2 {
        animation: signal-fade 1.5s ease-in-out infinite 0.2s;
    }
    
    .animate-signal-fade-3 {
        animation: signal-fade 1.5s ease-in-out infinite 0.4s;
    }
    
    .animate-blink-red {
        animation: blink-red 1s ease-in-out infinite;
    }
    
    .animate-pulse-fast {
        animation: pulse 1s cubic-bezier(0.4, 0, 0.6, 1) infinite;
    }
    
    .group:hover .group-hover\:animate-bounce-small {
        animation: bounce-small 0.5s ease-in-out;
    }
</style>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.web.web', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Shakhawat\Desktop\Portfolio\resources\views/errors/500.blade.php ENDPATH**/ ?>
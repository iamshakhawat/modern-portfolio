<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shakhawat Hosen | Laravel Developer Portfolio</title>
    <!-- Font Awesome CDN for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <!-- Google Font - Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <!-- Tailwind CSS Configuration -->
    <script>
        tailwind = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        primary: '#4f46e5',
                        accent: '#8b5cf6'
                    }
                }
            }
        }
    </script>
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        /* CSS Variables for non-Tailwind elements */
        :root {
            /* Default to Dark Mode variables (matching the JS default) */
            color-scheme: dark;
            --primary-color: #4f46e5;
            /* Indigo */
            --accent-color: #8b5cf6;
            /* Violet */
        }

        /* Light Mode Overrides */
        html.light {
            color-scheme: light;
            --primary-color: #3b82f6;
            /* Blue */
            --accent-color: #6366f1;
            /* Indigo */
        }

        /* Global Smooth Transition - Prevents "forced" abrupt changes */
        html,
        body,
        div,
        section,
        nav,
        footer,
        h1,
        h2,
        h3,
        p,
        a,
        button,
        input,
        textarea,
        i,
        span {
            transition-property: background-color, color, border-color, box-shadow;
            transition-duration: 300ms;
            transition-timing-function: ease-in-out;
        }

        body {
            font-family: 'Inter', sans-serif;
            /* transition handled globally above */
        }

        /* Unique Button Design - Gradient and Shadow */
        .btn-primary {
            background-image: linear-gradient(to right, #4f46e5 0%, #a855f7 100%);
            box-shadow: 0 4px 15px 0 rgba(79, 70, 229, 0.4);
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background-image: linear-gradient(to right, #6366f1 0%, #c084fc 100%);
            box-shadow: 0 4px 20px 0 rgba(139, 92, 246, 0.6);
            transform: translateY(-2px);
        }

        .btn-secondary {
            border: 2px solid var(--accent-color);
            color: var(--accent-color);
            transition: all 0.3s ease;
        }

        .btn-secondary:hover {
            background-color: rgba(139, 92, 246, 0.1);
            /* Handle text color change via utility classes or specific override if needed */
        }

        /* Dark mode overrides for secondary button hover text if needed */
        html.dark .btn-secondary:hover {
            color: #fff;
        }

        html.light .btn-secondary:hover {
            color: #4f46e5;
        }


        /* Hero Section Glow Effect for Profile Photo Placeholder */
        .profile-photo-container {
            width: 280px;
            height: 280px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--primary-color), var(--accent-color), #ec4899);
            padding: 4px;
            position: relative;
            box-shadow: 0 0 30px rgba(79, 70, 229, 0.5);
            animation: pulse-glow 4s infinite alternate;
        }

        .profile-photo-inner {
            width: 100%;
            height: 100%;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            border: 4px solid;
            /* Border color handles by Tailwind classes in HTML */
        }

        /* Bubble Effect */
        .bubble {
            position: absolute;
            background-color: var(--accent-color);
            border-radius: 50%;
            opacity: 0.15;
            animation: move-bubble 15s infinite;
        }

        .bubble:nth-child(1) {
            width: 40px;
            height: 40px;
            top: 10%;
            left: 5%;
            animation-delay: 0s;
        }

        .bubble:nth-child(2) {
            width: 60px;
            height: 60px;
            top: 70%;
            left: 80%;
            animation-delay: 4s;
        }

        .bubble:nth-child(3) {
            width: 30px;
            height: 30px;
            top: 50%;
            left: 30%;
            animation-delay: 8s;
        }

        /* Icon Animation Class */
        .icon-spin {
            animation: spin 0.5s ease-in-out;
        }

        @keyframes spin {
            from {
                transform: rotate(0deg) scale(0.8);
                opacity: 0.5;
            }

            to {
                transform: rotate(360deg) scale(1);
                opacity: 1;
            }
        }

        @keyframes pulse-glow {
            0% {
                box-shadow: 0 0 30px rgba(79, 70, 229, 0.5);
            }

            50% {
                box-shadow: 0 0 45px rgba(139, 92, 246, 0.7);
            }

            100% {
                box-shadow: 0 0 30px rgba(236, 72, 153, 0.5);
            }
        }

        @keyframes move-bubble {

            0%,
            100% {
                transform: translate(0, 0) scale(1);
            }

            25% {
                transform: translate(20px, -20px) scale(1.1);
            }

            50% {
                transform: translate(-30px, 30px) scale(0.9);
            }

            75% {
                transform: translate(10px, 10px) scale(1.2);
            }
        }

        /* Skill Card Hover Effect */
        .skill-card {
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out, background-color 0.3s;
            cursor: pointer;
        }

        .skill-card:hover {
            transform: translateY(-5px) scale(1.05);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
            background-color: rgba(79, 70, 229, 0.1);
        }

        /* Specific dark mode hover for skill card */
        html.dark .skill-card:hover {
            background-color: rgba(79, 70, 229, 0.5);
        }
    </style>
</head>

<body class="bg-white dark:bg-gray-900 text-gray-900 dark:text-gray-200 transition-colors duration-500">

    <!-- Navbar -->
    <nav
        class="sticky shadow top-0 z-50 backdrop-blur-md bg-white/90 dark:bg-gray-900/90 border-b border-gray-200 dark:border-gray-700 transition-colors duration-500">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <!-- Logo -->
                <div class="flex-shrink-0">
                    <a href="#home"
                        class="text-gray-900 dark:text-white text-2xl font-bold tracking-tight hover:text-indigo-500 dark:hover:text-indigo-400 transition-colors duration-300">
                        S<span class="text-indigo-500">H</span>
                    </a>
                </div>

                <!-- Nav Links (Desktop) - Right aligned -->
                <div class="hidden md:flex items-center space-x-2">
                    <a href="#home"
                        class="text-gray-600 dark:text-gray-300 hover:text-indigo-500 dark:hover:text-indigo-400 px-2 py-2 text-md font-medium transition-colors duration-300">Home</a>
                    <a href="#about"
                        class="text-gray-600 dark:text-gray-300 hover:text-indigo-500 dark:hover:text-indigo-400 px-2 py-2 text-md font-medium transition-colors duration-300">About</a>
                    <a href="#skill"
                        class="text-gray-600 dark:text-gray-300 hover:text-indigo-500 dark:hover:text-indigo-400 px-2 py-2 text-md font-medium transition-colors duration-300">Skills</a>
                    <a href="#projects"
                        class="text-gray-600 dark:text-gray-300 hover:text-indigo-500 dark:hover:text-indigo-400 px-2 py-2 text-md font-medium transition-colors duration-300">Projects</a>
                    <a href="#contact"
                        class="text-gray-600 dark:text-gray-300 hover:text-indigo-500 dark:hover:text-indigo-400 px-2 py-2 text-md font-medium transition-colors duration-300">Contact</a>

                </div>

                <!-- Mobile Menu Button & Theme Toggle -->
                <div class="flex items-center space-x-4 md:hidden">
                    <!-- Mobile Menu Button (Hamburger) -->
                    <button id="mobile-menu-button" type="button"
                        class="inline-flex items-center justify-center p-2 rounded-md text-gray-500 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white hover:bg-gray-200 dark:hover:bg-gray-700 focus:outline-none transition-colors duration-300">
                        <i class="fa-solid fa-bars text-xl"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu (Hidden by default) -->
        <div id="mobile-menu"
            class="hidden md:hidden bg-gray-100 dark:bg-gray-800 border-t border-gray-200 dark:border-gray-700 transition-colors duration-500">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                <a href="#home"
                    class="block px-3 py-2 rounded-md text-base font-medium text-gray-900 dark:text-white hover:bg-gray-200 dark:hover:bg-gray-700">Home</a>
                <a href="#about"
                    class="block px-3 py-2 rounded-md text-base font-medium text-gray-600 dark:text-gray-300 hover:bg-gray-200 dark:hover:bg-gray-700">About</a>
                <a href="#skill"
                    class="block px-3 py-2 rounded-md text-base font-medium text-gray-600 dark:text-gray-300 hover:bg-gray-200 dark:hover:bg-gray-700">Skills</a>
                <a href="#projects"
                    class="block px-3 py-2 rounded-md text-base font-medium text-gray-600 dark:text-gray-300 hover:bg-gray-200 dark:hover:bg-gray-700">Projects</a>
                <a href="#contact"
                    class="block px-3 py-2 rounded-md text-base font-medium text-gray-600 dark:text-gray-300 hover:bg-gray-200 dark:hover:bg-gray-700">Contact</a>
            </div>
        </div>
    </nav>

    <main class="min-h-screen bg-gray-50 dark:bg-slate-900 transition-colors duration-300 py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

                <!-- Left Column: Main Content -->
                <div class="lg:col-span-2 space-y-8">
                    <!-- Project Header -->
                    <header class="space-y-4">
                        <div class="flex items-center gap-2">

                        </div>
                        <h1
                            class="text-4xl md:text-5xl font-extrabold text-slate-900 dark:text-white tracking-tight leading-tight">
                            Revolutionizing E-Commerce with AI-Driven Personalization
                        </h1>
                        <div class="flex items-center space-x-4 text-sm text-slate-500 dark:text-slate-400">
                            <div class="flex items-center">
                                <div
                                    class="h-8 w-8 rounded-full bg-indigo-500 flex items-center justify-center text-white font-bold mr-2 text-xs">
                                    SH</div>
                                <span>Project by <span class="font-medium text-slate-900 dark:text-slate-200">Shakhawat
                                        Hosen</span></span>
                            </div>
                            <span class="hidden sm:inline text-slate-300">|</span>
                            <time class="flex items-center"><i class="fa-regular fa-calendar-check mr-2"></i> June
                                2025</time>
                                
                        </div>
                    </header>

                    <!-- Swiper Image Slider -->
                    <div
                        class="relative group rounded-2xl shadow-2xl border border-slate-200 dark:border-slate-800 overflow-hidden bg-slate-200 dark:bg-slate-800">
                        <div class="swiper project-swiper w-full h-[300px] md:h-[500px]">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=1200&h=800&auto=format&fit=crop"
                                        class="w-full h-full object-cover" alt="Analytics Dashboard">
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://images.unsplash.com/photo-1551288049-bbbda536339a?q=80&w=1200&h=800&auto=format&fit=crop"
                                        class="w-full h-full object-cover" alt="User Experience Design">
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://images.unsplash.com/photo-1507238691740-187a5b1d37b8?q=80&w=1200&h=800&auto=format&fit=crop"
                                        class="w-full h-full object-cover" alt="Responsive Interface">
                                </div>
                            </div>
                            <!-- Pagination/Navigation -->
                            <div class="swiper-pagination"></div>
                            <div class="swiper-button-next opacity-0 group-hover:opacity-100 transition-opacity"></div>
                            <div class="swiper-button-prev opacity-0 group-hover:opacity-100 transition-opacity"></div>
                        </div>
                    </div>

                    <!-- Article Body -->
                    <article
                        class="prose prose-slate dark:prose-invert max-w-none 
                        prose-headings:text-slate-900 dark:prose-headings:text-white 
                        prose-p:text-lg prose-p:leading-relaxed prose-p:text-slate-600 dark:prose-p:text-slate-300">

                        <h2 class="text-2xl font-bold border-b border-slate-200 dark:border-slate-800 pb-2">Project
                            Overview</h2>
                        <p>
                            Built on the robust <strong>Laravel 12</strong> framework, this platform bridges the gap
                            between massive datasets and personalized shopping experiences. By implementing
                            high-performance caching and optimized database queries, we achieved sub-200ms response
                            times for AI-driven product recommendations.
                        </p>

                        <blockquote
                            class="border-l-4 border-indigo-500 bg-indigo-50/50 dark:bg-indigo-900/10 p-4 rounded-r-lg italic">
                            "Leveraging Laravel's Service Pattern allowed us to integrate complex machine learning logic
                            without compromising on code maintainability."
                        </blockquote>

                        <h3 class="text-xl font-bold mt-8">Technical Implementation</h3>
                        <ul class="list-disc pl-5 space-y-2">
                            <li>Real-time data synchronization using <strong>Redis</strong>.</li>
                            <li>Advanced filtering logic powered by <strong>Eloquent ORM</strong>.</li>
                            <li>Responsive, utility-first design with <strong>Tailwind CSS</strong>.</li>
                            <li>Seamless UI updates via <strong>Livewire 4</strong>.</li>
                        </ul>
                    </article>
                </div>

                <!-- Right Column: Sidebar -->
                <aside class="space-y-6">
                    <!-- Project Actions & Stats -->
                    <div
                        class="bg-white dark:bg-slate-800 p-6 rounded-2xl shadow-sm border border-slate-200 dark:border-slate-700">
                        <div class="flex items-center justify-between mb-6">
                            <h3 class="text-lg font-bold text-slate-900 dark:text-white">Live Project</h3>
                            <div class="flex space-x-3">
                                <a href="#"
                                    class="h-10 w-10 flex items-center justify-center rounded-xl bg-indigo-100 dark:bg-indigo-900/40 text-indigo-600 dark:text-indigo-400 hover:bg-indigo-600 hover:text-white transition-all shadow-sm"
                                    title="Live Preview">
                                    <i class="fa-solid fa-arrow-up-right-from-square"></i>
                                </a>
                                <a href="#"
                                    class="h-10 w-10 flex items-center justify-center rounded-xl bg-slate-100 dark:bg-slate-700 text-slate-600 dark:text-slate-300 hover:bg-slate-900 hover:text-white dark:hover:bg-white dark:hover:text-slate-900 transition-all shadow-sm"
                                    title="GitHub Source">
                                    <i class="fa-brands fa-github text-lg"></i>
                                </a>
                            </div>
                        </div>

                        <dl class="space-y-4">
                            <div
                                class="flex justify-between items-center py-2 border-b border-slate-50 dark:border-slate-700/50 text-sm">
                                <dt class="text-slate-500 dark:text-slate-400">Client</dt>
                                <dd class="font-semibold text-slate-900 dark:text-slate-100">TechNova Ltd.</dd>
                            </div>
                            <div class="flex justify-between items-center py-2 text-sm">
                                <dt class="text-slate-500 dark:text-slate-400">Duration</dt>
                                <dd class="font-semibold text-slate-900 dark:text-slate-100">12 Weeks</dd>
                            </div>
                            <div class="flex justify-between items-center py-2 text-sm">
                                <dt class="text-slate-500 dark:text-slate-400">Rating</dt>
                                <dd class="font-semibold text-slate-900 dark:text-slate-100">
                                    <i class="fa-solid fa-star text-yellow-400 mr-1"></i> 4.8/5
                                </dd>
                            </div>
                            <div class="flex justify-between items-center py-2 text-sm">
                                <dt class="text-slate-500 dark:text-slate-400">Category</dt>
                                <dd class="font-semibold text-slate-900 dark:text-slate-100"><span
                                class="px-3 py-1 bg-indigo-100 dark:bg-indigo-900/40 text-indigo-600 dark:text-indigo-400 rounded-full text-xs font-bold uppercase tracking-wider">Case
                                Study</span></dd>
                            </div>
                        </dl>
                    </div>

                    <!-- Tech Stack Icons -->
                    <div
                        class="bg-white dark:bg-slate-800 p-6 rounded-2xl shadow-sm border border-slate-200 dark:border-slate-700">
                        <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-6">Technologies Used</h3>
                        <div class="grid grid-cols-3 gap-6">
                            <!-- Laravel -->
                            <div class="flex flex-col items-center group">
                                <div
                                    class="w-12 h-12 rounded-2xl bg-red-50 dark:bg-red-900/10 flex items-center justify-center text-[#FF2D20] text-2xl group-hover:scale-110 transition-transform">
                                    <i class="fa-brands fa-laravel"></i>
                                </div>
                                <span
                                    class="text-[10px] font-bold mt-2 uppercase tracking-tighter text-slate-400">Laravel</span>
                            </div>
                            <!-- PHP -->
                            <div class="flex flex-col items-center group">
                                <div
                                    class="w-12 h-12 rounded-2xl bg-indigo-50 dark:bg-indigo-900/10 flex items-center justify-center text-[#777BB4] text-2xl group-hover:scale-110 transition-transform">
                                    <i class="fa-brands fa-php"></i>
                                </div>
                                <span class="text-[10px] font-bold mt-2 uppercase tracking-tighter text-slate-400">PHP
                                    8.4</span>
                            </div>
                            <!-- JS -->
                            <div class="flex flex-col items-center group">
                                <div
                                    class="w-12 h-12 rounded-2xl bg-yellow-50 dark:bg-yellow-900/10 flex items-center justify-center text-[#F7DF1E] text-2xl group-hover:scale-110 transition-transform">
                                    <i class="fa-brands fa-js"></i>
                                </div>
                                <span class="text-[10px] font-bold mt-2 uppercase tracking-tighter text-slate-400">JS
                                    ES6+</span>
                            </div>
                            <!-- Database -->
                            <div class="flex flex-col items-center group">
                                <div
                                    class="w-12 h-12 rounded-2xl bg-emerald-50 dark:bg-emerald-900/10 flex items-center justify-center text-emerald-500 text-2xl group-hover:scale-110 transition-transform">
                                    <i class="fa-solid fa-database"></i>
                                </div>
                                <span
                                    class="text-[10px] font-bold mt-2 uppercase tracking-tighter text-slate-400">Postgre</span>
                            </div>
                            <!-- Redis -->
                            <div class="flex flex-col items-center group">
                                <div
                                    class="w-12 h-12 rounded-2xl bg-rose-50 dark:bg-rose-900/10 flex items-center justify-center text-rose-500 text-2xl group-hover:scale-110 transition-transform">
                                    <i class="fa-solid fa-bolt"></i>
                                </div>
                                <span
                                    class="text-[10px] font-bold mt-2 uppercase tracking-tighter text-slate-400">Redis</span>
                            </div>
                            <!-- Tailwind -->
                            <div class="flex flex-col items-center group">
                                <div
                                    class="w-12 h-12 rounded-2xl bg-sky-50 dark:bg-sky-900/10 flex items-center justify-center text-sky-400 text-2xl group-hover:scale-110 transition-transform">
                                    <i class="fa-solid fa-wind"></i>
                                </div>
                                <span
                                    class="text-[10px] font-bold mt-2 uppercase tracking-tighter text-slate-400">CSS</span>
                            </div>
                        </div>
                    </div>

                    <!-- Sidebar Footer CTA -->
                    <div class="p-6 bg-gradient-to-br from-indigo-600 to-indigo-800 rounded-2xl text-white shadow-xl">
                        <h4 class="font-bold text-lg mb-2">Interested?</h4>
                        <p class="text-indigo-100 text-sm mb-4 leading-relaxed">Let's discuss how I can help bring your
                            next Laravel project to life.</p>
                        <a href="#"
                            class="block text-center py-3 bg-white text-indigo-600 font-bold rounded-xl hover:bg-indigo-50 transition-colors">Hire
                            Me</a>
                    </div>
                </aside>
            </div>
        </div>
    </main>


    <!-- 6. Footer -->
    <footer
        class="bg-gray-100 dark:bg-gray-900 border-t border-gray-200 dark:border-gray-700/50 py-8 transition-colors duration-500">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">

            <!-- Profile Photo (Mini Size) -->
            <div class="mx-auto w-12 h-12 rounded-full overflow-hidden mb-2 border-2 border-indigo-500">
                <img src="https://placehold.co/48x48/e5e7eb/1f2937?text=S" alt="Mini Photo"
                    class="w-full h-full object-cover"
                    onerror="this.style.display='none'; this.closest('div').innerHTML='<i class=\'fa-solid fa-user text-2xl text-indigo-500\'></i>'">
            </div>

            <!-- Name -->
            <p class="text-xl font-bold text-gray-900 dark:text-white mb-3">Shakhawat Hosen</p>

            <!-- Social Media Icons (Footer) -->
            <div class="flex justify-center space-x-6 text-xl text-gray-600 dark:text-gray-400 mb-4">
                <a href="https://github.com/shakhawat" target="_blank"
                    class="hover:text-gray-900 dark:hover:text-white transition-colors duration-300" title="GitHub">
                    <i class="fa-brands fa-github"></i>
                </a>
                <a href="https://linkedin.com/in/shakhawat" target="_blank"
                    class="hover:text-indigo-600 dark:hover:text-indigo-500 transition-colors duration-300"
                    title="LinkedIn">
                    <i class="fa-brands fa-linkedin-in"></i>
                </a>
                <a href="https://twitter.com/shakhawat" target="_blank"
                    class="hover:text-sky-400 transition-colors duration-300" title="X (Twitter)">
                    <i class="fa-brands fa-x-twitter"></i>
                </a>
                <a href="mailto:shakhawat@example.com" class="hover:text-red-500 transition-colors duration-300"
                    title="Google Mail">
                    <i class="fa-brands fa-google"></i>
                </a>
            </div>

            <!-- Copyright Text -->
            <p class="text-sm text-gray-500">
                &copy; <span id="year"></span> Shakhawat Hosen. All rights reserved. <br class="sm:hidden">
                Designed and
                Developed with <i class="fa-solid fa-heart text-red-500"></i>.
            </p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Set current year for copyright
            document.getElementById('year').textContent = new Date().getFullYear();

            // --- Theme Toggle Logic ---
            // Select ALL toggle buttons (desktop & mobile)
            const themeToggleBtns = document.querySelectorAll('.theme-toggle');
            const htmlElement = document.documentElement;

            // Check if theme is set in localStorage, otherwise default to 'dark'
            let isDarkMode = localStorage.getItem('theme') === 'light' ? false : true;

            // Function to apply the theme
            function applyTheme() {
                if (isDarkMode) {
                    htmlElement.classList.remove('light');
                    htmlElement.classList.add('dark');
                    localStorage.setItem('theme', 'dark');
                } else {
                    htmlElement.classList.remove('dark');
                    htmlElement.classList.add('light');
                    localStorage.setItem('theme', 'light');
                }
                updateIcons();
            }

            // Function to update all icons based on current theme
            function updateIcons() {
                const icons = document.querySelectorAll('.theme-icon');
                icons.forEach(icon => {
                    // Add animation class
                    icon.classList.remove('icon-spin');
                    void icon.offsetWidth; // Trigger reflow to restart animation
                    icon.classList.add('icon-spin');

                    if (isDarkMode) {
                        icon.classList.remove('fa-sun');
                        icon.classList.add('fa-moon');
                    } else {
                        icon.classList.remove('fa-moon');
                        icon.classList.add('fa-sun');
                    }
                });
            }

            // Initial theme application
            applyTheme();

            // Add event listeners to ALL toggle buttons
            themeToggleBtns.forEach(btn => {
                btn.addEventListener('click', () => {
                    isDarkMode = !isDarkMode;
                    applyTheme();
                });
            });

            // --- Mobile Menu Logic ---
            const mobileMenuBtn = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');

            mobileMenuBtn.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
                // Toggle hamburger icon: bars <-> close
                const icon = mobileMenuBtn.querySelector('i');
                icon.classList.toggle('fa-bars');
                icon.classList.toggle('fa-xmark');
            });

            // Close mobile menu when a link is clicked
            mobileMenu.querySelectorAll('a').forEach(link => {
                link.addEventListener('click', () => {
                    mobileMenu.classList.add('hidden');
                    const icon = mobileMenuBtn.querySelector('i');
                    icon.classList.remove('fa-xmark');
                    icon.classList.add('fa-bars');
                });
            });
        });

        // Swiper Initialization
        const swiper = new Swiper('.project-swiper', {
            loop: true,
            speed: 800,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            effect: 'creative',
            creativeEffect: {
                prev: {
                    shadow: true,
                    translate: [0, 0, -400]
                },
                next: {
                    translate: ['100%', 0, 0]
                },
            },
        });
    </script>
</body>

</html>

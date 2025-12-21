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

    <main>
        <!-- 1. Header/Hero Section -->
        <section id="home"
            class="py-16 md:py-24 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 min-h-[80vh] flex items-center">
            <div class="flex flex-col md:flex-row items-center justify-between gap-5 w-full">

                <!-- Left Side: Text and Buttons -->
                <div class="md:w-1/2 text-center md:text-left lg:ml-12">
                    <p class="text-xl text-indigo-500 dark:text-indigo-400 font-semibold mb-2">Hello, I'm</p>
                    <h1 class="text-5xl sm:text-7xl font-extrabold leading-tight text-gray-900 dark:text-white mb-4">
                        Shakhawat
                    </h1>
                    <h2 class="text-2xl sm:text-3xl font-medium text-gray-600 dark:text-gray-400 mb-6">
                        Professional <span class="text-violet-600 dark:text-violet-400">Web Developer</span>
                    </h2>
                    <p class="text-lg text-gray-600 dark:text-gray-400 mb-10 max-w-lg mx-auto md:mx-0">
                        I'm a Laravel Developer passionate about building modern, responsive, and user-friendly web
                        interfaces using Laravel and a strong focus on clean architecture.
                    </p>

                    <!-- Buttons -->
                    <div class="flex justify-center md:justify-start space-x-4 mb-10">
                        <a href="#"
                            class="inline-flex items-center px-6 py-3 text-base font-medium rounded-xl text-white btn-primary focus:outline-none">
                            <i class="fa-solid fa-file-arrow-down mr-3"></i> Download Resume
                        </a>
                        <a href="#contact"
                            class="inline-flex items-center px-6 py-3 text-base font-medium rounded-xl btn-secondary focus:outline-none">
                            <i class="fa-solid fa-envelope mr-3"></i> Contact Me
                        </a>
                    </div>

                    <!-- Social Media Icons -->
                    <div
                        class="flex justify-center md:justify-start space-x-6 text-2xl text-gray-500 dark:text-gray-400">
                        <a href="https://github.com/shakhawat" target="_blank"
                            class="hover:text-gray-900 dark:hover:text-white transition-colors duration-300"
                            title="GitHub">
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
                </div>

                <!-- Right Side: Profile Photo with Glow -->
                <div class="md:w-1/2 flex justify-center md:justify-end md:mt-0 lg:mt-8">
                    <div class="profile-photo-container m-auto">
                        <div class="bubble"></div>
                        <div class="bubble" style="background-color: #ec4899;"></div>
                        <div class="bubble" style="background-color: #8b5cf6;"></div>
                        <div
                            class="profile-photo-inner bg-gray-100 dark:bg-gray-900 border-gray-100 dark:border-gray-900 transition-colors duration-500">
                            <!-- Placeholder for Profile Photo -->
                            <img src="https://placehold.co/270x270/f3f4f6/1f2937?text=SHAKHAWAT"
                                alt="Shakhawat Hosen Profile" class="w-full h-full object-cover rounded-full p-2"
                                onerror="this.style.display='none'; this.closest('.profile-photo-inner').innerHTML='<i class=\'fa-solid fa-user text-9xl text-gray-500\'></i>'">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 2. About Me Section -->
        <section id="about" class="py-16 bg-gray-100 dark:bg-gray-800 transition-colors duration-500">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-4xl font-extrabold text-center text-gray-900 dark:text-white mb-12">
                    <span class="border-b-4 border-indigo-500 pb-1">About Me</span>
                </h2>

                <div class="flex flex-col md:flex-row items-center gap-10">
                    <!-- Left Side: Photo -->
                    <div class="md:w-1/3 flex justify-center relative">
                        <div
                            class="w-64 h-64 overflow-hidden rounded-xl shadow-2xl transform rotate-3 hover:rotate-0 transition-transform duration-500">
                            @if ($about && !empty($about->image))
                                <img src="{{ asset('storage/' . $about->image) }}" alt="Shakhawat Hosen About"
                                    class="w-full h-full object-cover"
                                    onerror="this.style.display='none'; this.closest('div').innerHTML='<div class=\'flex items-center justify-center w-full h-full bg-gray-200 dark:bg-gray-700\'><i class=\'fa-solid fa-camera text-6xl text-gray-500\'></i></div>'">
                            @else
                                <img src="https://placehold.co/600x600/e5e7eb/374151?text=SH+Photo"
                                    alt="Shakhawat Hosen About" class="w-full h-full object-cover"
                                    onerror="this.style.display='none'; this.closest('div').innerHTML='<div class=\'flex items-center justify-center w-full h-full bg-gray-200 dark:bg-gray-700\'><i class=\'fa-solid fa-camera text-6xl text-gray-500\'></i></div>'">
                            @endif
                        </div>
                    </div>

                    <!-- Right Side: Text -->
                    <div class="md:w-2/3 text-center md:text-left">
                        <h3 class="text-3xl font-bold text-gray-900 dark:text-white mb-4">
                            {{ $about->title ?? 'Laravel Developer & Web Enthusiast' }}
                        </h3>
                        <p class="text-lg text-gray-600 dark:text-gray-400 leading-relaxed mb-6">
                            {!! nl2br(e($about->description)) ??
                                'I am a passionate Laravel developer with experience in building dynamic and responsive web applications. I specialize in creating clean, efficient, and scalable code while focusing on user experience and performance. My expertise includes working with databases, RESTful APIs, and front-end technologies to deliver complete solutions.' !!}
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- 3. Skill Section -->
        <section id="skill" class="py-16 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-4xl font-extrabold text-center text-gray-900 dark:text-white mb-12">
                <span class="border-b-4 border-indigo-500 pb-1">My Skills</span>
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">


                <!-- Frontend Section -->
                <div class="p-6 bg-white dark:bg-gray-800 rounded-2xl shadow-xl transition-colors duration-500">
                    <h3
                        class="text-2xl font-bold text-gray-900 dark:text-white mb-6 border-b border-gray-200 dark:border-gray-700 pb-3">
                        <i class="fa-solid fa-code mr-2 text-indigo-500 dark:text-indigo-400"></i> Frontend
                    </h3>
                    <div class="grid grid-cols-3 sm:grid-cols-5 gap-6">
                        @foreach ($skills->where('category', 'frontend') as $skill)
                            <div class="skill-card text-center p-3 rounded-xl bg-gray-100 dark:bg-gray-700">
                                <i class="{{ $skill->icon }} text-4xl  mb-2" style="color: {{ $skill->color }}"></i>
                                <p class="text-sm text-gray-600 dark:text-gray-300">{{ $skill->name }}</p>
                            </div>
                        @endforeach
                    </div>


                </div>

                <!-- Backend Section -->
                <div class="p-6 bg-white dark:bg-gray-800 rounded-2xl shadow-xl transition-colors duration-500">
                    <h3
                        class="text-2xl font-bold text-gray-900 dark:text-white mb-6 border-b border-gray-200 dark:border-gray-700 pb-3">
                        <i class="fa-solid fa-server mr-2 text-indigo-500 dark:text-indigo-400"></i> Backend
                    </h3>
                    <div class="grid grid-cols-3 sm:grid-cols-5 gap-6">
                        @foreach ($skills->where('category', 'backend') as $skill)
                            <div class="skill-card text-center p-3 rounded-xl bg-gray-100 dark:bg-gray-700">
                                <i class="{{ $skill->icon }} text-4xl  mb-2" style="color: {{ $skill->color }}"></i>
                                <p class="text-sm text-gray-600 dark:text-gray-300">{{ $skill->name }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Programming Section -->
                <div class="p-6 bg-white dark:bg-gray-800 rounded-2xl shadow-xl transition-colors duration-500">
                    <h3
                        class="text-2xl font-bold text-gray-900 dark:text-white mb-6 border-b border-gray-200 dark:border-gray-700 pb-3">
                        <i class="fa-solid fa-laptop-code mr-2 text-indigo-500 dark:text-indigo-400"></i> Programming
                    </h3>

                    <div class="grid grid-cols-3 sm:grid-cols-5 gap-6">
                        @foreach ($skills->where('category', 'programming') as $skill)
                            <div class="skill-card text-center p-3 rounded-xl bg-gray-100 dark:bg-gray-700">
                                <i class="{{ $skill->icon }} text-4xl  mb-2" style="color: {{ $skill->color }}"></i>
                                <p class="text-sm text-gray-600 dark:text-gray-300">{{ $skill->name }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Tools & Platform Section -->
                <div class="p-6 bg-white dark:bg-gray-800 rounded-2xl shadow-xl transition-colors duration-500">
                    <h3
                        class="text-2xl font-bold text-gray-900 dark:text-white mb-6 border-b border-gray-200 dark:border-gray-700 pb-3">
                        <i class="fa-solid fa-wrench mr-2 text-indigo-500 dark:text-indigo-400"></i> Tools & Platform
                    </h3>
                    
                    <div class="grid grid-cols-3 sm:grid-cols-5 gap-6">
                        @foreach ($skills->where('category', 'tools') as $skill)
                            <div class="skill-card text-center p-3 rounded-xl bg-gray-100 dark:bg-gray-700">
                                <i class="{{ $skill->icon }} text-4xl  mb-2" style="color: {{ $skill->color }}"></i>
                                <p class="text-sm text-gray-600 dark:text-gray-300">{{ $skill->name }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        <!-- 4. Projects Section -->
        <section id="projects" class="py-16 bg-gray-100 dark:bg-gray-800 transition-colors duration-500">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-4xl font-extrabold text-center text-gray-900 dark:text-white mb-12">
                    <span class="border-b-4 border-indigo-500 pb-1">Featured Projects</span>
                </h2>

                <!-- Projects Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                    <!-- Project Card Component -->
                    <a href="#"
                        class="group block bg-white dark:bg-gray-700/50 rounded-2xl shadow-xl overflow-hidden transform hover:scale-[1.02] transition-all duration-500">
                        <div class="w-full h-48 overflow-hidden">
                            <img src="https://placehold.co/800x450/e5e7eb/374151?text=E-Commerce+API" alt="Project 1"
                                class="w-full h-full object-cover group-hover:opacity-75 transition-opacity duration-300"
                                style="border-bottom-left-radius: 2rem; border-bottom-right-radius: 2rem;">
                        </div>

                        <div class="p-6 text-left">
                            <h3
                                class="text-xl font-bold text-gray-900 dark:text-white mb-2 group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition-colors">
                                E-Commerce REST API</h3>
                            <span
                                class="inline-block bg-violet-600/50 text-violet-200 text-xs font-semibold px-3 py-1 rounded-full mb-3">API
                                Development</span>
                            <p class="text-gray-600 dark:text-gray-400 text-sm mb-4 line-clamp-3">A robust RESTful API
                                built with Laravel for a large-scale e-commerce platform, handling product catalog, user
                                authentication, and order processing.</p>

                            <div class="flex space-x-3 text-xl justify-center md:justify-start">
                                <i class="fa-brands fa-laravel text-red-600" title="Laravel"></i>
                                <i class="fa-solid fa-database text-sky-600" title="MySQL"></i>
                                <i class="fa-brands fa-php text-purple-500" title="PHP"></i>
                                <i class="fa-solid fa-lock text-red-400" title="Security"></i>
                            </div>
                        </div>
                    </a>

                    <a href="#"
                        class="group block bg-white dark:bg-gray-700/50 rounded-2xl shadow-xl overflow-hidden transform hover:scale-[1.02] transition-all duration-500">
                        <div class="w-full h-48 overflow-hidden">
                            <img src="https://placehold.co/800x450/e5e7eb/374151?text=CRM+Dashboard" alt="Project 2"
                                class="w-full h-full object-cover group-hover:opacity-75 transition-opacity duration-300"
                                style="border-bottom-left-radius: 2rem; border-bottom-right-radius: 2rem;">
                        </div>
                        <div class="p-6 text-left">
                            <h3
                                class="text-xl font-bold text-gray-900 dark:text-white mb-2 group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition-colors">
                                Internal CRM Dashboard</h3>
                            <span
                                class="inline-block bg-violet-600/50 text-violet-200 text-xs font-semibold px-3 py-1 rounded-full mb-3">Full
                                Stack</span>
                            <p class="text-gray-600 dark:text-gray-400 text-sm mb-4 line-clamp-3">A custom-built CRM
                                using Laravel and Vue.js for managing customer interactions, sales pipeline, and
                                generating real-time analytics reports.</p>

                            <div class="flex space-x-3 text-xl justify-center md:justify-start">
                                <i class="fa-brands fa-laravel text-red-600" title="Laravel"></i>
                                <i class="fa-brands fa-vuejs text-emerald-500" title="Vue.js"></i>
                                <i class="fa-solid fa-wind text-sky-400" title="Tailwind CSS"></i>
                                <i class="fa-solid fa-chart-simple text-green-500" title="Charts"></i>
                            </div>
                        </div>
                    </a>

                    <a href="#"
                        class="group block bg-white dark:bg-gray-700/50 rounded-2xl shadow-xl overflow-hidden transform hover:scale-[1.02] transition-all duration-500">
                        <div class="w-full h-48 overflow-hidden">
                            <img src="https://placehold.co/800x450/e5e7eb/374151?text=Blog+Platform" alt="Project 3"
                                class="w-full h-full object-cover group-hover:opacity-75 transition-opacity duration-300"
                                style="border-bottom-left-radius: 2rem; border-bottom-right-radius: 2rem;">
                        </div>
                        <div class="p-6 text-left">
                            <h3
                                class="text-xl font-bold text-gray-900 dark:text-white mb-2 group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition-colors">
                                Modern Blog Platform</h3>
                            <span
                                class="inline-block bg-violet-600/50 text-violet-200 text-xs font-semibold px-3 py-1 rounded-full mb-3">CMS
                                / SEO</span>
                            <p class="text-gray-600 dark:text-gray-400 text-sm mb-4 line-clamp-3">A high-performance
                                blog platform featuring a custom admin panel and built with a focus on fast load times
                                and strong SEO practices.</p>

                            <div class="flex space-x-3 text-xl justify-center md:justify-start">
                                <i class="fa-brands fa-laravel text-red-600" title="Laravel"></i>
                                <i class="fa-brands fa-html5 text-orange-500" title="HTML"></i>
                                <i class="fa-solid fa-leaf text-green-700" title="MongoDB"></i>
                                <i class="fa-solid fa-lightbulb text-yellow-300" title="Algorithms"></i>
                            </div>
                        </div>
                    </a>

                    <a href="#"
                        class="group block bg-white dark:bg-gray-700/50 rounded-2xl shadow-xl overflow-hidden transform hover:scale-[1.02] transition-all duration-500">
                        <div class="w-full h-48 overflow-hidden">
                            <img src="https://placehold.co/800x450/e5e7eb/374151?text=Job+Portal" alt="Project 4"
                                class="w-full h-full object-cover group-hover:opacity-75 transition-opacity duration-300"
                                style="border-bottom-left-radius: 2rem; border-bottom-right-radius: 2rem;">
                        </div>
                        <div class="p-6 text-left">
                            <h3
                                class="text-xl font-bold text-gray-900 dark:text-white mb-2 group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition-colors">
                                Regional Job Portal</h3>
                            <span
                                class="inline-block bg-violet-600/50 text-violet-200 text-xs font-semibold px-3 py-1 rounded-full mb-3">Search
                                | Platform</span>
                            <p class="text-gray-600 dark:text-gray-400 text-sm mb-4 line-clamp-3">A multi-tenant job
                                listing and application system featuring real-time search functionality powered by
                                Laravel Scout and Algolia.</p>

                            <div class="flex space-x-3 text-xl justify-center md:justify-start">
                                <i class="fa-brands fa-laravel text-red-600" title="Laravel"></i>
                                <i class="fa-brands fa-js text-yellow-500" title="JavaScript"></i>
                                <i class="fa-solid fa-magnifying-glass text-yellow-400" title="Laravel Scout"></i>
                                <i class="fa-solid fa-bolt text-yellow-600" title="Caching"></i>
                            </div>
                        </div>
                    </a>

                    <a href="#"
                        class="group block bg-white dark:bg-gray-700/50 rounded-2xl shadow-xl overflow-hidden transform hover:scale-[1.02] transition-all duration-500">
                        <div class="w-full h-48 overflow-hidden">
                            <img src="https://placehold.co/800x450/e5e7eb/374151?text=Task+Manager" alt="Project 5"
                                class="w-full h-full object-cover group-hover:opacity-75 transition-opacity duration-300"
                                style="border-bottom-left-radius: 2rem; border-bottom-right-radius: 2rem;">
                        </div>
                        <div class="p-6 text-left">
                            <h3
                                class="text-xl font-bold text-gray-900 dark:text-white mb-2 group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition-colors">
                                Real-time Task Manager</h3>
                            <span
                                class="inline-block bg-violet-600/50 text-violet-200 text-xs font-semibold px-3 py-1 rounded-full mb-3">SaaS
                                / Real-time</span>
                            <p class="text-gray-600 dark:text-gray-400 text-sm mb-4 line-clamp-3">A collaborative task
                                management application utilizing Laravel Echo and Pusher for real-time updates and
                                notifications across users.</p>

                            <div class="flex space-x-3 text-xl justify-center md:justify-start">
                                <i class="fa-brands fa-laravel text-red-600" title="Laravel"></i>
                                <i class="fa-solid fa-code-merge text-orange-400" title="OOP"></i>
                                <i class="fa-brands fa-react text-cyan-400" title="React"></i>
                                <i class="fa-solid fa-sitemap text-indigo-500" title="SOLID"></i>
                            </div>
                        </div>
                    </a>

                    <a href="#"
                        class="group block bg-white dark:bg-gray-700/50 rounded-2xl shadow-xl overflow-hidden transform hover:scale-[1.02] transition-all duration-500">
                        <div class="w-full h-48 overflow-hidden">
                            <img src="https://placehold.co/800x450/e5e7eb/374151?text=Payment+Integration"
                                alt="Project 6"
                                class="w-full h-full object-cover group-hover:opacity-75 transition-opacity duration-300"
                                style="border-bottom-left-radius: 2rem; border-bottom-right-radius: 2rem;">
                        </div>
                        <div class="p-6 text-left">
                            <h3
                                class="text-xl font-bold text-gray-900 dark:text-white mb-2 group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition-colors">
                                Payment Gateway Module</h3>
                            <span
                                class="inline-block bg-violet-600/50 text-violet-200 text-xs font-semibold px-3 py-1 rounded-full mb-3">Module
                                / Payments</span>
                            <p class="text-gray-600 dark:text-gray-400 text-sm mb-4 line-clamp-3">Developed a secure,
                                modular package for seamless integration with multiple payment gateways (Stripe, PayPal)
                                in any Laravel application.</p>

                            <div class="flex space-x-3 text-xl justify-center md:justify-start">
                                <i class="fa-brands fa-php text-purple-500" title="PHP"></i>
                                <i class="fa-solid fa-money-check-dollar text-green-500" title="Stripe"></i>
                                <i class="fa-solid fa-key text-teal-400" title="Auth/Security"></i>
                                <i class="fa-solid fa-bug text-red-700" title="Xdebug"></i>
                            </div>
                        </div>
                    </a>

                </div>

                <!-- See More Button -->
                <div class="text-center mt-12">
                    <button
                        class="px-8 py-3 text-white font-medium rounded-xl shadow-lg btn-primary focus:outline-none transition-all duration-300">
                        See More Projects
                    </button>
                </div>

            </div>
        </section>

        <!-- 4.5. Education & Experience Section -->
        <section id="timeline" class="py-16 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-4xl font-extrabold text-center text-gray-900 dark:text-white mb-12">
                <span class="border-b-4 border-indigo-500 pb-1">Education & Experience</span>
            </h2>
            <div class="flex flex-col md:flex-row  gap-12">
                <!-- Education Timeline -->
                <div class="md:w-1/2 ml-10">
                    <h3 class="text-2xl font-bold text-indigo-600 dark:text-indigo-400 mb-6 flex items-center">
                        <i class="fa-solid fa-graduation-cap mr-3"></i> Education
                    </h3>
                    <ol class="relative border-l-4 border-indigo-200 dark:border-indigo-700">
                        <li class="mb-10 ml-6">
                            <span
                                class="absolute flex items-center justify-center w-8 h-8 bg-indigo-500 rounded-full -left-4 ring-4 ring-white dark:ring-gray-900 text-white">
                                <i class="fa-solid fa-university"></i>
                            </span>
                            <h4 class="text-xl font-semibold text-gray-900 dark:text-white">B.Sc. in Computer Science
                            </h4>
                            <span class="block text-sm text-gray-500 dark:text-gray-400 mb-1">2015 - 2019</span>
                            <p class="text-gray-600 dark:text-gray-300">XYZ University, Specialized in Software
                                Engineering and Web Development.</p>
                        </li>
                        <li class="mb-10 ml-6">
                            <span
                                class="absolute flex items-center justify-center w-8 h-8 bg-indigo-400 rounded-full -left-4 ring-4 ring-white dark:ring-gray-900 text-white">
                                <i class="fa-solid fa-school"></i>
                            </span>
                            <h4 class="text-xl font-semibold text-gray-900 dark:text-white">Higher Secondary
                                Certificate
                            </h4>
                            <span class="block text-sm text-gray-500 dark:text-gray-400 mb-1">2013 - 2015</span>
                            <p class="text-gray-600 dark:text-gray-300">ABC College, Science Group.</p>
                        </li>
                    </ol>
                </div>
                <!-- Experience Timeline -->
                <div class="md:w-1/2 ml-10">
                    <h3 class="text-2xl font-bold text-indigo-600 dark:text-indigo-400 mb-6 flex items-center">
                        <i class="fa-solid fa-briefcase mr-3"></i> Experience
                    </h3>
                    <ol class="relative border-l-4 border-violet-200 dark:border-violet-700">
                        <li class="mb-10 ml-6">
                            <span
                                class="absolute flex items-center justify-center w-8 h-8 bg-violet-500 rounded-full -left-4 ring-4 ring-white dark:ring-gray-900 text-white">
                                <i class="fa-solid fa-laptop-code"></i>
                            </span>
                            <h4 class="text-xl font-semibold text-gray-900 dark:text-white">Laravel Developer</h4>
                            <span class="block text-sm text-gray-500 dark:text-gray-400 mb-1">2021 - Present</span>
                            <p class="text-gray-600 dark:text-gray-300">DEF Software Ltd. <br> Building scalable web
                                applications, REST APIs, and leading backend architecture.</p>
                        </li>
                        <li class="mb-10 ml-6">
                            <span
                                class="absolute flex items-center justify-center w-8 h-8 bg-violet-400 rounded-full -left-4 ring-4 ring-white dark:ring-gray-900 text-white">
                                <i class="fa-solid fa-code"></i>
                            </span>
                            <h4 class="text-xl font-semibold text-gray-900 dark:text-white">Junior Web Developer</h4>
                            <span class="block text-sm text-gray-500 dark:text-gray-400 mb-1">2019 - 2021</span>
                            <p class="text-gray-600 dark:text-gray-300">GHI Tech Solutions <br> Worked on full-stack
                                projects using Laravel, Vue.js, and MySQL.</p>
                        </li>
                    </ol>
                </div>
            </div>
        </section>

        <!-- 4.6. GitHub / Open Source Work Section -->
        <section id="opensource" class="py-16 bg-gray-100 dark:bg-gray-800 transition-colors duration-500">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-4xl font-extrabold text-center text-gray-900 dark:text-white mb-12">
                    <span class="border-b-4 border-indigo-500 pb-1">GitHub / Open Source Work</span>
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

                    <!-- Repository 1 -->
                    <a href="https://github.com/shakhawat/laravel-advanced-starter" target="_blank"
                        class="group bg-white dark:bg-gray-900 rounded-2xl shadow-xl p-8 flex flex-col hover:shadow-2xl hover:-translate-y-2 transition-all duration-300">
                        <div class="flex items-center mb-4">
                            <i class="fa-brands fa-github text-3xl text-indigo-500 mr-3"></i>
                            <h3
                                class="text-xl font-bold text-gray-900 dark:text-white group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition-colors">
                                Laravel Advanced Starter
                            </h3>
                        </div>
                        <p class="text-gray-600 dark:text-gray-300 mb-4 flex-1">
                            A boilerplate for scalable Laravel projects with built-in authentication, REST API
                            structure, and Docker support. Used by 500+ developers.
                        </p>
                        <div class="flex items-center space-x-4 text-sm text-gray-500 dark:text-gray-400">
                            <span><i class="fa-solid fa-star text-yellow-400 mr-1"></i> 320</span>
                            <span><i class="fa-solid fa-code-branch mr-1"></i> 60</span>
                            <span
                                class="bg-indigo-100 dark:bg-indigo-800 text-indigo-600 dark:text-indigo-200 px-2 py-1 rounded">Laravel</span>
                        </div>
                    </a>

                    <!-- Repository 2 -->
                    <a href="https://github.com/shakhawat/vue-tailwind-dashboard" target="_blank"
                        class="group bg-white dark:bg-gray-900 rounded-2xl shadow-xl p-8 flex flex-col hover:shadow-2xl hover:-translate-y-2 transition-all duration-300">
                        <div class="flex items-center mb-4">
                            <i class="fa-brands fa-github text-3xl text-emerald-500 mr-3"></i>
                            <h3
                                class="text-xl font-bold text-gray-900 dark:text-white group-hover:text-emerald-600 dark:group-hover:text-emerald-400 transition-colors">
                                Vue Tailwind Dashboard
                            </h3>
                        </div>
                        <p class="text-gray-600 dark:text-gray-300 mb-4 flex-1">
                            An open-source admin dashboard template built with Vue.js and Tailwind CSS. Features
                            authentication, charts, and responsive layouts.
                        </p>
                        <div class="flex items-center space-x-4 text-sm text-gray-500 dark:text-gray-400">
                            <span><i class="fa-solid fa-star text-yellow-400 mr-1"></i> 210</span>
                            <span><i class="fa-solid fa-code-branch mr-1"></i> 35</span>
                            <span
                                class="bg-emerald-100 dark:bg-emerald-800 text-emerald-600 dark:text-emerald-200 px-2 py-1 rounded">Vue.js</span>
                        </div>
                    </a>

                    <!-- Repository 3 -->
                    <a href="https://github.com/shakhawat/php-api-boilerplate" target="_blank"
                        class="group bg-white dark:bg-gray-900 rounded-2xl shadow-xl p-8 flex flex-col hover:shadow-2xl hover:-translate-y-2 transition-all duration-300">
                        <div class="flex items-center mb-4">
                            <i class="fa-brands fa-github text-3xl text-purple-500 mr-3"></i>
                            <h3
                                class="text-xl font-bold text-gray-900 dark:text-white group-hover:text-purple-600 dark:group-hover:text-purple-400 transition-colors">
                                PHP API Boilerplate
                            </h3>
                        </div>
                        <p class="text-gray-600 dark:text-gray-300 mb-4 flex-1">
                            A clean and secure PHP REST API starter with JWT authentication, rate limiting, and OpenAPI
                            docs. Perfect for rapid backend prototyping.
                        </p>
                        <div class="flex items-center space-x-4 text-sm text-gray-500 dark:text-gray-400">
                            <span><i class="fa-solid fa-star text-yellow-400 mr-1"></i> 150</span>
                            <span><i class="fa-solid fa-code-branch mr-1"></i> 22</span>
                            <span
                                class="bg-purple-100 dark:bg-purple-800 text-purple-600 dark:text-purple-200 px-2 py-1 rounded">PHP</span>
                        </div>
                    </a>
                    <!-- Repository 1 -->
                    <a href="https://github.com/shakhawat/laravel-advanced-starter" target="_blank"
                        class="group bg-white dark:bg-gray-900 rounded-2xl shadow-xl p-8 flex flex-col hover:shadow-2xl hover:-translate-y-2 transition-all duration-300">
                        <div class="flex items-center mb-4">
                            <i class="fa-brands fa-github text-3xl text-indigo-500 mr-3"></i>
                            <h3
                                class="text-xl font-bold text-gray-900 dark:text-white group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition-colors">
                                Laravel Advanced Starter
                            </h3>
                        </div>
                        <p class="text-gray-600 dark:text-gray-300 mb-4 flex-1">
                            A boilerplate for scalable Laravel projects with built-in authentication, REST API
                            structure, and Docker support. Used by 500+ developers.
                        </p>
                        <div class="flex items-center space-x-4 text-sm text-gray-500 dark:text-gray-400">
                            <span><i class="fa-solid fa-star text-yellow-400 mr-1"></i> 320</span>
                            <span><i class="fa-solid fa-code-branch mr-1"></i> 60</span>
                            <span
                                class="bg-indigo-100 dark:bg-indigo-800 text-indigo-600 dark:text-indigo-200 px-2 py-1 rounded">Laravel</span>
                        </div>
                    </a>

                    <!-- Repository 2 -->
                    <a href="https://github.com/shakhawat/vue-tailwind-dashboard" target="_blank"
                        class="group bg-white dark:bg-gray-900 rounded-2xl shadow-xl p-8 flex flex-col hover:shadow-2xl hover:-translate-y-2 transition-all duration-300">
                        <div class="flex items-center mb-4">
                            <i class="fa-brands fa-github text-3xl text-emerald-500 mr-3"></i>
                            <h3
                                class="text-xl font-bold text-gray-900 dark:text-white group-hover:text-emerald-600 dark:group-hover:text-emerald-400 transition-colors">
                                Vue Tailwind Dashboard
                            </h3>
                        </div>
                        <p class="text-gray-600 dark:text-gray-300 mb-4 flex-1">
                            An open-source admin dashboard template built with Vue.js and Tailwind CSS. Features
                            authentication, charts, and responsive layouts.
                        </p>
                        <div class="flex items-center space-x-4 text-sm text-gray-500 dark:text-gray-400">
                            <span><i class="fa-solid fa-star text-yellow-400 mr-1"></i> 210</span>
                            <span><i class="fa-solid fa-code-branch mr-1"></i> 35</span>
                            <span
                                class="bg-emerald-100 dark:bg-emerald-800 text-emerald-600 dark:text-emerald-200 px-2 py-1 rounded">Vue.js</span>
                        </div>
                    </a>

                    <!-- Repository 3 -->
                    <a href="https://github.com/shakhawat/php-api-boilerplate" target="_blank"
                        class="group bg-white dark:bg-gray-900 rounded-2xl shadow-xl p-8 flex flex-col hover:shadow-2xl hover:-translate-y-2 transition-all duration-300">
                        <div class="flex items-center mb-4">
                            <i class="fa-brands fa-github text-3xl text-purple-500 mr-3"></i>
                            <h3
                                class="text-xl font-bold text-gray-900 dark:text-white group-hover:text-purple-600 dark:group-hover:text-purple-400 transition-colors">
                                PHP API Boilerplate
                            </h3>
                        </div>
                        <p class="text-gray-600 dark:text-gray-300 mb-4 flex-1">
                            A clean and secure PHP REST API starter with JWT authentication, rate limiting, and OpenAPI
                            docs. Perfect for rapid backend prototyping.
                        </p>
                        <div class="flex items-center space-x-4 text-sm text-gray-500 dark:text-gray-400">
                            <span><i class="fa-solid fa-star text-yellow-400 mr-1"></i> 150</span>
                            <span><i class="fa-solid fa-code-branch mr-1"></i> 22</span>
                            <span
                                class="bg-purple-100 dark:bg-purple-800 text-purple-600 dark:text-purple-200 px-2 py-1 rounded">PHP</span>
                        </div>
                    </a>
                    <!-- Repository 1 -->
                    <a href="https://github.com/shakhawat/laravel-advanced-starter" target="_blank"
                        class="group bg-white dark:bg-gray-900 rounded-2xl shadow-xl p-8 flex flex-col hover:shadow-2xl hover:-translate-y-2 transition-all duration-300">
                        <div class="flex items-center mb-4">
                            <i class="fa-brands fa-github text-3xl text-indigo-500 mr-3"></i>
                            <h3
                                class="text-xl font-bold text-gray-900 dark:text-white group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition-colors">
                                Laravel Advanced Starter
                            </h3>
                        </div>
                        <p class="text-gray-600 dark:text-gray-300 mb-4 flex-1">
                            A boilerplate for scalable Laravel projects with built-in authentication, REST API
                            structure, and Docker support. Used by 500+ developers.
                        </p>
                        <div class="flex items-center space-x-4 text-sm text-gray-500 dark:text-gray-400">
                            <span><i class="fa-solid fa-star text-yellow-400 mr-1"></i> 320</span>
                            <span><i class="fa-solid fa-code-branch mr-1"></i> 60</span>
                            <span
                                class="bg-indigo-100 dark:bg-indigo-800 text-indigo-600 dark:text-indigo-200 px-2 py-1 rounded">Laravel</span>
                        </div>
                    </a>

                    <!-- Repository 2 -->
                    <a href="https://github.com/shakhawat/vue-tailwind-dashboard" target="_blank"
                        class="group bg-white dark:bg-gray-900 rounded-2xl shadow-xl p-8 flex flex-col hover:shadow-2xl hover:-translate-y-2 transition-all duration-300">
                        <div class="flex items-center mb-4">
                            <i class="fa-brands fa-github text-3xl text-emerald-500 mr-3"></i>
                            <h3
                                class="text-xl font-bold text-gray-900 dark:text-white group-hover:text-emerald-600 dark:group-hover:text-emerald-400 transition-colors">
                                Vue Tailwind Dashboard
                            </h3>
                        </div>
                        <p class="text-gray-600 dark:text-gray-300 mb-4 flex-1">
                            An open-source admin dashboard template built with Vue.js and Tailwind CSS. Features
                            authentication, charts, and responsive layouts.
                        </p>
                        <div class="flex items-center space-x-4 text-sm text-gray-500 dark:text-gray-400">
                            <span><i class="fa-solid fa-star text-yellow-400 mr-1"></i> 210</span>
                            <span><i class="fa-solid fa-code-branch mr-1"></i> 35</span>
                            <span
                                class="bg-emerald-100 dark:bg-emerald-800 text-emerald-600 dark:text-emerald-200 px-2 py-1 rounded">Vue.js</span>
                        </div>
                    </a>

                    <!-- Repository 3 -->
                    <a href="https://github.com/shakhawat/php-api-boilerplate" target="_blank"
                        class="group bg-white dark:bg-gray-900 rounded-2xl shadow-xl p-8 flex flex-col hover:shadow-2xl hover:-translate-y-2 transition-all duration-300">
                        <div class="flex items-center mb-4">
                            <i class="fa-brands fa-github text-3xl text-purple-500 mr-3"></i>
                            <h3
                                class="text-xl font-bold text-gray-900 dark:text-white group-hover:text-purple-600 dark:group-hover:text-purple-400 transition-colors">
                                PHP API Boilerplate
                            </h3>
                        </div>
                        <p class="text-gray-600 dark:text-gray-300 mb-4 flex-1">
                            A clean and secure PHP REST API starter with JWT authentication, rate limiting, and OpenAPI
                            docs. Perfect for rapid backend prototyping.
                        </p>
                        <div class="flex items-center space-x-4 text-sm text-gray-500 dark:text-gray-400">
                            <span><i class="fa-solid fa-star text-yellow-400 mr-1"></i> 150</span>
                            <span><i class="fa-solid fa-code-branch mr-1"></i> 22</span>
                            <span
                                class="bg-purple-100 dark:bg-purple-800 text-purple-600 dark:text-purple-200 px-2 py-1 rounded">PHP</span>
                        </div>
                    </a>

                </div>
            </div>
        </section>


        <!-- 4.65. Certifications Section -->
        <section id="certifications" class="py-16 bg-gray-100 dark:bg-gray-800 transition-colors duration-500">
            <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-4xl font-extrabold text-center text-gray-900 dark:text-white mb-12">
                    <span class="border-b-4 border-indigo-500 pb-1">Certifications</span>
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <!-- Certification 1 -->
                    <div
                        class="bg-white dark:bg-gray-900 rounded-2xl shadow-xl p-8 flex items-center transition-colors duration-500">
                        <img src="https://placehold.co/80x80/4f46e5/fff?text=Cert" alt="Certificate"
                            class="w-20 h-20 rounded-xl mr-6 object-cover border-4 border-indigo-200 dark:border-indigo-700">
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-1">Laravel Certified
                                Developer</h3>
                            <p class="text-gray-600 dark:text-gray-300 text-sm mb-1">Laravel Certification Program</p>
                            <span class="text-xs text-gray-500 dark:text-gray-400">Issued: 2022</span>
                        </div>
                    </div>
                    <!-- Certification 2 -->
                    <div
                        class="bg-white dark:bg-gray-900 rounded-2xl shadow-xl p-8 flex items-center transition-colors duration-500">
                        <img src="https://placehold.co/80x80/8b5cf6/fff?text=Cert" alt="Certificate"
                            class="w-20 h-20 rounded-xl mr-6 object-cover border-4 border-violet-200 dark:border-violet-700">
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-1">Full-Stack Web Development
                            </h3>
                            <p class="text-gray-600 dark:text-gray-300 text-sm mb-1">Coursera (University of Michigan)
                            </p>
                            <span class="text-xs text-gray-500 dark:text-gray-400">Issued: 2021</span>
                        </div>
                    </div>
                    <!-- Certification 3 -->
                    <div
                        class="bg-white dark:bg-gray-900 rounded-2xl shadow-xl p-8 flex items-center transition-colors duration-500">
                        <img src="https://placehold.co/80x80/ec4899/fff?text=Cert" alt="Certificate"
                            class="w-20 h-20 rounded-xl mr-6 object-cover border-4 border-pink-200 dark:border-pink-700">
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-1">AWS Certified Cloud
                                Practitioner</h3>
                            <p class="text-gray-600 dark:text-gray-300 text-sm mb-1">Amazon Web Services</p>
                            <span class="text-xs text-gray-500 dark:text-gray-400">Issued: 2023</span>
                        </div>
                    </div>
                    <!-- Certification 4 -->
                    <div
                        class="bg-white dark:bg-gray-900 rounded-2xl shadow-xl p-8 flex items-center transition-colors duration-500">
                        <img src="https://placehold.co/80x80/14b8a6/fff?text=Cert" alt="Certificate"
                            class="w-20 h-20 rounded-xl mr-6 object-cover border-4 border-teal-200 dark:border-teal-700">
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-1">Modern JavaScript (ES6+)
                            </h3>
                            <p class="text-gray-600 dark:text-gray-300 text-sm mb-1">Udemy Online Course</p>
                            <span class="text-xs text-gray-500 dark:text-gray-400">Issued: 2020</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- 4.7. Services Section -->
        <section id="services" class="py-16 bg-white dark:bg-gray-900 transition-colors duration-500">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-4xl font-extrabold text-center text-gray-900 dark:text-white mb-12">
                    <span class="border-b-4 border-indigo-500 pb-1">My Services</span>
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Service 1 -->
                    <div
                        class="bg-gray-100 dark:bg-gray-800 rounded-2xl shadow-xl p-8 text-center transition-colors duration-500 hover:shadow-2xl hover:-translate-y-2">
                        <i class="fa-solid fa-code text-5xl text-indigo-500 mb-4"></i>
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">Web Application Development
                        </h3>
                        <p class="text-gray-600 dark:text-gray-400 text-base">Custom, scalable web apps using Laravel
                            and modern frontend frameworks for your business needs.</p>
                    </div>
                    <!-- Service 2 -->
                    <div
                        class="bg-gray-100 dark:bg-gray-800 rounded-2xl shadow-xl p-8 text-center transition-colors duration-500 hover:shadow-2xl hover:-translate-y-2">
                        <i class="fa-solid fa-database text-5xl text-violet-500 mb-4"></i>
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">API Development & Integration
                        </h3>
                        <p class="text-gray-600 dark:text-gray-400 text-base">Robust RESTful and GraphQL APIs,
                            third-party integrations, and secure data exchange solutions.</p>
                    </div>
                    <!-- Service 3 -->
                    <div
                        class="bg-gray-100 dark:bg-gray-800 rounded-2xl shadow-xl p-8 text-center transition-colors duration-500 hover:shadow-2xl hover:-translate-y-2">
                        <i class="fa-solid fa-mobile-screen-button text-5xl text-pink-500 mb-4"></i>
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">Responsive UI/UX Design</h3>
                        <p class="text-gray-600 dark:text-gray-400 text-base">Pixel-perfect, mobile-friendly interfaces
                            with Tailwind CSS and best UX practices.</p>
                    </div>
                    <!-- Service 4 -->
                    <div
                        class="bg-gray-100 dark:bg-gray-800 rounded-2xl shadow-xl p-8 text-center transition-colors duration-500 hover:shadow-2xl hover:-translate-y-2">
                        <i class="fa-solid fa-shield-halved text-5xl text-teal-500 mb-4"></i>
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">Security & Performance</h3>
                        <p class="text-gray-600 dark:text-gray-400 text-base">Implementing authentication,
                            authorization, and optimization for secure and fast web solutions.</p>
                    </div>
                    <!-- Service 5 -->
                    <div
                        class="bg-gray-100 dark:bg-gray-800 rounded-2xl shadow-xl p-8 text-center transition-colors duration-500 hover:shadow-2xl hover:-translate-y-2">
                        <i class="fa-solid fa-cloud-arrow-up text-5xl text-sky-500 mb-4"></i>
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">Cloud Deployment</h3>
                        <p class="text-gray-600 dark:text-gray-400 text-base">Deploying and managing web applications
                            on
                            AWS, DigitalOcean, and other cloud platforms.</p>
                    </div>
                    <!-- Service 6 -->
                    <div
                        class="bg-gray-100 dark:bg-gray-800 rounded-2xl shadow-xl p-8 text-center transition-colors duration-500 hover:shadow-2xl hover:-translate-y-2">
                        <i class="fa-solid fa-gears text-5xl text-yellow-500 mb-4"></i>
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">Maintenance & Support</h3>
                        <p class="text-gray-600 dark:text-gray-400 text-base">Ongoing support, bug fixes, and feature
                            enhancements to keep your project running smoothly.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- 4.8. Testimonials Section -->
        <section id="testimonials" class="py-16 bg-gray-100 dark:bg-gray-800 transition-colors duration-500">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-4xl font-extrabold text-center text-gray-900 dark:text-white mb-12">
                    <span class="border-b-4 border-indigo-500 pb-1">Testimonials</span>
                </h2>
                <div class="swiper testimonials-swiper">
                    <div class="swiper-wrapper">

                        <!-- Testimonial 1 -->
                        <div class="swiper-slide">
                            <div
                                class="bg-white dark:bg-gray-900 rounded-2xl shadow-xl p-8 flex flex-col items-center text-center transition-colors duration-500">
                                <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="John Doe"
                                    class="w-20 h-20 rounded-full mb-4 border-4 border-indigo-500 object-cover">
                                <h3 class="text-lg font-bold text-gray-900 dark:text-white">John Doe</h3>
                                <p class="text-sm text-indigo-500 mb-3">Senior Software Engineer, TechCorp</p>
                                <p class="text-gray-600 dark:text-gray-300 italic">"Shakhawat is a highly skilled
                                    Laravel developer. His attention to detail and dedication to clean code made our
                                    project a huge success."</p>
                            </div>
                        </div>

                        <!-- Testimonial 2 -->
                        <div class="swiper-slide">
                            <div
                                class="bg-white dark:bg-gray-900 rounded-2xl shadow-xl p-8 flex flex-col items-center text-center transition-colors duration-500">
                                <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Jane Smith"
                                    class="w-20 h-20 rounded-full mb-4 border-4 border-violet-500 object-cover">
                                <h3 class="text-lg font-bold text-gray-900 dark:text-white">Jane Smith</h3>
                                <p class="text-sm text-violet-500 mb-3">Project Manager, Webify</p>
                                <p class="text-gray-600 dark:text-gray-300 italic">"Working with Shakhawat was a
                                    pleasure. He delivered robust APIs and always communicated clearly throughout the
                                    process."</p>
                            </div>
                        </div>

                        <!-- Testimonial 3 -->
                        <div class="swiper-slide">
                            <div
                                class="bg-white dark:bg-gray-900 rounded-2xl shadow-xl p-8 flex flex-col items-center text-center transition-colors duration-500">
                                <img src="https://randomuser.me/api/portraits/men/65.jpg" alt="Michael Lee"
                                    class="w-20 h-20 rounded-full mb-4 border-4 border-pink-500 object-cover">
                                <h3 class="text-lg font-bold text-gray-900 dark:text-white">Michael Lee</h3>
                                <p class="text-sm text-pink-500 mb-3">CTO, StartupX</p>
                                <p class="text-gray-600 dark:text-gray-300 italic">"His expertise in both backend and
                                    frontend made our SaaS platform reliable and user-friendly. Highly recommended!"</p>
                            </div>
                        </div>

                    </div>
                    <!-- Swiper Pagination & Navigation -->
                    <div class="swiper-pagination mt-6"></div>
                    <div class="swiper-button-prev text-indigo-500"></div>
                    <div class="swiper-button-next text-indigo-500"></div>
                </div>
            </div>
        </section>

        <!-- 4.9. Key Achievements Section -->
        <section id="achievements" class="py-16 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-4xl font-extrabold text-center text-gray-900 dark:text-white mb-12">
                <span class="border-b-4 border-indigo-500 pb-1">Key Achievements</span>
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 text-center">
                <!-- Years of Experience -->
                <div
                    class="bg-white dark:bg-gray-800 rounded-2xl shadow-xl p-8 flex flex-col items-center transition-colors duration-500">
                    <i class="fa-solid fa-calendar-check text-5xl text-indigo-500 mb-4"></i>
                    <div class="text-4xl font-extrabold text-gray-900 dark:text-white mb-2">7+</div>
                    <div class="text-lg font-medium text-gray-600 dark:text-gray-300">Years Experience</div>
                </div>
                <!-- Projects Completed -->
                <div
                    class="bg-white dark:bg-gray-800 rounded-2xl shadow-xl p-8 flex flex-col items-center transition-colors duration-500">
                    <i class="fa-solid fa-diagram-project text-5xl text-violet-500 mb-4"></i>
                    <div class="text-4xl font-extrabold text-gray-900 dark:text-white mb-2">50+</div>
                    <div class="text-lg font-medium text-gray-600 dark:text-gray-300">Projects Completed</div>
                </div>
                <!-- Happy Clients -->
                <div
                    class="bg-white dark:bg-gray-800 rounded-2xl shadow-xl p-8 flex flex-col items-center transition-colors duration-500">
                    <i class="fa-solid fa-face-smile text-5xl text-pink-500 mb-4"></i>
                    <div class="text-4xl font-extrabold text-gray-900 dark:text-white mb-2">30+</div>
                    <div class="text-lg font-medium text-gray-600 dark:text-gray-300">Happy Clients</div>
                </div>
                <!-- Hours of Work -->
                <div
                    class="bg-white dark:bg-gray-800 rounded-2xl shadow-xl p-8 flex flex-col items-center transition-colors duration-500">
                    <i class="fa-solid fa-clock text-5xl text-sky-500 mb-4"></i>
                    <div class="text-4xl font-extrabold text-gray-900 dark:text-white mb-2">10,000+</div>
                    <div class="text-lg font-medium text-gray-600 dark:text-gray-300">Hours of Work</div>
                </div>
            </div>
        </section>

        <!-- 4.95. Work With Brands Section -->
        <section id="brands" class="py-16 bg-white dark:bg-gray-900 transition-colors duration-500">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-4xl font-extrabold text-center text-gray-900 dark:text-white mb-12">
                    <span class="border-b-4 border-indigo-500 pb-1">Worked With Brands</span>
                </h2>
                <div class="grid grid-cols-3 sm:grid-cols-4 md:grid-cols-6 gap-8 items-center justify-items-center">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/google/google-original.svg"
                        alt="Google" class="h-12 grayscale hover:grayscale-0 transition duration-300"
                        title="Google">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/microsoft/microsoft-original.svg"
                        alt="Microsoft" class="h-12 grayscale hover:grayscale-0 transition duration-300"
                        title="Microsoft">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/amazon/amazon-original.svg"
                        alt="Amazon" class="h-12 grayscale hover:grayscale-0 transition duration-300"
                        title="Amazon">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/facebook/facebook-original.svg"
                        alt="Facebook" class="h-12 grayscale hover:grayscale-0 transition duration-300"
                        title="Facebook">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/apple/apple-original.svg"
                        alt="Apple" class="h-12 grayscale hover:grayscale-0 transition duration-300"
                        title="Apple">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/ibm/ibm-original.svg" alt="IBM"
                        class="h-12 grayscale hover:grayscale-0 transition duration-300" title="IBM">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/netflix/netflix-original.svg"
                        alt="Netflix" class="h-12 grayscale hover:grayscale-0 transition duration-300"
                        title="Netflix">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/spotify/spotify-original.svg"
                        alt="Spotify" class="h-12 grayscale hover:grayscale-0 transition duration-300"
                        title="Spotify">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/twitter/twitter-original.svg"
                        alt="Twitter" class="h-12 grayscale hover:grayscale-0 transition duration-300"
                        title="Twitter">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/linkedin/linkedin-original.svg"
                        alt="LinkedIn" class="h-12 grayscale hover:grayscale-0 transition duration-300"
                        title="LinkedIn">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/wordpress/wordpress-original.svg"
                        alt="WordPress" class="h-12 grayscale hover:grayscale-0 transition duration-300"
                        title="WordPress">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/shopify/shopify-original.svg"
                        alt="Shopify" class="h-12 grayscale hover:grayscale-0 transition duration-300"
                        title="Shopify">
                </div>
            </div>
        </section>

        <!-- 5. Contact Section -->
        <section id="contact" class="py-16 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-4xl font-extrabold text-center text-gray-900 dark:text-white mb-12">
                <span class="border-b-4 border-indigo-500 pb-1">Get In Touch</span>
            </h2>

            <div
                class="flex flex-col md:flex-row items-center gap-10 bg-white dark:bg-gray-800 p-8 rounded-2xl shadow-2xl transition-colors duration-500">
                <!-- Left Side: Contact Vector/Icon -->
                <div class="md:w-1/2 flex justify-center">
                    <i class="fa-solid fa-paper-plane text-[15rem] text-indigo-500 opacity-70"></i>
                </div>

                <!-- Right Side: Contact Form -->
                <div class="md:w-1/2 w-full">
                    <form class="space-y-6">
                        <div>
                            <label for="name"
                                class="block text-sm font-medium text-gray-600 dark:text-gray-300">Your
                                Name</label>
                            <input type="text" id="name" name="name" required
                                class="mt-1 block w-full px-4 py-3 bg-gray-100 dark:bg-gray-700 border border-gray-300 dark:border-gray-600 rounded-lg text-gray-900 dark:text-white placeholder-gray-500 dark:placeholder-gray-400 focus:ring-indigo-500 focus:border-indigo-500 transition-colors duration-300 focus:outline-none">
                        </div>
                        <div>
                            <label for="email"
                                class="block text-sm font-medium text-gray-600 dark:text-gray-300">Your
                                Email</label>
                            <input type="email" id="email" name="email" required
                                class="mt-1 block w-full px-4 py-3 bg-gray-100 dark:bg-gray-700 border border-gray-300 dark:border-gray-600 rounded-lg text-gray-900 dark:text-white placeholder-gray-500 dark:placeholder-gray-400 focus:ring-indigo-500 focus:border-indigo-500 transition-colors duration-300 focus:outline-none">
                        </div>
                        <div>
                            <label for="subject"
                                class="block text-sm font-medium text-gray-600 dark:text-gray-300">Subject</label>
                            <input type="text" id="subject" name="subject" required
                                class="mt-1 block w-full px-4 py-3 bg-gray-100 dark:bg-gray-700 border border-gray-300 dark:border-gray-600 rounded-lg text-gray-900 dark:text-white placeholder-gray-500 dark:placeholder-gray-400 focus:ring-indigo-500 focus:border-indigo-500 transition-colors duration-300 focus:outline-none">
                        </div>
                        <div>
                            <label for="message"
                                class="block text-sm font-medium text-gray-600 dark:text-gray-300">Message</label>
                            <textarea id="message" name="message" rows="5" required
                                class="mt-1 block w-full px-4 py-3 bg-gray-100 dark:bg-gray-700 border border-gray-300 dark:border-gray-600 rounded-lg text-gray-900 dark:text-white placeholder-gray-500 dark:placeholder-gray-400 focus:ring-indigo-500 focus:border-indigo-500 transition-colors duration-300 focus:outline-none"></textarea>
                        </div>
                        <div>
                            <button type="submit"
                                class="w-full flex justify-center items-center px-6 py-3 text-base font-medium rounded-xl shadow-lg text-white btn-primary focus:outline-none">
                                <i class="fa-solid fa-paper-plane mr-2"></i> Send Message
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
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
        document.addEventListener('DOMContentLoaded', function() {
            new Swiper('.testimonials-swiper', {
                loop: true,
                grabCursor: true,
                slidesPerView: 1,
                spaceBetween: 32,
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                autoplay: {
                    delay: 6000,
                    disableOnInteraction: false,
                },
            });
        });


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
    </script>
</body>

</html>

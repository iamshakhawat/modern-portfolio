<?php $__env->startSection('content'); ?>
    <main>
        <!-- 1. Header/Hero Section -->
        <section id="home" class="py-16 md:py-24 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 min-h-[80vh] flex items-center">
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
                    <div class="flex justify-center md:justify-start space-x-6 text-2xl text-gray-500 dark:text-gray-400">
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
                            <?php if($about && !empty($about->image)): ?>
                                <img src="<?php echo e(asset('storage/' . $about->image)); ?>" alt="Shakhawat Hosen About"
                                    class="w-full h-full object-cover"
                                    onerror="this.style.display='none'; this.closest('div').innerHTML='<div class=\'flex items-center justify-center w-full h-full bg-gray-200 dark:bg-gray-700\'><i class=\'fa-solid fa-camera text-6xl text-gray-500\'></i></div>'">
                            <?php else: ?>
                                <img src="https://placehold.co/600x600/e5e7eb/374151?text=SH+Photo"
                                    alt="Shakhawat Hosen About" class="w-full h-full object-cover"
                                    onerror="this.style.display='none'; this.closest('div').innerHTML='<div class=\'flex items-center justify-center w-full h-full bg-gray-200 dark:bg-gray-700\'><i class=\'fa-solid fa-camera text-6xl text-gray-500\'></i></div>'">
                            <?php endif; ?>
                        </div>
                    </div>

                    <!-- Right Side: Text -->
                    <div class="md:w-2/3 text-center md:text-left">
                        <h3 class="text-3xl font-bold text-gray-900 dark:text-white mb-4">
                            <?php echo e($about->title ?? 'Laravel Developer & Web Enthusiast'); ?>

                        </h3>
                        <p class="text-lg text-gray-600 dark:text-gray-400 leading-relaxed mb-6">
                            <?php echo nl2br(e($about->description)) ??
                                'I am a passionate Laravel developer with experience in building dynamic and responsive web applications. I specialize in creating clean, efficient, and scalable code while focusing on user experience and performance. My expertise includes working with databases, RESTful APIs, and front-end technologies to deliver complete solutions.'; ?>

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
                        <?php $__currentLoopData = $skills->where('category', 'frontend'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $skill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="skill-card text-center p-3 rounded-xl bg-gray-100 dark:bg-gray-700">
                                <i class="<?php echo e($skill->icon); ?> text-4xl  mb-2" style="color: <?php echo e($skill->color); ?>"></i>
                                <p class="text-sm text-gray-600 dark:text-gray-300"><?php echo e($skill->name); ?></p>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>


                </div>

                <!-- Backend Section -->
                <div class="p-6 bg-white dark:bg-gray-800 rounded-2xl shadow-xl transition-colors duration-500">
                    <h3
                        class="text-2xl font-bold text-gray-900 dark:text-white mb-6 border-b border-gray-200 dark:border-gray-700 pb-3">
                        <i class="fa-solid fa-server mr-2 text-indigo-500 dark:text-indigo-400"></i> Backend
                    </h3>
                    <div class="grid grid-cols-3 sm:grid-cols-5 gap-6">
                        <?php $__currentLoopData = $skills->where('category', 'backend'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $skill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="skill-card text-center p-3 rounded-xl bg-gray-100 dark:bg-gray-700">
                                <i class="<?php echo e($skill->icon); ?> text-4xl  mb-2" style="color: <?php echo e($skill->color); ?>"></i>
                                <p class="text-sm text-gray-600 dark:text-gray-300"><?php echo e($skill->name); ?></p>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>

                <!-- Programming Section -->
                <div class="p-6 bg-white dark:bg-gray-800 rounded-2xl shadow-xl transition-colors duration-500">
                    <h3
                        class="text-2xl font-bold text-gray-900 dark:text-white mb-6 border-b border-gray-200 dark:border-gray-700 pb-3">
                        <i class="fa-solid fa-laptop-code mr-2 text-indigo-500 dark:text-indigo-400"></i> Programming
                    </h3>

                    <div class="grid grid-cols-3 sm:grid-cols-5 gap-6">
                        <?php $__currentLoopData = $skills->where('category', 'programming'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $skill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="skill-card text-center p-3 rounded-xl bg-gray-100 dark:bg-gray-700">
                                <i class="<?php echo e($skill->icon); ?> text-4xl  mb-2" style="color: <?php echo e($skill->color); ?>"></i>
                                <p class="text-sm text-gray-600 dark:text-gray-300"><?php echo e($skill->name); ?></p>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>

                <!-- Tools & Platform Section -->
                <div class="p-6 bg-white dark:bg-gray-800 rounded-2xl shadow-xl transition-colors duration-500">
                    <h3
                        class="text-2xl font-bold text-gray-900 dark:text-white mb-6 border-b border-gray-200 dark:border-gray-700 pb-3">
                        <i class="fa-solid fa-wrench mr-2 text-indigo-500 dark:text-indigo-400"></i> Tools & Platform
                    </h3>

                    <div class="grid grid-cols-3 sm:grid-cols-5 gap-6">
                        <?php $__currentLoopData = $skills->where('category', 'tools'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $skill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="skill-card text-center p-3 rounded-xl bg-gray-100 dark:bg-gray-700">
                                <i class="<?php echo e($skill->icon); ?> text-4xl  mb-2" style="color: <?php echo e($skill->color); ?>"></i>
                                <p class="text-sm text-gray-600 dark:text-gray-300"><?php echo e($skill->name); ?></p>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                    <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a href="<?php echo e(route('project.show', $project->slug)); ?>"
                            class="group block bg-white dark:bg-gray-700/50 rounded-2xl shadow-xl overflow-hidden transform hover:scale-[1.02] transition-all duration-500">
                            <div class="w-full h-48 overflow-hidden">
                                <img src="<?php echo e(asset('storage/' . $project->thumbnail)); ?>"
                                    alt="Project <?php echo e($project->index); ?>"
                                    class="w-full h-full object-cover group-hover:opacity-75 transition-opacity duration-300"
                                    style="border-bottom-left-radius: 2rem; border-bottom-right-radius: 2rem;">
                            </div>

                            <div class="p-6 text-left">
                                <h3
                                    class="text-xl font-bold text-gray-900 dark:text-white mb-2 group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition-colors">
                                    <?php echo e($project->title); ?></h3>
                                <?php $__currentLoopData = $project->categories->take(2); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <span
                                        class="inline-block bg-indigo-600/50 text-indigo-200 text-xs font-semibold px-3 py-1 rounded-full mb-3 mr-2"><?php echo e($category->name); ?></span>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                <p class="text-gray-600 dark:text-gray-400 text-sm mb-4 line-clamp-3">
                                    <?php echo e($project->description); ?></p>

                                <div class="flex space-x-3 text-xl justify-center md:justify-start">
                                    <?php $__currentLoopData = $project->skills->take(11); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $skill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <i class="<?php echo e($skill->icon); ?> " style="color: <?php echo e($skill->color); ?>"
                                            title="<?php echo e($skill->name); ?>"></i>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>
                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>

                <!-- See More Button -->
                <div class="text-center mt-12">
                    <a href="<?php echo e(route('project.all')); ?>"
                        class="px-8 py-3 text-white font-medium rounded-xl shadow-lg btn-primary focus:outline-none transition-all duration-300">
                        See More Projects
                    </a>
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

                        <?php $__empty_1 = true; $__currentLoopData = $educations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $education): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <li class="mb-10 ml-6">
                                <span
                                    class="absolute flex items-center justify-center w-8 h-8 bg-indigo-400 rounded-full -left-4 ring-4 ring-white dark:ring-gray-900 text-white">
                                    <i class="<?php echo e($education->icon); ?>"></i>
                                </span>
                                <h4 class="text-xl font-semibold text-gray-900 dark:text-white"><?php echo e($education->degree); ?>

                                </h4>
                                <p class="text-gray-600 dark:text-gray-300"><?php echo e($education->institution); ?></p>
                                <span
                                    class="block text-sm text-gray-500 dark:text-gray-400 mb-1"><?php echo e($education->years); ?></span>
                                <?php if($education->status === 'Passed'): ?>
                                    <span
                                        class="inline-block px-3 py-1 text-xs font-semibold rounded-full bg-green-100 dark:bg-green-900 text-green-700 dark:text-green-300"><?php echo e($education->status); ?></span>
                                <?php else: ?>
                                    <span
                                        class="inline-block px-3 py-1 text-xs font-semibold rounded-full bg-yellow-100 dark:bg-yellow-900 text-yellow-700 dark:text-yellow-300"><?php echo e($education->status); ?></span>
                                <?php endif; ?>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <li class="mb-10 ml-6">
                                <p class="text-gray-600 dark:text-gray-300">No education details available.</p>
                            </li>
                        <?php endif; ?>
                    </ol>
                </div>
                <!-- Experience Timeline -->
                <div class="md:w-1/2 ml-10">
                    <h3 class="text-2xl font-bold text-indigo-600 dark:text-indigo-400 mb-6 flex items-center">
                        <i class="fa-solid fa-briefcase mr-3"></i> Experience
                    </h3>
                    <ol class="relative border-l-4 border-violet-200 dark:border-violet-700">

                        <?php $__empty_1 = true; $__currentLoopData = $experiences; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $experience): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <li class="mb-10 ml-6">
                                <span
                                    class="absolute flex items-center justify-center w-8 h-8 bg-violet-500 rounded-full -left-4 ring-4 ring-white dark:ring-gray-900 text-white">
                                    <i class="<?php echo e($experience->icon); ?>"></i>
                                </span>
                                <h4 class="text-xl font-semibold text-gray-900 dark:text-white"><?php echo e($experience->title); ?>

                                </h4>
                                <span
                                    class="block text-sm text-gray-500 dark:text-gray-400 mb-1"><?php echo e($experience->duration); ?></span>
                                <p class="text-gray-600 dark:text-gray-300"><?php echo e($experience->company); ?><br>
                                    <small><?php echo e($experience->description); ?></small>
                                </p>

                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <li class="mb-10 ml-6">
                                <p class="text-gray-600 dark:text-gray-300">No experience details available.</p>
                            </li>
                        <?php endif; ?>
                    </ol>
                </div>
            </div>
        </section>

        <!-- 4.6. GitHub / Open Source Work Section -->
        <section id="opensource" class="py-16 bg-gray-100 dark:bg-gray-800 transition-colors duration-500">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-4xl font-extrabold text-center text-gray-900 dark:text-white mb-12">
                    <span class="border-b-4 border-indigo-500 pb-1">Open Source Work</span>
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 " id="repositories">


                </div>
                <div class="text-center mt-12 hidden" id="viewAllBtn">
                    <a href="https://github.com/iamshakhawat?tab=repositories" target="_blank"
                        class="px-8 py-3 text-white font-medium rounded-xl shadow-lg btn-primary focus:outline-none transition-all duration-300">
                        View All Repositories
                    </a>
                </div>

                <div class="flex justify-center items-center" id="loader">
                    <div class="animate-spin rounded-full h-8 w-8 border-b-2 border-indigo-500 mr-4"> </div>
                    <div>Loading...</div>
                </div>
            </div>
        </section>

        <!-- 4.65. Certifications Section -->
        <section id="certifications" class="py-16 bg-white dark:bg-gray-900 transition-colors duration-500">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-4xl font-extrabold text-center text-gray-900 dark:text-white mb-12">
                    <span class="border-b-4 border-indigo-500 pb-1">Certifications</span>
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <?php
                        $certifications = [];
                    ?>
                    <?php $__empty_1 = true; $__currentLoopData = $certifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cert): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <div
                            class="bg-gray-100 dark:bg-gray-800 rounded-2xl shadow-xl p-8 flex flex-col items-center text-center transition-colors duration-500 hover:shadow-2xl hover:-translate-y-2">
                            <img src="<?php echo e(asset('storage/' . $cert->image)); ?>" alt="<?php echo e($cert->title); ?>"
                                class="w-24 h-24 object-cover rounded-full mb-4 border-4 border-indigo-500"
                                onerror="this.style.display='none'; this.closest('div').innerHTML+='<div class=\'w-24 h-24 flex items-center justify-center bg-gray-200 dark:bg-gray-700 rounded-full mb-4\'><i class=\'fa-solid fa-certificate text-4xl text-gray-400\'></i></div>'">
                            <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2"><?php echo e($cert->title); ?></h3>
                            <span
                                class="block text-sm text-indigo-500 dark:text-indigo-400 mb-2"><?php echo e($cert->duration); ?></span>
                            <p class="text-gray-600 dark:text-gray-300 text-base"><?php echo e($cert->description); ?></p>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <div class="col-span-3 text-center text-gray-600 dark:text-gray-300">
                            No certifications available.
                        </div>
                    <?php endif; ?>
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
                <!-- Section Header -->
                <div class="text-center mb-16">
                    <h2 class="text-4xl md:text-5xl font-extrabold text-gray-900 dark:text-white mb-4">
                        Trusted by Leading Brands
                    </h2>
                    <div class="w-24 h-1 bg-gradient-to-r from-indigo-500 to-purple-500 mx-auto mb-6"></div>
                    <p class="text-lg text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">
                        Proud to collaborate with industry giants and innovative companies worldwide
                    </p>
                </div>

                <!-- Brand Cards Grid -->
                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-6">
                    <!-- Google -->
                    <div
                        class="brand-card bg-white dark:bg-gray-800 rounded-xl p-6 shadow-md hover:shadow-xl flex flex-col items-center justify-center group">
                        <div class="w-16 h-16 mb-4 flex items-center justify-center overflow-hidden">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/google/google-original.svg"
                                alt="Google" class="h-full w-full object-contain grayscale group-hover:grayscale-0">
                        </div>
                        <h3 class="text-sm font-semibold text-gray-800 dark:text-gray-200 text-center">Google</h3>
                    </div>

                    <!-- Microsoft -->
                    <div
                        class="brand-card bg-white dark:bg-gray-800 rounded-xl p-6 shadow-md hover:shadow-xl flex flex-col items-center justify-center group">
                        <div class="w-16 h-16 mb-4 flex items-center justify-center overflow-hidden">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/microsoft/microsoft-original.svg"
                                alt="Microsoft" class="h-full w-full object-contain grayscale group-hover:grayscale-0">
                        </div>
                        <h3 class="text-sm font-semibold text-gray-800 dark:text-gray-200 text-center">Microsoft</h3>
                    </div>

                    <!-- Amazon -->
                    <div
                        class="brand-card bg-white dark:bg-gray-800 rounded-xl p-6 shadow-md hover:shadow-xl flex flex-col items-center justify-center group">
                        <div class="w-16 h-16 mb-4 flex items-center justify-center overflow-hidden">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/amazon/amazon-original.svg"
                                alt="Amazon" class="h-full w-full object-contain grayscale group-hover:grayscale-0">
                        </div>
                        <h3 class="text-sm font-semibold text-gray-800 dark:text-gray-200 text-center">Amazon</h3>
                    </div>

                    <!-- Meta (Facebook) -->
                    <div
                        class="brand-card bg-white dark:bg-gray-800 rounded-xl p-6 shadow-md hover:shadow-xl flex flex-col items-center justify-center group">
                        <div class="w-16 h-16 mb-4 flex items-center justify-center overflow-hidden">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/facebook/facebook-original.svg"
                                alt="Meta" class="h-full w-full object-contain grayscale group-hover:grayscale-0">
                        </div>
                        <h3 class="text-sm font-semibold text-gray-800 dark:text-gray-200 text-center">Meta</h3>
                    </div>

                    <!-- Apple -->
                    <div
                        class="brand-card bg-white dark:bg-gray-800 rounded-xl p-6 shadow-md hover:shadow-xl flex flex-col items-center justify-center group">
                        <div class="w-16 h-16 mb-4 flex items-center justify-center overflow-hidden">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/apple/apple-original.svg"
                                alt="Apple" class="h-full w-full object-contain grayscale group-hover:grayscale-0">
                        </div>
                        <h3 class="text-sm font-semibold text-gray-800 dark:text-gray-200 text-center">Apple</h3>
                    </div>

                    <!-- IBM -->
                    <div
                        class="brand-card bg-white dark:bg-gray-800 rounded-xl p-6 shadow-md hover:shadow-xl flex flex-col items-center justify-center group">
                        <div class="w-16 h-16 mb-4 flex items-center justify-center overflow-hidden">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/ibm/ibm-original.svg"
                                alt="IBM" class="h-full w-full object-contain grayscale group-hover:grayscale-0">
                        </div>
                        <h3 class="text-sm font-semibold text-gray-800 dark:text-gray-200 text-center">IBM</h3>
                    </div>

                    <!-- Netflix -->
                    <div
                        class="brand-card bg-white dark:bg-gray-800 rounded-xl p-6 shadow-md hover:shadow-xl flex flex-col items-center justify-center group">
                        <div class="w-16 h-16 mb-4 flex items-center justify-center overflow-hidden">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/netflix/netflix-original.svg"
                                alt="Netflix" class="h-full w-full object-contain grayscale group-hover:grayscale-0">
                        </div>
                        <h3 class="text-sm font-semibold text-gray-800 dark:text-gray-200 text-center">Netflix</h3>
                    </div>

                    <!-- Spotify -->
                    <div
                        class="brand-card bg-white dark:bg-gray-800 rounded-xl p-6 shadow-md hover:shadow-xl flex flex-col items-center justify-center group">
                        <div class="w-16 h-16 mb-4 flex items-center justify-center overflow-hidden">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/spotify/spotify-original.svg"
                                alt="Spotify" class="h-full w-full object-contain grayscale group-hover:grayscale-0">
                        </div>
                        <h3 class="text-sm font-semibold text-gray-800 dark:text-gray-200 text-center">Spotify</h3>
                    </div>

                    <!-- Twitter -->
                    <div
                        class="brand-card bg-white dark:bg-gray-800 rounded-xl p-6 shadow-md hover:shadow-xl flex flex-col items-center justify-center group">
                        <div class="w-16 h-16 mb-4 flex items-center justify-center overflow-hidden">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/twitter/twitter-original.svg"
                                alt="Twitter" class="h-full w-full object-contain grayscale group-hover:grayscale-0">
                        </div>
                        <h3 class="text-sm font-semibold text-gray-800 dark:text-gray-200 text-center">Twitter</h3>
                    </div>

                    <!-- LinkedIn -->
                    <div
                        class="brand-card bg-white dark:bg-gray-800 rounded-xl p-6 shadow-md hover:shadow-xl flex flex-col items-center justify-center group">
                        <div class="w-16 h-16 mb-4 flex items-center justify-center overflow-hidden">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/linkedin/linkedin-original.svg"
                                alt="LinkedIn" class="h-full w-full object-contain grayscale group-hover:grayscale-0">
                        </div>
                        <h3 class="text-sm font-semibold text-gray-800 dark:text-gray-200 text-center">LinkedIn</h3>
                    </div>

                    <!-- WordPress -->
                    <div
                        class="brand-card bg-white dark:bg-gray-800 rounded-xl p-6 shadow-md hover:shadow-xl flex flex-col items-center justify-center group">
                        <div class="w-16 h-16 mb-4 flex items-center justify-center overflow-hidden">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/wordpress/wordpress-original.svg"
                                alt="WordPress" class="h-full w-full object-contain grayscale group-hover:grayscale-0">
                        </div>
                        <h3 class="text-sm font-semibold text-gray-800 dark:text-gray-200 text-center">WordPress</h3>
                    </div>

                    <!-- Shopify -->
                    <div
                        class="brand-card bg-white dark:bg-gray-800 rounded-xl p-6 shadow-md hover:shadow-xl flex flex-col items-center justify-center group">
                        <div class="w-16 h-16 mb-4 flex items-center justify-center overflow-hidden">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/shopify/shopify-original.svg"
                                alt="Shopify" class="h-full w-full object-contain grayscale group-hover:grayscale-0">
                        </div>
                        <h3 class="text-sm font-semibold text-gray-800 dark:text-gray-200 text-center">Shopify</h3>
                    </div>
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
                            <label for="name" class="block text-sm font-medium text-gray-600 dark:text-gray-300">Your
                                Name</label>
                            <input type="text" id="name" name="name" required
                                class="mt-1 block w-full px-4 py-3 bg-gray-100 dark:bg-gray-700 border border-gray-300 dark:border-gray-600 rounded-lg text-gray-900 dark:text-white placeholder-gray-500 dark:placeholder-gray-400 focus:ring-indigo-500 focus:border-indigo-500 transition-colors duration-300 focus:outline-none">
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-600 dark:text-gray-300">Your
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
<?php $__env->stopSection(); ?>
<?php $__env->startPush('js'); ?>
    <script>
        $(document).ready(function() {
            const username = 'iamshakhawat';

            // Color palette for repositories
            const colorThemes = [{
                    icon: 'text-indigo-500',
                    hover: 'group-hover:text-indigo-600 dark:group-hover:text-indigo-400',
                    badge: 'bg-indigo-100 dark:bg-indigo-800 text-indigo-600 dark:text-indigo-200'
                },
                {
                    icon: 'text-emerald-500',
                    hover: 'group-hover:text-emerald-600 dark:group-hover:text-emerald-400',
                    badge: 'bg-emerald-100 dark:bg-emerald-800 text-emerald-600 dark:text-emerald-200'
                },
                {
                    icon: 'text-purple-500',
                    hover: 'group-hover:text-purple-600 dark:group-hover:text-purple-400',
                    badge: 'bg-purple-100 dark:bg-purple-800 text-purple-600 dark:text-purple-200'
                },
                {
                    icon: 'text-rose-500',
                    hover: 'group-hover:text-rose-600 dark:group-hover:text-rose-400',
                    badge: 'bg-rose-100 dark:bg-rose-800 text-rose-600 dark:text-rose-200'
                },
                {
                    icon: 'text-amber-500',
                    hover: 'group-hover:text-amber-600 dark:group-hover:text-amber-400',
                    badge: 'bg-amber-100 dark:bg-amber-800 text-amber-600 dark:text-amber-200'
                },
                {
                    icon: 'text-cyan-500',
                    hover: 'group-hover:text-cyan-600 dark:group-hover:text-cyan-400',
                    badge: 'bg-cyan-100 dark:bg-cyan-800 text-cyan-600 dark:text-cyan-200'
                }
            ];

            function createRepoCard(repo, index) {
                const theme = colorThemes[index % colorThemes.length];

                return `
            <a href="${repo.html_url}" target="_blank"
                class="group bg-white dark:bg-gray-900 rounded-2xl shadow-xl p-8 flex flex-col hover:shadow-2xl hover:-translate-y-2 transition-all duration-300">
                <div class="flex items-center mb-4">
                    <i class="fa-brands fa-github text-3xl ${theme.icon} mr-3"></i>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white ${theme.hover} transition-colors">
                        ${repo.name}
                    </h3>
                </div>
                <p class="text-gray-600 dark:text-gray-300 mb-4 flex-1">
                    ${repo.description && repo.description.length > 120 ? repo.description.substring(0, 120) + '...' : (repo.description || 'No description available')}
                </p>
                <div class="flex items-center space-x-4 text-sm text-gray-500 dark:text-gray-400">
                    <span><i class="fa-solid fa-star text-yellow-400 mr-1"></i> ${repo.stargazers_count}</span>
                    <span><i class="fa-solid fa-code-branch mr-1"></i> ${repo.forks_count}</span>
                    ${repo.language ? `<span class="${theme.badge} px-2 py-1 rounded">${repo.language}</span>` : ''}
                </div>
            </a>
        `;
            }

            // Calculate popularity score (mimics GitHub's algorithm)
            function calculatePopularity(repo) {
                return (repo.stargazers_count * 2) + (repo.forks_count * 1.5) + (repo.watchers_count * 1);
            }

            // Fetch repositories from GitHub API
            $.ajax({
                url: `https://api.github.com/users/${username}/repos?per_page=100`,
                method: 'GET',
                success: function(repos) {
                    // Hide loading, show repositories
                    $('#loader').hide();
                    $('#repositories').removeClass('hidden');
                    $('#viewAllBtn').removeClass('hidden');

                    // Filter out forks and sort by popularity
                    const popularRepos = repos
                        .filter(repo => !repo.fork) // Exclude forked repositories
                        .sort((a, b) => calculatePopularity(b) - calculatePopularity(a))
                        .slice(0, 6);

                    // Render repository cards
                    popularRepos.forEach((repo, index) => {
                        $('#repositories').append(createRepoCard(repo, index));
                    });
                },
                error: function(xhr, status, error) {
                    console.error('Error fetching repositories:', error);
                    $('#loader').hide();
                    $('#error').removeClass('hidden');
                }
            });
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layout.web.web', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Shakhawat\Desktop\Portfolio\resources\views/home.blade.php ENDPATH**/ ?>
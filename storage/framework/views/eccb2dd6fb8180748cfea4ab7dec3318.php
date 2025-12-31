<?php $__env->startSection('content'); ?>
    <main>
        <!-- 1. Header/Hero Section -->
        <section id="home" class="py-16 md:py-24  max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 min-h-[80vh] flex items-center">
            <div class="flex flex-col-reverse flex-col md:flex-row items-center justify-between gap-5 w-full">

                <!-- Left Side: Text and Buttons -->
                <div class="md:w-1/2  lg:ml-12">
                    <p class="text-xl text-center md:text-left text-indigo-500 dark:text-indigo-400 font-semibold mb-2">Hello, I'm</p>
                    <h1 class="text-5xl text-center md:text-left sm:text-7xl font-extrabold leading-tight text-gray-900 dark:text-white mb-4">
                        Shakhawat
                    </h1>
                    <h2 class="text-2xl text-center md:text-left sm:text-3xl font-medium text-gray-600 dark:text-gray-400 mb-6">
                        Professional <span class="text-violet-600 dark:text-violet-400"><?php echo e($hero->title); ?></span>
                    </h2>
                    <p class="text-lg  md:text-left text-gray-600 dark:text-gray-400 text-justify mb-10 max-w-lg mx-2 p-1 ">
                        <?php echo e($hero->subtitle); ?>

                    </p>

                    <!-- Buttons -->
                    <div class="flex justify-center md:justify-start space-x-4 mb-10">
                        <a href="<?php echo e(route('cv.download')); ?>" target="_blank"
                            class="inline-flex items-center px-6 py-3 text-base font-medium rounded-xl text-white btn-primary focus:outline-none">
                            <i class="fa-solid fa-file-arrow-down mr-3"></i> Download CV
                        </a>
                        <a href="#contact"
                            class="inline-flex items-center px-6 py-3 text-base font-medium rounded-xl btn-secondary focus:outline-none">
                            <i class="fa-solid fa-envelope mr-3"></i> Contact Me
                        </a>
                    </div>

                    <!-- Social Media Icons -->
                    <div class="flex justify-center md:justify-start space-x-6 text-2xl text-gray-500 dark:text-gray-400">
                        <?php $__currentLoopData = $socials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $social): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a href="<?php echo e($social->url); ?>" target="_blank"
                                class=" transition-colors duration-300"
                                onmouseover="this.style.color='<?php echo e($social->color); ?>'" onmouseout="this.style.color=''"
                                title="<?php echo e($social->name); ?>">
                                <i class="fab <?php echo e($social->icon); ?>"></i>
                            </a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            
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
                            <?php if($hero->hero_img && !empty($hero->hero_img)): ?>
                                <img src="<?php echo e(asset('storage/' . $hero->hero_img)); ?>"
                                    alt="Shakhawat Hosen Profile" class="w-full h-full object-cover rounded-full p-2"
                                    onerror="this.style.display='none'; this.closest('.profile-photo-inner').innerHTML='<i class=\'fa-solid fa-user text-9xl text-gray-500\'></i>'">
                            <?php else: ?>
                            <img src="https://placehold.co/270x270/f3f4f6/1f2937?text=SHAKHAWAT"
                                alt="Shakhawat Hosen Profile" class="w-full h-full object-cover rounded-full p-2"
                                onerror="this.style.display='none'; this.closest('.profile-photo-inner').innerHTML='<i class=\'fa-solid fa-user text-9xl text-gray-500\'></i>'">
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 2. About Me Section -->
        <section id="about" class="<?php echo e($about == "" ? 'hidden': ''); ?> py-16 bg-gray-100 dark:bg-gray-800 transition-colors duration-500">
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
                        <p class="text-lg text-gray-600 dark:text-gray-400 text-justify md:text-left mx-2 leading-relaxed mb-6">
                            <?php echo nl2br(e($about->description ?? '')) ??
                                'I am a passionate Laravel developer with experience in building dynamic and responsive web applications. I specialize in creating clean, efficient, and scalable code while focusing on user experience and performance. My expertise includes working with databases, RESTful APIs, and front-end technologies to deliver complete solutions.'; ?>

                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- 3. Skill Section -->
        <section id="skill" class="<?php echo e(count($skills) > 0 ? '' : 'hidden'); ?> py-16 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
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
        <section id="projects" class="<?php echo e(count($projects) > 0 ? '' : 'hidden'); ?> py-16 bg-gray-100 dark:bg-gray-800 transition-colors duration-500">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-4xl font-extrabold text-center text-gray-900 dark:text-white mb-12">
                    <span class="border-b-4 border-indigo-500 pb-1">Featured Projects</span>
                </h2>

                <!-- Projects Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                    <!-- Project Card Component -->
                    <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a href="<?php echo e(route('project.show', $project->slug)); ?>"
                            class="group block bg-white dark:bg-gray-700/50 rounded-2xl shadow-xl overflow-hidden transform hover:scale-[1.02] ">
                            <div class="w-full h-48 overflow-hidden">
                                <img src="<?php echo e(asset('storage/' . $project->thumbnail)); ?>"
                                    alt="Project <?php echo e($project->index); ?>"
                                    class="w-full h-full object-cover "
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
                                    <?php echo e($project->short_description); ?></p>

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
        <section id="timeline" class=" <?php echo e(count($educations) > 0 || count($experiences) > 0 ? '' : 'hidden'); ?> py-16 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-4xl font-extrabold text-center leading-relaxed text-gray-900 dark:text-white mb-12">
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
        <section id="certifications" class="<?php echo e(count($certifications) > 0 ? '' : 'hidden'); ?> py-16 bg-white dark:bg-gray-900 transition-colors duration-500">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-4xl font-extrabold text-center text-gray-900 dark:text-white mb-12">
                    <span class="border-b-4 border-indigo-500 pb-1">Certifications</span>
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    
                    <?php $__empty_1 = true; $__currentLoopData = $certifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cert): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <div
                            class="bg-gray-100 dark:bg-gray-800 rounded-2xl shadow-xl p-8 flex flex-col items-center text-center transition-colors duration-500 hover:shadow-2xl hover:-translate-y-2">
                            <img src="<?php echo e(asset('storage/' . $cert->certificate_path)); ?>" alt="<?php echo e($cert->name); ?>"
                                class=" object-cover rounded mb-4 border-1 border-indigo-500"
                                onerror="this.style.display='none'; this.closest('div').innerHTML+='<div class=\'w-24 h-24 flex items-center justify-center bg-gray-200 dark:bg-gray-700 rounded-full mb-4\'><i class=\'fa-solid fa-certificate text-4xl text-gray-400\'></i></div>'">
                            <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2"><?php echo e($cert->name); ?></h3>
                            <span
                                class="block text-sm text-indigo-500 dark:text-indigo-400 mb-2"><?php echo e($cert->date_obtained); ?></span>
                            <p class="text-gray-600 dark:text-gray-300 text-base"><?php echo e($cert->score); ?></p>
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
        <section id="services" class="<?php echo e(count($services) > 0 ? '' : 'hidden'); ?> py-16 bg-white dark:bg-gray-900 transition-colors duration-500">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-4xl font-extrabold text-center text-gray-900 dark:text-white mb-12">
                    <span class="border-b-4 border-indigo-500 pb-1">My Services</span>
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <?php $__empty_1 = true; $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <div
                            class="bg-gray-100 dark:bg-gray-800 rounded-2xl shadow-xl p-8 text-center transition-colors duration-500 hover:shadow-2xl hover:-translate-y-2">
                            <i class="<?php echo e($service->icon); ?> text-5xl  mb-4" style="color: <?php echo e($service->color); ?>;"></i>
                            <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2"><?php echo e($service->title); ?></h3>
                            <p class="text-gray-600 dark:text-gray-400 text-base"><?php echo e($service->description); ?></p>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <div class="col-span-3 text-center text-gray-600 dark:text-gray-300">
                            No services available.
                        </div>
                    <?php endif; ?>

                </div>
            </div>
        </section>

        <!-- 4.8. Testimonials Section -->
        <section id="testimonials" class="<?php echo e(count($testimonials) > 0 ? '' : 'hidden'); ?> py-16 bg-gray-100 dark:bg-gray-800 transition-colors duration-500">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-4xl font-extrabold text-center text-gray-900 dark:text-white mb-12">
                    <span class="border-b-4 border-indigo-500 pb-1">Testimonials</span>
                </h2>
                <div class="swiper testimonials-swiper">
                    <div class="swiper-wrapper">
                       
                        <?php $__empty_1 = true; $__currentLoopData = $testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testimonial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <div class="swiper-slide">
                                <div
                                    class="bg-white dark:bg-gray-900 rounded-2xl shadow-xl p-8 flex flex-col items-center text-center transition-colors duration-500">
                                    <img src="<?php echo e($testimonial->photo ? asset('storage/'.$testimonial->photo) : 'https://placehold.co/150x150?text=No+Image'); ?>" alt="<?php echo e($testimonial->name); ?>"
                                        class="w-20 h-20 rounded-full mb-4 border-4 border-indigo-500 object-cover">
                                    <h3 class="text-lg font-bold text-gray-900 dark:text-white"><?php echo e($testimonial->name); ?></h3>
                                    <p class="text-sm text-indigo-500 mb-3"><?php echo e($testimonial->position); ?></p>
                                    <p class="text-gray-600 dark:text-gray-300 italic">"<?php echo e($testimonial->message); ?>"</p>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <div class="swiper-slide">
                                <div
                                    class="bg-white dark:bg-gray-900 rounded-2xl shadow-xl p-8 flex flex-col items-center text-center transition-colors duration-500">

                                    <h3 class="text-lg font-bold text-gray-900 dark:text-white">No Testimonials</h3>
                                </div>
                            </div>
                        <?php endif; ?>



                    </div>
                    <!-- Swiper Pagination & Navigation -->
                    <div class="swiper-pagination mt-6"></div>
                    <div class="swiper-button-prev text-indigo-500"></div>
                    <div class="swiper-button-next text-indigo-500"></div>
                </div>
            </div>
        </section>

        <!-- 4.9. Key Achievements Section -->
        <section id="achievements" class="<?php echo e(count($achievements) > 0 ? '' : 'hidden'); ?> py-16 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-4xl font-extrabold text-center text-gray-900 dark:text-white mb-12">
                <span class="border-b-4 border-indigo-500 pb-1">Key Achievements</span>
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 text-center">
                <!-- Years of Experience -->
                <?php $__empty_1 = true; $__currentLoopData = $achievements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $achievement): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <div
                        class="bg-white dark:bg-gray-800 rounded-2xl shadow-xl p-8 flex flex-col items-center transition-colors duration-500">
                        <i class="<?php echo e($achievement->icon); ?> text-5xl  mb-4" style="color: <?php echo e($achievement->color); ?>"></i>
                        <div class="text-4xl font-extrabold text-gray-900 dark:text-white mb-2"><?php echo e($achievement->value); ?></div>
                        <div class="text-lg font-medium text-gray-600 dark:text-gray-300"><?php echo e($achievement->title); ?></div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <div class="col-span-4 text-center text-gray-600 dark:text-gray-300">
                        No achievements available.
                    </div>
                <?php endif; ?>
            </div>
        </section>

        <!-- 4.95. Work With Brands Section -->
        <section id="brands" class="<?php echo e(count($brands) > 0 ? '' : 'hidden'); ?> py-16 bg-white dark:bg-gray-900 transition-colors duration-500">
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

                    <?php $__empty_1 = true; $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <div
                            class="brand-card bg-white dark:bg-gray-800 rounded-xl p-6 shadow-md hover:shadow-xl flex flex-col items-center justify-center group">
                            <div class="w-full h-auto mb-4 flex items-center justify-center overflow-hidden">
                                <img src="<?php echo e(asset('storage/'.$brand->logo)); ?>"
                                    alt="<?php echo e($brand->name); ?>" class="h-full w-full object-contain grayscale group-hover:grayscale-0">
                            </div>
                            <h3 class="text-sm font-semibold text-gray-800 dark:text-gray-200 text-center"><?php echo e($brand->name); ?></h3>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <div class="col-span-6 text-center text-gray-600 dark:text-gray-300">
                            No brands available.
                        </div>
                    <?php endif; ?>
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
                    <img src="<?php echo e(asset('img/contact.jpg')); ?>" alt="contact illustration" class="rounded">
                </div>

                <!-- Right Side: Contact Form -->
                <div class="md:w-1/2 w-full">
                    <form class="space-y-6" method="POST" action="<?php echo e(route('contact.store')); ?>">
                        <?php echo csrf_field(); ?>
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-600 dark:text-gray-300">Your Name</label>
                            <input type="text" id="name" name="name" required
                                class="mt-1 block w-full px-4 py-3 bg-gray-100 dark:bg-gray-700 border border-gray-300 dark:border-gray-600 rounded-lg text-gray-900 dark:text-white placeholder-gray-500 dark:placeholder-gray-400 focus:ring-indigo-500 focus:border-indigo-500 transition-colors duration-300 focus:outline-none <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-500 dark:border-red-500 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                value="<?php echo e(old('name')); ?>">
                            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="text-red-500 text-sm mt-1"><?php echo e($message); ?></span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-600 dark:text-gray-300">Your Email</label>
                            <input type="email" id="email" name="email" required
                                class="mt-1 block w-full px-4 py-3 bg-gray-100 dark:bg-gray-700 border border-gray-300 dark:border-gray-600 rounded-lg text-gray-900 dark:text-white placeholder-gray-500 dark:placeholder-gray-400 focus:ring-indigo-500 focus:border-indigo-500 transition-colors duration-300 focus:outline-none <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-500 dark:border-red-500 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                value="<?php echo e(old('email')); ?>">
                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="text-red-500 text-sm mt-1"><?php echo e($message); ?></span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div>
                            <label for="subject" class="block text-sm font-medium text-gray-600 dark:text-gray-300">Subject</label>
                            <input type="text" id="subject" name="subject" required
                                class="mt-1 block w-full px-4 py-3 bg-gray-100 dark:bg-gray-700 border border-gray-300 dark:border-gray-600 rounded-lg text-gray-900 dark:text-white placeholder-gray-500 dark:placeholder-gray-400 focus:ring-indigo-500 focus:border-indigo-500 transition-colors duration-300 focus:outline-none <?php $__errorArgs = ['subject'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-500 dark:border-red-500 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                value="<?php echo e(old('subject')); ?>">
                            <?php $__errorArgs = ['subject'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="text-red-500 text-sm mt-1"><?php echo e($message); ?></span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-600 dark:text-gray-300">Message</label>
                            <textarea id="message" name="message" rows="5" required
                                class="mt-1 block w-full px-4 py-3 bg-gray-100 dark:bg-gray-700 border border-gray-300 dark:border-gray-600 rounded-lg text-gray-900 dark:text-white placeholder-gray-500 dark:placeholder-gray-400 focus:ring-indigo-500 focus:border-indigo-500 transition-colors duration-300 focus:outline-none <?php $__errorArgs = ['message'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-500 dark:border-red-500 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"><?php echo e(old('message')); ?></textarea>
                            <?php $__errorArgs = ['message'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="text-red-500 text-sm mt-1"><?php echo e($message); ?></span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        
                        <div>
                            <div class="g-recaptcha" data-sitekey="<?php echo e(config('services.recaptcha.site_key')); ?>"></div>
                            <?php if($errors->has('g-recaptcha-response')): ?>
                                <span class="text-red-500 text-sm mt-1"><?php echo e($errors->first('g-recaptcha-response')); ?></span>
                            <?php endif; ?>
                        </div>
                        <?php $__env->startPush('js'); ?>
                            <script src="https://www.google.com/recaptcha/api.js" async defer></script>
                        <?php $__env->stopPush(); ?>
                        <div>
                            <button type="submit"
                                class="w-full flex cursor-pointer justify-center items-center px-6 py-3 text-base font-medium rounded-xl shadow-lg text-white btn-primary focus:outline-none">
                                <i class="fa-solid fa-paper-plane mr-2"></i> Send Message
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            
            <?php if(session('success')): ?>
                <div
                    class="mt-6 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-lg flex items-center"
                    role="alert">
                    <i class="fa-solid fa-circle-check mr-2"></i>
                    <span class="font-medium"><?php echo e(session('success')); ?></span>
                </div>
            <?php endif; ?>
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
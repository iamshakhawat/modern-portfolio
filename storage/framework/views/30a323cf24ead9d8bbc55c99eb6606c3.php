            <header
                class="h-20 flex items-center justify-between px-6 bg-white dark:bg-slate-800 border-b border-gray-200 dark:border-slate-700 z-40 sticky top-0">
                <!-- Left: Sidebar Toggle -->
                <div class="flex items-center space-x-6">
                    <button onclick="toggleSidebar()"
                        class="p-2 text-gray-500 hover:bg-gray-100 dark:hover:bg-slate-700 rounded-lg transition-colors">
                        <i class="fas fa-bars-staggered text-xl"></i>
                    </button>
                </div>

                <!-- Middle: Search Bar -->
                <div class="flex-1 flex justify-center px-4">
                    <div class="relative max-w-xl w-full">
                        <div class="relative group">
                            <i
                                class="fas fa-search absolute left-4 top-1/2 -translate-y-1/2 text-gray-400 group-focus-within:text-blue-600"></i>
                            <input type="text" id="searchInput" placeholder="Search dashboards, users, files..."
                                class="w-full pl-11 pr-4 py-2.5 bg-gray-100 dark:bg-slate-700 border-none rounded-2xl text-sm focus:ring-2 focus:ring-blue-500 dark:text-white outline-none transition-all">
                        </div>
                        <!-- Recent Search Dropdown -->
                        <div id="searchDropdown"
                            class="hidden-dropdown absolute mt-3 w-full bg-white dark:bg-slate-800 border border-gray-100 dark:border-slate-700 rounded-2xl shadow-2xl p-4 dropdown-animate">
                            <h4 class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-3">Recent
                                Searches</h4>
                            <div class="space-y-1">
                                <div
                                    class="flex items-center px-3 py-2 hover:bg-gray-50 dark:hover:bg-slate-700 rounded-xl cursor-pointer text-sm text-gray-600 dark:text-gray-300">
                                    <i class="fas fa-history mr-3 text-gray-400"></i> Analytics Dec 2025
                                </div>
                                <div
                                    class="flex items-center px-3 py-2 hover:bg-gray-50 dark:hover:bg-slate-700 rounded-xl cursor-pointer text-sm text-gray-600 dark:text-gray-300">
                                    <i class="fas fa-history mr-3 text-gray-400"></i> User: Sarah Connor
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right: Actions -->
                <div class="flex items-center space-x-2 lg:space-x-5">

                    <!-- Website -->
                    <a href="<?php echo e(route('home')); ?>" target="_blank"
                        class="w-10 h-10 flex items-center justify-center text-gray-500 hover:bg-gray-100 dark:hover:bg-slate-700 rounded-full transition-colors">
                        <i class="fas fa-home text-lg"></i>
                    </a>
                    <!-- Dark Mode -->
                    <button onclick="toggleDarkMode()"
                        class="w-10 h-10 flex items-center justify-center text-gray-500 hover:bg-gray-100 dark:hover:bg-slate-700 rounded-full transition-colors">
                        <i id="theme-icon" class="fas fa-sun text-lg text-yellow-400 pointer-events-none"></i>
                    </button>

                    <!-- Notifications -->
                    <div class="relative">
                        <button onclick="toggleMenu('notifDropdown')"
                            class="w-10 h-10 relative flex items-center justify-center text-gray-500 hover:bg-gray-100 dark:hover:bg-slate-700 rounded-full transition-colors">
                            <i class="far fa-bell text-lg pointer-events-none"></i>
                            <span
                                class="absolute top-2.5 right-2.5 w-2 h-2 bg-rose-500 rounded-full ring-2 ring-white dark:ring-slate-800 pointer-events-none"></span>
                        </button>
                        <div id="notifDropdown"
                            class="hidden-dropdown absolute right-0 mt-4 w-80 md:w-96 bg-white dark:bg-slate-800 border border-gray-100 dark:border-slate-700 rounded-3xl shadow-2xl overflow-hidden dropdown-animate">
                            <div
                                class="p-5 border-b border-gray-50 dark:border-slate-700 flex justify-between items-center">
                                <h3 class="font-bold text-gray-800 dark:text-white">Updates</h3>
                                <span class="text-xs font-semibold text-blue-600 hover:underline cursor-pointer">Clear
                                    All</span>
                            </div>
                            <div class="max-h-96 overflow-y-auto sidebar-scroll">
                                <div
                                    class="flex p-5 hover:bg-gray-50 dark:hover:bg-slate-700/50 cursor-pointer border-b border-gray-50 dark:border-slate-700 last:border-0">
                                    <div
                                        class="w-11 h-11 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center flex-shrink-0">
                                        <i class="fas fa-user-plus text-blue-600"></i>
                                    </div>
                                    <div class="ml-4">
                                        <h5 class="text-sm font-bold text-gray-800 dark:text-gray-100">New Registration
                                        </h5>
                                        <p class="text-xs text-gray-500 dark:text-gray-400 mt-1">Samantha joined the
                                            marketing team workspace.</p>
                                        <div
                                            class="flex items-center mt-2 space-x-3 text-[10px] text-gray-400 font-medium">
                                            <span><i class="far fa-clock mr-1"></i>09:20 AM</span>
                                            <span><i class="far fa-calendar mr-1"></i>Dec 17, 2025</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Messages -->
                    <div class="relative">
                        <button onclick="toggleMenu('msgDropdown')"
                            class="w-10 h-10 relative flex items-center justify-center text-gray-500 hover:bg-gray-100 dark:hover:bg-slate-700 rounded-full transition-colors">
                            <i class="far fa-message text-lg pointer-events-none"></i>
                            <span
                                class="absolute top-2.5 right-2.5 w-2 h-2 bg-emerald-500 rounded-full ring-2 ring-white dark:ring-slate-800 pointer-events-none"></span>
                        </button>
                        <div id="msgDropdown"
                            class="hidden-dropdown absolute right-0 mt-4 w-80 md:w-96 bg-white dark:bg-slate-800 border border-gray-100 dark:border-slate-700 rounded-3xl shadow-2xl overflow-hidden dropdown-animate">
                            <div class="p-5 border-b border-gray-50 dark:border-slate-700">
                                <h3 class="font-bold text-gray-800 dark:text-white">Direct Messages</h3>
                            </div>
                            <div class="max-h-96 overflow-y-auto sidebar-scroll">
                                <div
                                    class="flex p-5 hover:bg-gray-50 dark:hover:bg-slate-700/50 cursor-pointer border-b border-gray-50 dark:border-slate-700">
                                    <div
                                        class="w-11 h-11 rounded-full bg-emerald-100 dark:bg-emerald-900/30 flex items-center justify-center flex-shrink-0">
                                        <i class="fas fa-user-tie text-emerald-600"></i>
                                    </div>
                                    <div class="ml-4 flex-1">
                                        <div class="flex justify-between">
                                            <h5 class="text-sm font-bold text-gray-800 dark:text-gray-100">John Wick
                                            </h5>
                                            <span class="text-[10px] text-gray-400">2m ago</span>
                                        </div>
                                        <p class="text-xs text-gray-500 dark:text-gray-400 mt-1 truncate w-48">The
                                            quarterly audit is ready for your signature...</p>
                                        <span class="text-[10px] text-gray-400 mt-2 block">Dec 17, 2025</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Profile -->
                    <div class="relative">
                        <button onclick="toggleMenu('profileDropdown')"
                            class="flex items-center space-x-3 p-1 rounded-full hover:bg-gray-100 dark:hover:bg-slate-700 transition-colors group">
                            <div
                                class="w-9 h-9 rounded-full bg-gradient-to-br from-blue-500 to-indigo-600 flex items-center justify-center text-white ring-2 ring-gray-100 dark:ring-slate-700 group-hover:ring-blue-400 transition-all pointer-events-none">
                                <?php if(Auth::user()->photo): ?>
                                    <img src="<?php echo e(Auth::user()->photo); ?>" alt="Profile Photo"
                                        class="w-9 h-9 rounded-full object-cover">
                                <?php else: ?>
                                    <i class="fas fa-user-ninja"></i>
                                <?php endif; ?>
                            </div>
                            <i
                                class="fas fa-chevron-down text-gray-400 text-[10px] hidden sm:block pointer-events-none"></i>
                        </button>
                        <div id="profileDropdown"
                            class="hidden-dropdown absolute right-0 mt-4 w-64 bg-white dark:bg-slate-800 border border-gray-100 dark:border-slate-700 rounded-2xl shadow-2xl py-2 dropdown-animate">
                            <div class="px-5 py-4 border-b border-gray-50 dark:border-slate-700 mb-2">
                                <p class="text-sm font-bold text-gray-800 dark:text-white mt-1"><?php echo e(Auth::user()->name); ?>

                                </p>
                                <small class="text-xs text-gray-400">Administrator</small>
                            </div>
                            <a href="<?php echo e(route('admin.profile')); ?>"
                                class="flex items-center px-5 py-2.5 text-sm text-gray-600 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-slate-700 transition-colors">
                                <i class="far fa-user-circle w-6 mr-2 text-gray-400"></i> My Profile
                            </a>
                            <a href="<?php echo e(route('admin.change.password')); ?>"
                                class="flex items-center px-5 py-2.5 text-sm text-gray-600 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-slate-700 transition-colors">
                                <i class="fas fa-key w-6 mr-2 text-gray-400"></i> Change Password
                            </a>
                            <div class="my-2 border-t border-gray-50 dark:border-slate-700"></div>
                            <a href="<?php echo e(route('logout')); ?>"
                                class="flex items-center px-5 py-3 text-sm font-bold text-rose-600 hover:bg-rose-50 dark:hover:bg-rose-900/20 transition-colors">
                                <i class="fas fa-power-off w-6 mr-2"></i> Sign Out
                            </a>
                        </div>
                    </div>
                </div>
            </header>
<?php /**PATH C:\Users\Shakhawat\Desktop\Portfolio\resources\views/layout/admin/header.blade.php ENDPATH**/ ?>
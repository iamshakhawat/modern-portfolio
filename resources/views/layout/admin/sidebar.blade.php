        <aside id="sidebar"
            class="sidebar-transition fixed inset-y-0 left-0 z-50 w-72 bg-white dark:bg-slate-800 border-r border-gray-200 dark:border-slate-700 lg:relative lg:translate-x-0">
            <!-- Sidebar Header -->
            <div class="flex items-center justify-between h-20 px-6 border-b border-gray-100 dark:border-slate-700">
                <a href="{{ route('admin.dashboard') }}" class="flex items-center space-x-3">
                    <div class="w-9 h-9 bg-blue-600 rounded-lg flex items-center justify-center">
                        <i class="fas fa-rocket text-white"></i>
                    </div>
                    <span class="text-xl font-bold text-gray-800 dark:text-white tracking-tight">Vortex Admin</span>
                </a>
                <button onclick="toggleSidebar()"
                    class="lg:hidden text-gray-500 p-2 hover:bg-gray-100 dark:hover:bg-slate-700 rounded-lg">
                    <i class="fas fa-times text-xl"></i>
                </button>
            </div>

            <!-- Navigation Links -->
            <nav class="p-4 sidebar-scroll overflow-y-auto h-[calc(100vh-80px)] space-y-1">
                <!-- Dashboard Item -->
                <div>
                    <button onclick="toggleSubmenu('sub-dashboard')"
                        class="w-full flex items-center justify-between px-4 py-3 text-sm font-semibold text-gray-600 dark:text-gray-300 hover:bg-blue-50 dark:hover:bg-slate-700 hover:text-blue-600 dark:hover:text-white rounded-xl transition-all group">
                        <div class="flex items-center pointer-events-none">
                            <i class="fas fa-layer-group w-6 mr-2"></i>
                            <span>Dashboard</span>
                        </div>
                        <i class="fas fa-chevron-right text-[10px] transition-transform pointer-events-none"
                            id="arrow-sub-dashboard"></i>
                    </button>
                    <div id="sub-dashboard"
                        class="hidden-dropdown mt-1 ml-10 space-y-1 border-l-2 border-gray-100 dark:border-slate-700">
                        <a href="#"
                            class="block px-4 py-2 text-xs text-gray-500 hover:text-blue-600 dark:hover:text-white">Analytics</a>
                        <a href="#"
                            class="block px-4 py-2 text-xs text-gray-500 hover:text-blue-600 dark:hover:text-white">CRM</a>
                    </div>
                </div>

                <!-- 15+ Links -->
                <a href="#"
                    class="flex items-center px-4 py-3 text-sm font-semibold text-gray-600 dark:text-gray-300 hover:bg-blue-50 dark:hover:bg-slate-700 hover:text-blue-600 dark:hover:text-white rounded-xl transition-all">
                    <i class="fas fa-shopping-bag w-6 mr-2"></i><span>Products</span>
                </a>
                <a href="{{ route('admin.about') }}"
                    class="flex items-center px-4 py-3 text-sm font-semibold text-gray-600 dark:text-gray-300 hover:bg-blue-50 dark:hover:bg-slate-700 hover:text-blue-600 dark:hover:text-white rounded-xl transition-all">
                    <i class="fas fa-circle-info w-6 mr-2"></i><span>About Me</span>
                </a>
                <a href="{{ route('admin.skills') }}"
                    class="flex items-center px-4 py-3 text-sm font-semibold text-gray-600 dark:text-gray-300 hover:bg-blue-50 dark:hover:bg-slate-700 hover:text-blue-600 dark:hover:text-white rounded-xl transition-all">
                    <i class="fas fa-tools w-6 mr-2"></i><span>My Skills</span>
                </a>
                <a href="{{ route('admin.projects') }}"
                    class="flex items-center px-4 py-3 text-sm font-semibold text-gray-600 dark:text-gray-300 hover:bg-blue-50 dark:hover:bg-slate-700 hover:text-blue-600 dark:hover:text-white rounded-xl transition-all">
                    <i class="fas fa-code w-6 mr-2"></i><span>My Projects</span>
                </a>
                <a href="#"
                    class="flex items-center px-4 py-3 text-sm font-semibold text-gray-600 dark:text-gray-300 hover:bg-blue-50 dark:hover:bg-slate-700 hover:text-blue-600 dark:hover:text-white rounded-xl transition-all">
                    <i class="fas fa-calendar-day w-6 mr-2"></i><span>Events</span>
                </a>
                <a href="#"
                    class="flex items-center px-4 py-3 text-sm font-semibold text-gray-600 dark:text-gray-300 hover:bg-blue-50 dark:hover:bg-slate-700 hover:text-blue-600 dark:hover:text-white rounded-xl transition-all">
                    <i class="fas fa-file-invoice w-6 mr-2"></i><span>Billing</span>
                </a>
                <a href="#"
                    class="flex items-center px-4 py-3 text-sm font-semibold text-gray-600 dark:text-gray-300 hover:bg-blue-50 dark:hover:bg-slate-700 hover:text-blue-600 dark:hover:text-white rounded-xl transition-all">
                    <i class="fas fa-shield-halved w-6 mr-2"></i><span>Security Logs</span>
                </a>
                <a href="#"
                    class="flex items-center px-4 py-3 text-sm font-semibold text-gray-600 dark:text-gray-300 hover:bg-blue-50 dark:hover:bg-slate-700 hover:text-blue-600 dark:hover:text-white rounded-xl transition-all">
                    <i class="fas fa-database w-6 mr-2"></i><span>Database</span>
                </a>
                <a href="#"
                    class="flex items-center px-4 py-3 text-sm font-semibold text-gray-600 dark:text-gray-300 hover:bg-blue-50 dark:hover:bg-slate-700 hover:text-blue-600 dark:hover:text-white rounded-xl transition-all">
                    <i class="fas fa-code w-6 mr-2"></i><span>API Reference</span>
                </a>
                <a href="#"
                    class="flex items-center px-4 py-3 text-sm font-semibold text-gray-600 dark:text-gray-300 hover:bg-blue-50 dark:hover:bg-slate-700 hover:text-blue-600 dark:hover:text-white rounded-xl transition-all">
                    <i class="fas fa-folder-tree w-6 mr-2"></i><span>File Manager</span>
                </a>
                <a href="#"
                    class="flex items-center px-4 py-3 text-sm font-semibold text-gray-600 dark:text-gray-300 hover:bg-blue-50 dark:hover:bg-slate-700 hover:text-blue-600 dark:hover:text-white rounded-xl transition-all">
                    <i class="fas fa-terminal w-6 mr-2"></i><span>Terminal</span>
                </a>
                <a href="#"
                    class="flex items-center px-4 py-3 text-sm font-semibold text-gray-600 dark:text-gray-300 hover:bg-blue-50 dark:hover:bg-slate-700 hover:text-blue-600 dark:hover:text-white rounded-xl transition-all">
                    <i class="fas fa-map w-6 mr-2"></i><span>Track Orders</span>
                </a>
                <a href="#"
                    class="flex items-center px-4 py-3 text-sm font-semibold text-gray-600 dark:text-gray-300 hover:bg-blue-50 dark:hover:bg-slate-700 hover:text-blue-600 dark:hover:text-white rounded-xl transition-all">
                    <i class="fas fa-ticket w-6 mr-2"></i><span>Support Tickets</span>
                </a>
                <a href="#"
                    class="flex items-center px-4 py-3 text-sm font-semibold text-gray-600 dark:text-gray-300 hover:bg-blue-50 dark:hover:bg-slate-700 hover:text-blue-600 dark:hover:text-white rounded-xl transition-all">
                    <i class="fas fa-cog w-6 mr-2"></i><span>General Settings</span>
                </a>
                <a href="#"
                    class="flex items-center px-4 py-3 text-sm font-semibold text-gray-600 dark:text-gray-300 hover:bg-blue-50 dark:hover:bg-slate-700 hover:text-blue-600 dark:hover:text-white rounded-xl transition-all">
                    <i class="fas fa-life-ring w-6 mr-2"></i><span>Help Desk</span>
                </a>


                <div>
                    <button onclick="toggleSubmenu('sub-auth')"
                        class="w-full flex items-center justify-between px-4 py-3 text-sm font-semibold text-gray-600 dark:text-gray-300 hover:bg-blue-50 dark:hover:bg-slate-700 hover:text-blue-600 dark:hover:text-white rounded-xl transition-all group">
                        <div class="flex items-center pointer-events-none">
                            <i class="fas fa-user w-6 mr-2"></i>
                            <span>{{ Auth::user()->name }}</span>
                        </div>
                        <i class="fas fa-chevron-right text-[10px] transition-transform pointer-events-none"
                            id="arrow-sub-auth"></i>
                    </button>
                    <div id="sub-auth"
                        class="hidden-dropdown mt-1 ml-10 space-y-1 border-l-2 border-gray-100 dark:border-slate-700">
                        <a href="{{ route('admin.profile') }}"
                            class="block px-4 py-2 text-xs text-gray-500 hover:text-blue-600 dark:hover:text-white">Profile</a>
                        <a href="{{ route('admin.change.password') }}"
                            class="block px-4 py-2 text-xs text-gray-500 hover:text-blue-600 dark:hover:text-white">Change Password</a>
                        <a href="{{ route('logout') }}"
                            class="block px-4 py-2 text-xs text-gray-500 hover:text-blue-600 dark:hover:text-white">Logout</a>
                    </div>
                </div>

            </nav>
        </aside>

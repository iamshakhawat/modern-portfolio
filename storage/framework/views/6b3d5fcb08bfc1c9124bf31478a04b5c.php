<!DOCTYPE html>
<html lang="en" class="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title', 'Admin Dashboard Pro'); ?></title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <script>
        tailwind.config = {
            darkMode: 'selector',
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Plus Jakarta Sans', 'sans-serif'],
                    },
                }
            }
        }
    </script>

    <!-- SweetAlert2 CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>




    <?php echo $__env->yieldPushContent('css'); ?>

    <style>
        .sidebar-scroll::-webkit-scrollbar {
            width: 4px;
        }

        .sidebar-scroll::-webkit-scrollbar-track {
            background: transparent;
        }

        .sidebar-scroll::-webkit-scrollbar-thumb {
            background: #cbd5e1;
            border-radius: 10px;
        }

        .dark .sidebar-scroll::-webkit-scrollbar-thumb {
            background: #334155;
        }


        /* Fixed Transition Logic for Desktop and Mobile */
        .sidebar-transition {
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        /* Desktop Sidebar Toggle state - Uses width and transform for smooth transition */
        @media (min-width: 1024px) {
            .sidebar-collapsed {
                width: 0 !important;
                transform: translateX(-100%);
                opacity: 0;
                overflow: hidden;
                border-right-width: 0;
            }
        }

        /* Dropdown Animation */
        .dropdown-animate {
            transform-origin: top right;
            animation: dropdownFade 0.2s ease-out;
        }

        @keyframes dropdownFade {
            from {
                opacity: 0;
                transform: scale(0.95) translateY(-10px);
            }

            to {
                opacity: 1;
                transform: scale(1) translateY(0);
            }
        }

        /* Hide elements by default */
        .hidden-dropdown {
            display: none;
        }

        /* Sidebar desktop hidden state */
        .sidebar-hidden-desktop {
            transform: translateX(-100%);
        }

        @media (min-width: 1024px) {
            .sidebar-hidden-desktop {
                margin-left: -18rem;
                /* width of sidebar */
            }
        }
    </style>
</head>

<body class="bg-gray-50 dark:bg-slate-900 font-sans overflow-hidden transition-colors duration-300">

    <div class="flex h-screen overflow-hidden">

        <!-- SIDEBAR -->
        <?php echo $__env->make('layout.admin.sidebar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

        <!-- MAIN CONTENT AREA -->
        <main class="flex-1 flex flex-col min-w-0 bg-gray-50 dark:bg-slate-900 overflow-hidden ">

            <!-- TOP NAVBAR -->
            <?php echo $__env->make('layout.admin.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

            <!-- PAGE VIEWPORT -->
            <div class="flex-1 overflow-y-auto p-6 sidebar-scroll">
                <div class="max-w-7xl mx-auto space-y-8">


                    <?php echo $__env->yieldContent('content'); ?>


                </div>
            </div>
        </main>

        <!-- Sidebar Backdrop for Mobile -->
        <div id="sidebarBackdrop" onclick="toggleSidebar()"
            class="fixed inset-0 bg-black/50 backdrop-blur-sm z-40 hidden lg:hidden"></div>
    </div>

    <!-- Scripts -->
    <script>
        // --- Remember Dark/Light Mode State ---
        (function() {
            const themeKey = 'theme-mode';
            // On load, set theme from localStorage
            const savedTheme = localStorage.getItem(themeKey);
            if (savedTheme === 'dark') {
                document.documentElement.classList.add('dark');
                const icon = document.getElementById('theme-icon');
                if (icon) {
                    icon.classList.replace('fa-moon', 'fa-sun');
                    icon.classList.add('text-yellow-400');
                }
            } else if (savedTheme === 'light') {
                document.documentElement.classList.remove('dark');
                const icon = document.getElementById('theme-icon');
                if (icon) {
                    icon.classList.replace('fa-sun', 'fa-moon');
                    icon.classList.remove('text-yellow-400');
                }
            }
            // Override toggleDarkMode to save state
            window.toggleDarkMode = function() {
                document.documentElement.classList.toggle('dark');
                const isDark = document.documentElement.classList.contains('dark');
                localStorage.setItem(themeKey, isDark ? 'dark' : 'light');
                const icon = document.getElementById('theme-icon');
                if (icon) {
                    if (isDark) {
                        icon.classList.replace('fa-moon', 'fa-sun');
                        icon.classList.add('text-yellow-400');
                    } else {
                        icon.classList.replace('fa-sun', 'fa-moon');
                        icon.classList.remove('text-yellow-400');
                    }
                }
            };
        })();


        // --- Remember Sidebar State for Desktop ---
        (function() {
            const sidebarKey = 'sidebar-collapsed';
            const sidebar = document.getElementById('sidebar');

            // On load, set sidebar state from localStorage (desktop only)
            function applySidebarState() {
                if (window.innerWidth >= 1024) {
                    const collapsed = localStorage.getItem(sidebarKey) === 'true';
                    if (collapsed) {
                        sidebar.classList.add('sidebar-hidden-desktop');
                    } else {
                        sidebar.classList.remove('sidebar-hidden-desktop');
                    }
                }
            }

            // Listen for sidebar toggle and save state (desktop only)
            window.toggleSidebar = function() {
                const isDesktop = window.innerWidth >= 1024;
                if (isDesktop) {
                    sidebar.classList.toggle('sidebar-hidden-desktop');
                    localStorage.setItem(sidebarKey, sidebar.classList.contains('sidebar-hidden-desktop'));
                } else {
                    // Mobile logic unchanged
                    const backdrop = document.getElementById('sidebarBackdrop');
                    const isHidden = sidebar.classList.contains('-translate-x-full');
                    if (isHidden) {
                        sidebar.classList.remove('-translate-x-full');
                        backdrop.classList.remove('hidden');
                    } else {
                        sidebar.classList.add('-translate-x-full');
                        backdrop.classList.add('hidden');
                    }
                }
            };

            // Apply sidebar state on load and on resize
            window.addEventListener('DOMContentLoaded', applySidebarState);
            window.addEventListener('resize', applySidebarState);
        })();





        // --- Sidebar Logic ---
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            const backdrop = document.getElementById('sidebarBackdrop');

            // Check if we are on desktop
            const isDesktop = window.innerWidth >= 1024;


            if (isDesktop) {
                // For desktop, we toggle a margin class to push/pull the sidebar
                sidebar.classList.toggle('sidebar-hidden-desktop');
            } else {
                // For mobile, we use the translation classes
                const isHidden = sidebar.classList.contains('-translate-x-full');
                if (isHidden) {
                    sidebar.classList.remove('-translate-x-full');
                    backdrop.classList.remove('hidden');
                } else {
                    sidebar.classList.add('-translate-x-full');
                    backdrop.classList.add('hidden');
                }
            }
        }

        // --- Dropdown Management ---
        function toggleMenu(id) {
            // Close other open menus
            const dropdowns = ['notifDropdown', 'msgDropdown', 'profileDropdown'];
            dropdowns.forEach(dropId => {
                if (dropId !== id) {
                    document.getElementById(dropId).classList.add('hidden-dropdown');
                }
            });

            const target = document.getElementById(id);
            target.classList.toggle('hidden-dropdown');
        }

        // --- Submenu Logic ---
        function toggleSubmenu(id) {
            const menu = document.getElementById(id);
            const arrow = document.getElementById('arrow-' + id);
            menu.classList.toggle('hidden-dropdown');
            arrow.classList.toggle('rotate-90');
        }

        // --- Search Dropdown ---
        const searchInput = document.getElementById('searchInput');
        const searchDropdown = document.getElementById('searchDropdown');

        searchInput.addEventListener('focus', () => {
            searchDropdown.classList.remove('hidden-dropdown');
        });

        // --- Dark Mode ---
        function toggleDarkMode() {
            document.documentElement.classList.toggle('dark');
            const icon = document.getElementById('theme-icon');
            if (document.documentElement.classList.contains('dark')) {
                icon.classList.replace('fa-moon', 'fa-sun');
                icon.classList.add('text-yellow-400');
            } else {
                icon.classList.replace('fa-sun', 'fa-moon');
                icon.classList.remove('text-yellow-400');
            }
        }

        // --- Global Click Listener to close dropdowns ---
        window.addEventListener('click', (e) => {
            // Close search dropdown if click is outside search container
            if (!searchInput.contains(e.target) && !searchDropdown.contains(e.target)) {
                searchDropdown.classList.add('hidden-dropdown');
            }

            // Close notification, messages, profile if clicking elsewhere
            // We check if the click target is NOT a trigger button or inside an open dropdown
            const isClickInsideTrigger = e.target.closest('button[onclick^="toggleMenu"]');
            const isClickInsideDropdown = e.target.closest('.dropdown-animate');

            if (!isClickInsideTrigger && !isClickInsideDropdown) {
                document.querySelectorAll('.dropdown-animate').forEach(el => el.classList.add('hidden-dropdown'));
            }
        });

        // Handle Mobile Responsiveness Initial State
        function initLayout() {
            if (window.innerWidth < 1024) {
                document.getElementById('sidebar').classList.add('-translate-x-full');
            }
        }
        window.onload = initLayout;
    </script>

    <?php echo $__env->yieldPushContent('js'); ?>

    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <?php $__sessionArgs = ['success'];
if (session()->has($__sessionArgs[0])) :
if (isset($value)) { $__sessionPrevious[] = $value; }
$value = session()->get($__sessionArgs[0]); ?>
        <script>
            const isDarkMode = document.documentElement.classList.contains('dark');
            Swal.fire({
                title: "Success!",
                text: "<?php echo e(session('success')); ?>",
                icon: "success",
                confirmButtonText: "OK",
                confirmButtonColor: "#2563EB",
                timer: 5000,
                timerProgressBar: true,
                background: isDarkMode ? '#1e1e1e' : '#ffffff',
                color: isDarkMode ? '#ffffff' : '#000000',
                confirmButtonColor: isDarkMode ? '#4f8cff' : '#3085d6'
            });
        </script>
    <?php unset($value);
if (isset($__sessionPrevious) && !empty($__sessionPrevious)) { $value = array_pop($__sessionPrevious); }
if (isset($__sessionPrevious) && empty($__sessionPrevious)) { unset($__sessionPrevious); }
endif;
unset($__sessionArgs); ?>
    <?php $__sessionArgs = ['error'];
if (session()->has($__sessionArgs[0])) :
if (isset($value)) { $__sessionPrevious[] = $value; }
$value = session()->get($__sessionArgs[0]); ?>
        <script>
            const isDarkMode = document.documentElement.classList.contains('dark');
            Swal.fire({
                title: "Error!",
                text: "<?php echo e(session('error')); ?>",
                icon: "error",
                confirmButtonText: "OK",
                confirmButtonColor: "#DC2626",
                timer: 5000,
                timerProgressBar: true,
                background: isDarkMode ? '#1e1e1e' : '#ffffff',
                color: isDarkMode ? '#ffffff' : '#000000',
                confirmButtonColor: isDarkMode ? '#4f8cff' : '#3085d6'
            });
        </script>
    <?php unset($value);
if (isset($__sessionPrevious) && !empty($__sessionPrevious)) { $value = array_pop($__sessionPrevious); }
if (isset($__sessionPrevious) && empty($__sessionPrevious)) { unset($__sessionPrevious); }
endif;
unset($__sessionArgs); ?>

    <script>
        refreshBtn = document.getElementById('refreshBtn');
        refreshIcon = document.getElementById('refreshIcon');
        refreshBtn.addEventListener('click', function() {
            refreshIcon.classList.add('fa-spin');

            $.ajax({
                type: "get",
                url: "<?php echo e(route('clear.cache')); ?>",
                success: function(response) {
                    refreshIcon.classList.remove('fa-spin');
                    console.log(response);

                }
            });

        });
    </script>


</body>

</html>
<?php /**PATH C:\Users\Shakhawat\Desktop\Portfolio\resources\views/layout/admin/admin.blade.php ENDPATH**/ ?>
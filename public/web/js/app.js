

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

// Testimonial 
document.addEventListener('DOMContentLoaded', function () {
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
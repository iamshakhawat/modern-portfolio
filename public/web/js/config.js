const plugin = require('tailwindcss/plugin');

module.exports = {
    darkMode: 'class',
    content: [
        "./resources/views/**/*.blade.php",
        "./resources/js/**/*.js",
    ],
    theme: {
        extend: {
            colors: {
                primary: '#4f46e5',
                accent: '#8b5cf6',
            },
        },
    },
}

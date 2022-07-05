/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        '*.php',
        'dashboard/*.php',
        'login/*.php',
        'logout/*.php',
        'assets/scripts/*.js',
    ],
    theme: {
        extend: {},
    },
    plugins: [require('@tailwindcss/forms')],
}

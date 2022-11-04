/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            width: {
                '1000': '64rem',
            },
            height: {
                '725': '46rem',
            }
        },
    },
    plugins: [],
}

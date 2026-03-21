
/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/template/**/*.php",
    ],
    plugins: [
        require('@tailwindcss/typography'),
    ],
}

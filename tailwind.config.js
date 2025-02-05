import defaultTheme from 'tailwindcss/defaultTheme'

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            colors: {
                PearlWhite: '#F7F8FC',
                SkyWhite: '#E4E9F7',
                GrapeBlack: '#010818',
                MetalGray: '#4A5568',
                BananaYellow: '#F0CA4F'
            },
            fontFamily: {
                sans: ['Satoshi', ...defaultTheme.fontFamily.sans], // Заменяем Figtree на Satoshi
            },
        },
    },
    plugins: [],
}

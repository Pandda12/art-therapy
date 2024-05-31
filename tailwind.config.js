import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Geometria', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'lite-purple-1': '#F5F3FA',
                'lite-purple-2': '#E9E5F5',
                'art-black-1': '#13100E',
                'art-black-2': '#464646'
            }
        },

    },

    plugins: [forms],
};

import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';


/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/**/*.css',
    ],

    theme: {
        extend: {
            fontFamily: {
                // sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                poppins: ['"Poppins"', 'sans-serif'],
                montserrat: ['"Montserrat"', 'sans-serif'],
            },
            colors: {
                primary: {
                    DEFAULT: '#550413',
                },
                secondary: {
                    DEFAULT: '#CDB987',
                },
                black: {
                    DEFAULT: '#000000',
                },
                txBlack: {
                    DEFAULT: '#000000'
                },

                white: {
                    DEFAULT: '#ffffff',
                },
                gray: {
                    // DEFAULT: '#000000',
                    DEFAULT: '#6B7280',

                },
                bgSecondary: {
                    DEFAULT: '#cbc5c5'
                },
                investTxColor: {
                    DEFAULT: '#380B2A',
                },
                yellowText: {
                    DEFAULT: '#A2770A',
                },
                gradientFrom: {
                    DEFAULT: '#eee6e8',
                },
                gradientTo: {
                    DEFAULT: '#f9f7f2',
                },
                goldenColor: {
                    DEFAULT: '#CDB987',
                },
           


                // Admin colors

                adminPrimary: '#276066',
                adminPrimaryHover: '#32797E',
                adminSecondary: '#3B82F6',
                adminSidebar: '#0F2A38',
                adminHeader: '#0F2A38',
               adminTextPrimary: '#155E63',
               adminInputBorder: '#49717B',
               adminFormBg: '#F5F7F9',
            },
        },
    },

    plugins: [forms],
};

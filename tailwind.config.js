/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './resources/src/pages/**/*.{js,ts,jsx,tsx,mdx}',
        './resources/src/components/**/*.{js,ts,jsx,tsx,mdx}',
        './resources/src/app/**/*.{js,ts,jsx,tsx,mdx}',
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
  theme: {
      extend: {
          backgroundImage: {
              'gradient-radial': 'radial-gradient(var(--tw-gradient-stops))',
              'gradient-conic':
                  'conic-gradient(from 180deg at 50% 50%, var(--tw-gradient-stops))',
          },
      },
  },
  plugins: [],
}


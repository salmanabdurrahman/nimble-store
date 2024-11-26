/** @type {import('tailwindcss').Config} */
module.exports = {
	content: ["./application/**/*.{php,html}", "./public/**/*.{php,html}"],
	theme: {
		extend: {
			container: {
				center: true,
				"2xl": "1320px",
			},
			fontFamily: {
				"open-sans": ["Open-Sans", "sans-serif"],
				rubik: ["Rubik", "sans-serif"],
			},
			colors: {
				"light-gray": "#E7E7E3",
				"off-white": "#FAFAFA",
				"dark-charcoal": "#232321",
				"royal-blue": "#4A69E2",
				"golden-orange": "#FFA52F",
			},
			screens: {
				"2xl": "1320px",
			},
		},
	},
	plugins: [],
};

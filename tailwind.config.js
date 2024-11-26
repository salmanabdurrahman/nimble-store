/** @type {import('tailwindcss').Config} */
module.exports = {
	content: ["./application/views/**/*.{php,html}", "./public/**/*.{php,html}"],
	theme: {
		extend: {
			container: {
				center: true,
			},
		},
	},
	plugins: [],
};

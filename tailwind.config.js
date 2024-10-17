module.exports = {
  content: ["./**/*.php", "./src/**/*.js", "./src/**/*.scss", "!./node_modules",],
  theme: {},
  plugins: [
    require('@tailwindcss/typography')
  ],
};

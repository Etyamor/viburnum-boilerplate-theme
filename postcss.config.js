module.exports = {
  plugins: [
    require("postcss-import"),
    require("tailwindcss"),
    require("autoprefixer"),
    require("postcss-nested"),
    require("postcss-url")({
      url: "copy",
    }),
    process.env.ENV === "production" ? require("postcss-minify") : false,
  ],
};

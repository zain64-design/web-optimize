// purgecss.config.cjs
module.exports = {
  // these files will be scanned for used CSS classes
  content: [
    "./index.php",
    "./assets/js/custom.js",
    "./assets/js/bootstrap.bundle.min.js"
    //'./assets/js/**/*.js',  // custom.js and other js files in assets/js/ folder
    // if we have multiple .php, .html files add here:
    // "./**/*.php",
    // "./**/*.html",
  ],

  // this css will be processed by PurgeCSS to remove unused classes from it
  css: ["./assets/css/bootstrap.min.css"],

  // Output folder
  output: "./assets/css/",

  // Bootstrap aur JS se dynamically add hone wali classes ko bachana
  safelist: {
    standard: [
      // /^carousel/,
      // /^swiper/,
      /^slick/,       // Agar slick slider use hai
      /^modal/,
      // /^dropdown/,
      /^collapse/,
      /^collapsing$/,
      // /^tooltip/,
      // /^popover/,
      // /^offcanvas/,
      /^show$/,
      /^fade$/,
      /^active$/,
      /^disabled$/,
      /^open$/,
      /^accordion/,
      /^nav/,
      /^tab/,
    ],
    deep: [
      /^data-/,
    ]
  }
};
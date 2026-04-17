// purgecss.config.cjs
module.exports = {
  // these files will be scanned for used CSS classes
  content: [
    "./index.php",
    "./assets/js/custom.js"
    //'./assets/js/**/*.js',  // custom.js and other js files in assets/js/ folder
    // if we have multiple .php, .html files add here:
    // "./**/*.php",
    // "./**/*.html",
  ],

  // this css will be processed by PurgeCSS to remove unused classes from it
  css: ["./assets/css/custom.css"],

  // Output folder
  output: "./assets/css/",

  // Bootstrap aur JS se dynamically add hone wali classes ko bachana
  safelist: {
    standard: [
      /^carousel/,    // Bootstrap carousel classes
      /^swiper/,      // Agar swiper slider use hai
      /^slick/,       // Agar slick slider use hai
      /^modal/,       // Bootstrap modals
      /^dropdown/,    // Bootstrap dropdowns
      /^collapse/,    // Bootstrap collapse
      /^collapsing$/,
      /^tooltip/,
      /^popover/,
      /^offcanvas/,
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
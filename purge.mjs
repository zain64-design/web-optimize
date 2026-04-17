import { PurgeCSS } from 'purgecss';
import { writeFileSync } from 'fs';

const result = await new PurgeCSS().purge({
  content: [
    './index.php',
    './assets/js/custom.js'
  ],
  css: [
    // './assets/css/custom.css',
    'assets/css/bootstrap.min.css',
    // './assets/fontawesome/css/all.min.css'
  ],
  safelist: {
    standard: [
      // Bootstrap
      /^show$/, /^collapsing$/, /^modal/, /^dropdown/,/^collapse/,
      /^tooltip/, /^popover/, /^carousel/, /^offcanvas/,/^nav/,
      /^tab/, /^fade$/, /^active$/, /^disabled$/, /^open$/,/^accordion/,
      // Slick Slider
      /^slick/,
      // Font Awesome
      /^fa/,
      /^svg-inline/,
    ],
    deep: [/^fa-/],
    greedy: [/^fa/]
  }
});

// result.forEach(({ css, file }) => {
//   const filename = file.split('/').pop();
//   writeFileSync(`./assets/css/${filename}`, css);
//   console.log(`✅ Purged: ${filename}`);
// });

result.forEach(({ css, file }) => {
  // original path pe hi save karo
  writeFileSync(file, css);
  console.log(`✅ Purged: ${file}`);
});
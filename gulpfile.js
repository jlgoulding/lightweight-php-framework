const { src, dest, watch, series } = require("gulp");
const sass = require("gulp-sass")(require("sass"));
const postcss = require("gulp-postcss");
const cssnano = require("cssnano");
const terser = require("gulp-terser");
const browsersync = require("browser-sync").create();
const php = require("gulp-connect-php");

// Sass Task
function scssTask() {
  return src("./scss/styles.scss", { sourcemaps: true })
    .pipe(sass())
    .pipe(postcss([cssnano()]))
    .pipe(dest("dist", { sourcemaps: "." }));
}

// JavaScript Task
function jsTask() {
  return src("public/js/script.js", { sourcemaps: true })
    .pipe(terser())
    .pipe(dest("dist", { sourcemaps: "." }));
}

// Browsersync Tasks
function browsersyncServe(cb) {
  php.server({
    base: "./",
    port: 3000,
    keepalive: true,
    
  });
  browsersync.init({
    proxy: "localhost:3000",
    baseDir: "./",
    notify: false,
  });
  cb();
}

function browsersyncReload(cb) {
  browsersync.reload();
  cb();
}

// Watch Task
function watchTask() {
  watch("*.html", browsersyncReload);
  watch(
    ["./scss/**/*.scss", "public/js/**/*.js","./views/**/*.php"],
    series(scssTask, jsTask, browsersyncReload)
  );
}

// Default Gulp task
exports.default = series(scssTask, jsTask, browsersyncServe, watchTask);

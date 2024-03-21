var gulp = require("gulp"),
    sass = require('gulp-sass')(require('sass')),
    postcss = require("gulp-postcss"),
    autoprefixer = require("autoprefixer"),
    cssnano = require("cssnano"),
    connect = require('gulp-connect-php'),
    minify = require('gulp-minify'),
    imagemin = require('gulp-imagemin'),
    concat = require('gulp-concat');

var paths = {
    styles: {
        src: ["./assets/sass/**/*.scss", "./flexible_content/templates/**/*.scss"],
        dest: "./build/css"
    },
    scripts: {
        src: "./assets/js/**/*.js",
        dest: "./build/js"
    },
    images: {
        src: "./assets/images/*",
        dest: "./build/images"
    }
};

var proxyURL = 'localhost:8080';

// optimise images - this syntax is different because it's not included in the gulp watch
gulp.task('image', () =>
    gulp.src(paths.images.src)
        .pipe(imagemin())
        .pipe(gulp.dest(paths.images.dest))
);

// optimise css 
function style() {
    return (
        gulp
            .src(paths.styles.src)
            .pipe(sass())
            .on("error", sass.logError)
            .pipe(postcss([autoprefixer()]))
            .pipe(gulp.dest(paths.styles.dest)) // Output non-minified CSS
            .pipe(postcss([cssnano()]))
            .pipe(concat('style-min.css')) // Concatenate all SCSS files into style-min.css
            .pipe(gulp.dest(paths.styles.dest))
    );
}
exports.style = style;

// optimise scripts
function script() {
    return (
        gulp
            .src(paths.scripts.src)
            .pipe(minify({}))
            .pipe(gulp.dest(paths.scripts.dest))
    );
}
exports.script = script;

// watch for changes to css js and php files
function watch() {
    gulp.watch(paths.styles.src, style);
    gulp.watch(paths.scripts.src, script);
}
exports.watch = watch;

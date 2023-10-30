const project = require('./package.json');
const gulp = require('gulp');
const concat = require('gulp-concat');
const sass = require('gulp-sass')(require('sass'));
const cleanCss = require('gulp-clean-css');
const zip = require('gulp-zip');

const SassAutoprefix = require('less-plugin-autoprefix');
const autoprefix = new SassAutoprefix({
    browsers: ["> 1%", "last 2 versions"]
});

var rtlcss = require('gulp-rtlcss');


const uglify = require("gulp-uglify");
const beautify = require('gulp-jsbeautifier');
const clean = require('gulp-clean');


gulp.task('scss', function () {
    return gulp.src(['style.scss'], {
        cwd: 'src/scss'
    })
        .pipe(sass({
            plugins: [autoprefix]
        }))
        .pipe(beautify({
            indent_char: '\t',
            indent_size: 1
        }))
        .pipe(gulp.dest('assets/css/'));
});

gulp.task('rtl', function () {
    return gulp.src([
        'assets/build/*.css',
        '!assets/css/rtl.css'
    ])
        .pipe(rtlcss())
        .pipe(gulp.dest('assets/css-auto-rtl/'));
});

// Concat and minify CSS files
gulp.task('build-css', () => {
    return gulp.src([
        'assets/css/bootstrap.min.css',
        'assets/css/font-awesome.min.css',
        'assets/css/animate.min.css',
        'assets/css/default.css',
        'assets/css/elementor.css',
        // 'assets/css/jquery.pagepiling.min.css',
        'assets/css/jquery.timepicker.min.css',
        'assets/css/select2.min.css',
        'assets/css/style.css',
    ])
        .pipe(concat('styles.min.css'))
        .pipe(cleanCss())
        .pipe(gulp.dest('assets/build'));
});

// Concat and minify vendor css files
gulp.task('build-vendor-css', () => {
    return gulp.src([
        'assets/vendor/bootstrap/bootstrap.min.css',
        'assets/vendor/magnific-popup/magnific-popup.css',
        'assets/vendor/audio/audioplayer.css',
        'assets/vendor/swiper/swiper.min.css',
        'assets/vendor/wow/animate.min.css'
    ])
        .pipe(concat('vendor.min.css'))
        .pipe(cleanCss())
        .pipe(gulp.dest('assets/build'));
});

// Concat and minify js files
gulp.task('build-js', () => {
    return gulp.src([
        'assets/js/main.js'
    ])
        .pipe(concat('main.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest('assets/build'));
});

// Concat and minify vendor js files
gulp.task('build-vendor-js', () => {
    return gulp.src([
        'assets/vendor/bootstrap/popper.min.js',
        'assets/vendor/bootstrap/bootstrap.min.js',
        'assets/vendor/appear/jquery.appear.min.js',
        'assets/vendor/magnific-popup/jquery.magnific-popup.min.js',
        'assets/vendor/audio/audioplayer.js',
        'assets/vendor/masonary/masonry.min.js',
        'assets/vendor/swiper/swiper.min.js',
        'assets/vendor/counterup/jquery.waypoints.min.js',
        'assets/vendor/counterup/jquery.counterup.min.js',
        'assets/vendor/wow/wow.min.js'
    ])
        .pipe(concat('vendor.min.js'))
        .pipe(gulp.dest('assets/build'));
});

gulp.task('clean', function () {
    return gulp.src('__build/*.*', {
        read: false
    })
        .pipe(clean());
});

gulp.task('zip', function () {
    return gulp.src(['**', '!__*/**', '!node_modules/**', '!src/**', '!gulpfile.js', '!package.json', '!package-lock.json', '!todo.txt', '!sftp-config.json', '!testing.html'], {
        base: '..'
    })
        .pipe(zip(project.name + '.zip'))
        .pipe(gulp.dest('__build'));
});

// TODO: should add these tasks after - 'build-vendor-css', 'build-js', 'build-vendor-js'
gulp.task('watch', function () {
    gulp.watch('src/scss/**/*.scss', gulp.series( 'scss', 'build-css', 'rtl' ));
});

gulp.task('run', gulp.series('scss', 'build-css', 'build-vendor-css', 'build-js', 'build-vendor-js', 'rtl' ));

gulp.task('build', gulp.series('run', 'clean', 'zip'));

gulp.task('default', gulp.series('run', 'watch'));
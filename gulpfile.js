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
        'assets/css/style.css',
    ])
        .pipe(rtlcss())
        .pipe(gulp.dest('assets/rtl/'));
});

gulp.task('build-rtl', () => {
    return gulp.src([
        'assets/rtl/style.css',
        'assets/rtl/rtl.css',
    ])
        .pipe(concat('styles.rtl.min.css'))
        .pipe(cleanCss())
        .pipe(gulp.dest('assets/build'));
});

// Concat and minify CSS files
gulp.task('build-css', () => {
    return gulp.src([
        'assets/css/bootstrap.min.css',
        'assets/css/font-awesome.min.css',
        'assets/css/animate.min.css',
        'assets/css/default.css',
        'assets/css/elementor.css',
        'assets/css/jquery.timepicker.min.css',
        'assets/css/jquery.pagepiling.min.css',
        'assets/css/select2.min.css',
        'assets/css/owl.carousel.min.css',
        'assets/css/owl.theme.default.min.css',
        'assets/css/magnific-popup.css',
        'assets/css/nivo-slider.min.css',
        'assets/css/style.css',
    ])
        .pipe(concat('styles.min.css'))
        .pipe(cleanCss())
        .pipe(gulp.dest('assets/build'));
});

// Concat and minify vendor css files
/*
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
*/

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
        'assets/vendor/select2.min.js',
        'assets/vendor/jquery.navpoints.js',
        'assets/vendor/jquery.countdown.min.js',
        'assets/vendor/js.cookie.min.js',
        'assets/vendor/owl.carousel.min.js',
        'assets/vendor/jquery.nivo.slider.min.js',
        'assets/vendor/waypoints.min.js',
        'assets/vendor/jquery.counterup.min.js',
        'assets/vendor/jquery.knob.js',
        'assets/vendor/jquery.appear.js',
        'assets/vendor/jquery.magnific-popup.min.js',
        'assets/vendor/theia-sticky-sidebar.min.js',
        'assets/vendor/isotope.pkgd.min.js',
        'assets/vendor/isotope-func.js',
        'assets/vendor/jquery.timepicker.min.js',
        'assets/vendor/tilt.jquery.js',
        'assets/vendor/jquery.parallax-scroll.js',
        'assets/vendor/jquery.pagepiling.min.js',
        'assets/vendor/popper.js',
        'assets/vendor/bootstrap.min.js',
        'assets/js/main.js'
    ])
        .pipe(concat('scripts.min.js'))
        .pipe(uglify())
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

//'build-js','build-vendor-js',
gulp.task('watch', function () {
    gulp.watch('src/scss/**/*.scss', gulp.series( 'scss', 'build-css', 'rtl', 'build-rtl' ));
    gulp.watch('assets/js/main.js', gulp.series( 'build-vendor-js'));
});

gulp.task('run', gulp.series('scss', 'build-css', 'build-vendor-js', 'rtl' ));

gulp.task('build', gulp.series('run', 'clean', 'zip'));

gulp.task('default', gulp.series('run', 'watch'));
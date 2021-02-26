const gulp           = require('gulp');

/**
 * Task: gulp vendor-css
 */
 gulp.task("vendor-css", function () {
    const concat       = require('gulp-concat');
    const csso         = require('gulp-csso');
    const autoprefixer = require('gulp-autoprefixer');

    return gulp
     .src([
           // Select2
          'node_modules/select2/dist/css/select2.min.css',

          // Flatpickr
          'node_modules/flatpickr/dist/flatpickr.min.css',

          // Trumbowyg
          'node_modules/trumbowyg/dist/ui/trumbowyg.min.css',
          'node_modules/trumbowyg/dist/plugins/table/ui/trumbowyg.table.css'])
     .pipe(autoprefixer({
            overrideBrowserslist: [
             "last 1 version"
            ],
            cascade: false
        }))
     .pipe(csso())
     .pipe(concat('form-vendor-build.min.css'))
     .pipe(gulp.dest("assets/dist/css/"));
 });


/**
 * Task: gulp admin-panel-css
 */
 gulp.task('form-css', function () {
    const concat       = require('gulp-concat');
    const csso         = require('gulp-csso');
    const sourcemaps   = require('gulp-sourcemaps');
    const atimport     = require("postcss-import");
    const postcss      = require("gulp-postcss");
    const autoprefixer = require('gulp-autoprefixer');

    return gulp
    .src(['assets/src/form.css'])
    .pipe(postcss([atimport()]))
    .pipe(autoprefixer({
        overrideBrowserslist: [
            "last 1 version"
        ],
        cascade: false
     }))
    .pipe(csso())
    .pipe(concat('form-build.min.css'))
    .pipe(gulp.dest("assets/dist/css/"));
 });

/**
 * Task: gulp form-js
 */
 gulp.task('form-js', function () {
    const sourcemaps = require('gulp-sourcemaps');
    const concat     = require('gulp-concat');

    return gulp.src([
                    'assets/src/flatpickr/flatpickr.js',
                    'assets/src/select/select.js',
                    'assets/src/select-media/select-media.js',
                    'assets/src/select-routable/select-routable.js',
                    'assets/src/select-tags/select-tags.js',
                    'assets/src/select-template/select-template.js',
                    'assets/src/select-visibility/select-visibility.js',
                    'assets/src/tabs/tabs.js',
                    'assets/src/trumbowyg/trumbowyg.js',
                 ])
     .pipe(sourcemaps.init())
     .pipe(concat('form-build.min.js'))
     .pipe(sourcemaps.write())
     .pipe(gulp.dest('assets/dist/js/'));
 });

/**
 * Task: gulp vendor-js
 */
 gulp.task('vendor-js', function () {
    const sourcemaps = require('gulp-sourcemaps');
    const concat     = require('gulp-concat');

    return gulp.src([
                    // ParsleyJS Form Validatator
                    'node_modules/parsleyjs/dist/parsley.min.js',

                    // Select2
                    'node_modules/select2/dist/js/select2.min.js',

                    // Flatpickr
                    'node_modules/flatpickr/dist/flatpickr.min.js',

                    // Trumbowyg
                    'node_modules/trumbowyg/dist/trumbowyg.min.js',
                    'node_modules/trumbowyg/dist/plugins/noembed/trumbowyg.noembed.min.js',
                    'node_modules/trumbowyg/dist/plugins/table/trumbowyg.table.min.js'
                 ])
     .pipe(sourcemaps.init())
     .pipe(concat('form-vendor-build.min.js'))
     .pipe(sourcemaps.write())
     .pipe(gulp.dest('assets/dist/js/'));
 });

/**
 * Task: gulp trumbowyg-fonts
 */
 gulp.task('trumbowyg-fonts', function () {
    return gulp.src(['node_modules/trumbowyg/dist/ui/icons.svg'])
        .pipe(gulp.dest('assets/dist/fonts/trumbowyg'));
 });

/**
 * Task: gulp trumbowyg-langs
 */
 gulp.task('trumbowyg-langs', function () {
    return gulp.src(['node_modules/trumbowyg/dist/*langs/**/*'])
        .pipe(gulp.dest('assets/dist/lang/trumbowyg'));
 });

/**
 * Task: gulp flatpickr-langs
 */
 gulp.task('flatpickr-langs', function () {
    return gulp.src(['node_modules/flatpickr/dist/*l10n/**/*'])
        .pipe(gulp.dest('assets/dist/lang/flatpickr'));
 });

/**
 * Task: gulp default
 */
 gulp.task(
     'default',
     gulp.series(
         'trumbowyg-fonts',
         'trumbowyg-langs',
         'flatpickr-langs',
         'vendor-css',
         'form-css',
         'vendor-js',
         'form-js'
     )
 );

/**
 * Task: gulp watch
 */
 gulp.task('watch', function () {
    gulp.watch(
        ["fieldsets/**/*.html", "assets/src/"],
        gulp.series('vendor-css', 'form-css')
    );
 });

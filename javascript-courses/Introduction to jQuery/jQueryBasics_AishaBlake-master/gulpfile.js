var gulp = require('gulp');

var browserSync = require('browser-sync').create();
var sass = require('gulp-sass');
var clean = require('gulp-clean');

var bases = {
  app: 'app/',
  dist: 'dist/'
};

var paths = {
  // scripts: ['scripts/*.js'],
  // lib: ['lib/**/*.*'],  //'lib/**/*.js', 'lib/**/*.css'
  styles: ['sass/*.css'],
  html: ['index.html'],
  // images: ['img/**/*.png']
};

// Static Server + watching scss/html files
gulp.task('serve', ['sass'], function() {

    browserSync.init({
        server: "./app"
    });

    gulp.watch("app/sass/*.scss", ['sass']);
    gulp.watch("app/*.html").on('change', browserSync.reload);
});

gulp.task('sass', function () {
  return gulp.src('app/sass/*.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('app'))
    .pipe(browserSync.stream());
});

// Delete the dist directory
gulp.task('clean', function() {
  return gulp.src(bases.dist)
  .pipe(clean());
});

// Copy all other files to dist directly
gulp.task('copy', ['clean'], function() {
  // Copy html
  gulp.src(paths.html, {cwd: bases.app})
  .pipe(gulp.dest(bases.dist));

  // Copy styles
  gulp.src(paths.styles, {cwd: bases.app})
  .pipe(gulp.dest(bases.dist));

  // Copy lib scripts, maintaining the original directory structure
  // gulp.src(paths.lib, {cwd: 'app/**'})
  // .pipe(gulp.dest(bases.dist));
});

// A development task to run anytime a file changes
gulp.task('watch', function() {
  gulp.watch('app/**/*', ['scripts', 'copy']);
});

// Define the default task as a sequence of the above tasks
gulp.task('default', ['clean', 'sass', 'copy']);

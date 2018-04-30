'use strict';

//Dependencies required
var gulp = require('gulp');
//IMAGES
var changed = require('gulp-changed');
var imagemin = require('gulp-imagemin');
//CSS & JS
var concat = require('gulp-concat');
var rename = require('gulp-rename');
var sourceMap = require('gulp-sourcemaps');
var uglify = require('gulp-uglify');
// Sass
var sass = require('gulp-sass');
var plumber = require('gulp-plumber');
var del = require('del');
var browserSync = require('browser-sync').create();

//javascript optimization, source maps included
var jsSource = [
  'src/scripts/app.js',
  'src/scripts/preloader.js',
  'src/scripts/scroll-down.js',
  'src/scripts/scroll-top.js',
];

gulp.task('scripts', function(){
  gulp.src(jsSource)
  .pipe(sourceMap.init())
  .pipe(concat('app.js'))
  .pipe(uglify())
  .pipe(sourceMap.write())
  .pipe(gulp.dest('assets/scripts/'))
  .pipe(browserSync.reload({
    stream: true
  }))
})

//image minification -- only changes if necessary
gulp.task('imagemin', function(){
  var img_src = 'src/images/*';
  var img_dest = 'assets/images';
  gulp.src(img_src)
  .pipe(changed(img_dest))
  .pipe(imagemin())
  .pipe(gulp.dest(img_dest));
});

// compile Sass files
gulp.task('sass', function(){
  gulp.src('src/styles/main.scss')
  .pipe(sourceMap.init())
  .pipe(plumber())
  .pipe(sass())
  .pipe(sourceMap.write())
  .pipe(gulp.dest('assets/styles/'))
  //browserSync reload application
  .pipe(browserSync.reload({
    stream: true
  }))
})

//browserSync reload for CSS/Sass changes
gulp.task('browserSync', function() {
  browserSync.init({
    proxy: 'localhost:8888/portfolio/'
  })
});

gulp.task('clean', function() {
  del([
    'assets/images/*',
    'assets/scripts/*',
    'assets/styles/*'
  ]);
})

// build task for production server. launched via /bin/build.sh
gulp.task('build', ['imagemin', 'scripts', 'sass'], function(){
  console.log('Build task running -*-*-*-*-*-*-*-*-*-*-*-*-*-*');
})

// Gulp defaut tasks
gulp.task('default', ['imagemin', 'scripts', 'sass', 'browserSync'], function(){
  console.log("Default gulp task *-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*")
  gulp.watch('src/styles/**/*.scss', ['sass']);
  gulp.watch('src/scripts/**/*.js', ['scripts']);
});

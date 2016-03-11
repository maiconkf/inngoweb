var gulp = require('gulp'),
	sass = require('gulp-sass'),
	concat = require('gulp-concat'),
	uglify = require('gulp-uglify'),
	cssmin = require('gulp-cssmin'),
	stripCssComments = require('gulp-strip-css-comments'),
	imagemin = require('gulp-imagemin'),
	pngquant = require('imagemin-pngquant'),
    gulpif = require('gulp-if'),
    sprity = require('sprity');


var scss = ['./sass/**/*.scss'],
	css  = ['./dist/css/materialize.css', './dist/css/reset.css', './dist/css/fonts.css', './dist/css/main.css', './dist/css/hamburger.css'],
	js	 = ['./js/vendor/jquery.min.js', './js/vendor/picker.js', './js/vendor/picker.date.js', './js/main.js'];


gulp.task('scss', function() {
    gulp.src(scss)
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('./dist/css/'));
});

gulp.task('styles', function(){
    gulp.src(css)
    .pipe(concat('styles.min.css'))
    .pipe(stripCssComments({all: true}))
    .pipe(cssmin())
    .pipe(gulp.dest('./dist/css/'));
});

gulp.task('scripts', function() {
  gulp.src(js)
    .pipe(concat('scripts.min.js'))
    .pipe(uglify())
    .pipe(gulp.dest('./dist/js/'));
});

gulp.task('sprites', function () {
  return sprity.src({
    src: './dist/img/sprite/**/*.{png,jpg}',
    style: 'sprite.scss',
    processor: 'sass',
    'style-type': 'scss'
  })
  .pipe(gulpif('*.png', gulp.dest('./dist/img/'), gulp.dest('./sass/')))
});

gulp.task('default',function() {
    gulp.watch(scss, ['scss']);
    gulp.watch(css, ['styles']);
    gulp.watch(js, ['scripts']);
    gulp.watch('./dist/img/sprite/**/*.{png,jpg}', ['sprites']);
    gulp.src('./img/**/*').pipe(imagemin({progressive: true, use: [pngquant()]})).pipe(gulp.dest('./dist/img/'));
});
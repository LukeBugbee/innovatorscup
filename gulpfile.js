var gulp         = require('gulp');
var sass         = require('gulp-sass');
var watch        = require('gulp-watch');
var autoprefixer = require('gulp-autoprefixer');
var browserSync = require('browser-sync').create();


/* Task to compile sass */
gulp.task('compile-sass', function() {
	gulp.src('./assets/css/style.scss')
	.pipe(sass())
	.pipe(autoprefixer({
		browsers: ['last 2 versions', 'IE > 11'],
		cascade: false,
		grid: true
	}))
	.pipe(gulp.dest('./assets/src/css/'))
	;
});

/* Task to watch sass changes */
gulp.task('watch', function() {
	gulp.watch('./assets/css/*.scss' , ['compile-sass']);
	gulp.watch(['**/*.php', 'assets/**/*.js'], function(){
		browserSync.reload();
	});
});

gulp.task('browserSync', function() {
    browserSync.init({
        proxy: "innovators-cup.test",
		// open: false
    });
});

/* Task when running `gulp` from terminal */
gulp.task('default', ['compile-sass', 'watch', 'browserSync']);






// var cleanCSS     = require('gulp-clean-css');
// var concat       = require('gulp-concat');
// var uglify       = require('gulp-uglify');




// gulp.task('minify-css', function() {
// 	gulp.src([
// 			'./src/css/vendor/*.css',
// 			'./src/css/style.css'
// 		])
//         .pipe(concat('style.css'))
//         .pipe(cleanCSS())
//         //.pipe(sourcemaps.write())
//         .pipe(gulp.dest('./public/css'))
// 		.pipe(browserSync.stream())
// 		;
// });

// gulp.task('minify-js', function() {
// 	gulp.src([
// 			'./src/js/jquery-3.1.0.min.js',
// 			'./src/js/TweenMax.min.js',
// 			'./src/js/ScrollMagic.min.js',
// 			'./src/js/ScrollToPlugin.min.js',
// 			'./src/js/vendor/*.js',
// 			'./src/js/main.js'
// 		])
// 		//.pipe(sourcemaps.init())
// 		.pipe(concat('all.min.js'))
// 		.pipe(uglify({
// 			mangle: false
// 		}))
// 		.pipe(gulp.dest('./public/js'));
//
// 		browserSync.reload();
// });
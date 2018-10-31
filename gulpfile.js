var gulp = require('gulp'),
pump = require('pump'),
sass = require('gulp-sass'),
concat = require('gulp-concat'),
autoprefixer = require('gulp-autoprefixer'),
uglify = require('gulp-uglify'),
sourcemaps = require('gulp-sourcemaps'),
watch = require('gulp-watch'),
bs = require('browser-sync').create();

gulp.task('sass', (cb) => {
	pump([
		gulp.src([
			'assets/scss/*.scss',
			// 'assets/scss/**/*.scss'
		]),
		// sourcemaps.init(),
		concat('styles.min.scss'),
		sass({
			outputStyle: 'compressed',
			// includePaths: './src/scss'
		}),
		autoprefixer({
			browsers: ['last 2 versions'],
			cascade: false
		}),
		// sourcemaps.write(),
		gulp.dest('assets/css'),
		bs.stream()
		], cb);
});

gulp.task('js', (cb) => {
	pump([
		gulp.src([
			'node_modules/underscore/underscore-min.js',
			'node_modules/imagesloaded/imagesloaded.pkgd.min.js',
			'assets/js/vendors/jquery-3.2.1.min.js',
			'assets/js/scripts.js'
			]),
    // sourcemaps.init(),
    concat('scripts.min.js'),
    uglify(),
    // sourcemaps.write(),
    gulp.dest('assets/js'),
    bs.stream()
    ], cb);
});

gulp.task('serve', (cb) => {
	bs.init({
		// proxy: 'innovators-cup.test'
		server: {
            baseDir: "./"
        }
	});

	gulp.watch(['assets/**/*.js', '!assets/js/scripts.min.js'], ['js']);
	gulp.watch(['assets/scss/**/*.scss'], ['sass']);
	gulp.watch(['**/*.html', '**/*.php']).on('change', bs.reload);
});

gulp.task('default', ['serve']);

var gulp = require('gulp'),
	pump = require('pump'),
	sass = require('gulp-sass'),
	concat = require('gulp-concat'),
	autoprefixer = require('gulp-autoprefixer'),
	cleanCSS = require('gulp-clean-css'),
	minify = require('gulp-minify'),
	uglify = require('gulp-uglify'),
	rename = require('gulp-rename'),
	header = require('gulp-header'),
	plumber = require('gulp-plumber'),
	notify = require("gulp-notify"),
	gutil = require('gulp-util'),
	watch = require('gulp-watch'),
	browserSync = require('browser-sync').create();

var jsFiles = [
	'assets/js/vendors/jquery-3.2.1.min.js',
	'assets/js/scripts.js'
];

// Sass
gulp.task('sass', function() {
	console.log('compiling sass');

	gulp.src(['assets/scss/*.scss', 'assets/scss/**/*.scss'])
		.pipe(plumber({
			errorHandler: notify.onError("Error: <%= error.message %>")
		}))
		.pipe(sass().on('error', sass.logError))
		.pipe(concat('styles.min.css'))
		.pipe(cleanCSS())
		.pipe(autoprefixer({
			browsers: ['last 2 versions'],
			cascade: false
		}))
		.pipe(gulp.dest('assets/css'))
		.pipe(browserSync.stream());
});

// JS
gulp.task('js', function() {
	console.log('compile js');

	// concat
	gulp.src(jsFiles)
		.pipe(concat('scripts.concat.js'))
		.pipe(gulp.dest('assets/js'))

		// minify
		.pipe(minify())
		.pipe(rename('scripts.min.js'))
		.pipe(gulp.dest('assets/js'));

	browserSync.reload();
});

// Browser Sync
gulp.task('browserSync', function() {
	browserSync.init({
		proxy: 'innovators-cup.test',
		// open: false
	});
});


// watch
gulp.task('watch', function() {
	// js
	watch(['assets/js/*.js'], function() {
		gulp.start('js'); // gulp.start will depreciate in gulp v4
	});

	// sass
	watch(['assets/scss/*.scss', 'assets/scss/**/*.scss'], function() {
		gulp.start('sass'); // gulp.start will depreciate in gulp v4
	});

	// php
	watch(['*.php', '**/*.php'], function() {
		browserSync.reload();
	});
});

// Tasks
gulp.task('default', ['browserSync', 'watch']);
var gulp    = require('gulp'),
    sass    = require('gulp-ruby-sass'),
    include = require('gulp-include'),
    uglify  = require('gulp-uglify');

// Task Untuk Javascript
gulp.task("script", function(){
    gulp.src('assets/js/admin.js')
        .pipe(include())
        //.pipe(uglify())
        .pipe(gulp.dest('public/js'));
});

// Task Untuk Stylesheet
gulp.task("sass", function(){
    gulp.src('assets/scss/main.scss')
        .pipe(sass({style: 'compressed'}))
        .pipe(gulp.dest('public/css'));
});
// Watcher
gulp.task('watch', function(){
    gulp.watch('assets/js/**/*.js', ['script']);
    gulp.watch('assets/scss/**/*.scss', ['sass']);
});

// Task Default
gulp.task("default", ['script','sass','watch']);

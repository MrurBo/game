var gulp = require('gulp');
var rena = require('gulp-rename');
var sass = require('gulp-sass')(require('node-sass'));

gulp.task('styles', () => {
    return gulp.src('*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(rena('style.css'))
        .pipe(gulp.dest('css/'));
});


gulp.task('default', gulp.series(['styles']));
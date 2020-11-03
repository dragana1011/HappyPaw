const gulp = require('gulp');
const sass = require('gulp-sass');
const del = require('del');

gulp.task('compile', () => {
    return gulp.src('sass/**/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('./css/'));
});

gulp.task('clean', () => {
    return del([
        'css/main.css',
    ]);
});

gulp.task('watch', () => {
    gulp.watch('sass/**/*.scss', (done) => {
        gulp.series(['clean', 'compile'])(done);
    });
});

// gulp.task('default', gulp.series(['clean', 'compile']));
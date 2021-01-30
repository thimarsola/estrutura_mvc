const gulp = require('gulp');
const webp = require('gulp-webp');
const image = require('gulp-image');
const watch = require('gulp-watch');

gulp.task('webp', gulp.series(function () {
    return gulp.src('./public/assets/dist/*')
            .pipe(webp())
            .pipe(gulp.dest('./public/assets/img'));
}));

gulp.task('image', gulp.series(function () {
    return gulp.src('./public/assets/dist/*')
            .pipe(image())
            .pipe(gulp.dest('./public/assets/img'));
}));

gulp.task('watch', gulp.series(function (){
    gulp.watch(['./public/assets/dist/**'], gulp.parallel(['webp', 'image']));
}));

gulp.task('default', gulp.series(['webp', 'image', 'watch']));
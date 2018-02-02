
// Sass configuration
var gulp = require('gulp');
var sass = require('gulp-sass');
var gulpCompass  = require('gulp-compass');

gulp.task('sass', function() {
    gulp.src('css/*.scss')
        .pipe(sass())
        .pipe(gulp.dest(function(f) {
            return f.base;
        }))
});

gulp.task('default', ['sass'], function() {
    gulp.watch('css/*/*.scss', ['sass']);
})

gulp.task('scss-lint', function () {
  return gulp.src('css/*.scss')
    .pipe(cache('scsslint'))
    .pipe(scsslint({
      'config': '.scss-lint.yml'
    }));
});
// gulp.task('styles', function () {
//     gulp.src('css/*.scss') // sass 來源路徑
//         .pipe(gulpCompass({
//             css: 'assets/css',           // compass 輸出位置
//             sass: 'assets/sass',      // sass 來源路徑
//             image: 'assets/images',   // 圖片來源路徑
//             style: 'compressed',                // CSS 處理方式，預設 nested（expanded, nested, compact, compressed）
//             comments: false
//             // ,                    // 是否要註解，預設(true)
//             // require: ['susy'],                  // 額外套件 susy
//         }));
//         // .pipe(gulp.dest('app/assets/temp')); // 輸出位置(非必要)
// });
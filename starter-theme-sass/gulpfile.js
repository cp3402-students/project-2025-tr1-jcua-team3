const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));

// Compile SCSS to CSS
function compileSass() {
    return gulp.src('sass/**/*.scss') // Source folder for SCSS files
        .pipe(sass().on('error', sass.logError)) // Compile SCSS, log errors if any
        .pipe(gulp.dest('./')); // Output to the project root
}

// Watch for Changes
function watchFiles() {
    gulp.watch('sass/**/*.scss', compileSass); // Watch SCSS files and run compileSass on changes
}

// Default Task
exports.default = gulp.series(compileSass, watchFiles);
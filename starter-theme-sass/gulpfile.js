const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass')); // Explicitly require the 'sass' compiler

// Function to compile Sass files
function compileSass() {
    return gulp.src('starter-theme-sass/sass/style.scss', { allowEmpty: true }) 
        .pipe(sass().on('error', sass.logError)) // Compile SCSS and log errors
        .pipe(gulp.dest('starter-theme-sass/css')); // Output directory for compiled CSS (e.g., 'css/' folder)
}

// Register the 'sass' task
gulp.task('sass', compileSass);

gulp.task('watch', function() {
    gulp.watch('project-2025-tr1-jcua-team3/starter-theme-sass/sass/**/*.scss', gulp.series('sass')); // Watch all .scss files for changes
});


// const gulp = require('gulp');
// const sass = require('gulp-sass')(require('sass'));

// // Compile SCSS to CSS
// function compileSass() {
//     return gulp.src('sass/**/*.scss') // Source folder for SCSS files
//         .pipe(sass().on('error', sass.logError)) // Compile SCSS, log errors if any
//         .pipe(gulp.dest('./')); // Output to the project root
// }

// // Watch for Changes
// function watchFiles() {
//     gulp.watch('sass/**/*.scss', compileSass); // Watch SCSS files and run compileSass on changes
// }

// // Default Task
// exports.default = gulp.series(compileSass, watchFiles);
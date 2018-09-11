var 	gulp 						= require('gulp'),
			browserSync 		= require ('browser-sync');

gulp.task('browserSync', function () {
    browserSync({
        proxy: "585mail",
        notify: false,
        open: true,
        // online: false,
        // tunnel: true, tunnel: "585mail", // Demonstration page: http://projectname.localtunnel.me
    })
}); 
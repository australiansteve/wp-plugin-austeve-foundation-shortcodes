// Load our plugins
var	gulp			=	require('gulp')

//Our 'deploy' task which deploys on a local dev environment

gulp.task('deploy', function() {

	var files = [
		'page-templates/**/*.php',
		'js/**/*.js',
		'*.php',
		'*.css'];

	var dest = '/Applications/MAMP/htdocs/ssj/wp-content/plugins/austeve-foundation-shortcodes';

	return gulp.src(files, {base:"."})
	        .pipe(gulp.dest(dest));
});

// Our default gulp task, which runs all of our tasks upon typing in 'gulp' in Terminal
gulp.task('default', ['deploylocal']);

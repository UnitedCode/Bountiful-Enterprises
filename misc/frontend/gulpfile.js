var gulp = require("gulp");
var sass = require("gulp-sass");
var pug = require("gulp-pug");
var ts = require("gulp-typescript");
var browserSync = require("browser-sync").create();

paths = {
	node: "./node_modules/",
	public: "./public/",
	source: "./src/", 
}

paths.jquery = paths.node + "jquery/dist/jquery.min.js";
paths.bootstrapCSS = paths.node + "bootstrap/dist/css/bootstrap.min.css";
paths.bootstrapJs = paths.node + "bootstrap/dist/js/bootstrap.min.js";
paths.js = paths.public + "js/";
paths.css = paths.public + "css/";
paths.sass = paths.source + "sass/";
paths.pug = paths.source + "pug/";
paths.typscript = paths.source + "typescript/";


gulp.task("copy", function() {
	// Copy css files to public folder
	gulp.src(paths.bootstrapCSS)
		.pipe(gulp.dest(paths.css));
	// Copy JS files to public folder
	gulp.src([paths.jquery, paths.bootstrapJs])
		.pipe(gulp.dest(paths.js));
});

// Compile sass code
gulp.task("sass", function() {
	gulp.src(paths.sass + "*.scss")
		.pipe(sass({
			outputStyle: "expanded"
		}).on("error", sass.logError))
		.pipe(gulp.dest(paths.css));
});

// Compile sass code for production
gulp.task("sass-production", function() {
	gulp.src(paths.sass + "*.scss")
		.pipe(sass({
			outputStyle: "compressed"
		}).on("error", sass.logError))
		.pipe(gulp.dest(paths.css));
});

// Compile typescript code
gulp.task("typescript", function() {
	gulp.src([paths.typscript + "**/*.ts", "!" + paths.typscript + "**/_*.ts"])
		.pipe(ts({
			target: "ES5"
		}))
		.pipe(gulp.dest(paths.js));
});

gulp.task("pug", function() {
	gulp.src([paths.pug + "**/*.pug", "!" + paths.pug + "**/_*.pug"])
		.pipe(pug({
			pretty: true
		}).on('error', function (e) {
			console.log(e);
		}))
		.pipe(gulp.dest(paths.public));
});

gulp.task('watch',function() {
		gulp.start(["pug"], ["sass"], ["typescript"]);
		browserSync.init({
			open: "external",
			port: 8080,
			server: "public/",
			logFileChanges: true
		});
    gulp.watch(paths.pug + "**/*", ["pug"]);
    gulp.watch(paths.sass + "**/*", ["sass"]);
    gulp.watch(paths.typscript + "**/*", ["typescript"]);
    gulp.watch(paths.source + "**/*").on("change", function() {
			// Delay browser reload by 1 second
			setTimeout(function () {
				browserSync.reload()
			}, 2000)
		});
});

gulp.task("default", ["watch"]);
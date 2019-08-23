/**
 *
 * Gulp Modules
 *
 */
var gulp = require( 'gulp' );
var rename = require( 'gulp-rename' );
var scss = require( 'gulp-sass' );
var cssPrefixer = require( 'gulp-autoprefixer' );
var sourcemaps = require( 'gulp-sourcemaps' );
var browserify = require( 'browserify' );
var babelify = require( 'babelify' );
var source = require( 'vinyl-source-stream' );
var buffer = require( 'vinyl-buffer' );
var uglify = require( 'gulp-uglify' );

/**
 *
 * Gulp Variables
 *
 */
var adminStyleSRC = 'assets/src/scss/main.scss';
// var publicStyleSRC = 'assets/src/scss/public.scss';
// var styleWatch = 'assets/src/scss/**/*.scss';
var styleWatch = 'assets/src/scss/*.scss';
var styleDIST = './assets/dist/css/';

var adminJsSRC = 'script.js';
var adminJsFolder = 'assets/src/js/';
var jsAdminFILES = [adminJsSRC];

// var publicJsSRC = 'react-script-1.js';
// var publicJsFolder = 'assets/src/js/';
// var jsPublicFILES = [publicJsSRC];

var reactApp1SRC = 'react-script-1.js';
var publicJsFolder = 'assets/src/js/';
var jsReact1FILES = [reactApp1SRC];

var reactApp2SRC = 'react-script-2.js';
var publicJsFolder = 'assets/src/js/';
var jsReact2FILES = [reactApp2SRC];

var reactApp3SRC = 'react-script-3.js';
var publicJsFolder = 'assets/src/js/';
var jsReact3FILES = [reactApp3SRC];


// var jsWatch = 'assets/src/js/**/*.js';
var jsWatch = 'assets/src/js/*.js';
var jsDIST = './assets/dist/js/';

			
/**
 *
 * Gulp SCSS to CSS
 *
 */
gulp.task( 'styles', function(){

	gulp.src( adminStyleSRC )
		.pipe( sourcemaps.init() )
		.pipe( scss({
			errorLogToConsole: true,
			outputStyle: 'compressed'
		}) )
		.on( 'error', console.error.bind( console ) )
		.pipe( cssPrefixer({
			browsers: ['last 2 versions'],
			cascade: false
		}) )
		.pipe( rename( { suffix: '.min' } ) )
		.pipe( sourcemaps.write( './' ) )
		.pipe( gulp.dest( styleDIST ) );

});


/**
 *
 * JS Minification
 *
 */
gulp.task( 'js', function(){

	jsAdminFILES.map( function( adminEntry ){

		return browserify({
			entries: [adminJsFolder + adminEntry]
		})
		.transform( babelify, { presets: ['env'] } )
		.bundle()
		.pipe( source( adminEntry ) )
		.pipe( rename( { extname: '.min.js' } ) )
		.pipe( buffer() )
		.pipe( sourcemaps.init({ loadMaps: true }) )
		.pipe( uglify() )
		.pipe( sourcemaps.write( './' ) )
		.pipe( gulp.dest( jsDIST ) )

	});


	jsReact1FILES.map( function( publicEntry ){

		return browserify({
			entries: [publicJsFolder + publicEntry]
		})
		.transform( babelify, { presets: ['env'] } )
		.bundle()
		.pipe( source( publicEntry ) )
		.pipe( rename( { extname: '.min.js' } ) )
		.pipe( buffer() )
		.pipe( sourcemaps.init({ loadMaps: true }) )
		.pipe( uglify() )
		.pipe( sourcemaps.write( './' ) )
		.pipe( gulp.dest( jsDIST ) )

	});

	jsReact2FILES.map( function( publicEntry ){

		return browserify({
			entries: [publicJsFolder + publicEntry]
		})
		.transform( babelify, { presets: ['env'] } )
		.bundle()
		.pipe( source( publicEntry ) )
		.pipe( rename( { extname: '.min.js' } ) )
		.pipe( buffer() )
		.pipe( sourcemaps.init({ loadMaps: true }) )
		.pipe( uglify() )
		.pipe( sourcemaps.write( './' ) )
		.pipe( gulp.dest( jsDIST ) )

	});

	jsReact3FILES.map( function( publicEntry ){

		return browserify({
			entries: [publicJsFolder + publicEntry]
		})
		.transform( babelify, { presets: ['env'] } )
		.bundle()
		.pipe( source( publicEntry ) )
		.pipe( rename( { extname: '.min.js' } ) )
		.pipe( buffer() )
		.pipe( sourcemaps.init({ loadMaps: true }) )
		.pipe( uglify() )
		.pipe( sourcemaps.write( './' ) )
		.pipe( gulp.dest( jsDIST ) )

	});
});

/**
 *
 * Gulp Default
 *
 */
gulp.task('default', [ 'styles', 'js' ]);

/**
 *
 * Gulp Watch
 *
 */
gulp.task( 'watch', ['default'], function(){

	gulp.watch( styleWatch, ['styles'] );
	gulp.watch( jsWatch, ['js'] );
});















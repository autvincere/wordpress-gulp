"use strict";

var gulp = require('gulp'),
    sass = require('gulp-sass'),
    browserSync = require('browser-sync'),
    autoprefixer = require('gulp-autoprefixer'),
    reload = browserSync.reload;

//Directorios
var config = {
    scssDir: 'src/scss',
    cssDir: 'tranbip/assets/css',
    jsDir: 'tranbip/assets/js',
    functionDir: 'tranbip/assets/functions',
    imgDir: 'tranbip/assets/img',
    htmlDir: 'tranbip',
    cssWordpress: 'tranbip'
};


// Compilar SASS files
gulp.task('sass', function () {
    gulp.src(config.scssDir + '/*.scss')

        .pipe(sass({
            includedPaths: ['scss']
        }))
        .pipe(autoprefixer({
            browsers: ['> 1%', 'last 60 versions', 'Firefox >= 20', 'ie >= 9'],
            cascade: false
        }))
        .pipe(
            gulp.dest(config.cssWordpress)
        )
});


///// Get PHP /////
gulp.task('php', function () {
    gulp.src([
        config.htmlDir + '/*.php'
    ],[
        config.functionDir + '/*.php'
    ]);
//        .pipe(gulp.dest(' '))
});


// local
gulp.task('browserSync', ['sass'], function () {
    browserSync.init([
    'tranbip/assets/css/*.css',
    'tranbip/assets/js/*.js',
    'tranbip/assets/functions/*.php',
    'tranbip/*.php',
    'tranbip/*.css'
    ], {
        
        proxy: "http://localhost:8888/tranbip/",//http://localhost:8888/html_2/
        // port: 8888,
        browser: "google chrome"
//        
//        server: {
//            baseDir: 'tranbip'
//        },
//        startPath: "/index.php"
        
//        proxy: "http://localhost/tranbip/"
//        proxy: '127.0.0.1:8888',
//        ,port: 8888
//        open: true,
//        notify: false,
//        files: [config.htmlDir + '/*.php']
    })
    gulp.watch([config.htmlDir + '/*.php']).on('change', browserSync.reload);;
});


// Live reload browserSync
gulp.task('watch', ['browserSync', 'sass', 'php'], function () {
    gulp.watch([config.scssDir + '/*.scss'], ['sass']);
    gulp.watch([config.cssWordpress + '/*.css']);
    gulp.watch([config.htmlDir + '/*.php']);
});

// Compilar todas las tareas
gulp.task('default', ['watch']);
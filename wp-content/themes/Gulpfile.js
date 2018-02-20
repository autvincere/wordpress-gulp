"use strict";

var gulp = require('gulp'),
    sass = require('gulp-sass'),
    autoprefixer = require('gulp-autoprefixer'),
    notify = require('gulp-notify'),
    sourcemaps = require('gulp-sourcemaps'),
    browserSync = require('browser-sync'),
    reload = browserSync.reload;

//Directorios
var config = {
    scssDir: 'src/scss',
    cssDir: 'blank/assets/css',
    jsDir: 'blank/assets/js',
    functionDir: 'blank/assets/functions',
    imgDir: 'blank/assets/img',
    htmlDir: 'blank',
    cssWordpress: 'blank'
};


// Compilar SASS files
gulp.task('sass', function () {
    gulp.src(config.scssDir + '/*.scss')
        .pipe(sourcemaps.init())// Se analiza maps, para crear carpeta
        .pipe(sass({
            includedPaths: ['scss']
        }))
        .pipe(autoprefixer({
            browsers: ['> 1%', 'last 60 versions', 'Firefox >= 20', 'ie >= 9'],
            cascade: false
        }))
        .pipe(sourcemaps.write('maps')) //se crea carpeta maps, para guardar sourcemaps
        .pipe(gulp.dest(config.cssWordpress))
        .pipe(notify({message: 'css tarea completa'}));
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
        'blank/assets/css/*.css',
        'blank/assets/js/*.js',
        'blank/assets/functions/*.php',
        'blank/*.php',
        'blank/*.css'
    ], {
        
        proxy: "http://localhost:8888/blank/", 
        browser: "google chrome"

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
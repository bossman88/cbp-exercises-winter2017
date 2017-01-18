var gulp = require('gulp');
var browserSync = require('browser-sync').create();

gulp.task('default', 

    function () {
        browserSync.init({
            proxy: {
                target: "http://www.bootcamp.local",
            },
            open: 'external',
            host: 'www.bootcamp.local',
            port: 3000;
            files: ['**/*.css', '**/*.html'
            ]
        });
    }
);

var browserSync = require('browser-sync').create();
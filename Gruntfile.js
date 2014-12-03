module.exports = function(grunt) {
    grunt.initConfig({
        phpunit: {
            classes: {
                dir: 'src/GPI/OfferBundle/'
            },
            options: {
                bin: 'bin/phpunit',
                bootstrap: 'app/tests.bootstrap.php',
                logTap: 'app/logs/tests.log',
                colors: true
            }
        },
        watch: {
            test: {
                files: ['src/**/*.*'],
                tasks: ['phpunit']
            }
        }
    });

    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-phpunit');
};

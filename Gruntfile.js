module.exports = function(grunt) {
    grunt.initConfig({
        phpunit: {
            classes: {
                dir: 'src/GPI/'
            },
            options: {
                bin: 'bin/phpunit',
                bootstrap: 'app/tests.bootstrap.php',
                logTap: 'app/logs/tests.log',
                colors: true
            }
        },
        phpcs: {
            application: {
                dir: [
                    'src/GPI/AuctionBundle/**/*.php',
                    'src/GPI/CoreBundle/**/*.php'
                ]
            },
            options: {
                bin: 'bin/phpcs',
                standard: 'PSR2'
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
    grunt.loadNpmTasks('grunt-phpcs');
};

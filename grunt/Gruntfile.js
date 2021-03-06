var tasks = ['sass:dist'];

module.exports = function (grunt) {

  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    sass: {
      dist: {
        options:{
          lineNumbers:true
        },
        files: [
          {
            expand: true,
            cwd: '../css/scss',
            src: ['**/*.scss'],
            dest: '../css',
            ext: '.css'
          }
        ]
      }
    },
    jade:{
      html: {
        options:{
          pretty:true
        },
        files: [
          {
            expand: true,
            cwd: 'jade',
            src: ['**/*.jade'],
            dest: 'html/',
            ext: '.html'
          }
        ]
      }
    },
    copy:{
      dev: {
        files: [{
          expand: true,
          cwd: 'html',
          src: ['scss/style.css'],
          dest: 'html/'
        }]
      }
    },
    watch :{
      assets: {

        // Assets to watch:
        files: ['../css/**/*'],

        // When assets are changed:
        tasks: tasks
      }
    }
  });

  // Load the plugin that provides the "uglify" task.
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-jade');
  grunt.loadNpmTasks('grunt-contrib-copy');
  grunt.loadNpmTasks('grunt-contrib-watch');

  // Default task(s).
  grunt.registerTask('default', tasks.concat(['watch:assets']));

};
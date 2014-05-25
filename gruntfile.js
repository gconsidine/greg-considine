module.exports = function (grunt) {

  /* Path to folder containing css/ and js/ */
  var path = __dirname + "/public/gc/";

  grunt.initConfig({

    pkg: grunt.file.readJSON("package.json"),

    /* Concatenate JavaScript and CSS files */
    concat : {
      js: {
        src: [
          path + "js/jquery.js",
          path + "js/bootstrap.js", 
          path + "js/gc.js"
        ],
        dest: path + "js/combined.js"
      },
      css: {
        src: [path + "css/bootstrap.css", path + "css/gc.css"],
        dest: path + "css/combined.css"
      }
    },

    /* Minify CSS */
    cssmin: {
      css: {
        src: path + "css/combined.css",
        dest: path + "css/gc.min.css"
      }
    },

    /* Minify JavaScript */
    uglify: {
      js: {
        files: {
          "public/gc/js/gc.min.js": [path + "js/combined.js"]
        }
      }
    },
    
    /* Optimize images */
    imagemin: {
      dynamic: {
        files: [{
          expand: true,
          cwd: path + "img/raw/",
          src: ["*.{png,jpg,gif}"],
          dest: path + "img/prod/"
        }]
      }
    },

    /* Semantic versioning */
    bump: {
      options : {
        files: ["package.json", "bower.json"],
        updateConfigs: [],
        commit: false,
        createTag: true,
        tagName: "v%VERSION%",
        tagMessage: "Version %VERSION%",
        push: false
      }
    },

    /* Shell commands for removing temp files and moving essential bower_components */
    shell: {
      copyJquery: {
        command: 'cp bower_components/jquery/dist/jquery.js public/gc/js'
      },

      copyBootstrap: {
        command: [
          'cp bower_components/bootstrap/dist/js/bootstrap.js public/gc/js',
          'cp bower_components/bootstrap/dist/css/bootstrap.css public/gc/css',
          'cp bower_components/bootstrap/dist/fonts/* public/gc/fonts'
        ].join('&&')
      },

      cleanUp: {
        command: [
          'rm public/gc/js/combined.js',
          'rm public/gc/css/combined.css'
        ].join('&&')
      }
    }

  });

  grunt.loadNpmTasks("grunt-contrib-concat");
  grunt.loadNpmTasks("grunt-contrib-uglify");
  grunt.loadNpmTasks("grunt-contrib-cssmin");
  grunt.loadNpmTasks("grunt-contrib-imagemin");
  grunt.loadNpmTasks("grunt-shell");
  grunt.loadNpmTasks("grunt-bump");

  grunt.registerTask("default", []);

  grunt.registerTask("build", [
    "shell:copyJquery",
    "shell:copyBootstrap",
    "concat:js",
    "concat:css",
    "cssmin:css",
    "uglify:js",
    "imagemin",
    "shell:cleanUp"
  ]);

};

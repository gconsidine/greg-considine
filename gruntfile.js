module.exports = function (grunt) {

  /* Path to folder containing css/ and js/ */
  var path = "/var/www/gc/public/gc/";

  grunt.initConfig({

    pkg: grunt.file.readJSON("package.json"),

    /* Concatenate JavaScript and CSS files */
    concat : {
      js: {
        src: [
          path + "js/jquery-1.10.2.js",
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
          "/var/www/gc/public/gc/js/gc.min.js": [path + "js/combined.js"]
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
        files: ["package.json"],
        updateConfigs: [],
        commit: false,
        createTag: true,
        tagName: "v%VERSION%",
        tagMessage: "Version %VERSION%",
        push: false
      }
    }

  });

  grunt.loadNpmTasks("grunt-contrib-concat");
  grunt.loadNpmTasks("grunt-contrib-uglify");
  grunt.loadNpmTasks("grunt-contrib-cssmin");
  grunt.loadNpmTasks("grunt-contrib-imagemin");
  grunt.loadNpmTasks("grunt-bump");

  grunt.registerTask("default", [
    "concat:js",
    "concat:css",
    "cssmin:css",
    "uglify:js",
    "imagemin"
  ]);
};

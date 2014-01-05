module.exports = function (grunt) {

  var path = "/var/www/gc/public/gc/";

  grunt.initConfig({

    pkg : grunt.file.readJSON("package.json"),

    meta : {
      timestamp : new Date().getTime()
    },

    concat : {
      js : {
        src : [
          path + "js/jquery-1.10.2.js",
          path + "js/bootstrap.js", 
          path + "js/gc.js"
        ],
        dest : path + "js/combined.js"
      },
      css : {
        src : [path + "css/bootstrap.css", path + "css/gc.css"],
        dest : path + "css/combined.css"
      }
    },

    cssmin : {
      css : {
        src : path + "css/combined.css",
        dest: path + "css/gc.min.css"
      }
    },

    uglify : {
      js : {
        files : {
          "/var/www/gc/public/gc/js/gc.min.js" : [path + "js/combined.js"]
        }
      }
    }

  });

  grunt.loadNpmTasks("grunt-contrib-concat");
  grunt.loadNpmTasks("grunt-contrib-uglify");
  grunt.loadNpmTasks("grunt-contrib-cssmin");

  grunt.registerTask("default", [
    "concat:js",
    "concat:css",
    "cssmin:css",
    "uglify:js"
  ]);
};

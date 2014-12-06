'use strict';


module.exports = function (grunt) {

	grunt.initConfig({
		css: {
			any: 'assets/styles/**/*.scss',
			input: 'assets/styles/master.scss',
			output: 'public/styles/master.min.css'
		},

		js: {
			any: 'assets/scripts/**/*.js',
			input: 'assets/scripts/master.js',
			output: 'public/scripts/master.min.js'
		},

		pkg: grunt.file.readJSON('package.json'),

		tag: {
			banner: '/*!\n' +
				' * <%= pkg.name %>\n' +
				' * @author <%= pkg.author.name %> <<%= pkg.author.email %>>\n' +
				' * @version <%= pkg.version %>\n' +
				' */\n'
		},

		sass: {
			options: {
				banner: '<%= tag.banner %>',
				noCache: true
			},
			dev: {
				files: {
					'<%= css.output %>': '<%= css.input %>'
				},
				options: {
					style: 'expanded'
				}
			},
			dist: {
				files: {
					'<%= css.output %>': '<%= css.input %>'
				},
				options: {
					style: 'compressed'
				}
			}
		},

		jshint: {
			files: '<%= js.any %>',
			options: {
				jshintrc: '.jshintrc',
          		reporter: require('jshint-stylish')
			}
		},

		concat: {
			options: {
				seperator: ';',
				stripBanners: true,
				nonull: true,
				banner: '<%= tag.banner %>'
			},
			dev: {
				files: {
					'<%= js.output %>': '<%= js.any %>'
				}
			}
		},

		uglify: {
			options: {
				banner: "<%= tag.banner %>",
				mangle: true,
				wrap: true
			},
			dist: {
				files: {
					'<%= js.output %>': [
						'<%= js.output %>'
					]
				}
			}
		},

		phplint: {
			test: ['app/**/*.php']
		},

		watch: {
			css: {
				files: '<%= css.any %>',
				tasks: [
					'sass:dev'
				]
			},
			php: {
				files: 'app/**/*.php',
				tasks: [
					'phplint:test'
				]
			},
			scripts: {
				files: '<%= js.any %>',
				tasks: [
					'jshint',
					'concat:dev'
				]
			}
		}
	});

	require('load-grunt-tasks')(grunt);

	grunt.registerTask('default', [
		'watch'
	]);

	grunt.registerTask('build', [
		'sass:dist',
		'jshint',
		'uglify'
	]);
};

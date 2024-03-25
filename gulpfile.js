const { src, dest, watch, series } = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const purgecss = require('gulp-purgecss');
const rename = require('gulp-rename');
const imagemin = require('gulp-imagemin');



  function css(done) {
    src('src/scss/app.scss')
      .pipe(sass())
      .pipe(dest('build/css'));
    done();
  }

  function cssbuild(done) {
    src('build/css/app.css')
      .pipe(rename({
        suffix: '.min'
      }))
      .pipe(purgecss({
        content: ['index.html']
      }))
      .pipe(dest('build/css'));

    done();
  }

  function dev(done) {
    watch('src/scss/**/*.scss', css);
    // Puedes añadir más tareas de watch aquí según sea necesario
    done();
  }

  function imagenes(done) {
    src('src/img/**/*')
      .pipe(imagemin({ optimizationLevel: 3 }))
      .pipe(dest('build/img'))
    done();
  }


  exports.css = css;
  exports.dev = dev;
  exports.imagenes = imagenes;
  exports.default = series(imagenes, css, dev);
  exports.build = series(cssbuild);


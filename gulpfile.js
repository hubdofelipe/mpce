// General
const PROJECT_PATH = require("./project-config");
const currentProject = PROJECT_PATH.currentProject;
const path = require("path");
const gulp = require("gulp");
var wait = require("gulp-wait");

// Sass
const sass = require("gulp-sass");
const sassGlob = require("gulp-sass-glob");

// Utilities
const autoprefixer = require("gulp-autoprefixer");
const concat = require("gulp-concat");
const sourcemaps = require("gulp-sourcemaps");

// Optimization
const imagemin = require("gulp-imagemin");

// PHP server
const php = require("gulp-connect-php");

// BrowserSync
const browserSync = require("browser-sync").create();

/**
 * 1.2 Caminhos
 */

const PATH = {
    dist: "dist",
    src: "src",
    theme: "wp-content/themes",
};

/**
 * 2. Tasks
 */

/**
 * 2.1 PHP
 */

/**
 * 2.1.1 Exporta
 */
gulp.task("copy:php", () => {
    return gulp
        .src(
            path.resolve(
                __dirname,
                PATH.src,
                currentProject,
                "template",
                "**/*.php"
            )
        )
        .pipe(gulp.dest(path.resolve(__dirname, PATH.dist)));
});

/**
 * 2.2 Sass
 */

/**
 * 2.2.1 Exporta Dev
 *
 * Com sourcemaps
 */
gulp.task("copy:sass:dev", () => {
    return gulp
        .src(path.resolve(PATH.src, currentProject, "sass", "*.+(sass|scss)"))
        .pipe(sassGlob())
        .pipe(sourcemaps.init())
        .pipe(
            sass({
                includePaths: ["node_modules/"],
                outputStyle: "compressed",
            }).on("error", sass.logError)
        )
        .pipe(autoprefixer())
        .pipe(concat("app.min.css"))
        .pipe(sourcemaps.write("."))
        .pipe(gulp.dest(path.resolve(PATH.dist, "assets/css")))
        .pipe(gulp.dest(path.resolve(PATH.theme, currentProject, "assets/css")))
        .pipe(browserSync.stream());
});

/**
 * 2.2.2 Exporta Prod
 *
 * Sem sourcemaps
 */
gulp.task("copy:sass:prod", () => {
    return gulp
        .src(path.resolve(PATH.src, currentProject, "sass", "*.+(sass|scss)"))
        .pipe(sassGlob())
        .pipe(
            sass({
                includePaths: ["node_modules/"],
                outputStyle: "compressed",
            }).on("error", sass.logError)
        )
        .pipe(autoprefixer())
        .pipe(concat("app.min.css"))
        .pipe(gulp.dest(path.resolve(PATH.dist, "assets/css")))
        .pipe(gulp.dest(path.resolve(PATH.theme, currentProject, "assets/css")))
        .pipe(browserSync.stream());
});

/**
 * 2.3 Assets
 */

/**
 * 2.3.1 Exporta Imagens
 */
gulp.task("copy:images", () => {
    return gulp
        .src(path.resolve(PATH.src, currentProject, "images", "**/*"))
        .pipe(gulp.dest(path.resolve(PATH.dist, "assets/images")))
        .pipe(
            gulp.dest(path.resolve(PATH.theme, currentProject, "assets/images"))
        );
});

/**
 * 2.3.1 Otimiza Imagens (/src)
 *
 * Otimiza imagens (lossless) em /src/images/.
 * Não é mais eficiente do que a GUI do imageOptim.
 * Pode demorar alguns minutos para completar.
 */
gulp.task("image:optim:lossless", () => {
    console.log("Image optimization is a CPU-intensive task.");
    console.log("This may take from a few up to several minutes to complete.");

    return gulp
        .src(path.resolve(PATH.src, currentProject, "images", "**/*"))
        .pipe(
            imagemin(
                [
                    // All these optimizers are ** lossless **
                    imagemin.gifsicle({
                        interlaced: true,
                        optimizationLevel: 2,
                    }),
                    imagemin.jpegtran({ progressive: true }),
                    imagemin.optipng(),
                    imagemin.svgo(),
                ],
                { verbose: true }
            )
        )
        .pipe(gulp.dest(path.resolve(PATH.dist, "assets/images")))
        .pipe(
            gulp.dest(path.resolve(PATH.theme, currentProject, "assets/images"))
        );
});

/**
 * 2.3.3 Exporta Fontes
 */
gulp.task("copy:fonts", () => {
    return gulp
        .src(path.resolve(PATH.src, currentProject, "fonts", "**/*"))
        .pipe(gulp.dest(path.resolve(PATH.dist, "assets/fonts")))
        .pipe(
            gulp.dest(path.resolve(PATH.theme, currentProject, "assets/fonts"))
        );
});

/**
 * Exporta JS
 */
gulp.task("copy:js", () => {
    return gulp
        .src(path.resolve(PATH.dist, "assets", "js", "app.bundle.js"))
        .pipe(gulp.dest(path.resolve(PATH.theme, currentProject, "assets/js")));
});

gulp.task("copy:jsmap", () => {
    return gulp
        .src(path.resolve(PATH.dist, "assets", "js", "app.bundle.js.map"))
        .pipe(gulp.dest(path.resolve(PATH.theme, currentProject, "assets/js")));
});

/**
 * 2.3.4 Exporta Ico
 */
gulp.task("copy:ico", () => {
    return gulp
        .src(path.resolve(PATH.src, currentProject, "ico", "**/*"))
        .pipe(gulp.dest(path.resolve(PATH.dist, "assets/ico")))
        .pipe(
            gulp.dest(path.resolve(PATH.theme, currentProject, "assets/ico"))
        );
});

/**
 * 2.3.5 Exporta style.css (WordPress)
 */
gulp.task("copy:wordpress:style", () => {
    return gulp
        .src(path.resolve(PATH.src, currentProject, "template", "style.css"))
        .pipe(gulp.dest(path.resolve(PATH.dist)))
        .pipe(gulp.dest(path.resolve(PATH.theme, currentProject)));
});

/**
 * 2.3.6 Exporta screenshot.* (WordPress)
 */
gulp.task("copy:wordpress:screenshot", () => {
    return gulp
        .src(path.resolve(PATH.src, currentProject, "template", "screenshot.*"))
        .pipe(gulp.dest(path.resolve(PATH.dist)));
});

/**
 * 2.3.7 Exporta todos os assets
 */
gulp.task(
    "copy:assets",
    gulp.series(
        "copy:images",
        "copy:fonts",
        "copy:ico",
        "copy:wordpress:style",
        "copy:wordpress:screenshot"
    )
);

/**
 * 2.4 Build
 */

/**
 * 2.4.1 Dev
 */
gulp.task(
    "build:dev",
    gulp.series("copy:assets", "copy:php", "copy:sass:dev", done => done())
);

/**
 * 2.4.2 Prod
 */
gulp.task(
    "build:prod",
    gulp.series("copy:assets", "copy:php", "copy:sass:prod", done => done())
);

/**
 * 2.5 Servers
 */

// PHP Server
gulp.task("php-server", () => {
    php.server({
        base: path.resolve(PATH.dist),
        port: 4010,
        stdio: "ignore",
    });
});

// BrowserSync Server
gulp.task("browser-sync", () => {
    browserSync.init({
        proxy: "localhost:4010",
        injectChanges: true,
        open: false,
        notify: false,
        port: 4000,
    });
});

/**
 * 2.5.1 Tarefas Watch
 */
gulp.task("file-watcher", () => {
    gulp.watch(
        `${path.resolve(__dirname, PATH.src, currentProject)}/js/**/*`,
        gulp.series("watch:js")
    );

    gulp.watch(
        `${path.resolve(__dirname, PATH.src, currentProject)}/sass/**/*`,
        gulp.series("copy:sass:dev")
    );
    gulp.watch(
        `${path.resolve(__dirname, PATH.src, currentProject)}/images/**/*`,
        gulp.series("watch:images")
    );
    gulp.watch(
        `${path.resolve(__dirname, PATH.src, currentProject)}/fonts/**/*`,
        gulp.series("watch:fonts")
    );
    gulp.watch(
        `${path.resolve(__dirname, PATH.src, currentProject)}/ico/**/*`,
        gulp.series("watch:ico")
    );

    const phpWatcher = gulp.watch(
        `${path.resolve(__dirname, PATH.src, currentProject)}/template/**/*`
    );

    function updatePhp(pathFilesPhp) {
        const savedFilePath = pathFilesPhp.split("/");
        const savedFileName = savedFilePath[savedFilePath.length - 1];

        console.log(
            `Copying .php file to ${path.resolve(__dirname, PATH.dist)}/`,
            `(${savedFileName})`
        );

        gulp.src(pathFilesPhp, {
            base: `${path.resolve(
                __dirname,
                PATH.src,
                currentProject
            )}/template`,
        }).pipe(gulp.dest(path.resolve(__dirname, PATH.dist)));

        browserSync.reload();
    }

    phpWatcher.on("change", updatePhp);
});

gulp.task("watch:js", done => {
    browserSync.reload();
    done();
});

gulp.task(
    "watch:images",
    gulp.series("copy:images", done => {
        browserSync.reload();
        done();
    })
);

gulp.task(
    "watch:fonts",
    gulp.series("copy:fonts", done => {
        browserSync.reload();
        done();
    })
);

gulp.task(
    "watch:ico",
    gulp.series("copy:ico", done => {
        browserSync.reload();
        done();
    })
);

gulp.task(
    "watch:wordpress:style",
    gulp.series("copy:wordpress:style", done => {
        browserSync.reload();
        done();
    })
);

gulp.task(
    "watch:wordpress:screenshot",
    gulp.series("copy:wordpress:screenshot", done => {
        browserSync.reload();
        done();
    })
);

/**
 * 2.5.2 Tarefa Serve
 */
gulp.task(
    "serve",
    gulp.parallel(
        "php-server",
        "build:dev",
        "browser-sync",
        "file-watcher",
        done => done()
    )
);

gulp.task(
    "js-transpile",
    gulp.parallel("copy:js", "copy:jsmap", done => done())
);

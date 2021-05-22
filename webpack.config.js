/**
 * Imports
 */
const PROJECT_PATH = require("./project-config");
const currentProject = PROJECT_PATH.currentProject;
const path = require("path");
// const webpack = require("webpack");

const PATH = {
    dist: path.resolve("dist", "assets", "js"),
    src: path.resolve("src"),
    theme: path.resolve("wp-content", "themes", currentProject, "assets", "js")
};

/**
 * Main config
 */
module.exports = {
    mode: "development",
    context: path.resolve("src", currentProject, "js"),

    entry: {
        app: path.resolve("src", currentProject, "js", "app.js"),
    },

    output: {
        path: path.resolve(PATH.dist),
        filename: "[name].bundle.js",
    },

    /**
     * Modules
     */
    module: {
        rules: [
            {
                test: /\.(js)$/,
                exclude: /(node_modules|bower_components)/,
                use: {
                    loader: "babel-loader",
                    options: {
                        presets: [
                            [
                                "@babel/preset-env",
                                {
                                    useBuiltIns: "usage",
                                    targets: "last 2 versions, > .25%, ie 11",
                                },
                            ],
                        ],
                    },
                },
            },
        ],
    },

    devtool: "source-map",
};

const path = require('path');
const BrowserSyncPlugin = require("browser-sync-webpack-plugin");
const {merge} = require('webpack-merge');
const base = require("./webpack.config.js");

const domain = "pangolia.local";
const url = `http://${domain}/`;

module.exports = merge(base, {
    watch: true,
    mode: "development",
    devtool: "eval-source-map",
    plugins: [
        new BrowserSyncPlugin({
            files: ["**/*.php", "src/**/*"],
            proxy: url
        })
    ]
    
})
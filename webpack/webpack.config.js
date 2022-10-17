const path = require('path');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const OptimizeCssAssetsPlugin = require('optimize-css-assets-webpack-plugin');
const TerserPlugin = require('terser-webpack-plugin');

module.exports = {
    mode: "production",
    context: path.resolve(__dirname, "../assets"),
    output: {
        filename: 'main.min.js',
        path: path.resolve(__dirname, "../assets/dist")
    },
    plugins: [
        new MiniCssExtractPlugin()
    ],
    module: {
        rules: [
            {
                test: /\.((c|sa|sc)ss)$/i,
                use: [
                    MiniCssExtractPlugin.loader,
                    {
                        loader: 'css-loader',
                        options: {
                            importLoaders: 1
                        }
                    },
                    {
                        loader: 'postcss-loader',
                        options: {
                            postcssOptions: {
                                ident: 'postcss',
                                plugins: [
                                    ['tailwindcss'],
                                    ['autoprefixer']
                                ]
                            }
                        }
                    },
                    {
                        loader: "sass-loader",
                    }
                ]
            }
        ]
    },
    devtool: "source-map",
    optimization: {
        minimize: true,
        minimizer: [
            new OptimizeCssAssetsPlugin(),
            new TerserPlugin({
                extractComments: false
            })
        ]
    }
}

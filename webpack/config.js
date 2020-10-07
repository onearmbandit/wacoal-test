'use strict';

const autoprefixer = require('autoprefixer');
const fs = require('fs');
const globImporter = require('node-sass-glob-importer');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const path = require('path');
const webpack = require('webpack');
const AssetsPlugin = require('assets-webpack-plugin');
const OptimizeCSSAssetsPlugin = require("optimize-css-assets-webpack-plugin");

module.exports = function () {

  const mode = process.env.NODE_ENV || 'development';
  const extensionPrefix = mode === 'production' ? '.min' : '';
  const DEV = process.env.NODE_ENV === 'development';

  const appDirectory = fs.realpathSync(process.cwd() + '/themes/' + process.env.NODE_SITE + '/assets');

  function resolveApp(relativePath) {
    return path.resolve(appDirectory, relativePath);
  }

  // These are the paths where different types of resources should end up.
  const paths = {
    css: 'assets/css/',
    img: 'assets/img/',
    font: 'assets/font/',
    js: 'assets/js/',
    lang: 'languages/',
  };

  const appPaths = {
    appSrc: resolveApp('.'),
    appBuild: resolveApp('../dist'),
    appIndexJs: resolveApp('js/website.js'),
    appIndexWpAdminJs: resolveApp('js/wpadmin.js'),
    appNodeModules: resolveApp('../../node_modules'),
  };

  // The property names will be the file names, the values are the files that should be included.
  const entry = {
    website: [
      appPaths.appIndexJs
    ],
    wpadmin: [
      appPaths.appIndexWpAdminJs
    ],
  };

  const loaders = {
    css: {
      loader: 'css-loader',
      options: {
        sourceMap: true,
      },
    },
    postCss: {
      loader: 'postcss-loader',
      options: {
        plugins: [
          autoprefixer({
            flexbox: 'no-2009',
          }),
        ],
        sourceMap: true,
      },
    },
    sass: {
      loader: 'sass-loader',
      options: {
        importer: globImporter(),
        sourceMap: true,
      },
    },
  };

  const config = {
    node: {
      fs: 'empty',
      net: 'empty',
      tls: 'empty',
      child_process: 'empty',
    },
    mode,
    entry,
    output: {
      path: appPaths.appBuild,
      //publicPath,
      //filename: `${paths.js}[name]${extensionPrefix}.js`,
      filename: DEV ? '[name].js' : '[name].[hash:8].js'
    },
    performance: {
      hints: false,
      maxEntrypointSize: 512000,
      maxAssetSize: 512000
    },
    externals: {
      '@wordpress/a11y': 'wp.a11y',
      '@wordpress/components': 'wp.components', // Not really a package.
      '@wordpress/blocks': 'wp.blocks', // Not really a package.
      '@wordpress/data': 'wp.data', // Not really a package.
      '@wordpress/date': 'wp.date', // Not really a package.
      '@wordpress/element': 'wp.element', // Not really a package.
      '@wordpress/hooks': 'wp.hooks',
      '@wordpress/i18n': 'wp.i18n',
      '@wordpress/utils': 'wp.utils', // Not really a package
      backbone: 'Backbone',
      jquery: 'jQuery',
      lodash: 'lodash',
      moment: 'moment',
      react: 'React',
      'react-dom': 'ReactDOM',
      tinymce: 'tinymce',
    },
    module: {
      rules: [
        {
          enforce: 'pre',
          test: /\.js|.jsx/,
          loader: 'import-glob',
          exclude: /(node_modules)/,
        },
        {
          test: /\.js$|.jsx/,
          loader: 'babel-loader',
          query: {
            presets: [
              [
                "@babel/preset-env",
                {
                  useBuiltIns: 'usage',
                  corejs: "2",
                  targets: {
                    browsers: ['last 2 versions', 'ie >= 9'],
                  },
                }
              ],
              '@wordpress/default',
            ],
            plugins: [
              [
                '@wordpress/babel-plugin-makepot',
                {
                  'output': `${paths.lang}translation.pot`,
                }
              ],
              'transform-class-properties',
            ],
          },
          exclude: /(node_modules|bower_components)/,
        },
        {
          test: /\.html$/,
          loader: 'raw-loader',
          exclude: /node_modules/,
        },
        {
          test: /\.s?css$/,
          use: [
            MiniCssExtractPlugin.loader,
            loaders.css,
            loaders.postCss,
            loaders.sass,
          ],
          exclude: /node_modules/,
        },
        {
          test: /\.(ttf|eot|svg|woff2?)(\?v=[0-9]\.[0-9]\.[0-9])?$/,
          use: [
            {
              loader: 'file-loader',
              options: {
                name: '[name].[ext]',
                outputPath: paths.font,
              },
            },
          ],
          exclude: /(assets)/,
        },
        {
          test: /\.(eot|ttf|woff|woff2)$/,
          use: ['file-loader']
        },
        {
          test: /\.(gif|png|jpe?g|svg)$/i,
          use: ['file-loader'],
        },
        {
          test: /jquery-mousewheel/,
          loader: "imports-loader?define=>false&this=>window"
        },
        {
          test: /malihu-custom-scrollbar-plugin/,
          loader: "imports-loader?define=>false&this=>window"
        }
      ],
    },
    plugins: [
      new MiniCssExtractPlugin({
        //filename: `${paths.css}[name]${extensionPrefix}.css`,
        filename: DEV ? '[name].css' : '[name].[hash:8].css'
      }),
      new webpack.EnvironmentPlugin({
        NODE_ENV: JSON.stringify(mode), // use 'development' unless process.env.NODE_ENV is defined
        DEBUG: false,
      }),
      new webpack.DefinePlugin({
        'process.env.NODE_ENV': JSON.stringify(mode),
      }),
      function () {
        // Custom webpack plugin - remove generated JS files that aren't needed
        this.hooks.done.tap('webpack', function (stats) {
          stats.compilation.chunks.forEach(chunk => {
            if (!chunk.entryModule._identifier.includes('.js')) {
              chunk.files.forEach(file => {
                if (file.includes('.js')) {
                  //fs.unlinkSync(path.join(__dirname, `/${file}`));
                }
              });
            }
          });
        });
      },

      //generate assets.json
      new AssetsPlugin({
        path: paths.appBuild,
        filename: './themes/' + process.env.NODE_SITE + '/dist/assets.json',
      }),
    ],
  };

  if (mode !== 'production') {
    config.devtool = 'source-map';
  }

  return config;
};

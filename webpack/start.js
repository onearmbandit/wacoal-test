'use strict';

const webpack = require('webpack');
const config = require('./config');

const clientCompiler = webpack(config);

clientCompiler.watch(
  {
    noInfo: false,
    quiet: true,
  },
  (err, stats) => {
    if (err) return;
  }
);

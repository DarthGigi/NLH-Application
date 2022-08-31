// webpack.mix.js

let mix = require('laravel-mix')

mix.js('src/app.js', 'assets/scripts/alpine.js').setPublicPath('assets')

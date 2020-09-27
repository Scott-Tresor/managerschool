const mix = require('laravel-mix');
const path = require('path');

mix.setPublicPath('public/dist'); // important for laravel-mix to generate mix-manifest.json
mix.webpackConfig({
    output: {
        path: path.resolve(__dirname, 'public/dist'),
        publicPath: '/dist/',
        chunkFilename: '[id].app.js'
    },
    externals: {
        jquery: 'jQuery' // Using jquery CDN
    }
});

// building assets files
mix.js('resources/js/app.js', 'js');
mix.js('resources/js/pages/payment', 'js/pages');

mix.sass('resources/sass/app.scss', 'css');
mix.sass('resources/sass/pdf.scss', 'css');
mix.sass('resources/sass/pages/auth.scss', 'css/pages');

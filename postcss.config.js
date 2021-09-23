const postcssConfig = {
    plugins: [
        require('postcss-import'),
        require('tailwindcss'),
        require('autoprefixer'),
        require('postcss-nested'),
        require('cssnano')({
            preset:'default',
        }),
    ]
}

module.exports = postcssConfig;
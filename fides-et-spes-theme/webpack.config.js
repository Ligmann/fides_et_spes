module.exports = {
    module: {
        rules: [{
            use: {
                loader: 'babel-loader',
                options: {
                    presets: ['@babel/preset-env']
                }
            }
        }],
    },
    mode: 'production',
};

const path = require( "path" )
const MiniCssExtractPlugin = require( 'mini-css-extract-plugin' )
const DependencyExtractionWebpackPlugin = require( '@wordpress/dependency-extraction-webpack-plugin' )

module.exports = {
    context: path.resolve( __dirname, "assets/src" ),
    entry: {
        app: './app.js',
        blocks: './blocks.js',
        gutenbergBase: './scss/gutenberg-base.scss',
    },

    output: {
        filename: "[name].bundle.js",
        path: path.resolve( __dirname, "assets/dist" ),
    },

    plugins: [
        new MiniCssExtractPlugin(),
        new DependencyExtractionWebpackPlugin( { 
            combineAssets: true,
            combinedOutputFile: 'assets.php'
        } ),
    ],

    module: { 
        rules: [

            // SASS loader
            {
                test: /\.scss$/,
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
                                plugins: [
                                    process.env.NODE_ENV === "production" ? require( 'cssnano' ) : null,
                                    require( 'tailwindcss' ),
                                    require( 'autoprefixer' ),
                                ]
                            }
                        }
                    },
                    'sass-loader'
                ]
            },
            
            // Babel loader
            {
                test: /\.js$/,
                exclude: /node_modules/,
                use: [
                    {
                        loader: 'babel-loader',
                        options: {
                            presets: ['@wordpress/default'],
                            cacheDirectory: true,
                        },
                    }
                ]
            },

            // Fonts
            {
                test: /\.(woff(2)?|ttf|eot|otf|svg)(\?v=\d+\.\d+\.\d+)?$/,
                use: [
                  {
                    loader: 'file-loader',
                    options: {
                      name: '[name].[ext]',
                      outputPath: 'fonts/'
                    }
                  }
                ]
              }
        ]
    }
}
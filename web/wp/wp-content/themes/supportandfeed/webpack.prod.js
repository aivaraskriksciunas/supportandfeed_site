process.env.NODE_ENV = "production"

const config = require( './webpack.config' )

module.exports = {
    ...config,

    mode: "production",
    watch: false,

}
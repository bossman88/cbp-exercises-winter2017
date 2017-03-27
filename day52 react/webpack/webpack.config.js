module.exports = {
  entry: './hello.js',
  output: {
    path: __dirname,
    filename: 'main.js'
  },
  module: {
    loaders: [
        {  
            test: /\.js$/,   // all files ending with .js
            loader: 'babel-loader',   // should be loaded with the babel loader
            exclude: /node_modules/,   // except those in /node_modules/
            query: {
                presets: ['es2015', 'react']   // these presets should be used on them
            }
        },
        { 
            test: /\.jsx$/,   // all files ending with .jsx
            loader: 'babel-loader',   // ...
            exclude: /node_modules/ ,
            query: {
                presets: ['es2015', 'react']
            }
        }
    ]
  }
}
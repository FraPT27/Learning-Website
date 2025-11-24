const path = require("path");

module.exports = {
  entry: "./src/Dashboard.jsx",
  output: {
    path: path.resolve(__dirname, "public"),
    filename: "dashboard.js",
  },
  module: {
    rules: [
      {
        test: /\.(js|jsx)$/,
        exclude: /node_modules/,
        use: {
          loader: "babel-loader",
        },
      },
    ],
  },
  resolve: {
    extensions: [".js", ".jsx"],
  },
  mode: "development",
};

# Flexbox Theme
This is the demo theme used in my WordCamp LAX 2016 conference talk about using Flexbox with WordPress

## Prerequisites
* Node.js 6.x.x and npm 6.x.x
* Gulp.js - from Terminal or Command Prompt run `npm install --global gulp`

**Note: if you run into errors when using Terminal, you may have to use the sudo command to install Gulp.js. For instance, `sudo npm install -g gulp`**

## How to get started
1. Clone or [download](https://github.com/ZeekInteractive/flexbox_theme/archive/master.zip "Download the flexbox_theme Zip") the project onto your `themes` directory `(./wp-content/themes)`
2. From the theme directory, run `npm install` or `yarn`. All of the theme dependencies will be installed into `node_modules`.
3. Update the [proxy url](https://github.com/jacobarriola/wordcamp-lax-16/blob/master/gulpfile.js#L33) to whatever your local url
4. Run `gulp`

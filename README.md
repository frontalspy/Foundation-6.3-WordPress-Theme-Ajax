# Foundation 6.3 WordPress Theme Ajax
Testing out new javascript functions for the Foundation theme [https://github.com/frontalspy/Sage-Foundation-6.3/](https://github.com/frontalspy/Sage-Foundation-6.3/).

An ajax loading version fo the [Sage-Foundation-6.3](https://github.com/frontalspy/Sage-Foundation-6.3). Posts, pages and search are all loaded dynamically without a page refresh.

Originally developed for an autoplaying video in the header to prevent video reload; removed video and styling for a more barebones theme with the same functionality.

[![Build Status](https://travis-ci.org/frontalspy/Foundation-6.3-WordPress-Theme-Ajax.svg?branch=master)](https://travis-ci.org/frontalspy/Foundation-6.3-WordPress-Theme-Ajax)
[![devDependencies Status](https://david-dm.org/frontalspy/Foundation-6.3-WordPress-Theme-Ajax/dev-status.svg)](https://david-dm.org/frontalspy/Foundation-6.3-WordPress-Theme-Ajax?type=dev)

## Requirements

| Prerequisite    | How to check | How to install
| --------------- | ------------ | ------------- |
| PHP >= 5.4.x    | `php -v`     | [php.net](http://php.net/manual/en/install.php) |
| Node.js 4.x  | `node -v`    | [nodejs.org](http://nodejs.org/) |
| gulp >= 3.8.10  | `gulp -v`    | `npm install -g gulp` |
| Bower >= 1.3.12 | `bower -v`   | `npm install -g bower` |

From the command line:

1. Install [gulp](http://gulpjs.com) and [Bower](http://bower.io/) globally with `npm install -g gulp bower`
2. Navigate to the theme directory, then run `npm install`
3. Run `bower install`

You now have all the necessary dependencies to run the build process.

### Available gulp commands

* `gulp` — Compile and optimize the files in your assets directory
* `gulp watch` — Compile assets when file changes are made
* `gulp --production` — Compile assets for production (no source maps).

### Using BrowserSync

To use BrowserSync during `gulp watch` you need to update `devUrl` at the bottom of `assets/manifest.json` to reflect your local development hostname.

For example, if your local development URL is `http://project-name.dev` you would update the file to read:
```json
...
  "config": {
    "devUrl": "http://project-name.dev"
  }
...
```
If your local development URL looks like `http://localhost:8888/project-name/` you would update the file to read:
```json
...
  "config": {
    "devUrl": "http://localhost:8888/project-name/"
  }
...
```

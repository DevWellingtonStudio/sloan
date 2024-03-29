# Sloan

## Introduction

Sloan for Genesis is a genesis child theme which integrates [Bootstrap](http://getbootstrap.com/). It uses Gulp to handle tasks, configuration and lint files.

The default branch is under development, use [v4](https://github.com/DevWellingtonStudio/wellington-studio) branch to get the last stable release.

## Installation Instructions

1. Upload Sloan for Genesis theme folder via FTP to your wp-content/themes/ directory. (The Genesis parent theme needs to be in the wp-content/themes/ directory as well.)
2. Go to your WordPress dashboard and select Appearance.
3. Activate the Sloan for Genesis theme.
4. Inside your WordPress dashboard, go to Genesis > Theme Settings and configure them to your liking.

## Building from Source

Note: Run node @14.18.3 or less. Why? "fibers": "^5.0.0" is no longer supported and won't work with Node 16. I used 14.18.3 successfully. npm and yarn fail to install running recent versions of node. (Use NVM when multiple versions of node.js are needed.)

1. Install [Git](https://git-scm.com/).
2. Clone the repository to your local machine.
3. Install [Node](https://nodejs.org/en/).
4. Install [Yarn](https://yarnpkg.com).
5. Install [Gulp](https://gulpjs.com/) globally.
6. Run `yarn install` or `npm install` to install dependencies through terminal/CLI program.
7. Run `git submodule init` and `git submodule update` to add [WP Bootstrap Navwalker](https://github.com/twittem/wp-bootstrap-navwalker).
8. Replace site url in line `49` of `gulpfile.js` to your local development URL(e.g. http://bootstrap.test).
9. Run `gulp` through your favorite CLI program.

## Features

1. Bootstrap 4
2. Bootstrap components
	* Comment Form
	* Search Form
	* Jumbotron
	* Navbar
3. Sass
4. Gulp
5. Footer Widgets(modified to add bootstrap column classes based on the number of widget areas)
6. Additional Widget Areas
	* Home Featured(jumbotron)

## Todos

- [ ] Integrate Genesis Theme Setup API
- [ ] Integrate Genesis Configuration API
- [ ] Integrate AMP Support
- [ ] Gutenberg Support
- [x] Remove SmartMenus support or move to separate plugin
- [x] Remove TGM Plugin Activation Support
- [x] Use Git Submodule for WP Bootstrap Navwalker
- [ ] Code cleanup and bug fixes


## Notes

Use [SmartMenus for Bootstrap](https://github.com/webdevsuperfast/ra-smartmenus-bootstrap).

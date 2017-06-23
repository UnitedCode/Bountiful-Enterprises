# Frontend Project Starter
This repo is a basic setup for a frontend app that uses Sass, Pug, and TypeScript

## Available commands

### Bootstrap Setup
Command: `npm run setup-bootstrap`

Function: installs Bootstrap 4 and jQuery and copies all the css and js files to their appropriate location

---

### Sass Compilation
Command: `gulp sass`

Function: Compiles `.scss` files in the `./src/sass/` folder into `.css` files in `./public/css/`

---

### Pug Compilation
Command: `gulp pug`

Function: Compiles `.pug` files in the `./src/pug/` folder into `.html` files in `./public/`

---

### Typescript Compilation
Command: `gulp typescript`

Function: Compiles `.ts` files in the `./src/typescript/` folder into `.js` files in `./public/js/`

---

### Watch Comand
Command: `gulp watch`

Function: Watches the `./src/` directory for file changes and then runs the sass, pug, and typescript commands. Also starts up an instance of browsersync

---

### Default
Command: `gulp`

Function: Runs the watch command

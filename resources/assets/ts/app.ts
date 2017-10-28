// Allow jquery and require function in this file
declare const $:any;
declare const require:any;


try {
    // Pull in jquery and add it to the window object
    // so that it is available globally
    (<any> window).$ = (<any> window).jQuery = require('jquery');
    // Pull in remaining vendor dependencies

    require('bootstrap-sass');
} catch(e) {}


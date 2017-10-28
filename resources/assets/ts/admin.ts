// Allow jquery and require function in this file
declare const $:any;
declare const require:any;

// Pull in jquery and add it to the window object
// so that it is available globally
(<any>window).$ = (<any>window).jQuery = require('jquery');
// Pull in remaining vendor dependencies
require('bootstrap-sass');
require('datatables.net');
require('datatables.net-bs');

import {YearFileUpload} from './admin/YearFileUpload';
import {includes} from './helpers';

const url = window.location.href;

$(document).ready(function() {
    console.log('document ready');
    $('.tab-content > table').DataTable();
    $('#years-table').DataTable();
});

if(includes(url, 'years/create') || includes(url, 'years/edit')) {
    new YearFileUpload();
}
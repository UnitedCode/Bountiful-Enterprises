try {
    window.$ = window.jQuery = require('jquery');

    require('bootstrap-sass');
} catch (e) {}

import {YearFileUpload} from './admin/YearFileUpload.ts';

const url = window.location.href;

// $(document).ready(function() {
//     $('.tab-content > table').DataTable();
//     $('#years-table').DataTable();
// });

if(url.includes('years/create') || url.includes('years/edit')) {
    new YearFileUpload();
}



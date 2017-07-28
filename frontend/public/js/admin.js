$(document).ready(function () {
    $('.tab-content > table').DataTable();
    $('#years-table').DataTable();
});
var YearFileUpload = (function () {
    function YearFileUpload() {
        this.fileInput = document.getElementById('file-input');
        this.fileUploadBtn = document.getElementById('file-upload-btn');
        this.fileUploadText = document.getElementById('file-upload-text');
        this.addEvents();
    }
    YearFileUpload.prototype.addEvents = function () {
        var _this = this;
        this.fileUploadText.addEventListener('click', function (e) {
            e.preventDefault();
            _this.fileInput.click();
        });
        this.fileUploadBtn.addEventListener('click', function () { _this.fileInput.click(); console.log('wtf'); });
        this.fileInput.addEventListener('change', this.updateText.bind(this));
    };
    YearFileUpload.prototype.updateText = function () {
        this.fileUploadText.value = this.extractFilename(this.fileInput.value);
    };
    YearFileUpload.prototype.extractFilename = function (fullPath) {
        var startIndex = (fullPath.indexOf('\\') >= 0 ? fullPath.lastIndexOf('\\') : fullPath.lastIndexOf('/'));
        var filename = fullPath.substring(startIndex);
        if (filename.indexOf('\\') === 0 || filename.indexOf('/') === 0) {
            filename = filename.substring(1);
        }
        return filename;
    };
    return YearFileUpload;
}());
new YearFileUpload();

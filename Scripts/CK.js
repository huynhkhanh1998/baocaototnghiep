$(document).ready(function () {
    $('#btnSelectImage').on('click', function (e) {
        e.preventDefault();
        var finder = new CKFinder();
        finder.selectActionFunction = function (url) {
            $('#txtImage').val(url);
        };
        finder.popup();
    })

    var editor = CKEDITOR.replace('txtContent', {
        customConfig: '/ckeditor/config.js',
    });
    CKFinder.setupCKEditor(null, '/ckfinder');
});
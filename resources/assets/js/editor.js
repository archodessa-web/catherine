const ClassicEditor = require('@ckeditor/ckeditor5-build-classic');

ClassicEditor
    .create(document.querySelector('.editor'))
    .catch(error => {
        console.error(error);
    });
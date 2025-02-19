import ClassicEditor from '@ckeditor/ckeditor5-build-classic';
import Strikethrough from '@ckeditor/ckeditor5-basic-styles/src/strikethrough';
import Subscript from '@ckeditor/ckeditor5-basic-styles/src/subscript';
import Superscript from '@ckeditor/ckeditor5-basic-styles/src/superscript';
import Font from '@ckeditor/ckeditor5-font/src/font';
import ImageUpload from '@ckeditor/ckeditor5-image/src/imageupload';
import ImageToolbar from '@ckeditor/ckeditor5-image/src/imagetoolbar';
import Link from '@ckeditor/ckeditor5-link/src/link';
import Paragraph from '@ckeditor/ckeditor5-paragraph/src/paragraph';
import Bold from '@ckeditor/ckeditor5-basic-styles/src/bold';
import Italic from '@ckeditor/ckeditor5-basic-styles/src/italic';
import Essentials from '@ckeditor/ckeditor5-essentials/src/essentials';

ClassicEditor
    .create(document.querySelector('#editor'), {
        plugins: [
            Essentials, 
            Paragraph, 
            Bold, 
            Italic, 
            Strikethrough, 
            Subscript, 
            Superscript, 
            Font, 
            ImageUpload, 
            ImageToolbar, 
            Link
        ],
        toolbar: [
            'undo', 'redo', '|',
            'bold', 'italic', 'strikethrough', 'subscript', 'superscript', '|',
            'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor',
            '|', 'imageUpload', 'link', 'blockQuote'
        ],
        image: {
            toolbar: [
                'imageTextAlternative', 'imageStyle:inline', 'imageStyle:block', 'imageStyle:side', '|',
                'imageResize'
            ],
            resizeOptions: [
                { name: 'resizeImage:original', label: 'Original', value: null },
                { name: 'resizeImage:50', label: '50%', value: '50' },
                { name: 'resizeImage:75', label: '75%', value: '75' }
            ],
            resizeUnit: '%'
        }
    })
    .then(editor => {
        window.editor = editor;
    })
    .catch(error => {
        console.error('Error initializing CKEditor:', error);
    });

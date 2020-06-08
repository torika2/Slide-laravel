/**
 * @license Copyright (c) 2003-2017, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
    config.filebrowserBrowseUrl = '/manager/laravel-filemanager?type=Images';

    config.filebrowserImageBrowseUrl = '/manager/laravel-filemanager?type=Files';

   /* config.filebrowserFlashBrowseUrl = '/manager/laravel-filemanager?type=Images';*/

    config.filebrowserUploadUrl = '/manager/laravel-filemanager/upload?type=Files&_token=';

    config.filebrowserImageUploadUrl = '/manager/laravel-filemanager/upload?type=Images&_token=';


    config.removeButtons = 'Save,Print,Preview,NewPage';
    config.allowedContent = true;

    /*config.filebrowserFlashUploadUrl = '/manager/laravel-filemanager/upload?type=Images&_token=';*/
};

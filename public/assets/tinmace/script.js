tinymce.init({
    selector: 'textarea#default',
    height: 400,
    plugins:[
        'advlist', 'autolink', 'link', 'image', 'lists', 'charmap', 'prewiew', 'anchor', 'pagebreak',
        'searchreplace', 'wordcount', 'visualblocks', 'code', 'fullscreen', 'insertdatetime', 'media', 
        'table', 'emoticons', 'template', 'codesample'
    ],
    toolbar: 'undo redo | styles | bold italic underline | alignleft aligncenter alignright alignjustify |' + 
    'bullist numlist outdent indent | link image | print preview media fullscreen | ' +
    'forecolor backcolor emoticons',
    menu: {
        favs: {title: 'menu', items: 'code visualaid | searchreplace | emoticons'}
    },
    menubar: 'favs file edit view insert format tools table',
    content_style: 'body{font-family:Helvetica,Arial,sans-serif; font-size:16px}',
    
    // Add image upload options
    images_upload_url: '../../upload_blog.php', // Replace with the URL to your server-side image upload endpoint
    images_upload_handler: function (blobInfo, success, failure) {
        var xhr, formData;
      
        xhr = new XMLHttpRequest();
        xhr.withCredentials = false;
        xhr.open('POST', '../../upload_blog.php'); // Replace with the URL to your server-side image upload endpoint
      
        xhr.onload = function() {
            var json;
      
            if (xhr.status !== 200) {
                failure('HTTP Error: ' + xhr.status);
                return;
            }
      
            json = JSON.parse(xhr.responseText);
      
            if (!json || typeof json.location !== 'string') {
                failure('Invalid JSON: ' + xhr.responseText);
                return;
            }
      
            success(json.location);
        };
      
        formData = new FormData();
        formData.append('file', blobInfo.blob(), blobInfo.filename());
      
        xhr.send(formData);
    }
});

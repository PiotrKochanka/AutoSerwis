<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>

    <!-- Script -->
    <script type="text/javascript" src="{{ URL::asset('js/animation.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/header.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/paralax.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/form.js') }}"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/11.0.1/classic/ckeditor.js"></script>
    <script src="{{ URL::asset('js/tinymce/tinymce.min.js') }}"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <!-- Css -->
    <link rel="stylesheet" href="/css/layout.css">
    <link rel="stylesheet" href="/css/login.css">
    <link rel="stylesheet" href="/css/cms.css">
    <link rel="stylesheet" href="/css/form.css">
    <link rel="stylesheet" href="/css/structure.css">
    <link rel="stylesheet" href="/css/app.css">
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet"  type='text/css'>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

    <!--FancyBox-->
    <link rel="stylesheet" href="/css/fancybox.css" type="text/css" media="screen" />

    <title>CMS</title>
</head>
<body>   
    <div class="cms-container">
        <!--Content-->
        @yield('content')
        <script src="/js/fancybox.js"></script>
    </div>
    <script>
    tinymce.init({
    selector: 'textarea#myTextarea',
    noneditable_noneditable_class: 'fa',
    content_css: '//netdna.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css',
    menubar: 'file edit view insert format tools table help',
    plugins: 'fontawesome noneditable preview importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image paste link media template codesample table charmap pagebreak nonbreaking anchor insertdatetime advlist lists wordcount help charmap quickbars emoticons code',
    toolbar: 'link image | fontawesome | code | undo redo | bold italic underline strikethrough | fontfamily fontsize blocks | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl',
    image_title: true,
    automatic_uploads: true,
    file_picker_types: 'image',
    /* and here's our custom image picker*/
    file_picker_callback: (cb, value, meta) => {
        const input = document.createElement('input');
        input.setAttribute('type', 'file');
        input.setAttribute('accept', 'image/*');

        input.addEventListener('change', (e) => {
        const file = e.target.files[0];

        const reader = new FileReader();
        reader.addEventListener('load', () => {
            const id = 'blobid' + (new Date()).getTime();
            const blobCache =  tinymce.activeEditor.editorUpload.blobCache;
            const base64 = reader.result.split(',')[1];
            const blobInfo = blobCache.create(id, file, base64);
            blobCache.add(blobInfo);

            /* call the callback and populate the Title field with the file name */
            cb(blobInfo.blobUri(), { title: file.name });
        });
        reader.readAsDataURL(file);
        });

        input.click();
    },
    content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:16px }'
    });
    </script>
</body>
</html>
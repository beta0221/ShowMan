tinymce.init({
    selector:'textarea',
    language : "zh_TW" ,
    plugins: [
        "advlist autolink lists link image charmap print preview anchor",
        "searchreplace visualblocks code fullscreen",
        "insertdatetime media table contextmenu paste jbimages",
        "image imagetools",
        "textcolor colorpicker",
        "media"
    ],
    toolbar: "insertfile undo redo | bold italic | alignleft aligncenter alignright alignjustify | link image jbimages media | forecolor backcolor | fontsizeselect | fontselect",
    link_assume_external_targets: true,
    relative_urls: false,
});
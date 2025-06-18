<footer class="bg-dark text-white text-center py-3">
    <p>&copy; 2025 Baca Cerpen. All rights reserved.</p>
</footer>
<script>
    $(document).ready(function() {
        // Initialize Summernote
        $('#summernote').summernote({
            height: 500,
            callbacks: {
                onImageUpload: function(files) {
                    for (let i = 0; i < files.length; i++) {
                        sendFile(files[i]);
                    }
                }
            }
        });
    });
     $.upload = function (file) {
        let out = new FormData();
        out.append('file', file, file.name);
    }

    $.ajax({
            method: 'POST',
            url: 'upload.php',
            contentType: false,
            cache: false,
            processData: false,
            data: out,
            success: function (img) {
                $('#summernote').summernote('insertImage', img);
            },
            error: function (jqXHR, textStatus, errorThrown) {
                console.error(textStatus + " " + errorThrown);
            }
        });
</script>
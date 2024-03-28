<!DOCTYPE html>
<html>
    <head>
        <title>Unggah File Images</title>
    </head>
    <body>
        <form id="upload-form" action="upload_ajax_3.2.php" method="post" enctype="multipart/form-data">
            <input type="file" name="file" id="file">
            <input type="submit" name="submit" value="Unggah">
        </form>
        <div id="status"></div>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="upload_js_3.2.php"></script>
    </body>
</html>
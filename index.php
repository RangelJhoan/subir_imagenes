<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Images PHP</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="container">
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <img class="upload-img" src="assets/img/subirarchivo.png" alt="ImagenIcono">
            <span class="file-status">No file chosen</span>
            <label class="btn" for="custom-file-input">Choose file</label>
            <input type="file" name="file" id="custom-file-input" hidden>

            <input type="submit" class="btn" name="upload" value="Upload">
        </form>
    </div>

    <script src="assets/js/main.js"></script>
</body>
</html>
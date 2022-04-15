<?php

if(isset($_FILES['file'])){
    
    $file = $_FILES['file'];
    $fileName = $file['name'];
    $mimeType = $file['type'];

    $allowed_types = array("image/jpg", "image/jpeg", "image/png");
    if(!in_array($mimeType, $allowed_types)){
        header("Location:index.php");
    }

    if(!is_dir("uploads")){
        mkdir("uploads", 0777);
    }

    move_uploaded_file($file['tmp_name'], 'uploads/'.$fileName);

}else{
    header("Location:index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uploaded Image PHP</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="container">
        <div class="upload-container">
            <h1>File Uploaded Successfully</h1>
            <img title="name" src="uploads/<?php echo $fileName ?>"/>
            <a class="btn upload-more-btn" href="index.php">Upload More</a>
        </div>
    </div>
</body>
</html>
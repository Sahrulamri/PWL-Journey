<?php
function upload_foto($ft, $data)
{
    if ($data == "user")
        $target_dir = "img/user/";
    else if ($data == "member")
        $target_dir = "img/member/";
    else
        $target_dir = "img/product/";
    $target_file = $target_dir . basename($ft["name"]);
    $upload0k = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    // check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $upload0k = 0;
    }
    // check file size
    if ($ft["size"] > 500000) {
        echo "Sorry, file is too large.";
        $upload0k = 0;
    }
    // allow certain file format
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        echo "Sorry, only JPEG, PNG and GIF files are allowed.";
        $upload0k = 0;
    }
    // check if $upload0k is set to 0 by an error
    if ($upload0k == 0) {
        echo "Sorry, your file was not uploaded";
    }
    // if everything ok, try to upload file
    else {
        if (move_uploaded_file($ft['tmp_name'], $target_file)) {
            // echo "The file ". htmlspecialchars(basename($_FILES["foto"]["name"])). " has been uploaded";
            return true;
        } else {
            echo "Sorry, there was an error uploading your file";
            return false;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

<?php

if(isset($_POST["submit"])){
    $temp = $_FILES["photo"]["tmp_name"];
    $filename= $_FILES["photo"]["name"];//saiful.jpg

    $filesize= $_FILES["photo"]["size"];
    $allowedsize = 307200;

    //$extension =pathinfo( $filename, PATHINFO_EXTENSION);

    $filedata = pathinfo( $filename);
    $file_ext = strtolower( $filedata["extension"]);
    $allowed_ext = ["jpg", "jpeg", "png", "webp"];
    $path = "photos/".$filename;
    $errors = [];

    if( $filesize>$allowedsize){
        $errors[] = "Upload File must be less than 300kb";
    }
    if(!in_array($file_ext, $allowed_ext)){
        $errors[] = "allowed file types jpg, png, jpeg";
    }
    if(count($errors)>0){
        foreach($errors as $err){
            echo $err . "<br>";
        }
    }else{
      $status =  move_uploaded_file($temp, $path );
      if($status) echo "Successfully Uploaded";

      
    }
    
   
    
}
?>
    <form action="" method="post" enctype="multipart/form-data">
        Name: <input type="text" name="name" id=""><br>
        Email: <input type="text" name="email" id=""><br>
        Photo: <input type="file" name="photo" id=""><br>
        <input type="submit" value="Send" name="submit" id="">

    </form>
</body>

</html>


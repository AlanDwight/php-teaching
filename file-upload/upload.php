<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]);?>"  method="POST"
        enctype="multipart/form-data"
    >
    Select image to upload: 
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload Image" name="submit">

    </form>
</body>
</html>


<?php 

    $target_dir = "uploads/";

    // echo $_FILES["fileToUpload"]["size"];

    // foreach($_FILES["fileToUpload"] as $key=>$value){
    //     echo $key. " : " . $value . "<br>";
    // }
    
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    // uploads/81sYbD4xK+L._AC_UF894,1000_QL80_.jpg
    $uploadOk = 1 ; // initial value
    
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    // echo $imageFileType;   --- > jpg


    // fake or real image
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);

        // foreach($check as $key => $value){
        //     echo $key . ":" . $value . "<br>";
        // }

        if($check !== false){
            echo "File is an image - " . $check["mime"];
            $uploadOk = 1; // reassigned value
        }else{
            echo "Upload failed, File is not an image.";
            $uploadOk = 0;
        }
    }

    // already exist on server or not 
    if(file_exists($target_file)){
        echo "Sorry, the file already exist on the server";
        $uploadOk = 0;
    }

    // check size? deny if too large
    if($_FILES["fileToUpload"]["size"] > 500000){
        echo "Sorry, your file is larger than 500kb, fail to upload";
        $uploadOk = 0;
    }

    // specify allow extension
    if($imageFileType !="jpg" && $imageFileType !="png" && $imageFileType !="jpeg" && $imageFileType !="gif" ){
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed";
        $uploadOk = 0 ;
    }

    if($uploadOk == 0 ){
        echo "Sorry, your file was not uploaded";
    }else{
        if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"] , $target_file)){
            echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded";
        }else{
            echo "Sorry, there was an error uploading your file";
        }
    }
?>
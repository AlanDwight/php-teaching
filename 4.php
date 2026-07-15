<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: #efefef;
        }
    </style>
</head>
<body>
    <form action="index.php" method="get">
        <label for="">username</label>
        <input type="text" name="username" class="" id="js-username">
        <input style="background-color: yellow; border : none; padding: 10px; border-radius : 10px" type="submit" value="submit" id="js-submit">
        <!-- <div id="js-username">asfdafa</div> -->

    </form>

    <script>
        // const username = document.getElementById('js-username').innerText; 
        
        const inputBox = document.getElementById('js-username'); 
        const submitButton = document.getElementById('js-submit');

        submitButton.addEventListener('click', ()=>{
            alert(inputBox.value);    
        })
        
        // console.log(username);
    </script>

    
</body>
</html>

<?php 
    $username = $_GET["username"];
    echo "hello {$username}";
?>
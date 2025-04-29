<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_REQUEST["Submit"])){
        if (empty($_REQUEST["fname"]=="")){
            echo "Invalid";
        }
        else{
            echo $_REQUEST["fname"];
        }
    }
    ?>
    <h2>Form Submitted Successfully!</h2>

</body>
</html>
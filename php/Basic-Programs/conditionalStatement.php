<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditional Statement</title>
</head>
<body>
    <?php
        $gemini = "Human";
        if($gemini == "Human"){
            echo "Gemini is Human";
        }
        else if($gemini == "Ai"){
            echo "Genimi is Ai";
        }
        else{
            echo "IDK";
        }
    ?>
</body>
</html>
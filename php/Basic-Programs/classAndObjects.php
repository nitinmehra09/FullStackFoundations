<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class And Objects</title>
</head>
<body>
    <?php
        class video{
            public $play = "Playing";
            public function __construct($name){
                echo $name;
            }
            // public function __construct(){
            //     echo "IDK your name";
            // }  = only one contructor in one class 
            // method overloading is not allowed in php 
        }
        $obj = new video("Nitin");
        echo "</br>";
        echo $obj->play;

    ?>
</body>
</html>
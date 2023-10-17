<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios_tipoWiki de UALN</title>
    <link type = 'text/css' rel = 'stylesheet' href = 'style.css'>
</head>
<body>
   
   <?php

    class Shape{
        public $hasSided = true;
    }

    class Square extends Shape{

    }

    $square = new Square();

    if (property_exists($square, "hasSided")) {
        echo "I have sides!";
    }
    

   ?>
    
</body>
</html>
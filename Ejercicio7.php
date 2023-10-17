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

    class vehicle{
        public function honk(){
            return "HONK HONK!";
        }
    }

    class bicycle extends vehicle {
        public function honk() {
            return "Beep beep!";
        }
    }

    $bicycle = new bicycle();
    echo $bicycle->honk();
   ?>
    
</body>
</html>
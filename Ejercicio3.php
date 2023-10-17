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

class Cat {
    public $isAlive = true;
    public $numLegs = 4;
    public $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function meow() {
        return "Meow meow";
    }
}

$cat = new Cat("Codecat");
$catMeow = $cat->meow();

echo $catMeow;


   ?>
    
</body>
</html>
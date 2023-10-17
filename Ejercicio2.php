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
   class Dog {
    public $numLegs = 4;
    public $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function bark() {
        return "woof!";
    }

    public function greet() {
        return "Hello, my name is " . $this->name . ", nice to meet you! :-)";
    }
}

$dog1 = new Dog("barker");
$dog2 = new Dog("amigo");

$dog1Bark = $dog1->bark();
$dog2Greet = $dog2->greet();

echo $dog1Bark . "<br>";
echo $dog2Greet;

   ?>
    
</body>
</html>
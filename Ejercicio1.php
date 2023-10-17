<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios_tipoWiki de UALN</title>
    <link type='text/css' rel='stylesheet' href='style.css'>
</head>
<body>

<?php
class Person {
    public $isAlive = true;
}

$teacher = new Person();
$student = new Person();
?>

<?php
class Person {
    public $firstname;
    public $lastname;
    public $age;
    public $isAlive = true;
}

$teacher = new Person();
$student = new Person();

echo $teacher->isAlive; // Muestra "1" que es equivalente a "true"
?>

<?php
class Person {
    public $firstname;
    public $lastname;
    public $age;
    public $isAlive = true;

    public function __construct($firstname, $lastname, $age) {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->age = $age;
    }
}

$teacher = new Person('boring', '1,2,3,4,5', 12345);
$student = new Person('student', 'example', 20);

echo $student->age; // Mostrará "20"
?>

<?php
class Person {
    public $firstname;
    public $lastname;
    public $age;
    public $isAlive = true;

    public function __construct($firstname, $lastname, $age) {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->age = $age;
    }

    public function greet() {
        return 'Hello, my name is ' . $this->firstname . ' ' . $this->lastname . '. Nice to meet you! :-)';
    }
}

$teacher = new Person('boring', '1,2,3,4,5', 12345);
$student = new Person('student', 'example', 20);

echo $teacher->greet(); // Muestra el saludo del maestro
echo $student->greet(); // Muestra el saludo del estudiante
?>

</body>
</html>

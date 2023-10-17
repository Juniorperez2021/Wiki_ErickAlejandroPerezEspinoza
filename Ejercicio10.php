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
        public function say() {
            echo "Here are my thoughts!";
        }
    }

    class Blogger extends Person {
        const cats = 50;
    }

    // Use the static keyword and the scope resolution operator to call Blogger's inherited say() method
    Blogger::say();

    // Use the scope resolution operator to echo the cats constant
    echo Blogger::cats;

    ?>

</body>
</html>

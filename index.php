<?php

declare(strict_types = 1);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include 'includes/autoloader.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gyakorlás</title>
</head>
<body>
    <?php
    echo "Script started.<br>";
    $person1 = new Person();
    try {
        $person1->setName(2);
        echo $person1->getName();
    } catch(TypeError $e) {
        echo "Error: " . $e->getMessage();
    }
    // echo "Script started.<br>";

    // try {
    //     $person1 = new Person('John', 25, 'blue');
    //     echo "Person object created.<br>";

    //     echo "<br>";
    //     echo "Name: " . $person1->getName() . "<br>";
    //     echo "Age: " . $person1->getAge() . "<br>";
    //     echo "Eye Color: " . $person1->getEyeColor() . "<br>";

    //     // Person::setDrinkingAge(21);
    //     // echo "<br>";
    //     // echo $person1->getDrinkingAge();

    //     $person1->setName("Jane");
    //     echo "Updated Name: " . $person1->getName() . "<br>";
    // } catch (TypeError $e) {
    //     echo "Error: " . $e->getMessage();
    // } catch (Exception $e) {
    //     echo "General Error: " . $e->getMessage();
    // }

    // echo "Script ended.<br>";
    ?>

</body>
</html>
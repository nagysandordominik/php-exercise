<?php
require './includes/person.inc.php';
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
    
    $person1 = new Person("Sándor", 25, "brown");


    // echo $person1->name ;
    // echo "<br>";
    // echo $person1->age ;
    // echo "<br>";
    // echo $person1->eyeColor ;
    
    echo $person1->getName();
    ?>

</body>
</html>
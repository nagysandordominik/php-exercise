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
    
    $person1 = new Person();
    $person1->setName("John Wick");

    echo $person1->name;
    echo "<br>";

    $person2 = new Person();
    $person2->setName("Babayega");
    echo $person2->name;
    
    ?>

</body>
</html>
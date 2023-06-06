<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Revision</title>
</head>
<body>
    <?php
    $name = 'sohyeb jarwan';
    $fruit = 'apple';

    echo "<h1> My name is : $name and fruit is $fruit </h1>";
    echo "<p>I have 10 {$fruit}s </p>";

    $skills = array('moahmmed','html','Css');
    ?>
    
    <ul>
        <?php foreach($skills as $value): ?>
        <li><?= $value ?></li> 
        <?php endforeach ?>  
    </ul>
</body>
</html>
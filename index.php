<?php
    require_once __DIR__ . '/Models/Movie.php';


    
$Batman = new Movie('Batman', 'Azione', '120' );
$HarryPotter = new Movie('HarryPotter', 'Azione', '110' );
$Spiderman = new Movie('Spiderman', 'Azione', '100' );
var_dump($Batman);
var_dump($HarryPotter);
var_dump($Spiderman);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-1</title>
</head>
<body>
    <h1>ooooooo</h1>
    <p><?php echo $Batman ->get_movie_info() ?></p>
    <p><?php echo $HarryPotter ->get_movie_info() ?></p>
    <p><?php echo $Spiderman ->get_movie_info() ?></p>

</body>
</html>
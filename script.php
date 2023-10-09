<?php
//recupero i dati da index.php e creo una variabile
$randomText = $_POST["randomtext"];
$hiddenText = $_POST["hiddentext"];

//ottengo la lunghezza del testo
$textLength = strlen($randomText);


//censuro le bad words
$badwords = str_replace($hiddenText, '***' , $randomText);



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badwords</title>
</head>

<body>
    <h1>Results:</h1>
    <div>
    <h2>User text: <?php echo $randomText ?></h2>
    <p>Text length: <?php echo $textLength ?> characters</p>
</div>

     <div>
    <h2>Bad Words: <?php echo $hiddenText ?></h2>
    </div>


    <h2><?php echo "$badwords" ?> </h2>


</body>

</html>
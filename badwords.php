<!-- Php Script -->
<?php
    $paragraph = "lorem ipsum, dolor sit amet consectetur adipisicing elit. laborum, dolores quis? quos cum nisi quasi.";
    $bad = strtolower($_GET["badword"]);
    $bad_word = str_replace($bad,"***",$paragraph);
    $badLen = strlen($bad_word);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Se vuoi cancellare una parola scrivi nell'URL /badwords.php?badword=LaParolaCheVuoiBannare</p>
    <h1><?php echo $bad_word; ?></h1>
    <h3><?php echo "Lunghezza stringa: " . $badLen . " caratteri"; ?></h3>
</body>
</html>
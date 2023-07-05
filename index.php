<?php 

function generaPassword() {
    echo(substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($_GET['passLength']/strlen($x)) )),1,$_GET['passLength']));
}

if(isset($_GET['passLength']) && $_GET['passLength'] !== ''){
    generaPassword($_GET['passLength']);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Password Generator</title>
</head>
<body>
    <form action="index.php" method="GET">
        <label for="passLength">Inserisci la lunghezza della Password da generare:</label>
        <input id="passLength" type="number" name="passLength" placeholder="">
        <button type="submit">Genera</button>
    </form>
</body>
</html>
<?php
include "./app.functions.php";
$gameSettings = [
    'word' => 'words',
    'rows' => 6
];


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Worlde</title>
</head>

<body>
    <div class="container d-flex justify-content-center">
        <div class="gameContainer">
            <?php for ($i = 1; $i < $gameSettings['rows']; $i++):?>
            <div class="row justify-content-center">
                <?php for ($j = 1; $j < strlen($gameSettings['word']); $j++):?>
                <div class="col"><span class="letter yellow">A</span></div>
                <?php endfor;?>
            </div>
            <?php endfor;?>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.4.slim.min.js" integrity="sha256-a2yjHM4jnF9f54xUQakjZGaqYs/V1CYvWpoqZzC2/Bw=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>
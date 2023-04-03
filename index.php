<?php

$number = [1, 2];
$sayHallo = 'hello world !';

function tesHalo(){
    global $sayHallo;
    echo $sayHallo;
}

var_dump(teshalo());
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <h1><?= $sayHallo ?></h1>
</body>
</html>

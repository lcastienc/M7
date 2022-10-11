<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My first php</title>
</head>
<body>
<h1>Mesas Restaurante</h1>

<?php
 $taules = [];
 $i=0;
$comensales = mt_rand(0,5);
$restaurante = "A la taula" . $taules[$i] . "hi ha" . $comensales . "comensals";
for ($i=0;$i<= 9;$i++){
    if ( $comensales == 0) {
        $taules= new $taules[$i];
        echo $restaurante;
    }
}
?>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Cadastre sua bebida</title>
</head>
<body>
    <h2>Cadastro de vinhos</h2>

    <form method="post">
        <input type="text" name="CadVinho" id="CadVinho" /><br/>
        <input type="text" name="CadRefrigerante" id="CadRefrigerante" /><br/>
        <input type="text" name="CadSuco" id="CadSuco" /><br/>
        <input type="submit" name="Registro" id="Registro" /><br/>
    </form>
</body>
</html>

<?php
    require_once 'Vinho.php';
    require_once 'Refrigerante.php';
    require_once 'Suco.php';

    $vinho        = new Vinho();
    $refrigerante = new Refrigerante();
    $suco         = new Suco();

    $vinho->setNome('Viñapeña Tempranillo');
?>
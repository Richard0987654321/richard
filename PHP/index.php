<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="adm/css/estilo.css">
    <title>Cadastro</title>
</head>
<body>
    <?php
    
    $p = "rd/imagem/";
    $imagem = glob("$p{*.jpeg, *.png, *.gif}" , GLOB_BRACE);

    
    foreach( $imagem as $pos ){
        echo "<img src='".$pos ."' class='image' />";
    }
    ?>
</body>
</html>
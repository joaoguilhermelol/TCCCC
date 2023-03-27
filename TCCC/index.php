<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,300&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="box">

            <img src="maquina.svg" alt="maquina">

            <div class="main-button">
                <h1>ATENÇÃO!!!</h1>
                <a href="FORMULARIO PARA TCCC/Relatorio.php"><button>PARAR MÁQUINA</button></a>
            </div>

            <?php
            $Relatorio = "Relatorio.php";

            if(isset($_GET['Relatorio'])){
                include ($Relatorio);
            }
            ?>
            
        </div>
    </div>
</body>

</html>
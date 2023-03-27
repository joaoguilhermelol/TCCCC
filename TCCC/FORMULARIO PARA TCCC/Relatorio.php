<?php
if (isset($_POST['submit']))
{
   /* print_r('Motivo: '. $_POST['motivoparada']);
    print_r('<br>');
    print_r('Descrição: ' . $_POST['tipoparada']);*/

    include_once('bdconnect.php');

    $motivo = $_POST['motivoparada'];
    $descricao = $_POST['tipoparada'];

    $result = mysqli_query($conn, "INSERT INTO  relatorio(motivo,descricao) VALUES ('$motivo','$descricao')");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <style>
        body{
            font-family: 'Roboto', sans-serif;
            
            background-color:rgba(0, 0, 0, 0.9)
        }
        .box{
            color: white;
            position: absolute;
            top: 35%;
            left: 40%;
            transform: translate(-35%,-35%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 10px;
            border-radius: 15px;
            width: 65%;
        }
        fieldset{
            border-color: #48C926;
        }
        legend{
            align-items: center;
            border: #2f2841;
            padding: 10px;
            text-align: center;
            background-color:#2f2841;
            border-radius: 8px;
        }
        .inputBox{
            position: relative;
        }
        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }
        .labelInput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }
        .inputUser:focus ~ .labelInput,
        .inputUser:valid ~ .labelInput{
            top: -20px;
            font-size: 12px;
            color: dodgerblue;
        }
        #submit{
            background-color:#48C926;
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }
        #submit:hover{
            background-color:#48C926;
        }
        select {
            height: 20px;
        }

        .titulo{
            background-color: red;
        }
        inputs {
            
            border: none;
            border-bottom: 1px solid black;
            height: 100px;
        }
       
    </style>
    <script>
        
</script>
</head>
<body>
    <div class="box">
        <form action="Relatorio.php" method="POST">
            <fieldset>

                <legend class="titulo">Por que a produção de fertilizantes parou?</b></legend>
                <br>
                <legend>Selecione o motivo da Parada</b></legend>
                
                <select id="motivoparada" name="motivoparada" required>
                    <option>Selecione o motivo:</option>
                    <option value="Produção parada por problema nas máquinas">Produção parada por problema nas máquinas.</option>
                    <option value="Produção parada para o setup do equipamento">Produção parada para o setup do equipamento.</option>
                    <option value="Produção parada por ociosidade">Produção parada por ociosidade.</option>
                    <option value="Produção parada por causa externa">Produção parada por causa externa.</option>
                    <option value="Parada preventiva da produção">Parada preventiva da produção.</option>
                    <option value="Produção parada por acidente de trabalho">Produção parada por acidente de trabalho</option>
                    
                    
                    
                </select>
                <legend>Digite o tipo da Parada</b></legend>
                <textarea required class="inputs" name="tipoparada" id="descricao" cols="163" rows="10" placeholder="Digite o que aconteceu"></textarea>
               

                
                <button type="submit" name="submit" id="submit">Enviar</button>
            </fieldset>
        </form>
    </div>
    
</body>
</html>
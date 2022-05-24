<?php 
    include 'servicos/servicoMenssagemSessao.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documento de inscrição para a Competição</title>
</head>
<body>
    <p>Inscrição para competir</p>
    <form action="script.php" method="post">
        <?php 
        $mensagemDeSucesso = isset($_SESSION["mensagem de sucesso"])? $_SESSION["mensagem de erro"]:"";
        if(!empty($mensagemDeSucesso)) {
            echo $mensagemDeSucesso;
        }

        $mensagemDeErro =  $mensagemDeErro = isset($_SESSION["mensagem de Erro"])? $_SESSION["mensagem de Sucesso"]:"";
        if(!empty($mensagemDeErro)) {
            echo $mensagemDeErro;
     }
    ?>
    <p>Seu nome: <input type="text" name="nome" id="nome" /></p>
    <p>Seu idade: <input type="number" name="idade" id="idade" /></p>
    <p><input type="submit" value="Me inscrever agora!" /></p>
</form>
    
</body>
</html>
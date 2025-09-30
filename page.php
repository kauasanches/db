<?php
include "conexao.php"; // inclui o arquivo de conexão
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/style-for.css">
    <title>Formulário</title>
</head>
<body>
    <div class="container">
                
        <div class="cabecalho">
            <a href="page.php">Página</a>
            <a href="mural.php">Mural</a>
            <a href="moderar.php">Moderar</a>
        </div>


        <div class="container-form">
            <form class="form-container">
    
                <h1 class="titulo-form">Formulário</h1>
                <input type="text" placeholder="Nome">
                <input type="password" placeholder="Senha">
                <input type="email" placeholder="Email">
    
                <button type="submit" class="btn-submit">
                    Enviar
                </button>
            </form>
        </div>

    </div>
</body>
</html>

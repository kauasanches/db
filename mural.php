<?php
include "conexao.php";

// Inserir novo pedido/recado
if(isset($_POST['cadastra'])){
    $nome  = mysqli_real_escape_string($conexao, $_POST['nome']);
    $email = mysqli_real_escape_string($conexao, $_POST['email']);
    $mensagem   = mysqli_real_escape_string($conexao, $_POST['mensagem']);

    $sql = "INSERT INTO recados (nome, email, mensagem) VALUES ('$nome', '$email', '$mensagem')";
    mysqli_query($conexao, $sql) or die("Erro ao inserir dados: " . mysqli_error($conexao));
    header("Location: mural.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8"/>
    <title>Mural de pedidos</title>
    <link rel="stylesheet" href="./styles/style-for.css"/>
    <script src="scripts/jquery.js"></script>
    <script src="scripts/jquery.validate.js"></script>
    <script>
        $(document).ready(function() {
            $("#mural").validate({
                rules: {
                    nome: { required: true, minlength: 4 },
                    email: { required: true, email: true },
                    mensagem: { required: true, minlength: 10 }
                },
                messages: {
                    nome: { required: "  Digite o seu nome", minlength: "  O nome deve ter no mínimo 4 caracteres" },
                    email: { required: "  Digite o seu e-mail", email: "  Digite um e-mail válido" },
                    mensagem: { required: "  Digite sua mensagem", minlength: "  A mensagem deve ter no mínimo 10 caracteres" }
                }
            });
        });
    </script>
</head>
<body>
    <div class="container-geral">
        <div id="main">
            <div id="geral">
                
                <div class="cabecalho">
                    <a href="page.php">Página</a>
                    <a href="mural.php">Mural</a>
                    <a href="moderar.php">Moderar</a>
                </div>
    
                
                <div class="mural-container">
                    <div id="container-mural">
                        <div id="header">
                            <h1>Mural de pedidos</h1>
                        </div>
                        <div id="formulario_mural">
                            <form id="mural" method="post">
                                <input class="name" type="text" name="nome" placeholder="Nome:"/><br>
                                <input class="email" type="text" name="email" placeholder="Email:"/><br>
                                <textarea class="msg" name="mensagem" placeholder="Mensagem:"></textarea><br>
                                <input class="btn-submit2" type="submit" value="Publicar no Mural"/>
                            </form>
                        </div>
            
                        <?php
                        $seleciona = mysqli_query($conexao, "SELECT * FROM recados ORDER BY id DESC");
                        while($res = mysqli_fetch_assoc($seleciona)){
                            echo '<div class="recados-form">';
                            echo '<ul class="recados">';
                            echo '<li><strong>ID:</strong> ' . $res['id'] . '</li>';
                            echo '<li><strong>Nome:</strong> ' . htmlspecialchars($res['nome']) . '</li>';
                            echo '<li><strong>Email:</strong> ' . htmlspecialchars($res['email']) . '</li>';
                            echo '<li><strong>Mensagem:</strong> ' . nl2br(htmlspecialchars($res['mensagem'])) . '</li>';
                            echo '</ul>';
                            echo '</div>';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

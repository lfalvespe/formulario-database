
<?php

    /* Testando se está enviando via POST

        if (isset($_POST['submit'])) {
            echo "Nome : " . $_POST['nome'] . "<br>";
            echo "Email : " . $_POST['email'] . "<br>";
            echo "Tel: " . $_POST['telefone'] . "<br>";
            echo "Gênero: " . $_POST['genero'] . "<br>";
            echo "Data Nasc :" . $_POST['nasc'] . "<br>";
            echo "Cidade: " . $_POST['cidade'] . "<br>";
            echo "Estado: " . $_POST['estado'] . "<br>";
            echo "Endereço: " . $_POST['endereco'];
        }

    */

    include_once('config.php');

    if (isset($_POST['submit'])) { 

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $genero = $_POST['genero'];
        $nasc = $_POST['nasc'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $endereco = $_POST['endereco'];

        $result = mysqli_query($conexao, "INSERT INTO clientes(nome,email,telefone,genero,nasc,cidade,estado,endereco) 
        VALUES ('$nome', '$email', '$telefone', '$genero', '$nasc', '$cidade', '$estado', '$endereco')");

    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario | GN</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class = "box">
        <form method="post" action="">
            <fieldset>
                <legend><strong>Fomulário de Clientes</strong></legend>
                <br>
                <div class="inputbox">
                    <input type="text" name = "nome" id = "nome" class = "inputUser" required>
                    <label for="nome" class = "labelInput">Nome completo</label>
                </div>
                <br><br>
                <div class = "inputbox">
                    <input type="email" name = "email" id = "email" class = "inputUser" required>
                    <label for="text" class = "labelInput">Email</label>
                </div>
                <br><br>
                <div class = "inputbox">
                    <input type="tel" name = "telefone" id = "telefone" class = "inputUser" required>
                    <label for="telefone" class = "labelInput">Telefone</label>
                </div>
                <br>
                <p>Sexo:</p>
                <input type="radio" id = "feminino" name = "genero" value = "F" required>
                <label for="feminino">Feminino</label>
                
                <input type="radio" id = "masculino" name = "genero" value = "M" required>
                <label for="masculino">Masculino</label>
                
                <input type="radio" id = "outro" name = "genero" value = "Outro" required>
                <label for="outro">Outro</label>
                <br><br>
                
                <label for="nasc"><strong>Data Nascimento</strong></label>
                <input type="date" name = "nasc" id = "nasc" required>
               
                <br><br>
                <div class = "inputbox">
                    <input type="text" id = "cidade" name = "cidade" class = "inputUser" required>
                    <label for="cidade" class = "labelInput"><strong>Cidade</strong></label>
                </div>
                <br><br>
                <div class = "inputbox">
                    <input type="text" id = "estado" name = "estado" class = "inputUser" required>
                    <label for="estado" class = "labelInput"><strong>Estado</strong></label>
                </div>
                <br><br>
                <div class = "inputbox">
                    <input type="text" id = "endereco" name = "endereco" class = "inputUser" required>
                    <label for="endereco" class = "labelInput"><strong>Endereço</strong></label>
                </div>
                <br><br>
               <input type="submit" name = "submit" id = "submit" value="Cadastrar">
            </fieldset>
        </form>
    </div>
    
</body>
</html>
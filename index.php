<?php

    if(isset($_POST['submit']))
    {
        print_r('Nome: '. $_POST['nome']);
        print_r('<br>');
        print_r('Email: '.$_POST['email']);
        print_r('<br>');
        print_r('Telefone: '.$_POST['telefone']);
        print_r('<br>');
        print_r('Genero: '.$_POST['genero']);
        print_r('<br>');
        print_r('Data de nascimento: '.$_POST['data_nascimento']);
        print_r('<br>');
        print_r('Cidade: '.$_POST['cidade']);
        print_r('<br>');
        print_r('Estado: '.$_POST['estado']);
        print_r('<br>');
        print_r('Endereço: '.$_POST['endereco']);
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="box">
        <form action="index.php" method="POST">
            <fieldset>
                <legend><b>Formulário de Clientes</b></legend>
                <br>
                <div class="inpuBox">
                    <input type="text" name="nome"  id="nome" class="inputUser" required>
                    <label for="nome" class="LabelInput">Nome completo</label>
                </div>
                <br><br>
                <div class="inpuBox">
                    <input type="text" name="email"  id="email" class="inputUser" required>
                    <label for="email" class="LabelInput">Email</label>
                </div>
                <br><br>
                <div class="inpuBox">
                    <input type="tel" name="telefone"  id="telefone" class="inputUser" required>
                    <label for="tel"class="LabelInput">Telefone</label>
                </div>
                <br>
                <p>Sexo:</p>
                <input type="radio" id="feminino" name="genero" value="feminino" required>
                <label for="feminino">Feminino</label><br>
                <input type="radio" id="masculino" name="genero" value="masculino" required>
                <label for="masculino">Masculino</label><br>
                <input type="radio" id="outro" name="genero" value="outro" required>
                <label for="outro">Outro</label>
                <br><br>
                <label for="data_nascimento"><b>Data de nascimento:</b></label>
                <input type="date" name="data_nascimento"  id="data_nascimento"  required>        
                <br><br>
                <div class="inpuBox">
                    <input type="text" name="cidade"  id="cidade" class="inputUser" required>
                    <label for="cidade"class="LabelInput">Cidade</label>
                </div>
                <br><br>
                <div class="inpuBox">
                    <input type="text" name="estado"  id="estado" class="inputUser" required>
                    <label for="estado"class="LabelInput">Estado</label>
                </div>
                <br><br>
                <div class="inpuBox">
                    <input type="text" name="endereco"  id="endereco" class="inputUser" required>
                    <label for="endereco"class="LabelInput">Endereço</label>
                </div>
                <br><br>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>
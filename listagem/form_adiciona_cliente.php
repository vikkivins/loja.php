<?php
    include_once 'cabecalho.php';
    include_once 'conexao.php';

?>

<title>Formulário - Inclusão de Cliente</title>
<link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="box">
        <form method="POST" action="action_adiciona_cliente.php">
            <fieldset>
                <legend><b>Formulário de Clientes</b></legend>
                <br>
                
                <div class="inputBox">
                    <label for="nome"><b>Nome</b></label>
                    <input type="text" name="txtnome" id="txtnome" class="inputUser" required>
                </div>
                <div class="inputBox">
                    <label for="nome"><b>Sobrenome</b></label>
                    <input type="text" name="txtsobrenome" id="txtsobrenome" class="inputUser" required>
                </div>

                <div class="inputBox">
                    <label for="nome"><b>Telefone</b></label>
                    <input type="tel" name="txtfone" id="txtfone" class="inputUser" required>
                </div>

                <div class="inputBox">
                    <label for="nome"><b>Data de Nascimento</b></label>
                    <input type="date" name="txtdatanasc" id="txtdatanasc" class="inputUser" required>                    
                </div>

                <div class="inputBox">
                    <label for="nome"><b>Usuário</b></label>
                    <input type="text" name="txtusuario" id="txtusuario" class="inputUser" required>                    
                </div>

                <div class="inputBox">
                    <label for="nome"><b>Senha</b></label>
                    <input type="text" name="txtsenha" id="txtsenha" class="inputUser" required>                    
                </div>

                <button type="submit" name="btncadastrar" class="btn" id="btncadastrar">Adicionar</button>

            </fieldset>
    </form>
    </div>
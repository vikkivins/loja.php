<?php
 include_once 'cabecalho.php';
 require_once 'conexao.php';
 $consulta=$conecta->prepare('SELECT * FROM tab_clientes');
 $consulta->execute();

 ?>

<title>CRUD - Lista de cloentes</title>
</head>
<body>
    <h1>Lista de clientes</h1>
    <table>
        <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Sobrenome</th>
            <th>Telefone</th>
            <th>Data de Nascimento</th>
            <th colspan="2">Ações</th>
        </tr>
        <tr>
            <?php
                while($linha=$consulta->fetch(PDO::FETCH_ASSOC)){
                    echo "<tr>";
                    echo "<td>{$linha['cli_id']}</td>";
                    echo "<td>{$linha['cli_nome']}</td>";
                    echo "<td>{$linha['cli_sobrenome']}</td>";
                    echo "<td>{$linha['cli_fone']}</td>";
                    echo "<td>{$linha['cli_data_nasc']}</td>";
                    echo "<td><a href='altera_cliente.php?id={$linha['cli_id']}' class='btn-floating grey'><i class='material-icons'>edit</i></a></td>";
                    echo "<td><a href='exclui_cliente.php?id={$linha['cli_id']}' class='btn-floating red'><i class='material-icons'>delete</i></a></td>";
                    echo "</tr>";
                }
                echo "</table>";
                echo "<a href='form_adiciona_cliente.php' class='btn'>Adicionar cliente</a>";

                include_once 'rodape.php';
            ?>
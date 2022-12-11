<?php
include_once 'cabecalho.php';


  $descricao = $_COOKIE['descricao'];
  $usuario = $_COOKIE['usuario'];
  $preco = $_COOKIE['preco'];
  $produto = $_COOKIE['produto'];

  if(isset($produto)){
    echo "<h3>Dados do produto comprado:</h3>";
    echo "<h3>CLIENTE: ".strtoupper($usuario)."</h3>";
    echo "<table style='align:center' border=1><tr><th>COD. PRODUTO</th><th>DESCRIÇÃO</th><th>PREÇO</th></tr><tr><td>$produto</td><td>$descricao</td><td>R$ $preco</td></tr>";
  }
  else{
    $tenis = "nenhum apocalipse selecionado<br>";
    $preco = 0;
  }

  include_once 'rodape.php';
?>

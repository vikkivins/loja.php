<?php
    session_start();
    echo "<h3>PRODUTOS EM PROMOÇÃO</h3>";
    $nome = $_SESSION['usuario'];
    echo "Seja bem vindo " . strtoupper($nome);
    echo "<table width='80%' align='center'>";
    echo "<tr align='center'><td><a href='a13_cookie1.php?prod=1'><img src='img/bomba1.jpg' alt='Apocalipse Nuclear'><br>Apocalipse Nuclear</a><br>R$ 23.248,00";
    echo "</td>";
    echo "<td>";
    echo "<a href='a13_cookie1.php?prod=2'><img src='img/cometa1.jpg' alt='Apocalipse Meteoro'><br>Apocalipse Meteoro</a>R$ 20.199,00";
    echo "</td>";
    echo "<td>";
    echo "<a href='a13_cookie1.php?prod=3'><img src='img/incendio1.jpg' alt='Apocalipse Incendiario'><br>Apocalipse Incendiario</a>R$ 18.327,00";
    echo "</td></tr>";
    echo "<tr align='center'><td><a href='a13_cookie1.php?prod=4'><img src='img/tornado1.jpg' alt='Apocalipse Tornado'><br>Apocalipse Tornado</a>R$ 15.110,00";
    echo "</td>";
    echo "<td><a href='a13_cookie1.php?prod=5'><img src='img/tsunami1.jpg' alt='Apocalipse Tsunami'><br>Apocalipse Tsunami</a>R$ 27.460,00";
    echo "</td>";
    echo "<td><a href='a13_cookie1.php?prod=6'><img src='img/zumbi1.jpg' alt='Apocalipse Zumbi'><br>Apocalipse Zumbi</a>R$ 110.678,00";
    echo "</td>";
?>
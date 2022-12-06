<?php
    session_start();
    echo "<h3>PRODUTOS EM PROMOÇÃO</h3>";
    $nome = $_SESSION['usuario'];
    echo "Seja bem vindo " . strtoupper($nome);
    echo "<table width='80%' align='center'>";
    echo "<tr align='center'><td><a href='a13_cookie1.php?prod=1'><img src='img/apocalipse1.png' alt='Apocalipse Nuclear' height='250' width='250'><br>Apocalipse Nuclear</a><br>R$ 23.248,00";
    echo "</td>";
    echo "<td>";
    echo "<a href='a13_cookie1.php?prod=2'><img src='img/apocalipse2.png' alt='Apocalipse Meteoro' height='250' width='250'><br>Apocalipse Meteoro</a><br>R$ 20.199,00";
    echo "</td>";
    echo "<td>";
    echo "<a href='a13_cookie1.php?prod=3'><img src='img/apocalipse3.png' alt='Apocalipse Incendiario' height='250' width='250'><br>Apocalipse Incendiario</a><br>R$ 18.327,00";
    echo "</td></tr>";
    echo "<tr align='center'><td><a href='a13_cookie1.php?prod=4'><img src='img/apocalipse4.png' alt='Apocalipse Tornado' height='250' width='250'><br>Apocalipse Tornado</a><br>R$ 15.112,00";
    echo "</td>";
    echo "<td><a href='a13_cookie1.php?prod=5'><img src='img/apocalipse5.png' alt='Apocalipse Tsunami' height='250' width='250'><br>Apocalipse Tsunami</a><br>R$ 27.463,00";
    echo "</td>";
    echo "<td><a href='a13_cookie1.php?prod=6'><img src='img/apocalipse6.png' alt='Apocalipse Zumbi' height='250' width='250'><br>Apocalipse Zumbi</a><br>R$ 110.678,00";
    echo "</td>";
?>
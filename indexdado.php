<!DOCTYPE html>
<?php
    $win = " ";
    $dadousuario = rand(1,6); 
    $dadousuario2 = rand(1,6); 
    $dadocomputador = rand(1,6);
    $dadocomputador2 = rand(1,6);
    $somausuario = ($dadousuario + $dadousuario2);
    $somacomputador = ($dadocomputador + $dadocomputador2);


if ($somausuario > $somacomputador)
    $win = " O usuário venceu!";

else if ($somausuario < $somacomputador)
     $win = " O computador venceu!";

else if ($somausuario < $somacomputador)
     $win = " Houve um empate!";

?>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Dados</title>
</head>
<body>
    <?php
    include  "menu.php" ;
    ?>
    <br>
<form action= " " method="post">
    <input type="submit"  value="Lançar Dado">
</form>
<br>
<h1> Dado usuario:</h1> 
<br>
<?php
    echo "<img src= 'img/$dadousuario.png' alt = ' '>";
    echo "<img src= 'img/$dadousuario2.png' alt = ' '>"; 
?>
<br>
<br>
<h1> Dado Computador: </h1> 
<br>
<?php 
    echo "<img src= 'img/$dadocomputador.png' alt = ' '>";
    echo "<img src= 'img/$dadocomputador2.png' alt = ' '>";
?>
<br>
<h3> A soma do usuário foi:</h3>
<?php echo $somausuario;
?>
<br>
<h3>A soma do computador foi:</h3>
<?php echo $somacomputador;
?>
<br>
<h1>O resultado final:</h1>
<h2>
<?php 
   echo $win;
?>
</h2> 
</body>
</html>
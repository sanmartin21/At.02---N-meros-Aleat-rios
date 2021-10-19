<!DOCTYPE html>
<?php
    $win = " ";
    $opuser = isset($_POST['user']) ? $_POST['user'] : 0;
    $ppt = rand(1,3);

if ($ppt == 1)
    if ($opuser == 1)
        $win = "Ocorreu um empate!";
    else if ($opuser == 2)
        $win = "O usuário é o ganhador!";
    elseif ($opuser == 3)
        $win = "O computador é o ganhador!";
    else
        $win = "Ocorreu um erro!";


elseif ($ppt == 2)
    if ($opuser == 2)
        $win = "Ocorreu um empate!";
    elseif ($opuser == 1)
        $win = "O computador é o ganhador!";
    elseif ($opuser == 3)
        $win = "O usuário é o ganhador!";
    else
        $win = "Ocorreu um erro!";

elseif ($ppt == 3)
    if ($opuser == 3)
        $win = "Ocorreu um empate!";
    elseif ($opuser == 1)
        $win = "O usuário é o ganhador!";
    elseif ($opuser == 2)
        $win = "O computador é o ganhador!";
    else
        $win = "Ocorreu um erro!";

?>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>PPTESOURA</title>
</head>
<body>
    <?php
    include  "menu.php" ;
    ?>
<h1>Joken Po</h1>
<form action="" method="POST">
    <h2>Usuário, qual a sua escolha?</h2>
    <input type="radio" name="user" value="1">Papel<br>
    <input type="radio" name="user" value="2">Tesoura<br>
    <input type="radio" name="user" value="3">Pedra<br>
    <br>
    <input type="submit" value="Jogar"><br>
    </form>
    <br>
    <h2>O usuário escolheu:</h2> 
    <br>
    <?php echo "<img src='img/ppt/$opuser.png' alt=''>";?>
    <br>
    <h2>O computador escolheu:</h2> 
    <br>
    <?php echo "<img src='img/ppt/$ppt.png' alt=''>";?>
    <br>
    <h1><?php echo $win; ?></h1>
</body>
</html>
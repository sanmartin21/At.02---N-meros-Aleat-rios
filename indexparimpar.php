<!DOCTYPE html>
<?php
    $winner = " ";
    $parimpar = 0;
    $ip = 0;
    $usernum = isset($_POST['usernum']) ? $_POST['usernum'] : 0;
    $userpaim = isset($_POST['userpaim']) ? $_POST['userpaim'] : 0;
    $pc = " ";
    $user = " ";
    $maos = rand(0,10);
    $resultado= $usernum + $maos;    

    if ($userpaim == 0){
        $parimpar = 1;
        $pc = "Ímpar!";
    }else if ($userpaim == 1){
        $parimpar = 0;
        $pc = "Par!";
    }
    if ($parimpar == 1){
        $pc = "Ímpar!";
    }else if ($parimpar == 0){
        $pc = "Par!";
    }

    if ($userpaim == 1){
        $user = "Ímpar!";
    }else if ($userpaim == 0){
        $user = "Par!";
    }

    if ($resultado % 2 == 0){
        $ip = 0;
    }else if ($resultado % 2 != 0){
        $ip = 1;
    }


    if ($userpaim == $ip) {
        $winner = "Quem venceu foi o usuário!";
    }else if ($userpaim != $ip){
        $winner = "Quem venceu foi o computador!";
    }

?>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>ParImpar</title>
</head>
<body>
    <?php
    include  "menu.php" ;
    ?>
<h1>Par ou Ímpar!</h1>
<form action="" method="POST">
    <h2>Usuário, escolha o número desejado:</h2><br>
      <select action="usernum" name= "usernum">
            <option value="0">0</option>
            <option value="1">1</option>         
            <option value="2">2</option>          
            <option value="3">3</option>           
            <option value="4">4</option>          
            <option value="5">5</option>           
            <option value="6">6</option>          
            <option value="7">7</option>           
            <option value="8">8</option>          
            <option value="9">9</option>           
            <option value="10">10</option>         
    </select> <br>
    <br>
    <input type="radio" name="userpaim" id="userpaim" value="0">Par<br>
    <input type="radio" name="userpaim" id="userpaim" value="1">Ímpar<br>
    <input type="submit" value="Jogar"><br>
    </form>
    <h2>O computador escolheu:</h2> 
    <br>
    <?php echo $pc;?>
    <br>
    <h2>O computador escolheu o número:</h2> 
    <br>
    <?php echo "<img src='img/parimpar/$maos.png' alt=''>";?>
    <br>
    <h2>O usuário escolheu o número:</h2>
    <?php echo "<img src='img/parimpar/$usernum.png' alt=''>";?>
    <br>
    <?php echo "A soma de ambos números resultou em: " . $resultado; ?> 
    <br>
    <?php echo $winner; ?>
    <br>
</body>
</html>
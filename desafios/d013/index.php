<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
 </head>
<body>
    <?php 
    $saque = $_REQUEST['saque'] ?? 0;
    ?>
<main>
    <h1>Caixa Eletrônico</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
    <label for="saque">Qual valor você deseja sacar?<sup>*</sup></label>
    <input type="number" name="saque" id="saque" step="5" required value="<?=$saque?>">
    <p style="font-size: 0.7em"><sup>*</sup>Notas disponiveis: R$100, R$50, R$10 e R$5</p>
    <input type="submit" value="Sacar">
</form>
    </main>
    <?php 
    $resto = $saque;

    $tot100 = floor($resto / 100);
    $resto %= 100;

    $tot50 = floor($resto / 50);
    $resto %= 50;

    $tot10 = floor($resto / 10);
    $resto %= 10;

    $tot5 = floor($resto / 5);
    $resto %= 5;
    ?>
<section>
 <h2>Saque de R$[??] realizado</h2>
 <p>O caixa eletrônico vai te entregar as seguintes notas:</p>
        <ul>
            <li>100 <?=$tot100?></li>
            <li>50 <?=$tot50?></li>
            <li>10 <?=$tot10?></li>
            <li>5 <?=$tot5?></li>
        </ul>
    </section>
</body>
</html>
   
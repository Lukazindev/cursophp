<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitovs em PHP</title>
</head>
<body>
    <h1>Teste de Tipos Primitovs em PHP</h1>
    <?php 
        //  0x = hexadecimal ob =binário 0 = Octal
        // $num = 0x1A;
        // echo "O valor da variavel é $num";
        
        // $v = "Lucas";
        // var_dump($v);

        //$num = (integer) 3e2; //3 x 10(2) coerção
        // echo "O valor é $num"
        //var_dump($num);

        //$num = (int) "950";
        //var_dump($num);

        //$vet = [6, 2.5, "Maria, 3, false];
        //var_dump($vet);

        class Pessoa {
            private string $nome;   
        }

        $p = new Pessoa;
            var_dump($p);
    ?>
</body>
</html>
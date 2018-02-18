<!DOCTYPE>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8" />    
        <title>PHP with POO</title>
    </head>
    <body>
        <pre>
         <?php 
            require_once 'Caneta.php';
            
            $c1 = new Caneta("BIC", "Azul", 0.5, 50);
            
            print_r($c1);
            $c1 -> escrever();
            $c1 -> rabiscar();
            echo "<br />";
            
            $c2 = new Caneta("NIK", "Vermelho", 0.8, 90);
            
            print_r($c2);
            $c2 ->escrever();
            $c2 ->rabiscar();  
           
         ?>
        </pre>
    </body>
</html>


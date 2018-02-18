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
            
            $c1 = new Caneta();
            $c1 -> modelo = "BIC";
            $c1 -> cor = "Azul";
            $c1 ->setPonta(0.5);
            $c1 ->setCarga(50);
            $c1 ->setTampada(true);
            
            print_r($c1);
            echo "<br />";
            
            $c2 = new Caneta();
            $c2 -> modelo = "BIC";
            $c2 -> cor = "Vermelho";
            $c2 ->setPonta(0.4);
            $c2 ->setCarga(40);
            $c2 ->setTampada(false);
            
            print_r($c2);
            $c2 ->escrever();
            $c2 ->rabiscar();  
           
         ?>
        </pre>
    </body>
</html>


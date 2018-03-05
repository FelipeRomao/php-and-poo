<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8" />
        <title>UltraEmojiCombat</title>
    </head>
    <body>
        <pre>
            <?php
            require_once 'Lutador.php';
            $lutador = array();
            $lutador[0] = new Lutador("Pretty Boy", "França", 35, 1.74, 68.4, 6, 2, 1);
            $lutador[0]->apresentar();
            
            $lutador[1] = new Lutador("Putscript", "Brasil", 29, 1.68, 57.8, 14, 2, 3);
            $lutador[1]->apresentar();
            
            $lutador[2] = new Lutador("SnapShadow", "EUA", 35, 1.65, 80.9, 12, 2, 1);
            $lutador[2]->apresentar();
            
            $lutador[3] = new Lutador("Dead Code", "Austrália", 28, 1.93, 81.6, 13, 0, 2);
            $lutador[3]->apresentar();
            
            $lutador[4] = new Lutador("UFOCobol", "Brasil", 37, 1.70, 119.3, 5, 4, 3);
            $lutador[4]->apresentar();
            
            $lutador[5] = new Lutador("Nerdaart", "EUA", 30, 1.81, 105.7, 12, 2, 4);
            $lutador[5]->apresentar();
            
            print_r($lutador);
            ?>
        </pre>
    </body>
</html>

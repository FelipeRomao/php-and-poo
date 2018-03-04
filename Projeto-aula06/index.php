<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8" />
        <title>Trabalhando com Interface</title>
    </head>
    <body>
        <h1>Projeto do controle remoto</h1>
        <pre>
            <?php
                require_once 'ControleRemoto.php';
                $controle1 = new ControleRemoto();
                $controle1->ligar(true);
                /*Não é possível usar os métodos privados, a não ser os métodos implementados.
                 * $controle1->setTocando(true);
                 */
                $controle1->maisVolume();
                $controle1->abrirMenu();
                

                print_r($controle1);
            ?>
        </pre>
    </body>
</html>

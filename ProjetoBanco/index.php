<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8" />
        <title>Conta no Banco</title>
    </head>
    <body>
        <pre>
            <?php
                require_once 'ContaBanco.php';
                $pessoa1 = new ContaBanco();
                $pessoa1->setNumConta(1234);
                $pessoa1->abrirConta("CC");
                $pessoa1->setDono("Felipe Romao");
                
                $pessoa1->depositar(200);
                $pessoa1->sacar(160);
                 $pessoa1->pagarMensal();
                //$pessoa1->fecharConta();
                
                print_r($pessoa1);
                echo "<br />";
                
                $pessoa2 = new ContaBanco();
                $pessoa2->setNumConta(4567);
                $pessoa2->abrirConta("CP");
                $pessoa2->setDono("Luciana Alves");
                
                $pessoa2->depositar(800);
                $pessoa2->sacar(400);
                $pessoa2->pagarMensal();
                //$pessoa2->fecharConta();
                
                print_r($pessoa2);
            ?>
        </pre>
    </body>
</html>

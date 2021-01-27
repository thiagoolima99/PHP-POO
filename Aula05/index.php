<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO</title>
</head>
<body>
<pre>
    <?php
        require_once 'ContaBanco.php';
        require_once 'teste.php';
        $p1 = new ContaBanco(); // Jubileu
        $p2 = new ContaBanco(); // Creusa

        // $h = new hello();
        // $h->letras = "teste";
        // echo $h->letras;
        // $h->hello();


        $p1->abrirConta("CC");
        $p1->setDono("Jubileu");
        $p1->setNumConta(1111);

        $p2->abrirConta("CP");
        $p2->setDono("Creuza");
        $p2->setNumConta(2222);

        $p1->depositar(300);
        $p2->depositar(500);

        $p2->sacar(100);

        $p1->pagarMensal();
        $p2->pagarMensal();

        $p1->fecharConta();
        $p2->fecharConta();

        print_r($p1);
        print_r($p2);


    ?>
</pre>   
</body>
</html>
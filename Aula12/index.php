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
        require_once 'Mamifero.php';
        require_once 'Reptil.php';
        require_once 'Peixe.php';
        require_once 'Ave.php';
        require_once 'Canguru.php';
        require_once 'Cachorro.php';
        require_once 'Cobra.php';
        require_once 'Tartaruga.php';
        require_once 'Goldfish.php';
        require_once 'Arara.php';

        $m = new Mamifero();
        $a = new Ave();
        $r = new Reptil();
        $c = new Canguru();
        $k = new Cachorro();
        $t = new Tartaruga();

        $m->emitirSom();
        //$c->locomover();
        $k->emitirSom();
        //$t->locomover();
        $c->emitirSom();



        // $m->setPeso(33.5);
        // echo $m->getPeso();
        // $m->locomover();
        // $a->locomover();
        // $r->locomover();




    ?>
</pre>
</body>
</html>
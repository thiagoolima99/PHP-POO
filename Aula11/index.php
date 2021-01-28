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
        require_once 'Aluno.php';
        require_once 'Bolsista.php';
        require_once 'Professor.php';
        require_once 'Tecnico.php';
        
        // $v1 = new Visitante();
        // $v1->setNome("Juvenal");
        // $v1->setIdade(33);
        // $v1->setSexo("M");
        // print_r($v1);

        // $a1 = new Aluno();
        // $a1->setNome("Pedro");
        // $a1->setMatricula(1111);
        // $a1->setIdade(16);
        // $a1->setSexo("M");
        // $a1->setCurso("Informática");
        // $a1->pagarMensalidade();
        // print_r($a1);


        // $b1 = new Bolsista();
        // $b1->setMatricula(1112);
        // $b1->setnome("Jubileu");
        // $b1->setBolsa(12.5);
        // $b1->setCurso("Administração");
        // $b1->setIdade(17);
        // $b1->pagarMensalidade();
        // print_r($b1);

        // $p1 = new Professor();
        // $p1->setNome("Joselito");
        // $p1->setIdade(61);
        // $p1->setSexo("M");
        // $p1->setSalario(7500);
        // $p1->receberAumento(2300);
        // $p1->setSalario(7500);
        // print_r($p1);

        $t1 = new Tecnico();
        $t1->setNome("Joana");
        $t1->setIdade(55);
        $t1->setSexo("F");
        $t1->setRegistroProfissional(6969);
        $t1->praticar();
        print_r($t1);


    ?>  
</pre>      
</body>
</html>
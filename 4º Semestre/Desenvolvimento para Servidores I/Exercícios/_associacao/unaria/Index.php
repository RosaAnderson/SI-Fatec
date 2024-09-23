<?php
    require_once "c.funcionario.php";

    $subordinado = new Funcionario ("Maria", "programdora back end", 2000);
    $subordinado2 = new Funcionario ("Carolina","progarmadora front end",2500);
    $chefe1 = new Funcionario ("Beatriz","gerente de projeto",5000);
    $chefe2 = new Funcionario ("Paulo","analista de sistemas",2500,$chefe1,array($subordinado,$subordinado2));

    echo "{$chefe2 ->getNome()}<br>";
    echo "{$chefe2 ->getCargo()}<br>";
    echo "{$chefe2 ->getSalario()}<br>";
    echo "{$chefe2 ->getChefe()->getNome()}<br>";
    echo "{$chefe2 ->getChefe()->getCargo()}<br>";
    echo "{$chefe2 ->getChefe()->getSalario()}<br>";

    foreach($chefe2 ->getSubordinado() as $sub1){
        echo "{$sub1 ->getNome()}<br>";
        echo "{$sub1 ->getCargo()}<br>";
        echo "{$sub1 ->getSalario()}<br>";
    }
    


?>
<?php
    $b1 = array ();

    $b1 [0][0] = "Leticia";
    $b1 [0][1] = "16";
    $b1 [0][2] = "Feminino";
    $b1 [0][3] = "Solteira";
    $b1 [0][4] = "Agronoma";

    $b1 [1][0] = "Ana";
    $b1 [1][1] = "18";
    $b1 [1][2] = "Feminino";
    $b1 [1][3] = "Solteira";
    $b1 [1][4] = "Professora";

    $b1 [2][0] = "José";
    $b1 [2][1] = "70";
    $b1 [2][2] = "Masculino";
    $b1 [2][3] = "Casado";
    $b1 [2][4] = "Aposentado";

    $b1 [3][0] = "Neto";
    $b1 [3][1] = "18";
    $b1 [3][2] = "Masculino";
    $b1 [3][3] = "Solteiro";
    $b1 [3][4] = "Jogador de Futebol";

    $b1 [4][0] = "Beatriz";
    $b1 [4][1] = "25";
    $b1 [4][2] = "Feminino";
    $b1 [4][3] = "Casada";
    $b1 [4][4] = "Enfermeira";

    $b1 [5][0] = "Davi";
    $b1 [5][1] = "79";
    $b1 [5][2] = "Masculino";
    $b1 [5][3] = "Casado";
    $b1 [5][4] = "Aposentado";

    $b1 [6][0] = "Lurdes";
    $b1 [6][1] = "80";
    $b1 [6][2] = "Feminino";
    $b1 [6][3] = "Viúva";
    $b1 [6][4] = "Aposentada";

    $b1 [7][0] = "Edson";
    $b1 [7][1] = "45";
    $b1 [7][2] = "Masculino";
    $b1 [7][3] = "Casado";
    $b1 [7][4] = "Comerciante";

    $b1 [8][0] = "Maria";
    $b1 [8][1] = "24";
    $b1 [8][2] = "Feminino";
    $b1 [8][3] = "Casada";
    $b1 [8][4] = "Arquiteta";

    $b1 [9][0] = "Raissa";
    $b1 [9][1] = "24";
    $b1 [9][2] = "Feminino";
    $b1 [9][3] = "Solteira";
    $b1 [9][4] = "Médica";

    foreach ($b1 as $indice => $valor){
        foreach ($valor as $indice_1 => $valor_1){
            echo "[$indice] [$indice_1] $valor_1 <br/><hr/>";
        }
    }



?>
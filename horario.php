<?php

include_once('conexao.php');

if(isset($_POST['dias'])) { 

    $dias = $_POST['dias'];
    $hora_inicial = $_POST['hora_inicial'];
    $hora_final = $_POST['hora_final'];

    if(empty($dias)) {
        echo("<p>Voce nao selecionou nenhum dia.</p>\n");
    } else {
       $N = count($dias);        
        for($i=0; $i < $N; $i++)
        {
            $var1 = $dias[$i];            
            $sql = "INSERT INTO horario (dia_semana, hora_inicial, hora_final) ".
                    "VALUES ('$var1', '$hora_inicial', '$hora_final')";                               
        }
        echo "Sucesso";
      }
}
else {
    echo "Erro " . $conn->error;
}
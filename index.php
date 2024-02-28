<?php
    include "Alunno.php";

    $arrayAlunni = [
        new Alunno("Tons", "Lenin", 48),
        new Alunno(" Francesco", "Capesio", 43),
        new Alunno(" Pier Noel", "Asuncion", 30),
        new Alunno(" La", "Sad", 20)
    ];

    foreach($arrayAlunni as $key => $value){
        echo $value->toString();
    }
    
    
?>
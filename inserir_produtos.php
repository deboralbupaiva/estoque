<?php
header('Content-Type: application/json');

//Verificar se os dados foram enviados via POST
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    //Conectar com o banco
    $conn = new mysqli ("localhost","root","","panificadora");

    if($conn->connect_error) {
        die(json_encode(["erro" => "Erro ao cconectar"]));
    }
    
    //Receber e limpar os dados

}
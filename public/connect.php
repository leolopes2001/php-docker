<?php

$host = 'localhost:/tmp/mysql.sock';
$bancodedados = "carros";
$usuario = "root";
$senha = "1234";

$mysqli = new mysqli($host, $usuario, $senha, $bancodedados);

if($mysqli->connect_errno){
    echo "Falha ao conectar: (". $mysqli->connect_errno . ")". $mysqli->connect_error;
}else{
    echo "leo";
}


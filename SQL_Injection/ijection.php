<?php

$id = (isset($_GET["id"]))? $_GET["id"]:2;


$conn = mysqli_connect("localhost", "root", "", "cadastro");

if(!isset($conn))
{
    echo "Ligacao não estabelecida";
}

$sql = "SELECT * FROM usuarios WHERE id=$id";

$exec = mysqli_query($conn, $sql);

while($resultado = mysqli_fetch_object($exec)){
    // echo $resultado->nome . "<br />";
    echo "<pre>";
    var_dump($resultado);
}
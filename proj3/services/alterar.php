<?php
    include("conexao.php");

    $texto = $_POST['texto'];
    $tipo = $_POST['tipo'];

    $sql = "UPDATE base SET texto = '$texto' WHERE tipo = '$tipo'";
    $query = $mysqli->query($sql);

    if($query) {
        echo "atualizou";
    } else {
        echo "Não atualizou";
    }
?>
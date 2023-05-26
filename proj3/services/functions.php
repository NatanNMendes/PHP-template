<?php

    // função que retorna um array com base na área selecionada.
    function returnText ($area) {
        include ("conexao.php");
        $sql = "SELECT * FROM base WHERE tipo = '$area'";
        $query = $mysqli->query($sql);
        $data = $query->fetch_array();

        return $data['texto'];
    }

?>
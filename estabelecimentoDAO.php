<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require 'connection.php';

class estabelecimentoDAO {

    public static function addEstabelecimento($estab) {
        $con = Connection::getConnection();
        $r = mysqli_query($con, "INSERT INTO sEstabelecimentos (nome, cidades_id) VALUES ('$estab->nome', '$estab->cidades_id');");
    }

    public static function deleteEstabelecimento($id) {
        $connection = Connection::getConnection();
        $sql = "DELETE FROM sEstabelecimentos WHERE id=$id";
        $result = mysqli_query($connection, $sql);

        if ($result === FALSE) {
            return false;
        } else {
            return true;
        }
    }

    public static function updateEstabelecimento($estab, $id) {
        $connection = Connection::getConnection();
        $sql = "UPDATE sEstabelecimentos SET nome='$estab->nome', cidades_id='$estab->cidades_id' WHERE id=$id";
        $result = mysqli_query($connection, $sql);
    }
    
    
    public static function getEstabelecimentoByNome($nome) {
    $connection = Connection::getConnection();
    $sql = "SELECT * FROM sEstabelecimentos WHERE nome like '%$nome%'";
    $result  = mysqli_query($connection, $sql);
    $estabelecimento = mysqli_fetch_object($result);    
    echo json_encode($estabelecimento);
    
  }
  
  
    // nome pelo id
    //pegar a cidade pelo id
    //atualizar os dados 
    //remover
    //adicionar
}

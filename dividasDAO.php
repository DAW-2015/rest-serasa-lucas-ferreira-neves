<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require 'connection.php';

class dividasDAO
{

    public static function addDivida($divida){
        $con = Connection::getConnection();
        $r = mysqli_query($con, "INSERT INTO sDividas (clientes_id, estabelecimentos_id, valor) VALUES ('$divida->clientes_id', '$divida->estabelecimentos_id', '$divida->valor');");
    }
    
    public static function deleteDivida($id) {
    $connection = Connection::getConnection();
    $sql = "DELETE FROM sDividas WHERE id=$id";
    $result  = mysqli_query($connection, $sql);

    if ($result === FALSE) {
      return false;
    } else {
      return true;
    }
  }
  
//  public static function updateDivida($d, $id) {
//        $connection = Connection::getConnection();
//        $sql = "UPDATE sDividas SET clinetes_id='$d->clientes_id', estabelecimentos_id='$d->estabelecimentos_id', valor = '$d->valor' WHERE id=$id";
//        $result = mysqli_query($connection, $sql);
//    }
    // nome pelo id
    //pegar a cidade pelo id
    //atualizar os dados 
    //remover
    //adicionar
    
}
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require 'connection.php';

class estadosDAO
{

    public static function addEstado($e){
        $con = Connection::getConnection();
        $r = mysqli_query($con, "INSERT INTO sEstados (nome) VALUES ('$e->nome');");
    }
    
    public static function deleteEstado($id) {
    $connection = Connection::getConnection();
    $sql = "DELETE FROM sEstados WHERE id=$id";
    $result  = mysqli_query($connection, $sql);

    if ($result === FALSE) {
      return false;
    } else {
      return true;
    }
  }
  
  public static function updateEstado($e, $id) {
        $connection = Connection::getConnection();
        $sql = "UPDATE sEstados SET nome='$e->nome' WHERE id=$id";
        $result = mysqli_query($connection, $sql);
    }
    // nome pelo id
    //pegar a cidade pelo id
    
}

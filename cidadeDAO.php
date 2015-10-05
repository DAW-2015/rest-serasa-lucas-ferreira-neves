<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require 'connection.php';

class cidadeDAO {

    public static function addCidade($estab) {
        $con = Connection::getConnection();
        $r = mysqli_query($con, "INSERT INTO sCidades (nome, estados_id) VALUES ('$estab->nome', '$estab->estados_id');");
    }

    public static function deleteCidade($id) {
        $connection = Connection::getConnection();
        $sql = "DELETE FROM sCidades WHERE id=$id";
        $result = mysqli_query($connection, $sql);

        if ($result === FALSE) {
            return false;
        } else {
            return true;
        }
    }

    public static function updateCidade($c, $id) {
        $connection = Connection::getConnection();
        $sql = "UPDATE sCidades SET nome='$c->nome', estados_id='$c->estados_id' WHERE id=$id";
        $result = mysqli_query($connection, $sql);
    }

    // nome pelo id
    //pegar a cidade pelo id
    //atualizar os dados 
    //remover
    //adicionar
}

<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function db_connect() {
    $userName = "salgraf";
    $password = "salgraf";
    $dbName = "quickbooks";
    $server = "Juanito";
    $db = new mysqli($server, $userName, $password, $dbName);
    if ($db->connect_errno) {
        die('Error de Conexion: ' . $db->connect_errno);
    }   
   return $db;
}

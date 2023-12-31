<?php
    include 'connection.php';

    $sql = 'CREATE DATABASE IF NOT EXISTS MATHBLOG';
    $sql_query = $conn->query($sql);

    if ($sql_query === TRUE) {
        echo "<script>console.log('Banco de dados criado com sucesso.')</script>";
    } else {
        echo "<script>console.log('Erro ao criar o banco de dados: ".')</script>';
    }

    $conn->select_db('MATHBLOG');

    $sql = 'CREATE TABLE IF NOT EXISTS USER_TABLE(
                ID_USER INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
                USERNAME VARCHAR(25),
                EMAIL VARCHAR(60),
                PASSWORD VARCHAR(255)
            )';
    $sql_query = $conn->query($sql);

    if ($sql_query === TRUE) {

    }

    $sql = 'CREATE TABLE IF NOT EXISTS POST(
                ID_POST INT NOT NULL AUTO_INCREMENT PRIMARY KEY
            )';
    $sql_query = $conn->query($sql);

    if ($sql_query === TRUE) {
        
    }

    $sql = 'CREATE TABLE IF NOT EXISTS CATEGORY(
                ID_CATEGORY INT NOT NULL AUTO_INCREMENT PRIMARY KEY
            )';
    $sql_query = $conn->query($sql);

    if ($sql_query === TRUE) {
        
    }
?>
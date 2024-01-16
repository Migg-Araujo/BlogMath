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
    
    $sql = 'CREATE TABLE IF NOT EXISTS CATEGORY(
                ID_CATEGORY INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
                TITLE VARCHAR(60)
            )';
    $sql_query = $conn->query($sql);

    if ($sql_query === TRUE) {
        
    }

    $sql = 'CREATE TABLE IF NOT EXISTS POST(
                ID_POST INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
                TITLE_REAL VARCHAR(70),
                TITLE_SEARCH VARCHAR(70),
                LIKES INT,
                VIEWS INT,
                TEXT_DESC VARCHAR(2000),
                TEXT_POST VARCHAR(255),
                IMG VARCHAR(255)
            )';
    $sql_query = $conn->query($sql);

    if ($sql_query === TRUE) {
        
    }

    $sql = 'CREATE TABLE IF NOT EXISTS POSTCATEGORY(
                ID_POST INT NOT NULL,
                ID_CATEGORY INT NOT NULL,
                FOREIGN KEY(ID_POST) REFERENCES POST(ID_POST),
                FOREIGN KEY(ID_CATEGORY) REFERENCES CATEGORY(ID_CATEGORY)
            )';
    $sql_query = $conn->query($sql);

    if ($sql_query === TRUE) {
        
    }
?>
<?php

    session_start();

    include_once("connection.php");
    include_once("url.php");

    $materias = [];

    $query = "SELECT * FROM materias";

    $stmt = $conn->prepare($query);

    $stmt->execute();

    $materias = $stmt->fetchAll();
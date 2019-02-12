<?php
//application functions

function get_project_list() {
    include('connection.php');
    try {
        return $db->query('SELECT project_id, title, category FROM projects');
    } catch(Exception $e) {
        echo "Error: " .$e->getMessage() . "<br/>";
        return array();
    }
}

function add_project($title, $category) {
    include "connection.php";

    $sql = "INSERT INTO projects(title, category) VALUES(?, ?)";
    try {
        $results = $db->prepare($sql);
        $results->bindValue(1, $title, PDO::PARAM_STR);
        $results->bindValue(2, $category, PDO::PARAM_STR);
        $results->execute();
    } catch(Exception $e) {
        echo "Error: ". $e.getMessage() . "<br/>";
        return false;
    }
    return true;
}
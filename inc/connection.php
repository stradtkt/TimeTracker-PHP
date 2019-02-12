<?php
/**
 * Created by PhpStorm.
 * User: Kevin
 * Date: 2/12/2019
 * Time: 12:12 PM
 */
try {
    $db = new PDO("sqlite:" . __DIR__ . "/database.db");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(Exception $e) {
    echo $e->getMessage();
    exit;
}
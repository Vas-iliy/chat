<?php
include_once('core/db.php');

function select () {
    $sql = "SELECT * FROM message ORDER BY time DESC ";
    $data = dbQuery($sql, null);
    $data = $data->fetchAll();

    return $data;
}

function insert ($params) {
    $sql = "INSERT INTO message (login, message) VALUES (:login, :message)";
    $data = dbQuery($sql, $params);

    return true;
}
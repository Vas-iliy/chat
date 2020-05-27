<?php
include_once ('modul/massages.php');

$params = ['login' => '', 'message' => ''];

if ($_POST['login']) {
    $params['login'] = $_POST['login'];
    $params['message'] = $_POST['message'];

    $message = insert($params);
    header('Location:index.php');
}


include ('vew/v_form.php');


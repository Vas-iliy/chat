<?php
include_once('model/massages.php');
include_once('core/arr.php');



if ($_POST['login']) {
    $params = extractFields($_POST, ['login', 'message']);

    $message = insert($params);
    header('Location:index.php');
} else {
    $params = ['login' => '', 'message' => ''];
}

include('views/v_form.php');


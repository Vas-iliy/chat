<?php

function extractFields ($target, $fields) {
    $arr = [];
    foreach ($fields as $field ) {
        $arr[$field] = trim(htmlspecialchars($target[$field]));
    }

    return $arr;
}
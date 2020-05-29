<?php

function extractFields ($target, $fields) {
    $arr = [];
    foreach ($fields as $field ) {
        $arr[$fields] = trim(htmlspecialchars($target[$fields]));
    }

    return $arr;
}
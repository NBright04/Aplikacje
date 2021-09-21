<?php

if(isset($_POST['a']) && isset($_POST['b'])) {
    $a = $_POST['a'];
    $b = $_POST['b'];

    echo $a * $b;
} else {
    include_once 'formularz.html';
}
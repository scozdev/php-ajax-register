<?php

try {
    $db = new PDO('mysql:host=localhost;dbname=ajax', 'root', '');
} catch (Exception $e) {
    echo $e->getMessage();
}

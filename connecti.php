<?php
    $db = new PDO("mysql:host=localhost;dbname=hackadia", "root", "root");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
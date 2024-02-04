<?php
    $myspli = new mysqli('localhost', 'root', '','iii');
    // $myspli->query('CREATE DATABASE iii');
    $myspli->set_charset('utf8');

    // $sql = 'INSERT INTO gift(`name`, `addr`) VALUES ("brad","abcdefg")';
    $sql = 'INSERT INTO gift(name, `addr`) VALUES ("brad","abcdefg")';
    $myspli->query($sql);
?>
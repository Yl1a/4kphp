<?php
const HOST = 'localhost';
const DBNAME = 'practice';
const USERNAME = 'root';
const PASSWORD = '';
const CHARSET = 'utf8';

const DSN = 'mysql:host=' . HOST . ';dbname=' . DBNAME . ';charset=' . CHARSET;
$connection = new PDO(DSN, USERNAME, PASSWORD);
?>
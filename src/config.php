<?php
// Bước 1: Kết nối tới CSDL:
define('WWW', 'http://localhost/CSE485_K61_KTGK_1951060665/database/exams.sql');
define('HOST', 'localhost');
define('USER', 'root');
const PASS = '';
const DB = 'tb_exams';
$conn = mysqli_connect(HOST, USER, PASS, DB);
if (!$conn) {
    die('Không thể kết nối');
}
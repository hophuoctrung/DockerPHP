<?php
// connect database
$pdo = new PDO(
  'mysql:dbname=docker_php;host=mysql',
  'trungHo',
  'trungHo',
  [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
);
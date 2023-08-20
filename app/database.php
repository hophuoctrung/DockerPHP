<?php
// connect database
$pdo = new PDO(
  'mysql:dbname=docker_php;host=mysql',
  'hophuoctrung',
  'hophuoctrung',
  [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
);
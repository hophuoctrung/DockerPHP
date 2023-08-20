<?php
  require_once '../database.php';

  $queryTables = $pdo->query('SHOW TABLES');
  $tables = $queryTables->fetchAll(PDO::FETCH_COLUMN);

  $tableCount = count($tables);

  echo '<h2 style="text-align:center">Darling, we will end when PHP dies.</h2>';
  echo "<div style='text-align:center'>Database Information <br>";
  echo "Database: " . $pdo->query('SELECT DATABASE()')->fetchColumn();
  echo "Number of Tables: " . $tableCount . "</div>";
  phpinfo();
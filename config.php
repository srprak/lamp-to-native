<?php

/**
  * Configuration for database connection
  *
  */

$host       = "localhost";
$username   = "root";
$password   = "1qnBB7L5t8qv";
$dbname     = "test"; // will use later
$dsn        = "mysql:host=$host;dbname=$dbname"; // will use later
$options    = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
              );

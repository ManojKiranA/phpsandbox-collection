<?php require_once('vendor/autoload.php');$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);$dotenv->load();

use Illuminte\Support\Collection;
require_once 'vendor/autoload.php';
cdump(Collection::times(10));
echo 'My First Notebook!';

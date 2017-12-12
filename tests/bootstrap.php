<?php
use Dotenv\Dotenv;

require __DIR__ . "/../vendor/autoload.php";

$dot = new Dotenv(__DIR__ . "/../");

$dot->load();

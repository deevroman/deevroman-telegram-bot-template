<?php
require "../vendor/autoload.php";
$dotenv = Dotenv\Dotenv::createImmutable("../");
$dotenv->load();

use Telegram\Bot\Api;

$telegram = new Api(getenv('BOT_TOKEN'));


<?php

/**
 * DEVELOPER
 */
define("DEV", [
    "name" => "Goognet Solução Digital",
    "url" => "https://goognet.com.br"
]);

/**
 * SITE CONFIG
 */
define("SITE", [
    "name" => "Name",
    "desc" => "Description",
    "domain" => "domain",
    "locale" => "pt_BR",
    "lang" => "pt-BR",
    "root" => "https://localhost/domain.com.br"
]);

/**
 * SITE MINIFY
 */
if ($_SERVER["SERVER_NAME"] == "localhost") {
    require __DIR__ . '/Minifier.php';
}

/**
 * DATABASE CONNECT
 */
define("DATA_LAYER_CONFIG", [
    "driver" => "mysql",
    "host" => "localhost",
    "port" => "3306",
    "dbname" => "datalayer_example",
    "username" => "root",
    "passwd" => "",
    "options" => [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_CASE => PDO::CASE_NATURAL
    ]
]);

/**
 * SOCIAL CONFIG
 */
define("SOCIAL", [
    "facebook_page" => "goognetsolucao",
    "facebook_author" => "goognetsolucao",
    "facebook_appId" => "",
    "twitter_creator" => "@GoognetSolucao",
    "twitter_site" => "@GoognetSolucao"
]);

/**
 * MAIL CONNECT
 */
define("MAIL", [
    "host" => "mail.domain.com.br",
    "port" => "587",
    "user" => "sender@domain.com.br",
    "passwd" => "password",
    "from_name" => "Website Domain",
    "from_email" => "domain@domain.com.br"
]);

/**
 * REGION
 */
define("REGION", [
    "region" => "BR-SP",
    "placename" => "S&atilde;o Paulo",
    "position" => "-23.550651;-46.633382",
    "icbm" => "-23.550651, -46.633382"
]);

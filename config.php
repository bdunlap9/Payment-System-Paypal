<?php

$paypalEmail = "sb-rxeck289644@business.example.com"; //INFO This MUST be a business email
$amount = "20"; //INFO This cannot be a float
$sandbox = true;

$debug = 1; //INFO Enables Logging

$dbInfo = [
    "host" => "localhost",
    "user" => "root",
    "pass" => "",
    "name" => "development"
];

$url = "http://localhost/payment"; //INFO Url where site will be hosted

$logFile = "ipn.log";
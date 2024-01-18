<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: index.html");
    exit();
}

echo "Welcome in page 3";
echo "Session ID: " . session_id() . "<br>";

if (!isset($_SESSION["pages_visited"]["welcome"])) {
    $_SESSION["pages_visited"]["welcome"] = 0;
}

$_SESSION["pages_visited"]["welcome"]++;

echo "You have visited this page " . $_SESSION["pages_visited"]["welcome"] . " times.<br>";
<?php

namespace config;

// config BD
const DSN = "mysql:host=localhost;dbname=home";
const USER = "root";
const PASSWORD = "";
const DB_CHAR = "utf8mb4";


// hostname
DEFINE("HOSTNAME", "/EzPHP-mvc");
DEFINE("URL", $_SERVER["HTTP_HOST"].HOSTNAME); // -> 127.0.0.1/ezPHP-mvc
DEFINE("ROOT_APP", ROOT."/app");

DEFINE('PUBLIC_', ROOT."/public");
DEFINE("ASSETS", HOSTNAME."/public/assets");

DEFINE("MODELS", ROOT_APP."/models");
DEFINE("CONTROLLERS", ROOT_APP."/controllers");
DEFINE("VIEWS", ROOT_APP."/views");

const DEFAULT_CONTROLLER = "Home";
const DEFAULT_ACTION = "index";

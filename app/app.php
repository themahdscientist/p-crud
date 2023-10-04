<?php

define('APP_PATH', $_SERVER['DOCUMENT_ROOT'] . '\\');

require 'config.php';
require 'functions.php';
require 'data/data.class.php';
require 'data/filedataprovider.class.php';
require 'data/mysqldataprovider.class.php';

Data::initialize(new MySQLDataProvider(CONFIG['db']));
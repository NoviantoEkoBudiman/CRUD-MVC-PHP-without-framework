<?php

require_once __DIR__ . "/../vendor/autoload.php";

use App\Router;
use App\Controllers\KaryawanController;

Router::add("GET", "/" , KaryawanController::class, "index");
Router::add("GET", "/add", KaryawanController::class, "add");
Router::add("POST", "/save", KaryawanController::class, "save");
Router::add("POST", "/detail", KaryawanController::class, "detail");
Router::add("POST", "/edit", KaryawanController::class, "edit");
Router::add("POST", "/update", KaryawanController::class, "update");
Router::add("POST", "/delete", KaryawanController::class, "delete");

Router::run();
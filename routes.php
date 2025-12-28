<?php

$controller = str_replace('/', '', parse_url($_SERVER['REQUEST_URI'])['path']);

if (!$controller) $controller = 'index';

if (!file_exists(base_path("app/controllers/{$controller}.controller.php"))) {
  abort(404);
}

require base_path("app/controllers/{$controller}.controller.php");
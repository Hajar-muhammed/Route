<?php
require_once 'Response.php';

$response = new Response();

// $response ->select("posts", "id=22");
$response->select("posts", "id BETWEEN 5 AND 20", "`id`,`title`, `body`");
<?php


use GuzzleHttp\Client;

$client = new Client();

$response = $client->request('https://www.alura.com.br/cursos-online-programacao/php');

$html = $response->getBody();

var_dump($html);
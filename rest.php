<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require 'vendor/autoload.php';

$app = new \Slim\App;
$app->get('/hello/{name}', function (Request $request, Response $response) {
    $name = $request->getAttribute('name');
    $response->getBody()->write("Hello, $name");

    return $response;
});

$app->get('/ads/s', function (Request $request, Response $response) {
    $mysqli = new mysqli("lmower.ck1dzexlod8f.us-west-2.rds.amazonaws.com:3306", "lmower", "lmowerpassword", "lmower");
    $query = "select * from ads";
    $result = $mysqli->query($query);

    while($row = $result->fetch_assoc()){
        $data[] = $row;
    }
    return json_encode($data);



});


$app->run();


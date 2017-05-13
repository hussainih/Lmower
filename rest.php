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
    require_once('dbconnect.php');
    $query = "select * from ads";
    $result = $mysqli->query($query);

    while($row = $result->fetch_assoc()){
        $data[] = $row;
    }
    return json_encode($data);



});


$app->get('/ads/a', function (Request $request, Response $response) {

$link = mysqli_connect('lmower.ck1dzexlod8f.us-west-2.rds.amazonaws.com', 'lmower', 'lmowerpassword', 'lmower', 3306);

/* check connection */

if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

if (!mysqli_query($link, "SET a=1")) {
    printf("Errormessage: %s\n", mysqli_error($link));
}

/* close connection */
mysqli_close($link);

});


$app->run();


<?php

use Slim\Http\Request;
use Slim\Http\Response;

require __DIR__ . '/service/TwitterService.php';

// Get users by screen name ordered by popularity index (followers)
$app->get('/profiles/{query}', function (Request $request, Response $response, array $args) {
    $query = $args['query'];
    $response->getBody()->write(json_encode(TwitterService::getInstance()->getProfiles($query)));
    return $response;
});
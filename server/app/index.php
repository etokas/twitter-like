<?php

require __DIR__ . '/../vendor/autoload.php';

require_once 'Twitter.php';

$app = new \Silex\Application(['debug' => true]);

/**
 * CONFIGURATION KEYS
 */

/** Nom de votre compte twitter */
$screen_name = 'gobiglexis';

/** Vos clefs d'autentification */
$keys = array(
    'oauth_access_token' => "124470704-OC6JNAkXGpE99FbqubOTKi1ikoR2JvJTVy9VaV5R",
    'oauth_access_token_secret' => "UFEhi57xlWale9hsPIOZxW4VvoiMoiFVP8XgHfDqowk0q",
    'consumer_key' => "1Y8YnVQbEUhgLGOCee8coC20v",
    'consumer_secret' => "M3RJVGhRNKx9Euc605PsQh3VaPgpz0uokXkQO4pMBuDEARwWOk"
);



$twitter = new Twitter($screen_name, $keys);

$app->get('/', function () use ($app, $twitter) {

    return $app->json(json_decode($twitter->timeLine()));

});

$app->get('/api/me', function () use ($app, $twitter) {

    return $app->json(json_decode($twitter->me()));

});

$app->get('/api/user/{user_id}', function ($user_id) use ($app, $twitter) {

    return $app->json(json_decode($twitter->user($user_id)));

});


$app->get('/api/my-time-line', function () use ($app, $twitter) {

    return $app->json(json_decode($twitter->mytimeLine()));
});


$app->get('/api/tweets/{user_id}', function ($user_id) use ($app, $twitter) {

    return $app->json(json_decode($twitter->twwetsOf($user_id)));
});


$app->get('/api/search/{query}', function ($query) use ($app, $twitter) {

    return $app->json(json_decode($twitter->search($query)));
});

$app->get('/api/tweet/{tweet_id}', function ($tweet_id) use ($app, $twitter) {

    return $app->json(json_decode($twitter->tweet($tweet_id)));
});


$app->run();
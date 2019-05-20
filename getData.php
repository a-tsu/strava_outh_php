<?php
include 'vendor/autoload.php';

use Strava\API\Client;
use Strava\API\Exception;
use Strava\API\Service\REST;

$token = getenv('TOKEN');  // Define your user token here.

try {
    $adapter = new \GuzzleHttp\Client(['base_uri' => 'https://www.strava.com/api/v3/v3']);
    $service = new REST($token, $adapter);
    $client = new Client($service);

    $athlete = $client->getAthlete();
    print_r($athlete);

    $activities = $client->getAthleteActivities();
    print_r($activities);

    // $club = $client->getClub(9729);
    // print_r($club);
} catch(Exception $e) {
    print $e->getMessage();
}

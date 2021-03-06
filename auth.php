<?php

include 'vendor/autoload.php';

use Strava\API\OAuth;
use Strava\API\Exception;

try {
    $options = [
        'clientId'     => 35202, // change this to your client id.
        'clientSecret' => getenv('CLIENT_SECRET'),
        'redirectUri'  => 'http://127.0.0.1/auth.php'
    ];
    $oauth = new OAuth($options);

    if (!isset($_GET['code'])) {
        print '<a href="'.$oauth->getAuthorizationUrl([
            // Uncomment required scopes.
            'scope' => [
                'public',
                // 'write',
                'view_private',
            ]
        ]).'">Connect</a>';
    } else {
        $token = $oauth->getAccessToken('authorization_code', [
            'code' => $_GET['code']
        ]);
        print $token->getToken();
    }
} catch(Exception $e) {
     print $e->getMessage();
}
?>

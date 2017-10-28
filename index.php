<?php

require_once __DIR__.'/vendor/autoload.php';

const CLIENT_ID = '933883680269-1c16np4neur9st4u0tcvnthddk2drvou.apps.googleusercontent.com';
const CLIENT_SECRET = 'cAcxFXQRIVWML0TtvJuFzr_D';
const REDIRECT_URI = 'http://localhost/task/index.php';


session_start();


$client = new Google_Client();

$client->setClientId(CLIENT_ID);

$client->setClientSecret(CLIENT_SECRET);

$client->setRedirectUri(REDIRECT_URI);

$client->setScopes('email');



$plus = new Google_Service_Plus($client);


if (isset($_REQUEST['logout'])) {

   session_unset();

}



if (isset($_GET['code'])) {

  $client->authenticate($_GET['code']);

  $_SESSION['access_token'] = $client->getAccessToken();

  $redirect = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];

  header('Location: ' . filter_var($redirect, FILTER_SANITIZE_URL));

}



if (isset($_SESSION['access_token']) && $_SESSION['access_token']) {

  $client->setAccessToken($_SESSION['access_token']);

  $me = $plus->people->get('me');



  // Get User data

  $id = $me['id'];

  $name =  $me['displayName'];

  $family_name =  $me['name']['familyName'];

  $given_name =  $me['name']['givenName'];

  $nickname =  $me['nickname'];

  $gender = $me['gender'];

  $birthday =  $me['birthday'];

  $occupation = $me['occupation'];

  $followers = $me['circledByCount'];

  $email =  $me['emails'][0]['value'];

  $profile_image_url = $me['image']['url'];

  $cover_image_url = $me['cover']['coverPhoto']['url'];

  $profile_url = $me['url'];

  $tagline = $me['tagline'];



} else {

  // get the login url   

  $authUrl = $client->createAuthUrl();

}

?>


<div>

    <?php

    if (isset($authUrl)) {

        echo "<br><br><br><center><a class='login' href='" . $authUrl . "'><img src='google.png' height='25%' width='15%'/></a></center><br><br><br>";
        echo "<center><a class='login' href='#'><img src='facebook.png' height='25%' width='15%'/></a></center>";

    } else {

        print "ID: {$id} <br>";

        print "Name: {$name} <br>";

        print "Nick-Name: {$nickname} <br>";
        
        print "First Name: {$given_name} <br>";
        
        print "Family Name: {$family_name} <br>";

        print "Gender: {$gender} <br>";

        print "birthday: {$birthday} <br>";

        print "Email: {$email} <br>";

        print "Occupation: {$occupation} <br>";

        print "Followers: {$followers} <br>";

        print "Tagline: {$tagline} <br>";

        print "Image : {$profile_image_url} <br>";

        print "Cover  :{$cover_image_url} <br>";

        print "Url: {$profile_url} <br><br>";

        echo "<a class='logout' href='?logout'><button>Logout</button></a>";

//        echo(json_encode($me));
    }

    ?>

</div>
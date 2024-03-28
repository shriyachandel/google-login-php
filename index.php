<?php 
include 'config.php';

$login_button = '';
// authenticate code from Google OAuth Flow
if (isset($_GET['code'])) {
  $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
 
    $client->setAccessToken($token['access_token']);
    
  // get profile info
  $google_oauth = new Google_Service_Oauth2($client);
  $google_account_info = $google_oauth->userinfo->get();
  $email =  $google_account_info->email;
  $name =  $google_account_info->name;
  
  // now you can use this profile info to create account in your website and make user logged in.
} else {
  echo "<a href='".$client->createAuthUrl()."'>Google Login</a>"; 
}

// $app_id = 'YOUR_APP_ID';
// $app_secret = 'YOUR_APP_SECRET';

//    session_start();

//    $fb = new Facebook\Facebook([
//       'app_id' => $app_id,
//       'app_secret' => $app_secret,
//       'default_graph_version' => 'v13.0',
//    ]);

//    $helper = $fb->getRedirectLoginHelper();
//    $accessToken = $helper->getAccessToken();

//    if ($accessToken) {
//       // User is logged in, handle their data
//       $user = $fb->get('/me', ['fields' => 'id,name,email']);
//       $_SESSION['user_data'] = $user;
//       header('Location: profile.php');
//    } else {
//       // User is not logged in, redirect to login page
//       $loginUrl = $helper->getLoginUrl(['scope' => 'public_profile,email']);
//       header('Location: ' . $loginUrl);
//    }
?>
<!-- <script src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v13.0&appId=YOUR_APP_ID&autoLogApp=true" async defer></script> 
<button id="facebook-login-button">Login with Facebook</button> -->
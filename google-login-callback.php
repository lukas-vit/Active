<?php require __DIR__ . '/config.php'; ?>
<?php require_once __DIR__ . '/vendor/autoload.php'; ?>
<?php 
include('config.php');

session_start();



if(isset($_GET['code'])){
    $token = $google_client->fetchAccessTokenWithAuthCode($_GET['code']);

    if(!isset($token['error'])){
        $google_client->setAccessToken($token['access_token']);
        $_SESSION['access_token'] = $token['access_token'];

        $google_service = new Google_Service_Oauth2($google_client);
        $data = $google_service->userinfo->get();

        if(!empty($data['given_name'])){
            $_SESSION['user_first_name']= $data['given_name'];
        }
        if(!empty($data['family_name'])){
            $_SESSION['user_last_name']= $data['family_name'];  
        }
        if(!empty($data['email'])){
            $_SESSION['user_email']= $data['email'];  
        }
        if(!empty($data['picture'])){
            $_SESSION['user_image']= $data['picture'];  
        }
        header('Location: profile.php');
    }

}
?>
<?php
if(isset($_POST['submit'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $creds = array(
		'user_login'    => $email,
		'user_password' => $password,
		'remember'      => true
	);

	$user = wp_signon( $creds, false );

	if ( is_wp_error( $user ) ) {
		echo $user->get_error_message();
	}
    
}
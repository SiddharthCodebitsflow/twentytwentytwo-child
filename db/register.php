<?php
if (isset($_POST['submit'])) {
    $firstName = $_POST['fst_name'];
    $lastName =  $_POST['lst_name'];
    $mobileNumber =  $_POST['mobile_number'];
    $email =  $_POST['email'];
    $password =  $_POST['password'];
    $user_id = wp_create_user($firstName, $password, $email);

}

<?php
    
if (isset($_POST['send'])){
    
    $OBJECT_CHAT = new CHAT();
    $email = $_POST['email'];
    $password = $_POST['password'];
    $new_password = $OBJECT_CHAT->hach_password($password);
    $sql = "SELECT * FROM signup WHERE email='$email'";
    $user = $OBJECT_CHAT->select($sql,$email,$new_password);
    $_SESSION['user_id'] = $user['user_id'];
    $_SESSION['name'] = $user['name'];
    $_SESSION['email'] = $user['email'];
    // echo "<pre>";
    // print_r($user);
    // echo "<pre>";
    // echo "<script> alert('le code nadi'); </script>";
    if ($user) {
        header("location: index.php?page=dashboard");
    }
    
    // echo "jab data";
    exit();  



}

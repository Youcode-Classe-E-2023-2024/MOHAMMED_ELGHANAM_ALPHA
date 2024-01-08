<?php
$objet_edit = new EDITE();
$user_id = $_GET['user_id'];
$result = $objet_edit->select($user_id);
$row = mysqli_fetch_assoc($result);
$name_update = $_POST['name'];
$email_update = $_POST['email'];
$password_update = $_POST['password'];
$result1 = $objet_edit->edite($name_update,$email_update,$password_update);
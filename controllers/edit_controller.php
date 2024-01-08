<?php
$objet_edit = new EDITE();
$user_id = $_GET['user_id'];
$result = $objet_edit->select($user_id);
$row = mysqli_fetch_assoc($result);

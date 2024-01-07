<?php
$objet_dashboard = new  DASHBOARD();
$result = $objet_dashboard->select();
$result1 = $objet_dashboard->select();
$user_id = $_GET['user_id'];
$result2 = $objet_dashboard->delet($user_id);


?>
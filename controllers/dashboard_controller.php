<?php
$objet_dashboard = new  DASHBOARD();
$result = $objet_dashboard->select();
$result1 = $objet_dashboard->select();
echo "<pre>";
print_r($_GET);
echo "</pre>";


// $result2 = $objet_dashboard->delet($user_id);


?>
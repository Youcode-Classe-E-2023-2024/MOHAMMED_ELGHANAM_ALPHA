<?php

echo '<h3>- Home Controller2 -</h3>';

if (isset($_POST['login'])) {
    header('location: index.php?page=register');
}

if (isset($_POST['logout'])) {
    echo 'Is logout';
}

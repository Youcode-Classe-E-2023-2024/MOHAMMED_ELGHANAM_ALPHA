<?php
if (isset($_POST['message'])) 
{
    $object_message = new message();
    $message = $_POST['message'];
    $sql = "INSERT INTO message (content_msg) VALUES ('$message')";
    $result = $object_message->insert_message($sql);





}
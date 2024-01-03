<?php
class message{

    public function insert_message($sql){
        global $db;
        mysqli_query($db,$sql);
        
    }

}
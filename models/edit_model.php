<?php
class EDITE{
    public $db;

    public function select($user_id){
        global $db;
        
        $sql = " SELECT * FROM signup WHERE user_id = $user_id";
        $result = mysqli_query($db,$sql);

        if (!$result) {
            die("error in selecting");
        }else {
            return $result;
        }

    }

    public function edite($name_update,$email_update,$password_update){
        global $db;
        $sql = "UPDATE signup SET name = $name_update, email = $email_update, password = $password_update WHERE condition;";
        $result = mysqli_query($db,$sql);
        if (!$result) {
            die("error in updating");
        }else {
            return $result;
        }

    }

}
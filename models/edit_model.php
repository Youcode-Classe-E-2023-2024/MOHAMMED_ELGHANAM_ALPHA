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

    public function edit(){

    }

}
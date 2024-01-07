<?php
class DASHBOARD{
    public $db;

    public function select(){
        global $db;
        $user_id = $_SESSION['user_id'];
        $sql = " SELECT * FROM signup ";
        $result = mysqli_query($db,$sql);

        
        if (!$result) {
            die("error in selectining");
        }else {
            return $result;
        }

    }


}



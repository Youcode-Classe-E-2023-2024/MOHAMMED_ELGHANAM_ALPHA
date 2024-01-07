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

    public function edit(){

    }

    public function delete($user_id){
        if (isset($user_id)) {
            
            $sql =  "DELETE FROM signup WHERE user_id = $user_id ";
        }
    }

    


}



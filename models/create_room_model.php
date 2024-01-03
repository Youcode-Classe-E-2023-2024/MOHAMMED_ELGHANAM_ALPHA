<?php
class create_room{

    public function insert($sql)
    {   
        global $db;
        //echo"<br> hello ";
        $result = mysqli_query($db,$sql);
        // echo"<br> hello ";
        if (!$result) {
            echo mysqli_error($db);
        }else { 
            echo"NADI";        
            header("Location:index.php?page=chat");
        }
    }

        public function select_room(){
        global $db;
        $sql = "SELECT * FROM room";
        $result = mysqli_query($db,$sql);
        if ($result) {
            $rows = array();
            while ($row = mysqli_fetch_assoc($result)) {
                $rows[] = $row;
            }
            return $rows;
        }


    }


}
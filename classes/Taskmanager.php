<?php

    include("config/config.php");

    class TaskManager extends Connection{
        // ADD TASK

        public function add_task($allTask)
        {
            
            $taskname = $allTask['taskName'];
            $taskdate = $allTask['taskdate'];
            
            $sql = "INSERT INTO `tasks`( `task_name`, `task_date`) VALUES ('$taskname','$taskdate')";
            
            $result = $this->con->query($sql);
            if($result){
                header("Location:index.php");
            }
            
        }
        
       
    }

?>
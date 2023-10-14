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
       // All Task
       public function allTask(){
        return $result = $this->con->query("SELECT * FROM `tasks`");
      }

      // edit task
      public function edit_task($tid){
        return $result =  $this->con->query("SELECT * FROM `tasks` WHERE id ='$tid'");

      }
      // update task
      public function update_task($allTask,$tid){
        $taskname = $allTask['taskName'];
        $taskdate = $allTask['taskdate'];

        $sql = "UPDATE `tasks` SET `task_name`='$taskname',`task_date`='$taskdate' WHERE id='$tid' ";

        $result = $this->con->query($sql);




    }



?>
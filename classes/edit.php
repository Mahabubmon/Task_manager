<?php 
    include("classes/TaskManager.php");
    $u1 = new TaskManager();

    $id = $_GET['id'];
    if(isset($_GET['id'])){
        $data = $u1->edit_task($id);
        $row = mysqli_fetch_assoc($data);
        

    }

    if(isset($_POST['update__task'])){
        $u1->update_task($_POST,$id);
  
  
      }


?>
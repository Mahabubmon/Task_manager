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


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Task Manager</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />
  </head>
  <body>
  <div class="taskManager">
      <div class="container">
        <div class="row vh-100 align-items-center">
          <div class="col-lg-8 offset-lg-2 shadow p-5">             
            <div class="addTask">
              <form action="" method="POST">
                <h2 class="display-5 text-info">Update Task</h2>
                <div class="form-group mb-3">
                  <label for="addtask">Add Task</label>
                  <input
                    type="text"
                    name="taskName"
                    id="taskName"
                    placeholder="Enter Task Details"
                    class="form-control"
                    value="<?php echo $row['task_name']; ?>"
                  />
                </div>
                <div class="form-group mb-3">
                  <label for="taskdate">Task Date</label>
                  <input
                    type="date"
                    name="taskdate"
                    id="taskdate"
                    class="form-control"
                    value="<?php echo $row['task_date']; ?>"
                  />
                </div>
                <div class="form-group mb-3">
                  <input
                    type="submit"
                    name="update__task"
                    class="btn btn-info"
                    value="Update Task"
                  />
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
      crossorigin="anonymous"
    ></script>
  </body>
</html>

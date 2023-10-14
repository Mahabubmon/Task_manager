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
        <div class="row">
          <div class="col-lg-8 offset-lg-2 shadow p-5">
            <div class="title">
              <h2 class="display-4 text-primary">Task Manager</h2>
              <p>
                this is simple Project Using Html,css,Bootstrap,PHP and MYSQL
              </p>
            </div>

            <div class="alltask py-4">
              <h2 class="display-5 text-primary">All Task</h2>
              <table class="table table-striped">
                <tr>
                  <th>ID</th>
                  <th>Task Details</th>
                  <th>Date</th>
                  <th>Action</th>
                </tr>
                <?php 
                 $data = $u1->allTask();
                 $i=0;
                  while($row = mysqli_fetch_assoc($data)){?>
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td>
                    <a href="edit.php?id=<?php echo $row['id'];?>" class="btn btn-warning btn-sm">Edit</a>
                  </td>
                </tr>
                <?php 
                  }
                
              </table>
            </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
      crossorigin="anonymous"
    ></script>
  </body>
</html>

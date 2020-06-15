<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>crud OOP</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-12 mt-5">
          <h1 class="text-center">PHP OOP CRUD</h1>
          <hr style="height: 1px; color: black; background-color: black;">
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <table class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Address</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php

                include 'model.php';
                $model = new Model ();
                $rows = $model->fetch();
                $i = 1;
                if(!empty($rows)){
                  foreach($rows as $rows){

              ?>
              <tr>
                <td><?php echo $i++; ?></td>
                <td><?php echo $rows['name']; ?></td>
                <td><?php echo $rows['email']; ?></td>
                <td><?php echo $rows['mobile']; ?></td>
                <td><?php echo $rows['address']; ?></td>
                <td>
                  <a href="read.php?id=<?php echo $rows['id'] ?>" class="badge badge-info">Read</a>
                  <a href="delete.php?id=<?php echo $rows['id'] ?>" class="badge badge-danger">Delete</a>
                  <a href="edit.php?id=<?php echo $rows['id'] ?>" class="badge badge-success">Edit</a>
                </td>
              </tr>

              <?php
                }
              }

              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>
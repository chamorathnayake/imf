<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> download module</title>
    <link rel="stylesheet" href="style.css">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Live Data Search using Multiple Tag in PHP with Ajax</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput-typeahead.css" />
  <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.min.js" crossorigin="anonymous"></script>
   <style>
  </style>
 </head>
 <body>

  <?php include('nav_bar.inc.php') ?>
  <section class="home-section">
    <div class="container">
        <div class="jumbotron">
            <div class="card">
                <h2>  Download Module </h2>
              </div>

              <div class="card">
                  <div class="card-body">

                      <table id="datatableid" class="table table-bordered table-dark">
                          <thead>
                              <tr>
                                <th scope="col">ID</th>
                                <th scope="col">DATE</th>
                                <th scope="col">Subject </th>
                                <th scope="col">Grade </th>
                                <th scope="col"> Term </th>
                                <th scope="col"> PDF </th>
                                <th scope="col"> DOWNLOAD </th>

                              </tr>
                          </thead>
                         <tbody>
                          <?php
                          include "config2.php";
                          $stmt = $db->prepare("select * from module");
                          $stmt->execute();
                          while ($row =$stmt->fetch()) {
                          ?>
                            <tr>
                                <td> <?php echo $row['id']; ?> </td>
                                <td> <?php echo $row['dat']; ?> </td>
                                <td> <?php echo $row['subject']; ?> </td>
                                <td> <?php echo $row['grade']; ?> </td>
                                <td> <?php echo $row['term']; ?> </td>
                                <td> <?php echo $row['pdf']; ?> </td>
                                <td class="text-center"> <a href="dwz?id=<?php echo $row['id']?>" class="btn btn-primary">Download </a></td>
                              </tr>
                  <?php
                }
  ?>
                      </tbody>

                      </table>
                  </div>
              </div>


          </div>
      </div>

     </section>
  <br />
  <br />
</body>>

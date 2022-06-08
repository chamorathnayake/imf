<?php

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Teacher interface</title>
           <link rel="stylesheet" href="style.css">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
          <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
<?php include('nav_bar.inc.php') ?>
  <section class="home-section">
    <div class="container">
          <div class="text">Welcome to Gampola Zonal Education department</div>
  <div class="row">
    <div class="row" style= "margin-top:60px;">
    <div class="col-lg-4 col-md-4 text-dark">
      <h2>Add lessons</h2>
      <img src="img/a1.PNG" alt="" height="50" width="50" >
      <p>Use this option to Add lessons.</p>
      <a href="add_lesson.php" class="btn btn-block btn-success">ADD </a>
    </div><!-- end of col4 div-->

    <div class="col-lg-4 col-md-4 text-dark">
      <h2>Add papers</h2>
        <img src="img/a2.PNG" alt="" height="50" width="50" >
        <p>Use this option to add paper.</p>
      <a href="add_paper.php"class="btn btn-block btn-success">ADD </a>
    </div><!-- end of col4 div-->
     </div><!-- end of row-->

     <div class="row" style="margin-top:70px;">
       <div class="col-lg-4 col-md-4 text-dark">
      <h2>Download papers </h2>
      <img src="img/a4.PNG" alt="" height="50" width="50" >
      <p>Use this option to Download papers.</p>
      <a href="dwnpp.php" class="btn btn-block btn-success">Download </a>
      </div><!-- end of div4-->

    <div class="col-lg-4 col-md-4 text-dark">
      <h2>Download lessons</h2>
      <img src="img/a5.PNG" alt="" height="50" width="50" >
      <p>Use this option to Download lessons.</p>
      <a href="dwl.php" class="btn btn-block btn-success">Download </a>
    </div><!-- end of div4-->
  </div><!-- end of row-->
</div>
  </div><!-- end of container-->
  </body>
</html>

  </section>

  <script src="script.js"></script>

</body>
</html>

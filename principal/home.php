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
    <title> Principal interface</title>
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
  <div class="row">
    <div class="row" style= "margin-top:60px;">
    <div class="col-lg-4 col-md-4 text-dark">
      <h2>Download  Modules</h2>
      <img src="img/a1.PNG" alt="" height="50" width="50" >
      <p>Use this option to Download modules.</p>
      <a href="downloadm.php" class="btn btn-block btn-success">Download </a>
    </div><!-- end of col4 div-->

    <div class="col-lg-4 col-md-4 text-dark">
      <h2>Download zonal papers</h2>
        <img src="img/a2.PNG" alt="" height="50" width="50" >
        <p>Use this option to Download zonal paper.</p>
      <a href="downloadz.php"class="btn btn-block btn-success">Download </a>
    </div><!-- end of col4 div-->

    <div class="col-lg-4 col-md-4 text-dark">
      <h2>Download  Dep papers</h2>
      <img src="img/a3.PNG" alt="" height="50" width="50" >
      <p>Use this option to Download  department paper.</p>
      <a href="downloadd.php"class="btn btn-block btn-success">Download </a>
    </div><!-- end of div-->
     </div><!-- end of row-->

     <div class="row" style="margin-top:70px;">
       <div class="col-lg-4 col-md-4 text-dark">
      <h2>Download  Model papers</h2>
      <img src="img/a4.PNG" alt="" height="50" width="50" >
      <p>Use this option to Download model papers.</p>
      <a href="downloadmp.php" class="btn btn-block btn-success">Download </a>
      </div><!-- end of div4-->

    <div class="col-lg-4 col-md-4 text-dark">
      <h2>Download online Test</h2>
      <img src="img/a5.PNG" alt="" height="50" width="50" >
      <p>Use this option to Download  online test.</p>
      <a href="downloado.php" class="btn btn-block btn-success">Download </a>
    </div><!-- end of div4-->
  </div><!-- end of row-->
</div>
</div>    <!-- end of container-->
  </body>
</html>

  </section>

  <script src="script.js"></script>

</body>
</html>

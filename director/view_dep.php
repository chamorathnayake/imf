<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
 <head>

   <link rel="stylesheet" href="style.css">
   <!-- Boxicons CDN Link -->
   <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>View Modules</title>
  <!-- <link rel="stylesheet" href="style.css"> -->
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
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
   <br />
   <br />
   <br />
   <h2 align="center">Department paers</h2><br />
   <div class="form-group">
    <!-- <div class="row">
    </div> -->
   </div>
   <br />
   <div class="table-responsive">
    <div align="right">
     <p><b>Total Records - <span id="total_records"></span></b></p>
    </div>
    <table class="table table-bordered table-striped">
     <thead>
      <tr>
       <th>ID</th>
       <th>Subject</th>
       <th>Grade</th>
       <th>Year</th>
       <th>Term </th>
       <th>PDF</th>

      </tr>
     </thead>
     <tbody>
     </tbody>
    </table>
   </div>
  </div>
    </section>
  <div style="clear:both"></div>
  <br />

  <br />
  <br />
  <br />
</body>>

<script>
$(document).ready(function(){

 load_data();

 function load_data(query)
 {
  $.ajax({
   url:"fetchd.php",
   method:"POST",
   data:{query:query},
   dataType:"json",
   success:function(data)
   {
    $('#total_records').text(data.length);
    var html = '';
    if(data.length > 0)
    {
     for(var count = 0; count < data.length; count++)
     {
      html += '<tr>';
      // html += '<td>'+data[count].description+'</td>';
      html += '<td>'+data[count].id+'</td>';
      html += '<td>'+data[count].dat+'</td>';
      html += '<td>'+data[count].subject+'</td>';
      html += '<td>'+data[count].grade+'</td>';
      html += '<td>'+data[count].term+'</td>';
      html += '<td>'+data[count].pdf+'</td></tr>';
     }
    }
    else
    {
     html = '<tr><td colspan="5">No Data Found</td></tr>';
    }
    $('tbody').html(html);
   }
  })
 }

 $('#search').click(function(){
  var query = $('#tags').val();
  load_data(query);
 });

});
</script>

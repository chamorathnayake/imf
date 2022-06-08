
<!DOCTYPE html>
<html lang="en">
 <head>
  <title>Download Lessons</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

 </head>
 <body>
   <?php include('nav_bar.inc.php') ?>
   <section class="home-section">
  <div class="container box">
   <h3 align="center">Download Lessons</h3>
   <br />
   <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
     <div class="form-group">
       <div class="form-group">
           <input type="text" name="filter_subject" id="filter_country" class="form-control" placeholder="Enter Subject">
       </div>

     </div>
     <div class="form-group">
      <select name="filter_country" id="filter_country" class="form-control" required>
       <option value="">Select Grade</option>
       <option value="Male">1</option>
       <option value="Female">2</option>
       <option value="Male">3</option>
       <option value="Female">4</option>
       <option value="Male">5</option>
       <option value="Female">6</option>
       <option value="Male">7</option>
       <option value="Female">8</option>
       <option value="Male">9</option>
       <option value="Female">10</option>
       <option value="Male">11</option>
       <option value="Female">12</option>
       <?php echo $grade; ?>
      </select>
     </div>
     <div class="form-group" align="center">
      <button type="button" name="filter" id="filter" class="btn btn-info">Filter</button>
     </div>
    </div>
    <div class="col-md-4"></div>
   </div>
   <?php include('nav_bar.inc.php') ?>
     <section class="home-section">
   <div class="container">
       <div class="jumbotron">

            <div class="card">
               <div class="card-body">

             <?php
               $connection = mysqli_connect("localhost","root","");
               $db = mysqli_select_db($connection, 'imf');

               $query = "SELECT * FROM lesson";
               $query_run = mysqli_query($connection, $query);
           ?>
                   <table id="datatableid" class="table table-bordered table-dark">
                       <thead>
                           <tr>
                             <th scope="col">YEAR</th>
                             <th scope="col">Subject </th>
                             <th scope="col">Grade </th>
                             <th scope="col"> Term </th>
                             <th scope="col"> PDF </th>
                             <th scope="col"> Download </th>
                           </tr>
                       </thead>
                       <?php
               if($query_run)
               {
                   foreach($query_run as $row)
                   {
           ?>
                       <tbody>
                           <tr>
                             <td> <?php echo $row['year']; ?> </td>
                             <td> <?php echo $row['subject']; ?> </td>
                             <td> <?php echo $row['grade']; ?> </td>
                             <td> <?php echo $row['term']; ?> </td>
                             <td> <?php echo $row['pdf']; ?> </td>
                               <td>
                                   <button type="button" class="btn btn-success editbtn"> Download </button>
                               </td>
                           </tr>
                       </tbody>
                       <?php
                   }
               }
               else
               {
                   echo "No Record Found";
               }
           ?>
                   </table>
               </div>
           </div>


       </div>
   </div>

 </section>
 </body>
</html>

<script type="text/javascript" language="javascript" >
 $(document).ready(function(){

  fill_datatable();

  function fill_datatable(filter_subject = '', filter_grade = '')
  {
   var dataTable = $('#customer_data').DataTable({
    "processing" : true,
    "serverSide" : true,
    "order" : [],
    "searching" : false,
    "ajax" : {
     url:"fetchl.php",
     type:"POST",
     data:{
      filter_subject:filter_subject, filter_grade:filter_grade
     }
    }
   });
  }

  $('#filter').click(function(){
   var filter_subject = $('#filter_subject').val();
   var filter_grade = $('#filter_grade').val();
   if(filter_subject!= '' && filter_grade != '')
   {
    $('#datatableid').DataTable().destroy();
    fill_datatable(filter_subject, filter_grade);
   }
   else
   {
    alert('Select Both filter option');
    $('#datatableid').DataTable().destroy();
    fill_datatable();
   }
  });


 });

</script>

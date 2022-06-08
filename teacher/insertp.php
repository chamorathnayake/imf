<?php
// add papers
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'imf');

if(isset($_POST['insertdata']))
{
  $year = $_POST['year'];
  $subject = $_POST['subject'];
  $grade = $_POST['grade'];
  $term = $_POST['term'];
  $pdf = $_POST['pdf'];

    $query = "INSERT INTO paper (`year`,`subject`,`grade`,`term`,`pdf`) VALUES ('$year','$subject','$grade','$term','$pdf')";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        echo '<script> alert("Data Saved"); </script>';
        header('Location: add_paper.php');
    }
    else
    {
        echo '<script> alert("Data Not Saved"); </script>';
    }
}

?>

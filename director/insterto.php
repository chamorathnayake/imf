<?php
// add online test
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'imf');

if(isset($_POST['insertdata']))
{
  $dat = $_POST['dat'];
  $subject = $_POST['subject'];
  $grade = $_POST['grade'];
  $term = $_POST['term'];
  $url = $_POST['url'];

    $query = "INSERT INTO ontest(`dat`,`subject`,`grade`,`term`,`url`) VALUES ('$dat','$subject','$grade','$term','$url')";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        echo '<script> alert("Data Saved"); </script>';
        header('Location:add_onlinet.php');
    }
    else
    {
        echo '<script> alert("Data Not Saved"); </script>';
    }
}

?>

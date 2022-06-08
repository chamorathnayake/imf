<?php
// add department papers
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'imf');

if(isset($_POST['insertdata']))
{
  $dat = $_POST['dat'];
  $news = $_POST['news'];

    $query = "INSERT INTO news (`dat`,`news`) VALUES ('$dat','$news')";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        echo '<script> alert("Data Saved"); </script>';
        header('Location: add_news.php');
    }
    else
    {
        echo '<script> alert("Data Not Saved"); </script>';
    }
}

?>

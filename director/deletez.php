<!-- delete zonal papers -->
<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,'imf');

if(isset($_POST['deletedata']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM zonpaper WHERE id='$id'";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        echo '<script> alert("Data Deleted"); </script>';
        header("Location:add_zonal_1.php");
    }
    else
    {
        echo '<script> alert("Data Not Deleted"); </script>';
    }
}

?>

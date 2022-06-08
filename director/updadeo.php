<?php
// edit online test
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'imf');

    if(isset($_POST['updatedata']))
    {
        $id = $_POST['update_id'];
        $dat= $_POST['dat'];
        $subject = $_POST['subject'];
        $grade = $_POST['grade'];
        $term = $_POST['term'];
        $url = $_POST['url'];

        $query = "UPDATE ontest SET dat='$dat', subject='$subject', grade='$grade', term=' $url', pdf=' $url' WHERE id='$id'  ";
        $query_run = mysqli_query($connection, $query);

        if($query_run)
        {
            echo '<script> alert("Data Updated"); </script>';
            header("Location:add_onlinet.php");
        }
        else
        {
            echo '<script> alert("Data Not Updated"); </script>';
        }
    }
?>

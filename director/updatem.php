<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'imf');

    if(isset($_POST['updatedata']))
    {
        $id = $_POST['update_id'];
        $dat= $_POST['dat'];
        $subject = $_POST['subject'];
        $grade = $_POST['grade'];
        $term = $_POST['term'];
        $pdf = $_POST['pdf'];

        $query = "UPDATE module SET dat='$dat', subject='$subject', grade='$grade', term=' $term', pdf=' $pdf' WHERE id='$id'  ";
        $query_run = mysqli_query($connection, $query);

        if($query_run)
        {
            echo '<script> alert("Data Updated"); </script>';
            header("Location:add_module1.php");
        }
        else
        {
            echo '<script> alert("Data Not Updated"); </script>';
        }
    }
?>

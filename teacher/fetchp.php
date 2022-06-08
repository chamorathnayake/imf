<?php

include('database_connection.php');

$column = array('year', 'subject', 'grade', 'term', 'pdf');

$query = "
SELECT * FROM paper
";

if(isset($_POST['filter_subject'], $_POST['filter_grade']) && $_POST['filter_subject'] != '' && $_POST['filter_grade'] != '')
{
 $query .= '
 WHERE subject = "'.$_POST['filter_subject'].'" AND grade = "'.$_POST['filter_grade'].'"
 ';
}

if(isset($_POST['order']))
{
 $query .= 'ORDER BY '.$column[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' ';
}
else
{
 $query .= 'ORDER BY id DESC ';
}

$query1 = '';

if($_POST["length"] != -1)
{
 $query1 = 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}

$statement = $connect->prepare($query);

$statement->execute();

$number_filter_row = $statement->rowCount();

$statement = $connect->prepare($query . $query1);

$statement->execute();

$result = $statement->fetchAll();



$data = array();

foreach($result as $row)
{
 $sub_array = array();
 $sub_array[] = $row['year'];
 $sub_array[] = $row['subject'];
 $sub_array[] = $row['grade'];
 $sub_array[] = $row['term'];
 $sub_array[] = $row['pdf'];
 <td>
     <button type="button" class="btn btn-success editbtn"> EDIT </button>
 </td>
 $data[] = $sub_array;

}

function count_all_data($connect)
{
 $query = "SELECT * FROM paper";
 $statement = $connect->prepare($query);
 $statement->execute();
 return $statement->rowCount();
}

$output = array(
 "draw"       =>  intval($_POST["draw"]),
 "recordsTotal"   =>  count_all_data($connect),
 "recordsFiltered"  =>  $number_filter_row,
 "data"       =>  $data
);

echo json_encode($output);

?>

<?php

//fetch zonal paper

$connect = new PDO("mysql:host=localhost;dbname=imf", "root", "");

$output = '';

 $query = '';

 if(isset($_POST["query"]))
{
 $search = str_replace(",", "|", $_POST["query"]);
 $query = "
 SELECT * FROM news
 OR dat REGEXP '".$search."'
 OR news REGEXP '".$search."'
 ";
}
else
{
 $query = "
 SELECT * FROM news ORDER BY id
 ";
}

$statement = $connect->prepare($query);
$statement->execute();

while($row = $statement->fetch(PDO::FETCH_ASSOC))
{
 $data[] = $row;
}

echo json_encode($data);

?>

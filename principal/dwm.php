<?php
include "config2.php";

if(isset($_GET['id'])){
$id = $_GET['id'];
$stat = $db->prepare("select * from module where id=?");
$stat ->bindparam(1, $id);
$stat-> execute();
$data = $stat-> fetch();

$file = 'application/'.$data['pdf'];
// $subject = 'media/'.$data['subject'];

if(file_exists($file)){
 header('Content-subject: '.$data['subject']);
 header('Content- grade: '.$data['grade']);
 header('Content- term: '.$data['term']);.'; pdf="'.basename($file).'"');
 header('Content-Lengh: '.filesize($file));
 readfile($file);
 exit;

}

}
?>

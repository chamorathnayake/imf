<?php
include "config2.php";

if(isset($_GET['id'])){
$id = $_GET['id'];
$stat = $db->prepare("select * from modpaper where id=?");
$stat ->bindparam(1, $id);
$stat-> execute();
$data = $stat-> fetch();

$pdf = ''.$data['pdf  '];
// $subject = 'media/'.$data['subject'];

if(file_exists($pdf)){
 header('Content-description: '.$data['description']);
 header('Content-Type: '.$data['type']);
 header('Content- Disposition: '.$data['disposition']);
 header('Expires: '.$data['expires']);
 header('Cache-Control: '.$data['pragram']);
 header('Content-Lengh: '.filesize($pdf));
 readfile($pdf);
 exit;

}

}
?>

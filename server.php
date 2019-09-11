<?php

$koneksi=new PDO('mysql:host=localhost;dbname=ets','root','');
$db=$koneksi->prepare('SELECT * FROM user');
$db->execute();
$user=$db->fetchAll(PDO::FETCH_ASSOC);

$data=json_encode($user);
echo $data;
?>


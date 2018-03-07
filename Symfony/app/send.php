<?php
$id = $_POST['id'];
$data = $_POST['data'];
$form = $_POST['form'];
if($form==0) {
	$column="nom";
}
if($form==1) {
	$column="matin";
}
if($form==2) {
	$column="midi";
}
if($form==3) {
	$column="soir";
}
$bdd = new PDO('mysql:host=localhost;dbname=symfony2', 'root', '');
$insert = $bdd->prepare("INSERT INTO ration($column) VALUES(?) WHERE id = ?");
$insert->execute(array($data, $id));
?>
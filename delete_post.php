<?php
require 'db_connect.php';

$deletePost = $conn->prepare("DELETE FROM job WHERE JobId =:id");
$deletePost->execute(array(':id'=>$_POST['id']));
header('Location: http://equiavenir/share.php');
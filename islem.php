<?php

$data["status"]="success";
$data["message"]="Kullanici adiniz {$_POST['kadi']}- Siferniz {$_POST['pass']}";
echo json_encode($data);
 ?>

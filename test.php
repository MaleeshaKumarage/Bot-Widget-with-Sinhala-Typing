<?php
$regstration = $_POST['registration'];
$name= $_POST['name'];
$email= $_POST['email'];

if ($registration == "success"){
 // some action goes here under php
 echo json_encode(array("abc"=>'successfuly registered'));
}
?>
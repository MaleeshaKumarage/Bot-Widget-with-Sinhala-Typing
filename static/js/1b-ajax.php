<?php
function save ($name, $email) {
  // return false;
  return true;
}
$pass = save($_POST['name'], $_POST['email']);
 
// RESULT
echo $pass ? "OK" : "An error has occurred";
?>
<?php
// DO YOUR PROCESSING
// SAVE TO DATABASE OF SOMETHING
function save ($name, $email) {
  // return false;
  return true;
}
function RecordResponses($input,$classifed_intent, $entities) {
  $servername = "148.72.232.179:3306";
  $username = "maleesha";
  $password = "mal33sha";
  $dbname = "rest-o-bot_chat_log";
  
  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
    
  
  $sql = "INSERT INTO Chat (id,input,classifed_intent, entities)
  VALUES (0,'1', '2', '3')";
  
  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();
}


$pass = RecordResponses($_POST['input'], $_POST['Intent'],$_POST['Entity']);
 
// RESULT
echo $pass ? "OK" : "An error has occurred";
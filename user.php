<?php
  $db = new PDO('mysql:host=localhost;dbname=letsgo;charset=utf8', 'root', 'KING!fr0g');
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $action = isset($_GET['action']) ? $_GET['action'] : "default";

  if($action == "default") { echo "This works!"; }
  if($action == "login") { login(); }
  if($action == "register" ) { register(); }

  function register(){
    global $db;

    if(isset($_GET['email'])){ $email = $_POST['email']; }
    // else { echo "{'error' : 'Email Missing'}"; exit; }

    if(isset($_GET['password'])){ $password = md5($_POST['password']); }
    // else { echo "{'error' : 'Password Missing'}"; exit; }

    $email = "saxenaankur001@gmail.com";
    $password = md5("hello");

    $stmt = $db->prepare("INSERT INTO users(`email`, `password`) VALUES(:email, :password)");
    try{ $stmt->execute( array(':email' => $email, ':password' => $password) ); }
    catch(PDOException $e) {echo 'Connection failed: ' . $e->getMessage();}
    $affected_rows = $stmt->rowCount();
    echo $affected_rows;
    // if($affected_rows > 0) {echo "success"; }
    // else { echo "{ 'error' : 'SQL Error'}"; }
  }

?>

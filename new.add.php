<?php
require_once 'functions.php';

if (isset($_SESSION['id'])) {

  $id = $_SESSION['id'];
  $title = $_POST['title'];
  $text = $_POST['text'];
  $price = $_POST['price'];
  $category = $_POST['category'];

  $sql = "INSERT INTO oglas VALUES (NULL,'$title','$text','$category','$price','$id')";
  $query = mysqli_query(db(),$sql);

  if ($query) {
    header('Location: user.view.php');
  } else {
    header('Location: index.php');
  }

}else {
  header('Location: index.php');
}
 ?>

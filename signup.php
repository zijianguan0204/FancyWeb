  <?php
  require_once('config.php');
  if(isset($_POST['signup'])){

    if(isset($_POST['username'])){
      $username=$_POST['username'];
    }
    if(isset($_POST['password'])){
      $password=$_POST['password'];
    }
    if(isset($_POST['phone'])){
      $phone=$_POST['phone'];
    }
    if(isset($_POST['email'])){
      $email=$_POST['email'];
    }
    if(isset($_POST['firstname'])){
      $firstname=$_POST['firstname'];
    }
    if(isset($_POST['lastname'])){
      $lastname=$_POST['lastname'];
    }

    $sql = "INSERT INTO user_account (user_name, password, phone, email, first_name, last_name) VALUES('$username', '$password', '$phone', '$email', '$firstname', '$lastname')";
    $stmt = mysqli_prepare($db_connection, $sql) or die(mysqli_error($db_connection));
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    mysqli_close($db_connection);
    header("Location: index.php");
  }

  ?>
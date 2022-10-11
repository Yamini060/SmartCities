<?php
      $fname = $_POST['fname'];
      $lname = $_POST['lname'];
      $gender = $_POST['gender'];
      $date = $_POST['date'];   
      $email = $_POST['email'];
      $phno = $_POST['phno'];
      $address = $_POST['address'];
      $username = $_POST['username'];
      $password = $_POST['password'];
      //Database connection
      $conn =new mysqli('localhost','root','','testing');
      if($conn -> connect_error)
      {
          die('connection failed'.$conn->connect_error);
      }
      else{
          $stmt = $conn-> prepare(" insert into registration(firstname,lastname,gender,dob,email,phno,address,username,password)
          values(?, ?, ?,?, ?, ?, ?, ?, ?)");
          $stmt->bind_param("ssssissss", $fname,$lname,$gender, $date, $email,  $phno,$address,$username,$password );
          $stmt->execute();
          echo "registration successfull";
          $stmt->close();
          $conn->close();
      }
?>
<?php

include 'dbcon.php';

if(isset($_POST['submit'])){
  $username = mysqli_real_escape_string($con, $_POST['username'] );
  $email = mysqli_real_escape_string($con, $_POST['email']);
  $phone = mysqli_real_escape_string($con, $_POST['phone']);
  $password = mysqli_real_escape_string($con, $_POST['password'] );
  $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);

  $pass = password_hash($password, PASSWORD_BCRYPT); // encryption of password.
  $cpass = password_hash($cpassword, PASSWORD_BCRYPT); // encryption of re-entered password.


  $emailQuery = " SELECT * FROM registration where email = '$email' ";
  $query = mysqli_query($con, $emailQuery);

  $emailcount = mysqli_num_rows($query);

  if($emailcount > 0){
    ?>
        <script>
          alert("Email Already Exists");
        </script>
        <?php
  }else{
    if($password === $cpassword){
      $insertquery = "INSERT INTO registration(username,email,phone, password ,cpassword) values ('$username','$email','$phone','$pass','$cpass')";

      $iquery = mysqli_query($con, $insertquery);

      if($iquery){
        ?>
            <script>
              alert('Data inserted');
            </script>
        <?php
      }else{
        ?>
            <script>
              alert('Data Not inserted');
            </script>
        <?php
      }

    }else{
      ?>
      <script>
        alert("Password Not Matching");
      </script>
      <?php
    }
  }
}

?>
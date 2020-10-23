<?php

include 'dbcon.php';

if(isset($_POST['submit'])){

  $username = mysqli_real_escape_string($con, $_POST['username']);
  $email = mysqli_real_escape_string($con,$_POST['email']);
  $mobile = mysqli_real_escape_string($con,$_POST['mobile']);
  $password = mysqli_real_escape_string($con,$_POST['password']);
  $cpassword = mysqli_real_escape_string($con,$_POST['cpassword']);


  $pass = password_hash($password,PASSWORD_BCRYPT);
  $cpass = password_hash($cpassword,PASSWORD_BCRYPT);

  $emailquery=" select * from login where email='$email' ";
  $query = mysqli_query($con,$emailquery);

  $emailcount = mysqli_num_rows($query);
if($emailcount>0){
  echo "Email already exist";
}else{
  if($password===$cpassword){
    $insertquery="insert into login( username, email, mobile, password, cpassword) values ('$username','$email','$mobile','$pass','$cpass')";
    $iquery = mysqli_query($con, $insertquery);
  if($iquery){
    ?>
        <script>
           alert("Inserted Successfull");
        </script>
     <?php
  }else{
     ?>
         <script>
             alert("Insertion Not successfull");
          </script>
     <?php
    }

  }else{
    ?>
        <script>
            alert("Pasword does not match");
         </script>
    <?php
  }
}

}


  //include Diffie Hellman functions
  require_once 'DiffieHellman.php';

  //set the required options for both user and admin subjects
  $subject_1 = array('prime'=>'123', 'generator'=>'7', 'private'=>$password);
  $subject_2 = array('prime'=>'123', 'generator'=>'7', 'private'=>'34');

  //apply Diffie Hellman algorithm
  $subject_1_GK = new Crypt_DiffieHellman(
     $subject_1['prime'], $subject_1['generator'],
     $subject_1['private']);
  $subject_2_GK = new Crypt_DiffieHellman(
     $subject_2['prime'], $subject_2['generator'],
     $subject_2['private']);

  //generate keys
  $subject_1_GK->generateKeys();
  $subject_2_GK->generateKeys();

  //compute the secret keys
  $subject_1_SK = $subject_1_GK->computeSecretKey(
     $subject_2_GK->getPublicKey())->getSharedSecretKey();
  $subject_2_SK = $subject_2_GK->computeSecretKey(
     $subject_1_GK->getPublicKey())->getSharedSecretKey();


 ?>

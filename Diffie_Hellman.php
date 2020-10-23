<?php
   //this code is already included in process.php
   //I have placed it here to shoe the generation of secret key
  //include Diffie Hellman functions
  require_once 'DiffieHellman.php';

  $subject_1 = array('prime'=>'123', 'generator'=>'7', 'private'=>'7');
  $subject_2 = array('prime'=>'123', 'generator'=>'7', 'private'=>'34');

  $subject_1_GK = new Crypt_DiffieHellman(
     $subject_1['prime'], $subject_1['generator'],
     $subject_1['private']);
  $subject_2_GK = new Crypt_DiffieHellman(
     $subject_2['prime'], $subject_2['generator'],
     $subject_2['private']);

  $subject_1_GK->generateKeys();
  $subject_2_GK->generateKeys();

  $subject_1_SK = $subject_1_GK->computeSecretKey(
     $subject_2_GK->getPublicKey())->getSharedSecretKey();
  $subject_2_SK = $subject_2_GK->computeSecretKey(
     $subject_1_GK->getPublicKey())->getSharedSecretKey();

  echo('User :'.$subject_1_SK.'<br />');
  echo('Admin :'.$subject_2_SK);
  ?>

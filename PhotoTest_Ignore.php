<?php
include '../lib/se/SEPhoto.class.php';
session_start();
$_SESSION['username']='test@gmail.com';
$photo = new SEPhoto();
$result =$photo->getPhotos_UserPhotowall("","test@gmail.com","11");
var_dump(json_decode($result));
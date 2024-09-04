<?php
include('db.php');
if (isset($_POST['guardar'])) {

    if (isset($_POST['name'])) {
        $settingwebmaster_email = $_POST['name'];

        $query = "UPDATE `about` SET `value` = '$settingwebmaster_email' WHERE (`key` = 'name')";
        mysqli_query($conn, $query);
     }
     if (($_FILES['avatar']['name'] != null)){
      $foto= $_FILES["avatar"]["name"];
         $ruta= $_FILES["avatar"]["tmp_name"];  
        $fold= "..//cdn/about/".$foto;
          copy($ruta, $fold);
       $query = "UPDATE `about` SET `value` = '$foto' WHERE (`key` = 'avatar')";
        mysqli_query($conn, $query);
    }
    if (isset($_POST['nationality'])) {
        $settingwebmaster_email = $_POST['nationality'];

        $query = "UPDATE `about` SET `value` = '$settingwebmaster_email' WHERE (`key` = 'nationality')";
        mysqli_query($conn, $query);
     }
     if (isset($_POST['about_me'])) {
        $settingwebmaster_email = $_POST['about_me'];

        $query = "UPDATE `about` SET `value` = '$settingwebmaster_email' WHERE (`key` = 'about_me')";
        mysqli_query($conn, $query);
     }
     if (isset($_POST['position_typing'])) {
        $settingwebmaster_email = $_POST['position_typing'];

        $query = "UPDATE `about` SET `value` = '$settingwebmaster_email' WHERE (`key` = 'dedi')";
        mysqli_query($conn, $query);
     }
     if (isset($_POST['address'])) {
        $settingwebmaster_email = $_POST['address'];

        $query = "UPDATE `about` SET `value` = '$settingwebmaster_email' WHERE (`key` = 'address')";
        mysqli_query($conn, $query);
     }
     if (isset($_POST['latitude'])) {
        $settingwebmaster_email = $_POST['latitude'];

        $query = "UPDATE `about` SET `value` = '$settingwebmaster_email' WHERE (`key` = 'latitude')";
        mysqli_query($conn, $query);
     }
      if (isset($_POST['longitude'])) {
        $settingwebmaster_email = $_POST['longitude'];

        $query = "UPDATE `about` SET `value` = '$settingwebmaster_email' WHERE (`key` = 'longitude')";
        mysqli_query($conn, $query);
     }
     if (isset($_POST['phone'])) {
        $settingwebmaster_email = $_POST['phone'];

        $query = "UPDATE `about` SET `value` = '$settingwebmaster_email' WHERE (`key` = 'phone')";
        mysqli_query($conn, $query);
     }
      if (isset($_POST['email'])) {
        $settingwebmaster_email = $_POST['email'];

        $query = "UPDATE `about` SET `value` = '$settingwebmaster_email' WHERE (`key` = 'email')";
        mysqli_query($conn, $query);
     }
     if (isset($_POST['facebook'])) {
        $settingwebmaster_email = $_POST['facebook'];

        $query = "UPDATE `about` SET `value` = '$settingwebmaster_email' WHERE (`key` = 'facebook')";
        mysqli_query($conn, $query);
     }
     if (isset($_POST['linkedin'])) {
        $settingwebmaster_email = $_POST['linkedin'];

        $query = "UPDATE `about` SET `value` = '$settingwebmaster_email' WHERE (`key` = 'linkedin')";
        mysqli_query($conn, $query);
     }
     if (isset($_POST['youtube'])) {
        $settingwebmaster_email = $_POST['youtube'];

        $query = "UPDATE `about` SET `value` = '$settingwebmaster_email' WHERE (`key` = 'youtube')";
        mysqli_query($conn, $query);
     }
    header('Location:personal1.php');
} else {
    header('Location:personal1.php');
}
?>
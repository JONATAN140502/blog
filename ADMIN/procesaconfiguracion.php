<?php
include('db.php');
if (isset($_POST['enviar'])) {

    if (isset($_POST['email'])) {
        $settingwebmaster_email = $_POST['email'];

        $query = "UPDATE `settings` SET `value` = '$settingwebmaster_email' WHERE (`key` = 'webmaster_email')";
        mysqli_query($conn, $query);
     }
     if (($_FILES['homebg']['name'] != null)){
      $foto= $_FILES["homebg"]["name"];
         $ruta= $_FILES["homebg"]["tmp_name"];  
        $fold= "..//cdn/settings/".$foto;
          copy($ruta, $fold);
        $query = "UPDATE `settings` SET `value` = '$foto' WHERE (`key` ='home_bg')";
        mysqli_query($conn, $query);
    }
      if (($_FILES['aboutbg']['name'] != null)) {
     
      $foto= $_FILES["aboutbg"]["name"];
         $ruta= $_FILES["aboutbg"]["tmp_name"];  
        $fold= "..//cdn/settings/".$foto;
          copy($ruta, $fold);
        $query = "UPDATE `settings` SET `value` = '$foto' WHERE (`key` ='about_bg')";
        mysqli_query($conn, $query);
     }
    header('Location:configuracion.php');
} else {
    header('Location:configuracion.php');
}
?>


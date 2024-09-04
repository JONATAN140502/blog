<?php
session_start();

$conn = mysqli_connect(
  'localhost:3306',
  'jonatanmayanga_blog',
  'Thaison2020.',
  'jonatanmayanga_blog'
) or die(mysqli_erro($mysqli));

// $conn = mysqli_connect(
//   'localhost:3306',
//   'root',
//   '',
//   'blog'
// ) or die(mysqli_erro($mysqli))
?>
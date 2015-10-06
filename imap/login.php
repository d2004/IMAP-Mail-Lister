<?php
if ($_POST['issed_login']) {
  $_SESSION['logged_in_a442'] = true;
  $_SESSION['usera3'] = $_POST['email'];
  $_SESSION['imapserver'] = $_POST['imap'];
  $_SESSION['passa3'] = md5($_POST['password']);
  $json1 = "{'success':'true','get':'api','md5':'yes'}";
  $j = json_encode($json_1,true);
  echo "Login successfully! please wait... ";
  if ($_GET['return_url']) {
    header('location: '.$_GET['return_url']);
  } else {
    header('location: '.$_SERVER['HTTP_REFERER']);
  }
}

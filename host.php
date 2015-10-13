<?php
if (!$_SESSION['logged_in_a442'] and !$_SESSION['usera3'] and !$_SESSION['passa3'] and !$_SESSION['imapserver']) {
  header('location: IMAP-Mail-Lister-master/imap/login.php'); // redirect if no logged in
}
function getMail() {
  include('IMAP-Mail-Lister-master/imap/connection.php'); // include the connection file
  $count = imap_num_msg($connection); // calculate messages number
  for($i = 1; $i <= $count; $i++) { // STRING 1
    $header = imap_headerinfo($connection, $i); // load headers informations
    $raw_body = imap_body($connection, $i); // load imap_body
  } // count and print raw of the body
}
if (!$connection) {
  echo "<a href='https://github.com/d2004/IMAP-Mail-Lister'>IMAP Mail Lister by Davide Ramondetti</a> <br />";
  echo "<b>an error verified, check your usernames and password. please return to the login page and re-logging in</b>";
  exit();
}
?>

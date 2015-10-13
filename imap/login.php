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
?>

<noscript>
  Please start the javascript to use the Login Page!
  <div hidden>
</noscript>
<script>
  function help(how) {
    if (how = 1) {
      alert("The IMAP Server URL is the server of your mail. if you don't known your IMAP Server URL call your mail provider.");
    }
    if (how = 2) {
      alert("The EMAIL is the mail address registered in the provider, if you do not have an email search an a email provider. ");
    }
    if (how = 3) {
      alert("The password of your EMAIL, if you don' t known the password contact your mail provider. ");
    }
  }
</script>
<h1>IMAP Mail Lister</h1>
<p>di Davide Ramondetti</p>
<p><a href="https://github.com/d2004/IMAP-Mail-Lister" target="_blank">View on Github</a></p>
<p></p>
<form method="POST" action="login.php">
  <p>IMAP Server URL <a href="javascript:help(1);" onClick="help(1);">[?]</a>: <input type="text" name="imap" id="imap" placeholder="ex: imap.infornblog.ga" size="100"></p>
  <p>Email <a href="javascript:help(2);" onClick="help(2);">[?]</a>: <input type="email" name="email" id="email" placeholder="ex: tizio@provider-mail.com" size="100"></p>
  <p>Password <a href="javascript:help(3);" onClick="help(3);">[?]</a>: <input type="password" name="password" id="password" placeholder="ex: 12345" size="100"></p>
  <p><input type="submit" value="Log In" name="issed_login" id="issed_login"></p>
</form>

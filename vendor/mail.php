<?php
if (isset($_REQUEST['email']))  {
  
  $admin_email = "biuro@domena.pl";
  $email = $_REQUEST['email'];
  $subject = $_REQUEST['subject'];
  $comment = $_REQUEST['comment'];
  
  mail($admin_email, "$subject", $comment, "From:" . $email);
  
  echo "Dziękujemy za kontakt z nami!";
  }
  
    else  {
?>

 <form method="post">
  Email: <input name="email" type="text" /><br />
  Temat: <input name="subject" type="text" /><br />
  Wiadomość:<br />
  <textarea name="comment" rows="15" cols="40"></textarea><br />
  <input type="submit" value="Wyślij" />
  </form>
  
<?php
  }
?>
<?php
session_start();
echo $_SESSION["emailid"];
echo $_SESSION["fname"];
echo $_SESSION["sname"];
echo $_SESSION["mob"];
echo $_SESSION["address"];
echo $_SESSION["sn"];
echo $_SESSION["type"];
?>

<!DOCTYPE html>
<html>
<body>
<form action="send_mail.php" method="post">
<input type="submit">
</form>
</body>
</html>

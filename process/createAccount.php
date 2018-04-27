<?php
$password = "S3cret";
$hashed_password = password_hash($password, PASSWORD_BCRYPT); //BCRYPT - blowfish - is recommended for php7
echo $hashed_password;
?>
<!-- hashes the password for you -->
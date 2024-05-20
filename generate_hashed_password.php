<?php
$new_password = 'new_admin_password';
$hashed_password = password_hash($new_password, PASSWORD_DEFAULT);
echo "Hashed Password: " . $hashed_password;
?>

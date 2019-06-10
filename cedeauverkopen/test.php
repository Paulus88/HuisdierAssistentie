<?php
header('WWW-Authenticate: NTLM');
$headers = apache_request_headers();
echo serialize($headers);
?>

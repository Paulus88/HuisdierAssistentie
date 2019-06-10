<?php
$headers = apache_request_headers();
header('WWW-Authenticate: NTLM '.trim(base64_encode($msg2)));
echo serialize($msg2)."<br /><br />";
?>

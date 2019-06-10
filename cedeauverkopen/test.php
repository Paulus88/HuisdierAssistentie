<?php
header('HTTP/1.0 401 Unauthorized');
$headers = apache_request_headers();
echo serialize($headers);
?>

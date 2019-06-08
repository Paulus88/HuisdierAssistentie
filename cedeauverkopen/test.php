<?php
include 'huMf6GwI0pbSg1k.php';
$conn = OpenCon();
$result = "CREATE TABLE track(
`id` int(6) NOT NULL auto_increment,
`tm` varchar(20) NOT NULL default '',
`ref` varchar(255) NOT NULL default '',
`geo` varchar(255) NOT NULL default '',
`lat` varchar(255) NOT NULL default '',
`lon` varchar(255) NOT NULL default '',
`agent` varchar(255) NOT NULL default '',
`ipv4` varchar(20) NOT NULL default '',
`ipv6` varchar(45) NOT NULL default '',
`ip_value` int(11) NOT NULL default '0',
`domain` varchar(20) NOT NULL default '',
 UNIQUE KEY `id` (`id`)
 ) ENGINE=MyISAM DEFAULT CHARSET=latin1 ";

if (mysql_query($result))
{
 print "Success in TABLE creation!......";
}
else
{
die('MSSQL error: ' . mssql_get_last_message());
}
CloseCon($conn);
?>

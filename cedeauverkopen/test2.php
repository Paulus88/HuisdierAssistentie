<?php
include 'huMf6GwI0pbSg1k.php';
foreach ( $db->query('SELECT * FROM track') as $row ) {
    print_r($row);
}
mysqli_close($conn);
?>

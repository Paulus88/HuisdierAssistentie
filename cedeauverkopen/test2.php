<?php
include 'huMf6GwI0pbSg1k.php';
foreach ( $db->query('SELECT * FROM track') as $row ) {
    print_r($row);//echo "{$row['field']}";
}
mysqli_close($conn);
?>

<html><head><title>MySQL Table Viewer</title></head><body>
<?php
include("huMf6GwI0pbSg1k.php");
$conn = OpenCon();
$table = 'track';

// sending query
$result = mysqli_query("SELECT * FROM {$table}");
if (!$result) {
    die("Query to show fields from table failed");
}

$fields_num = mysqli_num_fields($result);

echo "<h1>Table: {$table}</h1>";
echo "<table border='1'><tr>";
// printing table headers
for($i=0; $i<$fields_num; $i++)
{
    $field = mysqli_fetch_field($result);
    echo "<td>{$field->name}</td>";
}
echo "</tr>\n";
// printing table rows
while($row = mysqli_fetch_row($result))
{
    echo "<tr>";

    // $row is array... foreach( .. ) puts every element
    // of $row to $cell variable
    foreach($row as $cell)
        echo "<td>$cell</td>";

    echo "</tr>\n";
}
mysqli_free_result($result);
CloseCon($conn);
?>
</body></html>

<?php
include 'huMf6GwI0pbSg1k.php';
$conn = OpenCon();
if ($result = mysqli_query($conn, "SELECT * FROM track", MYSQLI_USE_RESULT)) {

    /* Note, that we can't execute any functions which interact with the
       server until result set was closed. All calls will return an
       'out of sync' error */
    if (!mysqli_query($conn, "SET @a:='this will not work'")) {
        printf("Error: %s\n", mysqli_error($link));
    }
    mysqli_free_result($result);
}
CloseCon($conn); ?>

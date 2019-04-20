<?php
if($_POST["message"]) {
    mail("info@huisdierassistentie.nl", "Beste Huisdier Assistentie", $_POST["your-message"], $_POST["email"]);
}
?>

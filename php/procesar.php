<?php 

$txt = $_POST['txt'];

echo "<p style='word-break: break-word'>".nl2br( $txt )."</p>";
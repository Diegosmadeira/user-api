<?php
$id = ($_GET['id']);
$location = 'Location: http://localhost/user-api/public/api/v1/users/list/' . $id;

header($location);

?>
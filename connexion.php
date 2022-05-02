<?php

try {
    $db = new PDO('mysql:host=localhost:3306;dbname=mathieu-tatat_autocompletion;charset=utf8' , 'barresearch', 'barresearch');
}
catch (Exception $e) {
    die('error : ' . $e->getMessage());
}

?>

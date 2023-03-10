<?php
require('../controler/getSession.php');
var_dump($_SESSION['logged']);
echo"<a href='../controler/endSession.php'>Sair<a>";
?>
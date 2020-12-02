<?php
// Cierre de la sesión
session_start();
session_unset();
session_destroy();
header('location: ../');
?>
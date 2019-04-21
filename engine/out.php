<?php
session_start();
ob_start();
session_destroy();
header("Location:../index.php?stt=out");
ob_end_flush();
?>
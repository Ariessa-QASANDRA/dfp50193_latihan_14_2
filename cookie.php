<?php
date_default_timezone_set('Asia/Kuala_Lumpur');

$masa_exp = time() + 30;
setcookie('nama_pelajar', 'ARIESSA QASANDRA', $masa_exp);

header('location: papar.php');
<?php
header('Content-Type: application/csv');
header('Content-Disposition: attachment; filename='.$_GET['filename'].'.csv');
header('Pragma: no-cache');
readfile('../'.$_GET['filename'].".csv");
?>
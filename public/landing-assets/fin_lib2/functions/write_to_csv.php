<?php 
$data = array(

        $_GET['phone']
);
$fp = fopen("../../csvs/".$_GET['inf'].".csv", 'a');
foreach ( $data as $line ) {
    $val = explode(",", $line);
    fputcsv($fp, $val);
}
fclose($fp);
//echo   $_GET['phone'];
//echo   $_GET['inf'];
?>


<html>
    <head>
        <title>Login page</title>
    </head>
    <body>
                             <?PHP 

$folder = "../csvs"; 
$handle = opendir($folder); 

# Making an array containing the files in the current directory: 
while ($file = readdir($handle)) 
{ 
    $files[] = $file; 
} 
closedir($handle); 

#echo the files 
foreach ($files as $file) { 
if($file != '.' || $file != '..'){
    echo "<a href=../csvs/".$file.">".$file."</a><br />"; 
}
    
} 
?>
    </body>
</html>
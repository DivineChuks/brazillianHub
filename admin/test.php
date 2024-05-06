<?php

if(isset($_FILES['file1'])){
    
    //$files = $_FILES['file'];

$countfiles = count($_FILES['file1']['name']);

for ($i=0;$i<$countfiles;$i++) { 
    
    $filename = $_FILES['file1']['name'][$i];
    echo $filename."<br>";
}

}else{
    echo 2;
}

?>
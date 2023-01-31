<?php

    // Define file name and path 
    $fileName = basename(slman26_26.sql); 
    $filePath = $fileName; 
 

        // Define headers 
        header("Cache-Control: public"); 
        header("Content-Description: File Transfer"); 
        header("Content-Disposition: attachment; filename=slman26_26.sql"); 
        header("Content-Type: application/zip"); 
        header("Content-Transfer-Encoding: binary"); 
         
        // Read the file 
        readfile($filePath); 

 
?>
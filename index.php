<?php
$file='hitcounter.txt';
        if(file_exists($file)){
            $count=  file_get_contents($file);
            echo 'No of visits: '.($count+1);
        }
        else{
            
            $count=0;
        }
        file_put_contents($file, ++$count);
?>
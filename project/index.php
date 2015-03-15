<?php
    
    define(FILE_FLAG, 'flag');
    $flag;
    if(file_exists(FILE_FLAG))
    {
        $flag = file_get_contents(FILE_FLAG);
        $file = fopen(FILE_FLAG, 'w');
        if($flag == 1)
            fwrite($file, 2);
        else
            fwrite($file, 1);
        fclose($file);
    }else{
        $file = fopen(FILE_FLAG, 'w') or die('Change the permission for root directory!');
        fwrite($file, 2);
        fclose($file);
        $flag = 1;
    }
    
    if($flag == 1)
    {
        header('Location: http://splittest.lan/project/pages/first.php');
        
    }elseif($flag == 2){
        header('Location: http://splittest.lan/project/pages/second.php');
        
    }else{
        echo "ERROR";
    }
?>
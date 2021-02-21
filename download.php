<?php

if(!empty($_GET['download']))
{
    $filename=basename(($_GET['download']));
    $filepath='assets/images/vectors//'.$filename;
    if(!empty($filename)&& file_exists($filepath))
    {
        header("Cache-control:public");
        header("Content-Description:File Transfer");
        header("Content-disposition:attachment;filename=$filename");
        header("Content-Type;application/zip");
        header("Content-Transfer-Emcoding:binary");

        readfile($filepath);
        exit;
    }else
    {
        echo "file doesnot exist";
    }
}


?>

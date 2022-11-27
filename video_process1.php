<?php
$view=$_GET['info'];
if(isset($view))
{
    $path=__DIR__;
    // var_dump("ffmpeg -i $path/$view $path/test2.avi");
    $my_command="ffmpeg -i $path/$view $path/test2.avi";
    $run=system($my_command);
    if($run) {
        echo "success";
    } else {
        echo "failed";
    }
    // var_dump($d);
}
?>
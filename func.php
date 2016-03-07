<?php

function mix_audio($files, $output, $dir)
{
	echo 'aaaaaa222';die;
    //$video_name = date("Ymd") . uniqid();
    if (!file_exists("{$dir}")) {
        exec("mkdir -p {$dir}");
    }    
	
	$m1 = $files['m1'];
	$m2 = $files['m2'];
	$m3 = $files['m3'];    
	echo $m1;die;
	$command = "sox -M {$m3} {$m3} {$m3} {$output}";	
    exec($command);

    $result = array('dir' => $dir . '/' . $output);
    return $result;
}
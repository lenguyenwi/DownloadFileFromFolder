<?php
// $local_file = 'file.zip';
// $download_file = 'name.zip';
if (isset($_GET["local_file"])) {
    $local_file="./DownloadFiles/".$_GET["local_file"];
    $download_file = $_GET["local_file"];
}

// $local_file = './DownloadFiles/logo_ldg.jpg';
// $download_file = 'file.jpg';
// set the download rate limit (=> 20,5 kb/s)
$download_rate = 20.5;
if(file_exists($local_file) && is_file($local_file))
{
    header('Cache-control: private');
    header('Content-Type: application/octet-stream');
    header('Content-Length: '.filesize($local_file));
    header('Content-Disposition: filename='.$download_file);

    flush();
    $file = fopen($local_file, "r");
    while(!feof($file))
    {
        // send the current file part to the browser
        print fread($file, round($download_rate * 1024));
        // flush the content to the browser
        flush();
        // sleep one second
        sleep(1);
    }
    fclose($file);}
else {
    die('Error: The file '.$local_file.' does not exist!');
}

?>

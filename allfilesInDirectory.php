<!DOCTYPE html>
<?php

if ($handle = opendir('./DownloadFiles/')) { //  opendir('/path/to/files')) {
    // echo "Directory handle: $handle<br>";
    echo "Please click on the file to download<br>";
    // echo "Entries:<br>";

    /* This is the correct way to loop over the directory. */
    while (false !== ($entry = readdir($handle))) {

        // echo "<a href=\"./downloadLitmitRate.php\">".$entry."</a><br>";
        if(file_exists($entry)!=true)
        {
          echo "<a href=\"./downloadLitmitRate.php?local_file=$entry\">".$entry."</a><br>";
        }
    }
    // echo "<button>".'Download all'."</button>";
    /* This is the WRONG way to loop over the directory. */
    // while ($entry = readdir($handle)) {
    //     echo "$entry\n";
    // }

    closedir($handle);
}
?>

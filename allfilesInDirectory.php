<?php

if ($handle = opendir('./DownloadFiles/')) { //  opendir('/path/to/files')) {
    echo "Directory handle: $handle<br>";
    echo "Entries:<br>";

    /* This is the correct way to loop over the directory. */
    while (false !== ($entry = readdir($handle))) {

        // echo "<a href=\"./downloadLitmitRate.php\">".$entry."</a><br>";
          echo "<a href=\"./downloadLitmitRate.php?local_file=$entry\">".$entry."</a><br>";
    }

    /* This is the WRONG way to loop over the directory. */
    // while ($entry = readdir($handle)) {
    //     echo "$entry\n";
    // }

    closedir($handle);
}
?>

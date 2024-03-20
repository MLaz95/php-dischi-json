<?php

// gets data from json
$dischiContent = file_get_contents('./dischi.json');
// sets it as the data currently displayed by the server
$activeData = $dischiContent;

// waits for a get request of a specific disk index
if (isset($_GET['currentDiskIndex'])) {
    // translates the data into a php array
    $diskList = json_decode($dischiContent);
    // uses the current index to find the required disk in the php array
    // then sets it as active data that the server is displaying
    $activeData = json_encode($diskList[$_GET['currentDiskIndex']]);
}
// server info is formatted as json file
header("Content-Type: application/json");

// server displays the value of active data
echo $activeData;

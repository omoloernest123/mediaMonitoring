<?php


//fuction is called audio and accepts stationname and returns its audio


function audio($stationname) {
//A stations audio are stored in an array(in future it can be stored in database and fetched from there))

//stationname => audio
    $details = array(
        'inooro' => 100,
        'ramogi' => 120,
        'chamgei' => 200,
        'inooro' => 190
    );
    //it matches the station names in array to the one passed to the server by the client
    foreach ($details as $key => $value) {
    	echo $value;
        //if any matches it assigns into the $audio variable as below
        if ($stationname == $key) {
            $audio = $value;
//then the audio is returned back to the client
        return $audio;
        }
        
    }
}

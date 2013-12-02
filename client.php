<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251"/>
<title>Audio Request Service </title>


</head>
<body>

        <?php
      
            require 'lib/nusoap.php';
//when client.php is run on browser it invokes service.php()our server on the below url then it passes our input to the server for processing
//after server is done he returns response to this client which is always listening after passing inputs
//this url is also called endpoint

            $client = new nusoap_client('service.php?wsdl&debug=0', 'wsdl');
        //here we are checking if posting has been done or not
        if (!empty($_POST)) {



            $station = $_POST['stationname'];
			
//check if stationname is empty
            if (!empty($station)) {


//call server function and pass to it station name to retrieve audio
                $audio = $client->call('audio', $stationname = array('stationname' => $audio));
                //upon return the audio is store in audio variable above ($audio)
//then back to the user the audio or give the user feedback if audio exists or not

                if (!empty($audio)) {
                    echo '=======================================================' . '</br>';
                    echo 'The audio of ' . $station . ' is .' . $audio . '</br>';
                    echo '=======================================================' . '<br>';
                } else {
                    echo '=======================================================' . '<br>';
                    echo 'The audio of ' . $station . ' is .' . $audio . '<a href="http://thiongo.me.ke/audio/sample.mp3" title="Download Audio File" target="_blank">Download File</a></br>';
                    echo '=======================================================' . '<br>';
                }
            } else {
                echo '=======================================================' . '<br>';
                echo 'Please enter station name ' . '<br>';
                echo '=======================================================' . '<br>';
            }
        }
        ?>
        <!-- Form for entering station name to enquire audio for-->
        <form id="calc" method="post" action="">
            <p>Welcome to Audio Request Service </p>
            <p>To get audio of a station enter station name below</p>
            <label name="audio">Enter Station Name:(inooro, ramogi, chamgei)</label>

            <input id="stationname" name="stationname" type="text"/>
            <br><br><br>
            <input name="submit" type="submit" value="Send"/>
        </form>
    </body>
</html>

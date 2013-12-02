<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251"/>
<title>RADIO AND ONLINE MEDIA MONITORING IN KENYA  |  Audio Request Service</title>
<link href="css/reset.css" rel="stylesheet" type="text/css" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/nivo-default.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen" />
<script type="text/javascript" src="js/jquery-1.6.1.min.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript" src="js/slides.min.jquery.js"></script>
<script type="text/javascript" src="js/nivo-slider/jquery.nivo.slider.pack.js"></script>
<script type="text/javascript" src="js/superfish-menu/hoverIntent.js"></script>
<script type="text/javascript" src="js/superfish-menu/superfish.js"></script>
<script type="text/javascript" src="js/scrolltop/scrolltopcontrol.js"></script>
<script type="text/javascript" src="js/prettyPhoto/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="js/jquery.featureList-1.0.0.js"></script>
<script type="text/javascript" src="js/swfobject/swfobject.js"></script>
<script type="text/javascript" src="js/easing/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/kwicks/jquery.kwicks-1.5.1.pack.js"></script>
<script type="text/javascript" src="js/mosaic/mosaic.1.0.1.js"></script>
<!--GOOGLE FONTS-->
<link href='http://fonts.googleapis.com/css?family=Shanti' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Mako' rel='stylesheet' type='text/css' />
<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Crimson+Text:regular,regularitalic,600,600italic,bold,bolditalic' type='text/css'/>
<link href='http://fonts.googleapis.com/css?family=Droid+Sans:regular,bold' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Play' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Terminal+Dosis+Light' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Crushed' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Puritan' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Anonymous+Pro' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Vollkorn' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=OFL+Sorts+Mill+Goudy+TT' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Nobile' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Molengo' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Allerta' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Metrophobic' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Francois+One' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Rokkitt' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Didact+Gothic' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=News+Cycle' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Special+Elite' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Kreon' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Orbitron' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Radley' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Bentham' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Josefin+Sans' rel='stylesheet' type='text/css' />
<!--GOOGLE FONTS-->
</head>
<body>
	<!-- TOP LINE --> 
    <div class="top_line"></div>
	<!-- END TOP LINE  -->
    <!-- HEADER WRAPPER -->
    <div class="wrapper">
		<!-- HEADER -->
        <!-- LOGOTYP -->
        
        <!-- END LOGOTYP -->
        <!-- ADDDITIONAL INFORMATION -->
        <div class="two-third header-menu last">
        <!-- END ADDDITIONAL INFORMATION -->
        <!-- MAIN NAVIGATION -->
        <div class="menu">
        <div class="menu-cloud">
       
        </div>
            <div class="menu-right-closed"></div>
            <div class="menu-bg">
                	<ul class="sf-menu">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="#">Features</a>
                            
                        </li>
                        <li><a href="#">Pages</a></li>
                              
                        <li><a href="#">Portfolio</a>
                            
                        </li>
                        <li><a href="#">Blog</a>
                            
                        </li>
                        <li><a href="#">Contact us</a></li>		
                	</ul>
				</div>
            <div class="menu-left-closed"></div>
            </div>
        </div>
        <!-- END MAIN NAVIGATION -->
		<!-- END HEADER -->
       
    <!-- CONTENT WRAPPER -->
	
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
                    
					echo 'The audio of ' . $station . ' is ' . $audio . '<a href="http://thiongo.me.ke/audio/sample.mp3" title="Download Audio File" target="_blank">Download File</a></br>';
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
          
				
        
		
      
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	</div>
	<!-- END CONTENT -->
	<!-- FOOTER -->
	<div class="break2">
	<div class="wrapper">
       
			</div>
			
            
        </div>
	</div>
	</div>
	<div class="footer-line">
    
    </div>
    <div class="wrapper">
        
    </div>
</body>
</html>

<html><body>
 <h1> DocSMS </h1>
 <?php
    /* Send an SMS using Twilio. You can run this file 3 different ways:
     *
     * - Save it as sendnotifications.php and at the command line, run 
     *        php sendnotifications.php
     *
     * - Upload it to a web host and load mywebhost.com/sendnotifications.php 
     *   in a web browser.
     * - Download a local server like WAMP, MAMP or XAMPP. Point the web root 
     *   directory to the folder containing this file, and load 
     *   localhost:8888/sendnotifications.php in a web browser.
     */
 
    // Step 1: Download the Twilio-PHP library from twilio.com/docs/libraries, 
    // and move it into the folder containing this file.
    require "Services/Twilio.php";
 
    // Step 2: set our AccountSid and AuthToken from www.twilio.com/user/account
   $AccountSid = "AC3836af69793bd0105fabf4b52da1b083";
   $AuthToken = "75ae98a0100ba6a252348933f55d9274";
   //$AccountSid = "AC4bd2202c4c684e728de2b8426947136f";
   //$AuthToken = "04eb54b5ec2d8b8ab0d9900a42b2d4bc";
 
    // Step 3: instantiate a new Twilio Rest Client
    $client = new Services_Twilio($AccountSid, $AuthToken);
 global $name,$ans, $response, $number;
//$number = $_REQUEST['From'];
    // Step 4: make an array of people we know, to send them a message. 
    // Feel free to change/add your own phone number and name here.
  // $people = array("+15128930163" => "Rehan Kadiwala", $number => "Anyone",
	//$people = array("+15512259133" => "Akshay Bhoge",
					
        
        
  //  );
	
  //  global $ans; 
     // Step 5: Loop over all our friends. $number is a phone number above, and 
    // $name is the name next to it
    
  //  $people = array("+15128930163" => "Rehan Kadiwala",);
 
	// if the sender is known, then greet them by name
	// otherwise, consider them j		ust another monkey
          $body = $_REQUEST['Body'];
		  $number = $_REQUEST['From'];
/* Remove formatting from $body until it is just lowercase characters without punctuation or spaces. */
$result = preg_replace("/[^A-Za-z0-9]/u", "", $body);
$result = trim($result);
$result = strtolower($result);
$response="Please try again";
$ans ='Try again...';
/* ##Router## */
switch ($result) {
    case '07026':
       $ans= A();
	  // $ans= F();
        break;
    case '07027':
        $ans=B();
		//$ans= G();
        break;
    case '07028':
        //$ans=H();
        $ans=C();
		break;
    case '07029':
		//$ans=I();
        $ans=D();
        break;
	case '07025':
        $ans=E();
        break;
    /* Add new routing logic above this line. */
    default:
      $ans=  index();
}
 //<?php
// TODO: People want tracking on keywords.
/**
 * Include twilio-php, the offical Twilio PHP Helper Library, which can be found at
 * http://www.twilio.com/docs/libraries
 */
//include('Services/Twilio.php');
/* ## Controller ## */
function index(){
	//$response = new Services_Twilio_Twiml();
	$response = "Sorry, zipcode not found. Please try again";
	return $response;
}
function A(){
	//$response = new Services_Twilio_Twiml();
	$response = "Dr. Philips,
	Physiologist,
	9am-5pm,
	45,Harrison
	5122111221.
	Dr. Mike,
		General,
		9am-3pm,
		 67,Van Vaghen
		5122722233";
	return $response;
}
function B(){
	//$response = new Services_Twilio_Twiml();
	$response = "Dr. Andrew,
	Orthologist,
	9am-5pm,
	 31,Edison
	512211888.
	Dr. Harvey,
		Cosmetic Surgeon,
		9am-3pm,
		 67,Bergen ave
		512254444";
	return $response;
}
function C(){
	//$response = new Services_Twilio_Twiml();
	$response = "Dr. James,
	Cardiologist,
	9am-3pm,
	 20,Jsq
	512255555.
	Dr. Matt,
		Surgeon,
		9am-3pm,
		 47,William St,
		5167888888";
	return $response;
}
function D(){
	//$response = new Services_Twilio_Twiml();
	$response = "Dr. Scott,
	Dentist,
	10am-6pm,
	 10, Bayonne
	512277777.
	Dr. Ross,
		Gynacologist,
		9am-3pm,
		 33,Warren st
		88887878";
	return $response;
	}
function E(){
	//$response = new Services_Twilio_Twiml();
	$response = "Dr. Micheal,
	Radiologist,
	9am-3pm,
	67,Park Row
	5122787878";
	return $response;
	}
/* function F(){
	//$response = new Services_Twilio_Twiml();
	$response = "Dr. Mike,
	General,
	9am-3pm,
	 67,Van Vaghen
	5122722233";
	return $response;
	}
function G(){
	//$response = new Services_Twilio_Twiml();
	$response = "Dr. Harvey,
	Cosmetic Surgeon,
	9am-3pm,
	 67,Bergen ave
	512254444";
	return $response;
	}
function H(){
	//$response = new Services_Twilio_Twiml();
	$response = "Dr. Matt,
	Surgeon,
	9am-3pm,
	 47,William St,
	5167888888";
	return $response;
	}
function I(){
	//$response = new Services_Twilio_Twiml();
	$response = "Dr. Ross,
	Gynacologist,
	9am-3pm,
	 33,Warren st
	88887878";
	return $response;
	} */
	
	
	
  //  foreach ($people as $number => $name) {

 
        $sms = $client->account->messages->sendMessage(
 
        // Step 6: Change the 'From' number below to be a valid Twilio number 
        // that you've purchased, or the (deprecated) Sandbox number
            "+17852279467", 
			//"+14794372561",
            // the number we are sending to - Any phone number
            $number,
 
            // the sms body
          	
        $ans
          
        );
 
        // Display a confirmation message on the screen
        echo "Enter zipcode..";
  //  }
    
    // now greet the sender
	header("content-type: text/xml");
	echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
	print ('<?xml version="1.0" encoding="UTF-8" ?> <Response> <Message>' . $ans . '</Message> </Response>');
	
    
    
    ?>
    </body></html>
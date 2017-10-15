<?php
 
// ==== Control Vars =======
$strFromNumber = "+1xxx";
$strToNumber = "+639102878753";
$strMsg = "Did you catch Olivier's nip slip last night? OMG right?"; //Olivier accidentally pulled up a porn site on a projector 
$aryResponse = array();
 

    // include the Twilio PHP library - download from 
    // http://www.twilio.com/docs/libraries/
    require_once ("inc/Services/Twilio.php");
 
    // set our AccountSid and AuthToken - from www.twilio.com/user/account
    $AccountSid = "ACdf1f33599a236bdf13d7e5346bd4ff61";
    $AuthToken = "366644d9ad3d68a1eca92c1a196cca98";
 
    // ini a new Twilio Rest Client
    $objConnection = new Services_Twilio($AccountSid, $AuthToken);


    // Send a new outgoinging SMS by POSTing to the SMS resource */
    $bSuccess = $objConnection->account->sms_messages->create(
        
        $strFromNumber, 	// number we are sending From 
        $strToNumber,           // number we are sending To
        $strMsg			// the sms body
    );

		
    $aryResponse["SentMsg"] = $strMsg;
    $aryResponse["Success"] = true;
    
    
    echo json_encode($aryResponse);

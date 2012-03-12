<?php
/*******************************************************************************
	@file : auth_failure.php 
	
	Template that handles Service Validation errors.
*******************************************************************************/

/**
	viewAuthFailure : Callback that displays the error.	
	
	@file auth_success.php 
	@author PGL pgl@erasme.org
	@param $t an array of param with 'code', and 'message' keys.
	@returns
*/
function viewAuthFailure($t){
    if (! IS_SOAP) {
        echo 	"<cas:serviceResponse xmlns:cas='http://www.yale.edu/tp/cas'>
    <cas:authenticationFailure code=\"".$t['code']."\">
        ".$t['message']."
    </cas:authenticationFailure>
</cas:serviceResponse>";
    } else {
        /** @todo : **** FL **** gérer erreur soap */
    }
}
<?php
/**
	viewAuthHeader retrieving header for CAS2 token.
	 
	@file auth_header.php
	@author PGL pgl@erasme.org
	@param 
	@returns a string containg the xml header
*/
function viewAuthHeader() {
return "<cas:serviceResponse xmlns:cas='http://www.yale.edu/tp/cas'>
	<cas:authenticationSuccess>
		";
}

?>
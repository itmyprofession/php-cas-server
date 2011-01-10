<?php 
/*******************************************************************************
	@filename : ticket.php 
	@description : Classe de gestion des tickets ST et TGT. Comporte 2 m�thodes 
	publiques de restitution de tickets.
*******************************************************************************/
class ticket {
	const ST_PREFIX = 'ST';
	const TGT_PREFIX = 'TGT';
	const SEPARATOR = '-';
	const NUMERICAL = "0123456789";
	const ALPHABETICAL = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";


	// Constructeur
	function __construct($pTypeTicket) {
	}

	// Renvoie une chaine de caract�re random en fonction du charset et de la longueur d�sir�e
	private function getRadomString($pCharSet, $pLength){
		$randomString = "";
		for ($i=0; $i<$pLength; $i++) $randomString .= $pCharSet[(mt_rand(0,(strlen($pCharSet)-1)))];
		return $randomString;
	}
	
	// Renvoyer un nombre compris entre 1 et 99999
	private function getUniqueId($pLen = 5) {
		return getRadomString(self::NUMERICAL, $pLen);
	}

	// Renvoyer une cl� 
	private function getUniqueKey($pLen = 20) {
		return getRadomString(self::ALPHABETICAL, $pLen);
	}

	// Revouyer un service Ticket.
	public function getServiceTicket() {
		return self::ST_PREFIX.self::SEPARATOR.ticket::getUniqueId(5).self::SEPARATOR.ticket::getUniqueKey(20);
	}
	
	// Revouyer un service Ticket.
	public function getTicketGrantingTicket() {
		return self::TGT_PREFIX.self::SEPARATOR.ticket::getUniqueId(6).self::SEPARATOR.ticket::getUniqueKey(30);
	}
}

?>
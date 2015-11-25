<?php

class Document {
	var $files = [];
	var $reservations = [];

	function addFile ($fileString) {
			$this->files[] = $fileString;
	}

	function getScan () {
		return $this->files[0];
	}

	function getLastVersion () {
		return $this->files[sizeof($this->files)-1];
	}

	function addReservation ($reservation) {
		$this->reservations[] = $reservation;
	}

	function isReserved () {
		 for ($a = 0; $a < sizeof($this->reservations); $a++)
		 	if (!$this->reservations[$a]->isExpired())
		 		return True;
		 return False;
	}
}
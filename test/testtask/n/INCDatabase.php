<?php
/**
* network connector 4 database
**/
interface INCDatabase {
	public function connect($idOp)//:bool
	public function disconnect($idOp)//:bool
	public function query($idOp, $a)//:* if result == null then error occoured
	public function get_queryOpResultCode($idOp)//:int 0 means no error
	public function get_queryOpDBErrorDetails($idOp)//:string	
}
?>
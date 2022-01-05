<?php
/**
* data unit - agent: operation result info
**/
interface IDUAORI {
	public function c($a);//:int //get_CODE(a)//a - ierarchy level / step number
	public function l($a);//:int //get_LAYER
	public function t($a);//:int //get_TYPE
	public function an($a);//:string //get_AGENT_NAME //agent name
	public function g_dr();//get_dataResult //:*
	public function s_dr($a);//set_dataResult //:*
	
	public function g_raw();//get rawdata object (for quick serialisation)//:*

	public function logOR($aN, $layer, $type, $code);//log current operation result
}
?>
<?php
/**
* FAST version 4 production mode
* data unit - agent: operation result info
**/
class DUAORIP extends DUAORI implements IDUAORI {

	//function __construct($dataResult) {
	public function g_raw() {//get rawdata object (for quick serialisation)//:*
		return (object)[
			"d" => $this->dataResult
			,"C" => $this->c//:int //get_CODE
			,"L" => $this->l//:int //get_LAYER
			,"T" => $this->t//:int //get_TYPE
			,"A" => $this->an//:string //get_AGENT_NAME //agent name
		];
	}
	
}
?>
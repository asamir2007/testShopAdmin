<?php
/**
* data unit - agent: operation result info
**/
class DUAORI implements IDUAORI {

	function __construct($dataResult) {
		$this->dataResult = $dataResult;//:string
		
		$this->c = Array();//:int //get_CODE(a)//a - ierarchy level / step number
		$this->l = Array();//:int //get_LAYER
		$this->t = Array();//:int //get_TYPE
		$this->an = Array();//:string //get_AGENT_NAME //agent name
	}

	public function logOR($aN, $layer, $type, $code) {//log current operation result
		array_push($this->an, $aN);
		array_push($this->l, $layer);
		array_push($this->t, $type);
		array_push($this->c, $code);
	}
	
	public function g_dr() {//get_dataResult //:*
		return $this->dataResult;//:int
	}
	public function s_dr($a) {//set_dataResult //:* 
		return $this->dataResult=$a;//:int
	}

	public function c($a) {//:int //get_CODE(a)//a - ierarchy level / step number
	return $this->c[$a]; }
	public function l($a) {//:int //get_LAYER
	return $this->l[$a];}
	public function t($a) {//:int //get_TYPE
	return $this->t[$a];}
	public function an($a) {//:string //get_AGENT_NAME //agent name
	return $this->an[$a];}
	
	protected $c;// = Array();//:int //get_CODE(a)//a - ierarchy level / step number
	protected $l;// = Array();//:int //get_LAYER
	protected $t;// = Array();//:int //get_TYPE
	protected $an;// = Array();//:string //get_AGENT_NAME //agent name
	protected $dataResult;//*

	
	const ID_L_DP = 0;//layer: data processing
	const ID_L_DS = 1;//data storage related
	const ID_L_NET = 2;//network related
	const ID_L_ACCESS = 3;//access policy related
	const ID_T_ENV = 100;//type: agent environment related (wrong system state)
	const ID_T_OPT = 101;//operation task description related (wrong arguments or wrong DU suplied)
	const ID_T_OP = 102;//operation business logic
	const ID_C_S = 1000;//code: success
	const ID_C_F = 1001;

	
	/**
	* PROTIP: this is default solution 4 debug ready development outta box. you can override it if u want custom production version ^_^
	*/
	public function g_raw() {//get rawdata object (for quick serialisation)//:*
		return (object)[
			"data" => $this->dataResult
			,"CODE" => $this->c//:int //get_CODE
			,"LAYER" => $this->l//:int //get_LAYER
			,"TYPE" => $this->t//:int //get_TYPE
			,"ANAME" => $this->an//:string //get_AGENT_NAME //agent name
		];
	}
	
}
?>
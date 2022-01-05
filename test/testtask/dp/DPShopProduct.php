<?php
/**
* data parser. ideally there should be 2 parsers - 1 for each interface. and ofcourse, this can be changed later at no cost
* //JD// instantinating parser maybe not the best idea, but this gives interface support for any major lang (Java, PHP).
* PROTIP: this can be optimized for PHP. the main idea is to reinforce architecture using interface conception. regardless of target language capabilities
**/
class DPShopProduct implements DPShopProductDB, IDPShopProductHTTP {
	public function constructProduct_SQLResult($a) {//:IDUShopProduct
		
	}
	
	public function constructProduct_JSON($a) {//:IDUShopProduct
		
	}
}
?>
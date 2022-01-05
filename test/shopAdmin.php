<?php
require_once('jinanoimateydragoncat/utils/flow/agents/d/IDUAORI.php');
require_once('jinanoimateydragoncat/utils/flow/agents/d/DUAORI.php');

require_once('testtask/c/ma/gateway/MReqIn.php');
require_once('testtask/c/ma/app/MShop.php');
require_once('testtask/c/ma/app/MShopAdmin.php');

require_once('testtask/d/app/IDUShopProduct.php');
require_once('testtask/d/app/IDUPrice.php');
require_once('testtask/d/app/IDUDICommonItem.php');
require_once('testtask/d/app/IDUDBItem.php');
require_once('testtask/d/app/IDUShopProductBase.php');
require_once('testtask/d/app/DUShopProduct.php');
require_once('testtask/d/app/DUShopCatProduct.php');

require_once('testtask/d/sys/DUAORIP.php');



require_once('testtask/dl/DLShopProducts.php');

require_once('testtask/c/sys/IUniversalFactory.php');
require_once('testtask/c/sys/UniversalFactoryDebug.php');


//responce mode. use "?rsM=humanDebugger" if u r using it as a living human being debugger
$rsm = $_REQUEST['rsM'];
$uf = new UniversalFactoryDebug($rsm);


MReqIn::processReq();

exit;
?>
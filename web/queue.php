<?php
// +----------------------------------------------------------------------+
// | KalonQue [ Kalon Queue ]                                             |
// +----------------------------------------------------------------------+
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )              |
// +----------------------------------------------------------------------+
// | Site:   http://blog.csdn.net/phpkernel                               |
// +----------------------------------------------------------------------+
// | Author: Kalon <http://weibo.com/kalon>                               |
// +----------------------------------------------------------------------+
define("KALONQUE_PATH" , "");
require_once KALONQUE_PATH . '/conf/kalonque_base.php ';

define('CODE_SUCCESS', 0);
define('CODE_FAILED',  1);

$business = $_GET['name'];
$item     = $_GET['data'];
if (empty($business) || empty($item)) {
	show(CODE_FAILED, 'params error');
}

try {
    require_once KALONQUE_BASE_PATH . '/Controller/Default.php';
    $controller = new KalonQueControllerDefault($KALONQUE_CONF);
    
    $controller->setBusiness($business);
    
    $controller->addStoreItem($item);
    
    $controller->updateMonitor();
} catch (Exception $e) {
    show(CODE_FAILED, $e->getMessage());    
}

show(CODE_SUCCESS);

function show($code, $msg = '')
{
	echo $code . ' ' . $msg;
	exit;
}
?>
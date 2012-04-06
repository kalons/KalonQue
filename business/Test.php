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
require_once  KALONQUE_BASE_PATH . '/Business/Default.php';

class KalonQueBusinessTest extends KalonQueBusinessDefault
{	
    public function _main()
    {
    	sleep(1);
        echo  __CLASS__ . " loaded data: " . $this->_DATA_LOAD . "\n";
    }
}
?>
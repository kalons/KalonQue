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

interface KalonQueMonitorInterface
{
    public function init();
    
    public function update();

    public function isUpdated();
}
?>
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

require_once  KALONQUE_BASE_PATH . '/Business/Abstract.php';

class KalonQueBusinessDefault extends KalonQueBusinessAbstract
{
    protected $_monitorType = 'fifo';
    
    protected $_storeType   = 'file';
    
    protected $_plugins = array();
    
    
    
    public function initStore()
    {
        $store     = $this->_controller->getStore();
        $bName     = $this->_name;
        $dataPath  = $this->_controller->getConfig('KALONQUE_DATA_PATH');
        if (!is_dir($dataPath))
        	@mkdir($dataPath, 0777);
        	
        $storePath = $dataPath . '/' . $bName;  
        $store->setItemFilePath($storePath);
        return $store;
    }
    
    public function initMonitor()
    {
        $monitor  = $this->_controller->getMonitor();
        $bName    = $this->_name;
        $varPath  = $this->_controller->getConfig('KALONQUE_VAR_PATH');
        if (!is_dir($varPath))
        	@mkdir($varPath, 0777);
        	
        $fifoPath = $varPath . '/'. $bName . '/' . $bName . '.fifo';
        $monitor->setFifoPath($fifoPath);
        return $monitor;
    }

    public function PARSE_DATA($item)
    {
    	@$tmp = unserialize($item);
    	if (false !== $tmp)
    	    return $tmp;
    	else
    	    return $item;    
    }    
    
}
?>
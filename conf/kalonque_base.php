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
define('KALONQUE_VERSION',  'v1.0');

define('KALONQUE_ROOT_PATH', dirname(dirname(__FILE__)));

define('KALONQUE_BASE_PATH',    KALONQUE_ROOT_PATH . '/kernel');

define('KALONQUE_VAR_PATH',     KALONQUE_ROOT_PATH . '/var');

define('KALONQUE_CONF_PATH',    KALONQUE_ROOT_PATH . '/conf');

define('KALONQUE_DATA_PATH',    KALONQUE_ROOT_PATH . '/data');

define('KALONQUE_LOG_PATH',     KALONQUE_ROOT_PATH . '/log');

define('KALONQUE_BUSI_PATH',    KALONQUE_ROOT_PATH . '/business');

define('KALONQUE_PLUGIN_PATH',  KALONQUE_ROOT_PATH . '/plugin');

define('KALONQUE_INCLUDE_PATH', KALONQUE_ROOT_PATH . '/include');

define('KALONQUE_TMP_PATH',     KALONQUE_ROOT_PATH . '/tmp');


define('KALONQUE_CONFIG_FILE',  KALONQUE_ROOT_PATH . '/../kalonque_config.php');

$KALONQUE_CONF = array();
$KALONQUE_CONF['KALONQUE_VAR_PATH']     = KALONQUE_VAR_PATH;
$KALONQUE_CONF['KALONQUE_CONF_PATH']    = KALONQUE_CONF_PATH;
$KALONQUE_CONF['KALONQUE_DATA_PATH']    = KALONQUE_DATA_PATH;
$KALONQUE_CONF['KALONQUE_LOG_PATH']     = KALONQUE_LOG_PATH;
$KALONQUE_CONF['KALONQUE_BUSI_PATH']    = KALONQUE_BUSI_PATH;
$KALONQUE_CONF['KALONQUE_INCLUDE_PATH'] = KALONQUE_INCLUDE_PATH;
$KALONQUE_CONF['KALONQUE_TMP_PATH']     = KALONQUE_TMP_PATH;
$KALONQUE_CONF['KALONQUE_PLUGIN_PATH']  = KALONQUE_PLUGIN_PATH;
$KALONQUE_CONF['DAEMON_MODEL']          = true;
$KALONQUE_CONF['DO_EXIT_CLEAN']         = true;

require_once KALONQUE_CONFIG_FILE;

$KALONQUE_CONF = array_merge($KALONQUE_CONF, $KALONQUE_USER_CONF);
?>
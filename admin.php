<?php
/**
 * SunCMS For utf-8
 * This is an open-source software, follow the Apache License 2.0 (http://www.apache.org/licenses/LICENSE-2.0)
 * Copyright: Author All rights reserved.
 * @Author: Sun Qinye  sunqinye@gmail.com
 * @Github: https://github.com/sunqinye/SunCMS
 */
define('IN_SunCMS',true);
define("DEBUG", true);
define('FILE_PATH',dirname(__FILE__).'/');
define('ADMIN_ENTER',basename($_SERVER['PHP_SELF']));

require_once(FILE_PATH.'admin/common.php');
?>
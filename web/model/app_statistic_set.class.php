<?php
if(!defined('CAN_RUN')) {
	exit('Access Denied');
}

class app_statistic_set extends base_set {
	protected $table_name = 'appreport_day';
	protected $id_name = 'sid';

}
?>

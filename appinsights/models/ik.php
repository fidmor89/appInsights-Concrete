<?php   defined('C5_EXECUTE') or die('Access Denied');
 
class IK extends Object{
	 
	 public function add($_ik) {
		//Insert or replace a Instrumentation Key
		$db = Loader::db();
		$db->Execute('INSERT INTO btAppInsights (bID,IK) VALUES(1,?) ON DUPLICATE KEY UPDATE IK = ?', array($_ik, $_ik));
	}
	
	public function getIK() {
		//get the Instrumentation Key from the Data Base
		$db = Loader::db();
		return $db->GetOne('select IK from btAppInsights where bID = ?', array(1));
	}
}
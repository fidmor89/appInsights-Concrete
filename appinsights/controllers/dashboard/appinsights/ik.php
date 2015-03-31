<?php  defined('C5_EXECUTE') or die("Access Denied.");

Loader::model('ik','appinsights'); 
class DashboardAppInsightsIKController extends DashboardBaseController { 	 	

	public function on_start() {
		parent::on_start();
		$this->set('IK', IK::getIK());
	}
	
	public function add_new_ik() {
			$txt = Loader::helper('text');
		if (strlen($this->post('txt'))>=30)
		{
			IK::add($this->post('txt'));
			$this->redirect("/dashboard/appinsights/ik", "ik_added");
		}
		else 
		{
			$this->redirect("/dashboard/appinsights/ik", "ik_error");
		}
	}
	public function ik_error() {
		$this->set('message', t('Enter a valid Instrumentation Key.'));
	}
	
	public function ik_added() {
		$this->set('message', t('Instrumentation Key added.'));
	}
	
}
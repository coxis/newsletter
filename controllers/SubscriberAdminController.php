<?php
/**
@Prefix('admin/subscribers')
*/
class SubscriberAdminController extends \Coxis\Admin\Libs\Controller\ModelAdminController {
	static $_model = 'Coxis\Newsletter\Models\Subscriber';
	static $_models = 'subscribers';
	
	function __construct() {
		$this->_messages = array(
			'modified'			=>	__('Subscriber modified with success.'),
			'created'			=>	__('Subscriber created with success.'),
			'many_deleted'			=>	__('Subscribers deleted with success.'),
			'deleted'			=>	__('Subscriber deleted with success.'),
			'unexisting'			=>	__('This subscriber does not exist.'),
		);
		parent::__construct();
	}
	
	public function formConfigure($model) {
		$form = new \Coxis\Admin\Libs\Form\AdminModelForm($model, $this);
		
		return $form;
	}
}
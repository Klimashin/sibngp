<?php

namespace App\Controller;

class Base extends \App\Page {

	public function action_index() {
		$this->view->subview = 'base';
		$this->view->message = 'Have fun coding';
	}

}

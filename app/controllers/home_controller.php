<?php
	
class HomeController extends AppController {
	var $uses = array();

	function tara($c='') {
		$info = $this->loadC();
		$this->set('tara_info',$info[$c]);
		$this->set('tara_name',$c);
		$this->set('title_for_layout','Birouri electorale din '. $c);
	}

	function tari() {
		$this->set('c',$this->loadC());
		$title = "Birourile electorale a Moldovei în diferite ţări";
		$this->set('title',$title);
		$this->set('title_for_layout',$title);
	}

	function index() {
		$this->set('title_for_layout','Centru.MD (beta) - Un site liber si deschis ce poate fi ameliorat de tine. Începe acum.');
	}

	function loadC() {
		global $countries;
		if (!isset($countries)) include dirname(dirname(__FILE__)). '/data/sectii.php';
		return $countries;
	}
}
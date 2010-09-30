<?php
	
class HomeController extends AppController {
	var $uses = array();
    var $components = array('Simplepie');

	function tara($c='') {
		$info = $this->loadC();
		$this->set('tara_info',$info[$c]);
		$this->set('tara_name',$c);
		$this->set('title_for_layout','Lista secţiilor de votare a Moldovei din '. $c);
	}

	function tari() {
		$this->set('c',$this->loadC());
		$title = "Secţiile de votare a Moldovei în diferite ţări";
		$this->set('title',$title);
		$this->set('title_for_layout',$title);
	}

	function index() {
		$this->set('title_for_layout','Centru.MD (beta) - Un site liber si deschis ce poate fi ameliorat de tine. Începe acum.');
        $items = $this->Simplepie->feed('http://www.facebook.com/feeds/page.php?format=atom10&id=163699546976614',
            array('fields'=>array('date','content'),'length'=>3) );
        $this->set('items', $items);
	}

	function loadC() {
		global $countries;
		if (!isset($countries)) include dirname(dirname(__FILE__)). '/data/sectii.php';
		return $countries;
	}
}
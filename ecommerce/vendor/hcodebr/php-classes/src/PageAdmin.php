<?php 

namespace Hcode;

class PageAdmin extends Page {
															 
	public function __construct($opts = array(), $tpl_dir = "C:/xampp/htdocs/CursoPHP/ecommerce/views/admin/")
	{ 
		echo $tpl_dir;
		parent::__construct($opts, $tpl_dir);

	}

}

 ?>
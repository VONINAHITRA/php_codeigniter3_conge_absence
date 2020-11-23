<?php 
defined('BASEPATH') OR exit('No direct script acces alloweb');

require_once dirname(__file__).'/tcpdf/tcpdf.php';
/**
 * 
 */
class Export_pdf extends TCPDF
{   
	 protected $ci;
	
	function __construct()
	{
		$this->ci =& get_instance();

	}
}

 ?>
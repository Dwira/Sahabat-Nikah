<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$route['(:any)'] = "pages/view/$1";
$route['default_controller'] = "pages/view";

/* End of file routes.php */
/* Location: ./application/config/routes.php */
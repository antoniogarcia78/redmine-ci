<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 */
/**
 */
class Welcome extends CI_Controller
{
	/**
	 */
	public function index()
	{
		echo 'welcome - redirect to login if not logged in, else redirect to my page';
	}
}
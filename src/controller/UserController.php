<?php
use libs\Controller;
Class UserController extends Controller
{
	public function __construct()
	{
		parent::__construct();
	}
	 public function index(){

            return $this->view->load("user/login");
         
			
        }
}
?>
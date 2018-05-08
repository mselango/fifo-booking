<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Admin Controller.
 *
 * @package    FIFO
 * @author     Moorthi.M
 * @copyright  (c) 2014 FIFO
 * @website    http://www.fifobooking.com/
 *
 */
class Admin extends CI_Controller {
	
	function __construct()
    {
        parent::__construct();
		$this->no_cache();
		$this->load->model('manage_model');
		$this->load->model('common_model');
	}
	
	protected function no_cache()
	{
		header('Cache-Control: no-store, no-cache, must-revalidate');
		header('Cache-Control: post-check=0, pre-check=0',false);
		header('Pragma: no-cache'); 
	}

	public function index()
	{
		$data=array();
		
		
		if($this->input->post("username"))
		{
			//exit();
			$result = $this->user_auth->login($this->input->post("username"),$this->input->post("password"),$this->input->post("txtAdmin"));
			
			if($result=="success")
			{
				redirect(BASE_URL."admin/dashboard/");
			}
			else
			{
				$data['error']=$result;
			}
		}
		
		$this->load->view('admin/login',$data);
	}
	public function dashboard()
	{
		$data=array();
		$this->load->view('admin/dashboard',$data);
	}
	
	public function logout()
	{
		$this->load->model('login_model');
		
		//$login_id = $this->user_auth->get_user_login_id();
		
		//$this->login_model->update_log_data($login_id);
		
		$this->user_auth->logout();
		
		redirect(BASE_URL."admin?logout=success");
	}
}
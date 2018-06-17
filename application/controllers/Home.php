<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Home Controller.
 *
 * @package    FIFO BOOKING.COM
 * @author     Moorthi.M
 * @copyright  (c) 2014 BVTS Team
 * @website    https://www.fifobooking.com/
 *
 */
class Home extends CI_Controller {
	
	function __construct()
    {
        parent::__construct();
		$this->no_cache();
		$this->load->model('manage_model');
		$this->load->model('common_model');
        $this->load->model('hotel_model');
        $this->load->library('pagination');
        $this->load->library('csvimport');
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
		$this->load->view('theme/index',$data);
	}
	
	public function searchlists()
	{
		$data=array();
        $searchKey = $this->input->get('search_hotel');
        $data['hotelList'] = $this->hotel_model->getHotelSearchList($searchKey);
		$this->load->view('theme/searchlists',$data);
	}
	
	public function hoteldetails($hotelId)
	{
		$data=array();
        $hotelId = base64_decode($hotelId);
        $data['hotel'] = $this->hotel_model->getHotelDetails($hotelId);
        $data['amenties'] = $this->hotel_model->getHotelAmenties($hotelId);
        $data['rooms'] = $this->hotel_model->getHotelRooms($hotelId);
        $this->load->view('theme/hoteldetails',$data);
	}
	
	public function bookingtraveller()
	{
		$data=array();
		$this->load->view('theme/bookingtraveller',$data);
	}
	
	public function contactus()
	{
		$data=array();
		$this->load->view('theme/contactus',$data);
	}
	
	public function aboutus()
	{
		$data=array();
		$this->load->view('theme/aboutus',$data);
	}
	
	public function register(){
		$data=array();
		if(!empty($this->input->post())){
			
			$postdata = array(
			           'email_id'=>$this->input->post('userEmail'),
					   'password'=>$this->input->post('userPass'),
					   'terms_conditions'=>$this->input->post('agreePolicy'),
					   'special_offers'=>$this->input->post('dispatchEmail')
					  ); 
			
			$check_exist = $this->common_model->check_data_exist('fifo_customers',array('email_id'=>$this->input->post('userEmail')));
			
			
			if(count($check_exist) == 0){
				
				$postdata['created_date']=date('Y-m-d H:i:s');
				$result = $this->common_model->insert_data('fifo_customers',$postdata);
				if($result){
					$data['success'] = "Registration was completed successfully.";
				}else{
					$data['error'] = "Error occured.";
				}
			}else{
				
				$data['user_exists'] = "Email id already exists.";
				
			}
			
			echo json_encode($data);
		}
	}
	
	public function login_process(){
		$data=array();
		$userEmail = $this->input->post("user_email");
		$userPass = $this->input->post("user_pass");
		$result = $this->common_model->login_validate($userEmail,$userPass,"fifo_customers");
		
		if(!$result){
			$data['error'] = "Invalid username and/or password.";
		}else{
			
			$data['success'] = "Login successful.";
		}
		echo json_encode($data);exit;
	}
	

}
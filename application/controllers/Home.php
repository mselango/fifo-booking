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
        $this->load->library('email');
        $this->load->library('form_validation');
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
		$data['result'] = "hotel";
		$queryParam = array("status"=>1);
		$data['cmshotellists'] = $this->common_model->get_by_where('cms_hotels',$queryParam);

        $queryParam = array("status"=>0);
		$data['hotellists'] = $this->common_model->get_by_where('fifo_hotels',$queryParam);

		$data['hotelcitylists'] = $this->common_model->getDistinctQuery('fifo_hotel_details','city');
		//print_r($data);exit();
		$this->load->view('theme/index',$data);
	}

	public function homestays()
	{
		$data=array();
		$data['result'] = "homestay";
		$this->load->view('theme/homestays',$data);
	}
	
	public function searchlists()
	{
		$data=array();
		$data['result'] = "hotel";
		$data['searchhotellists'] = $this->hotel_model->getHotelLists("");
		$data['minimumpricelists'] = $this->hotel_model->getMinimumPrice();
		$data['accommodationlists'] = $this->hotel_model->getAccommodationType(1);
		$data['amenties'] = $this->hotel_model->getAmenties(1);
		$this->load->view('theme/searchlists',$data);
	}
	
	public function hoteldetails($hotelId = '')
	{
		$data=array();
		$data['result'] = "hotel";
		if(!empty($hotelId)) {
			$data['fifo_Hotels'] = $this->hotel_model->getOneHotel($hotelId);
			$data['fifo_Hotels_Details'] = $this->hotel_model->getOneHotelDetails($hotelId);
			$data['fifo_Hotels_Rooms'] = $this->hotel_model->getOneHotelRooms($hotelId);
		}
		$this->load->view('theme/hoteldetails',$data);
	}
	
	public function bookingtraveller()
	{
		$data=array();
		$data['result'] = "hotel";
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
		$data['result'] = $this->common_model->get_all('cms_aboutus');
		$this->load->view('theme/aboutus',$data);
	}
	
	public function rebrandmyhotel()
	{
		$data=array();
		$data['result'] = $this->common_model->get_all('cms_rebrandmyhotel');
		$this->load->view('theme/rebrandmyhotel',$data);
	}
	
	public function privacyandpolicy()
	{
		$data=array();
		$data['result'] = $this->common_model->get_all('cms_privacypolicy');
		$this->load->view('theme/privacyandpolicy',$data);
	}
	
	public function termsandconditions()
	{
		$data=array();
		$data['result'] = $this->common_model->get_all('cms_termsconditions');
		$this->load->view('theme/termsandconditions',$data);
	}
	
	public function faq()
	{
		$data=array();
		$data['result'] = $this->common_model->get_all('cms_faq');
		$this->load->view('theme/faq',$data);
	}
	
	public function franchise()
	{
		$data=array();
		if(!empty($this->input->post())){
			  $postdata = array('hotelname'=>$this->input->post('hotelname'),'noofrooms'=>$this->input->post('noofrooms'),'city'=>$this->input->post('city'),'locality'=>$this->input->post('locality'),'linktopage'=>$this->input->post('linktopage'),'name'=>$this->input->post('name'),'mobile'=>$this->input->post('mobile'),'email'=>$this->input->post('email'),'created_date'=>date('Y-m-d H:i:s')); 
			  $result = $this->common_model->insert_data('fifo_franchise',$postdata);
			  // $this->email->from('mmoorti@gmail.com', 'FIFO');
			  // $this->email->to('mmoorti@gmail.com');
			  // $this->email->subject('This is my subject');
			  // $this->email->message('This is my message');
			  // if($this->email->send()){
     //             echo $this->email->print_debugger();
			  // }else{
			  // 	echo $this->email->print_debugger();
			  // }
			  // exit();

			if($result==true)
			{
				$this->session->set_flashdata('success', "Enquiry sent successfully."); 
			}else{
				$this->session->set_flashdata('error', "Failed to sent.");
			}
		}
		$data['result'] = $this->common_model->get_all('cms_franchise');
		$this->load->view('theme/franchise',$data);
	}


	public function travelagent()
	{
		$data=array();
		if(!empty($this->input->post())){
			  $postdata = array('yourtravelagent'=>$this->input->post('yourtravelagent'),'yourcompanyname'=>$this->input->post('yourcompanyname'),'yourcompanycity'=>$this->input->post('yourcompanycity'),'yourname'=>$this->input->post('yourname'),'yourmobile'=>$this->input->post('yourmobile'),'youremail'=>$this->input->post('youremail'),'created_date'=>date('Y-m-d H:i:s')); 
			  $result = $this->common_model->insert_data('fifo_travelagent',$postdata);

			if($result==true)
			{
				$this->session->set_flashdata('success', "Enquiry sent successfully."); 
			}else{
				$this->session->set_flashdata('error', "Failed to sent.");
			}
		}
		$data['result'] = $this->common_model->get_all('cms_travelagent');
		$this->load->view('theme/travelagent',$data);
	}

	public function corporateenquiry()
	{
		$data=array();
		if(!empty($this->input->post())){
			  $postdata = array('yourtravelagent'=>$this->input->post('yourtravelagent'),'yourcompanyname'=>$this->input->post('yourcompanyname'),'yourcompanycity'=>$this->input->post('yourcompanycity'),'yourname'=>$this->input->post('yourname'),'yourmobile'=>$this->input->post('yourmobile'),'youremail'=>$this->input->post('youremail'),'created_date'=>date('Y-m-d H:i:s')); 
			  $result = $this->common_model->insert_data('fifo_corporateenquiry',$postdata);

			if($result==true)
			{
				$this->session->set_flashdata('success', "Enquiry sent successfully."); 
			}else{
				$this->session->set_flashdata('error', "Failed to sent.");
			}
		}
		$data['result'] = $this->common_model->get_all('cms_corporateenquiry');
		$this->load->view('theme/corporateenquiry',$data);
	}

	public function partnerwithus()
	{
		$data=array();
		if(!empty($this->input->post())){
            
			$mailExists = $this->common_model->check_data_exist("fifo_users",array('user_name'=>$this->input->post('email')));
			if(sizeof($mailExists)>0){
                $this->session->set_flashdata('error', "Email already exists.");
			}else{
				$password =  $this->form_validation->set_rules('password','Password','trim|required');
				$confirmPassword = $this->form_validation->set_rules('confirmpassword', 'Confirm Password', 'trim|required|matches[password]');

				if($this->form_validation->run() == TRUE){
	               $postdata = array('user_name'=>$this->input->post('email'),'password'=>md5($this->input->post('password'))); 
				   $result = $this->common_model->insert_data('fifo_users',$postdata);
                   
				   $userDetailsData = array('user_id'=>$result,'full_name'=>$this->input->post('fullname'),'email'=>$this->input->post('email'),'termsandCond'=>$this->input->post('termsandcond'));

				   $this->common_model->insert_data('fifo_user_details',$userDetailsData);

				   $userRoleDatas = array('user_id'=>$result,'role_id'=>2);

				   $this->common_model->insert_data('fifo_user_roles',$userRoleDatas);

					if($result==true)
					{
						$this->session->set_flashdata('success', "Activation link sent successfully to  your mail address."); 
						redirect(BASE_URL . 'complete');
					}else{
						$this->session->set_flashdata('error', "Failed to sent.");
					}
				}else{
					$this->session->set_flashdata('error', "Password didn't match.");
				}
			}
			  
		}
		$data['result'] = $this->common_model->get_all('cms_partnerwithus');
		$this->load->view('theme/partnerwithus',$data);
	}

	public function complete(){
      $data=array();
      $this->load->view('theme/complete',$data);
	}

	public function hotelproperties(){
      $data=array();
      $this->load->view('theme/hotelproperties',$data);
	}
	
	
	public function howtomakemyreservation()
	{
		$data=array();
		$data['result'] = $this->common_model->get_all('cms_howtomakemyreservation');
		$this->load->view('theme/howtomakemyreservation',$data);
	}
	
	public function paymentoptions()
	{
		$data=array();
		$data['result'] = $this->common_model->get_all('cms_paymentoptions');
		$this->load->view('theme/paymentoptions',$data);
	}
	
	public function bookingtips()
	{
		$data=array();
		$data['result'] = $this->common_model->get_all('cms_bookingtips');
		$this->load->view('theme/bookingtips',$data);
	}

	public function careers()
	{
		$data=array();
		$data['result'] = $this->common_model->get_all('cms_careers');
		$this->load->view('theme/careers',$data);
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
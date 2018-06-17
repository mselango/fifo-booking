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
class Cms extends CI_Controller {
	
	function __construct()
    {
        parent::__construct();
		$this->no_cache();
		$this->load->model('manage_model');
		$this->load->model('common_model');
		$updated_date =date('Y-m-d H:i:s');
	}
	
	protected function no_cache()
	{
		header('Cache-Control: no-store, no-cache, must-revalidate');
		header('Cache-Control: post-check=0, pre-check=0',false);
		header('Pragma: no-cache'); 
	} 

	public function aboutUs()
	{
		$data=array();

		if(!empty($this->input->post())){
			$postdata = array('title'=>$this->input->post('title'),'description'=>$this->input->post('description')); 
			$check_exist = $this->common_model->get_all('cms_aboutus');
			if(count($check_exist) == 0){
				$postdata['created_date']=date('Y-m-d H:i:s');
				$result = $this->common_model->insert_data('cms_aboutus',$postdata);
			}
			else{
				$postdata['updated_date']=date('Y-m-d H:i:s');
				$result = $this->common_model->update_data('cms_aboutus','id',$this->input->post('id'),$postdata);	
			}

			if($result==true)
			{
				$this->session->set_flashdata('success', "Updated Data Successfully."); 
			}else{
				$this->session->set_flashdata('error', "Updated Data Failed.");
			}

			redirect('cms/aboutUs');
		}
		else{
			$data['result'] = $this->common_model->get_all('cms_aboutus');
		}

		$data['content'] = $this->load->view('admin/cms/aboutus', $data, true);
		$this->load->view('layout', $data);
	
	}

	public function testimony()
	{
		$data=array();

		if(!empty($this->input->post())){
			$postdata = array('title'=>$this->input->post('title'),'description'=>$this->input->post('description')); 
			$check_exist = $this->common_model->get_all('cms_testimony');
			if(count($check_exist) == 0){
				$postdata['created_date']=date('Y-m-d H:i:s');
				$result = $this->common_model->insert_data('cms_testimony',$postdata);
			}
			else{
				$postdata['updated_date']=date('Y-m-d H:i:s');
				$result = $this->common_model->update_data('cms_testimony','id',$this->input->post('id'),$postdata);	
			}

			if($result==true)
			{
				$this->session->set_flashdata('success', "Updated Data Successfully."); 
			}else{
				$this->session->set_flashdata('error', "Updated Data Failed.");
			}

			redirect('cms/testimony');
		}
		else{
			$data['result'] = $this->common_model->get_all('cms_testimony');
		}

		$data['content'] = $this->load->view('admin/cms/testimony', $data, true);
		$this->load->view('layout', $data);
	}

	public function faq()
	{
		$data=array();

		if(!empty($this->input->post())){
			$postdata = array('question'=>$this->input->post('question'),'answer'=>$this->input->post('answer'));
			$postdata['created_date']=date('Y-m-d H:i:s');
			$result = $this->common_model->insert_data('cms_faq',$postdata); 
			
			if($result==true)
			{ 
				$this->session->set_flashdata('success', "Inserted Data Successfully."); 
			}else{
				$this->session->set_flashdata('error', "Inserted Data Failed.");
			}

			redirect('cms/faq');
		}
		else{
			$data['result'] = $this->common_model->get_by_where('cms_faq',array('status'=>0));
		}

		$data['content'] = $this->load->view('admin/cms/faq', $data, true);
		$this->load->view('layout', $data);
	}

	public function paymentSecurity()
	{
		$data=array();

		if(!empty($this->input->post())){
			$postdata = array('title'=>$this->input->post('title'),'description'=>$this->input->post('description')); 
			$check_exist = $this->common_model->get_all('cms_paymentsecurity');
			if(count($check_exist) == 0){
				$postdata['created_date']=date('Y-m-d H:i:s');
				$result = $this->common_model->insert_data('cms_paymentsecurity',$postdata);
			}
			else{
				$postdata['updated_date']=date('Y-m-d H:i:s');
				$result = $this->common_model->update_data('cms_paymentsecurity','id',$this->input->post('id'),$postdata);	
			}

			if($result==true)
			{
				$this->session->set_flashdata('success', "Updated Data Successfully."); 
			}else{
				$this->session->set_flashdata('error', "Updated Data Failed.");
			}

			redirect('cms/paymentSecurity');
		}
		else{
			$data['result'] = $this->common_model->get_all('cms_paymentsecurity');
		}

		$data['content'] = $this->load->view('admin/cms/paymentsecurity', $data, true);
		$this->load->view('layout', $data);
	}

	public function privacyPolicy()
	{
		$data=array();

		if(!empty($this->input->post())){
			$postdata = array('title'=>$this->input->post('title'),'description'=>$this->input->post('description')); 
			$check_exist = $this->common_model->get_all('cms_privacypolicy');
			if(count($check_exist) == 0){
				$postdata['created_date']=date('Y-m-d H:i:s');
				$result = $this->common_model->insert_data('cms_privacypolicy',$postdata);
			}
			else{
				$postdata['updated_date']=date('Y-m-d H:i:s');
				$result = $this->common_model->update_data('cms_privacypolicy','id',$this->input->post('id'),$postdata);	
			}

			if($result==true)
			{
				$this->session->set_flashdata('success', "Updated Data Successfully."); 
			}else{
				$this->session->set_flashdata('error', "Updated Data Failed.");
			}

			redirect('cms/privacyPolicy');
		}
		else{
			$data['result'] = $this->common_model->get_all('cms_privacypolicy');
		}

		$data['content'] = $this->load->view('admin/cms/privacypolicy',  $data, true);
		$this->load->view('layout', $data);
	}

	public function termsConditions()
	{
		$data=array();

		if(!empty($this->input->post())){
			$postdata = array('title'=>$this->input->post('title'),'description'=>$this->input->post('description')); 
			$check_exist = $this->common_model->get_all('cms_termsconditions');
			if(count($check_exist) == 0){
				$postdata['created_date']=date('Y-m-d H:i:s');
				$result = $this->common_model->insert_data('cms_termsconditions',$postdata);
			}
			else{
				$postdata['updated_date']=date('Y-m-d H:i:s');
				$result = $this->common_model->update_data('cms_termsconditions','id',$this->input->post('id'),$postdata);	
			}

			if($result==true)
			{
				$this->session->set_flashdata('success', "Updated Data Successfully."); 
			}else{
				$this->session->set_flashdata('error', "Updated Data Failed.");
			}


			redirect('cms/termsConditions');
		}
		else{
			$data['result'] = $this->common_model->get_all('cms_termsconditions');
		}

		$data['content'] = $this->load->view('admin/cms/termsconditions', $data, true);
		$this->load->view('layout', $data);
	}


	public function visaInformation()
	{
		$data=array();

		if(!empty($this->input->post())){
			$postdata = array('title'=>$this->input->post('title'),'description'=>$this->input->post('description')); 
			$check_exist = $this->common_model->get_all('cms_visainformation');
			if(count($check_exist) == 0){
				$postdata['created_date']=date('Y-m-d H:i:s');
				$result = $this->common_model->insert_data('cms_visainformation',$postdata);
			}
			else{
				$postdata['updated_date']=date('Y-m-d H:i:s');
				$result = $this->common_model->update_data('cms_visainformation','id',$this->input->post('id'),$postdata);	
			}

			if($result==true)
			{
				$this->session->set_flashdata('success', "Updated Data Successfully."); 
			}else{
				$this->session->set_flashdata('error', "Updated Data Failed.");
			}

			redirect('cms/visaInformation');
		}
		else{
			$data['result'] = $this->common_model->get_all('cms_visainformation');
		}

		$data['content'] = $this->load->view('admin/cms/visainformation', $data, true);
		$this->load->view('layout', $data);
	}

	public function travelInsurance()
	{
		$data=array();

		if(!empty($this->input->post())){
			$postdata = array('title'=>$this->input->post('title'),'description'=>$this->input->post('description')); 
			$check_exist = $this->common_model->get_all('cms_travelinsurance');
			if(count($check_exist) == 0){
				$postdata['created_date']=date('Y-m-d H:i:s');
				$result = $this->common_model->insert_data('cms_travelinsurance',$postdata);
			}
			else{
				$postdata['updated_date']=date('Y-m-d H:i:s');
				$result = $this->common_model->update_data('cms_travelinsurance','id',$this->input->post('id'),$postdata);	
			}

			if($result==true)
			{
				$this->session->set_flashdata('success', "Updated Data Successfully."); 
			}else{
				$this->session->set_flashdata('error', "Updated Data Failed.");
			}

			redirect('cms/travelInsurance');
		}
		else{
			$data['result'] = $this->common_model->get_all('cms_travelinsurance');
		}

		$data['content'] = $this->load->view('admin/cms/travelinsurance', $data, true);
		$this->load->view('layout', $data);
	}

	public function support()
	{
		$data=array();

		if(!empty($this->input->post())){
			$postdata = array('title'=>$this->input->post('title'),'description'=>$this->input->post('description')); 
			$check_exist = $this->common_model->get_all('cms_support');
			if(count($check_exist) == 0){
				$postdata['created_date']=date('Y-m-d H:i:s');
				$result = $this->common_model->insert_data('cms_support',$postdata);
			}
			else{
				$postdata['updated_date']=date('Y-m-d H:i:s');
				$result = $this->common_model->update_data('cms_support','id',$this->input->post('id'),$postdata);	
			}

			if($result==true)
			{
				$this->session->set_flashdata('success', "Updated Data Successfully."); 
			}else{
				$this->session->set_flashdata('error', "Updated Data Failed.");
			}

			redirect('cms/support');
		}
		else{
			$data['result'] = $this->common_model->get_all('cms_support');
		}

		$data['content'] = $this->load->view('admin/cms/support', $data, true);
		$this->load->view('layout', $data);
	}

	public function contact()
	{
		$data=array();

		if(!empty($this->input->post())){
			$postdata = array('title'=>$this->input->post('title'),'description'=>$this->input->post('description')); 
			$check_exist = $this->common_model->get_all('cms_contact');
			if(count($check_exist) == 0){
				$postdata['created_date']=date('Y-m-d H:i:s');
				$result = $this->common_model->insert_data('cms_contact',$postdata);
			}
			else{
				$postdata['updated_date']=date('Y-m-d H:i:s');
				$result = $this->common_model->update_data('cms_contact','id',$this->input->post('id'),$postdata);	
			}

			if($result==true)
			{
				$this->session->set_flashdata('success', "Updated Data Successfully."); 
			}else{
				$this->session->set_flashdata('error', "Updated Data Failed.");
			}

			redirect('cms/contact');
		}
		else{
			$data['result'] = $this->common_model->get_all('cms_contact');
		}

		$data['content'] = $this->load->view('admin/cms/contact', $data, true);
		$this->load->view('layout', $data);
	}

	public function vision()
	{
		$data=array();

		if(!empty($this->input->post())){
			$postdata = array('title'=>$this->input->post('title'),'description'=>$this->input->post('description')); 
			$check_exist = $this->common_model->get_all('cms_vision');
			if(count($check_exist) == 0){
				$postdata['created_date']=date('Y-m-d H:i:s');
				$result = $this->common_model->insert_data('cms_vision',$postdata);
			}
			else{
				$postdata['updated_date']=date('Y-m-d H:i:s');
				$result = $this->common_model->update_data('cms_vision','id',$this->input->post('id'),$postdata);	
			}

			if($result==true)
			{
				$this->session->set_flashdata('success', "Updated Data Successfully."); 
			}else{
				$this->session->set_flashdata('error', "Updated Data Failed.");
			}

			redirect('cms/vision');
		}
		else{
			$data['result'] = $this->common_model->get_all('cms_vision');
		}

		$data['content'] = $this->load->view('admin/cms/vision', $data, true);
		$this->load->view('layout', $data);
	}
	
	public function socialLinks()
	{
		$data=array();

		if(!empty($this->input->post())){
			$postdata = array('facebook_link'=>$this->input->post('facebook_link'),
							  'twitter_link'=>$this->input->post('twitter_link'),
							  'instagram_link'=>$this->input->post('instagram_link'),
							  'linkedin_link'=>$this->input->post('linkedin_link'),
							  'youtube_link'=>$this->input->post('youtube_link'),
							  'pinterest_link'=>$this->input->post('pinterest_link'),
							  'googleplus_link'=>$this->input->post('googleplus_link'),
							  'whatsapp'=>$this->input->post('whatsapp'),
							  'email'=>$this->input->post('email')
							  ); 
			$check_exist = $this->common_model->get_all('cms_sociallinks');
			if(count($check_exist) == 0){
				$postdata['created_date']=date('Y-m-d H:i:s');
				$result = $this->common_model->insert_data('cms_sociallinks',$postdata);
			}
			else{
				$postdata['updated_date']=date('Y-m-d H:i:s');
				$result = $this->common_model->update_data('cms_sociallinks','id',$this->input->post('id'),$postdata);	
			}

			if($result==true)
			{
				$this->session->set_flashdata('success', "Updated Data Successfully."); 
			}else{
				$this->session->set_flashdata('error', "Updated Data Failed.");
			}

			redirect('cms/socialLinks');
		}
		else{
			$data['result'] = $this->common_model->get_all('cms_sociallinks');
		}

		$data['content'] = $this->load->view('admin/cms/sociallinks', $data, true);
		$this->load->view('layout', $data);
	}

	public function careers()
	{
		$data=array();

		if(!empty($this->input->post())){
			$postdata = array('title'=>$this->input->post('title'),'description'=>$this->input->post('description')); 
			$check_exist = $this->common_model->get_all('cms_careers');
			if(count($check_exist) == 0){
				$postdata['created_date']=date('Y-m-d H:i:s');
				$result = $this->common_model->insert_data('cms_careers',$postdata);
			}
			else{
				$postdata['updated_date']=date('Y-m-d H:i:s');
				$result = $this->common_model->update_data('cms_careers','id',$this->input->post('id'),$postdata);	
			}

			if($result==true)
			{
				$this->session->set_flashdata('success', "Updated Data Successfully."); 
			}else{
				$this->session->set_flashdata('error', "Updated Data Failed.");
			}

			redirect('cms/careers');
		}
		else{
			$data['result'] = $this->common_model->get_all('cms_careers');
		}

		$data['content'] = $this->load->view('admin/cms/careers', $data, true);
		$this->load->view('layout', $data);
	}

	public function faqDelete()
	{
		$postdata = array('status'=>1);
		$postdata['updated_date']=date('Y-m-d H:i:s');
		$result = $this->common_model->update_data('cms_faq','id',$this->uri->segment(3),$postdata);
		if($result==true)
		{
		    $this->session->set_flashdata('success', "Faq Deleted Successfully"); 
		}else{
		    $this->session->set_flashdata('error', "Failed");
		}

		redirect('cms/faq');
	}
}
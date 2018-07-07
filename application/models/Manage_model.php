<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Manage_model extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
		
		date_default_timezone_set("Asia/Kolkata");
		
	}
	//Function to getALL 
	function get_all_lists($table_name,$status=null,$per_page=null,$offset=null,$searchtext=null,$columnname=null)
	{
		$this->db->select('*');
		
		if($status!=null)
			$this->db->where('status',$status);

                if($table_name=='hd_customers')
                        $this->db->where('dealer_code',$this->user_auth->get_dealercode());

			
		if($searchtext!="")
			$this->db->like($columnname,$searchtext);
			
		//$this->db->order_by("ID","desc");
		
		if($per_page!=null)
		{
		$query =  $this->db->limit($per_page,$offset)->get($table_name);
		}
		else
		{
		$query = $this->db->get($table_name);	
		}
		
		//echo $this->db->last_query();
		
		if($query->num_rows()>=1)
		
			return $query->result_array();
			
		return 0;

	}
	
	
	//Function to getALL with 2 table join
	function get_all_noservicelists($status=null,$per_page=null,$offset=null,$searchtext=null)
	{
		$this->db->select('hd_customers.*');
		
		$this->db->from("hd_customers");
		
	    $this->db->join("hd_services",'hd_services.cus_id=hd_customers.id','left');
		
		if($status!=null)
			$this->db->where($table_name1.'.status',$status);
			
		if($searchtext!="")
			$this->db->where('hd_customers.customer_name',$searchtext);
			
	    $this->db->where('hd_services.cus_id IS NULL',null);
			
		//$this->db->order_by("ID","desc");
		
		if($per_page!=null)
		{
		$query =  $this->db->limit($per_page,$offset)->get();
		}
		else
		{
		$query = $this->db->get();	
		}
		
		//echo $this->db->last_query();
		
		if($query->num_rows()>=1)
		
			return $query->result_array();
			
		return 0;

	}
	
	
	function common_pagination_no($method="",$uri="",$tablename="",$pagename="",$id="",$searchtext="",$columnname="")
	{
		if($method=="edit")
		{
		$config["base_url"] = BASE_URL."admin/".$pagename."/".$method."/".$id;
		}
		else
		{
		$config["base_url"] = BASE_URL."admin/".$pagename."/".$method;
		}
		  
		$config["total_rows"] = count($this->manage_model->get_all_noservicelists(null,null,null,$searchtext));
		
		$config["per_page"] = 10;
		
		$config["uri_segment"] = $uri;
		
		$config["num_links"] = 10;
		
		$this->pagination->initialize($config);
	 
		$page = ($this->uri->segment($uri))? $this->uri->segment($uri) : 0;
		
		$lists = $this->manage_model->get_all_noservicelists(null,$config['per_page'],$page,$searchtext);
		
		return $lists;
	}
	
	
	
	function common_pagination($method="",$uri="",$tablename="",$pagename="",$id="",$searchtext="",$columnname="")
	{
		if($method=="edit")
		{
		$config["base_url"] = BASE_URL."admin/".$pagename."/".$method."/".$id;
		}
		else
		{
		$config["base_url"] = BASE_URL."admin/".$pagename."/".$method;
		}
		  
		$config["total_rows"] = count($this->manage_model->get_all_lists($tablename,null,null,null,$searchtext,$columnname));
		
		$config["per_page"] = 10;
		
		$config["uri_segment"] = $uri;
		
		$config["num_links"] = 10;
		
		$this->pagination->initialize($config);
	 
		$page = ($this->uri->segment($uri))? $this->uri->segment($uri) : 0;
		
		$lists = $this->manage_model->get_all_lists($tablename,null,$config['per_page'],$page,$searchtext,$columnname);
		
		return $lists;
	}
	
	function common_pagination_ms($method="",$uri="",$tablename="",$pagename="",$id="",$searchtext="",$columnname="")
	{
		if($method=="edit")
		{
		$config["base_url"] = BASE_URL."admin/".$pagename."/".$method."/".$id;
		}
		else
		{
		$config["base_url"] = BASE_URL."admin/".$pagename."/".$method;
		}
		  
		$config["total_rows"] = count($this->manage_model->get_all_lists_ms(null,null,null,$searchtext));
		
		$config["per_page"] = 10;
		
		$config["uri_segment"] = $uri;
		
		$config["num_links"] = 10;
		
		$this->pagination->initialize($config);
	 
		$page = ($this->uri->segment($uri))? $this->uri->segment($uri) : 0;
		
		$lists = $this->manage_model->get_all_lists_ms(null,$config['per_page'],$page,$searchtext);
		
		return $lists;
	}
	
	
	//Function to getALL with 2 table join
	function get_all_lists_ms($status=null,$per_page=null,$offset=null,$searchtext=null)
	{
		$this->db->select('hd_services.*,hd_customers.customer_name');
		
		$this->db->from("hd_customers");
		
	    $this->db->join("hd_services",'hd_services.cus_id=hd_customers.id','inner');

		//$this->db->join("hd_serviceupdates",'hd_serviceupdates.customerid=hd_customers.id','left');
		
		if($status!=null)
			$this->db->where('hd_customers.status',$status);
			
		if($searchtext!="")
			$this->db->like('hd_customers.customer_name',$searchtext);
			
		//$this->db->order_by("ID","desc");
		
		if($per_page!=null)
		{
		$query =  $this->db->limit($per_page,$offset)->get();
		}
		else
		{
		$query = $this->db->get();	
		}
		
		//echo $this->db->last_query();
		
		if($query->num_rows()>=1)
		
			return $query->result_array();
			
		return 0;

	}
	

	//Function to getALL with 2 table join
	function get_all_lists_with_join($status=null,$per_page=null,$offset=null,$searchtext=null)
	{
		$this->db->select('hd_customers.*,hd_serviceupdates.lastupdatedon,hd_serviceupdates.lastupdateby');
		
		$this->db->from("hd_customers");
		
	    $this->db->join("hd_services",'hd_services.cus_id=hd_customers.id','inner');

		$this->db->join("hd_serviceupdates",'hd_serviceupdates.customerid=hd_customers.id','left');
		
		if($status!=null)
			$this->db->where($table_name1.'.status',$status);
			
		if($searchtext!="")
			$this->db->where('hd_services.service_delivery_date >=',$searchtext);
			
		$this->db->order_by("hd_services.id","desc");
		
		if($per_page!=null)
		{
		$query =  $this->db->limit($per_page,$offset)->get();
		}
		else
		{
		$query = $this->db->get();	
		}
		
		//echo $this->db->last_query();
		
		if($query->num_rows()>=1)
		
			return $query->result_array();
			
		return 0;

	}
	
	
	//Function to getALL with 2 table join
	function get_all_lists_with_join_reg($status=null,$per_page=null,$offset=null,$searchtext=null)
	{
		$this->db->select('hd_customers.*');
		
		$this->db->from("hd_customers");
		
		if($status!=null)
			$this->db->where($table_name1.'.status',$status);
			
		if($searchtext!="")
			$this->db->like('cus_code',$searchtext);
			$this->db->or_like('customer_name',$searchtext);
			
		//$this->db->order_by("ID","desc");
		
		if($per_page!=null)
		{
		$query =  $this->db->limit($per_page,$offset)->get();
		}
		else
		{
		$query = $this->db->get();	
		}
		
		//echo $this->db->last_query();
		
		if($query->num_rows()>=1)
		
			return $query->result_array();
			
		return 0;

	}
	
	//Function to getALL with 2 table join
	function get_all_lists_with_join_lost($status=null,$per_page=null,$offset=null,$searchtext=null)
	{
		$this->db->select('hd_services.cus_id,hd_customers.*, hd_serviceupdates.lastupdatedon,hd_serviceupdates.lastupdateby');
		
		$this->db->from("hd_customers");
		
	    $this->db->join("hd_services",'hd_services.cus_id=hd_customers.id','inner');

		$this->db->join("hd_serviceupdates",'hd_serviceupdates.customerid=hd_customers.id','left');
		
		if($status!=null)
			$this->db->where($table_name1.'.status',$status);
			
		if($searchtext!="")
			$this->db->where('hd_services.service_delivery_date <=',$searchtext);
			
		$this->db->distinct("hd_services.cus_id");
		
		$this->db->order_by("hd_services.id","desc");
		
		if($per_page!=null)
		{
		$query =  $this->db->limit($per_page,$offset)->get();
		}
		else
		{
		$query = $this->db->get();	
		}
		
		//echo $this->db->last_query();
		
		if($query->num_rows()>=1)
		
			return $query->result_array();
			
		return 0;

	}
	
	
	
	function common_pagination_lost($method="",$uri="",$tablename="",$pagename="",$id="",$searchtext="")
	{
		if($method=="edit")
		{
		$config["base_url"] = BASE_URL."admin/".$pagename."/".$method."/".$id;
		}
		else
		{
		$config["base_url"] = BASE_URL."admin/".$pagename."/".$method;
		}
		  
		$config["total_rows"] = count($this->manage_model->get_all_lists_with_join_lost(null,null,null,$searchtext));
		
		$config["per_page"] = 10;
		
		$config["uri_segment"] = $uri;
		
		$config["num_links"] = 10;
		
		$this->pagination->initialize($config);
	 
		$page = ($this->uri->segment($uri))? $this->uri->segment($uri) : 0;
		
		$lists = $this->manage_model->get_all_lists_with_join_lost(null,$config['per_page'],$page,$searchtext);
		
		return $lists;
	}
	
	
	
	function get_all_lists_with_join_post($status=null,$per_page=null,$offset=null,$searchtext=null)
	{
		$this->db->select('hd_services.cus_id,hd_customers.*, hd_serviceupdates.lastupdatedon,hd_serviceupdates.lastupdateby');
		
		$this->db->from("hd_customers");
		
	    $this->db->join("hd_services",'hd_services.cus_id=hd_customers.id','inner');

		$this->db->join("hd_serviceupdates",'hd_serviceupdates.customerid=hd_customers.id','left');
		
		if($status!=null)
			$this->db->where($table_name1.'.status',$status);
			
		if($searchtext!="")
			$this->db->where('hd_services.service_delivery_date >=',$searchtext);
			
		$this->db->distinct("hd_services.cus_id");
		
		$this->db->order_by("hd_services.id","desc");
		
		if($per_page!=null)
		{
		$query =  $this->db->limit($per_page,$offset)->get();
		}
		else
		{
		$query = $this->db->get();	
		}
		
		//echo $this->db->last_query();
		
		if($query->num_rows()>=1)
		
			return $query->result_array();
			
		return 0;

	}
	
	
	function common_pagination_post($method="",$uri="",$tablename="",$pagename="",$id="",$searchtext="")
	{
		if($method=="edit")
		{
		$config["base_url"] = BASE_URL."admin/".$pagename."/".$method."/".$id;
		}
		else
		{
		$config["base_url"] = BASE_URL."admin/".$pagename."/".$method;
		}
		  
		$config["total_rows"] = count($this->manage_model->get_all_lists_with_join_post(null,null,null,$searchtext));
		
		$config["per_page"] = 10;
		
		$config["uri_segment"] = $uri;
		
		$config["num_links"] = 10;
		
		$this->pagination->initialize($config);
	 
		$page = ($this->uri->segment($uri))? $this->uri->segment($uri) : 0;
		
		$lists = $this->manage_model->get_all_lists_with_join_post(null,$config['per_page'],$page,$searchtext);
		
		return $lists;
	}
	
	
	function common_pagination_reg($method="",$uri="",$tablename="",$pagename="",$id="",$searchtext="")
	{
		if($method=="edit")
		{
		$config["base_url"] = BASE_URL."admin/".$pagename."/".$method."/".$id;
		}
		else
		{
		$config["base_url"] = BASE_URL."admin/".$pagename."/".$method;
		}
		  
		$config["total_rows"] = count($this->manage_model->get_all_lists_with_join_reg(null,null,null,$searchtext));
		
		$config["per_page"] = 10;
		
		$config["uri_segment"] = $uri;
		
		$config["num_links"] = 10;
		
		$this->pagination->initialize($config);
	 
		$page = ($this->uri->segment($uri))? $this->uri->segment($uri) : 0;
		
		$lists = $this->manage_model->get_all_lists_with_join_reg(null,$config['per_page'],$page,$searchtext);
		
		return $lists;
	}
	
	
	//Function to getALL with 2 table join
	function get_all_lists_with_join_followup($status=null,$per_page=null,$offset=null,$fromdate=null,$todate=null)
	{
		$this->db->select('hd_customers.*,hd_services.service_type, hd_serviceupdates.lastupdatedon,hd_serviceupdates.lastupdateby,hd_serviceupdates.status,hd_serviceupdates.remarks');
		
		$this->db->from("hd_customers");
		
	    $this->db->join("hd_services",'hd_services.cus_id=hd_customers.id','inner');

		$this->db->join("hd_serviceupdates",'hd_serviceupdates.customerid=hd_customers.id','left');
		
		if($status!=null)
			$this->db->where($table_name1.'.status',$status);
			
		if($fromdate!="" && $todate!="")
			$this->db->where('hd_services.service_delivery_date >=',$fromdate);
			$this->db->where('hd_services.service_delivery_date <=',$todate);
			
		//$this->db->order_by("ID","desc");
		
		if($per_page!=null)
		{
		$query =  $this->db->limit($per_page,$offset)->get();
		}
		else
		{
		$query = $this->db->get();	
		}
		
		//echo $this->db->last_query();
		
		if($query->num_rows()>=1)
		
			return $query->result_array();
			
		return 0;

	}
	
	
	
	function common_pagination_servicefollowup($method="",$uri="",$tablename="",$pagename="",$id="",$fromdate="",$todate="")
	{
		if($method=="edit")
		{
		$config["base_url"] = BASE_URL."admin/".$pagename."/".$method."/".$id;
		}
		else
		{
		$config["base_url"] = BASE_URL."admin/".$pagename."/".$method;
		}
		  
		$config["total_rows"] = count($this->manage_model->get_all_lists_with_join_followup(null,null,null,$fromdate,$todate));
		
		$config["per_page"] = 10;
		
		$config["uri_segment"] = $uri;
		
		$config["num_links"] = 10;
		
		$this->pagination->initialize($config);
	 
		$page = ($this->uri->segment($uri))? $this->uri->segment($uri) : 0;
		
		$lists = $this->manage_model->get_all_lists_with_join_followup(null,$config['per_page'],$page,$fromdate,$todate);
		
		return $lists;
	}
	
	
	
	
	function get_all_lists_with_join_scheduleservice($status=null,$per_page=null,$offset=null,$scheduledate=null)
	{
		$this->db->select('hd_customers.*,hd_services.service_type, hd_serviceupdates.lastupdatedon,hd_serviceupdates.scheduledate,hd_serviceupdates.lastupdateby,hd_serviceupdates.status,hd_serviceupdates.remarks');
		
		$this->db->from("hd_customers");
		
	    $this->db->join("hd_services",'hd_services.cus_id=hd_customers.id','inner');

		$this->db->join("hd_serviceupdates",'hd_serviceupdates.customerid=hd_customers.id','left');
		
		if($status!=null)
			$this->db->where($table_name1.'.status',$status);
			
		if($scheduledate!="")
			$this->db->where('hd_serviceupdates.scheduledate =',$scheduledate);
			
		//$this->db->order_by("ID","desc");
		
		if($per_page!=null)
		{
		$query =  $this->db->limit($per_page,$offset)->get();
		}
		else
		{
		$query = $this->db->get();	
		}
		
		//echo $this->db->last_query();
		
		if($query->num_rows()>=1)
		
			return $query->result_array();
			
		return 0;

	}
	
	
	
	function common_pagination_scheduleservice($method="",$uri="",$tablename="",$pagename="",$id="",$scheduledate="")
	{
		if($method=="edit")
		{
		$config["base_url"] = BASE_URL."admin/".$pagename."/".$method."/".$id;
		}
		else
		{
		$config["base_url"] = BASE_URL."admin/".$pagename."/".$method;
		}
		  
		$config["total_rows"] = count($this->manage_model->get_all_lists_with_join_scheduleservice(null,null,null,$scheduledate));
		
		$config["per_page"] = 10;
		
		$config["uri_segment"] = $uri;
		
		$config["num_links"] = 10;
		
		$this->pagination->initialize($config);
	 
		$page = ($this->uri->segment($uri))? $this->uri->segment($uri) : 0;
		
		$lists = $this->manage_model->get_all_lists_with_join_scheduleservice(null,$config['per_page'],$page,$scheduledate);
		
		return $lists;
	}
	
	
}



/* End of file common_model.php */

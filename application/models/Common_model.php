<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Common_model extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
		
		date_default_timezone_set("Asia/Kolkata");
		
	}
	//Function to insert 
	function insert_data($table_name,$data)
	{
		if($this->db->insert($table_name,$data))
	
			
			return $this->db->insert_id();
			
		return false;
	}
	
	//Function to get all
	function get_all($table_name)
	{
                $this->db->select('*');

                if($table_name=='hd_customers')
                        $this->db->where('dealer_code',$this->user_auth->get_dealercode());
		$query = $this->db->get($table_name);

//echo $this->db->last_query();
		
		return $query->result_array();
	}
	
	//Function to get by where 
	function get_by_where($table_name,$where)
	{
		if(isset($where) && !empty($where))
		{
			foreach($where as $key=>$val)
			
				$this->db->where($key,$val);	
		}
		
		$query = $this->db->get($table_name);
		
		//echo $this->db->last_query();	
		
		if($query->num_rows()>=1)
		
			return $query->result_array();
			
		return false;
	}
	//Function get by where and fields
	function get_by_where_and_field($table_name,$where,$fields)
	{
		if(isset($fields) && !empty($fields))
		{
			foreach($fields as $fld)
				$this->db->select($fld);
		}
		if(isset($where) && !empty($where))
		{
			foreach($where as $key=>$val)
			
				$this->db->where($key,$val);	
		}
		
		$query = $this->db->get($table_name);	
		
		if($query->num_rows()>=1)
		
			return $query->result_array();
			
		return false;
	}
	//Function to get by where 
	function get_count_by_where($table_name,$where)
	{
		$this->db->select('count(*) as count');
		
		if(isset($where) && !empty($where))
		{
			foreach($where as $key=>$val)
			
				$this->db->where($key,$val);	
		}
		
		$query = $this->db->get($table_name);	
		
		if($query->num_rows()>=1)
		{
			$res =  $query->result_array();
			if($res[0]["count"]>0)
				return 1;
			else
				return false;
		}
			
		return false;
	}
	//Function to get by where 
	function get_by_where_and_order($table_name,$where,$order_by,$order)
	{
		if(isset($where) && !empty($where))
		{
			foreach($where as $key=>$val)
			
				$this->db->where($key,$val);	
		}
		
		$this->db->order_by($order_by,$order);
		
		$query = $this->db->get($table_name);	
		
		if($query->num_rows()>=1)
		
			return $query->result_array();
			
		return false;
	}
	//Function to get by where 
	function get_by_where_in($table_name,$where)
	{
		if(isset($where) && !empty($where))
		{
			foreach($where as $key=>$val)
			
				$this->db->where_in($key,$val);	
		}
		
		$query = $this->db->get($table_name);	
		
		if($query->num_rows()>=1)
		
			return $query->result_array();
			
		return false;
	}
	
	//Function to update 
	function update_data($table_name,$field,$value,$data)
	{
		
		$this->db->where($field, $value);
		
		if($this->db->update($table_name, $data))
		
		//echo $this->db->last_query();	
			
			return true;
			
		return false;
		
	}


//Function to update 
	function update_data_two($table_name,$field,$value,$field1,$value1,$data)
	{
		
		$this->db->where($field, $value);
		
		$this->db->where($field1, $value1);
		
		if($this->db->update($table_name, $data))
		
		//echo $this->db->last_query();	
			
			return true;
			
		return false;
		
	}
	
	
	function check_data_exist($table_name,$where)
	{
		if(isset($where) && !empty($where))
		{
			foreach($where as $key=>$val)
			
				$this->db->where($key,$val);	
		}
		
		$query = $this->db->get($table_name);

        //echo $this->db->last_query();			
		
		if($query->num_rows()>0){
			return $query->result();
		}else{
			return $query->result();
		}
	}
	function get_permission($table_name,$where)
	{
		if(isset($where) && !empty($where))
		{
			foreach($where as $key=>$val)
			
				$this->db->where($key,$val);	
		}
		
		$query = $this->db->get($table_name);	
		
		if($query->num_rows()>=1)
		
			return TRUE;
			
		return FALSE;
	}
	
	function delete_data($table_name,$field_name,$value)
	{
		$this->db->where($field_name,$value);
		
		if($this->db->delete($table_name))
			
			return true;
			
		return false;
	}
	function delete_by_where($table_name,$where)
	{
		if(isset($where) && !empty($where))
		{
			foreach($where as $key=>$val)
			
				$this->db->where($key,$val);	
		}
		
		if($this->db->delete($table_name))
			
			return true;
			
		return false;
	}
	function check_exist($table_name,$field1,$value1,$field2=null,$value2=null)
	{
		$this->db->select($field1);
		
		$this->db->where($field1,$value1);
		
		if($value2!=null)	
			$this->db->where($field2." !=",$value2);
		
		$query = $this->db->get($table_name);	
		
		if($query->num_rows()>=1)
		
			return TRUE;
			
		return FALSE;
	}
	function get_last_record_by_where($table_name,$sort_by_field,$where)
	{
		if(isset($where) && !empty($where))
		{
			foreach($where as $key=>$val)
			
				$this->db->where($key,$val);	
		}
		$this->db->order_by($sort_by_field,'desc');
		
		$query = $this->db->get($table_name);	
		
		if($query->num_rows()>=1)
		
			return  $query->result_array();
			
		return FALSE;
			
	}
	function get_last_record_by_where_limit($table_name,$where)
	{
		$this->db->limit(1);
		
		if(isset($where) && !empty($where))
		{
			foreach($where as $key=>$val)
			{
				if(gettype($val)=="array")
			
					$this->db->where_in($key,$val);	
				else
					$this->db->where($key,$val);
			}
		}
		
		$query = $this->db->get($table_name);	
		
		if($query->num_rows()>=1)
		
			return $query->result_array();
			
		return false;	
	}
	function get_record_by_where_order_limit($table_name,$where,$sort_by_field,$sort_order,$limit)
	{
		$this->db->limit($limit);
		
		if(isset($where) && !empty($where))
		{
			foreach($where as $key=>$val)
			{
				if(gettype($val)=="array")
			
					$this->db->where_in($key,$val);	
				else
					$this->db->where($key,$val);
			}
		}
			
		
		$this->db->order_by($sort_by_field,$sort_order);
	
		$query = $this->db->get($table_name);	
		
		if($query->num_rows()>=1)
		
			return $query->result_array();
			
		return false;	
	}
	
	/**
	* Custom query result
	*/
	public function custom_query($qry)
	{
		// Run the query
        $query = $this->db->query($qry);
		
		if ($query->num_rows()>0) 
		{
			return $query->result_array(); 
		}
		return array();
    }

    /**
	* Inner join query result
	*/
    public function getHotelsForSearch($tableOne,$tableTwo,$columnOne,$valueOne,$joinOne,$joinTwo){
    	 return $this->db->select('*')
	     ->from($tableOne.' as t1')
	     ->where('t1.'.$columnOne, $valueOne)
	     ->join($tableTwo.' as t2', 't1.'.$joinOne.'= t2.'.$joinTwo, 'INNER')
	     ->get()
	     ->result_array();
    }
	
	/**
	* custom query count
	*/
	public function custom_query_count($qry)
	{
		// Run the query
        $query = $this->db->query($qry);
		return $query->num_rows();
    }

    /**
    * get Distinct value
    */

    public function getDistinctQuery($tableName,$columnName){
    	$this->db->select($columnName);
        $this->db->distinct();
        $query = $this->db->get($tableName);

        if ($query->num_rows()>0) 
		{
			return $query->result_array(); 
		}
		return array();
    }
	
	/**
	* Home login method
	*/
	
	public function login_validate($username, $password, $customertable){
		
		$this->db->select('*');
		
		$this->db->where('email_id', $username);
		
		$this->db->where('password',$password);
		
		$query = $this->db->get($customertable);

        //echo $this->db->last_query();		
		
	    // Let's check if there are any results
        if($query->num_rows() == 1){
            // If there is a user, then create session data
            $row = $query->row();
            $data = array(
                    'customer_id' => $row->customer_id,
                    'email_id' => $row->email_id,
                    'terms_conditions' => $row->terms_conditions,
                    'special_offers' => $row->special_offers,
                    'validated' => true
                    );
            $this->session->set_userdata($data);
            return true;
        }else{
			// If the previous process did not validate
			// then return false.
			return false;	
		}
	
	}
	
	
}

/* End of file common_model.php */

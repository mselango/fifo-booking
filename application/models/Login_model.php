<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model {

	private $user_tbl = "fifo_users";
	
	private $userlog_tbl = "hd_userlog";
	
    function __construct()
    {
		parent::__construct();
    }
	
	
	/*Get User Login Information*/
	function get_user_by_login($username)
	{
		
		$this->db->select('*');
		
		$this->db->where('username', $username);
		
		$this->db->where('status','Active');
		
		$query = $this->db->get($this->user_tbl);	
		
		if($query->num_rows()==1)
		
			return $query->row();
			
		return NULL;
		
	}
	
	// Insert User Log When the User Logged in
	
	function insert_log_data($login)
	{
		if($this->db->insert($this->userlog_tbl,$login))	
			
			return $this->db->insert_id();
			
		return false;
	}
	
	// Update User Log Data When the USer Logged out
	function update_log_data($login_id)
	{
		$this->db->where('userlog_pk',$login_id);
		
		$this->db->set('logoutat',date('Y-m-d H:i:s'));
		
		if($this->db->update($this->userlog_tbl))	
			
			return true;
			
		return false;
	}
	
	
}

/* End of file login_model.php */

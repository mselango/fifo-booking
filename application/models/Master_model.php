<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Master_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function getHotelAdminList($keyword)
    {
        $query = $this->db->select('id,user_name as label')
            ->from('fifo_users')
            ->join('fifo_user_roles','fifo_users.id = fifo_user_roles.user_id')
            ->where('fifo_user_roles.role_id', 2);
        if($keyword) {
            $query->like('user_name',$keyword, 'both');
        }
        return $query->get()
              ->result_array();
    }

    public function getCountryList()
    {
        return $this->db->select('id,name as label')
            ->from('fifo_countries')
            ->get()
            ->result_array();
    }

    public function getStateList($keyword)
    {
        $query = $this->db->select('id,name as label')
            ->from('fifo_states');
        if($keyword) {
            $query->like('name',$keyword, 'both');
        }
       return  $query->get()->result_array();
    }

    public function getAmentiesList($keyword)
    {
        $query = $this->db->select('id,name as label')
            ->from('fifo_amenties');
        if($keyword) {
            $query->like('name',$keyword, 'both');
        }
        return  $query->get()->result_array();
    }

    public function getHotelList($keyword)
    {
        $query = $this->db->select('id,name as label')
            ->from('fifo_hotels');
        if($keyword) {
            $query->like('name',$keyword, 'both');
        }
        return  $query->get()->result_array();
    }
}
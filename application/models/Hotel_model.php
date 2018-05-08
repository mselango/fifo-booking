<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Hotel_model extends CI_Model
{
    private $Hotel = "fifo_hotels";

    function __construct()
    {
        parent::__construct();
    }

    public function saveHotelData($data, $uploadData)
    {
        if($data['user_type'] == 'notexist') {
            $userId =$this->saveUserData($data);
            $data['basic']['user_id'] = $userId;
        }
        $this->db->insert('fifo_hotels', $data['basic']);
        $hotelId = $this->db->insert_id();
        if ($hotelId) {
           $data['details']['hotel_id'] = $hotelId;
           $data['details']['image_path'] = !empty($uploadData) ? $uploadData['upload_path'] : null;
           $this->db->insert('fifo_hotel_details', $data['details']);
           $this->insertAmenties($data['amenties'], $hotelId);
       }
       return ;
    }

    public function saveUserData($data)
    {
        $userData = [
            'user_name' => $data['user']['user_name'],
            'password' => md5($data['user']['password']),
            'status' => 1
         ];
        $this->db->insert('fifo_users', $userData);
        $userId = $this->db->insert_id();
        $data['user_details']['user_id'] = $userId;
        $this->db->insert('fifo_user_details', $data['user_details']);
        return $userId;

    }

    public function insertAmenties($amentiesData, $hotelId)
    {
        if (!empty($amentiesData)) {
            $amenties = explode(',', $amentiesData);
            if ($amenties) {
                foreach ($amenties as $amenty) {
                    $insAmenty = [
                        'hotel_id' => $hotelId,
                        'amenty_id' => $amenty
                    ];
                    $this->db->insert('fifo_hotel_amenties', $insAmenty);
                }
            }
        }
    }

    public function getAllHotels()
    {
        return $this->db
            ->select('fifo_hotels.id,fifo_hotels.name,fifo_hotels.contact_no,fifo_users.user_name,fifo_hotel_details.city')
            ->from('fifo_hotels')
            ->join('fifo_hotel_details','fifo_hotels.id = fifo_hotel_details.hotel_id')
            ->join('fifo_users','fifo_hotels.user_id = fifo_users.id')
            ->get()
            ->result_array();
    }

    public function getHotelInfo($hotelId)
    {
        return $this->db
            ->select('*')
            ->from('fifo_hotels')
            ->where('id', $hotelId)
            ->get()
            ->row_array();
    }

    public function saveHotelRoomsData($data, $uploadData)
    {
        if ($data['hotel_id']) {
            unset($data['hotel_name']);
            $data['images'] = !empty($uploadData) ? $uploadData['upload_path'] : null;
            $this->db->insert('fifo_hotel_rooms', $data);
        }
        return true ;
    }
}
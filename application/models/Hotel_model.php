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

           if(!empty($data['amenties'])) {
               $this->insertAmenties($data['amenties'], $hotelId);
           }
           if(!empty($data['details']['policies'])) {
               $policy['general_policy'] = $data['details']['policies'];
               $policy['hotel_id'] = $hotelId;
               $this->saveHotelPolicies($policy);
           }
           //save hotel contacts//
           $contact['hotel_id'] = $hotelId;
           $contact['contact_no'] = $data['contact']['contact_no'];
           $this->saveHotelContacts($contact);
       }
       return true ;
    }

    public function saveHotel($data)
    {
        if(!empty($data['hotel_id'])){
            return $this->updateHotel($data);
        }
        $this->db->insert('fifo_hotels', $data['basic']);
        $hotelId = $this->db->insert_id();
        if ($hotelId) {
            $data['detail']['hotel_id'] = $hotelId;
            $this->db->insert('fifo_hotel_details', $data['detail']);
        }
        return $hotelId;
    }

    public function saveHotelAddress($data)
    {
        unset($data['states']);
        if ($data) {
            $this->db->update('fifo_hotel_details', $data, ['hotel_id' => $data['hotel_id']]);
        }
        return '';
    }

    public function updateHotel($data)
    {
        $this->db->update('fifo_hotels', $data['basic'], ['id' => $data['hotel_id']]);
        $hotelId = $data['hotel_id'];
        if ($hotelId) {
            $data['detail']['hotel_id'] = $hotelId;
            $this->db->update('fifo_hotel_details', $data['detail'], ['hotel_id' => $data['hotel_id']]);
        }
        return '';
    }

    public function getHotelContacts($id)
    {
        return $this->db
            ->select('*')
            ->from('fifo_hotel_contacts')
            ->where('hotel_id', $id)
            ->get()
            ->row_array();
    }

    public function getHotelPolicies($id)
    {
        return $this->db
            ->select('*')
            ->from('fifo_hotel_policies')
            ->where('hotel_id', $id)
            ->get()
            ->row_array();
    }

    public function saveHotelContacts($data)
    {
        $hotelContact = $this->getHotelContacts($data['hotel_id']);
        if(!empty($hotelContact)) {
            $this->db->update('fifo_hotel_contacts', $data, ['hotel_id' => $data['hotel_id']]);
        }else{
            $this->db->insert('fifo_hotel_contacts', $data);
        }
        return '';
    }

    public function saveHotelPolicies($data)
    {
        $hotelContact = $this->getHotelPolicies($data['hotel_id']);
        if(!empty($hotelContact)) {
            $this->db->update('fifo_hotel_policies', $data, ['hotel_id' => $data['hotel_id']]);
        }else{
            $this->db->insert('fifo_hotel_policies', $data);
        }
        return '';
    }

    public function saveUserData($data)
    {
        $role_id = 2;//hotel Admin
        $userData = [
            'user_name' => $data['user']['user_name'],
            'password' => md5($data['user']['password']),
            'status' => 1
         ];
        $this->db->insert('fifo_users', $userData);
        $userId = $this->db->insert_id();
        $data['user_details']['user_id'] = $userId;
        $this->db->insert('fifo_user_details', $data['user_details']);
        $this->db->insert('fifo_user_roles', ['user_id' => $userId, 'role_id' => $role_id]);
        return $userId;

    }

    public function insertAmenties($amentiesData, $hotelId)
    {
        if (!empty($amentiesData)) {
            $this->db->delete('fifo_hotel_amenties',['hotel_id' => $hotelId]);
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

    public function saveAmenties($amentiesData, $hotelId)
    {
        if (!empty($amentiesData)) {
            $this->db->delete('fifo_hotel_amenties',['hotel_id' => $hotelId]);
            foreach ($amentiesData as $amenty) {
                $insAmenty = [
                    'hotel_id' => $hotelId,
                    'amenty_id' => $amenty
                ];
                $this->db->insert('fifo_hotel_amenties', $insAmenty);
            }
        }
    }

    public function getAllHotels()
    {
        return $this->db
            ->select('fifo_hotels.id,fifo_hotels.name,fifo_hotel_contacts.contact_no,fifo_users.user_name,fifo_hotel_details.city')
            ->from('fifo_hotels')
            ->join('fifo_hotel_details','fifo_hotels.id = fifo_hotel_details.hotel_id')
            ->join('fifo_hotel_contacts','fifo_hotels.id = fifo_hotel_contacts.hotel_id')
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

    public function getHotelDetails($hotelId)
    {
        return $this->db
            ->select('fifo_hotels.*,fifo_hotel_details.id as detail_id,fifo_hotel_details.*,fifo_states.name as state_name',false)
            ->from('fifo_hotels')
            ->join('fifo_hotel_details','fifo_hotels.id = fifo_hotel_details.hotel_id','left')
            ->join('fifo_states','fifo_states.id = fifo_hotel_details.state','left')
            ->where('fifo_hotels.id', $hotelId)
            ->get()
            ->row_array();
    }

    public function getHotelAmentiesList($hotelId)
    {
        $data = [];
        $amenties = $this->db
            ->select('*')
            ->from('fifo_hotel_amenties')
            ->where('hotel_id', $hotelId)
            ->get()
            ->result_array();
        if($amenties) {
            foreach ($amenties as $amenty) {
                array_push($data, $amenty['amenty_id']);
            }
        }
        return $data;
    }

    public function saveHotelPhotos($hotelId, $path)
    {
        $this->db->update('fifo_hotel_details', ['image_path' => $path], ['hotel_id' => $hotelId]);
        return ;
    }
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HotelRooms extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('hotel_model');
        $this->load->model('master_model');
    }

    public function add($id)
    {
        $hotelId = base64_decode($id);
        $data['HotelAdmin'] = $this->hotel_model->getHotelInfo($hotelId);
        $this->load->view('admin/hotels/add_rooms', $data);
    }

    public function saveHotelRooms()
    {
        $hotelId = $this->input->post('hotel_id');
        $data['HotelAdmin'] = $this->hotel_model->getHotelInfo($hotelId);
        $rules = $this->validationRules();
        $this->form_validation->set_rules($rules);
        if ($this->form_validation->run() === false) {
            return $this->load->view('admin/hotels/add_rooms', $data);
        }
        else {

            $uploadResponse = (is_uploaded_file($_FILES['zip_file']['tmp_name'])) ? $this->doUpload() : '';
            if ($uploadResponse && $uploadResponse['success_code'] == 422) {
                $data['upload_errors'] = $uploadResponse['errors'];
                return $this->load->view('admin/hotels/add_rooms', $data);
            }

            $this->hotel_model->saveHotelRoomsData($this->input->post(), $uploadResponse);
            $this->session->set_flashdata('success_msg', 'Rooms Added Successfully');
            redirect('admin/hotels/list');
        }
    }

    public function doUpload()
    {
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'zip';
        $hotelName = str_replace(' ','-', $this->input->post('hotel_name'));
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('zip_file'))
        {
            $data = array('upload_data' => $this->upload->data());
            $full_path = $data['upload_data']['full_path'];
            $zip = new ZipArchive;
            if ($zip->open($full_path) === true)
            {
                $uploadPath = FCPATH.'/uploads/'.$hotelName.'/Rooms/';
                $zip->extractTo($uploadPath);
                $zip->close();
                chmod($uploadPath,0777);
                unlink($data['upload_data']['full_path']);
            }
            return ['success_code' => 200, 'upload_path' => $uploadPath];
        } else {
            return ['success_code' => 422, 'errors' => $this->upload->display_errors()];
        }

    }

    private function validationRules()
    {
        $rules = [
            [
                'field' => 'room_name',
                'label' => 'Room Name',
                'rules' => 'required'
            ],
            [
                'field' => 'no_of_people',
                'label' => 'No Of People',
                'rules' => 'required'
            ],
            [
                'field' => 'cancellation_policies',
                'label' => 'Cancellation Policy',
                'rules' => 'required'
            ],
            [
                'field' => 'actual_price',
                'label' => 'Actual Price',
                'rules' => 'required'
            ],
            [
                'field' => 'discount_price',
                'label' => 'Discounted Price',
                'rules' => 'required'
            ]
        ];
        return $rules;

    }
}
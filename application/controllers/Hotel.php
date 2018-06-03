<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hotel extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('hotel_model');
        $this->load->model('master_model');
    }

    public function manage()
    {
        $hotelId = 1;
        $data['countries'] = $this->master_model->getCountryList();
        $data['currencies'] = $this->master_model->getCurrencyList();
        $data['amenties'] = $this->hotel_model->getHotelAmentiesList($hotelId);
        $data['hotel_type'] = $this->master_model->getHotelCategoryList();
        $data['hotel'] = $this->hotel_model->getHotelDetails($hotelId);
        $data['hotel_contacts'] = $this->hotel_model->getHotelContacts($hotelId);
        $this->load->view('hotel_admin/manage_hotel', $data);
    }

    public function addHotel()
    {
        $data['countries'] = $this->master_model->getCountryList();
        $this->load->view('admin/hotels/add', $data);
    }

    public function editHotel($id)
    {
        $hotelId = base64_decode($id);
        $data['countries'] = $this->master_model->getCountryList();
        $data['hotels'] = $this->hotel_model->getHotelDetails($hotelId);
        $this->load->view('admin/hotels/edit', $data);
    }

    public function save()
    {
        $inputData = $this->input->post();
        $hotelId = $this->hotel_model->saveHotel($inputData);
        echo json_encode(['success' => true, 'message' => 'data saved successfully']);
    }

    public function saveAddress()
    {
        $inputData = $this->input->post();
        $this->hotel_model->saveHotelAddress($inputData);
        echo json_encode(['success' => true, 'message' => 'data saved successfully']);

    }

    public function saveContacts()
    {
        $inputData = $this->input->post();
        $this->hotel_model->saveHotelContacts($inputData);
        echo json_encode(['success' => true, 'message' => 'data saved successfully']);

    }

    public function saveAmenties()
    {
        $inputData = $this->input->post();
        if (empty($inputData['hotel_id'])) {
            echo json_encode(['success' => true, 'message' => 'Hotel Id Required']);
        }
        if (empty($inputData['amenties'])) {
            echo json_encode(['success' => true, 'message' => 'Amenties Required']);
        }
        $this->hotel_model->saveAmenties($inputData['amenties'],$inputData['hotel_id']);
        echo json_encode(['success' => true, 'message' => 'data saved successfully']);
    }

    public function saveHotel()
    {
        $rules = $this->validationRules( $this->input->post('user_type'));
        $data['countries'] = $this->master_model->getCountryList();
        $this->form_validation->set_rules($rules);

        if ($this->form_validation->run() === false) {
            return $this->load->view('admin/hotels/add', $data);
        }
        else {

            $uploadResponse = (is_uploaded_file($_FILES['zip_file']['tmp_name'])) ? $this->doUpload() : '';
            if ($uploadResponse && $uploadResponse['success_code'] == 422) {
                $data['upload_errors'] = $uploadResponse['errors'];
                return $this->load->view('admin/hotels/add', $data);
            }
            $this->hotel_model->saveHotelData($this->input->post(), $uploadResponse);
            $this->session->set_flashdata('success_msg', 'Hotel Added Successfully');
            redirect('admin/hotels/list');
        }

    }

    public function doUpload()
    {
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'zip';
        $hotelName = str_replace(' ','-', $this->input->post('basic[name]'));
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('zip_file'))
        {
            $data = array('upload_data' => $this->upload->data());
            $full_path = $data['upload_data']['full_path'];
            $zip = new ZipArchive;
            if ($zip->open($full_path) === true)
            {
                $uploadPath = FCPATH.'/uploads/'.$hotelName.'/';
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

    public function savePhotos()
    {
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'zip';
        $hotelName = $this->input->post('hotel_name');
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('file'))
        {
            $data = array('upload_data' => $this->upload->data());
            $full_path = $data['upload_data']['full_path'];
            $zip = new ZipArchive;
            if ($zip->open($full_path) === true)
            {
                $uploadPath = FCPATH.'/uploads/'.$hotelName.'/';
                $zip->extractTo($uploadPath);
                $zip->close();
                unlink($data['upload_data']['full_path']);
                $this->hotel_model->saveHotelPhotos($this->input->post('hotel_id'), $uploadPath);
            }
            return ['success_code' => 200, 'upload_path' => $uploadPath];
        } else {
            return ['success_code' => 422, 'errors' => $this->upload->display_errors()];
        }

    }

    public function listHotel()
    {
        $data['hotelList'] = $this->hotel_model->getAllHotels();
        $this->load->view('admin/hotels/list', $data);
    }


    private function validationRules($userType)
    {
        $rules = [
            [
                'field' => 'basic[name]',
                'label' => 'Hotel Name',
                'rules' => 'required'
            ],
            [
                'field' => 'basic[contact_no]',
                'label' => 'Contact No',
                'rules' => 'required'
            ],
            [
                'field' => 'basic[check_in]',
                'label' => 'Check In',
                'rules' => 'required'
            ],
            [
                'field' => 'basic[check_out]',
                'label' => 'Check Out',
                'rules' => 'required'
            ],
            [
                'field' => 'details[address1]',
                'label' => 'Address1',
                'rules' => 'required'
            ],
            [
                'field' => 'details[city]',
                'label' => 'City',
                'rules' => 'required'
            ],
            [
                'field' => 'details[state]',
                'label' => 'State',
                'rules' => 'required'
            ],
            [
                'field' => 'details[country]',
                'label' => 'Country',
                'rules' => 'required'
            ],
            [
                'field' => 'details[policies]',
                'label' => 'Policies',
                'rules' => 'required'
            ]

        ];
        if($userType == 'exist') {
            $rule1 = [[
                'field' => 'basic[user_id]',
                'label' => 'Owner',
                'rules' => 'required'
            ]];
            $rules = array_merge_recursive($rules, $rule1);
        }

        if($userType == 'notexist') {
            $rule2 = [
                [
                    'field' => 'user[user_name]',
                    'label' => 'User Name',
                    'rules' => 'required'
                ],
                [
                    'field' => 'user[user_name]',
                    'label' => 'User Name',
                    'rules' => 'required'
                ],
                [
                    'field' => 'user[password]',
                    'label' => 'Password',
                    'rules' => 'required'
                ],
                [
                    'field' => 'user_details[phone_no]',
                    'label' => 'Phone No',
                    'rules' => 'required'
                ],
                [
                    'field' => 'user_details[email]',
                    'label' => 'Email',
                    'rules' => 'required'
                ],
                [
                    'field' => 'user_details[first_name]',
                    'label' => 'First Name',
                    'rules' => 'required'
                ],
                [
                    'field' => 'user_details[last_name]',
                    'label' => 'Last Name',
                    'rules' => 'required'
                ],
            ];
            $rules = array_merge_recursive($rules, $rule2);
        }
        return $rules;

    }

}

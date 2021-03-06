<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hotel extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('hotel_model');
        $this->load->model('master_model');
        $this->load->model('common_model');
    }

    public function manage($hotelId = '')
    {
        $hotelSession = $this->session->userdata('session_hotel');
        $hotelId = !empty($hotelSession) ? $hotelSession->id : $hotelId;
        $data['countries'] = $this->master_model->getCountryList();
        $data['currencies'] = $this->master_model->getCurrencyList();
        $data['hotel_type'] = $this->master_model->getHotelCategoryList();
        if(!empty($hotelId)) {
            $data['amenties'] = $this->hotel_model->getHotelAmentiesList($hotelId);
            $data['hotel'] = $this->hotel_model->getHotelDetails($hotelId);
            $data['hotel_contacts'] = $this->hotel_model->getHotelContacts($hotelId);
            $data['hotel_rooms'] = $this->hotel_model->getHotelRooms($hotelId);
            $data['hotel_policies'] = $this->hotel_model->getHotelPolicies($hotelId);
            $data['hotel_banks'] = $this->hotel_model->getHotelBanks($hotelId);
            $data['hotel_photos'] = $this->hotel_model->getHotelPhotos($hotelId,1);
        }
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
        echo json_encode(['success' => true, 'message' => 'data saved successfully','hotel_id' => $hotelId]);
    }

    public function savePolicies()
    {
        $inputData = $this->input->post();
        $hotelId = $this->hotel_model->saveHotelPolicies($inputData);
        echo json_encode(['success' => true, 'message' => 'data saved successfully']);
    }

    public function saveMaps()
    {
        $inputData = $this->input->post();
        $hotelId = $this->hotel_model->saveHotelMaps($inputData);
        echo json_encode(['success' => true, 'message' => 'data saved successfully']);
    }

    public function saveAddress()
    {
        $inputData = $this->input->post();
        $this->hotel_model->saveHotelAddress($inputData);
        echo json_encode(['success' => true, 'message' => 'data saved successfully']);

    }

    public function saveBankDetails()
    {
        $inputData = $this->input->post();
        $this->hotel_model->saveBankDetails($inputData);
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

    public function rrmdir($dir) {
        if (is_dir($dir)) {
            $objects = scandir($dir);
            foreach ($objects as $object) {
                if ($object != "." && $object != "..") {
                    if (is_dir($dir."/".$object))
                        rrmdir($dir."/".$object);
                    else
                        unlink($dir."/".$object);
                }
            }
            rmdir($dir);
        }
    }

    public function uploadImages(){

         $this->load->library('upload');

         $hotelName = $this->input->post('hotel_name');

         $hotelId = $this->input->post('hotel_id');

         $uploadPath = 'uploads/'.$hotelName;

         if (!is_dir($uploadPath)) {
            mkdir($uploadPath, 0777, TRUE);
         }

         $photoArray = array();
         $imgPath = array();

         $files = $_FILES;
         $cpt = count($_FILES['image_file']['name']);
         for($i=0; $i<$cpt; $i++){
            $imageName = str_replace(" ","_",$files['image_file']['name'][$i]);
            $_FILES['file']['name']     = $imageName;
            $_FILES['file']['type']     = $files['image_file']['type'][$i];
            $_FILES['file']['tmp_name'] = $files['image_file']['tmp_name'][$i];
            $_FILES['file']['error']    = $files['image_file']['error'][$i];
            $_FILES['file']['size']     = $files['image_file']['size'][$i];

            //array_push($imgPath, $imageName);
     
            $this->upload->initialize($this->set_upload_options($uploadPath));
            if($this->upload->do_upload('file')){
                $upload = true;
            }
         }

            $images = glob($uploadPath."/*");

            for ($i=0; $i<count($images); $i++){
                $imgName = substr($images[$i], strrpos($images[$i], '/') + 1);
                $num = base_url().$images[$i];
                array_push($imgPath, $imgName);
            }

            $photoArray["uploadPath"] = $uploadPath; 
            $photoArray["imgNames"] = $imgPath;
            $photoArray["success"] = true;
            $photoArray["message"] = "Image moved to folder for preview purpose";
         
         if($upload){
            echo json_encode($photoArray);
         }else{
            echo json_encode(['success' => false, 'message' => 'error','error' => $this->upload->display_errors()]);
         }

    }

    public function removeImage(){
        $uploadPath = $this->input->post("path");
        $imageName = $this->input->post("imageName");
        $hotelId = $this->input->post("hotelId");
        $hotelName = $this->input->post("hotelName");

        $path = $uploadPath."/".$imageName;

        $hotelPath = $hotelName."/".$imageName;

        $return_text = 0;

        if( file_exists($path) ){

        // Remove file 
         unlink($path);

        // Set status
         $return_text = 1;

         $this->hotel_model->deleteImage($hotelId,$hotelPath);

         echo json_encode(["success" => true, "imgName" => $imageName]);
        }else{

        // Set status
         $return_text = 0;
         echo json_encode(["success" => false, "imgName" => $imageName]);
        }
    }

    public function savePhotoDb(){
        $hotelId = $this->input->post("hotelId");
        $hotelName = $this->input->post("hotelName");
        $uploadedImgArr = $this->input->post("uploadedImgArr");
        foreach ($uploadedImgArr as $key => $value) {
           
            $imgUrl = $hotelName."/".$value;
            echo $availImage = $this->hotel_model->isImageExists($hotelId,$imgUrl);
            if(count($availImage)<1){
               $data = array("hotel_id"=>$hotelId,"image_url"=>$imgUrl,"status"=>1);
               $this->common_model->insert_data("fifo_hotel_photos",$data);
            }
           
        }

         echo json_encode(['success' => true, 'message' => 'data saved successfully']);
    }

    private function set_upload_options($uploadPath){   
        //  upload an image options
        $config = array();
        $config['upload_path'] = './'.$uploadPath.'/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size']      = '0';
        $config['overwrite']     = TRUE;
        return $config;
    }

    public function savePhotos()
    {
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'zip';
        $hotelName = $this->input->post('hotel_name');
        $uploadPath = FCPATH.'/uploads/'.$hotelName.'/';
        $this->rrmdir($uploadPath);
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

                $Imageurl = [];
                $handle = opendir($uploadPath);
                while($file = readdir($handle)){
                    if($file !== '.' && $file !== '..'){
                        $Imageurl[] = 'uploads/'.$hotelName.'/'.$file;
                    }
                }

                $this->hotel_model->saveHotelPhotos($this->input->post('hotel_id'), $Imageurl);
            }
            echo json_encode(['success' => true, 'message' => 'data saved successfully']);
        } else {
            echo json_encode(['success' => false, 'message' => 'error','error' => $this->upload->display_errors()]);
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
                'field' => 'contact[contact_no]',
                'label' => 'Contact No',
                'rules' => 'required'
            ]
        ];
        if($userType == 'exist') {
            $rule1 = [
                [
                'field' => 'basic[user_id]',
                'label' => 'Owner',
                'rules' => 'required'
            ]
            ];
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
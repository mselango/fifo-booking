<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MasterData extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('master_model');
        $this->load->model('hotel_model');
    }

    public function hotelAdmin()
    {
        $keyword = $this->input->get('term');
        $data = $this->master_model->getHotelAdminList($keyword);
        return $this->outputResponse($data);
    }

    public function countries()
    {
        $data = $this->master_model->getCountryList();
        $response = $this->formatData($data);
        return $this->outputResponse($response);

    }

    public function states()
    {
        $keyword = $this->input->get('term');
        $data = $this->master_model->getStateList($keyword);
        return $this->outputResponse($data);
    }

    public function hotels()
    {
        $keyword = $this->input->get('term');
        $data = $this->master_model->getHotelList($keyword);
        return $this->outputResponse($data);
    }

    public function amenties()
    {
        $keyword = $this->input->post('query');
        $data = $this->master_model->getAmentiesList($keyword);
        return $this->outputResponse($data);
    }

    public function outputResponse($response)
    {
        return $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($response));

    }
    public function searchList()
    {
        $keyword = $this->input->get('term');
        $data = $this->hotel_model->getCombinedSearchList($keyword);
        return $this->outputResponse($data);
    }

    public function formatData($inData)
    {
        $result = [];
        foreach($inData as $data) {
            $fomatArr = [
                $data['id'] => $data['label']
            ];
            array_push($result, $fomatArr);
        }
        return $result;

    }
}
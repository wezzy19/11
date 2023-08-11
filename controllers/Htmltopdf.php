<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class HtmktoPDF extends CI_Controller {
    public function __construct()
    {
        parent function__construct()
        $this->load->model('htmltopdf_model');
    }
    public function index()
    {
        $data['customer_data']=$this->htmltopdf_model->fetch(    
        );
    }
}
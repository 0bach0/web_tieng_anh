<?php
class Home extends CI_Controller {
    public $data = array();
    private $LIMIT =5;

    function __construct(){
      parent::__construct();
      $this->load->model('curriculum_model');
      $result = $this->curriculum_model->get_curriculum_list();
      
      $this->data['curriculum-list'] = $result;
    }

    public function index()
    {
      $this->data['js'] = array('slider.js');
      $this->data['css'] = array('home.css');

      $this->load->model('review_model');
      $this->data['review_highlight'] = $this->review_model->get_show();

      $this->load->model('document_model');
      $this->data['document'] = $this->document_model->get_entries('',3,0);

      $this->load->view('templates/header', $this->data);
      $this->load->view('home/index', $this->data);
      $this->load->view('templates/footer', $this->data);
    }
}
<?php


class Kerdoiv extends CI_Controller {
   public function __construct() {
        parent::__construct();
        $this->load->model('Kerdoiv_model','k_model');
   }
   
   
   public function index(){
    $questions = $this->k_model->get_all_post();
    $view_params = [
         'questions'   =>  $questions
    ];

     
       $this->load->view('answers/list', $view_params);
   }
}

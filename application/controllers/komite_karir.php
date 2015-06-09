<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class Komite_karir extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        /*
        if (!$this->is_logged_in())) 
        {
            $this->session->sess_destroy();
            redirect('login');
        }
        */
        
        $this->load->model('komite_karir');
    }
    
    function getData(){
        $this->load->model('komite_karir');
        echo json_encode(array('data_komite'=>$this->komite_karir->get_all()));
    }
    
    private function json_response($successful, $message){
        echo json_encode(array(
            'isSuccessful' => $successful,
            'message' => $message
        )); 
    }
    
}
    
   
<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class User1 extends CI_Controller
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
    
    public function index()
    {  
        $this->load->view('user1');

    }
    
    function insert(){
        $data=json_decode(file_get_contents("php://input"));
        echo $this->komite_karir->insert($data);
    }
    
    private function json_response($successful, $message){
        echo json_encode(array(
            'isSuccessful' => $successful,
            'message' => $message
        )); 
    }
}
    
   
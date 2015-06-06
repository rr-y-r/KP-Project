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
    }
    
    public function index()
    {  
        $this->load->view('user1');

    }
}
    
   
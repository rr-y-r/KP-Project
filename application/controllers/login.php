<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller
{
    
    public function index()
    {  
        if (!$this->is_logged_in()) {
            $this->load->view('login');
        };
    }
    
    public function loginCheck()
    {

        $is_user = $this->userModel->is($this->input->post('username'),$this->input->post('password'));

        if($is_user)
        {
            $username = $this->input->post('username');
            $id = $this->userModel->get_id($username);
            $tipe = $this->userModel->get_tipe($username);
            

            $data = array(
                'username' => $username,
                'id' => $id,
                'is_logged_in' => TRUE,
                'tipe' => $tipe
            );

            $this->session->set_userdata($data);
            if($tipe == 'user1')
            {
                redirect('admin');
            }
            else
            {
                redirect('user2');
            }
        } else 
        {
            redirect('login/error');
        }
        
    }
    
    public function error()
    {
        $this->load->view('login',array('error' => TRUE));
    }
    
    public function logout()
    {
        if (!$this->is_logged_in()) 
        {
            redirect('login');
        } else 
        {
            $this->session->set_userdata(array('is_logged_in' => FALSE));
            $this->session->sess_destroy();
            $this->load->view('login');
        }
    }
    
    private function is_logged_in()
    {
        return $this->session->userdata('is_logged_in');
    }
}

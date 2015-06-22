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
            $NIK = $this->userModel->get_NIK($username);
            

            $data = array(
                'username' => $username,
                'id' => $id,
                'is_logged_in' => TRUE,
                'tipe' => $tipe,
                'nik' => $NIK
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
    
    function forgot_password(){
        $data = array(
            'nik' => $this->input->post('q0'),
            'tgl_masuk' => $this->input->post('q1'),
            'position_id' => $this->input->post('q2'),
            'nik_atasan' => $this->input->post('q3')
        );
        
        $valid = $this->userModel->validation($data);

        if ($valid == 1) 
            {
                $password = $this->userModel->getUserPassword($data);
                $message = "password anda : ".$password;
                $this->json_response(TRUE, $message);
            } 
        if($valid == 0) 
            {
                $message = "Validasi error, silahkan coba kembali";
                $this->json_response(FALSE, $message);
            }
    }
    
    private function json_response($successful, $message){
        echo json_encode(array(
            'isSuccessful' => $successful,
            'message' => $message
        )); 
    }
}

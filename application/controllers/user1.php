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
        sleep(1);
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nik', 'nik', 'required|max_length[254]');
        $this->form_validation->set_rules('nama', 'nama', 'required|max_length[254]');
        $this->form_validation->set_rules('cat_karir', 'cat_karir', 'required|max_length[254]');
        $this->form_validation->set_rules('hats', 'hats', 'required|max_length[254]');
        $this->form_validation->set_rules('ket_hats', 'ket_hats', 'required|max_length[254]');
        $this->form_validation->set_rules('hasil', 'hasil', 'required|max_length[254]');
        $this->form_validation->set_rules('jalur', 'jalur', 'required|max_length[254]');
        $this->form_validation->set_rules('posisi', 'posisi', 'required|max_length[254]');
        $this->form_validation->set_rules('alasan', 'alasan', 'required|max_length[254]');
        $this->form_validation->set_rules('rekomendasi', 'rekomendasi', 'required|max_length[254]');

        if ($this->form_validation->run() == FALSE) 
        {
            $message = "apply gagal, tolong cek data ticket";
            $this->json_response(FALSE, $message);
        } 
        else 
        {
            
            $data = array(
                'nik' => $this->input->post('nik'), 
                'nama' => $this->input->post('nama'), 
                'cat_karir' => $this->input->post('cat_karir'),
                'hats' => $this->input->post('hats'),
                'ket_hats' => $this->input->post('ket_hats'),
                'hasil' => $this->input->post('hasil'),
                'jalur_karir' => $this->input->post('jalur'),
                'posisi' => $this->input->post('posisi'),
                'alasan' => $this->input->post('alasan'),
                'rekomendasi' => $this->input->post('rekomendasi')
            );
            
            $this->komite_karir->insert($data);
            
            
            /*
            $is_added = $this->komite_karir->add(
                $this->input->post('nik'), 
                $this->input->post('nama'), 
                $this->input->post('hats'),
                $this->input->post('jalur'),
                $this->input->post('posisi'),
                $this->input->post('alasan'),
                $this->input->post('rekomendasi')
                
            );
            
            if ($is_added) 
            {
                $message = "Data komite berhasil diapply !";
                $this->json_response(TRUE, $message);
            } 
            else 
            {
                $message = "apply gagal, tolong cek data komite";
                $this->json_response(FALSE, $message);
            }
            */
        }
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
    
   
<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        
        if (!$this->session->userdata('is_logged_in')) 
        {
            $this->session->sess_destroy();
            redirect('login');
        }
        
        $this->load->model('komite_karir');
        $this->load->model('userModel');
        
    }
    
    public function index()
    {  
        $data_komite = $this->komite_karir->get_all();

        $this->load->view('admin', array(
            'datakomite' => $data_komite
        ));

    }
    
    function print_formKomite(){
        
        $data = array(
            'group' => $this->input->post('group'),
            'tanggal' => $this->input->post('tanggal'),
            'jumlah' => $this->input->post('jumlah'),
            'id_komite' => $this->input->post('komite_id')
        ); 
        
        $data_komite = $this->komite_karir->get_by_id(1);
        
        $temp = $this->input->post('jumlah');
        
        for($i=1;$i<$temp;$i++){
            
            $data['assesor'.$i] = $this->input->post('assesor'.$i);
            $data['jabatan'.$i] = $this->userModel->getJabatan($this->input->post('assesor'.$i));
        }
            
        $this->load->view('test_table', array(
            'data_print' => $data,
            'data_komkar' => $data_komite
        ));

    }
    
    
    function monitoring(){
        /*
        this load data kerjaan
        this load data karyawan
        this input status kerjaan on karyawan
        
        */
        $data_kerjaan = $this->komite_karir->getDatabyTipe($this->session->userdata('tipe'));
        $this->load->view('monitoring');
    }
    
    function manajemen_user(){
        
        $data_user = $this->userModel->getData('user1');
        $user_table = $this->userModel->get_user();
        $this->load->view('manajemen_user', array(
            'profileData'=>$data_user,
            'userTableData'=>$user_table));
    }
    
    function getFormKomite(){
        
    }
    
    function getUserData(){
        echo json_encode(array('data_user'=>$this->userModel->get_user()));
    }
    
    function getPejabatData(){
        echo json_encode(array('data_pejabat'=>$this->userModel->getPejabatData()));
    }
    
    function createUserx(){
        $data_user = $this->userModel->getData('user1');
        foreach($data_user as $data => $data_value){
            foreach($data_value as $row => $row_value){
                if($row <> "id"){
                    //code 
                    $data_input[$row] = $this->input->post($row);
                    
                }
            }
        }
        
        $is_added = $this->userModel->insert($data_input);
        
        if ($is_added) 
            {
                $message = "Data user berhasil ditambahakan !";
                $this->json_response(TRUE, $message);
            } 
            else 
            {
                $message = "tambah data gagal, tolong cek kembali input data";
                $this->json_response(FALSE, $message);
            }
        
    }
    
    
    function profile($username){
        $profileData = $this->userModel->getData($username);
        $this->load->view('profile', array(
            'profileData'=>$profileData));
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
        $this->form_validation->set_rules('nik_kontributor', 'nik_kontributor', 'max_length[254]');

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
                'rekomendasi' => $this->input->post('rekomendasi'),
                'nik_kontributor' => $this->input->post('nik_kontributor')
            );
            
            $is_added=$this->komite_karir->insert($data);
            
            
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
            */
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
            
        }
    }
    
    function getData(){
        $this->load->model('komite_karir');
        echo json_encode(array('data_komite'=>$this->komite_karir->get_all()));
    }
    
    function deleteDataKomite($id){
        sleep(1);
        $this->komite_karir->delete($id);
    }
    
    function editKomite(){
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
        $this->form_validation->set_rules('alasan', 'alasan', 'max_length[254]');
        $this->form_validation->set_rules('rekomendasi', 'rekomendasi', 'required|max_length[254]');

        if ($this->form_validation->run() == FALSE) 
        {
            $message = "apply gagal, tolong cek data ticket";
            $this->json_response(FALSE, $message);
        } 
        else 
        {
            $id = $this->input->post('id');
            
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
                'rekomendasi' => $this->input->post('rekomendasi'),
                'status' => $this->input->post('status')
            );
            
            $is_updated = $this->komite_karir->update($id,$data);
            
            if ($is_updated) 
            {
                $message = "Data Komite Dengan NIK : <strong> ".$this->input->post('nik')."</strong> berhasil diubah !";
                $this->json_response(TRUE, $message);
            } 
            else 
            {
                $message = "Data Komite Dengan NIK : <strong> ".$this->input->post('nik')."</strong> Edit Error, silahkan cek data anda !";
                $this->json_response(FALSE, $message);
            }

        }
    }
    
    public function forget()
	{
		if (isset($_GET['info'])) {
               $data['info'] = $_GET['info'];
              }
		if (isset($_GET['error'])) {
              $data['error'] = $_GET['error'];
              }
		
		$this->load->view('login-forget',$data);
	}
    
    private function json_response($successful, $message){
        echo json_encode(array(
            'isSuccessful' => $successful,
            'message' => $message
        )); 
    }
}
    
   
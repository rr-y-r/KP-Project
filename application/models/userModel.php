<?php

class UserModel extends CI_Model 
{
    function __construct()
    {
        parent::__construct();
    }

    public function get_all($id)
    {
        $users = $this->db
            ->get_where('user', array('id' => $id))
            ->result_array();

        return $users;
    }
    
    function get_user(){
        return $this->db->select('*')
            ->order_by('id')
            ->get('user')
            ->result_array();
    }
    
    function insert($data){
        $this->db->insert('user',$data);
        
        return TRUE;
    }

    public function get_id($username)
    {
        $row = $this->db->get_where('user', array('username' => $username))->row();
        return $row->id;
    }

    public function get_tipe($username)
    {
        $tipe = $this->db->select('tipe')
            ->get_where('user', array('username'=>$username))
            ->row();
        
        return $tipe->tipe;
    }
    
    public function cekTipe($username)
    {
        $level = $this->db->select('tipe')
            ->get_where('user', array('username'=>$username))->row('tipe');
        
        return $level;
    }

    public function check_password($id, $password)
    {
        $check = $this->db->get_where('user', array('id' => $id, 'password' => $password));
        
        return ($check->num_rows == 1) ? TRUE : FALSE;
    }

    public function is($username, $password)
    {
        $query = $this->db->get_where('user', array('username' => $username, 'password' => $password));
        
        return ($query->num_rows == 1) ? TRUE : FALSE;
    }
    
    function getData($username){
        $users = $this->db
            ->get_where('user', array('username' => $username))
            ->result_array();

        return $users;
    }
    
    function get_NIK($username){
        $row = $this->db->get_where('user', array('username' => $username))->row();
        return $row->nik;
        
    }
    
    function validation($data){
        $query = $this->db->get_where('user', $data);
        
        return $query->num_rows;
    }
    
    function getUserPassword($data){
        $password = $this->db->select('password')
            ->get_where('user',$data)->row();
        
        return $password->password;
    }
}

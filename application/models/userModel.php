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
}

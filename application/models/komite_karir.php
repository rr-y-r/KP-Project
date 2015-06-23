<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Komite_karir extends CI_Model 
{
    function __construct()
    {
        parent::__construct();
    }
    
    protected $tblname='komite_karir';


    
    function get_all()
    {
        return $this->db->select('*')
            ->order_by('id')
            ->get('komite_karir')
            ->result_array();
    }
    
    function get_by_id($id){
        return  $this->db->get_where('komite_karir', array('id' => $id))->result_array();

    }
    
    function getDatabyTipe($userType){
        return $this->db->select('*')
            ->order_by('id')
            ->get('komite_karir')
            ->result_array();
    }

    function get_by_NIK($nik)
    {
        $form = $this->db->select('*')
            ->order_by('id')
            ->get_where('komite_karir', array('nik' => $nik))
            ->result_array();

        return $form;
    }
    
    function insert($data){
        $this->db->insert($this->tblname,$data);
        
        return TRUE;
    }
 
/*
    public function add($nik,$nama,$cat_karir,$hats,$ket_hats,$hasil,$jalur_karir,$posisi,$alasan,$rekomendasi)
    {        
        $this->db->insert('komite_karir', array(
                'nik' => $nik,
                'nama'=>$nama,
                'cat_karir'=>$cat_karir,
                'hats'=>$status,
                'file'=>$file,
                'userid'=>$userid
            )
        ); 
        return TRUE;
    }
*/
    public function delete($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('komite_karir');
    }

    public function update($id,$data)
    {
        $this->db->where('id',$id)
                ->update('komite_karir', $data);
        
        return TRUE;
    }
    
    

    
}

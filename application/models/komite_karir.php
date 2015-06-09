<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Komite_karir extends CI_Model 
{
    function __construct()
    {
        parent::__construct();
    }
    
    protected $tblname='komite_karir';

    function get_by_id($idkomite)
    {
        $form = $this->db
            ->get_where('komite_karir', array('id' => $idkomite))
            ->result_array();

        return $form;
    }
    
    function get_all()
    {
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
        return $this->db->insert($this->tblname,$data);
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
    public function delete($ticketid)
    {
        $this->db->where('ticketid',$ticketid);
        $this->db->delete('ticket');
    }

    public function update($ticketid,$jenis,$deskripsi,$lampiran,$status,$expired,$pesan)
    {
        $ticket =  array(
            'jenis' => $jenis, 
            'deskripsi' => $deskripsi, 
            'lampiran' => $lampiran,
            'status' => $status,
            'expired' => $expired,
            'pesan' => $pesan
        );
        
        $this->db->where('ticketid',$ticketid)
                ->update('ticket', $ticket);
        
        return TRUE;
    }
    
    

    
}

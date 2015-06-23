<?php if(!defined('BASEPATH')) exit('Hacking Attempt : Keluar dari sistem..!!');
class Model_user extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

  
  

    public function dataPengguna($username)
    {
        $query = $this->db->query("SELECT * FROM pengguna WHERE userid='$username'");
        return $query->result();
        // $this->db->select('userid');
        // $this->db->from('pengguna');
        // $this->db->where('userid', $username);
        // $query = $this->db->get();
        // return $query->result();
        //return $query->row();username;
    }

    public function dataPegawai($nip)
    {
        $query = $this->db->query("SELECT * FROM pegawai WHERE NIP='$nip'");
        return $query->result();
        // return $this->db->get_where('pegawai',array('NIP'=>$nip))->row();
        // $this->db->select('nip');
        // $this->db->where('nip', $nip);
        // $query = $this->db->get('pegawai');
        // return $query->result();
        // //return $query->row();username;
    }

    // public function getPengguna($username)
    // {
    //     return $this->db->get_where('pengguna',array('userid'=>$username))->row();
    // }

    // public function getPegawai($nip)
    // {
    //     return $this->db->get_where('pegawai',array('NIP'=>$nip))->row();
    // }

}
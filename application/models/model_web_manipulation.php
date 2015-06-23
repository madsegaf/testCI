<?php if(!defined('BASEPATH')) exit('Hacking Attempt : Keluar dari sistem..!!');
class model_web_manipulation extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
 
    

    public function sendfbck_process($n,$e,$s,$m)
    { 
        $data = array(
        'id_feedback' => '',
        'name' => $n,
        'email' => $e,
        'subject' => $s,
        'message' => $m
        );
        $tambah = $this->db->insert('tbl_feedback', $data);
        return $tambah;
    }
//

    public function retrieve_data_articles()
    {
        $query = $this->db->query("SELECT * FROM tbl_article
                                   LEFT JOIN tbl_user on tbl_article.posted_by=tbl_user.id_user
                                   WHERE tbl_article.is_delete='0'
                                   ORDER BY id_article ASC LIMIT 3");
        return $query->result();
    }

      public function retrieve_data_gallery()
    {
        $query = $this->db->query("SELECT * FROM tbl_gallery 
                                   LEFT JOIN tbl_user on tbl_gallery.posted_by=tbl_user.id_user
                                   WHERE tbl_gallery.is_delete='0'
                                   ORDER BY id_photo ASC LIMIT 8");
        return $query->result();
    }
 





  public function retrieve_more_articles()
    {
        $query = $this->db->query("SELECT * FROM tbl_article
                                   LEFT JOIN tbl_user on tbl_article.posted_by=tbl_user.id_user
                                   WHERE tbl_article.is_delete='0'
                                   ORDER BY id_article ASC");
        return $query->result();
    }

      public function retrieve_more_gallery()
    {
        $query = $this->db->query("SELECT * FROM tbl_gallery 
                                   LEFT JOIN tbl_user on tbl_gallery.posted_by=tbl_user.id_user
                                   WHERE tbl_gallery.is_delete='0'
                                   ORDER BY id_photo ASC");
        return $query->result();
    }
 

 function getarticle($id){  
 
  return $this->db->get_where('tbl_article',array('id_article'=>$id))->row();
     
    }
}

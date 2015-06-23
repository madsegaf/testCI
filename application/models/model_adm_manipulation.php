<?php if(!defined('BASEPATH')) exit('Hacking Attempt : Keluar dari sistem..!!');
class model_adm_manipulation extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

 
    //  public function add_user() 
    //  {
    //     # generate a random salt to use for this account
    //     $salt = bin2hex(mcrypt_create_iv(32, MCRYPT_DEV_URANDOM));
    //     $saltedPW =  "muhammad" . $salt;
    //     $hashedPW = hash('sha256', $saltedPW);

    //     $data = array(
    //     'id_user' => '',
    //     'username' => 'madsegaf',
    //     'password' =>  $hashedPW,
    //     'salt' =>  $salt,
    //     'level' => 'superadmin'
    //     );
    //     $tambah = $this->db->insert('tbl_user', $data);
    //     return $tambah;
    // }
    
    function getsalt($username){ //mengambil data berdasarkan id (primary key)
        $query = $this->db->query("SELECT salt FROM tbl_user WHERE username='$username'");
        return $query->result();
    }
   
    public function retrieve_user($username, $psw,$thesalt)
    {
        $salt = $thesalt;
        $saltedPW =  $psw . $salt;
        $hashedPW = hash('sha256', $saltedPW);

        $this->db->select('id_user');
        $this->db->from('tbl_user');
        $this->db->where('username', $username);
        $this->db->where('password', $hashedPW);
       
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function data_user($username, $psw,$thesalt)
    {
        $salt = $thesalt;
        $saltedPW =  $psw . $salt;
        $hashedPW = hash('sha256', $saltedPW);

        $query = $this->db->query("SELECT * FROM tbl_user WHERE username='$username' AND password='$hashedPW'");
        return $query->result();
         
    }


    public function register_user_model($u,$l,$p)
    {
        $salt = bin2hex(mcrypt_create_iv(32, MCRYPT_DEV_URANDOM));
        $saltedPW =  $p . $salt;
        $hashedPW = hash('sha256', $saltedPW);

        $data = array(
        'id_user' => '',
        'username' => $u,
        'password' => $hashedPW,
        'level' => $l,
        'salt' => $salt
        );
        $tambah = $this->db->insert('tbl_user', $data);
        return $tambah;
    }
//



    /////////////////////////////////////////

    public function retrieve_data_articles()
    {
        $query = $this->db->query("SELECT * FROM tbl_article
                                   LEFT JOIN tbl_user on tbl_article.posted_by=tbl_user.id_user
                                   WHERE tbl_article.is_delete='0'
                                   ORDER BY id_article ASC");
        return $query->result();
    }


    public function input_article_process($a,$b,$c,$d)
    {

        //$this->session->userdata('id_user')
        if($this->session->userdata('level')=="superadmin")
        {
            $ispost="1";
        }else
        {
            $ispost="0";
        }

        $data = array(
        'id_article' => '',
        'title' => $a,
        'content' => $b,
        'date' => $c,
        'photo' => $d,
        'posted_by' => $this->session->userdata('id_user'),
        'is_posted' => $ispost,
        'is_delete' => '0'
        );
        $tambah = $this->db->insert('tbl_article', $data);
        return $tambah;
    }

     public function delete_article_process($id)
        {
        $data = array(
        'is_delete' => '1'
        );

        $this->db->where('id_article',$id);
        $this->db->update('tbl_article',$data); //update data mahasiswa 
        // $this->db->where('id_article',$id);
        // $this->db->delete('tbl_article');
        }
 

      public function get_article($id)
      { //mengambil data berdasarkan id (primary key)
 
        return $this->db->get_where('tbl_article',array('id_article'=>$id))->row();
      }

        public function update_article_process($id,$a,$b,$c,$d)
       {

        //$this->session->userdata('id_user')
        if($this->session->userdata('level')=="superadmin")
        {
            $ispost="1";
        }else
        {
            $ispost="0";
        }

        $data = array(
        'title' => $a,
        'content' => $b,
        'date' => $c,
        'photo' => $d,
        'posted_by' => $this->session->userdata('id_user'),
        'is_posted' => $ispost
        );

        $this->db->where('id_article',$id);
        $this->db->update('tbl_article',$data); //update data mahasiswa    
        }


       public function update_post_article_process($id,$status)
       {

        //$this->session->userdata('id_user')
        if($status=="drafted")
        {
            $ispost="1";
        }else
        {
            $ispost="0";
        }

        $data = array(
        'is_posted' => $ispost
        );

        $this->db->where('id_article',$id);
        $this->db->update('tbl_article',$data); //update data mahasiswa    
        }


/////////////////////////////////////////////////

    public function retrieve_data_gallery()
    {
        $query = $this->db->query("SELECT * FROM tbl_gallery 
                                   LEFT JOIN tbl_user on tbl_gallery.posted_by=tbl_user.id_user
                                   WHERE tbl_gallery.is_delete='0'
                                   ORDER BY id_photo ASC");
        return $query->result();
    }

    public function input_gallery_process($a,$b)
    {
         //$this->session->userdata('id_user')
        if($this->session->userdata('level')=="superadmin")
        {
            $ispost="1";
        }else
        {
            $ispost="0";
        }

        $data = array(
        'id_photo' => '',
        'photo_title' => $a,
        'photo_file' => $b,
        'posted_by' => $this->session->userdata('id_user'),
        'is_posted' => $ispost,
        'is_delete' => '0'
        );
        $tambah = $this->db->insert('tbl_gallery', $data);
        return $tambah;
    }
 
        public function delete_gallery_process($id)
        {
        $data = array(
        'is_delete' => '1'
        );

        $this->db->where('id_photo',$id);
        $this->db->update('tbl_gallery',$data); 

        // $this->db->where('id_photo',$id);
        // $this->db->delete('tbl_gallery');
        }






//////////////////////////////////////////

    public function retrieve_data_feedback()
    {
        $query = $this->db->query("SELECT * FROM tbl_feedback ORDER BY id_feedback ASC");
        return $query->result();
    }

}

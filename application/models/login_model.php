
<?php 

    class Login_model extends CI_Model{



    function login($username,$password){
        // $chek=  $this->db->get_where('operator',array('username'=>$username,'password'=>  md5($password)));
         $this->db->where('username',$username);
         $this->db->where('password',$password);
           $this->db->where('tbl_login.username = tbl_user_profile.user_login');

       $chek = $this->db->get('tbl_login,tbl_user_profile',TRUE);

        if($chek->num_rows() > 0){
             
               return $chek->row_array();
        }
    }


    function signup($username,$password,$data){
      
          $this->db->insert('tbl_login',$data, TRUE);

            } 
  }
 ?>

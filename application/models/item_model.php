<?php 

		class Item_model extends CI_Model{

			function tampil(){
            $query = $this->db->get('tbl_pos');

            if($query->num_rows() > 0 ){

              return $query;
            }else {
              return null;
            }
			}
       

      function list_tbl_pos(){

        $tbl_pos = $this->db->get('tbl_pos');
        return $tbl_pos;
      }

      function sum(){

      	$query =  $this->db->count_all('tbl_pos');

        // if($query->num_rows() > 0){

        //   return $query;

        // }else {

        //   return null;
        // }
      }


    function data_masuk($data){
         $this->db->insert('tbl_pos',$data);
    }

    function product($id){

              $param = array('nis'=>$id);
            return $this->db->get_where('tbl_pos',$param);
          }

    
      function update($data,$id)
      {
          $this->db->where('nis',$id);
          $this->db->update('tbl_pos',$data);
      }

      function delete($kategori_id){

          $this->db->where('nis',$kategori_id);
          $this->db->delete('tbl_pos');
      }
        
      function cari($cari){
          $this->db->like('nis',$cari);
           $this->db->or_like('judul',$cari);
          return $this->db->get('tbl_pos');
      }


        function tester(){

              $query = $this->db->get('barang');

              if($query->num_rows() > 0){
                return $query;
              }else {
                return null;
              }
        }

        function create_comment(){

          $data = array(
              'name' => $this->input->post('name'),
              'email' => $this->input->post('email'),
              'created_at' => date('d-m-Y H:i:s')
              'body' => $this->input->post('body')
            );

          $this->db->insert('comments',$data);
        }
			
		}
 ?>
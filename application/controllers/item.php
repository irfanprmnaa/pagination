<?php 

	class Item extends CI_Controller{

		private $limit=2;
		private $privacy=6;

			function __construct(){
				parent::__construct();
				date_default_timezone_set('Asia/bangkok');
				$this->load->model('item_model');
				$this->load->library('upload');

			}

		function homepage(){
			
            $config['base_url'] =  'http://localhost/test1/index.php/item/homepage';
            $config['total_rows'] = $this->db->get('tbl_pos')->num_rows();
            $config['per_page'] = $this->privacy;
            $config['num_links'] = $this->limit;
            $config['full_tag_open'] = '<div class="pagination">';
            $config['full_tag_close'] = '</div>';
            
            $this->pagination->initialize($config);	
		
			$data['testing'] = $this->db->get('tbl_pos',$config['per_page'],$this->uri->segment(3));
						//membuat notif ketika sedang di proses

			        if($this->uri->segment(3)=="delete_success")
		            $data['message']="<div class='alert alert-danger'>Data berhasil dihapus</div>";
		        else if($this->uri->segment(3)=="add_success")
		            $data['message']="<div class='alert alert-success'>Data Berhasil disimpan</div>";
		        else if($this->uri->segment(3)=="update_success")
		            $data['message']="<div class='alert alert-success'>Data Berhasil update</div>";
		        else
		            $data['message']="";
	 				$this->load->view('all_item/homepage',$data);
			}

			function add(){

		$this->_set_rules();
		if($this->form_validation->run()==true){
			
		 $config['upload_path'] = './assets/post/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '9999999999999999';
        $config['max_width']  = '999999999999';
        $config['max_height']  = '99999999999';

 		$this->upload->initialize($config);

        if(! $this->upload->do_upload()){
        $image ="kosong.jpg";
        }else {
        	$image = $this->upload->data();
			}
					$data = array (
					'nis' => $this->input->post('nis'),
                    'judul' => $this->input->post('judul'),
                    'konten' => $this->input->post('konten'),
                    'date' => date('Y-m-d'),
                    'time' => date('H:i:s'),
                    'image' => $image['file_name'],
                    'username' => $this->session->userdata('nama'),
                    'email' => $this->session->userdata('email')
				);
					$this->db->set($data);
					$this->item_model->data_masuk($data);
					redirect('item/homepage/add_success');
				}

				$this->load->view('all_item/add');
		
			}


				function comment(){

					$this->item_model->()
				}

				    function testing(){

					$data['tester'] = $this->item_model->tester();
					$this->load->view('testing',$data);
		}

			function update(){
				$this->_set_rules();
	if($this->form_validation->run() == TRUE){

		$id = $this->input->post('id');
		$data = array(

			 'nis'=>$this->input->post('nis'),
			  'judul'=>$this->input->post('judul'),
			  'konten'=>$this->input->post('konten')
			   );

		$this->db->set($data,$id);
		$this->item_model->update($data,$id);
		redirect('item/homepage/update_success');
			}else{
		$id = $this->uri->segment(3);
		$data['testing'] = $this->item_model->product($id)->row_array();
		$data['show'] = $this->item_model->tampil();
		
		$this->load->view('all_item/update',$data);	
				
		}
	}
			function delete(){
				$kategori_id = $this->uri->segment(3);
				$this->item_model->delete($kategori_id);
				redirect('item/homepage/delete_success');
			}

			function cari(){
			        $data['title']="Pencarian";
			        $cari=$this->input->post('cari');
			        $cek=$this->item_model->cari($cari);
			        if($cek->num_rows()>0){
			            $data['message']="";
			            $data['posts']= $cek->result();
			            $this->load->view('all_item/cari',$data);
			        }else{
			            $data['message']="<div class='alert alert-success'>Data tidak ditemukan</div>";
			            $data['posts']=$cek->result();
			            $this->load->view('all_item/cari',$data);
			        }
  				  }

  				  function gallery(){

			  		  	$config['base_url'] =  site_url('item/gallery');
			            $config['total_rows'] = $this->db->get('tbl_pos')->num_rows();
			            $config['per_page'] = 3;
			            $config['num_links'] = 2;
			            $config['full_tag_open'] = '<div class="pagination">';
			            $config['full_tag_close'] = '</div>';

           				 $this->pagination->initialize($config);	
           
  					  	$this->load->view('all_item/gallery',$data);
    				  }

				function _set_rules(){

					$this->form_validation->set_rules('nis','NIS','required|max_length[20]');
					$this->form_validation->set_rules('judul','Judul','required|max_length[20]');
					$this->form_validation->set_rules('konten','Konten','required');
					 $this->form_validation->set_error_delimiters("<div class='alert alert-danger'>","</div>");
				}
	
}
 ?>
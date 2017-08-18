<?php 

	 class Model_testing extends CI_Model{



	 	function tampildata(){
	 		// $query = "select pesan.id_pesan,pelanggan.id_pelanggan,pelanggan.nm_pelanggan,pelanggan.alamat from pelanggan,pesan where pelanggan.id_pelanggan=pesan.id_pesan";
	 		// // $query = "select * from produk";
	 		//  return $this->db->query($query);

	 		 $this->db->select("pesan.id_pesan,pelanggan.id_pelanggan,pelanggan.nm_pelanggan,pelanggan.alamat");
	 		 $this->db->where("pelanggan.id_pelanggan=pesan.id_pesan");
	 		 $this->db->get('pelanggan,pesan');


	 	}
	 }
 ?>
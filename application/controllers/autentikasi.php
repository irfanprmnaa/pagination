<?php 

class Autentikasi extends CI_Controller{


            function __construct(){

                parent::__construct();

                $this->load->model('login_model');
            }

            function login(){
                $username = $this->session->userdata('username');
                $password = $this->session->userdata('password');
                $access = $this->session->userdata('access');
                $email = $this->session->userdata('email');
                if(empty($username) && empty($password)){

                    $this->load->view('autentikasi/login');
                }else if($access == 'user'){

                        redirect('item/homepage'); 
                }else if($access == 'super_admin'){
                    redirect('admin_control/homepage');
                }
            }

          function proseslogin(){ 


                    $username = $this->input->post('username');
                    $password = $this->input->post('password');


                if(empty($password) && empty($username)){
                    $this->session->set_flashdata('error','username dan password belum diisi'); 
                }else if(empty($username)){
                    $this->session->set_flashdata('error','username belum diisi');  
                }else if(empty($password)){
                    $this->session->set_flashdata('error','password belum diisi');  
                }else if($username && $password){
                     $this->session->set_flashdata('error','username atau password anda salah');  
                }
                $this->form_validation->set_rules('username','username','required');
                $this->form_validation->set_rules('password','password','required');
                $this->form_validation->set_error_delimiters('','<br>');
                if($this->form_validation->run()== TRUE){
                    $cekuser = $this->login_model->login($username,$password);
                    if($cekuser){

                        $data = array(
                            'username' => $username,
                            'password' => $password,
                            'access' => $cekuser['access'],
                            'nama' => $cekuser['nama'],
                            'email' => $cekuser['email']
                        ); 
                        $this->session->set_userdata($data);
                        $access = $this->session->userdata('access');
                        if($access == 'user'){
                        redirect('item/homepage');
                        }else if($access == 'super_admin'){
                            redirect('admin_control/mainpage');
                        }
                    }else {
                        redirect('autentikasi/login');
                    }
                }else {
                        redirect('autentikasi/login');

                    }
                }
              
             function signup(){
                     $this->load->view('autentikasi/login');

            }
            function prosessignup(){

                $username = $this->input->post('username');
                $password = $this->input->post('password');
                $password2 = $this->input->post('password2');

                if(empty($password) && empty($username)){
                    $this->session->set_flashdata('error','Maaf registrasi anda gagal');    
                }else if(empty($username)){
                    $this->session->set_flashdata('error','username belum diisi');  
                }else if(empty($password)){
                    $this->session->set_flashdata('error','password belum diisi');  
                }else if(empty($password2)){
                    $this->session->set_flashdata('error','Retype password belum diisi');   
                }
                $this->form_validation->set_rules('username','Username','required');
                $this->form_validation->set_rules('password','Password','required');
                $this->form_validation->set_rules('password2','Password','required');
                $this->form_validation->set_error_delimiters('','<br>');    

                if($this->form_validation->run()== TRUE){

                       $data = array(

                          'username' => $this->input->post('username'),
                          'password' => $this->input->post('password'),
                          'access' => 'user'
                      );

                        $this->db->set($data);
                            $this->login_model->signup($username,$password,$data);

                    // $this->m_login->tiruan();
                        $this->session->set_flashdata('berhasil','Registrasi berhasil');
                    redirect('autentikasi/login');
                }else{

                    redirect('autentikasi/signup');
                }
            }

            function logout(){

                $this->session->sess_destroy();
                redirect('autentikasi/login');
            }

        }

 ?>
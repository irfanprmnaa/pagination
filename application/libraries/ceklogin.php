 <?php 

		class Ceklogin{

			 var $ci;

    function __construct() {
        $this->ci = &get_instance();
    }

				    function isLogin() {
                if ($this->ci->session->userdata('is_login') == TRUE) {
                    return TRUE;
                } else {
                    return FALSE;
                }
            }

        function checksesslogin(){
                if ($this->isLogin() == TRUE) {
                    redirect('item/homepage');
                }else{}
			}


		}
 ?> 
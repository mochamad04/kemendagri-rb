<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {
	public function __construct() {
        parent::__construct();
		$this->load->helper('captcha');
    }
    
	public function index(){
		$data['title'] = "Download Area";
		$data['description'] = description();
		$data['keywords'] = keywords();
		//validating form fields
		$this->form_validation->set_rules('username', 'Email', 'required');
		$this->form_validation->set_rules('user_password', 'Password', 'required');
		$this->form_validation->set_rules('userCaptcha', 'Captcha', 'required|callback_check_captcha');
		
		if($this->session->userdata('atos_tiasa_leubeut')){
			redirect('sso');
		}else{
			if ($this->form_validation->run() == false)
			{
				$random_number = substr(number_format(time() * rand(),0,'',''),0,6);
				$vals = array(
					 'word' => $random_number,
					 'img_path' => './captcha/',
					 'img_url' => base_url().'captcha/',
					 'img_width' => 120,
					 'img_height' => 32,
					 'expiration' => 7200
					);
				$data['captcha'] = create_captcha($vals);
				$userCaptcha = $this->input->post('userCaptcha');
				$this->session->set_userdata('captchaWord',$data['captcha']['word']);
				$this->load->view(template().'/login',$data);
			}else{
				$username=$this->input->post('username');
				$user_password= $this->input->post('user_password');

				$curl = curl_init();
		        curl_setopt_array($curl, array(
		          CURLOPT_SSL_VERIFYPEER => false,
		          CURLOPT_URL => "https://ropeg.setjen.kemendagri.go.id/restsimpeg/api/loginbnpp",
		          CURLOPT_RETURNTRANSFER => true,
		          CURLOPT_ENCODING => "",
		          CURLOPT_MAXREDIRS => 10,
		          CURLOPT_TIMEOUT => 30,
		          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		          CURLOPT_CUSTOMREQUEST => "POST",
		          CURLOPT_POSTFIELDS => "nip=".$username."&password=".$user_password,
		          CURLOPT_HTTPHEADER => array(
		          "content-type: application/x-www-form-urlencoded",
		          
		          ),
		        ));

		        $response = curl_exec($curl);
		        $err = curl_error($curl);
		        $r   = json_decode($response,true);
		        curl_close($curl);
		        if($r['status'] == 1){
					$data2 = array(
						'sesi_nip' => $r['message']['nip'],
						'atos_tiasa_leubeut' => TRUE,
					);
					$this->session->set_userdata($data2);
					
					$data['ip']=$this->input->ip_address();
					$data['login_time']=date('Y-m-d H:i:s');
					redirect('sso');
				}else{
					$random_number = substr(number_format(time() * rand(),0,'',''),0,6);
					$vals = array(
						 'word' => $random_number,
						 'img_path' => './captcha/',
						 'img_url' => base_url().'captcha/',
						 'img_width' => 120,
						 'img_height' => 32,
						 'expiration' => 7200
						);
					$data['captcha'] = create_captcha($vals);
					$userCaptcha = $this->input->post('userCaptcha');
					$this->session->set_userdata('captchaWord',$data['captcha']['word']);
					$data["pesan"]="NIP / Password Anda Salah !!!";
					$this->load->view(template().'/login',$data);
				}
			}
		}
	}

	public function check_captcha($str){
		$word = $this->session->userdata('captchaWord');
		if(strcmp(strtoupper($str),strtoupper($word)) == 0){
		  return true;
		}
		else{
		  $this->form_validation->set_message('check_captcha', 'KODE CAPTCHA SALAH !');
		  return false;
		}
	}

	public function logout(){
	 //    $id_user = $this->session->userdata["sesi_id"];
		// $data['ip']=$this->input->ip_address();
		// $data['logout_time']=date('Y-m-d H:i:s');
		// $xss_data = $this->security->xss_clean($data);
		// $this->db->where('id', $id_user);
		// $this->db->update('ref_users',$xss_data);	
		$this->session->sess_destroy();
        redirect('login');
	}
}

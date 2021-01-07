<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Sso extends CI_Controller {
	public function __construct() {
        parent::__construct();
		$this->atos_tiasa_leubeut();
    }
    
	public function atos_tiasa_leubeut(){
		if(!$this->session->userdata('atos_tiasa_leubeut')){
			redirect('login');
		}
    }

	public function index(){
		$data['title'] = "SSO ";
		$data['description'] = description();
		$data['keywords'] = keywords();
		$nip = $this->session->userdata('sesi_nip');
    //$nip = '199110012012061001'
		$curl = curl_init();
        curl_setopt_array($curl, array(
          CURLOPT_SSL_VERIFYPEER => false,
          CURLOPT_URL => "https://ropeg.setjen.kemendagri.go.id/restsimpeg/api/api_profil",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "POST",
          CURLOPT_POSTFIELDS => "token=af9ec164748d7690c4f58021b6907d8d&nip=".$nip,
          CURLOPT_HTTPHEADER => array(
          "content-type: application/x-www-form-urlencoded",
          
          ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);
        $r   = json_decode($response,true);
        curl_close($curl);

        //Pangkat
        $curl2 = curl_init();
        curl_setopt_array($curl2, array(
          CURLOPT_SSL_VERIFYPEER => false,
          CURLOPT_URL => "https://ropeg.setjen.kemendagri.go.id/restsimpeg/api/pangkat_android",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "POST",
          CURLOPT_POSTFIELDS => "token=af9ec164748d7690c4f58021b6907d8d&nip=".$nip,
          CURLOPT_HTTPHEADER => array(
          "content-type: application/x-www-form-urlencoded",
          
          ),
        ));

        $response2 = curl_exec($curl2);
        $err2 = curl_error($curl2);
        $r2   = json_decode($response2,true);
        curl_close($curl2);

        //Jabatan
        $curl3 = curl_init();
        curl_setopt_array($curl3, array(
          CURLOPT_SSL_VERIFYPEER => false,
          CURLOPT_URL => "https://ropeg.setjen.kemendagri.go.id/restsimpeg/api/jabatan_android",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "POST",
          CURLOPT_POSTFIELDS => "token=af9ec164748d7690c4f58021b6907d8d&nip=".$nip,
          CURLOPT_HTTPHEADER => array(
          "content-type: application/x-www-form-urlencoded",
          
          ),
        ));

        $response3 = curl_exec($curl3);
        $err3 = curl_error($curl3);
        $r3   = json_decode($response3,true);
        curl_close($curl3);

        //Pendidikan
        $curl4 = curl_init();
        curl_setopt_array($curl4, array(
          CURLOPT_SSL_VERIFYPEER => false,
          CURLOPT_URL => "https://ropeg.setjen.kemendagri.go.id/restsimpeg/api/pendidikan_android",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "POST",
          CURLOPT_POSTFIELDS => "token=af9ec164748d7690c4f58021b6907d8d&nip=".$nip,
          CURLOPT_HTTPHEADER => array(
          "content-type: application/x-www-form-urlencoded",
          
          ),
        ));

        $response4 = curl_exec($curl4);
        $err4 = curl_error($curl4);
        $r4   = json_decode($response4,true);
        curl_close($curl4);

        //CekSimpeg
        $curl5 = curl_init();
        curl_setopt_array($curl5, array(
          CURLOPT_SSL_VERIFYPEER => false,
          CURLOPT_URL => "https://ropeg.setjen.kemendagri.go.id/restsimpeg/api/ceksimpeg",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "POST",
          CURLOPT_POSTFIELDS => "nip=".$nip,
          CURLOPT_HTTPHEADER => array(
          "content-type: application/x-www-form-urlencoded",
          
          ),
        ));

        $response5 = curl_exec($curl5);
        $err5 = curl_error($curl5);
        $r5   = json_decode($response5,true);
        curl_close($curl5);

        //CekTakah
        $curl6 = curl_init();
        curl_setopt_array($curl6, array(
          CURLOPT_SSL_VERIFYPEER => false,
          CURLOPT_URL => "https://ropeg.setjen.kemendagri.go.id/restsimpeg/api/cektakah",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "POST",
          CURLOPT_POSTFIELDS => "nip=".$nip,
          CURLOPT_HTTPHEADER => array(
          "content-type: application/x-www-form-urlencoded",
          
          ),
        ));

        $response6 = curl_exec($curl6);
        $err6 = curl_error($curl6);
        $r6   = json_decode($response6,true);
        curl_close($curl6);

        $data['pegawai'] = $r["results"];
        //var_dump($data['pegawai']);die;
        $data['pangkat'] = $r2["results"];
        $data['jabatan'] = $r3["results"];
        $data['pendidikan'] = $r4["results"];
        $data['simpeg'] = $r5["results"];
        $data['takah']  = $r6["results"];
        $enc = base64_encode($nip);
		$sso = str_replace("=","%20",$enc);
		$data['url']=$sso;
        $this->template->load('sso/template','sso/template',$data);
	}

	
}

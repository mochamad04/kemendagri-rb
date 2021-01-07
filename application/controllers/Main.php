<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Main extends CI_Controller {
	public function index(){
		$data['title'] = title();
		$data['description'] = description();
		$data['keywords'] = keywords();

		$ip    = $this->input->ip_address(); // Mendapatkan IP user
		$date  = date("Y-m-d"); // Mendapatkan tanggal sekarang
		$waktu = time(); //
		$timeinsert = date("Y-m-d H:i:s");
		  
		// Cek berdasarkan IP, apakah user sudah pernah mengakses hari ini
		$s = $this->db->query("SELECT * FROM tb_visitor WHERE ip='".$ip."' AND date='".$date."'")->num_rows();
		$ss = isset($s)?($s):0;
		  
		 
		// Kalau belum ada, simpan data user tersebut ke database
		if($ss == 0){
		$this->db->query("INSERT INTO tb_visitor(ip, date, hits, online, time) VALUES('".$ip."','".$date."','1','".$waktu."','".$timeinsert."')");
		}
		 
		// Jika sudah ada, update
		else{
		$this->db->query("UPDATE tb_visitor SET hits=hits+1, online='".$waktu."' WHERE ip='".$ip."' AND date='".$date."'");
		}
		 
		  
		$pengunjunghariini  = $this->db->query("SELECT * FROM tb_visitor WHERE date='".$date."' GROUP BY ip")->num_rows(); // Hitung jumlah pengunjung
		 
		$dbpengunjung = $this->db->query("SELECT COUNT(hits) as hits FROM tb_visitor")->row(); 
		 
		$totalpengunjung = isset($dbpengunjung->hits)?($dbpengunjung->hits):0; // hitung total pengunjung
		 
		$bataswaktu = time() - 300;
		 
		$pengunjungonline  = $this->db->query("SELECT * FROM tb_visitor WHERE online > '".$bataswaktu."'")->num_rows(); // hitung pengunjung online
		  
		 
		$data['pengunjunghariini']=$pengunjunghariini;
		$data['totalpengunjung']=$totalpengunjung;
		$data['pengunjungonline']=$pengunjungonline;

		$curl = curl_init();
        curl_setopt_array($curl, array(
          CURLOPT_SSL_VERIFYPEER => false,
          CURLOPT_URL => "https://ropeg.setjen.kemendagri.go.id/restsimpeg/api/api_ulangtahun",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "POST",
          CURLOPT_POSTFIELDS => "token=af9ec164748d7690c4f58021b6907d8d",
          CURLOPT_HTTPHEADER => array(
          "content-type: application/x-www-form-urlencoded",
          
          ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);
        $r   = json_decode($response,true);
        curl_close($curl);
        $data['ulangtahun'] = $r['results'];
        
		$this->template->load(template().'/template',template().'/content',$data);
	}
}

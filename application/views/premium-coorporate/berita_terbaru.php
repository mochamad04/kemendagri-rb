
<?php 
 $this->load->helper('text');
 $this->db->where('aktif','Y');
 $this->db->where('utama','Y'); 
 $this->db->limit(2,0);
 $this->db->order_by('id_berita', 'DESC'); 
 foreach ($this->db->get('berita')->result_array() as $r1){
          $tglr = tgl_indo($r1['tanggal']);
                            $isi_berita = strip_tags($r1['isi_berita']); 
                            $isi = substr($isi_berita,0,250); 
                            $isi = substr($isi_berita,0,strrpos($isi," "));
     echo "<div class=\"media\">
  <img src=\"".base_url()."asset/foto_berita/".$r1[gambar]."\" class=\"align-self-center mr-3\" width=\"128px\" alt=\"...\">
  <div class=\"media-body\">
    <h5 class=\"mt-0\">".$r1['judul']."</h5>
      
    <p>".$tglr."</br>".$isi.".</br>
      <a href=\"".base_url().$r1[judul_seo]."\" class=\"text-black\">Lanjut Membaca...</a></p>
  </div>
</div>
         
         

";};?> 

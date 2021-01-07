
<?php 
 $this->load->helper('text');
 $this->db->where('aktif','Y');
 $this->db->where('utama','Y'); 
 $this->db->limit(4,0);
 $this->db->order_by('id_berita', 'DESC'); 
 foreach ($this->db->get('berita')->result_array() as $r1){
          $tglr = tgl_indo($r1['tanggal']);
                            $isi_berita = strip_tags($r1['isi_berita']); 
                            $isi = substr($isi_berita,0,750); 
                            $isi = substr($isi_berita,0,strrpos($isi," "));
     echo "<div class=\"row mb-2\">
    <div class=\"col-md-10\">
      <div class=\"row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative\>
        <div class=\"col p-4 d-flex flex-column position-static\">
          <strong class=\"d-inline-block mb-2 text-primary\">".$r1['id_kategori']."</strong>
          <h3 class=\"mb-0\">".$r1[judul]."</h3>
          <div class=\"mb-1 text-muted\">". $tglr."</div>
          <p class=\"card-text mb-auto\">". $isi.".</p>
          <a href=\"#\" class=\"stretched-link\">Continue reading</a>
        </div>
        <div class=\"col-auto d-none d-lg-block\">
        <img src=\"".base_url()."asset/foto_berita/".$r1[gambar]."\" class=\"rounded float-right\" width=\"200\" height=\"250\" alt=\"...\">

          
        </div>
      </div>
    </div>
         
         

";};?> 

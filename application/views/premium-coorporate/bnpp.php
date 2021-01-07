<?php 
 $this->load->helper('text');

 $this->db->limit(4,0);
 $this->db->order_by('id_gallery', 'DESC'); 
 foreach ($this->db->get('gallery')->result() as $foto){echo "
 <img src=\"".base_url()."asset/img_galeri/".$foto->gbr_gallery."\" width=\"60px\" class=\"rounded-circle float-left\" alt=\"".$foto->jdl_gallery."\">";};?>

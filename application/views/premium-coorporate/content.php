<?php
    $cekslide = $this->model_utama->view_single('berita',array('headline' => 'Y','status' => 'Y'),'id_berita','DESC');
    if ($cekslide->num_rows() > 0){
      include "slider.php";
    }
?>


<section class="commonSection">

</section>
<section class="commonSection">
   
</section>
<section class="commonSection">

</section>
<section class="commonSection">

</section>

      
        

  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing" style="max-width: 80% !important;">

    <!-- Three columns of text below the carousel -->
    <div style="text-align: center; overflow: auto; white-space: nowrap; margin-top: 20px;">
   <?php  $this->db->order_by('tgl_posting', 'DES'); 
       foreach ($this->db->get('banner')->result() as $app){   
      echo " 
        <div style=\"display:inline-block; margin-right:40px; \">
            <a href =\"".$app->url."\" style=\"color: white;\" target=\"_blank\">
              <img src=\"".base_url()."asset/ikon_app/".$app->gambar."\" width=\"60px\" class=\"align-self-start\" alt=\"...\">
              <h3>".$app->judul."</h3>
            </a>
        </div>";
        };
    ?><!-- /.col-lg-4 -->
    </div><!-- /.row -->
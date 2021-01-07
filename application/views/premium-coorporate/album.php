 <section class="page_banner">
            <div class="container">
                <div class="col-xl-12 text-center">
                    <h2>Album</h2>
                    <div class="breadcrumbs">
                        <a href="<?php echo base_url()?>">Beranda</a><i>|</i><span>Album</span>
                    </div>
                </div>
            </div>
        </section>
          <section class="commonSection newslistpage">
            <div class="container">
        
         <div class="row" id="shafulls">
                <?php 
                    $no = $this->uri->segment(3)+1;
                    
					foreach ($album->result_array() as $row) { 
					 $total_foto = $this->model_utama->view_where('gallery',array('id_album' => $row['id_album']))->num_rows();
					?> 
					<div class="col-xl-4 col-md-6 col-lg-4 shaf_itme" data-groups='["all","<?php echo $row['id_album']?>"]'>     
					<?php echo " 
					        <div class='singleFolio_04 text-center'>
					        <div class='sf4_img'>
							 <img   style='height:250px' src='".base_url()."asset/img_album/$row[gbr_album]' alt='$row[jdl_album] '>
							 <div class='sf4_hov'>
                                            <a href='".base_url()."asset/img_album/$row[gbr_album]' class='prePhoto2'><i class='fal fa-search-plus'></i></a>
                                            <a href='".base_url()."albums/detail/$row[album_seo]' class='detailsLink2'><i class='fal fa-link'></i></a>
                                        </div>
							 </div>
							 <div class='sf4_det'>
							 <h3>$row[jdl_album] </h3>
							 <p class='sf4_cat'><a href='#'>Ada $total_foto Foto</a>
							 
							 </div>
							
                        </div>
                    </div>
                    "; 
					}
				?> 
                    
                </div>
                 <div class="row mt25">
                    <div class="col-lg-12">
                        <div class="ind_pagination text-center">
                           
			    	<?php echo $this->pagination->create_links(); ?>
                        </div>
                    </div>
                </div>
                </section>
                
 <section class="page_banner">
            <div class="container">
                <div class="col-xl-12 text-center">
                    <h2>Album</h2>
                    <div class="breadcrumbs">
                        <a href="<?php echo base_url()?>">Branda</a><i>|</i><span>Album <i class="fal fa-chevron-right"></i> <?php echo "$rows[jdl_album]"; ?></span>
                    </div>
                </div>
            </div>
        </section>
 <section class="commonSection projectDetailsPage">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-md-12 col-lg-8">
                        <div class="row folioGallery">
                            
                        <?php 
                    $no = $this->uri->segment(3)+1;
				    foreach ($detailalbum->result_array()   as $row) { 
					?> 
					<div class="col-xl-12 col-md-6 mas_item">     
					<?php 
					if (trim($row['gbr_gallery'])==''){ $gbr_gallery = 'no-image.jpg'; }else{ $gbr_gallery = $row['gbr_gallery']; }
					echo " 
                            <h4>$row[jdl_gallery] </h4>
					        <div class='fgs'>
							 <img   style='width:100%'  src='".base_url()."asset/img_galeri/$gbr_gallery' alt='$row[jdl_gallery] '> 
                            </div>
                            <p>$row[keterangan] </p>
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
			    	</div>
			    	<div class="col-xl-4 col-md-12 col-lg-4">
                        <div class="proj_details rightPos">
                            <div class="pd_cat">
                                <a href="#"><?php echo "$rows[jdl_album]"; ?></a>
                            </div> 
                            <div class="pd_details">
                               <?php echo "$rows[keterangan]"; ?>
                            </div>
                            <div class="pd_meta">
                                <p><strong>Hits:</strong> <?php echo ($rows['hits_album']+1)."view"; ?></p>
                                <p><strong>Tanggal:</strong> <?php echo "tgl_indo($rows[tgl_posting])"; ?></p> 
                            </div>
                            <div class="pd_social"> 
                                <style type="text/css">
                                                .a2a_svg, .a2a_count { border-radius: 0 !important; }
                                                </style>
                                                                                                <!-- AddToAny BEGIN -->
                                                <div class="a2a_kit a2a_kit_size_32 a2a_default_style">
                                                <a class="a2a_dd" href="https://www.addtoany.com/share"></a>
                                                <a class="a2a_button_facebook"></a>
                                                <a class="a2a_button_whatsapp"></a>
                                                <a class="a2a_button_twitter"></a> 
                                                </div>
                                                <script async src="https://static.addtoany.com/menu/page.js"></script>
                                                <!-- AddToAny END -->
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </section>
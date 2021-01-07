 <section class="page_banner">
            <div class="container">
                <div class="col-xl-12 text-center">
                    <h2><?php echo "$rows[jdl_playlist]"; ?></h2>
                    <div class="breadcrumbs">
                        <a href="<?php echo base_url()?>">Beranda</a><i>|</i><span>Video <i class="fas fa-chevron-right"></i> <?php echo "$rows[jdl_playlist]"; ?></span>
                    </div>
                </div>
            </div>
        </section>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Beranda</a></li>
    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>/playslist">Video</a></li>
    <li class="breadcrumb-item active" aria-current="page"><?php echo "$rows[jdl_playlist]"; ?></li>
  </ol>
</nav>
 <section class="commonSection projectDetailsPage">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-lg-12">
                        <div class="row folioGallery">
                                            <?php
											  foreach ($detailplaylist->result_array() as $r) {	
												  $lihat = $r['dilihat']+1;
												  $judull = substr($r['jdl_video'],0,33); 
												  $isi_berita =(strip_tags($r['keterangan'])); 
												  $isi = substr($isi_berita,0,80); 
												  $isi = substr($isi_berita,0,strrpos($isi," "));
												  $total_komentar = $this->model_utama->view_where('komentarvid',array('id_video' => $r['id_video']))->num_rows();
					                               if (trim($row['gbr_video'])==''){ $gbr_gallery = 'no-image.jpg'; }else{ $gbr_gallery = $row['gbr_video']; }
	 
											?>
											<div class="col-xl-4 col-md-4 mas_item" style="margin-bottom:25px">   
											 <div class="newsDetailsArea"> 
											  <div class="newsThumb">
                                                <div class="ntItem">
                                                    <img src="<?php echo base_url()."asset/img_playlist/$gbr_gallery"; ?>" alt=""/>
                                                    <a href="<?php echo   $r[youtube] ?>" class="newsMedia"><i class="fal fa-play"></i></a>
                                                </div>
                                            </div>
                                             <div style="padding:10px;border-left:1px solid #eee;border-right:1px solid #eee; border-bottom:1px solid #eee">
                                                <div class="ndMeta">
                                                    <h5><?php echo $judull?></h5>  
                                                        <span><i class="fas fa-eye"></i> <?php echo $r[dilihat]?></span>
                                                        <span><i class="fas fa-clock"></i> <?php echo $r[jam].", ".tgl_indo($r['tanggal'])?></span> 
                                                </div> 
                                            </div>
                                            </div>
                                            </div>
                                            
					        <?php 
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
                                            </div>
                                            </div></section>
											
												  
        <section class="page_banner">
            <div class="container">
                <div class="col-xl-12 text-center">
                    <h2>Video</h2>
                    <div class="breadcrumbs">
                        <a href="<?php echo base_url()?>">Beranda</a><i>|</i><span>Video</span>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="commonSection projectPage">
              <div class="container">
          <div class="row">
                    <div class="col-xl-12">
                        <div class="row" id="shafulls">
        
                                                <?php 
                                                    $no=$this->uri->segment(3)+1;
													foreach ($playlist->result_array() as $h) {	
													$total_video = $this->model_utama->view_where('video',array('id_playlist' => $h['id_playlist']))->num_rows();
													?>
													
                            <div class="col-xl-4 col-md-6 col-lg-4 shaf_itme" data-groups='["all"]'>
                                <div class="singleFolio_05 text-center">
                                    <div class="sf5_img">
                                        <?php if ($h['gbr_playlist'] ==''){
																			echo "<img   src='".base_url()."asset/img_playlist/no-image.jpg' alt='no-image.jpg' /> ";
																		}else{
																			echo "<img  src='".base_url()."asset/img_playlist/$h[gbr_playlist]' alt='$h[gbr_playlist]' /> ";
																		}?>
										 
                                        <div class="sf5_meta clearfix">
                                            <a href="#" class="pull-left"><?php echo 'Ada '.$total_video.' Video' ?></a>
                                            <a href="#" class="pull-right"><i class="fal fa-heartbeat"></i></a>
                                        </div>
                                    </div>
                                    <div class="sf5_det">
                                        <h3><a href="project_details_1.html"><?php echo $h[jdl_playlist]?></a></h3> 
                                        

                                        <a href="<?php echo base_url()."playlist/detail/$h[playlist_seo]"; ?>"><i class="fas fa-eye"></i> Tonton</a>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                </div>
                                <?php  } ?>
                            </div></div></div>
                            </section>
													
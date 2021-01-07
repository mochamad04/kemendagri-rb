 <section class="page_banner">
            <div class="container">
                <div class="col-xl-12 text-center">
                    <h2> <?php echo "$rows[nama_kategori]"; ?></h2>
                    <div class="breadcrumbs">
                        <a href="<?php echo base_url()?>">Beranda</a><i>|</i><span>Informasi <i class="fal fa-chevron-right"></i>  <?php echo "$rows[nama_kategori]"; ?></span>
                    </div>
                </div>
            </div>
        </section>
        
             <section class="commonSection newslistpage">
            <div class="container">
                <div class="row">
                      <?php
											  foreach ($beritakategori->result_array() as $r) {	
												  $baca = $r['dibaca']+1;	
												  $isi_berita =(strip_tags($r['isi_berita'])); 
												  $isi = substr($isi_berita,0,220); 
												  $isi = substr($isi_berita,0,strrpos($isi," ")); 
												//   $word = word_limiter($isi_berita,  40 );
												 $judul = substr($r['judul'],0,153); 
												  $total_komentar = $this->model_utama->view_where('komentar',array('id_berita' => $r['id_berita']))->num_rows();
												  
												  echo "<div class='col-xl-4 col-md-6 col-lg-4 mb51'> 
												  <div class='singleBlog'>
															<div   class='sbThumb'> ";
																	if ($r['gambar'] == ''){
																		echo "<img style='height:200px' src='".base_url()."asset/foto_berita/no-image.jpg' alt='no-image.jpg' /></a>";
																	}else{
																		echo "<img style='height:200px' src='".base_url()."asset/foto_berita/$r[gambar]' alt='$r[gambar]' /></a>";
																	}
																echo " 
															</div>  
															<div class='sbDetails'>
																<h4><a title='$r[judul]' href='".base_url()."$r[judul_seo]'>$judul </a> </h4>
																<p>$isi</p>
															</div>
															<div class='sb_footer'>
															 
																	<span><i class='fal fa-calendar'></i><a href='".base_url()."$r[judul_seo]'>  $r[jam], ".tgl_indo($r['tanggal'])."</a></span>
																	<span><i class='fal fa-comment'></i> <a href='".base_url()."$r[judul_seo]'>$total_komentar komentar</a></span>
																</div>  
															</div>
														</div> ";
											  }
										?>
                              
                                            
                    
                    </div>
                    <div class="row mt10">
                                            <div class="col-lg-12">
                                            <div class="ind_pagination text-center"> 
												<?php echo $this->pagination->create_links(); ?> 
											</div>
											</div>
											</div>
                    </div>
                    
                    </section>
                    
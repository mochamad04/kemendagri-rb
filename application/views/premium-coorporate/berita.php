        <section class="page_banner">
            <div class="container">
                <div class="col-xl-12 text-center">
                    <h2>Berita</h2>
                    <div class="breadcrumbs">
                        <a href="<?php echo base_url()?>">Beranda</a><i>|</i><span>Berita</span>
                    </div>
                </div>
            </div>
        </section>
          <section class="commonSection newslistpage">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-md-12 col-lg-8">
                        <div class="row bloglistgrid">
                            <?php
											  foreach ($berita->result_array() as $r) {	
												  $baca = $r['dibaca']+1;	
												  $isi_berita =(strip_tags($r['isi_berita'])); 
												  $isi = substr($isi_berita,0,220); 
												  $isi = substr($isi_berita,0,strrpos($isi," ")); 
												  $judul = substr($r['judul'],0,33); 
												  $total_komentar = $this->model_utama->view_where('komentar',array('id_berita' => $r['id_berita']))->num_rows();
												  ?>
												  
												   <div class="col-xl-6 col-md-6 col-lg-6 blog_mash">
                                                    <div class="singleBlog">
                                                        <div class="sbThumb">
                                                           <?php if ($r['gambar'] == ''){
																		echo "<img src='".base_url()."asset/foto_berita/no-image.jpg' alt='no-image.jpg' /></a>";
																	}else{
																		echo "<img src='".base_url()."asset/foto_berita/$r[gambar]' alt='$r[gambar]' /></a>";
																	}
															?>
                                                        </div>
                                                        <div class="sbDetails">
                                                            <p class="sb_cats">
                                                                <a href="#"><?php echo $r['jam'] . " " .tgl_indo($r['tanggal'])?></a>
                                                            </p>
                                                            <h4>
                                                                <a href="<?php echo base_url()."$r[judul_seo]"; ?>" title='<?php echo $r['judul']?>'><?php echo $judul ?>...</a>
                                                            </h4>
                                                        </div>
                                                        <div class="sb_footer">
                                                            <span><i class="fal fa-comments"></i><a href="#"><?php echo $total_komentar;?> Comments</a></span>
                                                            <span><i class="fal fa-user"></i>By <a href="#"><?php echo $r['nama_lengkap']?></a></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php } ?>
						</div>
						<div class="row mt3">
                            <div class="col-lg-12">
                                <div class="ind_pagination text-center">
                                   <?php echo $this->pagination->create_links(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
					<?php  include "sidebar_kanan.php";  ?>
								
                </div>
            </div>
        </section>
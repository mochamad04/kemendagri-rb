                       <?php
                        $cekslide = $this->model_utama->view_single('berita',array('headline' => 'Y','status' => 'Y'),'id_berita','DESC');
                        if ($cekslide->num_rows() > 0){
                          include "slider.php";
                        }
                    ?>

 <section class="commonSection">
            <div class="container">
                <div class="row">
                    <?php 
                        $sekilas = $this->model_utama->view_ordering_limit('sekilasinfo','id_sekilas','DESC',0,1);
                        foreach ($sekilas->result_array() as $row) {    
                        $tgl = tgl_indo($row['tgl_posting']);
                        echo " 
                                <div class='col-xl-6 col-lg-6 noPaddingRight'>";
                                    if ($row['gambar'] ==''){
                                        echo "
                                     <img   src='".base_url()."asset/foto_info/small_no-image.jpg' alt='' /> ";
                                    }else{
                                        echo " 
                                         <img width='600'  src='".base_url()."asset/foto_info/$row[gambar]' alt='' /> ";
                                    }
                                echo "
                                <div class='video_01 mrm15 text-right'>
                                    <div class='vp'>  
                                </div>
                                </div>
                                </div>
                                 <div class='col-xl-6 col-lg-6'>
                                    <div class='about_us_content'> 
                                        <h2 class='sec_title'>
                                            Sekilas Info.
                                        </h2> 
                                        <p class='ind_lead'>$row[sub_judul]</p>
                                        <p class='mb28'>
                                          $row[info]
                                        </p> 
                                    </div>
                                </div> ";
                        }
                    ?> 
                     
                </div>
            </div>
        </section>


        <section class="commonSection  graySection">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 text-center">
                        <h6 class="sub_title">Berita</h6>
                        <h2 class="sec_title with_bar">
                            <span>Berita Terkini</span>
                        </h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-7 col-md-7">
                        <?php $r = $this->model_utama->view_where('kategori',array('sidebar' => 1))->row_array();  
                        $kategori1 = $this->model_utama->view_join_two('berita','users','kategori','username','id_kategori',array('berita.id_kategori' => $r['id_kategori'],'berita.status' => 'Y'),'id_berita','DESC',0,3);            
                        foreach ($kategori1->result_array() as $r1) {
                            $tglr = tgl_indo($r1['tanggal']);
                            $isi_berita = strip_tags($r1['isi_berita']); 
                            $isi = substr($isi_berita,0,750); 
                            $isi = substr($isi_berita,0,strrpos($isi," "));
                            // $total_komentar = $this->model_utama->view_where('komentar',array('id_berita' => $r1['id_berita']))->num_rows();
                            echo "
                            
                            <div class='blogItem'>
                                <div class='bi_thumb'>";
                                    if ($r1['gambar'] ==''){
                                        echo "<img src='".base_url()."asset/foto_berita/small_no-image.jpg' alt='' />";
                                    }else{
                                        echo "<img src='".base_url()."asset/foto_berita/$r1[gambar]' alt='' />";
                                    }
                            echo "</div>
                            
                                <div class='bi_details'>
                                    <div class='bi_meta'> 
                                        <span><i class='fal fa-comments'></i> $total_komentar</span>
                                        <span><i class='fal fa-user'></i>  $r1[nama_lengkap]</span>
                                        <span><i class='fal fa-calendar-alt'></i> $r1[jam], $tglr</span>
                                    </div>
                                    
                                    <h3><a href='".base_url()."$r1[judul_seo]'>$r1[judul]</a> </h3>
                                    <p>$isi . . .</p>
                                    <a href='".base_url()."$r1[judul_seo]' class='read_more' href=''>Read More</a>
                                </div>
                            </div>";
                        }
                    ?>
                        
                        
                      </div> 
                    <div class="col-xl-5 col-md-5">
                        
                        <?php 
                            $no = 1;
                            $hot = $this->model_utama->view_join_two('berita','users','kategori','username','id_kategori',array('utama' => 'Y','status' => 'Y'),'id_berita','DESC',0,4);
                            foreach ($hot->result_array() as $row) {    
                            // $total_komentar = $this->model_utama->view_where('komentar',array('id_berita' => $row['id_berita']))->num_rows();
                            $tgl = tgl_indo($row['tanggal']);
                            echo " 
                                    <div class='blogItem2'>
                                        <div class='bi_meta'>
                                          <span><i class='fal fa-calendar-alt'></i><a href='".base_url()."$row[judul_seo]'>$row[jam] , $tgl</a></span>
                                          <span><i class='fal fa-comment'></i><a href='".base_url()."$row[judul_seo]'>$total_komentar</a></span>
                                        <h3><a href='".base_url()."$row[judul_seo]'>$row[judul]</a> </h3> 
                                    </div>  </div> ";
                            }
                        ?>
                        
                        
                    </div>
                </div>
            </div>
        </section>
        
         
                                    </p>
      
        </section>

        
        <section class="commonSection">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 text-center">
                        <h6 class="sub_title">Daftar</h6>
                        <h2 class="sec_title with_bar">
                            <span>Kementrian Lembaga</span>
                        </h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="filterMenu">
                            <!-- <ul class="text-right clearfix shafful_filter">
                                <li class="all" data-group="all"><i class="fal fa-bars"></i>Semua Foto</li>  -->
                                <?php 
                                $albums = $this->model_utama->view_where_ordering_limit('album',array('aktif' => 'Y'),'id_album','',0,5);
                                foreach ($albums->result_array() as $row) {
                                ?>
                                <li data-group="<?php echo $row['id_album'];?>"><i class="fal fa-bars"></i><?php echo $row['jdl_album'];?></li> 
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row" id="shafulls">
                <?php 
                    $album = $this->model_utama->view_where_ordering_limit('gallery',array('id_album > 0'),'id_album','RANDOM',0,6); 
                    foreach ($album->result_array() as $row) { 
                    ?> 
                    <div class="col-xl-2 col-md-3 col-lg-2 shaf_itme" data-groups='["all","<?php echo $row['id_album']?>"]'>     
                    <?php echo " 
                            <div class='singlefolio'>
                             <img    src='".base_url()."asset/img_galeri/$row[gbr_gallery]' alt='$row[jdl_gallery] '>
                             <div class='folioHover'> 
                                <h4><a href='".base_url()."albums/detail/$row[gallery_seo]'>$row[jdl_gallery]</a></h4> 
                              </a>
                           </div>
                        </div>
                    </div>
                    ";
                    }
                ?> 
                    
                </div>
            </div>
        </section>

      
        

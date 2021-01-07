<?php
    $baca = $rows['dibaca']+1;  
    $total_komentar = $this->model_utama->view_where('komentar',array('id_berita' => $rows['id_berita']))->num_rows();
?>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Beranda</a></li>
    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>/berita">Berita</a></li>
    <li class="breadcrumb-item active" aria-current="page"><?php echo $rows['judul'];?></li>
  </ol>
</nav>

        <section class="commonSection newsDetailsSection">
              <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-md-12 col-lg-8">
                        <div class="newsDetailsArea">
                            <div class="newsThumb">
                                <div class="ntItem">
                                    <?php if ($rows['gambar'] !=''){ echo "<img   src='".base_url()."asset/foto_berita/$rows[gambar]' alt='$rows[judul]' /></a> "; }
                                    if ($rows['keterangan_gambar'] !=''){ echo "<center><p><i><b>Keterangan Gambar :</b> $rows[keterangan_gambar]</i></p></center><br>"; }
                                    ?> 
                                </div>
                            </div>
                            <div class="newsDetails">
                                 
                                <div class="ndMeta">
                                    <span><i class="fal fa-user"></i>By <a href="#"><?php echo "$rows[nama_lengkap]"; ?></a></span>
                                    <span><i class='fal fa-calendar'></i> <?php echo tgl_indo($rows['tanggal']).", $rows[jam] WIB"; ?></span>
                                    <span><i class="fal fa-comments"></i><?php echo $total_komentar;?> Comments</span>
                                </div>
                                <h2 class="ndTitle"><?php echo $rows['judul'];?></h2>
                                
                                <div class="nd_content">
                                   <?php echo $rows['isi_berita']?>
                                </div>
                                <div class="row mb50">
                                    <div class="col-xl-6 col-md-6">
                                        <div class="ndTags text-left clearfix">
                                            <h5>Related Tags</h5>
                                            <?php
                                                $tags = (explode(",",$rows['tag']));
                                                $hitung = count($tags);
                                                for ($x=0; $x<=$hitung-1; $x++) {
                                                    if ($tags[$x] != ''){
                                                        echo "<a href='".base_url()."tag/detail/$tags[$x]'>$tags[$x]</a>,";
                                                    }
                                                }
                                            ?>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-md-6">
                                        <div class="ndShare text-right clearfix">
                                            <h5>Social Share</h5>
                                            <style type="text/css">
                                                .a2a_svg, .a2a_count { border-radius: 0 !important; }
                                                </style>
                                                                                                <!-- AddToAny BEGIN -->
                                                <div class="a2a_kit a2a_kit_size_32 a2a_default_style">
                                                <a class="a2a_dd" href="https://www.addtoany.com/share"></a>
                                                <a class="a2a_button_facebook"></a>
                                                <a class="a2a_button_whatsapp"></a>
                                                <a class="a2a_button_twitter"></a>
                                                <a class="a2a_button_email"></a>
                                                </div>
                                                <script async src="https://static.addtoany.com/menu/page.js"></script>
                                                <!-- AddToAny END -->
                                        </div>
                                        
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-xl-12">
                                        
                                        
                                       
                                    
                                            <div class="clearfix"></div>
                                            <div class="commentFormArea">
                                              
                                                 
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    
                            <?php include "sidebar_kanan.php";  ?>
                            
            </div></div>
        </section>
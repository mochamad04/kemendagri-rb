 <section class="page_banner">
            <div class="container">
                <div class="col-xl-12 text-center">
                    <h2><?php echo "$rows[judul]"; ?></h2>
                    <div class="breadcrumbs">
                        <a href="<?php echo base_url()?>">Beranda</a><i>|</i><span>Halaman <i class="fas fa-chevron-right"></i> <?php echo "<b>$rows[judul]</b>"; ?></span>
                    </div>
                </div>
            </div>
        </section>
          <section class="commonSection serviceDetailsSecions">  
              <div class="container">
                <div class="row">
                    <div class=" col-md-12">
<?php 
									if (trim($rows['gambar'])!=''){
										echo "<center><img src='".base_url()."asset/foto_statis/$rows[gambar]'></center>";
									}
									if ($rows['isi_halaman']==''){
										echo "<center style='padding:15%; font-weight:bold; color:red'>Maaf, Belum ada Informasi pada Halaman ini.</center>"; 
									}else{
										echo  $rows[isi_halaman]." 
								<div class='clearfix'></div> ";
									} 
								?> 
								</div>
								</div>
								</div>
								</section>
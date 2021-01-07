<?php
	$tgl_posting   = tgl_indo($rows['tgl_posting']);
	$tgl_mulai   = tgl_indo($rows['tgl_mulai']);
	$tgl_selesai = tgl_indo($rows['tgl_selesai']);
	$isi_agenda=nl2br($rows['isi_agenda']);
	$baca = $rows['dibaca']+1;
?>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Branda</a></li>
    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>/agenda">Agenda</a></li>
    <li class="breadcrumb-item active" aria-current="page"><?php echo $rows['tema'];?></li>
  </ol>
</nav>
  <section class="commonSection newsDetailsSection">
              <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-lg-12">
                        <div class="newsDetailsArea">
                            <h2 class="ndTitle"><?php echo $rows['tema'];?></h2>
                            <div class="newsThumb">
                                <div class="ntItem">
                                      <?php if ($r['gambar']==''){
																echo "<img style='width:100%' src='".base_url()."asset/foto_agenda/small_no-image.jpg'>";
															}else{
																echo "<img  style='width:100%' src='".base_url()."asset/foto_agenda/$r[gambar]'>";
															}	
														?> 
								</div>
								</div>
								 <div class="newsDetails">
                                 
                                <div class="ndMeta">
                                    <span><i class="fal fa-user"></i>By <a href="#"><?php echo "$rows[pengirim]"; ?></a></span>
                                    <span><i class='fal fa-calendar'></i> <?php echo tgl_indo($rows['tgl_mulai'])." sampai ".tgl_indo($rows['tgl_selesai']).", Jam $rows[jam] WIB "; ?></span>
                                    <span><i class="fal fa-map-marker"></i><?php echo $rows['tempat'];?> </span>
                                </div>
                                <p><?php echo $rows[isi_agenda]?></p>
                                 </div>
                                  </div>
                                   </div>
                                    </div>
                                     </div>
                                     </section>
                                
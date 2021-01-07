        <section class="page_banner">
            <div class="container">
                <div class="col-xl-12 text-center">
                    <h2>Agenda</h2>
                    <div class="breadcrumbs">
                        <a href="<?php echo base_url()?>">Beranda</a><i>|</i><span>Agenda</span>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="commonSection serviceSecions">
            <div class="container">
                <div class="row">
                    <?php
											  foreach ($agenda->result_array() as $r) {	
												  $tgl_posting = tgl_indo($r['tgl_posting']);
												  $tgl_mulai   = tgl_indo($r['tgl_mulai']);
												  $tgl_selesai = tgl_indo($r['tgl_selesai']);
												  $baca = $r['dibaca']+1;
												  $judull = substr($r['tema'],0,33); 
												  $isi_agenda =(strip_tags($r['isi_agenda'])); 
												  $isi = substr($isi_agenda,0,80); 
												  $isi = substr($isi_agenda,0,strrpos($isi," "));
												  ?>
												  
												   <div class="col-xl-4 col-md-6 col-lg-4">
                                                    <div class="icon_box_03" style='padding:20px'>
                                                        <?php if ($r['gambar']==''){
																echo "<img style='width:100%' src='".base_url()."asset/foto_agenda/small_no-image.jpg'>";
															}else{
																echo "<img  style='width:100%' src='".base_url()."asset/foto_agenda/$r[gambar]'>";
															}	
														?> 
                                                        <h3><a title='<?php echo $r[tema] ?>' href='<?php echo base_url()?>agenda/detail/<?php echo $r[tema_seo]?>'><?php echo  $judull;?></a></h3>
                                                        <p>
                                                           <?php echo $isi?>
                                                        </p>
                                                        <ul>
                                                            <li><small>Tempat : <?php echo $r['tempat']?></small></li>
                                                            <li>Mulai : <?php echo  $tgl_mulai?></li>
                                                            <li>Jam : <?php echo $r['jam']?></li>
                                                            <li>Selesai : <?php echo  $tgl_mulai?></li> 
                                                        </ul> 
                                                    </div>
                                                </div>
												  <?php } ?>
												  
												   <div class="row mt25">
                    <div class="col-lg-12">
                        <div class="ind_pagination text-center">
												<?php echo $this->pagination->create_links(); ?>
			    	                        </div>
                    </div>
                </div>
												   </div>
                                                </div>
                                                </section>
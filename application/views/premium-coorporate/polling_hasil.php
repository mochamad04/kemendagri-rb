  <section class="page_banner">
            <div class="container">
                <div class="col-xl-12 text-center">
                    <h2>Hasil Presentasi Perhitungan Pooling</h2>
                    <div class="breadcrumbs">
                        <a href="<?php echo base_url()?>">Home</a><i>|</i><span>Pooling</span>
                    </div>
                </div>
            </div>
        </section>
         <section class="skillSections">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="skillHolders">
                            <h6 class="sub_title">Hasil Pooling</h6>
                            <h2 class="sec_title"> Jumlah Pemilih <br/> <?php echo $rows[jml_vote]?></h2>
                            <?php
														  if (get_cookie('poling')!='') {
															  echo "<center style='margin-top:19%; margin-bottom:19%; color:red'><h4>Maaf, anda sudah pernah melakukan pemilihan terhadap jajak pendapat sebelumnya!!!!. <br>
																	Klik <a href='".base_url()."'>disini</a> untuk Kembali ke halaman utama.</center></h4>";
														  }else{
                											  set_cookie('poling', random_string('alnum', 64), time()+3600*24);
															  echo "<center style='margin-top:5%;'><h4>Terima kasih atas partisipasi anda mengikuti polling kami</h4></center><br/>";
															  echo " ";
																	  foreach ($polling->result_array() as $s) {
																	  $prosentase = sprintf("%2.1f",(($s['rating']/$rows['jml_vote'])*100));
																	  $gbr_vote   = $prosentase * 3;
																  		echo "<div class='singleSkill' data-parcent='".$prosentase."'>
																  		      <span>$s[pilihan] ($s[rating])</span> 
																  		      <div class='skillBG'>
																  		        <div class='skill'><span>".$prosentase."%</span> </div>
																			</div>
																		    </div>";
																	  }
															  echo " 
															  <br/><div class='alert alert-info'><h4>Jumlah Pemilih: <class style=\"color:#EA1C1C;\">$rows[jml_vote]</h4></div>";
														  }
							   
													    ?>
                             
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
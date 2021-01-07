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
							   
													    ?>
                             
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
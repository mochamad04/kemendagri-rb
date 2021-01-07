<section class="page_banner">
            <div class="container">
                <div class="col-xl-12 text-center">
                    <h2>Informasi</h2>
                    <div class="breadcrumbs">
                        <a href="<?php echo base_url()?>">Beranda</a><i>|</i><span>Informasi</span>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="commonSection serviceSecions">
            <div class="container">
                <div class="row "> 
                <div class='col-md-12 table-responsive'>
                            <table class='table table-bordered table-striped table-hover'>
									<tr >
										<th>No</th>
										<th>Nama File</th>
										<th>Total Download</th>
										<th style='width:70px'></th>
									</tr>
									<?php
										$no=$this->uri->segment(3)+1;
										foreach ($download->result_array() as $r) {	 
											echo "<tr>
													<td>$no</td>
												  	<td>$r[judul]</td>
												  	<td>$r[hits] Kali</td>
												  	<td><a class='btn btn-sm  btn-primary' href='".base_url()."download/file/$r[nama_file]'> Download</a></td>
												  </tr>";
										$no++;
										}
									?>
								</table></div>										   
								
            </div>
            <div class="row mt25">
                    <div class="col-lg-12">
                        <div class="ind_pagination text-center">
									<?php echo $this->pagination->create_links(); ?>
								</div>
								</div>
								</div>
        </section>
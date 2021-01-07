                                  <?php
                    			$sosmed = $this->model_utama->view('identitas')->row_array();
                    			// $pecahd = explode(",", $sosmed['facebook']);
                    		?>
                    		 <div class="col-xl-4 col-md-12 col-lg-4">
                        <div class="sidebar_2">
                                <aside class="widget">
                                <h3 class="widget_title">Berita Terbaru</h3>
                                <div class="allfeeds">
                                    
                                    	<?php 
                        					$terbaru = $this->model_utama->view_join_two('berita','users','kategori','username','id_kategori',array('berita.status' => 'Y'),'id_berita','DESC',0,5);
                        					foreach ($terbaru->result_array() as $r2x) {
                        					$total_komentar = $this->model_utama->view_where('komentar',array('id_berita' => $r2x['id_berita']))->num_rows();
                        					echo "<div class='singlefeeds clearfix'> ";
                        								if ($r2x['gambar'] ==''){
                        									echo "<img  src='".base_url()."asset/foto_berita/small_no-image.jpg' alt='' />";
                        								}else{
                        									echo "<img style='width:59px; height:42px;' src='".base_url()."asset/foto_berita/$r2x[gambar]' alt='' />";
                        								}
                        							echo "  
                        								<h6><a href='".base_url()."$r2x[judul_seo]'>$r2x[judul]</a>
                        								
                        								<small><span ><i class='fal fa-clock'></i>$r2x[jam], ".tgl_indo($r2x['tanggal'])." <i class='fal fa-comment'></i>$total_komentar</span> </small></h6>
                        						  </div>";
                        					}
                        				?>
                                    
                                   
                                </div>
                            </aside>
                            <aside class="widget">
                                <h3 class="widget_title">Kategori</h3>
                                <ul>
                                    <?php
                					  $kategori = $this->model_utama->view('kategori');
                					  foreach ($kategori->result_array() as $b) {
                					  $total = $this->model_utama->view_where('berita',array('id_kategori' => $b['id_kategori']))->num_rows();
                								echo "<li><a href='".base_url('kategori/detail/')."$b[kategori_seo]' />$b[nama_kategori]</a> ($total) </li>";
                						
                					  }
                					?> 
                                </ul>
                            </aside>
                            
                            <aside class="widget">
                                <h3 class="widget_title">Tags</h3>
                                <div class="tagclouds">
                                    	<?php 
                                    		$tag = $this->model_utama->view_ordering_limit('tag','id_tag','RANDOM',0,50);
                                      		foreach ($tag->result_array() as $row) {
                                    			echo "<a href='".base_url()."tag/detail/$row[tag_seo]' class='badge'>$row[nama_tag]</a>";
                                    		}
                                    	?> 
                                </div>
                            </aside>  </div> 
                              </div>
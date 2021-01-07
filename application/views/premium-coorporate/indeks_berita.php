 <section class="page_banner">
            <div class="container">
                <div class="col-xl-12 text-center">
                    <h2> <?php echo "$rows[nama_kategori]"; ?></h2>
                    <div class="breadcrumbs">
                        <a href="<?php echo base_url()?>">Branda</a><i>|</i><span>Indeks Berita</span>
                    </div>
                </div>
            </div>
        </section>
        
             <section class="commonSection newslistpage">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class='cotactForm light_form'>
                          <?php 
					echo "<form action='".base_url()."berita/indeks_berita' method='POST'   class='row'>
					     <div class='col-xl-3 col-lg-3 col-md-3'>
                                   
                                       <select name='tanggal' class='form-control'>";
            							for($n=1; $n<=31; $n++){
            								if (isset($_POST['filter'])){ $tgls = $_POST['tanggal']; }else{ $tgls = date("d"); }
            								if ($tgls==$n){
            									echo "<option value='$n' selected>$n</option>";
            								}else{
            									echo "<option value='$n'>$n</option>";
            								}
            							}
            						echo "</select>  
                                </div>
					 
					     <div class='col-xl-3 col-lg-3 col-md-3'>
						<select name='bulan' class='form-control'> ";
							$bln = array('','Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');
							for($n=1; $n<=12; $n++){
								if (isset($_POST['filter'])){ $blns = $_POST['bulan']; }else{ $blns = date("n"); }
								if ($blns == $n){
									echo "<option value='$n' selected>$bln[$n]</option>";
								}else{
									echo "<option value='$n'>$bln[$n]</option>";
								}
							}
						echo "</select>
                       </div>
					     <div class='col-xl-3 col-lg-3 col-md-3'>
						<select name='tahun'class='form-control'> ";
							for($n=2008; $n<=date('Y'); $n++){ 
								if (isset($_POST['filter'])){ $year = $_POST['tahun']; }else{ $year = date("Y"); }
								if ($year == $n){
									echo "<option value='$n' selected>$n</option>";
								}else{
									echo "<option value='$n'>$n</option>";
								}
							} 											
						echo "</select>
                       </div>
					     <div class='col-xl-3 col-lg-3 col-md-3'>
								<input  style='    height: 38px;margin-top:0' class='btn btn-sm btn-primary btn-block' type='submit' name='filter' value='Filter'></div>";
					  echo "</form>";
					?></div><br><br>  
					<div class="row">
					    
                       <?php
			
                echo "";
				if (isset($_POST['filter'])){
					$bulan = strlen($_POST['bulan']);
					$tanggal = strlen($_POST['tanggal']);		
					if ($bulan <= 1){ $bulann = '0'.$_POST['bulan']; }else{ $bulann = $_POST['bulan']; }
					if ($tanggal <= 1){ $tanggall = '0'.$_POST['tanggal']; }else{ $tanggall = $_POST['tanggal']; }
					$fil = $_POST['tahun'].'-'.$bulann.'-'.$tanggall;
				}else{
					$fil = date("Y-m-d");
				}
				$col = 5; 
				$warna = array("red","blue","red","purple","orange","black","yellow","red","blue","green");
				if ($record->num_rows() > 0) { 
					$cnt = 0;
					foreach ($record->result_array() as $t) {
						$total = $this->model_utama->view_where('berita',array('id_kategori' => $t['id_kategori'],'tanggal' => $fil,'status' => 'Y'))->num_rows();
						if ($total >= 1){	
							if ($cnt >= $col){ echo "</tr><tr>"; $cnt = 0; } $cnt++;
								echo "
							<div class='col-md-4' style='min-height:250px'>
							<div class='card'>
							<div class='card-header'>
                            <h3 class='card-title' >
                                <span style='color:$warna[$cnt]'>$t[nama_kategori]</span> <small><a href='".base_url()."kategori/detail/$t[kategori_seo]' class='more'>Read More</a> <i class='fa fa-angle-down'></i></small>
                            </h3>
                            </div> 
                             <ul  class='list-group'>
								";
										$sql = $this->model_utama->view_where_ordering_limit('berita',array('id_kategori' => $t['id_kategori'],'tanggal' => $fil,'status' => 'Y'),'id_berita','DESC',0,5);
										foreach($sql->result_array() as $r) {
											$judul = substr($r['judul'],0,40); 
											$total_komentar = $this->model_utama->view_where('komentar',array('id_berita' => $r['id_berita']))->num_rows();
											echo "
												 
									
                        <li class='list-group-item'> <a title='$r[judul]' href='".base_url()."$r[judul_seo]'>$judul,..</a>
                                            <small>".tgl_indo($r['tanggal'])."</small>
                                       </li>
                       
										 ";
										}
										echo "  </ul></div>
									</div>
								 
							 ";
						}
					} 
				}
			if ($hitung->num_rows()<1){
				echo "<center style='padding:5%'>Maaf, Belum ada artikel yang diterbitkan pada hari ini (".tgl_indo($hari_ini).").</center>";
			}
			?>
			</div></div> 
                    </div>
                    </div>
                </section>
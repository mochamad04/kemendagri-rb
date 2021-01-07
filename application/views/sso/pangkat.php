    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
      <div class="container">

        <div class="section-title">
          <h2>Resume</h2>
        </div>
       
        <div class="row">
            
            <div class="col-lg-6" data-aos="fade-up">
              <h3 class="resume-title">Pangkat</h3>
              <?php  
                foreach ($pangkat as $row) { 
              ?>
              <div class="resume-item">
                <h4><?php echo $row['jenis_naik_pangkat'];?></h4>
                <p ><?php echo $row['pangkat'].' ( '. $row['nama_gol'].' ) , TMT Pangkat. '.$row['tmt_pangkat'];?></p>
              </div>
              <?php } ?>
              <h3 class="resume-title">Pendidikan</h3>
              <?php  
                foreach ($pendidikan as $row) { 
                 
              ?>
              <div class="resume-item">
                <h4><?php echo $row['njur'];?></h4>
               
                <p ><em><?php echo $row['nsek'];?></em></p>
                <p ><?php echo $row['ket'];?></p>
              </div>
              <?php } ?>
            </div>
           
           
            <div class="col-lg-6" data-aos="fade-up">
              <h3 class="resume-title">Jabatan</h3>
              <?php  
                foreach ($jabatan as $row) { 
              ?>
              <div class="resume-item">
                <h4 ><?php echo $row['jataban'];?></h4>
                <p ><?php echo $row['jenisjab'].', TMT. '.$row['tmt_jabatan'];?></p>
              </div>
              <?php } ?>
            </div>

        </div>
      </div>
    </section><!-- End Resume Section -->
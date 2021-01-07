    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2>Aplikasi</h2>
        </div>
        
        <div class="row" style="margin-left: auto;margin-right: auto;">
          <?php if ($cek_simpeg = 1) { ?>
          <div class="col-lg-3 col-md-6 icon-box" data-aos="fade-up">
            <a href="https://ropeg.setjen.kemendagri.go.id/main/index/<?=$url?>">  
                <img src="<?php echo base_url(); ?>asset/sso/img/sso-simpeg-icon.png" class="img-fluid rounded-circle" style="width: 150px;height: 150px;">
            </a>
          </div>
          <?php } ?>
          <?php if ($cek_simpeg = 1) { ?>
          <div class="col-lg-3 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
            <a href="https://takah.setjen.kemendagri.go.id/beranda/index/<?=$url?>">
             <img src="<?php echo base_url(); ?>asset/sso/img/sso-takah-icons.png" class="img-fluid rounded-circle" style="width: 150px;height: 150px;">
            </a>
          </div>
          <?php } ?>
          <!-- <div class="col-lg-3 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
            <img src="<?php echo base_url(); ?>asset/sso/img/sso-simpeg-icon.png" class="img-fluid rounded-circle" style="width: 150px;height: 150px;">
          </div>
          <div class="col-lg-3 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
            <img src="<?php echo base_url(); ?>asset/sso/img/sso-simpeg-icon.png" class="img-fluid rounded-circle" style="width: 150px;height: 150px;">
          </div> -->
          
        </div>

      </div>
    </section><!-- End Services Section -->
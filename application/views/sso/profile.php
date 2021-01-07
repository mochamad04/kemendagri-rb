<section id="about" class="about">
<div class="container">
  <div class="section-title">
    <h2>Profile</h2>
  </div>
  <div class="row">
    <div class="col-lg-4" data-aos="fade-right">
      <img src="<?php echo $d;?>" class="img-fluid" alt="">
    </div>
    <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
      <div class="row">
        <div class="col-lg-12">
          <ul>
            <li><i class="icofont-rounded-right"></i> <strong>NIP:</strong> <?php echo $pegawai['nip'];?></li>
            <li><i class="icofont-rounded-right"></i> <strong>Nama:</strong> <?php echo $pegawai['nama'];?></li>
            <li><i class="icofont-rounded-right"></i> <strong>TTL:</strong> <?php echo $pegawai['ttl'];?></li>
            <li><i class="icofont-rounded-right"></i> <strong>Agama:</strong> <?php echo $pegawai['agama'];?></li>
            <li><i class="icofont-rounded-right"></i> <strong>Pangkat:</strong> <?php echo $pegawai['pangkat'];?>
            <li><i class="icofont-rounded-right"></i> <strong>Pendidikan:</strong> <?php echo $pegawai['pendidikan'];?></li>
            <li><i class="icofont-rounded-right"></i> <strong>Nomor Telepon:</strong> <?php echo $pegawai['nomorhp'];?>
            <li><i class="icofont-rounded-right"></i> <strong>Email:</strong> <?php echo $pegawai['email'];?>
            <li><i class="icofont-rounded-right"></i> <strong>Jabatan:</strong> <?php echo $pegawai['jabatakecil'];?></li>
          </ul>
        </div>
      </div>
      <h3>Alamat</h3>
      <p class="font-italic">
        <?php echo $pegawai['alamat1'];?>
      </p>
    </div>
  </div>
</div>
</section>
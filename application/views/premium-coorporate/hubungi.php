  <section class="page_banner">
            <div class="container">
                <div class="col-xl-12 text-center">
                    <h2>Hubungi Kami</h2>
                    <div class="breadcrumbs">
                        <a href="<?php echo base_url()?>">Branda</a><i>|</i><span>Hubungi Kami</span>
                    </div>
                </div>
            </div>
        </section>
 <section class="commonSection pdb90">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-md-6 col-lg-5">
                        <div class="icon_box_05 ib5_left">
                            <i class="fal fa-map-marker-alt"></i>
                            <div class="ib5_inner">
                                <h3>Alamat</h3>
                                <p>
                                   <?php echo "$rows[alamat]";?>
                                </p>
                                <!--<a href="#">Find Us On Map</a>-->
                            </div>
                        </div>
                        <!--<div class="icon_box_05 ib5_left">-->
                        <!--    <i class="fal fa-clock"></i>-->
                        <!--    <div class="ib5_inner">-->
                        <!--        <h3>Office Hours</h3>-->
                        <!--        <p>-->
                        <!--            Mon - Fri: 09:00am to 07.00pm <span>Sat - Sun: Off Day</span>-->
                        <!--        </p>-->
                        <!--        <a href="#">Get Directions</a>-->
                        <!--    </div>-->
                        <!--</div>-->
                        <div class="icon_box_05 ib5_left">
                            <i class="fal fa-headset"></i>
                            <div class="ib5_inner">
                                <h3>Quick Contact</h3>
                                <p>
                                    <?php echo "$iden[no_telp]";?> <br/><?php echo "$iden[email]";?> 
                                </p>
                                <!--<a href="#">Call Or Mail</a>-->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7 col-md-6 col-lg-7 pdl45">
                        <div class="row">
                            <div class="col-xl-12 text-left">
                                <h6 class="sub_title dark_sub_title ">Get In Touch</h6>
                                <h2 class="sec_title mb45">
                                    <span>Contact Form</span>
                                </h2>
                            </div>
                        </div>
                        <div class="cotactForm light_form">
                            <form action="<?php echo base_url(); ?>hubungi/kirim" method="post"   class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="iconInput">
                                        <input class="required" type="text" required name="a" id="con_name" placeholder="ENTER YOUR NAME HERE" />
                                        <i class="fal fa-user"></i>
                                    </div>
                                </div> 
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="iconInput">
                                        <input class="required" type="text" required name="b" id="con_email" placeholder="ENTER YOUR EMAIL HERE" />
                                        <i class="fal fa-envelope"></i>
                                    </div>
                                </div> 
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                <?php echo $image; ?>
                                </div> 
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="iconInput">
                                        <input class="required" type="text" required name='security_code' maxlength='6'  id="con_email" placeholder="ENTER SECURITY CODE" />
                                        <i class="fal fa-edit"></i>
                                    </div>
                                </div> 
                                <div class="col-xl-12">
                                    <div class="iconInput">
                                        <textarea class="required" name="c" id="con_message" required placeholder="ENTER YOUR MESSAGE HERE"></textarea>
                                        <i class="fal fa-pencil-alt"></i>
                                    </div>
                                </div>
                                <div class="col-xl-12 text-center">
                                    <input type="submit" name="submit"  value="Send Message" id="con_submit" onclick="return confirm('Pesan anda ini akan kami balas melalui email ?')"/>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="googleMapSection noMarginTop">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12 noPadding">
                        <div class="gmap">
                            <iframe id="gmap_canvas" src="<?php echo "$iden[maps]"; ?>" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>
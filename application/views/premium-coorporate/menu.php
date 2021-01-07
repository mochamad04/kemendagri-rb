 <body>
<?php  $iden = $this->model_utama->view('identitas')->row_array();?>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v5.0&appId=<?php echo $iden['fb_app_id']?>&autoLogAppEvents=1"></script>
        <!-- Preloading -->
        <div class="preloader text-center">
            <div class="la-ball-scale-multiple la-2x">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
        <!-- Preloading -->

        <section class="topbar">
            <div class="header-container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-3 noPadding">
                        <div class="logo text-left">
                            <a href="#">
                                <?php 
                                  $logo = $this->model_utama->view_ordering_limit('logo','id_logo','DESC',0,1);
                                  foreach ($logo->result_array() as $row) {
                                    echo "<a href='".base_url()."'><img src='".base_url()."asset/logo/$row[gambar]'/></a>";
                                  }
                                  ?>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8 col-md-9">
                        <div class="topbar_right text-right">
                            <div class="topbar_element info_element">
                                <i class="fa fa-envelope"></i>
                                <h5>Email Address</h5>
                                <p><a href="mailto:<?php echo $iden['email'];?>"><?php echo $iden['email'];?></a></p>
                            </div>
                           
                            <div class="topbar_element search_element">
                                <?php echo form_open('berita/index')?>
                                    <i class="fa fa-search"></i>
                                    <input type="search" name="kata" placeholder="Search keyword..."/>
                                    
                                </form>
                            </div>
                            <div class="topbar_element settings_bar">
                                <a href="#" class="hamburger" id="open-overlay-nav"><i class="fal fa-bars"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="nav_bar" id="fix_nav">
            <div class="header-container">
                <div class="row">
                    <div class="col-xl-8 col-lg-9">
                        <div class="mobileMenuBar">
                            <a href="javascript: void(0);"><span>Menu</span><i class="fa fa-bars"></i></a>
                        </div>
                        <nav class="mainmenu">
                            <?php 
                            function main_menu() {
            $ci = & get_instance();
            $query = $ci->db->query("SELECT id_menu, nama_menu, link, id_parent FROM menu where aktif='Ya' AND position='Bottom' order by urutan");
            $menu = array('items' => array(),'parents' => array());
            foreach ($query->result() as $menus) {
                $menu['items'][$menus->id_menu] = $menus;
                $menu['parents'][$menus->id_parent][] = $menus->id_menu;
            }
            if ($menu) {
                $result = build_main_menu(0, $menu);
                return $result;
            }else{
                return FALSE;
            }
        }

        function build_main_menu($parent, $menu) {
            $html = "";
            if (isset($menu['parents'][$parent])) {
                if ($parent=='0'){
                    $html .= "<ul>
                                <li current-menu-item menu-item-has-children><a href='".base_url()."'>Beranda</a></li>";
                }else{
                    $html .= "<ul class='sub_menu'>";
                }
                foreach ($menu['parents'][$parent] as $itemId) {
                    if (!isset($menu['parents'][$itemId])) {
                        if(preg_match("/^http/", $menu['items'][$itemId]->link)) {
                            $html .= "<li><a target='_BLANK' href='".$menu['items'][$itemId]->link."'>".$menu['items'][$itemId]->nama_menu."</a></li>";
                        }else{
                            $html .= "<li><a href='".base_url().''.$menu['items'][$itemId]->link."'>".$menu['items'][$itemId]->nama_menu."</a></li>";
                        }
                    }
                    if (isset($menu['parents'][$itemId])) {
                        if(preg_match("/^http/", $menu['items'][$itemId]->link)) {
                            $html .= "<li class=' menu-item-has-children'><a target='_BLANK' href='".$menu['items'][$itemId]->link."'><span>".$menu['items'][$itemId]->nama_menu."</span></a>";
                        }else{
                            $html .= "<li class=' menu-item-has-children'><a href='".base_url().''.$menu['items'][$itemId]->link."'><span>".$menu['items'][$itemId]->nama_menu."</span></a>";
                        }
                        $html .= build_main_menu($itemId, $menu);
                        $html .= "</li>";
                    }
                }
                $html .= "</ul>";
            }
            return $html;
        }
        echo main_menu();
        ?>
                           
                        </nav>
                    </div>
                    <div class="col-xl-4 col-lg-3">
                        <div class="top_social text-right">
                            <?php
                                $sosmed = $this->model_utama->view('identitas')->row_array();
                                $pecahd = explode(",", $sosmed['facebook']);
                            ?>
                       <!--      <a href="<?php echo $pecahd[0]; ?>" target="_BLANK"><i class="fab fa-facebook-f"></i></a>
                            <a href="<?php echo $pecahd[1]; ?>" target="_BLANK"><i class="fab fa-twitter"></i></a> 
                            <a href="<?php echo $pecahd[2]; ?>" target="_BLANK"><i class="fab fa-instagram"></i></a> -->
                        </div>
                    </div>
                </div>
            </div>
            <span class="right_bgs"></span>
        </section>

        <!-- Overlay Menu -->
        <div class="popup popup__menu">
            <div class="header-container mobileContainer">
                <div class="row">
                    <div class="col-lg-8 text-left">
                        <div class="popup_logos"> 
                            <?php  
                                  foreach ($logo->result_array() as $row) {
                                    echo "<a href='".base_url()."'><img src='".base_url()."asset/logo/$row[gambar]'/></a>";
                                  }
                            ?> 
                        </div>
                    </div>
                    <div class="col-lg-4 text-right">
                        <a href="" id="close-popup" class="close-popup"></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="popup-inner">
                            <div class="dl-menu__wrap dl-menuwrapper">
                                <ul class="dl-menu dl-menuopen">
                                <?php 
                                 $topmenu = $this->model_utama->view_where_ordering_limit('menu',array('position' => 'Top','aktif' => 'Ya'),'urutan','ASC',0,5);
                                  foreach ($topmenu->result_array() as $row) {
                                    if(preg_match("/^http/", $row['link'])) {
                                        echo "<li><a href='$row[link]'>$row[nama_menu]</a></li>";
                                    }else{
                                        echo "<li><a href='".base_url()."$row[link]'>$row[nama_menu]</a></li>";
                                    }
                                  }
                                  ?>
                                  </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-sm-6 col-xs-12 text-left">
                        <ul class="footer__contacts">
                            <li>Phone: <?php echo $iden['no_telp'];?> </li>
                            <li>Email: <?php echo $iden['email'];?></li>
                            <li><small><?php echo $iden['meta_deskripsi'];?></small></li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-xs-12 col-xs-12">
                        <div class="foo_social popUp_social text-right">
                            <a href="<?php echo $pecahd[0]; ?>" target="_BLANK"><i class="fab fa-facebook-f"></i></a>
                            <a href="<?php echo $pecahd[1]; ?>" target="_BLANK"><i class="fab fa-twitter"></i></a> 
                            <a href="<?php echo $pecahd[2]; ?>" target="_BLANK"><i class="fab fa-instagram"></i></a> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Overlay Menu -->
<!DOCTYPE html>
<html lang="id" prefix="og: http://ogp.me/ns#">
    <?php
        $url1 = $this->uri->segment(1);
        $url2 = $this->uri->segment(2);
        $url3 = $this->uri->segment(3);
        function isMobile() {
          return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
        }
        
        //GET DATA IN DATABASE
        $interface       = $this->model_interface->get_interface();
        $portal_aplikasi = $this->model_interface->get_portal_aplikasi();
        $web_pendamping  = $this->model_interface->get_web_pendamping();
        
        //SITE NAME
        if($interface[0]['site_name']!=null){$site_name = $interface[0]['site_name'];}else{$site_name="";}
        
        //SITE DESCRIPTION
        if($interface[0]['site_description']!=null){$site_description = $interface[0]['site_description'];}else{$site_description="No Description";}
        
        //SITE KEYWORDS
        if($interface[0]['site_keywords']!=null){$site_keywords = $interface[0]['site_keywords'];}else{$site_keywords="No Keywords";}

        //META OG AND TWITTER CARD SETTING
        if($interface[0]['fb_admins']!=null){$fb_admins=$interface[0]['fb_admins'];}else{$fb_admins="";}
        if($interface[0]['twitter_name']!=null){$twitter_name=$interface[0]['twitter_name'];}else{$twitter_name="";}
        
        //FAVICON SETTING
        if($interface[0]['fav']){$favicon = base_url()."assets/img/icon/".$interface[0]['fav'];}
        else{$favicon = base_url()."assets/img/label/32x32.jpg";}
        
        //IMAGE SCREEN SHOOT SETTING
        if($interface[0]['img_web']!=null){$img_web = base_url()."assets/img/ss/".$interface[0]['img_web'];}else{$img_web = "";}
        
        //WHATSAPP SETTING
        if($interface[0]['whatsapp']!=null){
          $no_wa = $interface[0]['whatsapp'];
          if($interface[0]['wa_question']!=null){$wa_qustion = $interface[0]['wa_question'];}
          else{$wa_qustion = "Halo, saya ingin bertanya tentang ".$site_name.". Terimakasih";}
          if(isMobile()){
            $chat = '<a href="https://api.whatsapp.com/send?phone='.$no_wa.'&amp;text='.$wa_qustion.'" target="_blank" alt="Chat Politeknik Kelapa Sawit Citra Widya Edukasi"><div id="chatWA"></div></a>';
            $wa_HF = '<a href="https://api.whatsapp.com/send?phone='.$no_wa.'&amp;text='.$wa_qustion.'" target="_blank">'.$no_wa.'</a>';
          }else{
            $chat = '<a href="https://web.whatsapp.com/send?phone='.$no_wa.'&amp;text='.$wa_qustion.'" target="_blank" alt="Chat Politeknik Kelapa Sawit Citra Widya Edukasi"><div id="chatWA"></div></a>';
            $wa_HF = '<a href="https://web.whatsapp.com/send?phone='.$no_wa.'&amp;text='.$wa_qustion.'" target="_blank">'.$no_wa.'</a>';
          }
        }else{$chat ="";$wa_HF = '<a href="#"></a>';}
        
        //EMAIL SETTING
        if($interface[0]['email']!=null){
          $email = explode("@",$interface[0]['email']);
          $data_user = $email[0];
          $data_domain = $email[1];
          $full_email = $interface[0]['email'];
        }else{$email = '';$data_user = '';$data_domain = '';$full_email = '';}
        
        //IMAGE HEADER SETTING
        if($interface[0]['img_header']!=null){
          $img_header = '<img src="'.base_url().'assets/img/icon/'.$interface[0]['img_header'].'" alt="'.$site_name.'">';
        }else{
          $img_header = '<img src="'.base_url().'assets/img/label/default-header.jpg" alt="Default Header">';
        }
        
        //ALAMAT SETTING
        if($interface[0]['address']!=null){$address = $interface[0]['address'];}else{$address="Not Available";}
        
        //KONTAK SETTING
        if($interface[0]['phone']!=null){$phone = $interface[0]['phone'];}else{$phone="Not Available";}
        if($interface[0]['fax']!=null){$fax = $interface[0]['fax'];}else{$fax="Not Available";}
        
        //IMAGE FOOTER SETTING
        if($interface[0]['img_footer']!=null){
          $img_footer = '<img class="img-footer" src="'.base_url().'assets/img/icon/'.$interface[0]['img_footer'].'" alt="Logo '.$site_name.'">';
        }else{
          $img_footer = '<img class="img-footer" src="'.base_url().'assets/img/label/default-footer.jpg" alt="Default Footer">';
        }
        
        //LINK SOCIAL MEDIA SETTING
        if($interface[0]['facebook']!=null){$link_fb=$interface[0]['facebook'];}else{$link_fb="#";}
        if($interface[0]['twitter']!=null){$link_tw=$interface[0]['twitter'];}else{$link_tw="#";}
        if($interface[0]['instagram']!=null){$link_ig=$interface[0]['instagram'];}else{$link_ig="#";}
        if($interface[0]['youtube']!=null){$link_yt=$interface[0]['youtube'];}else{$link_yt="#";}
        
        //GOOGLE ANALYTICS SETTING
        if($interface[0]['google_analytics']!=null){$google_analytics = $interface[0]['google_analytics'];
        }else{$google_analytics = "";}
    ?>
    
<head>
    <meta charset="utf-8">
    <meta name="author" content="<?php echo $site_name;?>">
    <meta name="keywords" content="<?php echo $site_keywords;?>">
    <meta name="description" content="<?php echo $site_description;?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="<?php echo base_url();?>">
    <link rel="icon" type="image/x-icon"  href="<?php echo $favicon;?>">
    <title><?php echo $title;?></title>
    <style media="all">
        .header-navigation ul > li.active2 > a {border-bottom: 2px solid #85CA63;background: white;color: #67bd3c;}
        
        <?php if(isMobile()){?>
        #chatWA{display:block;position:fixed;right:15px;bottom:45px;z-index:1;width:70px;height:70px;background-image:url(https://www.cwe.ac.id/assets/img/whatsapp/whatsapp70px.png);background-size:100%;opacity:1;border-radius:0;text-align:center;font-size:21px;color:#fff;cursor:pointer}
        <?php }else{ ?>
        #chatWA{display:block;position:fixed;right:15px;bottom:45px;z-index:1;width:80px;height:80px;background-image:url(https://www.cwe.ac.id/assets/img/whatsapp/whatsapp80px.png);background-size:100%;opacity:1;border-radius:0;text-align:center;font-size:21px;color:#fff;cursor:pointer}
        <?php } ?>
        
        .welcome-p{font-weight: 100;font-size: 2rem !important;}.welcome-h-pc{font-weight: 750;font-size: 2.90rem;}.welcome-h-mo{font-weight: 750;font-size: 3.50rem;}
        .d-berita{display: block !important;}.d-berita-owl{width: 100% !important; left: 0px !important; display: block !important;}.d-berita-item{width: 100% !important;}
    </style>
    
    <meta property="og:title" content="<?php echo $title;?>" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?php echo base_url();?>" />
    <meta property="og:image" content="<?php echo $img_web;?>" />
    <meta property="og:description" content="<?php echo $site_description;?>" />
    <meta property="og:site_name" content="<?php echo $site_name;?>" />
    <meta property="fb:admins" content="<?php echo $fb_admins;?>" />
    
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="<?php echo $twitter_name;?>" />
    <meta name="twitter:creator" content="<?php echo $twitter_name;?>" />
    <meta name="twitter:title" content="<?php echo $site_name;?>" />
    <meta name="twitter:description" content="<?php echo $site_description;?>" />
    <meta name="twitter:image" content="<?php echo $img_web;?>" />
    
    <meta itemprop="name" content="<?php echo $site_name;?>" />
    <meta itemprop="url" content="<?php echo base_url();?>" />
    <meta itemprop="creator accountablePerson" content="<?php echo $site_name;?>"" />
      
      
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|PT+Sans+Narrow|Source+Sans+Pro:200,300,400,600,700,900&amp;subset=all" rel="stylesheet" type="text/css">
      <link href="<?php echo base_url();?>assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
      <link href="<?php echo base_url();?>assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <link href="<?php echo base_url();?>assets/global/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet">
      <link href="<?php echo base_url();?>assets/global/plugins/carousel-owl-carousel/owl-carousel/owl.carousel.css" rel="stylesheet">
      <link href="<?php echo base_url();?>assets/global/plugins/slider-revolution-slider/rs-plugin/css/settings.css" rel="stylesheet">
      <?php if ($url1=="galeri"){?>
    
      <link href="<?php echo base_url();?>assets/frontend/pages/css/gallery.css" rel="stylesheet">
      
      <?php } ?>
      <link href="<?php echo base_url();?>assets/frontend/layout/css/style.css" rel="stylesheet">
      <link href="<?php echo base_url();?>assets/frontend/pages/css/style-revolution-slider.css" rel="stylesheet">
      <link href="<?php echo base_url();?>assets/frontend/layout/css/min/style-responsive-min.css" rel="stylesheet">
      <link href="<?php echo base_url();?>assets/frontend/layout/css/themes/blue.css" rel="stylesheet" id="style-color">
      <!--<link href="<?php echo base_url();?>assets/frontend/layout/css/custom.css" rel="stylesheet">-->
      <link href="<?php echo base_url();?>assets/css/custom.css" rel="stylesheet">
  
    <script src="<?php echo base_url();?>assets/global/plugins/jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/global/plugins/jquery-migrate.min.js" type="text/javascript" defer></script>
    <script src="<?php echo base_url();?>assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript" defer></script>      
    <!--<script src="<?php echo base_url();?>assets/frontend/layout/scripts/back-to-top.js" type="text/javascript" defer></script>-->
    <script src="<?php echo base_url();?>assets/global/plugins/fancybox/source/jquery.fancybox.pack.js" type="text/javascript" defer></script><!-- pop up -->
    <script src="<?php echo base_url();?>assets/global/plugins/carousel-owl-carousel/owl-carousel/owl.carousel.min.js" type="text/javascript" defer></script><!-- slider for products -->
    <script src="<?php echo base_url();?>assets/global/plugins/slider-revolution-slider/rs-plugin/js/jquery.themepunch.revolution.min.js" type="text/javascript" defer></script> 
    <script src="<?php echo base_url();?>assets/global/plugins/slider-revolution-slider/rs-plugin/js/jquery.themepunch.tools.min.js" type="text/javascript" defer></script> 
    <script src="<?php echo base_url();?>assets/global/plugins/jquery.livequery.js" type="text/javascript" ></script> 
    <script src="<?php echo base_url();?>assets/frontend/pages/scripts/revo-slider-init.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/frontend/layout/scripts/layout.js" type="text/javascript" defer></script>
    <script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5fc59f5da1642e00120ca3c5&product=inline-share-buttons-buttons' async='async'></script>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8123166908748705"
     crossorigin="anonymous"></script>
</head>

<body class="corporate">
    <div class="pre-header">
      <div class="container">
        <div class="row">
          <div class="col-md-12 additional-shop-info">
            <ul class="list-unstyled list-inline">
                <li><i class="fa fa-whatsapp"></i><span><?php echo $wa_HF;?></span></li>
                <li><i class="fa fa-envelope-o"></i><span><a href="mailto:<?php echo $full_email;?>">
                  <email data-user="<?php echo $data_user;?>" data-domain="<?php echo $data_domain;?>"></email></a></span>
                </li>
            </ul>
          </div>
        
        </div>
      </div>        
    </div>
    <div class="header">
      <div class="container">
        <a class="site-logo" href="<?php echo base_url();?>"><?php echo $img_header;?></a>
        <a href="javascript:void(0);" class="mobi-toggler"><i class="fa fa-bars"></i></a>
        <div class="header-navigation pull-right font-transform-inherit">
          <ul>
          
            <!-- BERANDA -->
            <li class="<?php if ($url1=="") { echo "active"; } else { echo ""; } ?>"><a href="<?php echo site_url();?>">BERANDA</a></li>
            
            <!-- TENTANG KAMI -->
            <li class="dropdown <?php if ($url1=="tentang") { echo "active"; } else { echo ""; } ?>">
              <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="javascript:;">
                TENTANG KAMI
              </a>
              <ul class="dropdown-menu">
                <?php foreach($tentang_kami as $x){?>
                  <li class="<?php if ($url2==$x['uri']) { echo "active"; } else { echo ""; } ?>"><a href="<?php echo site_url('tentang/'.$x['uri']);?>"><?php echo $x['title_menu'];?></a></li>
                <?php } ?>
              </ul>
            </li>
            
            <!-- PENDAFTARAN -->
            <li class="dropdown <?php if ($url1=="pendaftaran") { echo "active"; } else { echo ""; } ?>">
              <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="javascript:;">
                PENDAFTARAN 
              </a>
              <ul class="dropdown-menu">
                <?php foreach($pendaftaran as $x){?>
                  <li class="<?php if ($url2==$x['uri']) { echo "active"; } else { echo ""; } ?>"><a href="<?php echo site_url('pendaftaran/'.$x['uri']);?>"><?php echo $x['title_menu'];?></a></li>
                <?php } ?>
              </ul>
            </li>
            
            <!-- AKADEMIK -->
            <li class="dropdown <?php if ($url1=="akademik" or $url3=="9") { echo "active"; } else { echo ""; } ?>">
              <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="javascript:;">
                AKADEMIK
              </a>
              <ul class="dropdown-menu">
                <?php foreach($akademik as $x){?>
                  <li class="<?php if ($url2==$x['uri']) { echo "active"; } else { echo ""; } ?>"><a href="<?php echo site_url('akademik/'.$x['uri']);?>"><?php echo $x['title_menu'];?></a></li>
                <?php } ?>
                
                <!-- Matikan Bagian Ini Untuk Menghilangkan Menu Kemahasiswaan -->
                <li class="<?php if ($url2=="kemahasiswaan-politeknik-kelapa-sawit-citra-widya-edukasi") { echo "active"; } else { echo ""; } ?>"><a href="<?php echo site_url('informasi/kemahasiswaan-politeknik-kelapa-sawit-citra-widya-edukasi');?>">Kemahasiswaan</a></li>
              </ul>
            </li>
            
            <!-- PORTAL APLIKASI -->
            <li class="dropdown <?php if ($url2=="perpustakaan") { echo "active"; } else { echo ""; } ?>">
              <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="javascript:;">
                PORTAL APLIKASI
              </a>
              <ul class="dropdown-menu">
              <?php foreach($portal_aplikasi as $x){?>
                <li><a href="<?php echo $x['link'];?>" <?php echo ($x['target']==0) ? 'target="_blank"':''; ?> ><?php echo $x['judul'];?></a></li>
              <?php } ?>
              </ul>
            </li>
            
            <!-- GALERI -->
            <li class="dropdown <?php if ($url2=="galeri") { echo "active"; } else { echo ""; } ?>">
              <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="javascript:;">
                GALERI 
              </a>
              <ul class="dropdown-menu">
                <li class="<?php if ($url3=="foto") { echo "active"; } else { echo ""; } ?>"><a href="<?php echo site_url('galeri/foto');?>">Galeri Foto</a></li>
                <li class="<?php if ($url3=="galeri") { echo "active"; } else { echo ""; } ?>"><a href="<?php echo site_url('galeri/video');?>">Galeri Video</a></li>
                <li class="<?php if ($url3=="komik") { echo "active"; } else { echo ""; } ?>"><a href="<?php echo site_url('galeri/komik');?>">Komik</a></li>
              </ul>
            </li>
            
            <!--DAFTAR ONLINE-->
            <li class="bg-yellow"><a href="https://bit.ly/3pZ5Van"><span class="custom-blue-color">PENDAFTARAN ONLINE</span></a></li>
          
          </ul>
        </div>
      </div>
    </div>
   
    <?php $this->load->view($content)?>

    <div class="pre-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6 pre-footer-col align-footer">
            <h2 >ALAMAT KAMPUS</h2>
            <address class="margin-bottom-20"><?php echo $address;?></address>
          </div>
          <div class="col-md-3 col-sm-6 pre-footer-col align-footer">
            <h2>KONTAK KAMPUS</h2>
            <address class="margin-bottom-20">
              <p>
                <i class="fa fa-phone"></i> Phone   : <?php echo $phone;?>  <br/>
                <i class="fa fa-whatsapp"></i> Whatsapp : <?php echo $wa_HF;?> <br/>
                <i class="fa fa-envelope-o"></i> Email  : <a href="mailto:<?php echo $full_email;?>">
                  <email data-user="<?php echo $data_user;?>" data-domain="<?php echo $data_domain;?>"></email></a> <br/>
                <i class="fa fa-print"></i> Fax     : <?php echo $fax;?> 
              </p>
            </address> 
          </div>
          <div class="col-md-3 col-sm-6 pre-footer-col align-footer">
            <h2>WEB PENDAMPING</h2>
            <ul class="list-unstyled">
            <?php foreach($web_pendamping as $x){?>
              <li><a href="<?php echo $x['link'];?>" <?php echo ($x['target']==0) ? 'target="_blank"':''; ?> ><?php echo $x['judul'];?></a></li>
            <?php } ?>
            </ul>
          </div>
          <div class="col-md-3 col-sm-6 pre-footer-col text-center">
              <?php echo $img_footer;?>
          </div>
        </div>
      </div>
    </div>
    <div class="footer">
      <div class="container">
        <div class="row text-center">
          <div class="col padding-top-10 text-lg">
            <?php echo date('Y');?> © <?php echo $site_name;?>
          </div>
          <div class="col padding-top-10">
            <ul class="social-footer list-unstyled list-inline">
              <li><a href="<?php echo $link_fb;?>" target="_blank"><img src="<?php echo base_url('assets/img/icon/fb.png')?>" alt="Facebook <?php echo $site_name;?>"></a></li>
              <li><a href="<?php echo $link_tw;?>" target="_blank"><img src="<?php echo base_url('assets/img/icon/tw.png')?>" alt="Twitter <?php echo $site_name;?>"></a></li>
              <li><a href="<?php echo $link_ig;?>" target="_blank"><img src="<?php echo base_url('assets/img/icon/ig.png')?>" alt="Instagram <?php echo $site_name;?>"></a></li>
              <li><a href="<?php echo $link_yt;?>" target="_blank"><img src="<?php echo base_url('assets/img/icon/yt.png')?>" alt="Youtube <?php echo $site_name;?>"></a></li>
            </ul>  
          </div>
        </div>
      </div>
    </div>
    
    <?php echo $chat;?>

    
    <script type="text/javascript">
        jQuery(document).ready(function() {
            Layout.init();    
            Layout.initOWL();
            RevosliderInit.initRevoSlider();
            Layout.initTwitter();
            Layout.initFixHeaderWithPreHeader(); /* Switch On Header Fixing (only if you have pre-header) */
            Layout.initNavScrolling();
        });
        function topFunction() {
          document.body.scrollTop = 0;
          document.documentElement.scrollTop = 0;
        }
    </script>
  
    <?php echo $google_analytics;?>

</body>
</html>

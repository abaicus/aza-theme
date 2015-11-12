<!-- =========================
SOCIAL SECTION 
============================== -->

     <?php 

$aza_primary_header = get_theme_mod('aza_social_heading_1', 'STAY CONNECTED');
$aza_secondary_header = get_theme_mod('aza_social_heading_2', 'GET STARTED USING OUR THEME TODAY');
$aza_appstore = get_theme_mod('aza_appstore', aza_get_file('/images/appstore.png'));
$aza_playstore = get_theme_mod('aza_playstore', aza_get_file('/images/playstore.png'));
$aza_appstore_link = get_theme_mod('aza_appstore_link','#');
$aza_playstore_link = get_theme_mod('aza_playstore_link','#');

$social_icons = get_theme_mod ('aza_social_ribbon_icons', json_encode(
            array(
                array('icon_value' => 'icon-arrows-squares' , 
                      'title' => 'Fully Responsive' , 
                      'link' => '#' , 
                      'color' => '#3399df',
                      'subtitle' => 'fully-responsive'),
                 array('icon_value' => 'icon-arrows-squares' , 
                      'title' => 'Fully Responsive' , 
                      'link' => '#' , 
                      'color' => '#3399df',
                      'subtitle' => 'fully-responsive'),
                 array('icon_value' => 'icon-arrows-squares' , 
                      'title' => 'Fully Responsive' , 
                      'link' => '#' , 
                      'color' => '#3399df',
                      'subtitle' => 'fully-responsive'),
)));
          
?>    
           

           
<section id="social">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                       <?php 
if(!empty($aza_primary_header)){
        echo "<h3>".$aza_primary_header."</h3>"; 
    }
?>

                        <p>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                        </p>
                        <div class="separator" <?php echo ( get_theme_mod( 'aza_separator_social_ribbon' ) ) ? "" : "style='display:none!important;'" ?>></div>
                        
                        <?php

if(!empty($aza_secondary_header)){
        echo "<h3>".$aza_secondary_header."</h3>";
    }
                        ?>
                    </div>
                </div>

                <div class="row footer-btn-row" <?php echo ( get_theme_mod( 'aza_social_ribbon_store_buttons' ) ) ? "style='display:none!important;'>" : ">" ?>
                    <div class="col-lg-12 text-center">
                        <?php if((!empty($aza_appstore_link))||(!empty($aza_playstore_link))) {
                       if(!empty($aza_appstore_link)){?>
                            <a class="btn btn-primary btn-stores" href="<?php echo $aza_appstore_link ?>">
                            <img src=" <?php echo esc_url($aza_appstore) ?>" alt="#">
                        </a>
                            <?php }
                        if(!empty($aza_playstore_link)){?>
                                <a class="btn btn-primary btn-stores" href="<?php echo $aza_playstore_link ?>">
                            <img src=" <?php echo esc_url($aza_playstore) ?>" alt="#">
                        </a>
                                <?php } }?>
                    </div>
                </div>


            </div>
        </section>

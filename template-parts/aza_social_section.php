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
                array('icon_value' => 'icon-social-facebook' , 
                      'link' => '#' , 
                      'color' => '#4597d1'),
                 array('icon_value' => 'icon-social-twitter' , 
                      'link' => '#' , 
                      'color' => '#45d1c2'),
                 array('icon_value' => 'icon-social-googleplus' , 
                      'link' => '#' , 
                      'color' => '#fc535f'),
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

if(!empty($social_icons)){
    $social_icons_decoded = json_decode($social_icons);
    if(!empty($social_icons_decoded)) { 
        echo '<p>';
        foreach($social_icons_decoded as $social_icons) {
            echo '<a href="'.esc_html__($social_icons->link).'" style="color: '.esc_html($social_icons->color).';"><span class= "'.esc_html__($social_icons->icon_value).'"></span></a>'; 
}
echo '</p>';
}}
                        ?>

                        <div class="separator" <?php echo ( get_theme_mod( 'aza_separator_social_ribbon' ) ) ? "" : "style='display:none!important;'" ?>></div>
                        
                        <?php

if(!empty($aza_secondary_header)){
        echo "<h3>".$aza_secondary_header."</h3>";
    }
                        ?>
                    </div>
                </div>

                <div class="row social-btn-row" <?php echo ( get_theme_mod( 'aza_social_ribbon_store_buttons' ) ) ? "style='display:none!important;'>" : ">" ?>
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
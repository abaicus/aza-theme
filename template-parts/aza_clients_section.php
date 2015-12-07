<!-- =========================
CLIENTS SECTION
============================== -->
<?php

$heading = get_theme_mod('aza_clients_title', 'OUR CLIENTS');

$subheading = get_theme_mod('aza_clients_subheading', 'Our awesome clients');

$clients_content = get_theme_mod ('aza_clients_content',json_encode(
         array(
                array("image_url"     => aza_get_file('/images/adobe.png'),
                      "link"          => esc_url("#")),
                array("image_url"     => aza_get_file('/images/pixelgraft.png'),
                      "link"          => esc_url("#")),
                array("image_url"     => aza_get_file('/images/wordpress.png'),
                      "link"          => esc_url("#")),
                array("image_url"     => aza_get_file('/images/squares.png'),
                      "link"          => esc_url("#")),
)));

$clients_content_decoded = json_decode($clients_content);

$button_text = get_theme_mod('aza_clients_button_text', 'Become a client')


?>



<section id="clients">
        <div class="container">
             <div class="row">
                <div class="col-lg-12 col-centered text-center clients-header">
                    <?php
                    if(!empty($heading)) {
                        echo '<h1>'.$heading.'</h1>';
                    }?>
                    <?php echo ( get_theme_mod( 'aza_separator_clients_top' ) ) ? "<hr class='separator'/>" : "" ?>
                     <?php
                                if(!empty($subheading)) {
                                echo '<p>'.$subheading.'</p>';
                        }?>
                </div>
            </div>
            <div class="row client-list ">
              <?php

                if(!empty($clients_content)) {
    $clients_content_decoded = json_decode($clients_content);
    if(!empty($clients_content_decoded)) {
        foreach($clients_content_decoded as $clients_content) {
                    echo '<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 client-item text-center">
                    <a href="'.esc_url( $clients_content -> link ).'" alt="#">
                    <img src="'.esc_url( $clients_content -> image_url).'" alt=""> </a> </div>';


        }}}
                    ?>
            </div>


 <?php echo ( get_theme_mod( 'aza_separator_clients_bottom' ) ) ? "<hr class='separator'/>" : "" ?>

             <?php
                        if(!empty($button_text))
                        {
                        echo '<div class="row"><div class="col-lg-12 col-centered text-center">';
                        echo '<button type="button" class="btn features-btn">'.$button_text.'</button></div></div>';
                        }
                    ?>
                </div>
           </div>
    </section>

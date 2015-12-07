<?php
$heading = get_theme_mod('aza_testimonials_header', 'TESTIMONIALS');
$accent_color = get_theme_mod('aza_testimonials_accent_color','#ffb52c');
echo
'<style>
  .carousel-indicators > li.active {
    background-color:'.$accent_color.';
  }
</style>';
$testimonial = get_theme_mod ('aza_testimonials', json_encode(
     array(
                array(
                    'image_url' =>  aza_get_file('/images/testimonials-pic1.png'),
                    'title' => 'John Fox' ,
                    'text' => 'Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit.', 'aza-lite'),

                array(
                    'image_url' =>  aza_get_file('/images/testimonials-pic2.png'),
                    'title' => 'Parr Otte' ,
                    'text' => 'Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit.', 'aza-lite'),

                array(
                    'image_url' =>  aza_get_file('/images/testimonials-pic3.png'),
                    'title' => 'Gee Raff' ,
                    'text' => esc_html__('Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit.', 'aza-lite')),

     )
));


$testimonial_decoded = json_decode($testimonial);
$var=0;
$var1=0;

?>
      <?php echo ( get_theme_mod( 'aza_zigzag_testimonial_top' ) ) ? "<div class='zig-zag-top'></div>" : "" ?>

    <section id="testimonials">
        <div class="testimonials-background">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="text-center"><?php echo $heading ?></h1>
                    </div>
                </div>
            </div>



            <div id="carousel" class="carousel slide" data-interval="3000" data-ride="carousel">
                <!-- Carousel indicators -->

                <!-- Wrapper for carousel items -->
                <div class="carousel-inner">

                    <?php

if(!empty($testimonial)){
    $testimonial_decoded = json_decode($testimonial);
    if(!empty($testimonial_decoded)) {
foreach($testimonial_decoded as $testimonial) {
    if($var == 0) {
        echo '<div class="active item">';
    } else {
        echo '<div class="item">';
    } ?>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12 col-centered">
                                    <div class="center-block testimonials-pic" style="background-image: url('<?php echo esc_url($testimonial->image_url) ?>'); border-color: <?php echo esc_attr($accent_color) ?>" ></div>
                                    <p class="center-block">
                                        <?php echo esc_html($testimonial->text); ?>
                                    </p>
                                    <h4 class="signature"><?php echo esc_html($testimonial->title); ?> </h4>
                                </div>
                            </div>
                        </div>

                        <?php  echo '</div>';
                    $var++;
} ?>
           <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-centered center-block">
                                <ol class="carousel-indicators center-block">

    <?php    foreach($testimonial_decoded as $testimonial) { ?>
                         <li data-target = "#carousel" data-slide-to = "<?php
                                                                            echo $var1;
                                                                        ?>"
    <?php
    if($var1 == 0) {
                    echo ' class = "active"></li>';
                    $var1++;
                } else {
                    echo '></li>';
                    $var1++;
    }}}} ?>

                </div>
                </ol>
            </div>
        </div>
        </div>
        <!-- Carousel controls -->
        <a class="left carousel-control" href="#carousel" data-slide="prev">
            <span class="icon-arrow-carrot-left"></span>
        </a>
        <a class="right carousel-control" href="#carousel" data-slide="next">
            <span class="icon-arrow-carrot-right"></span>
        </a>
        </div>


        </div>


    </section>

    <?php echo ( get_theme_mod( 'aza_zigzag_testimonial_bottom' ) ) ? "<div class='zig-zag-bottom'></div>" : "" ?>

<?php 
//Template Name: Pagina de inicio2
get_header();?>
<main>

<div class="nav-divider row justify-content-center">
    <div class="row triangle-down"></div> 
</div>

<section id="hero-section" class="row align-items-center justify-content-center">
    <div class="col-10 col-lg-6 col-xl-5 hero-text-box">
        <h2 class="hero-title">
            <?php $value = rwmb_meta( 'hmtp_mbtitle_about' );
            echo $value;?>
        </h2>
        <p class="hero-text">
            <?php $value = rwmb_meta( 'hmtp_mbtextarea_about' );
            echo $value;?>
        </p>
    </div>
    <div class="col-10 col-lg-5 col-xl-5 hero-video-box embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item hero-video" src="<?php $url = rwmb_get_value( 'hmtp_mbvideo_about' ); echo $url; ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    <div class="row align-self-end divider-bottom-l"></div>
</section> 

<div class="row align-self-end divider-top-r"></div>

<section id="about-section" class="container">
            <div class="row justify-content-center">
                <div class="col-12 about-heading-box">
                    <h2 class="standard-title">
                        <?php $value = rwmb_meta( 'hmtp_mbtitle_caregivers' );
                        echo $value;?>
                    </h2>
                    <div class="separator-icon-box">
                        <img class="separator-icon" src="<?php bloginfo('template_url'); ?>/assets/icons/heartbeat-solid.svg">
                    </div>
                    <p class="standard-text">
                        <?php $value = rwmb_meta( 'hmtp_mbtextarea_caregivers' );
                        echo $value;?>
                    </p>
                </div>
            </div>
            <div class="row about-row align-items-center justify-content-center">
                <div class="col-11 col-md-6 about-text-box">
                    <h4 class="box-title">
                        <?php $value = rwmb_meta( 'hmtp_mbtitle_card1_caregivers' );
                        echo $value;?>
                    </h3>
                    <p class="box-text">
                        <?php $value = rwmb_meta( 'hmtp_mbtextarea_card1_caregivers' );
                        echo $value;?>
                    </p>
                </div>
                <figure class="col-12 col-md-6 about-image-box">
                    <?php $images = rwmb_meta( 'hmtp_mbimage_card1_caregivers', array( 
                        'limit' => 1,
                        'size' => 'full-size',
                        ) );
                    $image = reset( $images );?>
                    <img class="about-image" src="<?php echo $image['url']; ?>">
                </figure>


            </div>
            <div class="row about-row align-items-center justify-content-center">
                <figure class="col-12 col-md-6 order-2 order-md-1 about-image-box">
                    <?php $images = rwmb_meta( 'hmtp_mbimage_card2_caregivers', array( 
                        'limit' => 1,
                        'size' => 'full-size',
                        ) );
                    $image = reset( $images );?>
                    <img class="about-image" src="<?php echo $image['url']; ?>">
                </figure>
                <div class="col-11 col-md-6 order-1 order-md-2 about-text-box">
                    <h4 class="box-title">
                        <?php $value = rwmb_meta( 'hmtp_mbtitle_card2_caregivers' );
                        echo $value;?>
                    </h3>
                    <p class="box-text">
                        <?php $value = rwmb_meta( 'hmtp_mbtextarea_card2_caregivers' );
                        echo $value;?>
                    </p>
                </div>
            </div>
            <div class="row about-row align-items-center justify-content-center">
                <div class="col-11 col-md-6 about-text-box">
                    <h4 class="box-title">
                        <?php $value = rwmb_meta( 'hmtp_mbtitle_card3_caregivers' );
                        echo $value;?>
                    </h3>
                    <p class="box-text">
                        <?php $value = rwmb_meta( 'hmtp_mbtextarea_card3_caregivers' );
                        echo $value;?>
                    </p>
                </div>
                <figure class="col-12 col-md-6 about-image-box">
                    <?php $images = rwmb_meta( 'hmtp_mbimage_card3_caregivers', array( 
                        'limit' => 1,
                        'size' => 'full-size',
                        ) );
                    $image = reset( $images );?>
                    <img class="about-image" src="<?php echo $image['url']; ?>">
                </figure>
            </div>
        </section>

</main>
<?php get_footer();?>
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

</main>
<?php get_footer();?>
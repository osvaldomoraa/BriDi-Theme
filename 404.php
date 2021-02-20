<?php

function error_404_styles(){   
    wp_enqueue_style( '404' );
}
add_action('wp_enqueue_scripts','error_404_styles');

get_header();?>

<main>
    <div class="nav-divider d-flex justify-content-center">
        <div class="triangle-down "></div> 
    </div>
    <section id="error-404-section">
        <div class="container">
            <div class="row error-404-row align-items-center justify-content-center">
                <div class="col-12 col-lg-6">
                    <div class="error-404-number-box">
                        <span class='error-404-number-heading'>
                            404
                        </span>                        
                    </div>                        
                </div>
                <div class="col-12 col-lg-6 ">
                    <div class="error-404-message-box">
                        <span class='error-404-message-heading'>
                            No se pudo encontrar la página solicitada
                        </span> 
                        <div class="separator-icon-box">
                            <img class="separator-icon" src="<?php bloginfo('template_url'); ?>/assets/icons/heartbeat.svg">
                        </div>
                        <span class='error-404-message-text'>
                            Esto puede deberse a que la dirección esté mal escrita o que la página haya sido borrada o cambiada de lugar.
                        </span>
                        <div class='error-404-button-box'>
                            <a class="btn main-button error-404-button" href="<?php echo home_url();?>" role="button">Volver al inicio</a>
                        </div>                        
                    </div>                        
                </div>
            </div>
        </div>            
    </section>
    <div class="divider-wrapper">
        <div class="divider-h-p1"></div>
    </div>
</main>

<?php get_footer();?>
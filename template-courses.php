<?php

//Template Name: Pagina de talleres

function page_styles(){   
    wp_enqueue_style( 'template-courses' );
}
add_action('wp_enqueue_scripts','page_styles');

get_header();?>

<main>
    <div class="nav-divider d-flex justify-content-center">
        <div class="triangle-down "></div>
    </div>
    <section id="page-section">
        <div class='page-background-wrapper'></div>
        <div class="container">
            <div class="row page-heading-row align-items-center justify-content-center">
                <div class="col-12">
                    <div class="page-title-box">
                        <h1 class='standard-title page-title'>
                            <?php the_title();?>
                        </h1>                        
                    </div>                        
                </div>
            </div>
            <div class="row page-content-row align-items-center justify-content-center">
                <div class="col-12">
                    <div class="page-content-box">
                        <?php if(have_posts()){
                            while(have_posts()){ the_post();
                                the_content();
                            }
                        }?>
                        <div class="row">
                            <?php
                                $entries = get_post_meta( get_the_ID(), 'course_card_block', true );
                                foreach ( (array) $entries as $key => $entry ) {
                                    $image = $title = $description = '';
                            
                                    if ( isset( $entry['clmb_cmb2_image_course_card'] ) ) {
                                        $image = esc_url( $entry['clmb_cmb2_image_course_card'] );
                                    }

                                    if ( isset( $entry['clmb_cmb2_title_course_card'] ) ) {
                                        $title = esc_html( $entry['clmb_cmb2_title_course_card'] );
                                    }
                                
                                    if ( isset( $entry['clmb_cmb2_description_course_card'] ) ) {
                                        $description = esc_html( $entry['clmb_cmb2_description_course_card'] );
                                    }

                                    if ( isset( $entry['clmb_cmb2_url_course_card'] ) ) {
                                        $url = esc_url( $entry['clmb_cmb2_url_course_card'] );
                                    }
                            
                            ?>
                            <div class="col-12 col-md-8 col-lg-6">
                                <figure class="course-card-image-box">
                                    <img class="course-card-image" src="<?php echo $image; ?>">
                                </figure>
                                <div class="course-card-text-box">
                                    <h3 class="box-title">
                                        <?php echo $title; ?>
                                    </h3>
                                    <p class="box-text">
                                        <?php echo $description; ?>
                                    </p>
                                    <div class="d-flex justify-content-center">
                                        <a class="btn" href="<?php echo $url; ?>">Ir al taller</a> 
                                    </div>
                                </div> 
                                                                                                                      
                            </div>
                            <?php } ?>
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
<?php

function error_404_styles(){   
    wp_enqueue_style( 'page' );
}
add_action('wp_enqueue_scripts','error_404_styles');

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
                    <div class="page-content-box standard-text">
                        <?php if(have_posts()){
                            while(have_posts()){ the_post();
                                the_content();
                            }
                        }?>                        
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
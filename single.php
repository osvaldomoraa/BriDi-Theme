<?php

function single_styles(){   
    wp_enqueue_style( 'single' );
}
add_action('wp_enqueue_scripts','single_styles');

get_header();?>

<main>
    <div class="nav-divider d-flex justify-content-center">
        <div class="triangle-down "></div>
    </div>
    <section id="single-section">
        <div class='single-background-wrapper'></div>
        <div class="container">
            <div class="row single-heading-row align-items-center justify-content-center">
                <div class="col-12">
                    <div class="single-heading-box">
                        <span class='single-category'>
                            <?php the_category( '&bull;' ); ?>
                        </span>      
                        <h1 class='standard-title single-title'>
                            <?php the_title(); ?>
                        </h1>
                        <div class='single-date-box'>
                            <span class='single-date'>
                            <i class="bi bi-calendar2-fill"></i></i><?php the_date(); ?>
                            </span>
                            <span class='single-time'>
                            <i class="bi bi-clock-fill"></i><?php the_time(); ?>
                            </span> 
                        </div>
                                              
                    </div>                        
                </div>
            </div>
            <div class="row single-content-row align-items-center justify-content-center">
                <div class="col-12">
                    <div class="single-content-box">
                        <div class='single-content'>
                            <?php if(have_posts()){
                                while(have_posts()){ the_post();
                                    the_content();
                                }
                            }?>
                        </div>                       
                        <div class='social-media-buttons mt-auto'>
                            <span class='social-media-buttons-heading'>
                                Compartir esta publicación:
                            </span>
                            <a href="http://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(get_permalink()) ?>" class='facebook-share-button'><i class="bi bi-facebook social-media-share-icon"></i><span class='social-media-share-name'>Facebook</span></a>                            
                            <a href="https://twitter.com/intent/tweet?text=<?php echo urlencode(get_permalink()) ?>" class='twitter-share-button'><i class="bi bi-twitter social-media-share-icon"></i><span class='social-media-share-name'>Twitter</span></a>
                            <a href="https://api.whatsapp.com/send?text=<?php echo urlencode(get_permalink()) ?>" class='whatsapp-share-button'><i class="bi bi-whatsapp social-media-share-icon"></i><span class='social-media-share-name'>WhatsApp</span></a>
                            <a href="https://telegram.me/share/url?url=<?php echo urlencode(get_permalink()) ?>" class='telegram-share-button '><i class="bi bi-telegram social-media-share-icon"></i><span class='social-media-share-name'>Telegram</span></a>
                            <a href="mailto:?body=<?php echo urlencode(get_permalink()) ?>" class='mail-share-button'><i class="bi bi-envelope-fill social-media-share-icon"></i><span class='social-media-share-name'>Email</span></a>                            
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
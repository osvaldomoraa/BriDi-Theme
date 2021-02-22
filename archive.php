<?php

function archive_styles(){   
    wp_enqueue_style( 'archive' );
}
add_action('wp_enqueue_scripts','archive_styles');

get_header();?>

<main>
    <div class="nav-divider d-flex justify-content-center">
        <div class="triangle-down "></div>
    </div>
    <section id="archive-section">
        <div class="container">
            <div class="row archive-heading-row align-items-center justify-content-center">
                <div class="col-12">
                    <div class="archive-title-box">
                        <?php 
                            $current_query = get_queried_object();
                            $archive_title = is_category() ? $current_query->name : $current_query->labels->name;
                        ?>
                        <h1 class='standard-title'>
                            Publicaciones de: <?php echo $archive_title; ?>
                        </h1>                        
                    </div>                        
                </div>
            </div>
            <div class="row archive-entries-row row-cols-1 row-cols-sm-2 row-cols-lg-3 align-items-center">
                <?php if (have_posts()) { ?>
                        <?php while (have_posts()) { ?>
                            <?php the_post(); ?>
                            <div class='col'>
                                <div class="card archive-entry-card">
                                    <a href="<?php the_permalink(); ?>">
                                        <img src="<?php the_post_thumbnail_url('large'); ?>" class="card-img-top" alt="...">
                                    </a>
                                    <div class="card-body">
                                        <a href="<?php the_permalink(); ?>">
                                            <h5 class="card-title entry-card-title"><?php the_title(); ?></h5>
                                        </a>
                                        <p class="card-text entry-card-text"><?php echo get_the_excerpt(); ?></p>
                                        <p class="card-text entry-card-link">Ver más »</p>
                                    </div>
                                    <div class="card-footer">
                                        <hr/>
                                        <small class="entry-card-date"><?php the_date(); ?></small>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                <?php } ?>
            </div>
        </div>            
    </section>
    <div class="divider-wrapper">
        <div class="divider-h-p1"></div>
    </div>
</main>

<?php get_footer();?>

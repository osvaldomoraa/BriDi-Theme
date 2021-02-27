<?php

function sesion_styles(){   
    wp_enqueue_style( 'sesion' );
}
add_action('wp_enqueue_scripts','sesion_styles');

get_header();

if ( !is_user_logged_in() ) {
    echo 'no estas logueado';
}   

$current_user = get_userdata( get_current_user_id() );
$current_user_id = $current_user->ID;
$current_user_role = $current_user->roles[0];

$pretest_gen_status = get_user_meta( $current_user_id, 'pretest_gen' , true );

if ( $current_user_role == 'participant' && $pretest_gen_status !=1 ) {
    echo 'no hiciste pretest general';
} 

$pretest_sue_status = get_user_meta( $current_user_id, 'pretest_sue' , true );
$pretest_hyb_status = get_user_meta( $current_user_id, 'pretest_hyb' , true );
$pretest_eje_status = get_user_meta( $current_user_id, 'pretest_eje' , true );
$pretest_hig_status = get_user_meta( $current_user_id, 'pretest_hig' , true );

$current_post_id = get_the_ID();

$current_sesion_categories = get_the_terms( $current_post_id, 'modulo' );
$current_sesion_category = $current_sesion_categories[0]->slug;

$current_user = get_userdata( $current_user_id );

switch ($current_sesion_category) {
    case ($current_sesion_category == 'sleeping'):
        if ($current_user_role == 'participant' && $pretest_sue_status != 1) {
            echo 'no hiciste pretest sueño';
            break;
        }
    case ($current_sesion_category == 'hybrid'):
        if ($current_user_role == 'participant' && $pretest_hyb_status != 1) {
            echo 'no hiciste pretest hybrido';
            break;
        }
    case ($current_sesion_category == 'exercise'):
        if ($current_user_role == 'participant' && $pretest_eje_status != 1) {
            echo 'no hiciste pretest ejercicio';
            break;
        }
    case ($current_sesion_category == 'sanitation'):
        if ($current_user_role == 'participant' && $pretest_hig_status != 1) {
            echo 'no hiciste pretest higene';
            break;
        }    
}

?>

<main>
    <div class="nav-divider d-flex justify-content-center">
        <div class="triangle-down "></div>
    </div>
    <section id="sesion-section">
        <div class='sesion-background-wrapper'></div>
        <div class="container">
            <div class="row sesion-heading-row align-items-center justify-content-center">
                <div class="col-12">
                    <div class="sesion-title-box">
                        <h1 class='standard-title sesion-title'>
                            <?php the_title();?>
                        </h1>                        
                    </div>                        
                </div>
            </div>
            <div class="row sesion-content-row">
                <div class='col-8'>
                    <div class='sesion-main-video-box embed-responsive embed-responsive-16by9'>
                        <iframe class="embed-responsive-item hero-video" src="<?php $ses_mb_main_video = get_post_meta( get_the_ID(), 'ses_mb_main_video', true ); echo esc_url( $ses_mb_main_video ); ?>" allowfullscreen></iframe>
                    </div>
                    <div class="sesion-content-box">
                        <?php if(have_posts()){
                            while(have_posts()){ the_post();
                                the_content();
                            }
                        }?>                        
                    </div>
                </div>
                <div class='col-4'>
                    <div class='sesion-sidebar-box'>
                        <div class='sesion-assets-box'>
                            <span class='box-title sesion-assets-title'>
                                Materiales
                            </span>
                            <ul class='sesion-assets-list'>
                                <?php
                                    $entries = get_post_meta( get_the_ID(), 'single_sesion_assets_block', true );
                                    foreach ( (array) $entries as $key => $entry ) {
                                        $asset_name = $asset_link = '';
                                
                                        if ( isset( $entry['ses_mb_file_name_assets_block'] ) ) {
                                            $asset_name = esc_html( $entry['ses_mb_file_name_assets_block'] );
                                        }

                                        if ( isset( $entry['ses_mb_file_link_assets_block'] ) ) {
                                            $asset_link = esc_url( $entry['ses_mb_file_link_assets_block'] );
                                        }
                                ?>
                                <li>
                                    <a class='sesion-assets-list-element' href="<?php echo $asset_link; ?>" target="_blank"><i class="bi bi-arrow-down-square-fill sesion-assets-list-icon"></i><?php echo $asset_name; ?></a>
                                </li>
                                <?php } ?>
                            </ul>
                        </div>
                        <div class='sesion-coments-box'>
                            <span class='box-title sesion-coments-title'>
                                Comentarios
                            </span>
                            <?php
                                comments_template();
                            ?>                             
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
<?php 

//Template Name: Pagina de inicio

function template_home_styles(){  
    wp_enqueue_style( 'template-home' );
}
add_action('wp_enqueue_scripts','template_home_styles');

get_header();?>

<main>

    <div class="nav-divider d-flex justify-content-center">
        <div class="triangle-down "></div> 
    </div>

    <section id="hero-section">
        <div class="container">
            <div class="row hero-row align-items-center justify-content-center">
                <div class="col-12 col-lg-6">
                    <div class="hero-text-box">
                        <h2 class="hero-title">
                            <?php
                                $htmb_cmb2_title_about = get_post_meta( get_the_ID(), 'htmb_cmb2_title_about', true );
                                echo esc_html( $htmb_cmb2_title_about );
                            ?>
                        </h2>
                        <p class="hero-text">
                            <?php
                                $htmb_cmb2_text_about = get_post_meta( get_the_ID(), 'htmb_cmb2_text_about', true );
                                echo esc_html( $htmb_cmb2_text_about );
                            ?>
                        </p>
                    </div>                        
                </div>
                <div class="col-12 col-lg-6 ">
                    <div class="hero-video-box embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item hero-video" src="<?php $htmb_cmb2_video_about = get_post_meta( get_the_ID(), 'htmb_cmb2_video_about', true ); echo esc_url( $htmb_cmb2_video_about ); ?>" allowfullscreen></iframe>
                    </div>                        
                </div>
            </div>
        </div>            
        <div class="align-self-end divider-h-p1"></div>
    </section> 

    <div class="divider-wrapper">
        <div class="divider-h-p2"></div>
    </div>

    <section id="about-section">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-12">
                    <div class="about-heading-box">
                        <h2 class="standard-title">
                            <?php
                                $htmb_cmb2_title_caregivers = get_post_meta( get_the_ID(), 'htmb_cmb2_title_caregivers', true );
                                echo esc_html( $htmb_cmb2_title_caregivers );
                            ?>
                        </h2>
                        <div class="separator-icon-box">
                            <img class="separator-icon" src="<?php bloginfo('template_url'); ?>/assets/icons/heartbeat.svg">
                        </div>
                        <p class="standard-text">
                            <?php
                                $htmb_cmb2_text_caregivers = get_post_meta( get_the_ID(), 'htmb_cmb2_text_caregivers', true );
                                echo esc_html( $htmb_cmb2_text_caregivers );
                            ?>
                        </p>
                    </div>                        
                </div>
            </div>
            <div class="about-row row align-items-center justify-content-center">
                <div class="col-12 col-md-8 col-lg-6">
                    <div class="about-text-box">
                        <h3 class="box-title">
                            <?php
                                $htmb_cmb2_title_card1_caregivers = get_post_meta( get_the_ID(), 'htmb_cmb2_title_card1_caregivers', true );
                                echo esc_html( $htmb_cmb2_title_card1_caregivers );
                            ?>
                        </h3>
                        <p class="box-text">
                            <?php
                                $htmb_cmb2_text_card1_caregivers = get_post_meta( get_the_ID(), 'htmb_cmb2_text_card1_caregivers', true );
                                echo esc_html( $htmb_cmb2_text_card1_caregivers );
                            ?>
                        </p>
                    </div>                        
                </div>
                <div class="col-12 col-md-4 col-lg-6">
                    <figure class="about-image-box">
                        <img class="about-image" src="<?php $htmb_cmb2_image_card1_caregivers = get_post_meta( get_the_ID(), 'htmb_cmb2_image_card1_caregivers', true ); echo esc_url( $htmb_cmb2_image_card1_caregivers ); ?>">
                    </figure>
                </div>                    
            </div>
            <div class="about-row row align-items-center justify-content-center">
                <div class="col-12 col-md-4 col-lg-6 order-2 order-md-1">
                    <figure class="about-image-box">
                        <img class="about-image" src="<?php $htmb_cmb2_image_card2_caregivers = get_post_meta( get_the_ID(), 'htmb_cmb2_image_card2_caregivers', true ); echo esc_url( $htmb_cmb2_image_card2_caregivers ); ?>">
                    </figure>
                </div>
                <div class="col-12 col-md-8 col-lg-6 order-1 order-md-2">
                    <div class="about-text-box">
                        <h3 class="box-title">
                            <?php
                                $htmb_cmb2_title_card2_caregivers = get_post_meta( get_the_ID(), 'htmb_cmb2_title_card2_caregivers', true );
                                echo esc_html( $htmb_cmb2_title_card2_caregivers );
                            ?>
                        </h3>
                        <p class="box-text">
                            <?php
                                $htmb_cmb2_text_card2_caregivers = get_post_meta( get_the_ID(), 'htmb_cmb2_text_card2_caregivers', true );
                                echo esc_html( $htmb_cmb2_text_card2_caregivers );
                            ?>
                        </p>
                    </div>
                </div>                    
            </div>                
            <div class="about-row row align-items-center justify-content-center">
                <div class="col-12 col-md-8 col-lg-6">
                    <div class="about-text-box">
                        <h3 class="box-title">
                            <?php
                                $htmb_cmb2_title_card3_caregivers = get_post_meta( get_the_ID(), 'htmb_cmb2_title_card3_caregivers', true );
                                echo esc_html( $htmb_cmb2_title_card3_caregivers );
                            ?>
                        </h3>
                        <p class="box-text">
                            <?php
                                $htmb_cmb2_text_card3_caregivers = get_post_meta( get_the_ID(), 'htmb_cmb2_text_card3_caregivers', true );
                                echo esc_html( $htmb_cmb2_text_card3_caregivers );
                            ?>
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-6">
                    <figure class="about-image-box">
                        <img class="about-image" src="<?php $htmb_cmb2_image_card3_caregivers = get_post_meta( get_the_ID(), 'htmb_cmb2_image_card3_caregivers', true ); echo esc_url( $htmb_cmb2_image_card3_caregivers ); ?>">
                    </figure>
                </div>
            </div>
        </div>            
    </section>
    
    <section id="home-cta-section">
        <div class="cta-divider-box">
            <div class="cta-divider-top-p1"></div>
        </div>  
        <div class="cta-divider-top-p2"></div>
        <div class="container">
            <div class="home-cta row align-items-center">
                <div class="col-3">
                    <figure class="home-cta-icon-box">
                        <img class="home-cta-icon" src="<?php $htmb_cmb2_image_slogan = get_post_meta( get_the_ID(), 'htmb_cmb2_image_slogan', true ); echo esc_url( $htmb_cmb2_image_slogan ); ?>">
                    </figure>
                </div>
                <div class="col-9">
                    <div class="home-cta-text-box">
                        <span class="home-cta-slogan">
                            <?php
                                $htmb_cmb2_title_slogan = get_post_meta( get_the_ID(), 'htmb_cmb2_title_slogan', true );
                                echo esc_html( $htmb_cmb2_title_slogan );
                            ?>
                        </span>
                    </div>
                </div>                        
            </div>
        </div>
        <div class="cta-divider-bottom-p1"></div>
        <div class="cta-divider-box">
            <div class="cta-divider-bottom-p2"></div>
        </div>                             
    </section>

    <Section id="methodology-section">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-12 col-md-6 col-lg-4 order-1">
                    <div class="methodology-heading-box">
                        <h2 class="standard-title">
                            <?php
                                $htmb_cmb2_title_methodology = get_post_meta( get_the_ID(), 'htmb_cmb2_title_methodology', true );
                                echo esc_html( $htmb_cmb2_title_methodology );
                            ?>
                        </h2>
                        <div class="separator-icon-box">
                            <img class="separator-icon" src="<?php bloginfo('template_url'); ?>/assets/icons/heartbeat.svg">
                        </div>
                        <figure class="methodology-image-box">
                            <img class="methodology-image" src="<?php $htmb_cmb2_image_methodology = get_post_meta( get_the_ID(), 'htmb_cmb2_image_methodology', true ); echo esc_url( $htmb_cmb2_image_methodology ); ?>">
                        </figure>
                    </div>
                </div>                    
                <div class="col-12 col-lg-4 order-2 order-md-3 order-lg-2">
                    <div class="row methodology-nesting-row">
                        <div class="col-12 col-md-6 col-lg-12">
                            <div class="methodology-text-box">
                                <figure class="methodology-icon-box">
                                    <img class="methodology-icon" src="<?php $htmb_cmb2_image_card1_methodology = get_post_meta( get_the_ID(), 'htmb_cmb2_image_card1_methodology', true ); echo esc_url( $htmb_cmb2_image_card1_methodology ); ?>">
                                </figure>
                                <h3 class="box-title">
                                    <?php
                                        $htmb_cmb2_title_card1_methodology = get_post_meta( get_the_ID(), 'htmb_cmb2_title_card1_methodology', true );
                                        echo esc_html( $htmb_cmb2_title_card1_methodology );
                                    ?>
                                </h3>
                                <p class="box-text">
                                    <?php
                                        $htmb_cmb2_text_card1_methodology = get_post_meta( get_the_ID(), 'htmb_cmb2_text_card1_methodology', true );
                                        echo esc_html( $htmb_cmb2_text_card1_methodology );
                                    ?>                                        
                                </p>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-12">
                            <div class="methodology-text-box">
                                <figure class="methodology-icon-box">
                                    <img class="methodology-icon" src="<?php $htmb_cmb2_image_card2_methodology = get_post_meta( get_the_ID(), 'htmb_cmb2_image_card2_methodology', true ); echo esc_url( $htmb_cmb2_image_card2_methodology ); ?>">
                                </figure>
                                <h3 class="box-title">
                                    <?php
                                        $htmb_cmb2_title_card2_methodology = get_post_meta( get_the_ID(), 'htmb_cmb2_title_card2_methodology', true );
                                        echo esc_html( $htmb_cmb2_title_card2_methodology );
                                    ?>
                                </h3>
                                <p class="box-text">
                                    <?php
                                        $htmb_cmb2_text_card2_methodology = get_post_meta( get_the_ID(), 'htmb_cmb2_text_card2_methodology', true );
                                        echo esc_html( $htmb_cmb2_text_card2_methodology );
                                    ?> 
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 order-3 order-md-2 order-lg-3">
                    <div class="methodology-text-box">
                        <figure class="methodology-icon-box">
                            <img class="methodology-icon" src="<?php $htmb_cmb2_image_card3_methodology = get_post_meta( get_the_ID(), 'htmb_cmb2_image_card3_methodology', true ); echo esc_url( $htmb_cmb2_image_card3_methodology ); ?>">
                        </figure>
                        <h3 class="box-title">
                            <?php
                                $htmb_cmb2_title_card2_methodology = get_post_meta( get_the_ID(), 'htmb_cmb2_title_card3_methodology', true );
                                echo esc_html( $htmb_cmb2_title_card2_methodology );
                            ?>
                        </h3>
                        <p class="box-text">
                            <?php
                                $htmb_cmb2_text_card2_methodology = get_post_meta( get_the_ID(), 'htmb_cmb2_text_card3_methodology', true );
                                echo esc_html( $htmb_cmb2_text_card2_methodology );
                            ?>                       
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </Section>

    <div class="divider-wrapper">
        <div class="divider-b-p1"></div>        
        <div class="divider-b-p2"></div>
    </div>    

    <section id="objcetives-section">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col">
                    <div class="objectives-heading-box">
                        <h2 class="standard-title">
                            <?php
                                $htmb_cmb2_title_objetives = get_post_meta( get_the_ID(), 'htmb_cmb2_title_objetives', true );
                                echo esc_html( $htmb_cmb2_title_objetives );
                            ?>
                        </h2>
                        <div class="separator-icon-box">
                            <img class="separator-icon" src="<?php bloginfo('template_url'); ?>/assets/icons/heartbeat.svg">
                        </div>
                        <p class="standard-text">
                            <?php
                                $htmb_cmb2_text_objetives = get_post_meta( get_the_ID(), 'htmb_cmb2_text_objetives', true );
                                echo esc_html( $htmb_cmb2_text_objetives );
                            ?>                        
                        </p>
                    </div>
                </div>                    
            </div>
            <div class="row objectives-row align-items-start justify-content-center">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="objectives-box">
                        <figure class="objectives-icon-box">
                            <img class="objectives-icon" src="<?php $htmb_cmb2_image_card1_objetives = get_post_meta( get_the_ID(), 'htmb_cmb2_image_card1_objetives', true ); echo esc_url( $htmb_cmb2_image_card1_objetives ); ?>">
                        </figure>
                        <h3 class="box-title">
                            <?php
                                $htmb_cmb2_title_card1_objetives = get_post_meta( get_the_ID(), 'htmb_cmb2_title_card1_objetives', true );
                                echo esc_html( $htmb_cmb2_title_card1_objetives );
                            ?>
                        </h3>
                        <p class="box-text">
                            <?php
                                $htmb_cmb2_text_card1_objetives = get_post_meta( get_the_ID(), 'htmb_cmb2_text_card1_objetives', true );
                                echo esc_html( $htmb_cmb2_text_card1_objetives );
                            ?> 
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="objectives-box">
                        <figure class="objectives-icon-box">
                            <img class="objectives-icon" src="<?php $htmb_cmb2_image_card2_objetives = get_post_meta( get_the_ID(), 'htmb_cmb2_image_card2_objetives', true ); echo esc_url( $htmb_cmb2_image_card2_objetives ); ?>">
                        </figure>
                        <h3 class="box-title">
                            <?php
                                $htmb_cmb2_title_card2_objetives = get_post_meta( get_the_ID(), 'htmb_cmb2_title_card2_objetives', true );
                                echo esc_html( $htmb_cmb2_title_card2_objetives );
                            ?>
                        </h3>
                        <p class="box-text">
                            <?php
                                $htmb_cmb2_text_card2_objetives = get_post_meta( get_the_ID(), 'htmb_cmb2_text_card2_objetives', true );
                                echo esc_html( $htmb_cmb2_text_card2_objetives );
                            ?>
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="objectives-box">
                        <figure class="objectives-icon-box">
                            <img class="objectives-icon" src="<?php $htmb_cmb2_image_card3_objetives = get_post_meta( get_the_ID(), 'htmb_cmb2_image_card3_objetives', true ); echo esc_url( $htmb_cmb2_image_card3_objetives ); ?>">
                        </figure>
                        <h3 class="box-title">
                            <?php
                                $htmb_cmb2_title_card3_objetives = get_post_meta( get_the_ID(), 'htmb_cmb2_title_card3_objetives', true );
                                echo esc_html( $htmb_cmb2_title_card3_objetives );
                            ?>
                        </h3>
                        <p class="box-text">
                            <?php
                                $htmb_cmb2_text_card3_objetives = get_post_meta( get_the_ID(), 'htmb_cmb2_text_card3_objetives', true );
                                echo esc_html( $htmb_cmb2_text_card3_objetives );
                            ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="divider-wrapper">
        <div class="divider-b-p1"></div>        
        <div class="divider-b-p2"></div>
    </div>  


    <section id="team-section">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="team-heading-box">
                        <h2 class="standard-title">
                            <?php
                                $htmb_cmb2_title_team = get_post_meta( get_the_ID(), 'htmb_cmb2_title_team', true );
                                echo esc_html( $htmb_cmb2_title_team );
                            ?>
                        </h2>
                        <div class="separator-icon-box">
                            <img class="separator-icon" src="<?php bloginfo('template_url'); ?>/assets/icons/heartbeat.svg">
                        </div>
                        <p class="standard-text">
                            <?php
                                $htmb_cmb2_text_team = get_post_meta( get_the_ID(), 'htmb_cmb2_text_team', true );
                                echo esc_html( $htmb_cmb2_team );
                            ?>   
                        </p>
                    </div>
                </div>                                    
            </div>
            <div class="row">
                <?php
                    $entries = get_post_meta( get_the_ID(), 'team_members_block', true );
                    foreach ( (array) $entries as $key => $entry ) {
                        $name = $role = $photo = '';
                
                        if ( isset( $entry['htmb_cmb2_title_member_team'] ) ) {
                            $name = esc_html( $entry['htmb_cmb2_title_member_team'] );
                        }
                    
                        if ( isset( $entry['htmb_cmb2_role_member_team'] ) ) {
                            $role = esc_html( $entry['htmb_cmb2_role_member_team'] );
                        }
                    
                        if ( isset( $entry['htmb_cmb2_image_member_team'] ) ) {
                            $photo = esc_url( $entry['htmb_cmb2_image_member_team'] );
                        }
                ?>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                    <div class="team-member-box">
                        <figure class="team-photo-box">
                            <img class="team-photo rounded-circle" src="<?php echo $photo; ?>">
                        </figure>
                        <span class="member-name">
                            <?php echo $name; ?> 
                        </span>
                        <span class="member-charge">
                        <?php echo $role; ?>
                        </span>
                    </div>
                </div>                    
                <?php } ?>
            </div>
        </div>            
    </section>

    <div class="divider-wrapper">
        <div class="divider-b-p1"></div>        
        <div class="divider-b-p2"></div>
    </div>  

    <section id="testimonials-section">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-12">
                    <div class="testimonials-heading-box">
                        <h2 class="standard-title">
                            <?php
                                $htmb_cmb2_title_testimonials = get_post_meta( get_the_ID(), 'htmb_cmb2_title_testimonials', true );
                                echo esc_html( $htmb_cmb2_title_testimonials );
                            ?>
                        </h2>
                        <div class="separator-icon-box">
                            <img class="separator-icon" src="<?php bloginfo('template_url'); ?>/assets/icons/heartbeat.svg">
                        </div>
                    </div>
                </div>                    
            </div>
            <div class="row align-items-center justify-content-center">
                <div class="col">
                    <div class="testimonial-bubble-text">
                        <p>
                            <?php
                                $htmb_cmb2_bubble_text_testimonials = get_post_meta( get_the_ID(), 'htmb_cmb2_bubble_text_testimonials', true );
                                echo esc_html( $htmb_cmb2_bubble_text_testimonials );
                            ?>
                        </p>
                    </div>
                </div>                    
            </div>
            <div class="row align-items-center justify-content-center">
                <div class="col">
                    <div class="caregiver-details d-flex justify-content-center align-items-center">
                        <div class="caregiver-photo-box">
                            <img class="caregiver-photo rounded-circle" src="<?php $htmb_cmb2_photo_caregiver_testimonials = get_post_meta( get_the_ID(), 'htmb_cmb2_photo_caregiver_testimonials', true ); echo esc_url( $htmb_cmb2_photo_caregiver_testimonials ); ?>">
                        </div>
                        <div class="caregiver-text-box">
                            <span class="caregiver-name">
                                <?php
                                    $htmb_cmb2_name_caregiver_testimonials = get_post_meta( get_the_ID(), 'htmb_cmb2_name_caregiver_testimonials', true );
                                    echo esc_html( $htmb_cmb2_name_caregiver_testimonials );
                                ?>
                            </span>
                            <span class="caregiver-charge">
                                <?php
                                    $htmb_cmb2_role_caregiver_testimonials = get_post_meta( get_the_ID(), 'htmb_cmb2_role_caregiver_testimonials', true );
                                    echo esc_html( $htmb_cmb2_role_caregiver_testimonials );
                                ?>
                            </span>
                        </div>
                    </div>
                </div>                    
            </div>
        </div>            
    </section>

    <div class="divider-wrapper">
        <div class="divider-b-p1"></div>        
    </div>  

    <section id="contact-section">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="contact-heading-box">
                        <h2 class="standard-title">
                            Contactanos
                        </h2>
                        <p class="standard-text">
                            Si tienes dudas, comentarios o crees que nuestro proyecto podría colaborar con tu organización no dudes en escribirnos.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <form id="home-contact">
                        <div class="mb-3">
                            <label for="contact-name" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="contact-name" placeholder="Tu nombre">
                        </div>
                        <div class="mb-3">
                            <label for="contact-mail" class="form-label">Correo electrónico</label>
                            <input type="email" class="form-control" id="contact-mail" placeholder="tucorreo@ejemplo.com">
                        </div>
                        <div class="mb-3">
                            <label for="contact-number" class="form-label">Telefono</label>
                            <input type="number" class="form-control" id="contact-number" placeholder="55-55-55-55-55">
                        </div>
                        <div class="mb-3">
                            <label for="contact-subject" class="form-label">Asunto</label>
                            <input type="text" class="form-control" id="contact-subject" placeholder="Asunto de tu mensaje">
                        </div>
                        <div class="mb-3">
                            <label for="contact-message" class="form-label">Mensaje</label>                        
                            <textarea rows="4" cols="50" class="form-control" name="message" form="home-contact">Tu mensaje...</textarea>
                        </div>
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </div>                            
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer();?>
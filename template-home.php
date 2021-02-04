<?php 
//Template Name: Pagina de inicio2
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
                            <?php $value = rwmb_meta( 'hmtp_mbtitle_about' );
                            echo $value;?>
                        </h2>
                        <p class="hero-text">
                            <?php $value = rwmb_meta( 'hmtp_mbtextarea_about' );
                            echo $value;?>
                        </p>
                    </div>                        
                </div>
                <div class="col-12 col-lg-6 ">
                    <div class="hero-video-box embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item hero-video" src="<?php $url = rwmb_get_value( 'hmtp_mbvideo_about' ); echo $url; ?>" allowfullscreen></iframe>
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
                            <?php $value = rwmb_meta( 'hmtp_mbtitle_caregivers' );
                            echo $value;?>
                        </h2>
                        <div class="separator-icon-box">
                            <img class="separator-icon" src="<?php bloginfo('template_url'); ?>/assets/icons/heartbeat.svg">
                        </div>
                        <p class="standard-text">
                            <?php $value = rwmb_meta( 'hmtp_mbtextarea_caregivers' );
                            echo $value;?>
                        </p>
                    </div>                        
                </div>
            </div>
            <div class="about-row row align-items-center justify-content-center">
                <div class="col-12 col-md-8 col-lg-6">
                    <div class="about-text-box">
                        <h3 class="box-title">
                            <?php $value = rwmb_meta( 'hmtp_mbtitle_card1_caregivers' );
                            echo $value;?>
                        </h3>
                        <p class="box-text">
                            <?php $value = rwmb_meta( 'hmtp_mbtextarea_card1_caregivers' );
                            echo $value;?>
                        </p>
                    </div>                        
                </div>
                <div class="col-12 col-md-4 col-lg-6">
                    <figure class="about-image-box">
                        <?php $images = rwmb_meta( 'hmtp_mbimage_card1_caregivers', array( 
                            'limit' => 1,
                            'size' => 'full-size',
                            ) );
                        $image = reset( $images );?>
                        <img class="about-image" src="<?php echo $image['url']; ?>">
                    </figure>
                </div>                    
            </div>
            <div class="about-row row align-items-center justify-content-center">
                <div class="col-12 col-md-4 col-lg-6 order-2 order-md-1">
                    <figure class="about-image-box">
                        <?php $images = rwmb_meta( 'hmtp_mbimage_card2_caregivers', array( 
                            'limit' => 1,
                            'size' => 'full-size',
                            ) );
                        $image = reset( $images );?>
                        <img class="about-image" src="<?php echo $image['url']; ?>">
                    </figure>
                </div>
                <div class="col-12 col-md-8 col-lg-6 order-1 order-md-2">
                    <div class="about-text-box">
                        <h3 class="box-title">
                            <?php $value = rwmb_meta( 'hmtp_mbtitle_card2_caregivers' );
                            echo $value;?>
                        </h3>
                        <p class="box-text">
                            <?php $value = rwmb_meta( 'hmtp_mbtextarea_card2_caregivers' );
                            echo $value;?>
                        </p>
                    </div>
                </div>                    
            </div>                
            <div class="about-row row align-items-center justify-content-center">
                <div class="col-12 col-md-8 col-lg-6">
                    <div class="about-text-box">
                        <h3 class="box-title">
                            <?php $value = rwmb_meta( 'hmtp_mbtitle_card3_caregivers' );
                            echo $value;?>
                        </h3>
                        <p class="box-text">
                            <?php $value = rwmb_meta( 'hmtp_mbtextarea_card3_caregivers' );
                            echo $value;?>
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-6">
                    <figure class="about-image-box">
                        <?php $images = rwmb_meta( 'hmtp_mbimage_card3_caregivers', array( 
                            'limit' => 1,
                            'size' => 'full-size',
                            ) );
                        $image = reset( $images );?>
                        <img class="about-image" src="<?php echo $image['url']; ?>">
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
                                <img class="home-cta-icon" src="assets/icons/heartbeat-opacity.svg">
                            </figure>
                        </div>
                        <div class="col-9">
                            <div class="home-cta-text-box">
                                <span class="home-cta-slogan">
                                    Cuidamos de los que cuidan de otros
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
                                Nuestra forma de trabajar
                            </h2>
                            <div class="separator-icon-box">
                                <img class="separator-icon" src="assets/icons/heartbeat.svg">
                            </div>
                            <figure class="methodology-image-box">
                                <img class="methodology-image" src="assets/img/team.jpg">
                            </figure>
                        </div>
                    </div>                    
                    <div class="col-12 col-lg-4 order-2 order-md-3 order-lg-2">
                        <div class="row methodology-nesting-row">
                            <div class="col-12 col-md-6 col-lg-12">
                                <div class="methodology-text-box">
                                    <figure class="methodology-icon-box">
                                        <img class="methodology-icon" src="assets/icons/presentation.svg">
                                    </figure>
                                    <h3 class="box-title">
                                        Los talleres
                                    </h3>
                                    <p class="box-text">
                                        Hemos diseñado una serie de talleres divididos en 5 módulos temáticos: sueño, alimentación, nutrición, estrés y emociones.
            
                                        Los talleres que impartimos son una experiencia teórico-práctica en la que combinamos información relevante, sensibilización y entrenamiento de habilidades específicas.
                                    </p>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-12">
                                <div class="methodology-text-box">
                                    <figure class="methodology-icon-box">
                                        <img class="methodology-icon" src="assets/icons/calendar.svg">
                                    </figure>
                                    <h3 class="box-title">
                                        Los efectos
                                    </h3>
                                    <p class="box-text">
                                        En los talleres pretendemos brindar acompañamiento y un ambiente emocional necesario para que los cuidadores vivan una experiencia que les permita desarrollar resiliencia y asimilar las herramientas proporcionadas en su dia a dia.
            
                                        Para ello utilizamos los últimos avances científicos, principalmente teorías de la Psicología Social y las mejores técnicas en el procesamiento de datos
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 order-3 order-md-2 order-lg-3">
                        <div class="methodology-text-box">
                            <figure class="methodology-icon-box">
                                <img class="methodology-icon" src="assets/icons/stethoscope.svg">
                            </figure>
                            <h3 class="box-title">
                                El momento ideal
                            </h3>
                            <p class="box-text">
                                Usualmente los cuidadores son quienes acompañan al paciente a sus consultas de seguimiento y, mientras ellos esperan largo tiempo, nosotros vemos una buena ocasión para implementar nuestros talleres como una forma de medicina preventiva, de la mano de los hospitales que nos abren sus puertas.                        
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
                                Nuestros objetivos
                            </h2>
                            <div class="separator-icon-box">
                                <img class="separator-icon" src="assets/icons/heartbeat.svg">
                            </div>
                            <p class="standard-text">                        
                            Nuestro proyecto evoluciona constantemente, es por ello que tenemos una ambiciosa lista de objetivos. Esta lista la actualizamos continuamente, ya sea agregando nuevas metas o marcando con entusiasmo las que ya hemos completado. En este sentido, las más recientes son:
                            </p>
                        </div>
                    </div>                    
                </div>
                <div class="row objectives-row align-items-start justify-content-center">
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="objectives-box">
                            <figure class="objectives-icon-box">
                                <img class="objectives-icon" src="assets/icons/analysis.svg">
                            </figure>
                            <h3 class="box-title">
                                Consolidar un modelo
                            </h3>
                            <p class="box-text">
                                Pretendemos que el modelo utilizado madure lo suficiente para ser replicable en cualquier hospital del país, sin importar quien lo aplique.
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="objectives-box">
                            <figure class="objectives-icon-box">
                                <img class="objectives-icon" src="assets/icons/smartphone.svg">
                            </figure>
                            <h3 class="box-title">
                                APP movil
                            </h3>
                            <p class="box-text">
                                Una de nuestras metas a corto plazo es desarrollar una aplicación para dispositivos móviles que sirva de acompañamiento a los cuidadores en su día a día, refuerce los aprendizajes y nos ayude a llevar un mejor seguimiento de sus casos.
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="objectives-box">
                            <figure class="objectives-icon-box">
                                <img class="objectives-icon" src="assets/icons/book.svg">
                            </figure>
                            <h3 class="box-title">
                                Articulo cientifico
                            </h3>
                            <p class="box-text">
                                Tenemos amor y compromiso con la ciencia, es por ello que, con la investigación que hacemos de nuestro modelo, queremos publicar un amplio articulo para divulgar nuestros hallazgos y contribuir al avance de la ciencia.
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
                                Nuestro equipo
                            </h2>
                            <div class="separator-icon-box">
                                <img class="separator-icon" src="assets/icons/heartbeat.svg">
                            </div>
                            <p class="standard-text">
                                Tenemos un increíble equipo de personas llenas de talento, compromiso y con un corazón enorme, pero sobre todo, que creen en lo que estamos haciendo.
                            </p>
                        </div>
                    </div>                                    
                </div>
                <div class="row">
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                        <div class="team-member-box">
                            <figure class="team-photo-box">
                                <img class="team-photo rounded-circle" src="assets/img/member-team.jpg">
                            </figure>
                            <span class="member-name">
                                Osvaldo Mora
                            </span>
                            <span class="member-charge">
                                Cordinador
                            </span>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                        <div class="team-member-box">
                            <figure class="team-photo-box">
                                <img class="team-photo rounded-circle" src="assets/img/member-team.jpg">
                            </figure>
                            <span class="member-name">
                                Osvaldo Mora
                            </span>
                            <span class="member-charge">
                                Cordinador
                            </span>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                        <div class="team-member-box">
                            <figure class="team-photo-box">
                                <img class="team-photo rounded-circle" src="assets/img/member-team.jpg">
                            </figure>
                            <span class="member-name">
                                Osvaldo Mora
                            </span>
                            <span class="member-charge">
                                Cordinador
                            </span>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                        <div class="team-member-box">
                            <figure class="team-photo-box">
                                <img class="team-photo rounded-circle" src="assets/img/member-team.jpg">
                            </figure>
                            <span class="member-name">
                                Osvaldo Mora
                            </span>
                            <span class="member-charge">
                                Cordinador
                            </span>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                        <div class="team-member-box">
                            <figure class="team-photo-box">
                                <img class="team-photo rounded-circle" src="assets/img/member-team.jpg">
                            </figure>
                            <span class="member-name">
                                Osvaldo Mora
                            </span>
                            <span class="member-charge">
                                Cordinador
                            </span>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                        <div class="team-member-box">
                            <figure class="team-photo-box">
                                <img class="team-photo rounded-circle" src="assets/img/member-team.jpg">
                            </figure>
                            <span class="member-name">
                                Osvaldo Mora
                            </span>
                            <span class="member-charge">
                                Cordinador
                            </span>
                        </div>
                    </div>
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
                        <div class="objectives-heading-box">
                            <h2 class="standard-title">
                                Comentarios de los cuidadores
                            </h2>
                            <div class="separator-icon-box">
                                <img class="separator-icon" src="assets/icons/heartbeat.svg">
                            </div>
                        </div>
                    </div>                    
                </div>
                <div class="row align-items-center justify-content-center">
                    <div class="col">
                        <div class="testimonial-bubble-text">
                            <p>
                                "... porque si tu no eres positivo, si no eres fuerte, si no te cuidas a ti mismo, no vas a poder cuidar a alguien."
                            </p>
                        </div>
                    </div>                    
                </div>
                <div class="row align-items-center justify-content-center">
                    <div class="col">
                        <div class="caregiver-details d-flex justify-content-center align-items-center">
                            <div class="caregiver-photo-box">
                                <img class="caregiver-photo rounded-circle" src="assets/img/caregiver.jpg">
                            </div>
                            <div class="caregiver-text-box">
                                <span class="caregiver-name">
                                    Miguel Mendoza
                                </span>
                                <span class="caregiver-charge">
                                   Cuidador
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

</main>
<?php get_footer();?>
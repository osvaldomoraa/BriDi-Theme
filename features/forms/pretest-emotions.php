<?php

function pre_emt_form(){
  if( !is_user_logged_in() ) return '<p>' . __( 'Para hacer este cuestionario debes <a href="' . get_site_url() . '/wp-login.php">iniciar sesion</a>', 'preemt' ) . '</p>';

  ob_start();

  do_action( 'pre_emt_alerts' ); ?>

  <div class="shortcode-form-wrapper">
    <form id="pre-emt-measurement-form" class="shortcode-form" action="" method="post">
      <div class="shortcode-form-section">
        <span class="shortcode-form-title">
            Emociones
        </span>
        <p class="shortcode-form-instructions">
            A continuación se presentan enunciados de situaciones o características físicas que pudiste haber sentido o hecho constantemente durante el confinamiento. Recuerda que dependemos de la precisión de tus respuestas para conocer tu estado actual. 
        </p>
        <div class="shortcode-form-scale-item">
          <p class="shortcode-form-scale-item-label">Sudo más de lo habitual</p>
          <div class="shortcode-form-scale-item-options-wrapper d-flex justify-content-around">
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-1-opt-1" name="pre-emt-item-1" value="1" required>
              <label for="pre-emt-item-1-opt-1">Nunca</label><br>          
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-1-opt-2" name="pre-emt-item-1" value="2">
              <label for="pre-emt-item-1-opt-2">Pocas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-1-opt-3" name="pre-emt-item-1" value="3">
              <label for="pre-emt-item-1-opt-3">Algunas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-1-opt-4" name="pre-emt-item-1" value="4">
              <label for="pre-emt-item-1-opt-4">Muchas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-1-opt-5" name="pre-emt-item-1" value="5">
              <label for="pre-emt-item-1-opt-5">Siempre</label>            
            </div>                  
          </div>        
        </div>
        <hr>
        <div class="shortcode-form-scale-item">
          <p class="shortcode-form-scale-item-label">Al despertar tengo la boca seca</p>
          <div class="shortcode-form-scale-item-options-wrapper d-flex justify-content-around">
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-2-opt-1" name="pre-emt-item-2" value="1" required>
              <label for="pre-emt-item-2-opt-1">Nunca</label><br>          
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-2-opt-2" name="pre-emt-item-2" value="2">
              <label for="pre-emt-item-2-opt-2">Pocas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-2-opt-3" name="pre-emt-item-2" value="3">
              <label for="pre-emt-item-2-opt-3">Algunas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-2-opt-4" name="pre-emt-item-2" value="4">
              <label for="pre-emt-item-2-opt-4">Muchas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-2-opt-5" name="pre-emt-item-2" value="5">
              <label for="pre-emt-item-2-opt-5">Siempre</label>            
            </div>                  
          </div>        
        </div>
        <hr>
        <div class="shortcode-form-scale-item">
          <p class="shortcode-form-scale-item-label">He tenido dolores frecuentes de cabeza</p>
          <div class="shortcode-form-scale-item-options-wrapper d-flex justify-content-around">
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-3-opt-1" name="pre-emt-item-3" value="1" required>
              <label for="pre-emt-item-3-opt-1">Nunca</label><br>          
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-3-opt-2" name="pre-emt-item-3" value="2">
              <label for="pre-emt-item-3-opt-2">Pocas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-3-opt-3" name="pre-emt-item-3" value="3">
              <label for="pre-emt-item-3-opt-3">Algunas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-3-opt-4" name="pre-emt-item-3" value="4">
              <label for="pre-emt-item-3-opt-4">Muchas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-3-opt-5" name="pre-emt-item-3" value="5">
              <label for="pre-emt-item-3-opt-5">Siempre</label>            
            </div>                  
          </div>        
        </div>
        <hr>
        <div class="shortcode-form-scale-item">
          <p class="shortcode-form-scale-item-label">Tengo más gases de lo normal</p>
          <div class="shortcode-form-scale-item-options-wrapper d-flex justify-content-around">
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-4-opt-1" name="pre-emt-item-4" value="1" required>
              <label for="pre-emt-item-4-opt-1">Nunca</label><br>          
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-4-opt-2" name="pre-emt-item-4" value="2">
              <label for="pre-emt-item-4-opt-2">Pocas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-4-opt-3" name="pre-emt-item-4" value="3">
              <label for="pre-emt-item-4-opt-3">Algunas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-4-opt-4" name="pre-emt-item-4" value="4">
              <label for="pre-emt-item-4-opt-4">Muchas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-4-opt-5" name="pre-emt-item-4" value="5">
              <label for="pre-emt-item-4-opt-5">Siempre</label>            
            </div>                  
          </div>        
        </div>
        <hr>
        <div class="shortcode-form-scale-item">
          <p class="shortcode-form-scale-item-label">Al comer se me dificulta pasar el bocado</p>
          <div class="shortcode-form-scale-item-options-wrapper d-flex justify-content-around">
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-5-opt-1" name="pre-emt-item-5" value="1" required>
              <label for="pre-emt-item-5-opt-1">Nunca</label><br>          
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-5-opt-2" name="pre-emt-item-5" value="2">
              <label for="pre-emt-item-5-opt-2">Pocas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-5-opt-3" name="pre-emt-item-5" value="3">
              <label for="pre-emt-item-5-opt-3">Algunas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-5-opt-4" name="pre-emt-item-5" value="4">
              <label for="pre-emt-item-5-opt-4">Muchas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-5-opt-5" name="pre-emt-item-5" value="5">
              <label for="pre-emt-item-5-opt-5">Siempre</label>            
            </div>                  
          </div>        
        </div>
        <hr>
        <div class="shortcode-form-scale-item">
          <p class="shortcode-form-scale-item-label">He tenido taquicardia</p>
          <div class="shortcode-form-scale-item-options-wrapper d-flex justify-content-around">
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-6-opt-1" name="pre-emt-item-6" value="1" required>
              <label for="pre-emt-item-6-opt-1">Nunca</label><br>          
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-6-opt-2" name="pre-emt-item-6" value="2">
              <label for="pre-emt-item-6-opt-2">Pocas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-6-opt-3" name="pre-emt-item-6" value="3">
              <label for="pre-emt-item-6-opt-3">Algunas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-6-opt-4" name="pre-emt-item-6" value="4">
              <label for="pre-emt-item-6-opt-4">Muchas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-6-opt-5" name="pre-emt-item-6" value="5">
              <label for="pre-emt-item-6-opt-5">Siempre</label>            
            </div>                  
          </div>        
        </div>
        <hr>
        <div class="shortcode-form-scale-item">
          <p class="shortcode-form-scale-item-label">He sentido como si me faltara el aire</p>
          <div class="shortcode-form-scale-item-options-wrapper d-flex justify-content-around">
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-7-opt-1" name="pre-emt-item-7" value="1" required>
              <label for="pre-emt-item-7-opt-1">Nunca</label><br>          
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-7-opt-2" name="pre-emt-item-7" value="2">
              <label for="pre-emt-item-7-opt-2">Pocas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-7-opt-3" name="pre-emt-item-7" value="3">
              <label for="pre-emt-item-7-opt-3">Algunas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-7-opt-4" name="pre-emt-item-7" value="4">
              <label for="pre-emt-item-7-opt-4">Muchas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-7-opt-5" name="pre-emt-item-7" value="5">
              <label for="pre-emt-item-7-opt-5">Siempre</label>            
            </div>                  
          </div>        
        </div>
        <hr>
        <div class="shortcode-form-scale-item">
          <p class="shortcode-form-scale-item-label">He perdido peso (sin observación especializada)</p>
          <div class="shortcode-form-scale-item-options-wrapper d-flex justify-content-around">
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-8-opt-1" name="pre-emt-item-8" value="1" required>
              <label for="pre-emt-item-8-opt-1">Nunca</label><br>          
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-8-opt-2" name="pre-emt-item-8" value="2">
              <label for="pre-emt-item-8-opt-2">Pocas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-8-opt-3" name="pre-emt-item-8" value="3">
              <label for="pre-emt-item-8-opt-3">Algunas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-8-opt-4" name="pre-emt-item-8" value="4">
              <label for="pre-emt-item-8-opt-4">Muchas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-8-opt-5" name="pre-emt-item-8" value="5">
              <label for="pre-emt-item-8-opt-5">Siempre</label>            
            </div>                  
          </div>        
        </div>
        <hr>
        <div class="shortcode-form-scale-item">
          <p class="shortcode-form-scale-item-label">He padecido estreñimiento</p>
          <div class="shortcode-form-scale-item-options-wrapper d-flex justify-content-around">
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-9-opt-1" name="pre-emt-item-9" value="1" required>
              <label for="pre-emt-item-9-opt-1">Nunca</label><br>          
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-9-opt-2" name="pre-emt-item-9" value="2">
              <label for="pre-emt-item-9-opt-2">Pocas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-9-opt-3" name="pre-emt-item-9" value="3">
              <label for="pre-emt-item-9-opt-3">Algunas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-9-opt-4" name="pre-emt-item-9" value="4">
              <label for="pre-emt-item-9-opt-4">Muchas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-9-opt-5" name="pre-emt-item-9" value="5">
              <label for="pre-emt-item-9-opt-5">Siempre</label>            
            </div>                  
          </div>        
        </div>
        <hr>
        <div class="shortcode-form-scale-item">
          <p class="shortcode-form-scale-item-label">He tenido sensación de estómago vacío</p>
          <div class="shortcode-form-scale-item-options-wrapper d-flex justify-content-around">
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-10-opt-1" name="pre-emt-item-10" value="1" required>
              <label for="pre-emt-item-10-opt-1">Nunca</label><br>          
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-10-opt-2" name="pre-emt-item-10" value="2">
              <label for="pre-emt-item-10-opt-2">Pocas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-10-opt-3" name="pre-emt-item-10" value="3">
              <label for="pre-emt-item-10-opt-3">Algunas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-10-opt-4" name="pre-emt-item-10" value="4">
              <label for="pre-emt-item-10-opt-4">Muchas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-10-opt-5" name="pre-emt-item-10" value="5">
              <label for="pre-emt-item-10-opt-5">Siempre</label>            
            </div>                  
          </div>        
        </div>
        <hr>
        <div class="shortcode-form-scale-item">
          <p class="shortcode-form-scale-item-label">Tengo dificultad para conciliar el sueño</p>
          <div class="shortcode-form-scale-item-options-wrapper d-flex justify-content-around">
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-11-opt-1" name="pre-emt-item-11" value="1" required>
              <label for="pre-emt-item-11-opt-1">Nunca</label><br>          
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-11-opt-2" name="pre-emt-item-11" value="2">
              <label for="pre-emt-item-11-opt-2">Pocas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-11-opt-3" name="pre-emt-item-11" value="3">
              <label for="pre-emt-item-11-opt-3">Algunas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-11-opt-4" name="pre-emt-item-11" value="4">
              <label for="pre-emt-item-11-opt-4">Muchas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-11-opt-5" name="pre-emt-item-11" value="5">
              <label for="pre-emt-item-11-opt-5">Siempre</label>            
            </div>                  
          </div>        
        </div>
        <hr>
        <div class="shortcode-form-scale-item">
          <p class="shortcode-form-scale-item-label">He tenido alguna contractura muscular</p>
          <div class="shortcode-form-scale-item-options-wrapper d-flex justify-content-around">
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-12-opt-1" name="pre-emt-item-12" value="1" required>
              <label for="pre-emt-item-12-opt-1">Nunca</label><br>          
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-12-opt-2" name="pre-emt-item-12" value="2">
              <label for="pre-emt-item-12-opt-2">Pocas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-12-opt-3" name="pre-emt-item-12" value="3">
              <label for="pre-emt-item-12-opt-3">Algunas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-12-opt-4" name="pre-emt-item-12" value="4">
              <label for="pre-emt-item-12-opt-4">Muchas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-12-opt-5" name="pre-emt-item-12" value="5">
              <label for="pre-emt-item-12-opt-5">Siempre</label>            
            </div>                  
          </div>        
        </div>
        <hr>
        <div class="shortcode-form-scale-item">
          <p class="shortcode-form-scale-item-label">Me es difícil quedarme en un solo lugar, necesito estar en constante movimiento</p>
          <div class="shortcode-form-scale-item-options-wrapper d-flex justify-content-around">
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-13-opt-1" name="pre-emt-item-13" value="1" required>
              <label for="pre-emt-item-13-opt-1">Nunca</label><br>          
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-13-opt-2" name="pre-emt-item-13" value="2">
              <label for="pre-emt-item-13-opt-2">Pocas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-13-opt-3" name="pre-emt-item-13" value="3">
              <label for="pre-emt-item-13-opt-3">Algunas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-13-opt-4" name="pre-emt-item-13" value="4">
              <label for="pre-emt-item-13-opt-4">Muchas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-13-opt-5" name="pre-emt-item-13" value="5">
              <label for="pre-emt-item-13-opt-5">Siempre</label>            
            </div>                  
          </div>        
        </div>
        <hr>
        <div class="shortcode-form-scale-item">
          <p class="shortcode-form-scale-item-label">Me como las uñas de las manos</p>
          <div class="shortcode-form-scale-item-options-wrapper d-flex justify-content-around">
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-14-opt-1" name="pre-emt-item-14" value="1" required>
              <label for="pre-emt-item-14-opt-1">Nunca</label><br>          
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-14-opt-2" name="pre-emt-item-14" value="2">
              <label for="pre-emt-item-14-opt-2">Pocas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-14-opt-3" name="pre-emt-item-14" value="3">
              <label for="pre-emt-item-14-opt-3">Algunas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-14-opt-4" name="pre-emt-item-14" value="4">
              <label for="pre-emt-item-14-opt-4">Muchas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-14-opt-5" name="pre-emt-item-14" value="5">
              <label for="pre-emt-item-14-opt-5">Siempre</label>            
            </div>                  
          </div>        
        </div>
        <hr>
        <div class="shortcode-form-scale-item">
          <p class="shortcode-form-scale-item-label">Realizo movimientos rítmicos con alguna parte de mi cuerpo (pies o manos)</p>
          <div class="shortcode-form-scale-item-options-wrapper d-flex justify-content-around">
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-15-opt-1" name="pre-emt-item-15" value="1" required>
              <label for="pre-emt-item-15-opt-1">Nunca</label><br>          
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-15-opt-2" name="pre-emt-item-15" value="2">
              <label for="pre-emt-item-15-opt-2">Pocas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-15-opt-3" name="pre-emt-item-15" value="3">
              <label for="pre-emt-item-15-opt-3">Algunas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-15-opt-4" name="pre-emt-item-15" value="4">
              <label for="pre-emt-item-15-opt-4">Muchas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-15-opt-5" name="pre-emt-item-15" value="5">
              <label for="pre-emt-item-15-opt-5">Siempre</label>            
            </div>                  
          </div>        
        </div>
        <hr>
        <div class="shortcode-form-scale-item">
          <p class="shortcode-form-scale-item-label">Lloro con facilidad</p>
          <div class="shortcode-form-scale-item-options-wrapper d-flex justify-content-around">
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-16-opt-1" name="pre-emt-item-16" value="1" required>
              <label for="pre-emt-item-16-opt-1">Nunca</label><br>          
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-16-opt-2" name="pre-emt-item-16" value="2">
              <label for="pre-emt-item-16-opt-2">Pocas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-16-opt-3" name="pre-emt-item-16" value="3">
              <label for="pre-emt-item-16-opt-3">Algunas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-16-opt-4" name="pre-emt-item-16" value="4">
              <label for="pre-emt-item-16-opt-4">Muchas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-16-opt-5" name="pre-emt-item-16" value="5">
              <label for="pre-emt-item-16-opt-5">Siempre</label>            
            </div>                  
          </div>        
        </div>
        <hr>
        <div class="shortcode-form-scale-item">
          <p class="shortcode-form-scale-item-label">Tengo comezón constantemente</p>
          <div class="shortcode-form-scale-item-options-wrapper d-flex justify-content-around">
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-17-opt-1" name="pre-emt-item-17" value="1" required>
              <label for="pre-emt-item-17-opt-1">Nunca</label><br>          
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-17-opt-2" name="pre-emt-item-17" value="2">
              <label for="pre-emt-item-17-opt-2">Pocas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-17-opt-3" name="pre-emt-item-17" value="3">
              <label for="pre-emt-item-17-opt-3">Algunas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-17-opt-4" name="pre-emt-item-17" value="4">
              <label for="pre-emt-item-17-opt-4">Muchas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-17-opt-5" name="pre-emt-item-17" value="5">
              <label for="pre-emt-item-17-opt-5">Siempre</label>            
            </div>                  
          </div>        
        </div>
        <hr>
        <div class="shortcode-form-scale-item">
          <p class="shortcode-form-scale-item-label">Me han dicho o me doy cuenta que de pronto mi cara es de enojo</p>
          <div class="shortcode-form-scale-item-options-wrapper d-flex justify-content-around">
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-18-opt-1" name="pre-emt-item-18" value="1" required>
              <label for="pre-emt-item-18-opt-1">Nunca</label><br>          
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-18-opt-2" name="pre-emt-item-18" value="2">
              <label for="pre-emt-item-18-opt-2">Pocas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-18-opt-3" name="pre-emt-item-18" value="3">
              <label for="pre-emt-item-18-opt-3">Algunas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-18-opt-4" name="pre-emt-item-18" value="4">
              <label for="pre-emt-item-18-opt-4">Muchas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-18-opt-5" name="pre-emt-item-18" value="5">
              <label for="pre-emt-item-18-opt-5">Siempre</label>            
            </div>                  
          </div>        
        </div>
        <hr>
        <div class="shortcode-form-scale-item">
          <p class="shortcode-form-scale-item-label">Tiendo a comprar o hacer alimentos no saludables (Ej. pizza, hamburguesas, papas, etcétera)</p>
          <div class="shortcode-form-scale-item-options-wrapper d-flex justify-content-around">
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-19-opt-1" name="pre-emt-item-19" value="1" required>
              <label for="pre-emt-item-19-opt-1">Nunca</label><br>          
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-19-opt-2" name="pre-emt-item-19" value="2">
              <label for="pre-emt-item-19-opt-2">Pocas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-19-opt-3" name="pre-emt-item-19" value="3">
              <label for="pre-emt-item-19-opt-3">Algunas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-19-opt-4" name="pre-emt-item-19" value="4">
              <label for="pre-emt-item-19-opt-4">Muchas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-19-opt-5" name="pre-emt-item-19" value="5">
              <label for="pre-emt-item-19-opt-5">Siempre</label>            
            </div>                  
          </div>        
        </div>
        <hr>
        <div class="shortcode-form-scale-item">
          <p class="shortcode-form-scale-item-label">Me doy cuenta o me han dicho que tengo cara de preocupación</p>
          <div class="shortcode-form-scale-item-options-wrapper d-flex justify-content-around">
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-20-opt-1" name="pre-emt-item-20" value="1" required>
              <label for="pre-emt-item-20-opt-1">Nunca</label><br>          
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-20-opt-2" name="pre-emt-item-20" value="2">
              <label for="pre-emt-item-20-opt-2">Pocas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-20-opt-3" name="pre-emt-item-20" value="3">
              <label for="pre-emt-item-20-opt-3">Algunas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-20-opt-4" name="pre-emt-item-20" value="4">
              <label for="pre-emt-item-20-opt-4">Muchas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-20-opt-5" name="pre-emt-item-20" value="5">
              <label for="pre-emt-item-20-opt-5">Siempre</label>            
            </div>                  
          </div>        
        </div>
        <hr>
        <div class="shortcode-form-scale-item">
          <p class="shortcode-form-scale-item-label">En estos días al sentirme preocupado/a, recurro al tabaco</p>
          <div class="shortcode-form-scale-item-options-wrapper d-flex justify-content-around">
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-21-opt-1" name="pre-emt-item-21" value="1" required>
              <label for="pre-emt-item-21-opt-1">Nunca</label><br>          
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-21-opt-2" name="pre-emt-item-21" value="2">
              <label for="pre-emt-item-21-opt-2">Pocas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-21-opt-3" name="pre-emt-item-21" value="3">
              <label for="pre-emt-item-21-opt-3">Algunas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-21-opt-4" name="pre-emt-item-21" value="4">
              <label for="pre-emt-item-21-opt-4">Muchas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-21-opt-5" name="pre-emt-item-21" value="5">
              <label for="pre-emt-item-21-opt-5">Siempre</label>            
            </div>                  
          </div>        
        </div>
        <hr>
        <div class="shortcode-form-scale-item">
          <p class="shortcode-form-scale-item-label">En estos días al sentirme preocupado/a, recurro al alcohol</p>
          <div class="shortcode-form-scale-item-options-wrapper d-flex justify-content-around">
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-22-opt-1" name="pre-emt-item-22" value="1" required>
              <label for="pre-emt-item-22-opt-1">Nunca</label><br>          
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-22-opt-2" name="pre-emt-item-22" value="2">
              <label for="pre-emt-item-22-opt-2">Pocas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-22-opt-3" name="pre-emt-item-22" value="3">
              <label for="pre-emt-item-22-opt-3">Algunas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-22-opt-4" name="pre-emt-item-22" value="4">
              <label for="pre-emt-item-22-opt-4">Muchas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-22-opt-5" name="pre-emt-item-22" value="5">
              <label for="pre-emt-item-22-opt-5">Siempre</label>            
            </div>                  
          </div>        
        </div>
        <hr>
        <div class="shortcode-form-scale-item">
          <p class="shortcode-form-scale-item-label">He sentido menor interés o placer en las cosas que disfruto hacer</p>
          <div class="shortcode-form-scale-item-options-wrapper d-flex justify-content-around">
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-23-opt-1" name="pre-emt-item-23" value="1" required>
              <label for="pre-emt-item-23-opt-1">Nada</label><br>          
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-23-opt-2" name="pre-emt-item-23" value="2">
              <label for="pre-emt-item-23-opt-2">Casi nada</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-23-opt-3" name="pre-emt-item-23" value="3">
              <label for="pre-emt-item-23-opt-3">Algo</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-23-opt-4" name="pre-emt-item-23" value="4">
              <label for="pre-emt-item-23-opt-4">Bastante</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-23-opt-5" name="pre-emt-item-23" value="5">
              <label for="pre-emt-item-23-opt-5">Demasiado</label>            
            </div>                  
          </div>        
        </div>
        <hr>
        <div class="shortcode-form-scale-item">
          <p class="shortcode-form-scale-item-label">Me he sentido sin esperanza o desanimado/a</p>
          <div class="shortcode-form-scale-item-options-wrapper d-flex justify-content-around">
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-24-opt-1" name="pre-emt-item-24" value="1" required>
              <label for="pre-emt-item-24-opt-1">Nada</label><br>          
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-24-opt-2" name="pre-emt-item-24" value="2">
              <label for="pre-emt-item-24-opt-2">Casi nada</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-24-opt-3" name="pre-emt-item-24" value="3">
              <label for="pre-emt-item-24-opt-3">Algo</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-24-opt-4" name="pre-emt-item-24" value="4">
              <label for="pre-emt-item-24-opt-4">Bastante</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-24-opt-5" name="pre-emt-item-24" value="5">
              <label for="pre-emt-item-24-opt-5">Demasiado</label>            
            </div>                  
          </div>        
        </div>
        <hr>
        <div class="shortcode-form-scale-item">
          <p class="shortcode-form-scale-item-label">Me es difícil concentrarme en mis deberes</p>
          <div class="shortcode-form-scale-item-options-wrapper d-flex justify-content-around">
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-25-opt-1" name="pre-emt-item-25" value="1" required>
              <label for="pre-emt-item-25-opt-1">Nada</label><br>          
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-25-opt-2" name="pre-emt-item-25" value="2">
              <label for="pre-emt-item-25-opt-2">Casi nada</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-25-opt-3" name="pre-emt-item-25" value="3">
              <label for="pre-emt-item-25-opt-3">Algo</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-25-opt-4" name="pre-emt-item-25" value="4">
              <label for="pre-emt-item-25-opt-4">Bastante</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-25-opt-5" name="pre-emt-item-25" value="5">
              <label for="pre-emt-item-25-opt-5">Demasiado</label>            
            </div>                  
          </div>        
        </div>
        <hr>
        <div class="shortcode-form-scale-item">
          <p class="shortcode-form-scale-item-label">Me ha sido difícil controlar mi preocupación frente a lo que sucederá con SARS-Cov2</p>
          <div class="shortcode-form-scale-item-options-wrapper d-flex justify-content-around">
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-26-opt-1" name="pre-emt-item-26" value="1" required>
              <label for="pre-emt-item-26-opt-1">Nada</label><br>          
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-26-opt-2" name="pre-emt-item-26" value="2">
              <label for="pre-emt-item-26-opt-2">Casi nada</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-26-opt-3" name="pre-emt-item-26" value="3">
              <label for="pre-emt-item-26-opt-3">Algo</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-26-opt-4" name="pre-emt-item-26" value="4">
              <label for="pre-emt-item-26-opt-4">Bastante</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-26-opt-5" name="pre-emt-item-26" value="5">
              <label for="pre-emt-item-26-opt-5">Demasiado</label>            
            </div>                  
          </div>        
        </div>
        <hr>
        <div class="shortcode-form-scale-item">
          <p class="shortcode-form-scale-item-label">Siento miedo cada vez que escucho, leo o me platican sobre lo que pasa por SARS-Cov2</p>
          <div class="shortcode-form-scale-item-options-wrapper d-flex justify-content-around">
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-27-opt-1" name="pre-emt-item-27" value="1" required>
              <label for="pre-emt-item-27-opt-1">Nada</label><br>          
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-27-opt-2" name="pre-emt-item-27" value="2">
              <label for="pre-emt-item-27-opt-2">Casi nada</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-27-opt-3" name="pre-emt-item-27" value="3">
              <label for="pre-emt-item-27-opt-3">Algo</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-27-opt-4" name="pre-emt-item-27" value="4">
              <label for="pre-emt-item-27-opt-4">Bastante</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-27-opt-5" name="pre-emt-item-27" value="5">
              <label for="pre-emt-item-27-opt-5">Demasiado</label>            
            </div>                  
          </div>        
        </div>
        <hr>
        <div class="shortcode-form-scale-item">
          <p class="shortcode-form-scale-item-label">Evito pensar o hablar acerca de SARS-Cov2</p>
          <div class="shortcode-form-scale-item-options-wrapper d-flex justify-content-around">
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-28-opt-1" name="pre-emt-item-28" value="1" required>
              <label for="pre-emt-item-28-opt-1">Nada</label><br>          
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-28-opt-2" name="pre-emt-item-28" value="2">
              <label for="pre-emt-item-28-opt-2">Casi nada</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-28-opt-3" name="pre-emt-item-28" value="3">
              <label for="pre-emt-item-28-opt-3">Algo</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-28-opt-4" name="pre-emt-item-28" value="4">
              <label for="pre-emt-item-28-opt-4">Bastante</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-28-opt-5" name="pre-emt-item-28" value="5">
              <label for="pre-emt-item-28-opt-5">Demasiado</label>            
            </div>                  
          </div>        
        </div>
        <hr>
        <div class="shortcode-form-scale-item">
          <p class="shortcode-form-scale-item-label">Me enojo fácilmente al ver a una persona sin cubre bocas</p>
          <div class="shortcode-form-scale-item-options-wrapper d-flex justify-content-around">
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-29-opt-1" name="pre-emt-item-29" value="1" required>
              <label for="pre-emt-item-29-opt-1">Nada</label><br>          
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-29-opt-2" name="pre-emt-item-29" value="2">
              <label for="pre-emt-item-29-opt-2">Casi nada</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-29-opt-3" name="pre-emt-item-29" value="3">
              <label for="pre-emt-item-29-opt-3">Algo</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-29-opt-4" name="pre-emt-item-29" value="4">
              <label for="pre-emt-item-29-opt-4">Bastante</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-29-opt-5" name="pre-emt-item-29" value="5">
              <label for="pre-emt-item-29-opt-5">Demasiado</label>            
            </div>                  
          </div>        
        </div>
        <hr>
        <div class="shortcode-form-scale-item">
          <p class="shortcode-form-scale-item-label">Pienso constantemente en cómo serán las cosas después de SARS-Cov2</p>
          <div class="shortcode-form-scale-item-options-wrapper d-flex justify-content-around">
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-30-opt-1" name="pre-emt-item-30" value="1" required>
              <label for="pre-emt-item-30-opt-1">Nada</label><br>          
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-30-opt-2" name="pre-emt-item-30" value="2">
              <label for="pre-emt-item-30-opt-2">Casi nada</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-30-opt-3" name="pre-emt-item-30" value="3">
              <label for="pre-emt-item-30-opt-3">Algo</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-30-opt-4" name="pre-emt-item-30" value="4">
              <label for="pre-emt-item-30-opt-4">Bastante</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-30-opt-5" name="pre-emt-item-30" value="5">
              <label for="pre-emt-item-30-opt-5">Demasiado</label>            
            </div>                  
          </div>        
        </div>
        <hr>
        <div class="shortcode-form-scale-item">
          <p class="shortcode-form-scale-item-label">Olvido constantemente en donde dejo los objetos o actividades que estaba por realizar</p>
          <div class="shortcode-form-scale-item-options-wrapper d-flex justify-content-around">
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-31-opt-1" name="pre-emt-item-31" value="1" required>
              <label for="pre-emt-item-31-opt-1">Nunca</label><br>          
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-31-opt-2" name="pre-emt-item-31" value="2">
              <label for="pre-emt-item-31-opt-2">Pocas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-31-opt-3" name="pre-emt-item-31" value="3">
              <label for="pre-emt-item-31-opt-3">Algunas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-31-opt-4" name="pre-emt-item-31" value="4">
              <label for="pre-emt-item-31-opt-4">Muchas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-31-opt-5" name="pre-emt-item-31" value="5">
              <label for="pre-emt-item-31-opt-5">Siempre</label>            
            </div>                  
          </div>        
        </div>
        <hr>
        <div class="shortcode-form-scale-item">
          <p class="shortcode-form-scale-item-label">Me es complicado organizar mis actividades</p>
          <div class="shortcode-form-scale-item-options-wrapper d-flex justify-content-around">
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-32-opt-1" name="pre-emt-item-32" value="1" required>
              <label for="pre-emt-item-32-opt-1">Nunca</label><br>          
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-32-opt-2" name="pre-emt-item-32" value="2">
              <label for="pre-emt-item-32-opt-2">Pocas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-32-opt-3" name="pre-emt-item-32" value="3">
              <label for="pre-emt-item-32-opt-3">Algunas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-32-opt-4" name="pre-emt-item-32" value="4">
              <label for="pre-emt-item-32-opt-4">Muchas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-32-opt-5" name="pre-emt-item-32" value="5">
              <label for="pre-emt-item-32-opt-5">Siempre</label>            
            </div>                  
          </div>        
        </div>
        <hr>
        <div class="shortcode-form-scale-item">
          <p class="shortcode-form-scale-item-label">Me he alejado de mis amigos/as o familia</p>
          <div class="shortcode-form-scale-item-options-wrapper d-flex justify-content-around">
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-33-opt-1" name="pre-emt-item-33" value="1" required>
              <label for="pre-emt-item-33-opt-1">Nunca</label><br>          
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-33-opt-2" name="pre-emt-item-33" value="2">
              <label for="pre-emt-item-33-opt-2">Pocas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-33-opt-3" name="pre-emt-item-33" value="3">
              <label for="pre-emt-item-33-opt-3">Algunas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-33-opt-4" name="pre-emt-item-33" value="4">
              <label for="pre-emt-item-33-opt-4">Muchas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-33-opt-5" name="pre-emt-item-33" value="5">
              <label for="pre-emt-item-33-opt-5">Siempre</label>            
            </div>                  
          </div>        
        </div>
        <hr>
        <div class="shortcode-form-scale-item">
          <p class="shortcode-form-scale-item-label">Siento que debería ser más fuerte</p>
          <div class="shortcode-form-scale-item-options-wrapper d-flex justify-content-around">
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-34-opt-1" name="pre-emt-item-34" value="1" required>
              <label for="pre-emt-item-34-opt-1">Nunca</label><br>          
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-34-opt-2" name="pre-emt-item-34" value="2">
              <label for="pre-emt-item-34-opt-2">Pocas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-34-opt-3" name="pre-emt-item-34" value="3">
              <label for="pre-emt-item-34-opt-3">Algunas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-34-opt-4" name="pre-emt-item-34" value="4">
              <label for="pre-emt-item-34-opt-4">Muchas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-34-opt-5" name="pre-emt-item-34" value="5">
              <label for="pre-emt-item-34-opt-5">Siempre</label>            
            </div>                  
          </div>        
        </div>
      </div>
      <div class="shortcode-form-section">
        <span class="shortcode-form-title">
          Estrés General
        </span>
        <p class="shortcode-form-instructions">
          En esta sección queremos explorar la impresión que tienes de la situación actual de tu vida. Te pedimos que tus respuestas se refieran al último mes. No hay respuestas correctas o incorrectas, sólo dinos tu opinión personal. Por favor, responde a todas las preguntas sinceramente.
        </p>
        <p class="shortcode-form-scale-instructions">
          Indica cómo te has sentido en el último mes, ¿Con qué frecuencia...
        </p>
        <div class="shortcode-form-scale-item">
          <p class="shortcode-form-scale-item-label">He estado afectado por algo que ha ocurrido inesperadamente?</p>
          <div class="shortcode-form-scale-item-options-wrapper d-flex justify-content-around">
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-41-opt-1" name="pre-emt-item-41" value="1" required>
              <label for="pre-emt-item-41-opt-1">Nunca</label><br>          
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-41-opt-2" name="pre-emt-item-41" value="2">
              <label for="pre-emt-item-41-opt-2">Pocas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-41-opt-3" name="pre-emt-item-41" value="3">
              <label for="pre-emt-item-41-opt-3">Algunas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-41-opt-4" name="pre-emt-item-41" value="4">
              <label for="pre-emt-item-41-opt-4">Muchas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-41-opt-5" name="pre-emt-item-41" value="5">
              <label for="pre-emt-item-41-opt-5">Siempre</label>            
            </div>                  
          </div>        
        </div>
        <hr>
        <div class="shortcode-form-scale-item">
          <p class="shortcode-form-scale-item-label">Me he sentido incapaz de controlar las cosas importantes en mi vida?</p>
          <div class="shortcode-form-scale-item-options-wrapper d-flex justify-content-around">
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-42-opt-1" name="pre-emt-item-42" value="1" required>
              <label for="pre-emt-item-42-opt-1">Nunca</label><br>          
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-42-opt-2" name="pre-emt-item-42" value="2">
              <label for="pre-emt-item-42-opt-2">Pocas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-42-opt-3" name="pre-emt-item-42" value="3">
              <label for="pre-emt-item-42-opt-3">Algunas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-42-opt-4" name="pre-emt-item-42" value="4">
              <label for="pre-emt-item-42-opt-4">Muchas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-42-opt-5" name="pre-emt-item-42" value="5">
              <label for="pre-emt-item-42-opt-5">Siempre</label>            
            </div>                  
          </div>        
        </div>
        <hr>
        <div class="shortcode-form-scale-item">
          <p class="shortcode-form-scale-item-label">Me he sentido nervioso/a?</p>
          <div class="shortcode-form-scale-item-options-wrapper d-flex justify-content-around">
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-43-opt-1" name="pre-emt-item-43" value="1" required>
              <label for="pre-emt-item-43-opt-1">Nunca</label><br>          
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-43-opt-2" name="pre-emt-item-43" value="2">
              <label for="pre-emt-item-43-opt-2">Pocas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-43-opt-3" name="pre-emt-item-43" value="3">
              <label for="pre-emt-item-43-opt-3">Algunas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-43-opt-4" name="pre-emt-item-43" value="4">
              <label for="pre-emt-item-43-opt-4">Muchas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-43-opt-5" name="pre-emt-item-43" value="5">
              <label for="pre-emt-item-43-opt-5">Siempre</label>            
            </div>                  
          </div>        
        </div>
        <hr>
        <div class="shortcode-form-scale-item">
          <p class="shortcode-form-scale-item-label">He manejado con éxito los pequeños problemas irritantes de mi vida?</p>
          <div class="shortcode-form-scale-item-options-wrapper d-flex justify-content-around">
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-44-opt-1" name="pre-emt-item-44" value="1" required>
              <label for="pre-emt-item-44-opt-1">Nunca</label><br>          
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-44-opt-2" name="pre-emt-item-44" value="2">
              <label for="pre-emt-item-44-opt-2">Pocas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-44-opt-3" name="pre-emt-item-44" value="3">
              <label for="pre-emt-item-44-opt-3">Algunas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-44-opt-4" name="pre-emt-item-44" value="4">
              <label for="pre-emt-item-44-opt-4">Muchas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-44-opt-5" name="pre-emt-item-44" value="5">
              <label for="pre-emt-item-44-opt-5">Siempre</label>            
            </div>                  
          </div>        
        </div>
        <hr>
        <div class="shortcode-form-scale-item">
          <p class="shortcode-form-scale-item-label">He sentido que he afrontado efectivamente los cambios importantes que han estado ocurriendo en mi vida?</p>
          <div class="shortcode-form-scale-item-options-wrapper d-flex justify-content-around">
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-45-opt-1" name="pre-emt-item-45" value="1" required>
              <label for="pre-emt-item-45-opt-1">Nunca</label><br>          
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-45-opt-2" name="pre-emt-item-45" value="2">
              <label for="pre-emt-item-45-opt-2">Pocas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-45-opt-3" name="pre-emt-item-45" value="3">
              <label for="pre-emt-item-45-opt-3">Algunas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-45-opt-4" name="pre-emt-item-45" value="4">
              <label for="pre-emt-item-45-opt-4">Muchas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-45-opt-5" name="pre-emt-item-45" value="5">
              <label for="pre-emt-item-45-opt-5">Siempre</label>            
            </div>                  
          </div>        
        </div>
        <hr>
        <div class="shortcode-form-scale-item">
          <p class="shortcode-form-scale-item-label">He sentido confianza en poder manejar mis problemas personales?</p>
          <div class="shortcode-form-scale-item-options-wrapper d-flex justify-content-around">
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-46-opt-1" name="pre-emt-item-46" value="1" required>
              <label for="pre-emt-item-46-opt-1">Nunca</label><br>          
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-46-opt-2" name="pre-emt-item-46" value="2">
              <label for="pre-emt-item-46-opt-2">Pocas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-46-opt-3" name="pre-emt-item-46" value="3">
              <label for="pre-emt-item-46-opt-3">Algunas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-46-opt-4" name="pre-emt-item-46" value="4">
              <label for="pre-emt-item-46-opt-4">Muchas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-46-opt-5" name="pre-emt-item-46" value="5">
              <label for="pre-emt-item-46-opt-5">Siempre</label>            
            </div>                  
          </div>        
        </div>
        <hr>
        <div class="shortcode-form-scale-item">
          <p class="shortcode-form-scale-item-label">He sentido que las cosas van de la manera que quiero?</p>
          <div class="shortcode-form-scale-item-options-wrapper d-flex justify-content-around">
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-47-opt-1" name="pre-emt-item-47" value="1" required>
              <label for="pre-emt-item-47-opt-1">Nunca</label><br>          
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-47-opt-2" name="pre-emt-item-47" value="2">
              <label for="pre-emt-item-47-opt-2">Pocas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-47-opt-3" name="pre-emt-item-47" value="3">
              <label for="pre-emt-item-47-opt-3">Algunas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-47-opt-4" name="pre-emt-item-47" value="4">
              <label for="pre-emt-item-47-opt-4">Muchas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-47-opt-5" name="pre-emt-item-47" value="5">
              <label for="pre-emt-item-47-opt-5">Siempre</label>            
            </div>                  
          </div>        
        </div>
        <hr>
        <div class="shortcode-form-scale-item">
          <p class="shortcode-form-scale-item-label">He sido capaz de controlar las dificultades de mi vida?</p>
          <div class="shortcode-form-scale-item-options-wrapper d-flex justify-content-around">
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-48-opt-1" name="pre-emt-item-48" value="1" required>
              <label for="pre-emt-item-48-opt-1">Nunca</label><br>          
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-48-opt-2" name="pre-emt-item-48" value="2">
              <label for="pre-emt-item-48-opt-2">Pocas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-48-opt-3" name="pre-emt-item-48" value="3">
              <label for="pre-emt-item-48-opt-3">Algunas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-48-opt-4" name="pre-emt-item-48" value="4">
              <label for="pre-emt-item-48-opt-4">Muchas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-48-opt-5" name="pre-emt-item-48" value="5">
              <label for="pre-emt-item-48-opt-5">Siempre</label>            
            </div>                  
          </div>        
        </div>
        <hr>
        <div class="shortcode-form-scale-item">
          <p class="shortcode-form-scale-item-label">He sentido que tengo todo bajo control?</p>
          <div class="shortcode-form-scale-item-options-wrapper d-flex justify-content-around">
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-49-opt-1" name="pre-emt-item-49" value="1" required>
              <label for="pre-emt-item-49-opt-1">Nunca</label><br>          
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-49-opt-2" name="pre-emt-item-49" value="2">
              <label for="pre-emt-item-49-opt-2">Pocas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-49-opt-3" name="pre-emt-item-49" value="3">
              <label for="pre-emt-item-49-opt-3">Algunas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-49-opt-4" name="pre-emt-item-49" value="4">
              <label for="pre-emt-item-49-opt-4">Muchas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-49-opt-5" name="pre-emt-item-49" value="5">
              <label for="pre-emt-item-49-opt-5">Siempre</label>            
            </div>                  
          </div>        
        </div>
        <hr>
        <div class="shortcode-form-scale-item">
          <p class="shortcode-form-scale-item-label">Me he irritado por cosas que ocurrieron y que salieron de mi control?</p>
          <div class="shortcode-form-scale-item-options-wrapper d-flex justify-content-around">
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-50-opt-1" name="pre-emt-item-50" value="1" required>
              <label for="pre-emt-item-50-opt-1">Nunca</label><br>          
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-50-opt-2" name="pre-emt-item-50" value="2">
              <label for="pre-emt-item-50-opt-2">Pocas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-50-opt-3" name="pre-emt-item-50" value="3">
              <label for="pre-emt-item-50-opt-3">Algunas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-50-opt-4" name="pre-emt-item-50" value="4">
              <label for="pre-emt-item-50-opt-4">Muchas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-50-opt-5" name="pre-emt-item-50" value="5">
              <label for="pre-emt-item-50-opt-5">Siempre</label>            
            </div>                  
          </div>        
        </div>
        <hr>
        <div class="shortcode-form-scale-item">
          <p class="shortcode-form-scale-item-label">He repensado varias veces sobre las tareas que debo hacer?</p>
          <div class="shortcode-form-scale-item-options-wrapper d-flex justify-content-around">
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-51-opt-1" name="pre-emt-item-51" value="1" required>
              <label for="pre-emt-item-51-opt-1">Nunca</label><br>          
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-51-opt-2" name="pre-emt-item-51" value="2">
              <label for="pre-emt-item-51-opt-2">Pocas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-51-opt-3" name="pre-emt-item-51" value="3">
              <label for="pre-emt-item-51-opt-3">Algunas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-51-opt-4" name="pre-emt-item-51" value="4">
              <label for="pre-emt-item-51-opt-4">Muchas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-51-opt-5" name="pre-emt-item-51" value="5">
              <label for="pre-emt-item-51-opt-5">Siempre</label>            
            </div>                  
          </div>        
        </div>
        <hr>
        <div class="shortcode-form-scale-item">
          <p class="shortcode-form-scale-item-label">He podido controlar la manera en la que ocupo mi tiempo?</p>
          <div class="shortcode-form-scale-item-options-wrapper d-flex justify-content-around">
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-52-opt-1" name="pre-emt-item-52" value="1" required>
              <label for="pre-emt-item-52-opt-1">Nunca</label><br>          
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-52-opt-2" name="pre-emt-item-52" value="2">
              <label for="pre-emt-item-52-opt-2">Pocas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-52-opt-3" name="pre-emt-item-52" value="3">
              <label for="pre-emt-item-52-opt-3">Algunas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-52-opt-4" name="pre-emt-item-52" value="4">
              <label for="pre-emt-item-52-opt-4">Muchas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-52-opt-5" name="pre-emt-item-52" value="5">
              <label for="pre-emt-item-52-opt-5">Siempre</label>            
            </div>                  
          </div>        
        </div>
        <hr>
        <div class="shortcode-form-scale-item">
          <p class="shortcode-form-scale-item-label">Parece que los problemas se acumulan tanto que no puedo superarlos?</p>
          <div class="shortcode-form-scale-item-options-wrapper d-flex justify-content-around">
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-53-opt-1" name="pre-emt-item-53" value="1" required>
              <label for="pre-emt-item-53-opt-1">Nunca</label><br>          
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-53-opt-2" name="pre-emt-item-53" value="2">
              <label for="pre-emt-item-53-opt-2">Pocas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-53-opt-3" name="pre-emt-item-53" value="3">
              <label for="pre-emt-item-53-opt-3">Algunas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-53-opt-4" name="pre-emt-item-53" value="4">
              <label for="pre-emt-item-53-opt-4">Muchas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-53-opt-5" name="pre-emt-item-53" value="5">
              <label for="pre-emt-item-53-opt-5">Siempre</label>            
            </div>                  
          </div>        
        </div>
        <hr>
        <div class="shortcode-form-scale-item">
          <p class="shortcode-form-scale-item-label">He tenido la sensación de que nadie me ayuda con los problemas?</p>
          <div class="shortcode-form-scale-item-options-wrapper d-flex justify-content-around">
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-54-opt-1" name="pre-emt-item-54" value="1" required>
              <label for="pre-emt-item-54-opt-1">Nunca</label><br>          
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-54-opt-2" name="pre-emt-item-54" value="2">
              <label for="pre-emt-item-54-opt-2">Pocas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-54-opt-3" name="pre-emt-item-54" value="3">
              <label for="pre-emt-item-54-opt-3">Algunas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-54-opt-4" name="pre-emt-item-54" value="4">
              <label for="pre-emt-item-54-opt-4">Muchas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-54-opt-5" name="pre-emt-item-54" value="5">
              <label for="pre-emt-item-54-opt-5">Siempre</label>            
            </div>                  
          </div>        
        </div>
        <hr>
        <div class="shortcode-form-scale-item">
          <p class="shortcode-form-scale-item-label">Me he molestado con personas cercanas por su falta de apoyo?</p>
          <div class="shortcode-form-scale-item-options-wrapper d-flex justify-content-around">
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-55-opt-1" name="pre-emt-item-55" value="1" required>
              <label for="pre-emt-item-55-opt-1">Nunca</label><br>          
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-55-opt-2" name="pre-emt-item-55" value="2">
              <label for="pre-emt-item-55-opt-2">Pocas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-55-opt-3" name="pre-emt-item-55" value="3">
              <label for="pre-emt-item-55-opt-3">Algunas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-55-opt-4" name="pre-emt-item-55" value="4">
              <label for="pre-emt-item-55-opt-4">Muchas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-55-opt-5" name="pre-emt-item-55" value="5">
              <label for="pre-emt-item-55-opt-5">Siempre</label>            
            </div>                  
          </div>        
        </div>
        <hr>
        <div class="shortcode-form-scale-item">
          <p class="shortcode-form-scale-item-label">Te han dicho que quieres controlar todo y a todos?</p>
          <div class="shortcode-form-scale-item-options-wrapper d-flex justify-content-around">
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-56-opt-1" name="pre-emt-item-56" value="1" required>
              <label for="pre-emt-item-56-opt-1">Nunca</label><br>          
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-56-opt-2" name="pre-emt-item-56" value="2">
              <label for="pre-emt-item-56-opt-2">Pocas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-56-opt-3" name="pre-emt-item-56" value="3">
              <label for="pre-emt-item-56-opt-3">Algunas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-56-opt-4" name="pre-emt-item-56" value="4">
              <label for="pre-emt-item-56-opt-4">Muchas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-56-opt-5" name="pre-emt-item-56" value="5">
              <label for="pre-emt-item-56-opt-5">Siempre</label>            
            </div>                  
          </div>        
        </div>
      </div>
      <div class="shortcode-form-section">
        <span class="shortcode-form-title">
            Autoeficacia de manejo de situaciones vitales estresantes
        </span>
        <p class="shortcode-form-instructions">
            En esta sección queremos conocer tu percepción individual sobre lo que puedes hacer o no para cambiar tu problemática actual. No hay respuestas correctas o incorrectas. Responde cada pregunta.
        </p>
        <p class="shortcode-form-scale-instructions">
            Lee los siguientes enunciados y, del lado derecho, elige una opción de respuesta que más se ajuste a ti.
        </p>
        <div class="shortcode-form-scale-item">
          <p class="shortcode-form-scale-item-label">Soy capaz de encontrar formas para reducir la presión que estoy sintiendo ahora, aunque alguien se oponga</p>
          <div class="shortcode-form-scale-item-options-wrapper d-flex justify-content-around">
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-57-opt-1" name="pre-emt-item-57" value="1" required>
              <label for="pre-emt-item-57-opt-1">Totalmente falso</label><br>          
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-57-opt-2" name="pre-emt-item-57" value="2">
              <label for="pre-emt-item-57-opt-2">Falso</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-57-opt-3" name="pre-emt-item-57" value="3">
              <label for="pre-emt-item-57-opt-3">Incierto</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-57-opt-4" name="pre-emt-item-57" value="4">
              <label for="pre-emt-item-57-opt-4">Cierto</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-57-opt-5" name="pre-emt-item-57" value="5">
              <label for="pre-emt-item-57-opt-5">Totalmente cierto</label>            
            </div>                  
          </div>        
        </div>
        <hr>
        <div class="shortcode-form-scale-item">
          <p class="shortcode-form-scale-item-label">Tengo la capacidad de controlar el estrés aunque haya dificultades</p>
          <div class="shortcode-form-scale-item-options-wrapper d-flex justify-content-around">
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-58-opt-1" name="pre-emt-item-58" value="1" required>
              <label for="pre-emt-item-58-opt-1">Totalmente falso</label><br>          
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-58-opt-2" name="pre-emt-item-58" value="2">
              <label for="pre-emt-item-58-opt-2">Falso</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-58-opt-3" name="pre-emt-item-58" value="3">
              <label for="pre-emt-item-58-opt-3">Incierto</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-58-opt-4" name="pre-emt-item-58" value="4">
              <label for="pre-emt-item-58-opt-4">Cierto</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-58-opt-5" name="pre-emt-item-58" value="5">
              <label for="pre-emt-item-58-opt-5">Totalmente cierto</label>            
            </div>                  
          </div>        
        </div>
        <hr>
        <div class="shortcode-form-scale-item">
          <p class="shortcode-form-scale-item-label">Puedo manejar situaciones complicadas si me esfuerzo lo suficiente</p>
          <div class="shortcode-form-scale-item-options-wrapper d-flex justify-content-around">
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-59-opt-1" name="pre-emt-item-59" value="1" required>
              <label for="pre-emt-item-59-opt-1">Totalmente falso</label><br>          
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-59-opt-2" name="pre-emt-item-59" value="2">
              <label for="pre-emt-item-59-opt-2">Falso</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-59-opt-3" name="pre-emt-item-59" value="3">
              <label for="pre-emt-item-59-opt-3">Incierto</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-59-opt-4" name="pre-emt-item-59" value="4">
              <label for="pre-emt-item-59-opt-4">Cierto</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-59-opt-5" name="pre-emt-item-59" value="5">
              <label for="pre-emt-item-59-opt-5">Totalmente cierto</label>            
            </div>                  
          </div>        
        </div>
        <hr>
        <div class="shortcode-form-scale-item">
          <p class="shortcode-form-scale-item-label">Soy capaz de llevar con más tranquilidad la vida si pongo dedicación</p>
          <div class="shortcode-form-scale-item-options-wrapper d-flex justify-content-around">
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-60-opt-1" name="pre-emt-item-60" value="1" required>
              <label for="pre-emt-item-60-opt-1">Totalmente falso</label><br>          
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-60-opt-2" name="pre-emt-item-60" value="2">
              <label for="pre-emt-item-60-opt-2">Falso</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-60-opt-3" name="pre-emt-item-60" value="3">
              <label for="pre-emt-item-60-opt-3">Incierto</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-60-opt-4" name="pre-emt-item-60" value="4">
              <label for="pre-emt-item-60-opt-4">Cierto</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-60-opt-5" name="pre-emt-item-60" value="5">
              <label for="pre-emt-item-60-opt-5">Totalmente cierto</label>            
            </div>                  
          </div>        
        </div>
        <hr>
        <div class="shortcode-form-scale-item">
          <p class="shortcode-form-scale-item-label">Me es posible aprender a manejar lo que me provoca estrés excesivo</p>
          <div class="shortcode-form-scale-item-options-wrapper d-flex justify-content-around">
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-61-opt-1" name="pre-emt-item-61" value="1" required>
              <label for="pre-emt-item-61-opt-1">Totalmente falso</label><br>          
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-61-opt-2" name="pre-emt-item-61" value="2">
              <label for="pre-emt-item-61-opt-2">Falso</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-61-opt-3" name="pre-emt-item-61" value="3">
              <label for="pre-emt-item-61-opt-3">Incierto</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-61-opt-4" name="pre-emt-item-61" value="4">
              <label for="pre-emt-item-61-opt-4">Cierto</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-61-opt-5" name="pre-emt-item-61" value="5">
              <label for="pre-emt-item-61-opt-5">Totalmente cierto</label>            
            </div>                  
          </div>        
        </div>
        <hr>
        <div class="shortcode-form-scale-item">
          <p class="shortcode-form-scale-item-label">Puedo insistir y perseverar en la meta de manejar mejor el estrés</p>
          <div class="shortcode-form-scale-item-options-wrapper d-flex justify-content-around">
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-62-opt-1" name="pre-emt-item-62" value="1" required>
              <label for="pre-emt-item-62-opt-1">Totalmente falso</label><br>          
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-62-opt-2" name="pre-emt-item-62" value="2">
              <label for="pre-emt-item-62-opt-2">Falso</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-62-opt-3" name="pre-emt-item-62" value="3">
              <label for="pre-emt-item-62-opt-3">Incierto</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-62-opt-4" name="pre-emt-item-62" value="4">
              <label for="pre-emt-item-62-opt-4">Cierto</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-62-opt-5" name="pre-emt-item-62" value="5">
              <label for="pre-emt-item-62-opt-5">Totalmente cierto</label>            
            </div>                  
          </div>        
        </div>
        <hr>
        <div class="shortcode-form-scale-item">
          <p class="shortcode-form-scale-item-label">Confío en manejar mejor los acontecimientos inesperados o difíciles que se presenten</p>
          <div class="shortcode-form-scale-item-options-wrapper d-flex justify-content-around">
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-63-opt-1" name="pre-emt-item-63" value="1" required>
              <label for="pre-emt-item-63-opt-1">Totalmente falso</label><br>          
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-63-opt-2" name="pre-emt-item-63" value="2">
              <label for="pre-emt-item-63-opt-2">Falso</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-63-opt-3" name="pre-emt-item-63" value="3">
              <label for="pre-emt-item-63-opt-3">Incierto</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-63-opt-4" name="pre-emt-item-63" value="4">
              <label for="pre-emt-item-63-opt-4">Cierto</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-63-opt-5" name="pre-emt-item-63" value="5">
              <label for="pre-emt-item-63-opt-5">Totalmente cierto</label>            
            </div>                  
          </div>        
        </div>
        <hr>
        <div class="shortcode-form-scale-item">
          <p class="shortcode-form-scale-item-label">Al encontrarme en situaciones difíciles, puedo crear respuestas para salir de ellas</p>
          <div class="shortcode-form-scale-item-options-wrapper d-flex justify-content-around">
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-64-opt-1" name="pre-emt-item-64" value="1" required>
              <label for="pre-emt-item-64-opt-1">Totalmente falso</label><br>          
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-64-opt-2" name="pre-emt-item-64" value="2">
              <label for="pre-emt-item-64-opt-2">Falso</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-64-opt-3" name="pre-emt-item-64" value="3">
              <label for="pre-emt-item-64-opt-3">Incierto</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-64-opt-4" name="pre-emt-item-64" value="4">
              <label for="pre-emt-item-64-opt-4">Cierto</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-64-opt-5" name="pre-emt-item-64" value="5">
              <label for="pre-emt-item-64-opt-5">Totalmente cierto</label>            
            </div>                  
          </div>        
        </div>
        <hr>
        <div class="shortcode-form-scale-item">
          <p class="shortcode-form-scale-item-label">Al encarar dificultades, soy capaz de permanecer tranquilo/a y pensar</p>
          <div class="shortcode-form-scale-item-options-wrapper d-flex justify-content-around">
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-65-opt-1" name="pre-emt-item-65" value="1" required>
              <label for="pre-emt-item-65-opt-1">Totalmente falso</label><br>          
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-65-opt-2" name="pre-emt-item-65" value="2">
              <label for="pre-emt-item-65-opt-2">Falso</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-65-opt-3" name="pre-emt-item-65" value="3">
              <label for="pre-emt-item-65-opt-3">Incierto</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-65-opt-4" name="pre-emt-item-65" value="4">
              <label for="pre-emt-item-65-opt-4">Cierto</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-emt-item-65-opt-5" name="pre-emt-item-65" value="5">
              <label for="pre-emt-item-65-opt-5">Totalmente cierto</label>            
            </div>                  
          </div>        
        </div>
      </div>
      <?php wp_nonce_field( 'post_nonce_action', 'post_nonce_field' ); ?>
      <input type="submit" class="shortcode-form-button btn btn-primary btn-lg btn-block" value="<?php _e( 'Terminar', 'preemt' ); ?>">
    </form>
  </div>  
  <?php
  $output = ob_get_contents();
  ob_end_clean();
  return $output;
}

add_shortcode( 'pre_emt_shortcode', 'pre_emt_form');

function pre_emt_private_measurement(){
  if( isset( $_POST['post_nonce_field'] )
      && wp_verify_nonce( $_POST['post_nonce_field'], 'post_nonce_action')){

      global $current_user;
      $userId = $current_user->ID;

      $postTitle = "Pretest de estres y emociones de #" . $userId;

      $metaItem1 = $_POST['pre-emt-item-1'];
      $metaItem2 = $_POST['pre-emt-item-2'];
      $metaItem3 = $_POST['pre-emt-item-3'];
      $metaItem4 = $_POST['pre-emt-item-4'];
      $metaItem5 = $_POST['pre-emt-item-5'];
      $metaItem6 = $_POST['pre-emt-item-6'];
      $metaItem7 = $_POST['pre-emt-item-7'];
      $metaItem8 = $_POST['pre-emt-item-8'];
      $metaItem9 = $_POST['pre-emt-item-9'];
      $metaItem10 = $_POST['pre-emt-item-10'];
      $metaItem11 = $_POST['pre-emt-item-11'];
      $metaItem12 = $_POST['pre-emt-item-12'];
      $metaItem13 = $_POST['pre-emt-item-13'];
      $metaItem14 = $_POST['pre-emt-item-14'];
      $metaItem15 = $_POST['pre-emt-item-15'];
      $metaItem16 = $_POST['pre-emt-item-16'];
      $metaItem17 = $_POST['pre-emt-item-17'];
      $metaItem18 = $_POST['pre-emt-item-18'];
      $metaItem19 = $_POST['pre-emt-item-19'];
      $metaItem20 = $_POST['pre-emt-item-20'];
      $metaItem21 = $_POST['pre-emt-item-21'];
      $metaItem22 = $_POST['pre-emt-item-22'];
      $metaItem23 = $_POST['pre-emt-item-23'];
      $metaItem24 = $_POST['pre-emt-item-24'];
      $metaItem25 = $_POST['pre-emt-item-25'];
      $metaItem26 = $_POST['pre-emt-item-26'];
      $metaItem27 = $_POST['pre-emt-item-27'];
      $metaItem28 = $_POST['pre-emt-item-28'];
      $metaItem29 = $_POST['pre-emt-item-29'];
      $metaItem30 = $_POST['pre-emt-item-30'];
      $metaItem31 = $_POST['pre-emt-item-31'];
      $metaItem32 = $_POST['pre-emt-item-32'];
      $metaItem33 = $_POST['pre-emt-item-33'];
      $metaItem34 = $_POST['pre-emt-item-34'];

      $metaItem41 = $_POST['pre-emt-item-41'];
      $metaItem42 = $_POST['pre-emt-item-42'];
      $metaItem43 = $_POST['pre-emt-item-43'];
      $metaItem44 = $_POST['pre-emt-item-44'];
      $metaItem45 = $_POST['pre-emt-item-45'];
      $metaItem46 = $_POST['pre-emt-item-46'];
      $metaItem47 = $_POST['pre-emt-item-47'];
      $metaItem48 = $_POST['pre-emt-item-48'];
      $metaItem49 = $_POST['pre-emt-item-49'];
      $metaItem50 = $_POST['pre-emt-item-50'];
      $metaItem51 = $_POST['pre-emt-item-51'];
      $metaItem52 = $_POST['pre-emt-item-52'];
      $metaItem53 = $_POST['pre-emt-item-53'];
      $metaItem54 = $_POST['pre-emt-item-54'];
      $metaItem55 = $_POST['pre-emt-item-55'];
      $metaItem56 = $_POST['pre-emt-item-56'];
      $metaItem57 = $_POST['pre-emt-item-57'];
      $metaItem58 = $_POST['pre-emt-item-58'];
      $metaItem59 = $_POST['pre-emt-item-59'];
      $metaItem60 = $_POST['pre-emt-item-60'];
      $metaItem61 = $_POST['pre-emt-item-61'];
      $metaItem62 = $_POST['pre-emt-item-62'];
      $metaItem63 = $_POST['pre-emt-item-63'];
      $metaItem64 = $_POST['pre-emt-item-64'];
      $metaItem65 = $_POST['pre-emt-item-65'];

        $postId = wp_insert_post( array(
          'post_title' => $postTitle,
          'post_status' => 'private',
          'post_author' => $userId,
          'post_type' => 'medicion'
        ) );

        add_post_meta($postId, 'med_mb_item_1', $metaItem1, true);
        add_post_meta($postId, 'med_mb_item_2', $metaItem2, true);
        add_post_meta($postId, 'med_mb_item_3', $metaItem3, true);
        add_post_meta($postId, 'med_mb_item_4', $metaItem4, true);
        add_post_meta($postId, 'med_mb_item_5', $metaItem5, true);
        add_post_meta($postId, 'med_mb_item_6', $metaItem6, true);
        add_post_meta($postId, 'med_mb_item_7', $metaItem7, true);
        add_post_meta($postId, 'med_mb_item_8', $metaItem8, true);
        add_post_meta($postId, 'med_mb_item_9', $metaItem9, true);
        add_post_meta($postId, 'med_mb_item_10', $metaItem10, true);
        add_post_meta($postId, 'med_mb_item_11', $metaItem11, true);
        add_post_meta($postId, 'med_mb_item_12', $metaItem12, true);
        add_post_meta($postId, 'med_mb_item_13', $metaItem13, true);
        add_post_meta($postId, 'med_mb_item_14', $metaItem14, true);
        add_post_meta($postId, 'med_mb_item_15', $metaItem15, true);
        add_post_meta($postId, 'med_mb_item_16', $metaItem16, true);
        add_post_meta($postId, 'med_mb_item_17', $metaItem17, true);
        add_post_meta($postId, 'med_mb_item_18', $metaItem18, true);
        add_post_meta($postId, 'med_mb_item_19', $metaItem19, true);
        add_post_meta($postId, 'med_mb_item_20', $metaItem20, true);
        add_post_meta($postId, 'med_mb_item_21', $metaItem21, true);
        add_post_meta($postId, 'med_mb_item_22', $metaItem22, true);
        add_post_meta($postId, 'med_mb_item_23', $metaItem23, true);
        add_post_meta($postId, 'med_mb_item_24', $metaItem24, true);
        add_post_meta($postId, 'med_mb_item_25', $metaItem25, true);
        add_post_meta($postId, 'med_mb_item_26', $metaItem26, true);
        add_post_meta($postId, 'med_mb_item_27', $metaItem27, true);
        add_post_meta($postId, 'med_mb_item_28', $metaItem28, true);
        add_post_meta($postId, 'med_mb_item_29', $metaItem29, true);
        add_post_meta($postId, 'med_mb_item_30', $metaItem30, true);
        add_post_meta($postId, 'med_mb_item_31', $metaItem31, true);
        add_post_meta($postId, 'med_mb_item_32', $metaItem32, true);
        add_post_meta($postId, 'med_mb_item_33', $metaItem33, true);
        add_post_meta($postId, 'med_mb_item_34', $metaItem34, true);
        
        add_post_meta($postId, 'med_mb_item_41', $metaItem41, true);
        add_post_meta($postId, 'med_mb_item_42', $metaItem42, true);
        add_post_meta($postId, 'med_mb_item_43', $metaItem43, true);
        add_post_meta($postId, 'med_mb_item_44', $metaItem44, true);
        add_post_meta($postId, 'med_mb_item_45', $metaItem45, true);
        add_post_meta($postId, 'med_mb_item_46', $metaItem46, true);
        add_post_meta($postId, 'med_mb_item_47', $metaItem47, true);
        add_post_meta($postId, 'med_mb_item_48', $metaItem48, true);
        add_post_meta($postId, 'med_mb_item_49', $metaItem49, true);
        add_post_meta($postId, 'med_mb_item_50', $metaItem50, true);
        add_post_meta($postId, 'med_mb_item_51', $metaItem51, true);
        add_post_meta($postId, 'med_mb_item_52', $metaItem52, true);
        add_post_meta($postId, 'med_mb_item_53', $metaItem53, true);
        add_post_meta($postId, 'med_mb_item_54', $metaItem54, true);
        add_post_meta($postId, 'med_mb_item_55', $metaItem55, true);
        add_post_meta($postId, 'med_mb_item_56', $metaItem56, true);
        add_post_meta($postId, 'med_mb_item_57', $metaItem57, true);
        add_post_meta($postId, 'med_mb_item_58', $metaItem58, true);
        add_post_meta($postId, 'med_mb_item_59', $metaItem59, true);
        add_post_meta($postId, 'med_mb_item_60', $metaItem60, true);
        add_post_meta($postId, 'med_mb_item_61', $metaItem61, true);
        add_post_meta($postId, 'med_mb_item_62', $metaItem62, true);
        add_post_meta($postId, 'med_mb_item_63', $metaItem63, true);
        add_post_meta($postId, 'med_mb_item_64', $metaItem64, true);
        add_post_meta($postId, 'med_mb_item_65', $metaItem65, true);   
        add_action( 'pre_emt_alerts', 'pre_emt_form_success' );
  }

  update_user_meta( $userId, 'pretest_emt', 1 );

}
add_action( 'init', 'pre_emt_private_measurement');

function pre_emt_form_success(){
  echo '<p class="scv-alert success">' . __( 'Se ha registrado correctamente', 'preemt' ) . '</p>';
}
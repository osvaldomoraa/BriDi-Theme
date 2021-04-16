<?php

function pre_sts_form(){
  if( !is_user_logged_in() ) return '<p>' . __( 'Para hacer este cuestionario debes <a href="' . get_site_url() . '/wp-login.php">iniciar sesion</a>', 'prests' ) . '</p>';

  ob_start();

  do_action( 'pre_sts_alerts' ); ?>

  <div class="shortcode-form-wrapper">
    <form id="pre-sts-measurement-form" class="shortcode-form" action="" method="post">
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
              <input type="radio" id="pre-sts-item-1-opt-1" name="pre-sts-item-1" value="1" required>
              <label for="pre-sts-item-1-opt-1">Nunca</label><br>          
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-sts-item-1-opt-2" name="pre-sts-item-1" value="2">
              <label for="pre-sts-item-1-opt-2">Pocas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-sts-item-1-opt-3" name="pre-sts-item-1" value="3">
              <label for="pre-sts-item-1-opt-3">Algunas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-sts-item-1-opt-4" name="pre-sts-item-1" value="4">
              <label for="pre-sts-item-1-opt-4">Muchas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-sts-item-1-opt-5" name="pre-sts-item-1" value="5">
              <label for="pre-sts-item-1-opt-5">Siempre</label>            
            </div>                  
          </div>        
        </div>
        <hr>
        <div class="shortcode-form-scale-item">
          <p class="shortcode-form-scale-item-label">Me he sentido incapaz de controlar las cosas importantes en mi vida?</p>
          <div class="shortcode-form-scale-item-options-wrapper d-flex justify-content-around">
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-sts-item-2-opt-1" name="pre-sts-item-2" value="1" required>
              <label for="pre-sts-item-2-opt-1">Nunca</label><br>          
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-sts-item-2-opt-2" name="pre-sts-item-2" value="2">
              <label for="pre-sts-item-2-opt-2">Pocas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-sts-item-2-opt-3" name="pre-sts-item-2" value="3">
              <label for="pre-sts-item-2-opt-3">Algunas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-sts-item-2-opt-4" name="pre-sts-item-2" value="4">
              <label for="pre-sts-item-2-opt-4">Muchas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-sts-item-2-opt-5" name="pre-sts-item-2" value="5">
              <label for="pre-sts-item-2-opt-5">Siempre</label>            
            </div>                  
          </div>        
        </div>
        <hr>
        <div class="shortcode-form-scale-item">
          <p class="shortcode-form-scale-item-label">Me he sentido nervioso/a?</p>
          <div class="shortcode-form-scale-item-options-wrapper d-flex justify-content-around">
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-sts-item-3-opt-1" name="pre-sts-item-3" value="1" required>
              <label for="pre-sts-item-3-opt-1">Nunca</label><br>          
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-sts-item-3-opt-2" name="pre-sts-item-3" value="2">
              <label for="pre-sts-item-3-opt-2">Pocas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-sts-item-3-opt-3" name="pre-sts-item-3" value="3">
              <label for="pre-sts-item-3-opt-3">Algunas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-sts-item-3-opt-4" name="pre-sts-item-3" value="4">
              <label for="pre-sts-item-3-opt-4">Muchas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-sts-item-3-opt-5" name="pre-sts-item-3" value="5">
              <label for="pre-sts-item-3-opt-5">Siempre</label>            
            </div>                  
          </div>        
        </div>
        <hr>
        <div class="shortcode-form-scale-item">
          <p class="shortcode-form-scale-item-label">He manejado con éxito los pequeños problemas irritantes de mi vida?</p>
          <div class="shortcode-form-scale-item-options-wrapper d-flex justify-content-around">
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-sts-item-4-opt-1" name="pre-sts-item-4" value="1" required>
              <label for="pre-sts-item-4-opt-1">Nunca</label><br>          
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-sts-item-4-opt-2" name="pre-sts-item-4" value="2">
              <label for="pre-sts-item-4-opt-2">Pocas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-sts-item-4-opt-3" name="pre-sts-item-4" value="3">
              <label for="pre-sts-item-4-opt-3">Algunas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-sts-item-4-opt-4" name="pre-sts-item-4" value="4">
              <label for="pre-sts-item-4-opt-4">Muchas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-sts-item-4-opt-5" name="pre-sts-item-4" value="5">
              <label for="pre-sts-item-4-opt-5">Siempre</label>            
            </div>                  
          </div>        
        </div>
        <hr>
        <div class="shortcode-form-scale-item">
          <p class="shortcode-form-scale-item-label">He sentido que he afrontado efectivamente los cambios importantes que han estado ocurriendo en mi vida?</p>
          <div class="shortcode-form-scale-item-options-wrapper d-flex justify-content-around">
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-sts-item-5-opt-1" name="pre-sts-item-5" value="1" required>
              <label for="pre-sts-item-5-opt-1">Nunca</label><br>          
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-sts-item-5-opt-2" name="pre-sts-item-5" value="2">
              <label for="pre-sts-item-5-opt-2">Pocas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-sts-item-5-opt-3" name="pre-sts-item-5" value="3">
              <label for="pre-sts-item-5-opt-3">Algunas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-sts-item-5-opt-4" name="pre-sts-item-5" value="4">
              <label for="pre-sts-item-5-opt-4">Muchas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-sts-item-5-opt-5" name="pre-sts-item-5" value="5">
              <label for="pre-sts-item-5-opt-5">Siempre</label>            
            </div>                  
          </div>        
        </div>
        <hr>
        <div class="shortcode-form-scale-item">
          <p class="shortcode-form-scale-item-label">He sentido confianza en poder manejar mis problemas personales?</p>
          <div class="shortcode-form-scale-item-options-wrapper d-flex justify-content-around">
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-sts-item-6-opt-1" name="pre-sts-item-6" value="1" required>
              <label for="pre-sts-item-6-opt-1">Nunca</label><br>          
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-sts-item-6-opt-2" name="pre-sts-item-6" value="2">
              <label for="pre-sts-item-6-opt-2">Pocas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-sts-item-6-opt-3" name="pre-sts-item-6" value="3">
              <label for="pre-sts-item-6-opt-3">Algunas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-sts-item-6-opt-4" name="pre-sts-item-6" value="4">
              <label for="pre-sts-item-6-opt-4">Muchas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-sts-item-6-opt-5" name="pre-sts-item-6" value="5">
              <label for="pre-sts-item-6-opt-5">Siempre</label>            
            </div>                  
          </div>        
        </div>
        <hr>
        <div class="shortcode-form-scale-item">
          <p class="shortcode-form-scale-item-label">He sentido que las cosas van de la manera que quiero?</p>
          <div class="shortcode-form-scale-item-options-wrapper d-flex justify-content-around">
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-sts-item-7-opt-1" name="pre-sts-item-7" value="1" required>
              <label for="pre-sts-item-7-opt-1">Nunca</label><br>          
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-sts-item-7-opt-2" name="pre-sts-item-7" value="2">
              <label for="pre-sts-item-7-opt-2">Pocas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-sts-item-7-opt-3" name="pre-sts-item-7" value="3">
              <label for="pre-sts-item-7-opt-3">Algunas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-sts-item-7-opt-4" name="pre-sts-item-7" value="4">
              <label for="pre-sts-item-7-opt-4">Muchas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-sts-item-7-opt-5" name="pre-sts-item-7" value="5">
              <label for="pre-sts-item-7-opt-5">Siempre</label>            
            </div>                  
          </div>        
        </div>
        <hr>
        <div class="shortcode-form-scale-item">
          <p class="shortcode-form-scale-item-label">He sido capaz de controlar las dificultades de mi vida?</p>
          <div class="shortcode-form-scale-item-options-wrapper d-flex justify-content-around">
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-sts-item-8-opt-1" name="pre-sts-item-8" value="1" required>
              <label for="pre-sts-item-8-opt-1">Nunca</label><br>          
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-sts-item-8-opt-2" name="pre-sts-item-8" value="2">
              <label for="pre-sts-item-8-opt-2">Pocas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-sts-item-8-opt-3" name="pre-sts-item-8" value="3">
              <label for="pre-sts-item-8-opt-3">Algunas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-sts-item-8-opt-4" name="pre-sts-item-8" value="4">
              <label for="pre-sts-item-8-opt-4">Muchas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-sts-item-8-opt-5" name="pre-sts-item-8" value="5">
              <label for="pre-sts-item-8-opt-5">Siempre</label>            
            </div>                  
          </div>        
        </div>
        <hr>
        <div class="shortcode-form-scale-item">
          <p class="shortcode-form-scale-item-label">He sentido que tengo todo bajo control?</p>
          <div class="shortcode-form-scale-item-options-wrapper d-flex justify-content-around">
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-sts-item-9-opt-1" name="pre-sts-item-9" value="1" required>
              <label for="pre-sts-item-9-opt-1">Nunca</label><br>          
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-sts-item-9-opt-2" name="pre-sts-item-9" value="2">
              <label for="pre-sts-item-9-opt-2">Pocas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-sts-item-9-opt-3" name="pre-sts-item-9" value="3">
              <label for="pre-sts-item-9-opt-3">Algunas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-sts-item-9-opt-4" name="pre-sts-item-9" value="4">
              <label for="pre-sts-item-9-opt-4">Muchas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-sts-item-9-opt-5" name="pre-sts-item-9" value="5">
              <label for="pre-sts-item-9-opt-5">Siempre</label>            
            </div>                  
          </div>        
        </div>
        <hr>
        <div class="shortcode-form-scale-item">
          <p class="shortcode-form-scale-item-label">Me he irritado por cosas que ocurrieron y que salieron de mi control?</p>
          <div class="shortcode-form-scale-item-options-wrapper d-flex justify-content-around">
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-sts-item-10-opt-1" name="pre-sts-item-10" value="1" required>
              <label for="pre-sts-item-10-opt-1">Nunca</label><br>          
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-sts-item-10-opt-2" name="pre-sts-item-10" value="2">
              <label for="pre-sts-item-10-opt-2">Pocas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-sts-item-10-opt-3" name="pre-sts-item-10" value="3">
              <label for="pre-sts-item-10-opt-3">Algunas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-sts-item-10-opt-4" name="pre-sts-item-10" value="4">
              <label for="pre-sts-item-10-opt-4">Muchas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-sts-item-10-opt-5" name="pre-sts-item-10" value="5">
              <label for="pre-sts-item-10-opt-5">Siempre</label>            
            </div>                  
          </div>        
        </div>
        <hr>
        <div class="shortcode-form-scale-item">
          <p class="shortcode-form-scale-item-label">He repensado varias veces sobre las tareas que debo hacer?</p>
          <div class="shortcode-form-scale-item-options-wrapper d-flex justify-content-around">
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-sts-item-11-opt-1" name="pre-sts-item-11" value="1" required>
              <label for="pre-sts-item-11-opt-1">Nunca</label><br>          
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-sts-item-11-opt-2" name="pre-sts-item-11" value="2">
              <label for="pre-sts-item-11-opt-2">Pocas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-sts-item-11-opt-3" name="pre-sts-item-11" value="3">
              <label for="pre-sts-item-11-opt-3">Algunas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-sts-item-11-opt-4" name="pre-sts-item-11" value="4">
              <label for="pre-sts-item-11-opt-4">Muchas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-sts-item-11-opt-5" name="pre-sts-item-11" value="5">
              <label for="pre-sts-item-11-opt-5">Siempre</label>            
            </div>                  
          </div>        
        </div>
        <hr>
        <div class="shortcode-form-scale-item">
          <p class="shortcode-form-scale-item-label">He podido controlar la manera en la que ocupo mi tiempo?</p>
          <div class="shortcode-form-scale-item-options-wrapper d-flex justify-content-around">
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-sts-item-12-opt-1" name="pre-sts-item-12" value="1" required>
              <label for="pre-sts-item-12-opt-1">Nunca</label><br>          
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-sts-item-12-opt-2" name="pre-sts-item-12" value="2">
              <label for="pre-sts-item-12-opt-2">Pocas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-sts-item-12-opt-3" name="pre-sts-item-12" value="3">
              <label for="pre-sts-item-12-opt-3">Algunas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-sts-item-12-opt-4" name="pre-sts-item-12" value="4">
              <label for="pre-sts-item-12-opt-4">Muchas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-sts-item-12-opt-5" name="pre-sts-item-12" value="5">
              <label for="pre-sts-item-12-opt-5">Siempre</label>            
            </div>                  
          </div>        
        </div>
        <hr>
        <div class="shortcode-form-scale-item">
          <p class="shortcode-form-scale-item-label">Parece que los problemas se acumulan tanto que no puedo superarlos?</p>
          <div class="shortcode-form-scale-item-options-wrapper d-flex justify-content-around">
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-sts-item-13-opt-1" name="pre-sts-item-13" value="1" required>
              <label for="pre-sts-item-13-opt-1">Nunca</label><br>          
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-sts-item-13-opt-2" name="pre-sts-item-13" value="2">
              <label for="pre-sts-item-13-opt-2">Pocas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-sts-item-13-opt-3" name="pre-sts-item-13" value="3">
              <label for="pre-sts-item-13-opt-3">Algunas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-sts-item-13-opt-4" name="pre-sts-item-13" value="4">
              <label for="pre-sts-item-13-opt-4">Muchas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-sts-item-13-opt-5" name="pre-sts-item-13" value="5">
              <label for="pre-sts-item-13-opt-5">Siempre</label>            
            </div>                  
          </div>        
        </div>
        <hr>
        <div class="shortcode-form-scale-item">
          <p class="shortcode-form-scale-item-label">He tenido la sensación de que nadie me ayuda con los problemas?</p>
          <div class="shortcode-form-scale-item-options-wrapper d-flex justify-content-around">
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-sts-item-14-opt-1" name="pre-sts-item-14" value="1" required>
              <label for="pre-sts-item-14-opt-1">Nunca</label><br>          
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-sts-item-14-opt-2" name="pre-sts-item-14" value="2">
              <label for="pre-sts-item-14-opt-2">Pocas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-sts-item-14-opt-3" name="pre-sts-item-14" value="3">
              <label for="pre-sts-item-14-opt-3">Algunas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-sts-item-14-opt-4" name="pre-sts-item-14" value="4">
              <label for="pre-sts-item-14-opt-4">Muchas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-sts-item-14-opt-5" name="pre-sts-item-14" value="5">
              <label for="pre-sts-item-14-opt-5">Siempre</label>            
            </div>                  
          </div>        
        </div>
        <hr>
        <div class="shortcode-form-scale-item">
          <p class="shortcode-form-scale-item-label">Me he molestado con personas cercanas por su falta de apoyo?</p>
          <div class="shortcode-form-scale-item-options-wrapper d-flex justify-content-around">
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-sts-item-15-opt-1" name="pre-sts-item-15" value="1" required>
              <label for="pre-sts-item-15-opt-1">Nunca</label><br>          
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-sts-item-15-opt-2" name="pre-sts-item-15" value="2">
              <label for="pre-sts-item-15-opt-2">Pocas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-sts-item-15-opt-3" name="pre-sts-item-15" value="3">
              <label for="pre-sts-item-15-opt-3">Algunas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-sts-item-15-opt-4" name="pre-sts-item-15" value="4">
              <label for="pre-sts-item-15-opt-4">Muchas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-sts-item-15-opt-5" name="pre-sts-item-15" value="5">
              <label for="pre-sts-item-15-opt-5">Siempre</label>            
            </div>                  
          </div>        
        </div>
        <hr>
        <div class="shortcode-form-scale-item">
          <p class="shortcode-form-scale-item-label">Te han dicho que quieres controlar todo y a todos?</p>
          <div class="shortcode-form-scale-item-options-wrapper d-flex justify-content-around">
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-sts-item-16-opt-1" name="pre-sts-item-16" value="1" required>
              <label for="pre-sts-item-16-opt-1">Nunca</label><br>          
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-sts-item-16-opt-2" name="pre-sts-item-16" value="2">
              <label for="pre-sts-item-16-opt-2">Pocas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-sts-item-16-opt-3" name="pre-sts-item-16" value="3">
              <label for="pre-sts-item-16-opt-3">Algunas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-sts-item-16-opt-4" name="pre-sts-item-16" value="4">
              <label for="pre-sts-item-16-opt-4">Muchas veces</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-sts-item-16-opt-5" name="pre-sts-item-16" value="5">
              <label for="pre-sts-item-16-opt-5">Siempre</label>            
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
              <input type="radio" id="pre-sts-item-17-opt-1" name="pre-sts-item-17" value="1" required>
              <label for="pre-sts-item-17-opt-1">Totalmente falso</label><br>          
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-sts-item-17-opt-2" name="pre-sts-item-17" value="2">
              <label for="pre-sts-item-17-opt-2">Falso</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-sts-item-17-opt-3" name="pre-sts-item-17" value="3">
              <label for="pre-sts-item-17-opt-3">Incierto</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-sts-item-17-opt-4" name="pre-sts-item-17" value="4">
              <label for="pre-sts-item-17-opt-4">Cierto</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-sts-item-17-opt-5" name="pre-sts-item-17" value="5">
              <label for="pre-sts-item-17-opt-5">Totalmente cierto</label>            
            </div>                  
          </div>        
        </div>
        <hr>
        <div class="shortcode-form-scale-item">
          <p class="shortcode-form-scale-item-label">Tengo la capacidad de controlar el estrés aunque haya dificultades</p>
          <div class="shortcode-form-scale-item-options-wrapper d-flex justify-content-around">
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-sts-item-18-opt-1" name="pre-sts-item-18" value="1" required>
              <label for="pre-sts-item-18-opt-1">Totalmente falso</label><br>          
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-sts-item-18-opt-2" name="pre-sts-item-18" value="2">
              <label for="pre-sts-item-18-opt-2">Falso</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-sts-item-18-opt-3" name="pre-sts-item-18" value="3">
              <label for="pre-sts-item-18-opt-3">Incierto</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-sts-item-18-opt-4" name="pre-sts-item-18" value="4">
              <label for="pre-sts-item-18-opt-4">Cierto</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-sts-item-18-opt-5" name="pre-sts-item-18" value="5">
              <label for="pre-sts-item-18-opt-5">Totalmente cierto</label>            
            </div>                  
          </div>        
        </div>
        <hr>
        <div class="shortcode-form-scale-item">
          <p class="shortcode-form-scale-item-label">Puedo manejar situaciones complicadas si me esfuerzo lo suficiente</p>
          <div class="shortcode-form-scale-item-options-wrapper d-flex justify-content-around">
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-sts-item-19-opt-1" name="pre-sts-item-19" value="1" required>
              <label for="pre-sts-item-19-opt-1">Totalmente falso</label><br>          
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-sts-item-19-opt-2" name="pre-sts-item-19" value="2">
              <label for="pre-sts-item-19-opt-2">Falso</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-sts-item-19-opt-3" name="pre-sts-item-19" value="3">
              <label for="pre-sts-item-19-opt-3">Incierto</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-sts-item-19-opt-4" name="pre-sts-item-19" value="4">
              <label for="pre-sts-item-19-opt-4">Cierto</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-sts-item-19-opt-5" name="pre-sts-item-19" value="5">
              <label for="pre-sts-item-19-opt-5">Totalmente cierto</label>            
            </div>                  
          </div>        
        </div>
        <hr>
        <div class="shortcode-form-scale-item">
          <p class="shortcode-form-scale-item-label">Soy capaz de llevar con más tranquilidad la vida si pongo dedicación</p>
          <div class="shortcode-form-scale-item-options-wrapper d-flex justify-content-around">
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-sts-item-20-opt-1" name="pre-sts-item-20" value="1" required>
              <label for="pre-sts-item-20-opt-1">Totalmente falso</label><br>          
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-sts-item-20-opt-2" name="pre-sts-item-20" value="2">
              <label for="pre-sts-item-20-opt-2">Falso</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-sts-item-20-opt-3" name="pre-sts-item-20" value="3">
              <label for="pre-sts-item-20-opt-3">Incierto</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-sts-item-20-opt-4" name="pre-sts-item-20" value="4">
              <label for="pre-sts-item-20-opt-4">Cierto</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-sts-item-20-opt-5" name="pre-sts-item-20" value="5">
              <label for="pre-sts-item-20-opt-5">Totalmente cierto</label>            
            </div>                  
          </div>        
        </div>
        <hr>
        <div class="shortcode-form-scale-item">
          <p class="shortcode-form-scale-item-label">Me es posible aprender a manejar lo que me provoca estrés excesivo</p>
          <div class="shortcode-form-scale-item-options-wrapper d-flex justify-content-around">
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-sts-item-21-opt-1" name="pre-sts-item-21" value="1" required>
              <label for="pre-sts-item-21-opt-1">Totalmente falso</label><br>          
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-sts-item-21-opt-2" name="pre-sts-item-21" value="2">
              <label for="pre-sts-item-21-opt-2">Falso</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-sts-item-21-opt-3" name="pre-sts-item-21" value="3">
              <label for="pre-sts-item-21-opt-3">Incierto</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-sts-item-21-opt-4" name="pre-sts-item-21" value="4">
              <label for="pre-sts-item-21-opt-4">Cierto</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-sts-item-21-opt-5" name="pre-sts-item-21" value="5">
              <label for="pre-sts-item-21-opt-5">Totalmente cierto</label>            
            </div>                  
          </div>        
        </div>
        <hr>
        <div class="shortcode-form-scale-item">
          <p class="shortcode-form-scale-item-label">Puedo insistir y perseverar en la meta de manejar mejor el estrés</p>
          <div class="shortcode-form-scale-item-options-wrapper d-flex justify-content-around">
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-sts-item-22-opt-1" name="pre-sts-item-22" value="1" required>
              <label for="pre-sts-item-22-opt-1">Totalmente falso</label><br>          
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-sts-item-22-opt-2" name="pre-sts-item-22" value="2">
              <label for="pre-sts-item-22-opt-2">Falso</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-sts-item-22-opt-3" name="pre-sts-item-22" value="3">
              <label for="pre-sts-item-22-opt-3">Incierto</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-sts-item-22-opt-4" name="pre-sts-item-22" value="4">
              <label for="pre-sts-item-22-opt-4">Cierto</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-sts-item-22-opt-5" name="pre-sts-item-22" value="5">
              <label for="pre-sts-item-22-opt-5">Totalmente cierto</label>            
            </div>                  
          </div>        
        </div>
        <hr>
        <div class="shortcode-form-scale-item">
          <p class="shortcode-form-scale-item-label">Confío en manejar mejor los acontecimientos inesperados o difíciles que se presenten</p>
          <div class="shortcode-form-scale-item-options-wrapper d-flex justify-content-around">
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-sts-item-23-opt-1" name="pre-sts-item-23" value="1" required>
              <label for="pre-sts-item-23-opt-1">Totalmente falso</label><br>          
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-sts-item-23-opt-2" name="pre-sts-item-23" value="2">
              <label for="pre-sts-item-23-opt-2">Falso</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-sts-item-23-opt-3" name="pre-sts-item-23" value="3">
              <label for="pre-sts-item-23-opt-3">Incierto</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-sts-item-23-opt-4" name="pre-sts-item-23" value="4">
              <label for="pre-sts-item-23-opt-4">Cierto</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-sts-item-23-opt-5" name="pre-sts-item-23" value="5">
              <label for="pre-sts-item-23-opt-5">Totalmente cierto</label>            
            </div>                  
          </div>        
        </div>
        <hr>
        <div class="shortcode-form-scale-item">
          <p class="shortcode-form-scale-item-label">Al encontrarme en situaciones difíciles, puedo crear respuestas para salir de ellas</p>
          <div class="shortcode-form-scale-item-options-wrapper d-flex justify-content-around">
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-sts-item-24-opt-1" name="pre-sts-item-24" value="1" required>
              <label for="pre-sts-item-24-opt-1">Totalmente falso</label><br>          
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-sts-item-24-opt-2" name="pre-sts-item-24" value="2">
              <label for="pre-sts-item-24-opt-2">Falso</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-sts-item-24-opt-3" name="pre-sts-item-24" value="3">
              <label for="pre-sts-item-24-opt-3">Incierto</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-sts-item-24-opt-4" name="pre-sts-item-24" value="4">
              <label for="pre-sts-item-24-opt-4">Cierto</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-sts-item-24-opt-5" name="pre-sts-item-24" value="5">
              <label for="pre-sts-item-24-opt-5">Totalmente cierto</label>            
            </div>                  
          </div>        
        </div>
        <hr>
        <div class="shortcode-form-scale-item">
          <p class="shortcode-form-scale-item-label">Al encarar dificultades, soy capaz de permanecer tranquilo/a y pensar</p>
          <div class="shortcode-form-scale-item-options-wrapper d-flex justify-content-around">
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-sts-item-25-opt-1" name="pre-sts-item-25" value="1" required>
              <label for="pre-sts-item-25-opt-1">Totalmente falso</label><br>          
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-sts-item-25-opt-2" name="pre-sts-item-25" value="2">
              <label for="pre-sts-item-25-opt-2">Falso</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-sts-item-25-opt-3" name="pre-sts-item-25" value="3">
              <label for="pre-sts-item-25-opt-3">Incierto</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-sts-item-25-opt-4" name="pre-sts-item-25" value="4">
              <label for="pre-sts-item-25-opt-4">Cierto</label><br>            
            </div>
            <div class="shortcode-form-scale-item-option">
              <input type="radio" id="pre-sts-item-25-opt-5" name="pre-sts-item-25" value="5">
              <label for="pre-sts-item-25-opt-5">Totalmente cierto</label>            
            </div>                  
          </div>        
        </div>
      </div>
      <?php wp_nonce_field( 'post_nonce_action', 'post_nonce_field' ); ?>
      <input type="submit" class="shortcode-form-button btn btn-primary btn-lg btn-block" value="<?php _e( 'Terminar', 'prests' ); ?>">
    </form>
  </div>  
  <?php
  $output = ob_get_contents();
  ob_end_clean();
  return $output;
}

add_shortcode( 'pre_sts_shortcode', 'pre_sts_form');

function pre_sts_private_measurement(){
  if( isset( $_POST['post_nonce_field'] )
      && wp_verify_nonce( $_POST['post_nonce_field'], 'post_nonce_action')){

      global $current_user;
      $userId = $current_user->ID;

      $postTitle = "Pretest estres de #" . $userId;

      $metaItem1 = $_POST['pre-sts-item-1'];
      $metaItem2 = $_POST['pre-sts-item-2'];
      $metaItem3 = $_POST['pre-sts-item-3'];
      $metaItem4 = $_POST['pre-sts-item-4'];
      $metaItem5 = $_POST['pre-sts-item-5'];
      $metaItem6 = $_POST['pre-sts-item-6'];
      $metaItem7 = $_POST['pre-sts-item-7'];
      $metaItem8 = $_POST['pre-sts-item-8'];
      $metaItem9 = $_POST['pre-sts-item-9'];
      $metaItem10 = $_POST['pre-sts-item-10'];
      $metaItem11 = $_POST['pre-sts-item-11'];
      $metaItem12 = $_POST['pre-sts-item-12'];
      $metaItem13 = $_POST['pre-sts-item-13'];
      $metaItem14 = $_POST['pre-sts-item-14'];
      $metaItem15 = $_POST['pre-sts-item-15'];
      $metaItem16 = $_POST['pre-sts-item-16'];
      $metaItem17 = $_POST['pre-sts-item-17'];
      $metaItem18 = $_POST['pre-sts-item-18'];
      $metaItem19 = $_POST['pre-sts-item-19'];
      $metaItem20 = $_POST['pre-sts-item-20'];
      $metaItem21 = $_POST['pre-sts-item-21'];
      $metaItem22 = $_POST['pre-sts-item-22'];
      $metaItem23 = $_POST['pre-sts-item-23'];
      $metaItem24 = $_POST['pre-sts-item-24'];
      $metaItem25 = $_POST['pre-sts-item-25'];

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
        add_action( 'pre_sts_alerts', 'pre_sts_form_success' );
  }

  update_user_meta( $userId, 'pretest_sts', 1 );

}
add_action( 'init', 'pre_sts_private_measurement');

function pre_sts_form_success(){
  echo '<p class="scv-alert success">' . __( 'Se ha registrado correctamente', 'prests' ) . '</p>';
}
<?php

function pre_hyb_form(){
  if( !is_user_logged_in() ) return '<p>' . __( 'Para tomar este cuestionario debes <a href="' . get_site_url() . '/wp-login.php">iniciar sesion</a>', 'prehyb' ) . '</p>';

  ob_start();

  do_action( 'pre_hyb_alerts' ); ?>
  <form id="pre-hyb-measurement-form" action="" method="post">

    <label for="pre-hyb-item-1"><?php _e( 'Item 1', 'prehyb' ); ?></label>
    <input name="pre-hyb-item-1" id="pre-hyb-item-1" type="text">

    <p>Item 2</p>
    <input type="radio" id="pre-hyb-item-2-opt-1" name="pre-hyb-item-2" value="1">
    <label for="pre-hyb-item-2-opt-1">Totalmente de acuerdo</label><br>
    <input type="radio" id="pre-hyb-item-2-opt-2" name="pre-hyb-item-2" value="2">
    <label for="pre-hyb-item-2-opt-2">De acuerdo</label><br>
    <input type="radio" id="pre-hyb-item-2-opt-3" name="pre-hyb-item-2" value="3">
    <label for="pre-hyb-item-2-opt-3">No de acuerdo ni en desacuerdo</label><br>
    <input type="radio" id="pre-hyb-item-2-opt-4" name="pre-hyb-item-2" value="4">
    <label for="pre-hyb-item-2-opt-4">En desacuerdo</label><br>
    <input type="radio" id="pre-hyb-item-2-opt-5" name="pre-hyb-item-2" value="5">
    <label for="pre-hyb-item-2-opt-5">Totalmente en desacuerdo</label>

    <label for="pre-hyb-item-3"><?php _e( 'Item 3', 'prehyb' ); ?></label>
    <input name="pre-hyb-item-3" id="pre-hyb-item-3" type="text">

    <label for="pre-hyb-item-4"><?php _e( 'Item 4', 'prehyb' ); ?></label>
    <input name="pre-hyb-item-4" id="pre-hyb-item-4" type="text">

    <label for="pre-hyb-item-5"><?php _e( 'Item 5', 'prehyb' ); ?></label>
    <input name="pre-hyb-item-5" id="pre-hyb-item-5" type="text">

    <label for="pre-hyb-item-6"><?php _e( 'Item 6', 'prehyb' ); ?></label>
    <input name="pre-hyb-item-6" id="pre-hyb-item-6" type="text">

    <label for="pre-hyb-item-7"><?php _e( 'Item 7', 'prehyb' ); ?></label>
    <input name="pre-hyb-item-7" id="pre-hyb-item-7" type="text">

    <label for="pre-hyb-item-8"><?php _e( 'Item 8', 'prehyb' ); ?></label>
    <input name="pre-hyb-item-8" id="pre-hyb-item-8" type="text">

    <label for="pre-hyb-item-9"><?php _e( 'Item 9', 'prehyb' ); ?></label>
    <input name="pre-hyb-item-9" id="pre-hyb-item-9" type="text">

    <label for="pre-hyb-item-10"><?php _e( 'Item 10', 'prehyb' ); ?></label>
    <input name="pre-hyb-item-10" id="pre-hyb-item-10" type="text">

    <label for="pre-hyb-item-11"><?php _e( 'Item 11', 'prehyb' ); ?></label>
    <input name="pre-hyb-item-11" id="pre-hyb-item-11" type="text">

    <label for="pre-hyb-item-12"><?php _e( 'Item 12', 'prehyb' ); ?></label>
    <input name="pre-hyb-item-12" id="pre-hyb-item-12" type="text">

    <label for="pre-hyb-item-13"><?php _e( 'Item 13', 'prehyb' ); ?></label>
    <input name="pre-hyb-item-13" id="pre-hyb-item-13" type="text">

    <label for="pre-hyb-item-14"><?php _e( 'Item 14', 'prehyb' ); ?></label>
    <input name="pre-hyb-item-14" id="pre-hyb-item-14" type="text">

    <label for="pre-hyb-item-15"><?php _e( 'Item 15', 'prehyb' ); ?></label>
    <input name="pre-hyb-item-15" id="pre-hyb-item-15" type="text">

    <label for="pre-hyb-item-16"><?php _e( 'Item 16', 'prehyb' ); ?></label>
    <input name="pre-hyb-item-16" id="pre-hyb-item-16" type="text">

    <label for="pre-hyb-item-17"><?php _e( 'Item 17', 'prehyb' ); ?></label>
    <input name="pre-hyb-item-17" id="pre-hyb-item-17" type="text">

    <label for="pre-hyb-item-18"><?php _e( 'Item 18', 'prehyb' ); ?></label>
    <input name="pre-hyb-item-18" id="pre-hyb-item-18" type="text">

    <label for="pre-hyb-item-19"><?php _e( 'Item 19', 'prehyb' ); ?></label>
    <input name="pre-hyb-item-19" id="pre-hyb-item-19" type="text">

    <label for="pre-hyb-item-20"><?php _e( 'Item 20', 'prehyb' ); ?></label>
    <input name="pre-hyb-item-20" id="pre-hyb-item-20" type="text">

    <label for="pre-hyb-item-21"><?php _e( 'Item 21', 'prehyb' ); ?></label>
    <input name="pre-hyb-item-21" id="pre-hyb-item-21" type="text">

    <label for="pre-hyb-item-22"><?php _e( 'Item 22', 'prehyb' ); ?></label>
    <input name="pre-hyb-item-22" id="pre-hyb-item-22" type="text">

    <label for="pre-hyb-item-23"><?php _e( 'Item 23', 'prehyb' ); ?></label>
    <input name="pre-hyb-item-23" id="pre-hyb-item-23" type="text">

    <label for="pre-hyb-item-24"><?php _e( 'Item 24', 'prehyb' ); ?></label>
    <input name="pre-hyb-item-24" id="pre-hyb-item-24" type="text">

    <label for="pre-hyb-item-25"><?php _e( 'Item 25', 'prehyb' ); ?></label>
    <input name="pre-hyb-item-25" id="pre-hyb-item-25" type="text">

    <label for="pre-hyb-item-26"><?php _e( 'Item 26', 'prehyb' ); ?></label>
    <input name="pre-hyb-item-26" id="pre-hyb-item-26" type="text">

    <label for="pre-hyb-item-27"><?php _e( 'Item 27', 'prehyb' ); ?></label>
    <input name="pre-hyb-item-27" id="pre-hyb-item-27" type="text">

    <label for="pre-hyb-item-28"><?php _e( 'Item 28', 'prehyb' ); ?></label>
    <input name="pre-hyb-item-28" id="pre-hyb-item-28" type="text">

    <label for="pre-hyb-item-29"><?php _e( 'Item 29', 'prehyb' ); ?></label>
    <input name="pre-hyb-item-29" id="pre-hyb-item-29" type="text">

    <label for="pre-hyb-item-30"><?php _e( 'Item 30', 'prehyb' ); ?></label>
    <input name="pre-hyb-item-30" id="pre-hyb-item-30" type="text"> 

    <?php wp_nonce_field( 'post_nonce_action', 'post_nonce_field' ); ?>

    <input type="submit" value="<?php _e( 'Guardar', 'prehyb' ); ?>">

  </form>
  <?php
  $output = ob_get_contents();
  ob_end_clean();
  return $output;
}

add_shortcode( 'pre_hyb_shortcode', 'pre_hyb_form');

function pre_hyb_private_measurement(){
  if( isset( $_POST['post_nonce_field'] )
      && wp_verify_nonce( $_POST['post_nonce_field'], 'post_nonce_action')){

      global $current_user;
      $userId = $current_user->ID;

      $postTitle = "Pretest sueño de #" . $userId;

      $metaItem1 = $_POST['pre-hyb-item-1'];
      $metaItem2 = $_POST['pre-hyb-item-2'];
      $metaItem3 = $_POST['pre-hyb-item-3'];
      $metaItem4 = $_POST['pre-hyb-item-4'];
      $metaItem5 = $_POST['pre-hyb-item-5'];
      $metaItem6 = $_POST['pre-hyb-item-6'];
      $metaItem7 = $_POST['pre-hyb-item-7'];
      $metaItem8 = $_POST['pre-hyb-item-8'];
      $metaItem9 = $_POST['pre-hyb-item-9'];
      $metaItem10 = $_POST['pre-hyb-item-10'];
      $metaItem11 = $_POST['pre-hyb-item-11'];
      $metaItem12 = $_POST['pre-hyb-item-12'];
      $metaItem13 = $_POST['pre-hyb-item-13'];
      $metaItem14 = $_POST['pre-hyb-item-14'];
      $metaItem15 = $_POST['pre-hyb-item-15'];
      $metaItem16 = $_POST['pre-hyb-item-16'];
      $metaItem17 = $_POST['pre-hyb-item-17'];
      $metaItem18 = $_POST['pre-hyb-item-18'];
      $metaItem19 = $_POST['pre-hyb-item-19'];
      $metaItem20 = $_POST['pre-hyb-item-20'];
      $metaItem21 = $_POST['pre-hyb-item-21'];
      $metaItem22 = $_POST['pre-hyb-item-22'];
      $metaItem23 = $_POST['pre-hyb-item-23'];
      $metaItem24 = $_POST['pre-hyb-item-24'];
      $metaItem25 = $_POST['pre-hyb-item-25'];
      $metaItem26 = $_POST['pre-hyb-item-26'];
      $metaItem27 = $_POST['pre-hyb-item-27'];
      $metaItem28 = $_POST['pre-hyb-item-28'];
      $metaItem29 = $_POST['pre-hyb-item-29'];
      $metaItem30 = $_POST['pre-hyb-item-30'];
      $metaItem31 = $_POST['pre-hyb-item-31'];
      $metaItem32 = $_POST['pre-hyb-item-32'];
      $metaItem33 = $_POST['pre-hyb-item-33'];
      $metaItem34 = $_POST['pre-hyb-item-34'];
      $metaItem35 = $_POST['pre-hyb-item-35'];
      $metaItem36 = $_POST['pre-hyb-item-36'];
      $metaItem37 = $_POST['pre-hyb-item-37'];
      $metaItem38 = $_POST['pre-hyb-item-38'];
      $metaItem39 = $_POST['pre-hyb-item-39'];
      $metaItem40 = $_POST['pre-hyb-item-40'];
      $metaItem41 = $_POST['pre-hyb-item-41'];
      $metaItem42 = $_POST['pre-hyb-item-42'];
      $metaItem43 = $_POST['pre-hyb-item-43'];
      $metaItem44 = $_POST['pre-hyb-item-44'];
      $metaItem45 = $_POST['pre-hyb-item-45'];
      $metaItem46 = $_POST['pre-hyb-item-46'];
      $metaItem47 = $_POST['pre-hyb-item-47'];
      $metaItem48 = $_POST['pre-hyb-item-48'];
      $metaItem49 = $_POST['pre-hyb-item-49'];
      $metaItem50 = $_POST['pre-hyb-item-50'];
      $metaItem51 = $_POST['pre-hyb-item-51'];
      $metaItem52 = $_POST['pre-hyb-item-52'];
      $metaItem53 = $_POST['pre-hyb-item-53'];
      $metaItem54 = $_POST['pre-hyb-item-54'];
      $metaItem55 = $_POST['pre-hyb-item-55'];
      $metaItem56 = $_POST['pre-hyb-item-56'];
      $metaItem57 = $_POST['pre-hyb-item-57'];
      $metaItem58 = $_POST['pre-hyb-item-58'];
      $metaItem59 = $_POST['pre-hyb-item-59'];
      $metaItem60 = $_POST['pre-hyb-item-60'];
      $metaItem61 = $_POST['pre-hyb-item-61'];
      $metaItem62 = $_POST['pre-hyb-item-62'];
      $metaItem63 = $_POST['pre-hyb-item-63'];
      $metaItem64 = $_POST['pre-hyb-item-64'];
      $metaItem65 = $_POST['pre-hyb-item-65'];
      $metaItem66 = $_POST['pre-hyb-item-66'];
      $metaItem67 = $_POST['pre-hyb-item-67'];
      $metaItem68 = $_POST['pre-hyb-item-68'];
      $metaItem69 = $_POST['pre-hyb-item-69'];
      $metaItem70 = $_POST['pre-hyb-item-70'];
      $metaItem71 = $_POST['pre-hyb-item-71'];
      $metaItem72 = $_POST['pre-hyb-item-72'];
      $metaItem73 = $_POST['pre-hyb-item-73'];
      $metaItem74 = $_POST['pre-hyb-item-74'];
      $metaItem75 = $_POST['pre-hyb-item-75'];
      $metaItem76 = $_POST['pre-hyb-item-76'];
      $metaItem77 = $_POST['pre-hyb-item-77'];
      $metaItem78 = $_POST['pre-hyb-item-78'];
      $metaItem79 = $_POST['pre-hyb-item-79'];
      $metaItem80 = $_POST['pre-hyb-item-80'];
      $metaItem81 = $_POST['pre-hyb-item-81'];
      $metaItem82 = $_POST['pre-hyb-item-82'];
      $metaItem83 = $_POST['pre-hyb-item-83'];
      $metaItem84 = $_POST['pre-hyb-item-84'];
      $metaItem85 = $_POST['pre-hyb-item-85'];
      $metaItem86 = $_POST['pre-hyb-item-86'];
      $metaItem87 = $_POST['pre-hyb-item-87'];
      $metaItem88 = $_POST['pre-hyb-item-88'];
      $metaItem89 = $_POST['pre-hyb-item-89'];
      $metaItem90 = $_POST['pre-hyb-item-90'];
      $metaItem91 = $_POST['pre-hyb-item-91'];
      $metaItem92 = $_POST['pre-hyb-item-92'];
      $metaItem93 = $_POST['pre-hyb-item-93'];
      $metaItem94 = $_POST['pre-hyb-item-94'];
      $metaItem95 = $_POST['pre-hyb-item-95'];
      $metaItem96 = $_POST['pre-hyb-item-96'];
      $metaItem97 = $_POST['pre-hyb-item-97'];
      $metaItem98 = $_POST['pre-hyb-item-98'];
      $metaItem99 = $_POST['pre-hyb-item-99'];
      $metaItem100 = $_POST['pre-hyb-item-100'];

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
        add_post_meta($postId, 'med_mb_item_35', $metaItem35, true);
        add_post_meta($postId, 'med_mb_item_36', $metaItem36, true);
        add_post_meta($postId, 'med_mb_item_37', $metaItem37, true);
        add_post_meta($postId, 'med_mb_item_38', $metaItem38, true);
        add_post_meta($postId, 'med_mb_item_39', $metaItem39, true);
        add_post_meta($postId, 'med_mb_item_40', $metaItem40, true);
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
        add_post_meta($postId, 'med_mb_item_66', $metaItem66, true);
        add_post_meta($postId, 'med_mb_item_67', $metaItem67, true);
        add_post_meta($postId, 'med_mb_item_68', $metaItem68, true);
        add_post_meta($postId, 'med_mb_item_69', $metaItem69, true);
        add_post_meta($postId, 'med_mb_item_70', $metaItem70, true);
        add_post_meta($postId, 'med_mb_item_71', $metaItem71, true);
        add_post_meta($postId, 'med_mb_item_72', $metaItem72, true);
        add_post_meta($postId, 'med_mb_item_73', $metaItem73, true);
        add_post_meta($postId, 'med_mb_item_74', $metaItem74, true);
        add_post_meta($postId, 'med_mb_item_75', $metaItem75, true);
        add_post_meta($postId, 'med_mb_item_76', $metaItem76, true);
        add_post_meta($postId, 'med_mb_item_77', $metaItem77, true);
        add_post_meta($postId, 'med_mb_item_78', $metaItem78, true);
        add_post_meta($postId, 'med_mb_item_79', $metaItem79, true);
        add_post_meta($postId, 'med_mb_item_80', $metaItem80, true);
        add_post_meta($postId, 'med_mb_item_81', $metaItem81, true);
        add_post_meta($postId, 'med_mb_item_82', $metaItem82, true);
        add_post_meta($postId, 'med_mb_item_83', $metaItem83, true);
        add_post_meta($postId, 'med_mb_item_84', $metaItem84, true);
        add_post_meta($postId, 'med_mb_item_85', $metaItem85, true);
        add_post_meta($postId, 'med_mb_item_86', $metaItem86, true);
        add_post_meta($postId, 'med_mb_item_87', $metaItem87, true);
        add_post_meta($postId, 'med_mb_item_88', $metaItem88, true);
        add_post_meta($postId, 'med_mb_item_89', $metaItem89, true);
        add_post_meta($postId, 'med_mb_item_90', $metaItem90, true);
        add_post_meta($postId, 'med_mb_item_91', $metaItem91, true);
        add_post_meta($postId, 'med_mb_item_92', $metaItem92, true);
        add_post_meta($postId, 'med_mb_item_93', $metaItem93, true);
        add_post_meta($postId, 'med_mb_item_94', $metaItem94, true);
        add_post_meta($postId, 'med_mb_item_95', $metaItem95, true);
        add_post_meta($postId, 'med_mb_item_96', $metaItem96, true);
        add_post_meta($postId, 'med_mb_item_97', $metaItem97, true);
        add_post_meta($postId, 'med_mb_item_98', $metaItem98, true);
        add_post_meta($postId, 'med_mb_item_99', $metaItem99, true);
        add_post_meta($postId, 'med_mb_item_100', $metaItem100, true);
    
        add_action( 'pre_hyb_alerts', 'pre_hyb_form_success' );
  }

  update_user_meta( $userId, 'pretest_hyb', 1 );

}
add_action( 'init', 'pre_hyb_private_measurement');

function pre_hyb_form_success(){
  echo '<p class="scv-alert success">' . __( 'Se ha publicado correctamente', 'prehyb' ) . '</p>';
}
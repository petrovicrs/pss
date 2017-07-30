<?php

function pss_extras_settings_page_form() {
    $form = array();
//    $form['pss_site_message'] = array(
//        '#title' => t('Site message'),
//        '#description' => t('Site message of PSS Magazine'),
//        '#type' => 'textfield',
//        '#default_value' => variable_get('pss_site_message', ''),
//        '#size' => 50,
//    );

    $form['common_settings'] = array(
      '#type' => 'fieldset',
      '#title' => t('Common settings'),
      '#collapsible' => FALSE,
      '#collapsed' => FALSE,
    );

    $form['common_settings']['pss_current_magazine_number_body_char_count'] = array(
      '#title' => t('Character count'),
      '#description' => t('Current magazine number article character count.'),
      '#type' => 'textfield',
      '#default_value' => variable_get('pss_current_magazine_number_body_char_count', 400),
      '#size' => 40,
    );

    $form['pss_front_page_banners'] = array(
      '#type' => 'fieldset',
      '#title' => t('Banners'),
      '#collapsible' => FALSE,
      '#collapsed' => FALSE,
    );

    $form['pss_front_page_banners']['pss_front_page_banner_image_1_preview'] = array(
      '#type' => 'markup',
      '#name' => 'pss_front_page_banner_image_1_preview',
      '#default_value' => variable_get('pss_front_page_banner_image_1', ''),
      '#theme' => 'pss_extras_theme_image_preview',
    );
    $form['pss_front_page_banners']['pss_front_page_banner_image_1'] = array(
      '#type' => 'managed_file',
      '#name' => 'pss_front_page_banner_image_1',
      '#title' => t('Front page large banner image'),
      '#default_value' => variable_get('pss_front_page_banner_image_1', ''),
      '#description' => t("Here you can upload front page large banner image!"),
      '#upload_location' => 'public://pictures/banners/',
      '#upload_validators' => array(
        'file_validate_extensions' => array('gif png jpg jpeg'),
      ),
    );
    $form['pss_front_page_banners']['pss_front_page_banner_image_1_link'] = array(
      '#title' => t('Link'),
      '#description' => t('Front page large banner link'),
      '#type' => 'textfield',
      '#default_value' => variable_get('pss_front_page_banner_image_1_link', ''),
      '#size' => 50,
    );
    $form['actions']['#type'] = 'actions';
    $form['actions']['submit'] = array('#type' => 'submit', '#value' => t('Save configuration'));
    return $form;
}


function pss_extras_settings_page_form_validate($form, &$form_state) {
    if(isset($form_state['values']['pss_front_page_banner_image_1_link'])) {
        if (filter_var($form_state['values']['pss_front_page_banner_image_1_link'], FILTER_VALIDATE_URL) === FALSE) {
            form_set_error('pss_front_page_banner_image_1_link', t('Enter valid link'));
        }
    }
}

function pss_extras_settings_page_form_submit($form, &$form_state) {
    // Exclude unnecessary elements.
    form_state_values_clean($form_state);
    foreach ($form_state['values'] as $key => $value) {
        if (is_array($value) && isset($form_state['values']['array_filter'])) {
            $value = array_keys(array_filter($value));
        }
        variable_set($key, $value);
    }

    if (isset($form_state['values']['pss_front_page_banner_image_1'])) {
        $file = file_load($form_state['values']['pss_front_page_banner_image_1']);
        if ($file) {
            $file->status = FILE_STATUS_PERMANENT;
            file_save($file);
            file_usage_add($file, 'pss_extras', 'pss_extras', $file->fid);
//            variable_set('pss_front_page_banner_image_1', $file->fid);
        }
    } else {
        $file = file_load(variable_get('pss_front_page_banner_image_1', ''));
        if ($file->fid) {
            file_delete($file, TRUE);
        }
    }
    drupal_set_message(t('The configuration options have been saved.'));
}
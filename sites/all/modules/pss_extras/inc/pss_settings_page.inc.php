<?php

function pss_extras_settings_page() {
    $form = array();
    $form['pss_site_message'] = array(
        '#title' => t('Site message'),
        '#description' => t('Site message of PSS Magazine'),
        '#type' => 'textfield',
        '#default_value' => variable_get('pss_site_message', ''),
        '#size' => 50,
    );
    $form['pss_current_magazine_number_body_char_count'] = array(
      '#title' => t('Character count'),
      '#description' => t('Current magazine number article character count.'),
      '#type' => 'textfield',
      '#default_value' => variable_get('pss_current_magazine_number_body_char_count', 400),
      '#size' => 400,
    );
    return system_settings_form($form);
}


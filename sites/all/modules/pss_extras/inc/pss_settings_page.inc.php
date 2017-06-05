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
    return system_settings_form($form);
}


<?php
function abogados_theme_preprocess_menu_social_network(&$variables, $hook)
{

    // Add the custom image field so can theme in template.
    if ($variables['theme_hook_original'] == 'menu__social_network') {
        foreach ($variables['items'] as $key => &$item) {
            $entity = \Drupal::entityTypeManager()->getStorage('menu_link_content')->loadByProperties(array('uuid' => $item['original_link']->getDerivativeId()));
            if (!empty($entity)) {
                $entity = array_shift($entity);
                $image = $entity->get('field_social_network')->entity;
                if (!empty($image)) {
                    $item['red'] = $image->getFileUri();
                }
            }
        }
    }
}
<?php
/**
 * @file
 * Documented API hooks for module.
 */

/**
 * Called at the end of menu_icons_form_menu_link_content_form_alter(), allows
 * third-party modules to further customize the form changes made by menu_icons.
 */
function hook_menu_icons_menu_link_content_form_alter(&$form, \Drupal\Core\Form\FormStateInterface $form_state, $form_id) {
}

/**
 * Called at the end of menu_icons_form_node_form_alter(), allows
 * third-party modules to further customize the form changes made by menu_icons.
 */
function hook_menu_icons_node_form_alter(&$form, \Drupal\Core\Form\FormStateInterface $form_state, $form_id) {
}

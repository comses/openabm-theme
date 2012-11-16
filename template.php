<?php
// $Id: template.php,v 1.21 2009/08/12 04:25:15 johnalbin Exp $

/**
 * @file
 * Contains theme override functions and preprocess functions for the theme.
 *
 * ABOUT THE TEMPLATE.PHP FILE
 *
 *   The template.php file is one of the most useful files when creating or
 *   modifying Drupal themes. You can add new regions for block content, modify
 *   or override Drupal's theme functions, intercept or make additional
 *   variables available to your theme, and create custom PHP logic. For more
 *   information, please visit the Theme Developer's Guide on Drupal.org:
 *   http://drupal.org/theme-guide
 *
 * OVERRIDING THEME FUNCTIONS
 *
 *   The Drupal theme system uses special theme functions to generate HTML
 *   output automatically. Often we wish to customize this HTML output. To do
 *   this, we have to override the theme function. You have to first find the
 *   theme function that generates the output, and then "catch" it and modify it
 *   here. The easiest way to do it is to copy the original function in its
 *   entirety and paste it here, changing the prefix from theme_ to openabm_.
 *   For example:
 *
 *     original: theme_breadcrumb()
 *     theme override: openabm_breadcrumb()
 *
 *   where openabm is the name of your sub-theme. For example, the
 *   zen_classic theme would define a zen_classic_breadcrumb() function.
 *
 *   If you would like to override any of the theme functions used in Zen core,
 *   you should first look at how Zen core implements those functions:
 *     theme_breadcrumbs()      in zen/template.php
 *     theme_menu_item_link()   in zen/template.php
 *     theme_menu_local_tasks() in zen/template.php
 *
 *   For more information, please visit the Theme Developer's Guide on
 *   Drupal.org: http://drupal.org/node/173880
 *
 * CREATE OR MODIFY VARIABLES FOR YOUR THEME
 *
 *   Each tpl.php template file has several variables which hold various pieces
 *   of content. You can modify those variables (or add new ones) before they
 *   are used in the template files by using preprocess functions.
 *
 *   This makes THEME_preprocess_HOOK() functions the most powerful functions
 *   available to themers.
 *
 *   It works by having one preprocess function for each template file or its
 *   derivatives (called template suggestions). For example:
 *     THEME_preprocess_page    alters the variables for page.tpl.php
 *     THEME_preprocess_node    alters the variables for node.tpl.php or
 *                              for node-forum.tpl.php
 *     THEME_preprocess_comment alters the variables for comment.tpl.php
 *     THEME_preprocess_block   alters the variables for block.tpl.php
 *
 *   For more information on preprocess functions and template suggestions,
 *   please visit the Theme Developer's Guide on Drupal.org:
 *   http://drupal.org/node/223440
 *   and http://drupal.org/node/190815#template-suggestions
 */

/*
 * function openabm_preprocess_search_results(&$variables) {

  // define the number of results being shown on a page
  $itemsPerPage = 10;

  // get the current page
  $currentPage = $_REQUEST['page']+1;

  // get the total number of results from the $GLOBALS
  $total = $GLOBALS['pager_total_items'][0];

  // perform calculation
  $start = 10*$currentPage-9;
  $end = $itemsPerPage * $currentPage;
  if ($end>$total) $end = $total;

  // set this html to the $variables
  $variables['openabm_search_totals'] = "Displaying $start - $end of $total results";

 }
 */

/*
 * function openabm_preprocess_views_view(&$vars) {
  // Wrap exposed filters in a fieldset.
  if ($vars['exposed']) {
    $element = array(
      '#title' => t('Filter Results'),
      '#collapsible' => TRUE,
      '#collapsed' => TRUE,
      '#value' => $vars['exposed'],
    );
    $vars['exposed'] = theme('fieldset', $element);
  }
 }
 */

/**
 * Implementation of HOOK_theme().
 */
function openabm_theme(&$existing, $type, $theme, $path) {
  $hooks = zen_theme($existing, $type, $theme, $path);
  
  $hooks['user_login_block'] = array(
    'arguments' => array('form' => NULL),
    'template' => 'user-login-block',
  );

  // Add your theme hooks like this:
  /*
  $hooks['hook_name_here'] = array( // Details go here );
  */
  // @TODO: Needs detailed comments. Patches welcome!
  return $hooks;
}

// -- Navigation UL
function openabm_menu_tree($tree)
{
  //-- rework the left nav view
  return '<ul class="leftnav">'. $tree .'</ul>';
}

// -- Navigation LI
function openabm_menu_item($link, $has_children, $menu = '', $in_active_trail = FALSE, $extra_class = NULL) 
{
  $class = "";

  if ($in_active_trail) 
    $class = " class=\"activenav\"";

  return "<li".$class.">". $link . $menu ."</li>\n";
}

/*
//-- Change the login information 
//-- (only changed the Capitol 'O' in out
function openabm_lt_loggedinblock()
{
  global $user;
  return check_plain($user->name) .' | ' . l(t('Log Out'), 'logout');
} */

/*
 * Remove the Track tab for all users.
 */
function openabm_menu_local_task($link, $active = FALSE) {
  if (strpos($link,'track')) {
    return '';
  } else {
      return '<li '. ($active ? 'class="active" ' : '') .'>'. $link ."</li>\n";
  }
}

/*function openabm_user_login_block(&$form) {
  $wgt = $form['links']['#weight'];

  $items = array();
  $items[] = l(t('Forgot how to login?'), 'user/password', array('attributes' => array('title' => t('Click to receive a new password via e-mail.'))));

  $form['links'] = array('#value' => theme('item_list', $items));
  $form['links']['#weight'] = 1;

  return drupal_render($form);
}*/

/**
 * Override or insert variables into all templates.
 *
 * @param $vars
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered (name of the .tpl.php file.)
 */
/* -- Delete this line if you want to use this function
function openabm_preprocess(&$vars, $hook) {
  $vars['sample_variable'] = t('Lorem ipsum.');
}
// */

/**
 * Override or insert variables into the page templates.
 *
 * @param $vars
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("page" in this case.)
 */
/* -- Delete this line if you want to use this function
function openabm_preprocess_page(&$vars, $hook) {
  $vars['sample_variable'] = t('Lorem ipsum.');
}
// */

/**
 * Override or insert variables into the node templates.
 *
 * @param $vars
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("node" in this case.)
 */
/* -- Delete this line if you want to use this function
function openabm_preprocess_node(&$vars, $hook) {
  $vars['sample_variable'] = t('Lorem ipsum.');

  // Optionally, run node-type-specific preprocess functions, like
  // openabm_preprocess_node_page() or openabm_preprocess_node_story().
  $function = __FUNCTION__ . '_' . $vars['node']->type;
  if (function_exists($function)) {
    $function($vars, $hook);
  }
}
// */

/**
 * Override or insert variables into the comment templates.
 *
 * @param $vars
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("comment" in this case.)
 */
/* -- Delete this line if you want to use this function
function openabm_preprocess_comment(&$vars, $hook) {
  $vars['sample_variable'] = t('Lorem ipsum.');
}
// */

/**
 * Override or insert variables into the block templates.
 *
 * @param $vars
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("block" in this case.)
 */
/* -- Delete this line if you want to use this function
function openabm_preprocess_block(&$vars, $hook) {
  $vars['sample_variable'] = t('Lorem ipsum.');
}
// */

/**
 * Override or insert variables into the user login block template.
 *
 * @param $vars
 *   An array of variables to pass to the theme template.
 */
function openabm_preprocess_user_login_block(&$vars) {
  // Modify the text of the submit button
  //$vars['form']['submit']['#value'] = t('Login Now!');
 
  $vars['form_markup'] = drupal_render($vars['form']);
}

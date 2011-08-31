<?php
// $Id: block.inc,v 1.1.2.8 2010/07/20 19:20:47 merlinofchaos Exp $

/**
 * @file
 * Definition of the 'block' panel style.
 */

// Plugin definition
$plugin = array(
  'title' => t('Featured Model block'),
  'description' => t('Display the pane formatted for the Featured Model design.'),
  'render pane' => 'panels_featuredmodel_style_render_pane',
  'weight' => -10,
);

/**
 * Render callback.
 *
 * @ingroup themeable
 */
function openabm_panels_featuredmodel_style_render_pane($content, $pane, $display) {

  $display_id = 'block_1';
  $model_view = views_get_view('model');
  $model_view->set_display($display_id);
  $model_view->pre_execute();
  $model_view->execute();

  $image = $model_view->render_field('field_model_image_fid', 0);
  $teaser = $model_view->render_field('field_model_teaser_value', 0);
  $title = $model_view->render_field('title', 0);

  $output = '<div class="featuredmodel">';

  if (!empty($content->title)):
    $output .= '<h2 class="title"> '. $content->title .' </h2>';
  endif;

  $output .= '<div class="content">';

  $output .= $image;

  $output .= $teaser;

  $output .= '<p class="seemore">more &rarr; '. $title .'</p>';

  $output .= '</div>';
  $output .= '<p class="featuredfooter"></p>'. $edit_links;
  $output .= '</div> <!-- /.block -->';

  return $output;
}


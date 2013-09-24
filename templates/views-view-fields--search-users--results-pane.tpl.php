<?php

/**
 * @file
 * Default simple view template to all the fields as a row.
 *
 * - $view: The view in use.
 * - $fields: an array of $field objects. Each one contains:
 *   - $field->content: The output of the field.
 *   - $field->raw: The raw data for the field, if it exists. This is NOT output safe.
 *   - $field->class: The safe class id to use.
 *   - $field->handler: The Views field handler object controlling this field. Do not use
 *     var_export to dump this object, as it can't handle the recursion.
 *   - $field->inline: Whether or not the field should be inline.
 *   - $field->inline_html: either div or span based on the above flag.
 *   - $field->wrapper_prefix: A complete wrapper containing the inline_html to use.
 *   - $field->wrapper_suffix: The closing tag for the wrapper.
 *   - $field->separator: an optional separator that may appear before a field.
 *   - $field->label: The wrap label text to use.
 *   - $field->label_html: The full HTML of the label to use including
 *     configured element type.
 * - $row: The raw result object from the query, with all data it fetched.
 *
 * @ingroup views_templates
 */
#dpm($fields);

$user_uid = $fields['uid']->content;
$user_url = $fields['name']->content;
$user_name = (isset($fields['profile_main_field_profile2_lastname']->content) ? $fields['profile_main_field_profile2_lastname']->content : $fields['name']->content);
?>
<!-- RealName - Admin/Board/Member badges -->
  <h2>
    <a href="<?php if ($user_name > '') print '/user/' . $user_uid; else print $fields['name']->content; ?>">
      <?php print $user_name; ?>
    </a>
  </h2>

<!-- Role Badges -->

<div class="search-result-info">

<!-- Institution -->
  <?php if (!empty($fields['profile_main_field_profile2_institutions_title']->separator)): ?>
    <?php print $fields['profile_main_field_profile2_institutions_title']->separator; ?>
  <?php endif; ?>

  <?php print $fields['profile_main_field_profile2_institutions_title']->wrapper_prefix; ?>
    <?php print $fields['profile_main_field_profile2_institutions_title']->label_html; ?>
    <?php print $fields['profile_main_field_profile2_institutions_title']->content; ?>
  <?php print $fields['profile_main_field_profile2_institutions_title']->wrapper_suffix; ?>

</div>
 
<!-- Member since: -->

<!-- Research Description -->
  <?php if (!empty($fields['profile_main_field_profile2_research']->separator)): ?>
    <?php print $fields['profile_main_field_profile2_research']->separator; ?>
  <?php endif; ?>

  <?php print $fields['profile_main_field_profile2_research']->wrapper_prefix; ?>
    <?php print $fields['profile_main_field_profile2_research']->label_html; ?>
    <?php print $fields['profile_main_field_profile2_research']->content; ?>
  <?php print $fields['profile_main_field_profile2_research']->wrapper_suffix; ?>

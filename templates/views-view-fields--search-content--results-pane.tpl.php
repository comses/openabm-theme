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

#dpm($fields['field_model_authorlast']);

$type = $fields['type']->content;
$nid = $fields['nid']->content;
$url = $fields['url']->content;
?>

<!-- Title (New) -->
  <?php if (!empty($fields['title']->separator)): ?>
    <?php print $fields['title']->separator; ?>
  <?php endif; ?>

  <?php print $fields['title']->wrapper_prefix; ?>
    <?php print $fields['title']->label_html; ?>
    <h2>
<?php if($type == 'Model') : ?>
      <a href="/model/<?php print $nid ?>">
<?php else : ?>
      <a href="<?php print $url ?>">
<?php endif; ?>
        <?php print $fields['title']->content; ?>
      </a>
    </h2>
  <?php print $fields['title']->wrapper_suffix; ?>

<!-- ABMNews/Announ/SiteUpdate - Created -->
<!-- Biblio - By author - Created -->
<!-- Model - By author - Created -->
<!-- Page - Created -->
<!-- Story - Created -->

<div class="search-result-info">

<!-- Model Image -->
  <?php if (!empty($fields['field_model_image']->separator)): ?>
    <?php print $fields['field_model_image']->separator; ?>
  <?php endif; ?>

  <?php print $fields['field_model_image']->wrapper_prefix; ?>
    <?php print $fields['field_model_image']->label_html; ?>
    <?php print $fields['field_model_image']->content; ?>
  <?php print $fields['field_model_image']->wrapper_suffix; ?>

  <?php if (!empty($fields['type']->separator)): ?>
    <?php print $fields['type']->separator; ?>
  <?php endif; ?>

  <?php print $fields['type']->wrapper_prefix; ?>
    <?php print $fields['type']->label_html; ?>
    <?php print $fields['type']->content; ?>
  <?php print $fields['type']->wrapper_suffix; ?>

  <?php print '<span> - </span>'; ?>

  <?php if (in_array($type, array('Biblio', 'Model', 'Book page', 'Forum topic', 'Model'))) : ?>
    <?php if (!empty($fields['author']->separator)): ?>
      <?php print $fields['author']->separator; ?>
    <?php endif; ?>

    <?php print $fields['author']->wrapper_prefix; ?>
      <?php print $fields['author']->label_html; ?>
      <?php print $fields['author']->content; ?>
    <?php print $fields['author']->wrapper_suffix; ?>

    <?php print '<span> - </span>'; ?>
  <?php endif; ?>

  <?php if (!in_array($type, array('Event', 'FAQ'))) : ?>
    <?php if (!empty($fields['created']->separator)): ?>
      <?php print $fields['created']->separator; ?>
    <?php endif; ?>

    <?php print $fields['created']->wrapper_prefix; ?>
      <?php print $fields['created']->label_html; ?>
      <?php print $fields['created']->content; ?>
    <?php print $fields['created']->wrapper_suffix; ?>
  <?php endif; ?>

<!-- Event : Location : Start : End -->
  <?php if ($type == 'Event') : ?>
    <?php if (!empty($fields['field_location']->separator)): ?>
      <?php print $fields['field_location']->separator; ?>
    <?php endif; ?>

    <?php if (isset($fields['field_location'])) : ?>
      <?php print $fields['field_location']->wrapper_prefix; ?>
        <?php print $fields['field_location']->label_html; ?>
        <?php print $fields['field_location']->content; ?>
      <?php print $fields['field_location']->wrapper_suffix; ?>

      <?php print '<span> - </span>'; ?>
    <?php endif; ?>

    <?php if (!empty($fields['field_eventdate_value']->separator)): ?>
      <?php print $fields['field_eventdate_value']->separator; ?>
    <?php endif; ?>

    <?php print $fields['field_eventdate_value']->wrapper_prefix; ?>
      <?php print $fields['field_eventdate_value']->label_html; ?>
      <?php print $fields['field_eventdate_value']->content; ?>
    <?php print $fields['field_eventdate_value']->wrapper_suffix; ?>

    <?php print '<span> to </span>'; ?>

    <?php if (!empty($fields['field_eventdate_value2']->separator)): ?>
      <?php print $fields['field_eventdate_value2']->separator; ?>
    <?php endif; ?>

    <?php print $fields['field_eventdate_value2']->wrapper_prefix; ?>
      <?php print $fields['field_eventdate_value2']->label_html; ?>
      <?php print $fields['field_eventdate_value2']->content; ?>
    <?php print $fields['field_eventdate_value2']->wrapper_suffix; ?>

  <?php endif; ?>

<!-- Forum topic - By author - Created - Forum -->
  <?php if ($type == 'Forum topic') : ?>
  
  <?php print '<span> - </span>'; ?>

    <?php if (!empty($fields['taxonomy_forums']->separator)): ?>
      <?php print $fields['taxonomy_forums']->separator; ?>
    <?php endif; ?>

    <?php print $fields['taxonomy_forums']->wrapper_prefix; ?>
      <?php print $fields['taxonomy_forums']->label_html; ?>
      <?php print $fields['taxonomy_forums']->content; ?>
    <?php print $fields['taxonomy_forums']->wrapper_suffix; ?>
  <?php endif; ?>

<!-- FAQ: Category -->
  <?php if ($type == 'FAQ') : ?>
    <?php if (!empty($fields['field_faq_category']->separator)): ?>
      <?php print $fields['field_faq_category']->separator; ?>
    <?php endif; ?>

    <?php print $fields['field_faq_category']->wrapper_prefix; ?>
      <?php print $fields['field_faq_category']->label_html; ?>
      <?php print $fields['field_faq_category']->content; ?>
    <?php print $fields['field_faq_category']->wrapper_suffix; ?>
  <?php endif; ?>

<!-- Book page - By author - Bookshelf / Book -->
  <?php if ($type == 'Book page') : ?>
  
  <?php print '<span> - </span>'; ?>

    <?php if (!empty($fields['taxonomy_vocabulary_5']->separator)): ?>
      <?php print $fields['taxonomy_vocabulary_5']->separator; ?>
    <?php endif; ?>

    <?php print $fields['taxonomy_vocabulary_5']->wrapper_prefix; ?>
      <?php print $fields['taxonomy_vocabulary_5']->label_html; ?>
      <?php print $fields['taxonomy_vocabulary_5']->content; ?>
    <?php print $fields['taxonomy_vocabulary_5']->wrapper_suffix; ?>
 
    <?php print '<span> / </span>'; ?>

    <?php if (!empty($fields['book']->separator)): ?>
      <?php print $fields['book']->separator; ?>
    <?php endif; ?>

    <?php print $fields['book']->wrapper_prefix; ?>
      <?php print $fields['book']->label_html; ?>
      <?php print $fields['book']->content; ?>
    <?php print $fields['book']->wrapper_suffix; ?>
  <?php endif; ?>

</div>
<div class="search-result-status">

<!-- Model Replicated -->
  <?php print $fields['field_model_replicated']->wrapper_prefix; ?>
    <?php print $fields['field_model_replicated']->label_html; ?>
    <?php if ($fields['field_model_replicated']->content == "Replicated") print "This is a replication of an earlier model"; ?>
  <?php print $fields['field_model_replicated']->wrapper_suffix; ?>

</div>

<!-- Body -->
  <?php if (!empty($fields['body_value']->separator)): ?>
    <?php print $fields['body_value']->separator; ?>
  <?php endif; ?>

  <?php print $fields['body_value']->wrapper_prefix; ?>
    <?php print $fields['body_value']->label_html; ?>
    <?php print $fields['body_value']->content; ?>
  <?php print $fields['body_value']->wrapper_suffix; ?>

<!-- Comments -->
  <?php #if (!empty($fields['comment_count']->separator)): ?>
    <?php #print $fields['comment_count']->separator; ?>
  <?php #endif; ?>

  <?php #print $fields['comment_count']->wrapper_prefix; ?>
    <?php #print $fields['comment_count']->label_html; ?>
    <?php #print $fields['comment_count']->content; ?>
  <?php #print $fields['comment_count']->wrapper_suffix; ?>



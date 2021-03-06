<?php
/**
 * @file
 * This is the template file for the metadata description for an object.
 *
 * Available variables:
 * - $islandora_object: The Islandora object rendered in this template file
 *
 * @see template_preprocess_islandora_dublin_core_description()
 * @see theme_islandora_dublin_core_description()
 */
?>
<?php if (!empty($description)): ?>
  <div class="islandora-solr-metadata-sidebar">
    <?php if ($combine): ?>
      <h2><?php if (count($description) > 1):
        print (t('Description'));
        else:
                  $desc_array = reset($description);
          if($desc_array['value'][0] != "")
          {
              print ($desc_array['display_label']);
          }   
          ?>  
        <?php endif; ?></h2>
      <?php foreach($description as $value):
       ?>
        <p property="description"><?php print implode('<br/>', $value['value']); ?></p>
      <?php endforeach; ?>
    <?php else: ?>
      <?php foreach ($description as $value):
         if($value['value'] != "")
         {
       ?>
           <h2><?php print $value['display_label']; ?></h2>
        <p><?php print implode('<br/>', $value['value']); ?></p>
      <?php } endforeach; ?>
    <?php endif; ?>
  </div>
<?php endif; ?>

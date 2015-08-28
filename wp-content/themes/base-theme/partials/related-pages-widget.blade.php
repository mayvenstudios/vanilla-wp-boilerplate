<?php 
     $children = wp_list_pages('title_li=&child_of='.$post->ID.'&echo=0&depth=1');
     $siblings = wp_list_pages('title_li=&child_of='.$post->post_parent.'&echo=0&depth=1&exclude='. $post->ID);
     if ($children) { ?>
          <h3>Related Practice Areas</h3>
          <ul class="list">
               <?php echo $children; ?>
          </ul>
     <?php } elseif (!$children && $siblings ) { ?>
          <h3>Related Practice Areas</h3>
          <ul class="list">
               <?php echo $siblings; ?>
          </ul>
     <?php } else { ?>
          <h3>Cases We Handle</h3>
          <ul class="list">
               <?php wp_list_pages('title_li=&child_of=11&depth=1'); ?>   // update with main PA page id
          </ul>
<?php } ?>
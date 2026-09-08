<?php
/** @var array $tags */

?>

<h3>Tag Cloud</h3>
    <div class="tagcloud">

        <?php 
        foreach ($tags as $tag) : ?>
            <a href="#" class="tag-cloud-link"><?php echo $tag['name']; ?> [<?php echo $tag['post_count'];?>]</a>  
        <?php endforeach; ?>
        
    </div>